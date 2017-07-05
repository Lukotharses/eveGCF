<?php decorate_with(false) ?>


<?php 
    $removed= '';
    $svg='<?xml version="1.0" encoding="UTF-8" standalone="no" ?>
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="150mm" height="50mm" viewBox="0 0 900 300" xml:space="preserve">
<desc>Created with Fabric.js 1.7.6</desc>
<defs>
</defs>
<rect x="0" y="0" width="900" height="300" fill="white"></rect>
	<g transform="translate(733.5 146.06)">
		<text font-family="Arial" font-size="24" font-weight="normal" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" >
			<tspan x="-9" y="7.56" fill="rgb(0,0,0)">id</tspan>
		</text>
	</g>
	<g transform="translate(643 159.06)">
		<text font-family="Arial" font-size="24" font-weight="normal" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" >
			<tspan x="-73.5" y="7.56" fill="rgb(0,0,0)">transaction_id</tspan>
		</text>
	</g>
	<g transform="translate(520.5 23.06)">
		<text font-family="Arial" font-size="24" font-weight="normal" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" >
			<tspan x="-28" y="7.56" fill="rgb(0,0,0)">value</tspan>
		</text>
	</g>
	<g transform="translate(488 230.06)">
		<text font-family="Arial" font-size="24" font-weight="normal" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" >
			<tspan x="-61.5" y="7.56" fill="rgb(0,0,0)">price_name</tspan>
		</text>
	</g>
	<g transform="translate(660.5 54.06)">
		<text font-family="Arial" font-size="24" font-weight="normal" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" >
			<tspan x="-38" y="7.56" fill="rgb(0,0,0)">seat_id</tspan>
		</text>
	</g>
	<g transform="translate(732 213.06)">
		<text font-family="Arial" font-size="24" font-weight="normal" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" >
			<tspan x="-135.5" y="7.56" fill="rgb(0,0,0)">Manifestation.happens_at</tspan>
		</text>
	</g>
	<g transform="translate(240 106.06)">
		<text font-family="Arial" font-size="24" font-weight="normal" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" >
			<tspan x="-143.5" y="7.56" fill="rgb(0,0,0)">Manifestation.Location.slug</tspan>
		</text>
	</g>
	<g transform="translate(411 285.06)">
		<text font-family="Arial" font-size="24" font-weight="normal" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" >
			<tspan x="-129.5" y="7.56" fill="rgb(0,0,0)">Manifestation.Event.slug</tspan>
		</text>
	</g>
</svg>';
    echo $svg;
    $option = array('width'=>'150mm', 'heigth'=>'50mm');
    $generator = new liPDFPlugin;
    $generator->setOption('grayscale', true);
    $generator->setOption('page-width', $options['width']);
    $generator->setOption('page-size', 'Custom');
    $sf_response->setContentType('application/pdf');
    $generator->setOption('page-height', $options['height']);
    foreach ( array('bottom', 'left', 'right', 'top') as $prop )
        $generator->setOption('margin-'.$prop, '0');
    $generator->setHtml($svg);
    echo $generator->getPdf();
?>
<!--<script src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/print-tickets.js"></script>-->