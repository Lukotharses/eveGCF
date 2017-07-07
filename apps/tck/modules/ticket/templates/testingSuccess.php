<?php // use_stylesheet('/css/default.css');  ?>
<?php use_stylesheet('/css/event.css'); ?>
<?php // use_stylesheet('/css/manifestation.css');  ?>
<?php use_stylesheet('/css/view.css'); ?>
<?php use_javascript('/sfAdminThemejRollerPlugin/js/jquery-ui.custom.min.js'); ?>
<?php use_stylesheet('/css/customize/customize.css') ?>
<?php use_javascript('/js/customize/fabric.js') ?>



<div id="more">
    
    <div class="buttonGroup" width="100%">
            <button class="fg-button ui-state-default" id="print" type="button" disabled>test print</button>
            <button class="fg-button ui-state-default " id="serializer" type="button">serializer</button>
<!--            TODO-->
<!--            <button class="fg-button ui-state-default" id="reset" display="inline-block;">reset</bouton>-->
    </div>
    <div class="">
        <form id="tckTemplate" method="post" autocomplete="off" action="<?php echo url_for('ticket/submit') ?>" enctype="multipart/form-data">

            <button class="fg-button ui-state-default " id="save" type="button" hidden="true">save</button>
            <input type="number" name="event_id" value="43" hidden>
            <input type="text" name="datacustom" hidden>
            <input type="text" name="description" hidden>
            <input type="number" name="ticketHeight" value="50" hidden>
            <input type="number" name="ticketWidth" value="150" hidden>
        </form>
    </div>


    <div id="flashCanvas" class="sf_admin_flashes ui-widget">
        <h3 id="flashCanvasText" style="color: red;"></h3>
    </div>
    <div class="canvas">
        <canvas id="tktCanvas" width="1200px" height="400px">

        </canvas>
    </div>
    <div class ="objectControl">

        <div id="canControls">
            <p>Select an object on the template to activate controls below</p>
            <div id="text-controls">
                <textarea rows="3" columns="80" hidden></textarea><br>
                <label for="font-family" style="display:inline-block">Font type:</label>
                <select id="font-family" class="slct-object-action" data-property="fontFamily">
                    <option value="arial">Arial</option>
                    <option value="arial narrow">Arial Narrow</option>
                    <option value="times new roman">Times NR</option>
                    <option value="helvetica" selected="">Helvetica</option>
                    <option value="verdana">Verdana</option>
                    <option value="courier">Courier</option>
                    <option value="impact">Impact</option>
                </select>
                <br>
                <label for="text-align" style="display:none" >Text align:</label>
                <select id="text-align" class="slct-object-action" data-property="textAlign" hidden>
                    <option value="Left">Left</option>
                    <option value="Center">Center</option>
                    <option value="Right">Right</option>
                    <option value="Justify">Justify</option>
                </select>
                <div>
                    <label for="text-font-size">Font size:</label>
                    <input value="" min="6" max="120" step="1" id="text-font-size" class="sldr-object-action" data-property="fontSize" type="range">
                </div>
                <div>
                    <label for="text-line-height" style="display:none">Line height:</label>
                    <input value="" min="1" max="5" step="0.1" id="text-line-height" class="sldr-object-action" data-property="lineHeight" type="range" hidden>
                </div>
                <div>
                    <label for="text-char-spacing">Char spacing:</label>
                    <input value="" min="-200" max="800" step="10" id="text-char-spacing" class="sldr-object-action" data-property="charSpacing" type="range">
                </div>
                <button type="button" class="btn-object-action" id="text-cmd-bold" data-property="fontWeight" data-value="bold">
                    Bold
                </button>
                <button type="button" class="btn-object-action" id="text-cmd-italic" data-property="fontStyle" data-value="italic">
                    Italic
                </button>
                <button type="button" class="btn-object-action" id="text-cmd-underline" data-property="textDecoration" data-value="underline">
                    Underline
                </button>
                <button type="button" class="btn-object-action" id="text-cmd-linethrough" data-property="textDecoration" data-value="line-through">
                    Linethrough
                </button>
                <button type="button" class="btn-object-action" id="text-cmd-overline" data-property="textDecoration" data-value="overline">
                    Overline
                </button>
            </div>
        </div>
    </div>
   

