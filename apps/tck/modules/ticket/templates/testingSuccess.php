<?php decorate_with(false) ?>
<?php use_javascript('/js/customize/fabric.min.js');?>
<script type="text/javascript" src="/js/customize/jquery-1.11.2.js"></script>
<script type="text/javascript" src="/js/customize/fabric.min.js"></script>

<div id="section-to-print">
    <canvas id="rebuildCanvas" style="border:1px solid #000000;" width="400" height="300">
     come again !
    </canvas>
</div>
<script>
var myTck = '{"objects":[{"type":"text","originX":"left","originY":"top","left":188,"top":71,"width":64.26,"height":15.82,"fill":"rgb(0,0,0)","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"miter","strokeMiterLimit":10,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","fillRule":"nonzero","globalCompositeOperation":"source-over","transformMatrix":null,"skewX":0,"skewY":0,"text":"hello world","fontSize":14,"fontWeight":"normal","fontFamily":"Times New Roman","fontStyle":"normal","lineHeight":1.16,"underline":false,"overline":false,"linethrough":false,"textAlign":"left","textBackgroundColor":"","charSpacing":0,"styles":null,"name":"trololilol"},{"type":"text","originX":"left","originY":"top","left":183,"top":190,"width":150.2,"height":45.2,"fill":"rgb(0,0,0)","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"miter","strokeMiterLimit":10,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","fillRule":"nonzero","globalCompositeOperation":"source-over","transformMatrix":null,"skewX":0,"skewY":0,"text":"hello two","fontSize":40,"fontWeight":"normal","fontFamily":"Times New Roman","fontStyle":"normal","lineHeight":1.16,"underline":false,"overline":false,"linethrough":false,"textAlign":"left","textBackgroundColor":"","charSpacing":0,"styles":null},{"type":"image","originX":"left","originY":"top","left":0,"top":0,"width":16,"height":11,"fill":"rgb(0,0,0)","stroke":null,"strokeWidth":0,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"miter","strokeMiterLimit":10,"scaleX":0.5,"scaleY":0.5,"angle":0,"flipX":true,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","fillRule":"nonzero","globalCompositeOperation":"source-over","transformMatrix":null,"skewX":0,"skewY":0,"crossOrigin":"","alignX":"none","alignY":"none","meetOrSlice":"meet","src":"http://127.0.0.1/images/breizhoneg.png","filters":[]}],"background":"rgba(0, 0, 0, 0)"}';
var rebuildCanvas = new fabric.StaticCanvas('rebuildCanvas');
rebuildCanvas.loadFromJSON(myTck, function() { rebuildCanvas.renderAll(); },function(o,object){console.log(o+' '+object);});

</script>
<script type="text/javascript" src="/js/print-tickets.js"></script>

