<?php // use_stylesheet('/css/default.css');  ?>
<?php use_stylesheet('/css/event.css'); ?>
<?php // use_stylesheet('/css/manifestation.css');  ?>
<?php use_stylesheet('/css/view.css'); ?>
<?php use_javascript('/sfAdminThemejRollerPlugin/js/jquery-ui.custom.min.js'); ?>
<?php use_stylesheet('/css/customize/customize.css') ?>
<?php use_javascript('/js/customize/fabric.js') ?>
<?php //use_javascript('/js/customize/jquery-ui.drag.js') ?>



<div id="more">
    
    <div class="buttonGroup ui-state-default" width="100%">
            <button class="fg-button ui-state-default" id="print" type="button">test print</button>
            <button class="fg-button ui-state-default" id="serializer" type="button">save template</button>
            <button class="fg-button ui-state-default" id="back" type="button">back</button>
<!--            TODO-->
<!--            <button class="fg-button ui-state-default" id="reset" display="inline-block;">reset</bouton>-->
    </div>
    <div class="">
        <form id="tckTemplate" method="post" autocomplete="off" action="<?php echo url_for('ticket/submit') ?>" enctype="multipart/form-data">

            <button class="fg-button ui-state-default " id="save" type="button" hidden="true">save</button>
            <!-- TODO set values through PHP -->
            <input type="text" name="controller" id="controller" value="L" hidden>
            <input type="number" name="contrlWidth" id="contrlWidth" value="40" hidden>
            <input type="number" name="event_id" id="event_id" value="43" hidden>
            <input type="text" name="datacustom" id="datacustom" hidden>
            <input type="text" name="description" id="description" hidden>
            <input type="number" name="ticketHeight" id="ticketHeight" value="50" hidden>
            <input type="number" name="ticketWidth" id="ticketWidth" value="150" hidden>
        </form>
    </div>
    <div class="canvas">
        <!-- TODO set values through PHP -->
        <canvas id="tktCanvas" width="" height="" style="">

        </canvas>
    </div>
    <div class ="objectControl">

        <div id="canControls">
            
            <p>Select an object on the template to activate controls below</p>
            
            <div id="text-controls">
                <button type="button" class="btn-object-remove" id="object-remove">
                    Remove
                </button>
                <span id='flashCanvas' style="color: red; display: none;"></span>
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
                    <input value="" min="-100" max="800" step="10" id="text-char-spacing" class="sldr-object-action" data-property="charSpacing" type="range">
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
                <button type="button" class="btn-object-action" id="text-cmd-linethrough" data-property="textDecoration" data-value="line-through" hidden>
                    Linethrough
                </button>
                <button type="button" class="btn-object-action" id="text-cmd-overline" data-property="textDecoration" data-value="overline" hidden>
                    Overline
                </button>
            </div>
        </div>
        
    </div>
   
<input id="testDrag" class="draggable" type="button" value="DragMe!">
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
        The current templating mode is delivered as is. The final user stays responsable of creating a template that respects the laws and regulations concerning his use of tickets.
        Moreover, if the user edits this application's code in any way, it will set free the editor of all legal implications.
        We strongly encourage you to test a template before using it, and to refer to your supplier or any professional in case of doubt.
    </div>
</div>