</div>
<div id="sf_admin_container" class="sf_admin_edit ui-widget ui-widget-content ui-corner-all">
    <div class="fg-toolbar ui-widget-header ui-corner-all">
        <h1>Text to add</h1>

    </div>
    <div id="flash" class="sf_admin_flashes ui-widget">

    </div>
    <div id="sf_admin_header">
        To add an element on the template : Choose a category then click on a name.
    </div>

    <div id="sf_admin_content">

        <div class="sf_admin_form">
            <form method="post" autocomplete="off" action="" enctype="multipart/form-data">


                <div class="ui-helper-clearfix"></div>


                <div id="sf_admin_form_tab_menu" class="ui-tabs ui-widget ui-widget-content ui-corner-all ui-tabs-vertical ui-helper-clearfix">
                    <?php include_component('ticket', 'customTckMenu', array('json' => $json)) ?>

                </div>

            </form>
        </div>
    </div>

    <div id="sf_admin_footer">


    </div>
</div>




<script type="text/javascript">
    
    
    
    var canvas = new fabric.Canvas('tktCanvas');
    canvas.setBackgroundColor('white');
    var TckLabel = fabric.util.createClass(fabric.Text, {
        initialize: function (text2Display, options) {
            this.callSuper('initialize', text2Display, options);
            options && this.set('name', options.name);
            this.set('hasControls', false);
            this.set('hasRotatingPoint', false);
            this.set('lockRotation', true);
            this.set('fontFamily', 'arial');
            this.set('id', options.name);
        },
        toObject: function () {
            var mustachText = '{{'+this.get('id')+'}}';
            console.log(mustachText);
            var svgClone = fabric.util.object.clone(this);
            svgClone.set('text',mustachText);
            return fabric.util.object.extend(svgClone.callSuper('toObject'), {name: this.name});
        },
        toSVG: function () {
            var mustachText = '{{'+this.get('id')+'}}';
            console.log(mustachText);
            var svgClone = fabric.util.object.clone(this);
            svgClone.set('text',mustachText);
            return fabric.util.object.extend(svgClone.callSuper('toSVG'));
        }
        
    });


    //SCRIPT FOR THE INTERACTIONS

    //menu
    function changeState(target)
    {
        var checkedClass = "checked";
        target.toggleClass(checkedClass);
        if (target.hasClass(checkedClass)) {
            addText2Canvas(target);
        } else {
            removeTextFromCanvas(target);
        }
    }

    function removeTextFromCanvas(target) {
        var name = target.attr('id');
        var myObj = canvas.getObjects();
        var index = myObj.findIndex(obj => (obj.name === name));
        canvas.remove(myObj[index]);

    }

    function addText2Canvas(target)
    {
        $('#flashCanvasText').text('');
        var targetLabel = target.attr("value");
        var targetName = target.attr("id");
        var lefty = fabric.util.getRandomInt(0, canvas.width);
        var topty = fabric.util.getRandomInt(0, canvas.height);
        var targetFontType = "Arial";
        var targetFontSize = 20;
        var text2add = new TckLabel(targetLabel, {fontFamily: targetFontType, fontSize: targetFontSize, left: lefty, top: topty, name: targetName});
        canvas.add(text2add);
        var counter =0;
        while(isOutOfCanvas(text2add) || isIntersecting(text2add)){
            text2add.setLeft(fabric.util.getRandomInt(0, canvas.width));
            text2add.setTop(fabric.util.getRandomInt(0, canvas.height));
            text2add.setCoords();
            counter +=1;
            if (counter>1500){
                changeState(target);
                $('#flashCanvasText').text('Element impossible to add, please make room');
                break;
            }
            
        }
        fabric.util.animateColor('#FFF700', '#eee', 500, {
            onChange: function(val) {
            text2add.set('backgroundColor', val);
            canvas.renderAll();
          },
          onComplete: function(){
              text2add.set('backgroundColor', '');}
        });
        //console.log(text2add);
        //canvas.renderAll();
    }

    //called on document load
    function checkedEvent() {
        $('.addLabelButton.checked').each(function () {
            addText2Canvas($(this));
        });
        $('.addLabelButton').bind('click', function () {
            changeState($(this));
        });
        deselectHandler();
    }

    function butSetState(object, button){
        var index = getActiveStyle(button.attr("data-property"), object).indexOf(button.attr("data-value"));
        if(index>-1){
            button.addClass("true");
        }else{
            button.removeClass("true");
        }
    }
    
    function toggleButton(button){
        $(button).toggleClass("true");
    }
    
    function toggleAction(button){
        toggleButton(button);
        var value = $(button).attr("data-value");
        var actual = getActiveStyle($(button).attr("data-property"));
        var newStyle = ($(button).hasClass("true"))? 
            actual+' '+value : actual.replace(value,'');
        newStyle.trim();
        setActiveStyle($(button).attr("data-property"),newStyle);
    }
    
    function optionChange(slider){
        setActiveProp($(slider).attr("data-property"),slider.value);
    }
    
    function optionSetState(object, input){
        $(input).val(getActiveProp($(input).attr("data-property")));
    }
    
    
    //canvas objects
        //events
    canvas.on('object:selected', selectHandler);
    canvas.on('selection:cleared', deselectHandler);
       //overlap and canas bounding
       
    function isOutOfCanvas(target){
        if((target.getLeft() < snap) 
                    || (target.getTop() < snap) 
                    || (target.getWidth() + target.getLeft() > (canvasWidth - snap))
                    || (target.getHeight() + target.getTop() > (canvasHeight - snap)))
            {
                return true;
            }else{
                return false;
            }
            
    }
    
    function isIntersecting(target){
        var allObj = canvas.getObjects();
        var isIt = false;
        for (ind in allObj){
            if (allObj[ind]===target){
                continue;
            }else{
                if (target.intersectsWithObject(allObj[ind])){
                    isIt = true;
                    break;
                }
            }
        }
        return isIt;
    }
    
    var goodTop, goodLeft;
    var canvasWidth = canvas.getWidth(),
            canvasHeight = canvas.getHeight();
    var snap = -2;
    
    canvas.on('object:mousedown', function(event){
        if (event.target){
            goodTop = event.target.getTop();
            goodLeft = event.target.getLeft();
            console.log(goodTop+' '+goodLeft);
        };
    });
    
    canvas.on('mouse:up', function(event){
        if (event.target){
            setActiveProp('backgroundColor','');
        };
    });
    
    canvas.on('object:moving', function (event) {
        var bgColor = false;
        var targ = event.target;
        var lastTop = targ.getTop(),
            lastLeft = targ.getLeft();
        targ.setCoords();        
        if(isOutOfCanvas(targ)
                    || (isIntersecting(targ))){
                targ.setLeft(goodLeft);
                targ.setTop(goodTop);
                bgColor= true;
        }else{
            goodLeft = lastLeft;
            goodTop = lastTop;
            $('#flashCanvasTxt').val("");
            bgColor = false;
        }
        setActiveProp('backgroundColor',bgColor?'red':'');
    });

            //functions
    function selectHandler() {
        $('#canControls').find("*").prop("disabled", false);
        $('#canControls').find(":button").each(function(i){
            butSetState(canvas.getActiveObject(), $(this));
            
        });
        $('#canControls').find(":input").each(function(i){
            optionSetState(canvas.getActiveObject(), $(this));
        });
    }
    ;

    function deselectHandler() {
        $('#canControls').find(":button").each(function(){
           $(this).removeClass("true"); 
        });
        $('#canControls').find("*").prop("disabled", true);
    }

    function getActiveStyle(styleName, object) {
        object = object || canvas.getActiveObject();
        if (!object)
            return '';

        return (object.getSelectionStyles && object.isEditing)
                ? (object.getSelectionStyles()[styleName] || '')
                : (object[styleName] || '');
    }
    ;

    function setActiveStyle(styleName, value, object) {
        object = object || canvas.getActiveObject();
        if (!object)
            return;

        if (object.setSelectionStyles && object.isEditing) {
            var style = {};
            style[styleName] = value;
            object.setSelectionStyles(style);
            object.setCoords();
        } else {
            object.set(styleName, value);
        }

        object.setCoords();
        canvas.renderAll();
    }
    ;

    function getActiveProp(name) {
        var object = canvas.getActiveObject();
        if (!object)
            return '';

        return object[name] || '';
    }

    function setActiveProp(name, value) {
        var object = canvas.getActiveObject();
        if (!object)
            return;
        object.set(name, value).setCoords();
        canvas.renderAll();
    }   

    
    //first remove all other js event
    $("#more").off("click");
    $("#more").off("blur");
    $("#more").off("focus");
    //TODO check interest...
    
    //check and put on template the mandatory elements, bind the others to an event
    $(document).on("load", checkedEvent());

    //save ticket to base
    document.getElementById("serializer").onclick = function () {
        //myTck = JSON.stringify(canvas);
        //console.log(myTck);
        var myTck = canvas.toSVG();
        console.log(canvas.toObject());
        console.log(canvas.toSVG());
        document.getElementById("print").disabled = false;
        $('#flash').load(
                $('#tckTemplate').attr('action'),
                {event_id: $('input[name=event_id]').val(), datacustom: myTck, ticketheight: $('input[name=ticketHeight]').val(), ticketwidth: $('input[name=ticketWidth]').val()}

        );
    };
    
    //button for canvas click
    $(".btn-object-action").on('click', function(event){
        toggleAction(event.target);
    });
    
    //slider moved, selection changed
    $(".sldr-object-action, .slct-object-action").on('change', function(event){
        optionChange(event.target);
    });
    
    
    //test print
    document.getElementById("print").onclick = function () {
        console.log("printing !!!");
    };
    
    
</script>