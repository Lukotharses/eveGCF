<?php
/**********************************************************************************
*
*	    This file is part of e-venement.
*
*    e-venement is free software; you can redistribute it and/or modify
*    it under the terms of the GNU General Public License as published by
*    the Free Software Foundation; either version 2 of the License.
*
*    e-venement is distributed in the hope that it will be useful,
*    but WITHOUT ANY WARRANTY; without even the implied warranty of
*    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*    GNU General Public License for more details.
*
*    You should have received a copy of the GNU General Public License
*    along with e-venement; if not, write to the Free Software
*    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*
*    Copyright (c) 2006-2016 Baptiste SIMON <baptiste.simon AT e-glop.net>
*    Copyright (c) 2006-2016 Libre Informatique [http://www.libre-informatique.fr/]
*
***********************************************************************************/
?>
<?php
    $this->getContext()->getConfiguration()->loadHelpers('Date');
    
    $criterias = $this->formatCriterias($request);
    $this->dates = $criterias['dates'];
    
    $params = OptionCsvForm::getDBOptions();
    $this->options = array(
      'ms' => in_array('microsoft',$params['option']),
      'tunnel' => false,
      'noheader' => false,
    );
    
    $numberFormat = new sfNumberFormat($this->getUser()->getCulture());
    
    $this->outstream = 'php://output';
    $this->delimiter = $this->options['ms'] ? ';' : ',';
    $this->enclosure = '"';
    $this->charset   = sfConfig::get('software_internals_charset');
    
    sfConfig::set('sf_escaping_strategy', false);
    $confcsv = sfConfig::get('software_internals_csv'); if ( isset($confcsv['set_charset']) && $confcsv['set_charset'] ) sfConfig::set('sf_charset', $this->options['ms'] ? $this->charset['ms'] : $this->charset['db']);
    
    if ( $this->getContext()->getConfiguration()->getEnvironment() == 'dev' && $request->hasParameter('debug') )
    {
      $this->getResponse()->sendHttpHeaders();
      $this->setLayout('layout');
    }
    else
      sfConfig::set('sf_web_debug', false);
    
    switch ( $request->getParameter('type','cash') ) {
    case 'sales':
      $this->executeSales($request);
      $this->lines = array();
      $this->options['fields'] = array(
        'event', 'manifestation', 'location',
        'price', 'user', 'transaction', 'qty',
        'pit', 'extra-taxes', 'vat', 'tep',
        'account',
      );
      
      foreach ( $this->events as $event )
      foreach ( $event->Manifestations as $manif )
      if ( $nb_tickets <= sfConfig::get('app_ledger_max_tickets',5000) )
      foreach ( $manif->Tickets as $ticket )
      {
        if ( !isset($this->lines[$key = 'e'.$event->id.'m'.$manif->id.'p'.$ticket->price_id.'u'.$ticket->sf_guard_user_id.'t'.$ticket->transaction_id.($ticket->cancelling ? 'a' : '')]) )
          $this->lines[$key] = array(
            'event'         => (string)$event,
            'manifestation' => (string)$manif,
            'location'      => (string)$manif->Location,
            'price'         => (string)$ticket->Price,
            'user'          => (string)$ticket->User,
            'transaction'   => '#'.$ticket->transaction_id,
            'qty'           => 0,
            'pit'           => 0,
            'extra-taxes'   => 0,
            'vat'           => 0,
            'tep'           => 0,
            'account'       => $event->accounting_account,
          );
        $this->lines[$key]['qty'] += $ticket->cancelling ? -1 : 1;
        $this->lines[$key]['pit'] += $ticket->value;
        $this->lines[$key]['extra-taxes'] += $ticket->taxes;
        $this->lines[$key]['tep'] += $tmp = round(($ticket->value+$ticket->taxes) / (1+$ticket->vat),2);
        $this->lines[$key]['vat'] += $ticket->value + $ticket->taxes - $tmp;
      }
      else
      {
        $infos = $manif->getInfosTickets($sf_data->getRaw('options'));
        if ( !isset($this->lines[$key = 'e'.$event->id.'m'.$manif->id]) )
          $this->lines[$key] = array(
            'event'         => (string)$event,
            'manifestation' => (string)$manif,
            'location'      => (string)$manif->Location,
            'price'         => '',
            'user'          => '',
            'transaction'   => '',
            'qty'           => $infos[$manif->id]['qty'],
            'pit'           => $infos[$manif->id]['value'],
            'vat'           => 0,
            'tep'           => $infos[$manif->id]['value'],
            'account'       => $event->accounting_account,
          );
        foreach ( $infos[$manif->id]['vat'] as $rate => $amount )
        {
          $this->lines[$key]['vat'] += $tmp = round($amount,2);
          $this->lines[$key]['tep'] -= $tmp;
        }
      }
      
      // blank separation line
      if ( $this->products->count() )
        $this->lines[] = array();
      
      foreach ( $this->products as $pdt )
      {
        if ( !isset($this->lines[$key = 'PDT '.$pdt->code.' . '.$pdt->name.' . '.$pdt->declination.' . '.$pdt->price_name.' || '.$pdt->sf_guard_user_id.' . '.$pdt->transaction_id]) )
          $this->lines[$key] = array(
            'event'         => (string)$pdt->name,
            'manifestation' => (string)$pdt->declination,
            'location'      => '',
            'price'         => (string)$pdt->price_name,
            'user'          => (string)$pdt->User,
            'transaction'   => '#'.$pdt->transaction_id,
            'qty'           => 0,
            'pit'           => 0,
            'extra-taxes'   => 0,
            'vat'           => 0,
            'tep'           => 0,
            'account'       => '',
          );
        $this->lines[$key]['qty']++;
        $this->lines[$key]['pit'] += $pdt->value;
        $this->lines[$key]['extra-taxes'] += $pdt->shipping_fees;
        $this->lines[$key]['tep'] += $tmp = round($pdt->value/(1+$pdt->vat) + $pdt->shipping_fees/(1+$pdt->shipping_fees_vat),2);
        $this->lines[$key]['vat'] += $pdt->value + $pdt->shipping_fees - $tmp;
      }
      
      if ( $request->hasParameter('with_totals') )
      {
        $total = array('qty' => 0, 'pit' => 0, 'extra-taxes' => 0, 'tep' => 0, 'vat' => 0);
        foreach ( $this->lines as $key => $line )
        foreach ( $line as $row => $value )
        if ( in_array($row, array_keys($total)) )
          $total[$row] += $value;
        $this->lines[] = $total;
      }
      
      $this->getContext()->getConfiguration()->loadHelpers('Number');
      foreach ( $this->lines as $key => $line )
      foreach ( array('pit', 'vat', 'extra-taxes', 'tep') as $field )
        $this->lines[$key][$field] = $numberFormat->format($line[$field], '#.00');
      return 'Sales';
      break;
    case 'lineal':
      require(dirname(__FILE__).'/extract-lineal.php');
      return 'Lineal';
      break;
    default:
      $this->options['fields'] = array(
        'method',
        'value',
        'reference',
        'transaction_id',
        'contact',
        'date',
        'user',
        'account',
      );
      $this->executeCash($request);
      
      $this->lines = array();
      foreach ( $this->methods as $method )
      foreach ( $method->Payments as $payment )
        $this->lines[] = array(
          'method'          => (string) $method,
          'value'           => (string) $payment->weight_value,
          'reference'       => $payment->detail,
          'transaction_id'  => '#'.$payment->transaction_id,
          'contact'         => (string)( $payment->Transaction->professional_id ? $payment->Transaction->Professional : $payment->Transaction->Contact ),
          'date'            => format_date($payment->created_at),
          'user'            => (string)$payment->User,
          'account'         => $method->account,
        );
      
      if ( $request->hasParameter('with_totals') )
      {
        $total = array('value' => 0);
        foreach ( $this->lines as $key => $line )
        foreach ( $line as $row => $value )
        if ( in_array($row, array_keys($total)) )
          $total[$row] += $value;
        $this->lines[] = $total;
      }
      
      foreach ( $this->lines as $key => $line )
      foreach ( array('value',) as $field )
        $this->lines[$key][$field] = $numberFormat->format($line[$field], '#.00');
      return 'Cash';
      break;
    }
