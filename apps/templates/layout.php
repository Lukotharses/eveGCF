<?php use_helper('CrossAppLink') ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php use_javascript('menu') ?>
    <?php use_stylesheet('menu') ?>
    <?php use_stylesheet('/private/main.css') ?>
    <?php use_stylesheet('about') ?>
    <?php if ( sfConfig::get('project_messaging_enable',false) ) use_stylesheet('jappix') ?>
    <?php use_javascript('jquery.datepicker-fr.js') ?>
    
    <?php $module_name = $sf_context->getModuleName() ?>
    <?php $action_name = $sf_context->getActionName() ?>
    <?php $client_about = sfConfig::get('project_about_client') ?>
    <?php $sf_response->setTitle('e-venement - '.$client_about['name'].' - '.($sf_user->isAuthenticated() ? __(ucwords($module_name)) : __('The free ticketting system',null,'menu'))) ?>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="<?php echo image_path('logo-evenement.png') ?>" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body class="<?php echo 'app-'.$sf_context->getConfiguration()->getApplication().' mod-'.$module_name.' action-'.$action_name ?> culture-<?php echo $sf_user->getCulture() ?>">
    <div id="content">
      <?php echo $sf_content ?>
    </div>
    <ul id="menu" class="first">
      <?php
        $cacher = liCacher::create('global/menu?user_id='.$sf_user->getId());
        if (!( $cache = $cacher->useCache() ))
          $cache = $cacher->setData(get_partial('global/menu'))
            ->writeData()
            ->getData();
        echo $cache;
      ?>
    </ul>
    <div id="banner">
      <?php use_helper('CrossAppLink') ?>
      <a href="<?php echo cross_app_url_for('default','sf_guard_signout') ?>" onclick="javascript: window.close()"><?php echo image_tag("close.png",array('alt' => 'close')) ?></a>
      <h1>
        <?php echo image_tag(sfConfig::get('project_museum',false) ? 'logo-emusee.png' : 'logo-evenement.png', array('alt' => '')); ?>
        <?php echo $sf_response->getTitle() ?>
      </h1>
    </div>
    <div id="logo" class="<?php echo sfConfig::get('project_museum',false) ? 'museum' : '' ?>"></div>
    <div id="footer">
      <?php include_partial('global/footer') ?>
      <?php include_partial('global/date') ?>
    </div>
    <div id="transition"><span class="close"></span></div>
    <?php echo include_partial('global/instant_messaging') ?>
    
    <?php if ( sfConfig::get('project_experimentations',false) ): ?>
    <div id="experimentations"><?php echo sfConfig::get('project_experimentations') ?></div>
    <?php endif ?>
    
    <?php if ( !sfConfig::get('project_internals_scroll_lists', sfConfig::get('app_internals_scroll_lists', true)) ): ?>
      <div id="noautoscroll"></div>
    <?php endif ?>
  </body>
</html>
