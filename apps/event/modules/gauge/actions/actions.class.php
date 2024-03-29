<?php

require_once dirname(__FILE__).'/../lib/gaugeGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/gaugeGeneratorHelper.class.php';

/**
 * gauge actions.
 *
 * @package    e-venement
 * @subpackage gauge
 * @author     Baptiste SIMON <baptiste.simon AT e-glop.net>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class gaugeActions extends autoGaugeActions
{
  public function executeState(sfWebRequest $request)
  {
    $gauges = new Doctrine_Collection('Gauge');
    if ( $id = $request->getParameter('id',false) )
    {
      if ( $gauge = Doctrine::getTable('Gauge')->createQuery('g')
        ->andWhere('g.id = ?', $id)
        ->fetchOne() )
        $gauges[] = $gauge;
    }
    if ( $mid = $request->getParameter('manifestation_id',false) )
      $gauges->merge(Doctrine::getTable('Gauge')->createQuery('g')
        ->andWhere('g.manifestation_id = ?', $mid)
        ->execute()
      );
    
    $this->forward404Unless($gauges->count() > 0);
    
    if ( $request->hasParameter('debug') )
    {
      sfConfig::set('sf_web_debug', true);
      $this->setTemplate('debug');
    }
    else
      $this->setTemplate('json');
    
    if ( !$request->hasParameter('json') )
    {
      $this->gauge = $gauges[0];
      return 'Success';
    }
    
    $arr = array(
      'id' => NULL,
      'total' => 0,
      'seats' => 0,
      'free' => 0,
      'booked' => array('printed' => 0, 'ordered' => 0, 'asked' => 0),
    );
    
    // nb of seats
    $ids = array();
    foreach ( $gauges as $gauge )
      $ids[] = $gauge->id;
    $q = Doctrine::getTable('Seat')->createQuery('s')
      ->leftJoin('s.SeatedPlan sp')
      ->leftJoin('sp.Workspaces ws')
      ->leftJoin('sp.Location l')
      ->leftJoin('l.Manifestations m')
      ->leftJoin('m.Gauges g')
      ->andWhereIn('g.id', $ids)
      ->andWhere('g.workspace_id = ws.id')
    ;
    $arr['seats'] = $q->count();
    
    if ( $gauges->count() > 0 && $gauges[0]->Manifestation->Event->museum )
    {
      // nb of entrance
      $entrances = Doctrine::getTable('Ticket')->createQuery('tck')
        ->leftJoin('tck.Controls c')
        ->leftJoin('c.Checkpoint cp')
        ->andWhere('cp.type = ?', 'entrance')
        ->leftJoin('cp.Event e')
        ->leftJoin('e.Manifestations m')
        ->leftJoin('tck.Gauge g')
        ->andWhereIn('g.id', $ids)
        ->count();
      $exits = Doctrine::getTable('Ticket')->createQuery('tck')
        ->leftJoin('tck.Controls c')
        ->leftJoin('c.Checkpoint cp')
        ->andWhere('cp.type = ?', 'exit')
        ->leftJoin('cp.Event e')
        ->leftJoin('e.Manifestations m')
        ->leftJoin('tck.Gauge g')
        ->andWhereIn('g.id', $ids)
        ->count();
      
      foreach ( $gauges as $gauge )
        $arr['total'] += $gauge->value;
      
      if ( $exits - $entrances > 0 )
        $exits = $entrances = 0;
      
      $arr['id']   = $gauges->count() == 1 ? $gauges[0]->id : NULL;
      $arr['free'] = $arr['total'] + $exits - $entrances;
      $arr['booked']['printed'] = $entrances - $exits;
    }
    else
    foreach ( $gauges as $gauge )
    {
      if (!( isset($arr['id']) && $arr['id'] ))
        $arr['id'] = $gauge->id;
      else
        unset($arr['id']);
      
      /*
      // if this gauge is seated
      if ( $gauge->Workspace->seated && $seated_plan = $gauge->Manifestation->Location->getWorkspaceSeatedPlan($gauge->workspace_id) )
        $arr['seats'] += $seated_plan->Seats->count();
      */
      
      $arr['workspace'] = isset($arr['workspace']) ? '' : (string)$gauge->Workspace;
      $arr['total'] += $gauge->value;
      $arr['free'] += $gauge->value - ($gauge->printed + $gauge->ordered + (sfConfig::get('project_tickets_count_demands',false) ? $gauge->asked : 0));
      $arr['booked']['printed'] += $gauge->printed;
      $arr['booked']['ordered'] += $gauge->ordered;
      $arr['booked']['asked']   += sfConfig::get('project_tickets_count_demands',false) ? $gauge->asked : 0;
    }
    
    $this->getContext()->getConfiguration()->loadHelpers('I18N');
    $arr['txt'] = $arr['seats'] > 0
      ? __('Total: %%total%% Seats: %%seats%% Free: %%free%%', array(
        '%%total%%' => $arr['total'],
        '%%seats%%' => $arr['seats'],
        '%%free%%'  => $arr['free'],
      ))
      : __('Total: %%total%% Free: %%free%%', array(
        '%%total%%' => $arr['total'],
        '%%free%%'  => $arr['free'],
      ))
    ;
    if ( !sfConfig::get('project_tickets_count_demands',false) )
      $arr['booked_txt'] = __('Sells: %%printed%% Orders: %%ordered%%', array(
        '%%printed%%' => $arr['booked']['printed'],
        '%%ordered%%' => $arr['booked']['ordered'],
      ));
    else
      $arr['booked_txt'] = __('Sells: %%printed%% Orders: %%ordered%% Demands: %%asked%%', array(
        '%%printed%%' => $arr['booked']['printed'],
        '%%ordered%%' => $arr['booked']['ordered'],
        '%%asked%%'   => $arr['booked']['asked'],
      ));
    
    $this->json = $arr;
  }
  
  public function executeBatchEdit(sfWebRequest $request)
  {
    if ( intval($mid = $request->getParameter('id')).'' != $request->getParameter('id') )
      throw new sfError404Exception();
    
    $q = Doctrine::getTable('Gauge')->createQuery('g')
      ->leftJoin('g.Workspace w')
      ->leftJoin('w.Order o ON o.workspace_id = w.id AND o.sf_guard_user_id = '.intval($this->getUser()->getId()))
      ->andWhere('g.manifestation_id = ?',$mid)
      ->orderBy('g.group_name, o.rank, w.name');
    $this->sort = array('Workspace','');
    
    $this->pager = $this->configuration->getPager('Gauge');
    $this->pager->setQuery($q);
    $this->pager->setPage($request->getParameter('page'));
    $this->pager->init();
    
    $this->hasFilters = $this->getUser()->getAttribute('gauge.list_filters', $this->configuration->getFilterDefaults(), 'admin_module');
  }
  
  public function executeBatchOnline(sfWebRequest $request)
  {
    $this->getContext()->getConfiguration()->loadHelpers('I18N');
    
    $ids = $request->getParameter('ids');

    Doctrine_Query::from('Gauge g')
      ->whereIn('g.id',$ids)
      ->set('online',true)
      ->update()
      ->execute();
    
    // AJOUTER UN FLASH SUR LE USER ET REDIRECT VERS L'INDEX ET C'EST FINI
  }
}
