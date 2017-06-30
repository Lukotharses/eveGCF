<?php // use_stylesheet('/css/default.css'); ?>
<?php use_stylesheet('/css/event.css'); ?>
<?php // use_stylesheet('/css/manifestation.css'); ?>
<?php use_stylesheet('/css/view.css'); ?>
<?php use_javascript('/sfAdminThemejRollerPlugin/js/jquery-ui.custom.min.js'); ?>
<?php use_stylesheet('/css/customize/customize.css') ?>
<?php use_javascript('/js/customize/fabric.js')?>


<div id="sf_admin_container" class="sf_admin_edit ui-widget ui-widget-content ui-corner-all">
    <div id="more">
        <div class="sf_admin_actions_block ui-widget ui-helper-clearfix">
            <div class="sf_admin_form">
            <form method="post" autocomplete="off" action="<?php echo url_for('ticket/submit') ?>" enctype="multipart/form-data">
                    <button class="fg-button ui-state-default " id="serializer" type="button">serializer</button>
                    <button class="fg-button ui-state-default " id="save" type="button" hidden="true">save</button>
                    <input type="number" name="manifestation_id" hidden>
                    <input type="text" name="datacustom" hidden>
                    <input type="text" name="description" hidden>
                    <input type="number" name="ticketheight" hidden>
                    <input type="number" name="ticketwidth" hidden>
            </form>
            </div>
        </div>
        <canvas id="tktCanvas" width="900px" height="300px">
                    Please wait for loading.
                    If nothing happens, kindly update your browser.
        </canvas>
        <div class="sf_admin_actions_block ui-widget ui-helper-clearfix">
                    <button class="fg-button ui-state-default " id="print" type="button" disabled>test print</button>
        </div>  
            
    </div>
    <div class="fg-toolbar ui-widget-header ui-corner-all">
        <h1>Eléments à ajouter</h1>
        
    </div>

    <div id="flash" class="sf_admin_flashes ui-widget">

    </div>

    <div id="sf_admin_header">
    </div>

    <div id="sf_admin_content">

        <div class="sf_admin_form">
            <form method="post" autocomplete="off" action="" enctype="multipart/form-data">


                <div class="ui-helper-clearfix"></div>


                <div id="sf_admin_form_tab_menu" class="ui-tabs ui-widget ui-widget-content ui-corner-all ui-tabs-vertical ui-helper-clearfix">
                    <?php include_component('ticket', 'customTckMenu', array('json'=>$json)) ?>
                    
                </div>

            </form>
        </div>
    </div>
    
    <div id="sf_admin_footer">
        Choisissez une catégorie et cliquez sur un bouton pour ajouter l'élément dans le template 

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
            },
            toObject: function () {
                return fabric.util.object.extend(this.callSuper('toObject'), {name: this.name});
            }
        });
    
    
    //SCRIPT FOR THE INTERACTIONS
    function changeState(target)
    {
        var checkedClass = "checked";
        target.toggleClass(checkedClass);
        if (target.hasClass(checkedClass)){
            addText2Canvas(target);
        }else{
            removeTextFromCanvas(target);
        }
    }
    
    function removeTextFromCanvas(target){
            var name = target.attr('id');
            var myObj = canvas.getObjects();
            var index = myObj.findIndex(obj => (obj.name === name));
            canvas.remove(myObj[index]);

    }
    
    function addText2Canvas(target)
        {            
               var targetLabel = target.attr("value");
            var targetName = target.attr("id");
            var lefty = fabric.util.getRandomInt(0, canvas.width);
            var topty = fabric.util.getRandomInt(0, canvas.height);
            var targetFontType = "Arial";
            var targetFontSize = 24;
            var text2add = new TckLabel(targetLabel, {fontFamily: targetFontType, fontSize: targetFontSize, left: lefty, top: topty, name: targetName});
            canvas.add(text2add);
        }
    
    
    function checkedEvent() {
            $('.addLabelButton.checked').each(function () {
                addText2Canvas($(this));
            });
            $('.addLabelButton').bind('click', function () {
                changeState($(this));
            });
        }
        
 
    $(document).on("load", checkedEvent());
    
    //ticket to base
    document.getElementById("serializer").onclick = function () {
            myTck = JSON.stringify(canvas);
            console.log(myTck);
            console.log(canvas.toSVG());
            document.getElementById("print").disabled = false;
            $('#flash').load(
                $(this).parents('form').attr('action'),
                { manifestation_id : 42 , datacustom : myTck, ticketheight : 1, ticketwidth : 3 }
                //function() { $('#loader').hide(); }
            );
            
            
        };
    
    document.getElementById("print").onclick = function () {
        console.log("printing !!!");
    }
    
</script>