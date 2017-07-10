<?php // use_stylesheet('/css/default.css');  ?>
<?php use_stylesheet('/css/event.css'); ?>
<?php // use_stylesheet('/css/manifestation.css');  ?>
<?php use_stylesheet('/css/view.css'); ?>
<?php use_stylesheet('/css/customize/customize.css'); ?>

<?php use_javascript('/sfAdminThemejRollerPlugin/js/jquery-ui.custom.min.js'); ?>
<?php use_helper('CrossAppLink') ?>

<?php //var_dump($events->getRawValue())?>
<div class='sf_admin_batch_actions_choice'>
    <h3>
        Select a type of template
    </h3>
    <select id="tempType" class="selectCustom ui-selectmenu ui-widget ui-state-default ui-selectmenu-dropdown ui-selectmenu-status">
        <option value="">Please choose</option>
        <option value="therm">thermal printed ticket</option>
    </select><br>
</div>
<br style="clear: both;"> 
<div id="selectionText" class="sf_admin_batch_actions_choice">
    
    <h3>
         
    </h3>
    <select id="selecItem" class="selectCustom ui-selectmenu ui-widget ui-state-default ui-selectmenu-dropdown ui-selectmenu-status" disabled>
        <option value=""></option>
    </select>
    <input id='selButton' value="ok" class="butCustom ui-button ui-state-default ui-corner-all" type="submit">
</div>




<script>
    
    var data2link;
    
    $("#tempType").change(function () {
        $('#selectionText h3').text("precise your selection and validate with 'ok'");
        $('#selecItem option').remove();
        var tempType = $("#tempType");
        switch(tempType.val()){
            case "therm":
                data2link = <?php echo json_encode($events->getRawValue()) ?>;
                break;
            default :
                data2link = null;
        }

        if(data2link!=null){
            $('#selecItem').prop("disabled", false);
            for(var key in data2link){
                for(n in data2link[key])
                $('#selecItem').append(new Option(data2link[key][n],n));
            }
        }else {
            $('#selectionText h3').text("Please choose above");
            $('#selectItem').prop("disabled", true).attr("size", 1); 
        }    
        
    });
      
    
</script>