<?php if ( sfConfig::has('app_tickets_control_left') ) use_stylesheet('print-tickets.controlleft.css', '', array('media' => 'all')) ?>
<?php if ( sfConfig::get('app_tickets_specimen',false) ) use_stylesheet('print-tickets-specimen', '', array('media' => 'all')) ?>

<?php $html = '' ?>
<?php
  // adding the stylesheets & the javascripts
  foreach ( $sf_response->getStylesheets() as $css => $opt )
  if ( file_exists($file = $_SERVER['DOCUMENT_ROOT'].preg_replace('/\\?.*$/', '', stylesheet_path($css))) )
  {
    // replace foreign content by base64 data...
    $content = file_get_contents($file);
    preg_match_all('!([^\w])url\([\'\"]?([\w\.-_/]*)[\'\"]?\)!', $content, $matches);
    if ( count($matches) > 0 )
    {
      foreach ( $matches[0] as $i => $match )
      {
        $path = dirname($file).'/'.$matches[2][$i];
        $call = 'url(data:image/'.pathinfo($path, PATHINFO_EXTENSION).';base64,';
        $matches[2][$i] = $matches[1][$i].$call.base64_encode(file_get_contents($path)).')';
      }
      $content = str_replace($matches[0], $matches[2], $content);
    }
    $html .= '<style media="all" type="text/css" data-orig="'.$css.'">'.$content.'</style>'."\n";
  }
  foreach ( $sf_response->getJavascripts() as $js  => $opt )
  if ( file_exists($file = $_SERVER['DOCUMENT_ROOT'].preg_replace('/\\?.*$/', '', javascript_path($js))) )
  {
    $html .= '<script type="text/javascript" data-orig="'.$js.'">'.file_get_contents($file).'</script>'."\n";
  }
?>
<?php
  // getting the HTML representing the tickets
  foreach ( $tickets as $ticket )
    $html .= get_partial('ticket_html',array(
      'ticket' => isset($ticket['ticket']) ? $ticket['ticket'] : $ticket,
      'nb' => isset($ticket['nb']) ? $ticket['nb'] : 1,
      'duplicate' => $duplicate))
    ;
?>
<?php
  $options = array_merge(
    array('width' => '145mm', 'height' => '60mm'),
    sfConfig::get('project_tickets_pdf', array())
  );
  $generator = new liPDFPlugin;
  $generator->setOption('grayscale', true);
  $generator->setOption('page-width', $options['width']);
  $generator->setOption('page-height', $options['height']);
  //$generator->setOption('orientation', 'landscape');
  
  // margins
  foreach ( array('bottom', 'left', 'right', 'top') as $prop )
    $generator->setOption('margin-'.$prop, '0');
  
  $generator->setHtml(get_partial('global/get_tickets_pdf', array('tickets_html' => trim($html))));

  // if no printer has been found, then prints out a PDF
  if ( !$printer )
  {
    if ( $sf_request->hasParameter('debug') )
    {
      $sf_response->setContentType('text/html');
      echo $generator->getHtml();
      return;
    }
    $sf_response->setContentType('application/pdf');
    echo $generator->getPdf();
    return;
  }
  
  include_partial('global/print_direct', array(
    'printer' => $printer,
    'pdf'     => $generator->getPDF(),
  ));
?>
