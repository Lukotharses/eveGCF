<?php include_partial('attendance/filters',array('form' => $form)) ?>
<?php use_helper('Date') ?>
<div class="ui-widget ui-corner-all ui-widget-content">
  <a name="chart-title"></a>
  <div class="ui-widget-header ui-corner-all fg-toolbar">
    <?php include_partial('attendance/filters_buttons') ?>
    <h1><?php echo __('Geographical approach',null,'menu') ?></h1>
  </div>
<?php include_partial('show_criterias') ?>
<?php include_partial('show_header') ?>
<?php include_partial('global/chart_help'); ?>
<?php if ( $sf_user->hasCredential('stats-geo') ): ?>
  <?php include_partial('global/chart_jqplot', array(
          'id'    => 'ego',
          'data'  => cross_app_url_for('stats', 'geo/json'),
          'label' => __('From your localization'),
          'name' => __('Geographical approach',null,'menu'),
          'width' => '100%',
          'class' => 'geo charts-4'
         ))
  ?>
  <?php $client = sfConfig::get('app_about_client', array()) ?>

  <?php if ( isset($client['postalcode']) && is_array($client['postalcode']) ): ?>
    <?php include_partial('global/chart_jqplot', array(
            'id'    => 'metropolis-in',
            'data'  => cross_app_url_for('stats', 'geo/json'),
            'label' => __('Your metropolis'),
            'name' => __('Geographical approach',null,'menu'),
            'width' => '100%',
            'class' => 'geo charts-4'
           ))
    ?>
  <?php endif ?>
  <?php if ( Doctrine::getTable('GeoFrStreetBase')->createQuery('sb')->count() > 0 ): ?>
    <?php include_partial('global/chart_jqplot', array(
            'id'    => 'districts',
            'data'  => cross_app_url_for('stats', 'geo/json'),
            'label' => __('By district'),
            'name' => __('Geographical approach',null,'menu'),
            'width' => '100%',
            'class' => 'geo charts-4'
           ))
    ?>
  <?php endif ?>
  <?php include_partial('global/chart_jqplot', array(
          'id'    => 'postalcodes',
          'data'  => cross_app_url_for('stats', 'geo/json'),
          'label' => __('By postalcode'),
          'name' => __('Geographical approach',null,'menu'),
          'width' => '100%',
          'class' => 'geo charts-4'
         ))
  ?>
  <?php include_partial('global/chart_jqplot', array(
          'id'    => 'departments',
          'data'  => cross_app_url_for('stats', 'geo/json'),
          'label' => __('By department'),
          'name' => __('Geographical approach',null,'menu'),
          'width' => '100%',
          'class' => 'geo charts-4'
         ))
  ?>
  <?php include_partial('global/chart_jqplot', array(
          'id'    => 'regions',
          'data'  => cross_app_url_for('stats', 'geo/json'),
          'label' => __('By region'),
          'name' => __('Geographical approach',null,'menu'),
          'width' => '100%',
          'class' => 'geo charts-4'
         ))
  ?>
  <?php include_partial('global/chart_jqplot', array(
          'id'    => 'countries',
          'data'  => cross_app_url_for('stats', 'geo/json'),
          'label' => __('By country'),
          'name' => __('Geographical approach',null,'menu'),
          'width' => '100%',
          'class' => 'geo charts-4'
          )
        )
  ?>
  <div class="clear"></div>
<?php endif ?>
</div>
<?php use_javascript('/js/jqplot/plugins/jqplot.pieRenderer.js') ?>
<?php use_javascript('/js/jqplot/plugins/jqplot.cursor.js') ?>
<?php use_javascript('stats-geo?'.date('Ymd')) ?>
