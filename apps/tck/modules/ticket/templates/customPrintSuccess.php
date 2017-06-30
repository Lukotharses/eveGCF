<?php decorate_with(false) ?>


<?php 
    $generator = new liPDFPlugin;
    $generator->setOption('grayscale', true);
    $generator->setOption('page-width', $options['width']);
    $sf_response->setContentType('application/pdf');
    $generator->setOption('page-height', $options['height']);
    echo $generator->getPdf();
?>

<script type="text/javascript" src="/js/print-tickets.js"></script>