<script type="text/javascript">
    
    
    //set the size of canvas according to full size of user screen
    var scrWidth = screen.width;
    var tckRatio = $('#ticketHeight').val()/$('#ticketWidth').val();
    //not working, hard coded for now
    var tckWidth = 1000;
    var pxRatio = tckWidth/$('#ticketWidth').val();
    //$('#tktCanvas').attr('width', tckWidth).attr('height', tckWidth*tckRatio);
    
    fabric.devicePixelRatio = 1;
    //instance of canvas with fabric
    var canvas = new fabric.Canvas('tktCanvas');
    canvas.setHeight(tckWidth*tckRatio);
    canvas.setWidth(tckWidth);
    document.getElementById("tktCanvas").height = tckWidth*tckRatio;
    document.getElementById("tktCanvas").width = tckWidth;
    var canvasWidth = canvas.getWidth(),
            canvasHeight = canvas.getHeight();
    canvas.setBackgroundColor('white');
    //too many unpredictable side effects with groups
    //fabric.Group.prototype.hasControls = false;
    canvas.selection = false;
    
    
    var controller = $('#controller').val();
    //if controller, add a virtual rect to bound objects in
    var rectControl;
    var containWidth = tckWidth;
    var containStart = 0,
            controlStart = 0;
            pxCtrlWidth = 0;
    if (controller!==''){
        //setting all the param, taking care of the R L position of the controller
        var pxCtrlWidth = pxRatio*$('#contrlWidth').val();
        containWidth = tckWidth - pxCtrlWidth;
            //starting point of the controller
        
        if (controller=='L'){
            containStart = pxCtrlWidth;
        //only R for now, but add here other cases (upper, down, etc(?))
        }else{
            controlStart = tckWidth - pxCtrlWidth;
        }
        rectControl = {'TL': new fabric.Point(controlStart,0),
                       'BR': new fabric.Point(controlStart+pxCtrlWidth,canvasHeight)
                        };
        var contLine = new fabric.Line([Math.max(controlStart, containStart),0,Math.max(controlStart, containStart),canvasHeight],{
                stroke: 'blue', strokeWidth: 3, opacity:0.3, selectable: false, excludeFromExport: true
        });
        canvas.add(contLine);
    }
    //in any case, add a container
    var rectMain = {'TL': new fabric.Point(containStart,0),
                       'BR': new fabric.Point(containStart+containWidth,canvasHeight)
                    };
    
    var grid = 10;
    // create grid
    for (var i = 0; i < (canvasWidth / grid); i++) {
      canvas.add(new fabric.Line([ i * grid, 0, i * grid, canvasHeight], {  
                              stroke: '#ccc', 
                              selectable: false , 
                              excludeFromExport: true,
                              opacity: 0.6
                            }));
    };
    for (var j = 0; j < (canvasHeight / grid); j++){
        canvas.add(new fabric.Line([ 0, j * grid, canvasWidth, j * grid], { 
                                stroke: '#ccc',
                                selectable: false, 
                                excludeFromExport: true,
                                opacity: 0.6
                            }));
    };

    var TckLabel = fabric.util.createClass(fabric.Text, {
        initialize: function (text2Display, options) {
            this.callSuper('initialize', text2Display, options);
            options && this.set('name', options.name);
            this.set('hasControls', false);
            this.set('hasRotatingPoint', false);
            this.set('lockRotation', true);
            this.set('fontFamily', 'arial');
            this.set('charSpacing', '0');
            this.set('padding', '-3');
            this.set('id', options.name);
            this.set('container', options.container);
        },
        //to factorize when printing is fully tested
        toObject: function () {
            var mustachText = '{{'+this.get('id')+'}}';
            var svgClone = fabric.util.object.clone(this);
            svgClone.set('text',mustachText);
            return fabric.util.object.extend(svgClone.callSuper('toObject'), {name: this.name});
        },
        toSVG: function () {
            var mustachText = '{{'+this.get('id')+'}}';
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

    function addText2Canvas(target, holder='main')
    {
        var targetLabel = target.attr("value");
        var targetName = target.attr("id");
        var lefty = fabric.util.getRandomInt(0, canvas.width);
        var topty = fabric.util.getRandomInt(0, canvas.height);
        var targetFontType = "Arial";
        var targetFontSize = 16;
        var contain = (holder=='main')?rectMain:rectControl;
        var text2add = new TckLabel(targetLabel, {
                                    fontFamily: targetFontType, 
                                    fontSize: targetFontSize, 
                                    left: lefty, 
                                    top: topty, 
                                    name: targetName,
                                    container : contain
                                });
        canvas.add(text2add);
        var counter =0;
        //could be a pb for generalisation, TODO algo review
        var minLeft = (holder==='main')? containStart:controlStart;
        var maxLeft = (holder==='main')? containWidth+containStart-text2add.width 
                                    : controlStart+pxCtrlWidth - text2add.width; 
        while(isOutOfHolder(text2add) || isIntersecting(text2add)){
            text2add.setLeft(fabric.util.getRandomInt(minLeft, maxLeft));
            text2add.setTop(fabric.util.getRandomInt(0, canvas.height));
            text2add.setCoords();
            counter +=1;
            if (counter>1500){
                changeState(target);
                break;
            }
        }
        fabric.util.animateColor('#FFF700', '#eee', 500, {
            onChange: function(val) {
            text2add.set('backgroundColor', val);
            canvas.renderAll();
          },
          onComplete: function(){
              text2add.set('backgroundColor', '');
              canvas.setActiveObject(text2add);
            }
        });
        //console.log(text2add);
        canvas.renderAll();
    }

    //called on document load
    function checkStatePutEvent() {
        $('.addLabelButton.checked').each(function () {
            addText2Canvas($(this));
        });
        $('.addLabelButton').bind('click', function () {
            changeState($(this));
        });
        deselectHandler();
    }

    function butSetState(button){
        var index = getActiveStyle(button.attr("data-property")).indexOf(button.attr("data-value"));
        if(index>-1){
            button.addClass("true");
        }else{
            button.removeClass("true");
        }
    }
    
    function toggleButton(button){
        $(button).toggleClass("true");
    }
    
    function checkChange(inputItem, selectObject, oldProp){
        if (isOutOfHolder(selectObject) || isIntersecting(selectObject)){
            setActiveStyle($(inputItem).attr("data-property"),oldProp);
            fadeInOut("overlapping and 'out of bounds' forbidden", 3000);
            //use select-deselect below if any pb (should work, fingers crossed)
            if ($(inputItem).is(":button"))
                butSetState(inputItem);
            else
                optionSetState(selectObject, inputItem);
//            canvas.discardActiveObject();
//            canvas.setActiveObject(selectObject);
        }
    }
    
    //for button interacting style
    function toggleAction(button){
        toggleButton(button);
        var value = $(button).attr("data-value");
        var actual = getActiveStyle($(button).attr("data-property"));
        console.log(actual);
        var newStyle = ($(button).hasClass("true"))? 
            actual+' '+value : actual.replace(value,'');
        newStyle = newStyle.trim();
        setActiveStyle($(button).attr("data-property"),newStyle);
        checkChange(button,canvas.getActiveObject(),actual);
    }
    
    //for slider or select
    function optionChange(slider){
        var oldValue = getActiveProp($(slider).attr("data-property"));
        setActiveProp($(slider).attr("data-property"),slider.value);
        checkChange(slider, canvas.getActiveObject(), oldValue);
    }
    
    //initialize sliders and selects
    function optionSetState(input){
        $(input).val(getActiveProp($(input).attr("data-property")));
    }
    
    
    //canvas objects
        //events
    canvas.on('object:selected', selectHandler);
    canvas.on('object:moving', movingHandler);
    canvas.on('selection:cleared', deselectHandler);
    canvas.on('mouse:down', mDownHandler);
    canvas.on('mouse:up', mUpHandler);
    
        //event functions handling
        //overlap and canvas bounding
    //var marg = -2;
    function isOutOfHolder(target){
        var placed = target.container;
        return !target.isContainedWithinRect(placed.TL, placed.BR);
        
        
// can be used with canvas without controller
//        if((target.getLeft() < marg) 
//                    || (target.getTop() < marg) 
//                    || (target.getWidth() + target.getLeft() > (canvasWidth - marg))
//                    || (target.getHeight() + target.getTop() > (canvasHeight - marg)))
//            {
//                return true;
//            }else{
//                return false;
//            }    
    }
    
    function isIntersecting(target){
        var allObj = canvas.getObjects();
        var isIt = false;
        for (ind in allObj){
            if (allObj[ind]===target || allObj[ind].get('type')!=="text"){
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
    
    
    
        
    function mDownHandler(){
        var selected = canvas.getActiveObject();
        if (selected){
            goodTop = selected.getTop();
            goodLeft = selected.getLeft();
        };
    }
    
    function mUpHandler(){
        if (canvas.getActiveObject()){
            setActiveProp('backgroundColor','');
        };
    }
    
    function movingHandler() {
        var bgColor = false;
        var targ = canvas.getActiveObject();
        targ.set({
            left: Math.round(targ.left / grid) * grid,
            top: Math.round(targ.top / grid) * grid
        });
        var lastTop = targ.getTop(),
            lastLeft = targ.getLeft();
        targ.setCoords();        
        if(isOutOfHolder(targ)
                    || (isIntersecting(targ))){
                targ.setLeft(goodLeft);
                targ.setTop(goodTop);
                bgColor= true;
        }else{
            goodLeft = lastLeft;
            goodTop = lastTop;
            bgColor = false;
        }
        setActiveProp('backgroundColor',bgColor?'red':'');
    };

            
    function selectHandler() {
        $('#canControls').find("*").prop("disabled", false);
        var $name = canvas.getActiveObject().name;
        if($.contains($('#sf_fieldset_mandatory').get(0),$('input[id="'+$name+'"]').get(0))){
            $('#object-remove').prop("disabled", true);
        }
        $('#canControls .btn-object-action').each(function(i){
            butSetState($(this));
        });
        $('#canControls .sldr-object-action,slct-object-action').each(function(i){
            optionSetState($(this));
        });
    };
    

    function deselectHandler() {
        $('#canControls').find(":button").each(function(){
           $(this).removeClass("true"); 
        });
        $('#canControls').find("*").prop("disabled", true);
    }
    
            //functions changing prop
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

    

    // js event & menus
    //check and put on template the mandatory elements, bind the others to an event
    $(document).on("load", checkStatePutEvent());
    
    function fadeInOut(message, d) {
        $('#flashCanvas').show().text(message);
        $('#flashCanvas').fadeOut(duration=d);
    }
    
    //button canvas interaction
    $('#object-remove').on('click',function(event){
        var $name = canvas.getActiveObject().name;
        // pass if object is mandatory
        // not necessary if the button stays disabled
        if ($.contains($('#sf_fieldset_mandatory').get(0),$('input[id="'+$name+'"]').get(0))){
            fadeInOut("mandatory element cannot be removed", 3000);
        }else{
            changeState($('input[id="'+$name+'"]'));
        }
    });
    
    $('.btn-object-action').on('click', function(event){
        toggleAction(event.target);
    });
    
    //slider moved, selection changed (canvas)
    $('.sldr-object-action, .slct-object-action').on('input', function(event){
        optionChange(event.target);
    });
    
    
    //upper menu buttons
    //test print
    document.getElementById("print").onclick = function () {
        console.log("printing !!!");
    };
    
    //save ticket to base
    document.getElementById("serializer").onclick = function () {
        //myTck = JSON.stringify(canvas);
        //console.log(myTck);
        var myTck = canvas.toSVG();
        console.log(canvas.toObject());
        console.log(canvas.toSVG());
        //document.getElementById("print").disabled = false;
        $('#flash').load(
                $('#tckTemplate').attr('action'),
                {event_id: $('input[name=event_id]').val(), datacustom: myTck, ticketheight: $('input[name=ticketHeight]').val(), ticketwidth: $('input[name=ticketWidth]').val()}

        );
    };
    
    //back
    document.getElementById("back").onclick = function () {
        document.location.href='/tck_dev.php/ticket/customizeMenu/action.html';
    };
    
//    $( window ).resize(function() {
//       canvas.renderAll();
//       console.log('rendering resize');
//    });
    
    //drag&drop
    $('#testDrag.draggable').draggable({ cancel: false, revert: true});
    $('#sf_fieldset_manifestation .draggable').draggable({ cancel: false, 
                                                    revert: "invalid", 
                                                    helper : "clone",
                                                    containment : $('#sf_fieldset_manifestation .draggable').parent()
                                                    
                                                    });
    $('#sf_fieldset_manifestation .droppable').droppable({
                                                drop: function(event, ui) {
                                                ui.draggable.detach().appendTo($(this));
                                                }
                                        });
</script>
