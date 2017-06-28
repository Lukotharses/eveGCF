<?php // use_stylesheet('/css/default.css'); ?>
<?php use_stylesheet('/css/event.css'); ?>
<?php // use_stylesheet('/css/manifestation.css'); ?>
<?php use_stylesheet('/css/view.css'); ?>
<?php use_javascript('/sfAdminThemejRollerPlugin/js/jquery-ui.custom.min.js'); ?>
<?php use_stylesheet('css/customize/customize.css') ?>
<?php use_javascript('js/customize/fabric.min.js')?>


<div id="sf_admin_container" class="sf_admin_edit ui-widget ui-widget-content ui-corner-all">
    <div id="more">
        <div class="sf_admin_actions_block ui-widget ui-helper-clearfix">
                    <button class="fg-button ui-state-default " id="serializer" type="button">serializer</button>
                    <button class="btn btn-success" id="resizer" type="button">resizer</button>
                </div>
        <canvas id="tktCanvas" width="500px" height="500px" style="border: 1px solid #000000; margin: 0 auto; background: white;">
                    Please wait for loading.
                    If nothing happens, kindly update your browser.
                </canvas>
                
        </div>
    <div class="fg-toolbar ui-widget-header ui-corner-all">
        <h1>Nouvel événement</h1>
    </div>

    <div class="sf_admin_flashes ui-widget">

    </div>

    <div id="sf_admin_header">
    </div>

    <div id="sf_admin_content">

        <div class="sf_admin_form">
            <form method="post" autocomplete="off" action="/event.php/event.html" enctype="multipart/form-data">
                <div class="sf_admin_actions_block ui-widget">
                    <ul class="sf_admin_actions_form">
                        <li class="sf_admin_action_list"><a class="fg-button ui-state-default fg-button-icon-left" href="/event.php/event.html"><span class="ui-icon ui-icon-arrowreturnthick-1-w"></span>Liste</a></li>  <li class="sf_admin_action_save"><button type="submit" class="fg-button ui-state-default fg-button-icon-left"><span class="ui-icon ui-icon-circle-check"></span>Enregistrer</button></li>  <li class="sf_admin_action_save_and_add"><button type="submit" name="_save_and_add" class="fg-button ui-state-default fg-button-icon-left"><span class="ui-icon ui-icon-circle-plus"></span>Enregistrer et ajouter</button></li></ul>
                </div>

                <div class="ui-helper-clearfix"></div>

                <input name="event[id]" id="event_id" type="hidden"><input name="event[museum]" id="event_museum" type="hidden"><input name="event[Manifestations][0][id]" id="event_Manifestations_0_id" type="hidden"><input name="event[Manifestations][0][participants_list]" value="" id="event_Manifestations_0_participants_list" type="hidden"><input name="event[Manifestations][1][id]" id="event_Manifestations_1_id" type="hidden"><input name="event[Manifestations][1][participants_list]" value="" id="event_Manifestations_1_participants_list" type="hidden"><input name="event[Picture][id]" id="event_Picture_id" type="hidden"><input name="event[_csrf_token]" value="e12f0692231193e6a7221c857d57923b" id="event__csrf_token" type="hidden">




                <div id="sf_admin_form_tab_menu" class="ui-tabs ui-widget ui-widget-content ui-corner-all ui-tabs-vertical ui-helper-clearfix">
                    <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
                        <li class="ui-state-default ui-tabs-active ui-state-active ui-corner-all" role="tab" tabindex="0" aria-controls="sf_fieldset_general" aria-labelledby="ui-id-1" aria-selected="true"><a href="#sf_fieldset_general" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-1">Général</a></li>
                        <li class="ui-state-default ui-corner-all" role="tab" tabindex="-1" aria-controls="sf_fieldset_details" aria-labelledby="ui-id-2" aria-selected="false"><a href="#sf_fieldset_details" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-2">Détails</a></li>
                        <li class="ui-state-default ui-corner-all" role="tab" tabindex="-1" aria-controls="sf_fieldset_manifestations" aria-labelledby="ui-id-3" aria-selected="false"><a href="#sf_fieldset_manifestations" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-3">Manifestations</a></li>
                        <li class="ui-state-default ui-corner-all" role="tab" tabindex="-1" aria-controls="sf_fieldset_web_content" aria-labelledby="ui-id-4" aria-selected="false"><a href="#sf_fieldset_web_content" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-4">Contenu web</a></li>
                    </ul>

                    <div id="sf_fieldset_general" class="ui-corner-all ui-tabs-panel ui-widget-content ui-corner-bottom" aria-labelledby="ui-id-1" role="tabpanel" aria-expanded="true" aria-hidden="false">


                        <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_name">
                            <label for="event_fr_name">Nom</label>    <div class="label ui-helper-clearfix">

                            </div>

                            <div class="widget culture-fr" title="Français">
                                <textarea rows="1" cols="58" name="event[fr][name]" id="event_fr_name"></textarea>            <span class="culture">fr</span>
                                <span class="lang culture-fr">Français</span>

                            </div>
                            <div class="widget culture-en" title="English">
                                <textarea rows="1" cols="58" name="event[en][name]" id="event_en_name"></textarea>            <span class="culture">en</span>
                                <span class="lang culture-en">English</span>

                            </div>
                            <div class="widget culture-br" title="Brezhoneg">
                                <textarea rows="1" cols="58" name="event[br][name]" id="event_br_name"></textarea>            <span class="culture">br</span>
                                <span class="lang culture-br">Brezhoneg</span>

                            </div>
                        </div>


                        <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_short_name">
                            <label for="event_fr_short_name">Petit nom</label>    <div class="label ui-helper-clearfix">

                            </div>

                            <div class="widget culture-fr" title="Français">
                                <input name="event[fr][short_name]" id="event_fr_short_name" type="text">            <span class="culture">fr</span>
                                <span class="lang culture-fr">Français</span>

                            </div>
                            <div class="widget culture-en" title="English">
                                <input name="event[en][short_name]" id="event_en_short_name" type="text">            <span class="culture">en</span>
                                <span class="lang culture-en">English</span>

                            </div>
                            <div class="widget culture-br" title="Brezhoneg">
                                <input name="event[br][short_name]" id="event_br_short_name" type="text">            <span class="culture">br</span>
                                <span class="lang culture-br">Brezhoneg</span>

                            </div>
                        </div>


                        <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_subtitle">
                            <label for="event_fr_subtitle">Sous-titre</label>    <div class="label ui-helper-clearfix">

                            </div>

                            <div class="widget culture-fr" title="Français">
                                <input name="event[fr][subtitle]" id="event_fr_subtitle" type="text">            <span class="culture">fr</span>
                                <span class="lang culture-fr">Français</span>

                            </div>
                            <div class="widget culture-en" title="English">
                                <input name="event[en][subtitle]" id="event_en_subtitle" type="text">            <span class="culture">en</span>
                                <span class="lang culture-en">English</span>

                            </div>
                            <div class="widget culture-br" title="Brezhoneg">
                                <input name="event[br][subtitle]" id="event_br_subtitle" type="text">            <span class="culture">br</span>
                                <span class="lang culture-br">Brezhoneg</span>

                            </div>
                        </div>


                        <div class="sf_admin_form_row sf_admin_foreignkey sf_admin_form_field_meta_event_id">
                            <label for="event_meta_event_id">Méta-événement</label>    <div class="label ui-helper-clearfix">

                            </div>

                            <div class="widget ">
                                <select name="event[meta_event_id]" id="event_meta_event_id">
                                    <option value="" selected="selected"></option>
                                    <option value="16">boutique</option>
                                    <option value="17">CIRQUE JULES VERNES SAISON 2017</option>
                                    <option value="12">Convention UNAPEI 2015-2016</option>
                                    <option value="6">Décentralisation 2014/2015</option>
                                    <option value="10">Décentralisation 2015/2016</option>
                                    <option value="11">Exposition Musée Beaux Arts</option>
                                    <option value="2">Festival Les Petits Asticots 2014/2015</option>
                                    <option value="9">Festival Les Petits Asticots 2015/2016</option>
                                    <option value="1">Saison</option>
                                    <option value="13">Saison 2016/2017</option>
                                    <option value="4">Saison Cultur(r)al 2013/2014</option>
                                    <option value="5">Saison Cultur(r)al 2014/2015</option>
                                    <option value="8">Saison Cultur(r)al 2016/2017</option>
                                    <option value="3">Saison Type</option>
                                    <option value="7">Scolaires 2014/2015</option>
                                    <option value="15">Vendée Space 16-17</option>
                                    <option value="14">Visite MUSEE</option>
                                </select>        
                            </div>
                        </div>


                        <div class="sf_admin_form_row sf_admin_foreignkey sf_admin_form_field_event_category_id">
                            <label for="event_event_category_id">Catégorie</label>    <div class="label ui-helper-clearfix">

                            </div>

                            <div class="widget ">
                                <select name="event[event_category_id]" id="event_event_category_id">
                                    <option value="" selected="selected"></option>
                                    <option value="5">Cirque</option>
                                    <option value="14">Clown</option>
                                    <option value="18">Concert</option>
                                    <option value="6">Danse</option>
                                    <option value="4">Exposition</option>
                                    <option value="15">Exposition peinture</option>
                                    <option value="16">Exposition sculpture</option>
                                    <option value="11">Humour</option>
                                    <option value="13">Illusion</option>
                                    <option value="12">Jazz</option>
                                    <option value="8">Jeune public</option>
                                    <option value="1">Musique classique et lyrique</option>
                                    <option value="7">Musiques actuelles</option>
                                    <option value="10">Pluridisciplinaire</option>
                                    <option value="9">Spectacle famille</option>
                                    <option value="17">Sport</option>
                                    <option value="2">Théâtre</option>
                                </select>        
                            </div>
                        </div>


                        <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_event_category_description">
                            <label for="event_event_category_description">Catégorie précise</label>    <div class="label ui-helper-clearfix">

                            </div>

                            <div class="widget ">
                                <input name="event[event_category_description]" id="event_event_category_description" type="text">        
                            </div>
                        </div>


                        <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_companies_list">
                            <label for="event_companies_list">Compagnies</label>    <div class="label ui-helper-clearfix">

                            </div>

                            <div class="widget ">
                                <div class="open_list">
                                    <div style="float: left">
                                        <div class="open_list_label">Non-associés</div>
                                        <input class="open_list_source ac_input" name="source_event[companies_list]" value="" id="source_event_companies_list" autocomplete="off" type="text">
                                    </div>
                                    <div style="float: left; margin-top: 2em">
                                        <a class="open_list_add"><img alt="add" src="http://127.0.0.1/sfFormExtraPlugin/images/next.png"></a>
                                        <br>
                                        <a class="open_list_remove"><img alt="del" src="http://127.0.0.1/sfFormExtraPlugin/images/previous.png"></a>
                                    </div>
                                    <div style="float: left">
                                        <div class="open_list_label">Associés</div>
                                        <select class="open_list_selected" name="event[companies_list][]" multiple="multiple" id="event_companies_list">

                                        </select>
                                    </div>
                                    <br style="clear: both">
                                    <script type="text/javascript">
                                        var EventCompaniesListHandler = new CxOpenSelect('open_list', 'source_event_companies_list', 'event_companies_list', '/rp.php/organism/ajax/action.html', {}, CxOpenListOptionFactory.make);
                                    </script>
                                </div>        
                            </div>
                        </div>
                    </div>
                    <div id="sf_fieldset_details" class="ui-corner-all ui-tabs-panel ui-widget-content ui-corner-bottom" aria-labelledby="ui-id-2" role="tabpanel" style="display: none;" aria-expanded="false" aria-hidden="true">


                        <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_duration">
                            <label for="event_duration">Durée</label>    <div class="label ui-helper-clearfix">

                            </div>

                            <div class="widget ">
                                <input name="event[duration]" id="event_duration" type="text">        
                            </div>
                        </div>


                        <div class="sf_admin_form_row sf_admin_boolean sf_admin_form_field_display_by_default">
                            <label for="event_display_by_default">Affiché en billetterie</label>    <div class="label ui-helper-clearfix">

                            </div>

                            <div class="widget ">
                                <input name="event[display_by_default]" checked="checked" id="event_display_by_default" type="checkbox">        
                            </div>
                        </div>


                        <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_accounting_account">
                            <label for="event_accounting_account">Compte</label>    <div class="label ui-helper-clearfix">

                                <div class="help">
                                    <span class="ui-icon ui-icon-help floatleft"></span>
                                    Pour le service comptable        </div>
                            </div>

                            <div class="widget ">
                                <input name="event[accounting_account]" id="event_accounting_account" type="text">        
                            </div>
                        </div>


                        <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_age_min">
                            <label for="event_age_min">Âge min</label>    <div class="label ui-helper-clearfix">

                            </div>

                            <div class="widget ">
                                <input name="event[age_min]" id="event_age_min" type="text">        
                            </div>
                        </div>


                        <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_age_max">
                            <label for="event_age_max">Âge maxi</label>    <div class="label ui-helper-clearfix">

                            </div>

                            <div class="widget ">
                                <input name="event[age_max]" id="event_age_max" type="text">        
                            </div>
                        </div>


                        <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_description">
                            <label for="event_fr_description">Description</label>    <div class="label ui-helper-clearfix">

                            </div>

                            <div class="widget culture-fr" title="Français">
                                <div id="mce_27" class="mce-tinymce mce-container mce-panel" hidefocus="1" tabindex="-1" style="visibility: hidden; border-width: 1px; width: 425px;"><div id="mce_27-body" class="mce-container-body mce-stack-layout"><div id="mce_28" class="mce-container mce-menubar mce-toolbar mce-first mce-stack-layout-item" role="menubar" style="border-width: 0px 0px 1px;"><div id="mce_28-body" class="mce-container-body mce-flow-layout"><div id="mce_29" class="mce-widget mce-btn mce-menubtn mce-first mce-flow-layout-item" tabindex="-1" role="menuitem" aria-haspopup="true"><button id="mce_29-open" role="presentation" type="button" tabindex="-1"><span>Fichier</span> <i class="mce-caret"></i></button></div><div id="mce_30" class="mce-widget mce-btn mce-menubtn mce-flow-layout-item" tabindex="-1" role="menuitem" aria-haspopup="true"><button id="mce_30-open" role="presentation" type="button" tabindex="-1"><span>Editer</span> <i class="mce-caret"></i></button></div><div id="mce_31" class="mce-widget mce-btn mce-menubtn mce-flow-layout-item" tabindex="-1" role="menuitem" aria-haspopup="true"><button id="mce_31-open" role="presentation" type="button" tabindex="-1"><span>Insérer</span> <i class="mce-caret"></i></button></div><div id="mce_32" class="mce-widget mce-btn mce-menubtn mce-flow-layout-item" tabindex="-1" role="menuitem" aria-haspopup="true"><button id="mce_32-open" role="presentation" type="button" tabindex="-1"><span>Voir</span> <i class="mce-caret"></i></button></div><div id="mce_33" class="mce-widget mce-btn mce-menubtn mce-last mce-flow-layout-item" tabindex="-1" role="menuitem" aria-haspopup="true"><button id="mce_33-open" role="presentation" type="button" tabindex="-1"><span>Format</span> <i class="mce-caret"></i></button></div></div></div><div id="mce_34" class="mce-container mce-panel mce-stack-layout-item" hidefocus="1" tabindex="-1"><div id="mce_34-body" class="mce-container-body mce-stack-layout"><div id="mce_35" class="mce-container mce-toolbar mce-first mce-stack-layout-item" role="toolbar"><div id="mce_35-body" class="mce-container-body mce-flow-layout"><div id="mce_36" class="mce-container mce-first mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_36-body"><div id="mce_6" class="mce-widget mce-btn mce-menubtn mce-fixed-width mce-listbox mce-first" tabindex="-1" role="button" aria-haspopup="true"><button id="mce_6-open" role="presentation" type="button" tabindex="-1"><span>Paragraph</span> <i class="mce-caret"></i></button></div><div id="mce_7" class="mce-widget mce-btn mce-menubtn mce-fixed-width mce-listbox" tabindex="-1" role="button" aria-labeledby="mce_7" aria-label="Font Family" aria-haspopup="true"><button id="mce_7-open" role="presentation" type="button" tabindex="-1"><span>Font Family</span> <i class="mce-caret"></i></button></div><div id="mce_8" class="mce-widget mce-btn mce-menubtn mce-fixed-width mce-listbox mce-last" tabindex="-1" role="button" aria-labeledby="mce_8" aria-label="Font Sizes" aria-haspopup="true"><button id="mce_8-open" role="presentation" type="button" tabindex="-1"><span>Font Sizes</span> <i class="mce-caret"></i></button></div></div></div><div id="mce_37" class="mce-container mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_37-body"><div id="mce_9" class="mce-widget mce-btn mce-first" tabindex="-1" role="button" aria-labeledby="mce_9" aria-label="Insert/edit link"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-link"></i></button></div><div id="mce_10" class="mce-widget mce-btn mce-last" tabindex="-1" role="button" aria-labeledby="mce_10" aria-label="Insert/edit image"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-image"></i></button></div></div></div><div id="mce_38" class="mce-container mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_38-body"><div id="mce_11" class="mce-widget mce-btn mce-colorbutton mce-first" role="button" aria-labeledby="mce_11" aria-label="Text color"><button role="presentation" hidefocus="" type="button" tabindex="-1"><i class="mce-ico mce-i-forecolor"></i><span id="mce_11-preview" class="mce-preview"></span></button><button type="button" class="mce-open" hidefocus="" tabindex="-1"> <i class="mce-caret"></i></button></div><div id="mce_12" class="mce-widget mce-btn mce-colorbutton mce-last" role="button" aria-labeledby="mce_12" aria-label="Background color"><button role="presentation" hidefocus="" type="button" tabindex="-1"><i class="mce-ico mce-i-backcolor"></i><span id="mce_12-preview" class="mce-preview"></span></button><button type="button" class="mce-open" hidefocus="" tabindex="-1"> <i class="mce-caret"></i></button></div></div></div><div id="mce_39" class="mce-container mce-last mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_39-body"><div id="mce_13" class="mce-widget mce-btn mce-first mce-disabled" tabindex="-1" role="button" aria-labeledby="mce_13" aria-label="Undo" aria-disabled="true"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-undo"></i></button></div><div id="mce_14" class="mce-widget mce-btn mce-last mce-disabled" tabindex="-1" role="button" aria-labeledby="mce_14" aria-label="Redo" aria-disabled="true"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-redo"></i></button></div></div></div></div></div><div id="mce_40" class="mce-container mce-toolbar mce-last mce-stack-layout-item" role="toolbar"><div id="mce_40-body" class="mce-container-body mce-flow-layout"><div id="mce_41" class="mce-container mce-first mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_41-body"><div id="mce_15" class="mce-widget mce-btn mce-first" tabindex="-1" role="button" aria-labeledby="mce_15" aria-label="Bold"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-bold"></i></button></div><div id="mce_16" class="mce-widget mce-btn" tabindex="-1" role="button" aria-labeledby="mce_16" aria-label="Underline"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-underline"></i></button></div><div id="mce_17" class="mce-widget mce-btn mce-last" tabindex="-1" role="button" aria-labeledby="mce_17" aria-label="Italic"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-italic"></i></button></div></div></div><div id="mce_42" class="mce-container mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_42-body"><div id="mce_18" class="mce-widget mce-btn mce-first" tabindex="-1" role="button" aria-labeledby="mce_18" aria-label="Align left"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignleft"></i></button></div><div id="mce_19" class="mce-widget mce-btn" tabindex="-1" role="button" aria-labeledby="mce_19" aria-label="Align center"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-aligncenter"></i></button></div><div id="mce_20" class="mce-widget mce-btn" tabindex="-1" role="button" aria-labeledby="mce_20" aria-label="Align right"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignright"></i></button></div><div id="mce_21" class="mce-widget mce-btn mce-last" tabindex="-1" role="button" aria-labeledby="mce_21" aria-label="Justify"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignjustify"></i></button></div></div></div><div id="mce_43" class="mce-container mce-last mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_43-body"><div id="mce_22" class="mce-widget mce-btn mce-first" tabindex="-1" role="button" aria-labeledby="mce_22" aria-label="Bullet list"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-bullist"></i></button></div><div id="mce_23" class="mce-widget mce-btn" tabindex="-1" role="button" aria-labeledby="mce_23" aria-label="Numbered list"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-numlist"></i></button></div><div id="mce_24" class="mce-widget mce-btn" tabindex="-1" role="button" aria-labeledby="mce_24" aria-label="Decrease indent"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-outdent"></i></button></div><div id="mce_25" class="mce-widget mce-btn" tabindex="-1" role="button" aria-labeledby="mce_25" aria-label="Increase indent"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-indent"></i></button></div><div id="mce_26" class="mce-widget mce-btn mce-last" tabindex="-1" role="button" aria-labeledby="mce_26" aria-label="Toggle blockquote"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-blockquote"></i></button></div></div></div></div></div></div></div><div id="mce_44" class="mce-edit-area mce-container mce-panel mce-stack-layout-item" hidefocus="1" tabindex="-1" style="border-width: 1px 0px 0px;"><iframe id="event_fr_description_ifr" src="javascript:&quot;&quot;" allowtransparency="true" title="Zone Texte Riche. Appuyer sur ALT-F9 pour le menu. Appuyer sur ALT-F10 pour la barre d'outils. Appuyer sur ALT-0 pour de l'aide." style="width: 100%; height: 300px; display: block;" frameborder="0"></iframe></div><div id="mce_45" class="mce-statusbar mce-container mce-panel mce-last mce-stack-layout-item" hidefocus="1" tabindex="-1" style="border-width: 1px 0px 0px;"><div id="mce_45-body" class="mce-container-body mce-flow-layout"><div id="mce_46" class="mce-path"><div class="mce-path-item">&nbsp;</div></div><div id="mce_47" class="mce-last mce-flow-layout-item mce-resizehandle"><i class="mce-ico mce-i-resize"></i></div></div></div></div></div><textarea name="event[fr][description]" id="event_fr_description" style="display: none;" aria-hidden="true"></textarea><script type="text/javascript">
                                    tinyMCE.init({
                                        mode: "exact",
                                        elements: "event_fr_description",
                                        theme: "modern",
                                        width: "425px",
                                        height: "300px",
                                        theme_advanced_toolbar_location: "top",
                                        theme_advanced_toolbar_align: "left",
                                        theme_advanced_statusbar_location: "bottom",
                                        theme_advanced_resizing: true
                                        ,
                                        extended_valid_elements: "html,head,body,hr[class|width|size|noshade],iframe[src|width|height|name|align],style",
                                        convert_urls: false,
                                        urlconvertor_callback: "email_urlconvertor",
                                        paste_as_text: false,
                                        plugins: "textcolor link image media",
                                        toolbar1: "formatselect fontselect fontsizeselect | link image | forecolor backcolor | undo redo",
                                        toolbar2: "bold underline italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent blockquote",
                                        force_br_newlines: false,
                                        force_p_newlines: false,
                                        forced_root_block: "",
                                        fontsize_formats: "4pt 5pt 6pt 8pt 10pt 12pt 14pt 18pt 24pt 36pt",
                                        language: "fr"
                                    });
                                </script>            <span class="culture">fr</span>
                                <span class="lang culture-fr">Français</span>

                            </div>
                            <div class="widget culture-en" title="English">
                                <div id="mce_69" class="mce-tinymce mce-container mce-panel" hidefocus="1" tabindex="-1" style="visibility: hidden; border-width: 1px; width: 425px;"><div id="mce_69-body" class="mce-container-body mce-stack-layout"><div id="mce_70" class="mce-container mce-menubar mce-toolbar mce-first mce-stack-layout-item" role="menubar" style="border-width: 0px 0px 1px;"><div id="mce_70-body" class="mce-container-body mce-flow-layout"><div id="mce_71" class="mce-widget mce-btn mce-menubtn mce-first mce-flow-layout-item" tabindex="-1" role="menuitem" aria-haspopup="true"><button id="mce_71-open" role="presentation" type="button" tabindex="-1"><span>Fichier</span> <i class="mce-caret"></i></button></div><div id="mce_72" class="mce-widget mce-btn mce-menubtn mce-flow-layout-item" tabindex="-1" role="menuitem" aria-haspopup="true"><button id="mce_72-open" role="presentation" type="button" tabindex="-1"><span>Editer</span> <i class="mce-caret"></i></button></div><div id="mce_73" class="mce-widget mce-btn mce-menubtn mce-flow-layout-item" tabindex="-1" role="menuitem" aria-haspopup="true"><button id="mce_73-open" role="presentation" type="button" tabindex="-1"><span>Insérer</span> <i class="mce-caret"></i></button></div><div id="mce_74" class="mce-widget mce-btn mce-menubtn mce-flow-layout-item" tabindex="-1" role="menuitem" aria-haspopup="true"><button id="mce_74-open" role="presentation" type="button" tabindex="-1"><span>Voir</span> <i class="mce-caret"></i></button></div><div id="mce_75" class="mce-widget mce-btn mce-menubtn mce-last mce-flow-layout-item" tabindex="-1" role="menuitem" aria-haspopup="true"><button id="mce_75-open" role="presentation" type="button" tabindex="-1"><span>Format</span> <i class="mce-caret"></i></button></div></div></div><div id="mce_76" class="mce-container mce-panel mce-stack-layout-item" hidefocus="1" tabindex="-1"><div id="mce_76-body" class="mce-container-body mce-stack-layout"><div id="mce_77" class="mce-container mce-toolbar mce-first mce-stack-layout-item" role="toolbar"><div id="mce_77-body" class="mce-container-body mce-flow-layout"><div id="mce_78" class="mce-container mce-first mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_78-body"><div id="mce_48" class="mce-widget mce-btn mce-menubtn mce-fixed-width mce-listbox mce-first" tabindex="-1" role="button" aria-haspopup="true"><button id="mce_48-open" role="presentation" type="button" tabindex="-1"><span>Paragraph</span> <i class="mce-caret"></i></button></div><div id="mce_49" class="mce-widget mce-btn mce-menubtn mce-fixed-width mce-listbox" tabindex="-1" role="button" aria-labeledby="mce_49" aria-label="Font Family" aria-haspopup="true"><button id="mce_49-open" role="presentation" type="button" tabindex="-1"><span>Font Family</span> <i class="mce-caret"></i></button></div><div id="mce_50" class="mce-widget mce-btn mce-menubtn mce-fixed-width mce-listbox mce-last" tabindex="-1" role="button" aria-labeledby="mce_50" aria-label="Font Sizes" aria-haspopup="true"><button id="mce_50-open" role="presentation" type="button" tabindex="-1"><span>Font Sizes</span> <i class="mce-caret"></i></button></div></div></div><div id="mce_79" class="mce-container mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_79-body"><div id="mce_51" class="mce-widget mce-btn mce-first" tabindex="-1" role="button" aria-labeledby="mce_51" aria-label="Insert/edit link"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-link"></i></button></div><div id="mce_52" class="mce-widget mce-btn mce-last" tabindex="-1" role="button" aria-labeledby="mce_52" aria-label="Insert/edit image"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-image"></i></button></div></div></div><div id="mce_80" class="mce-container mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_80-body"><div id="mce_53" class="mce-widget mce-btn mce-colorbutton mce-first" role="button" aria-labeledby="mce_53" aria-label="Text color"><button role="presentation" hidefocus="" type="button" tabindex="-1"><i class="mce-ico mce-i-forecolor"></i><span id="mce_53-preview" class="mce-preview"></span></button><button type="button" class="mce-open" hidefocus="" tabindex="-1"> <i class="mce-caret"></i></button></div><div id="mce_54" class="mce-widget mce-btn mce-colorbutton mce-last" role="button" aria-labeledby="mce_54" aria-label="Background color"><button role="presentation" hidefocus="" type="button" tabindex="-1"><i class="mce-ico mce-i-backcolor"></i><span id="mce_54-preview" class="mce-preview"></span></button><button type="button" class="mce-open" hidefocus="" tabindex="-1"> <i class="mce-caret"></i></button></div></div></div><div id="mce_81" class="mce-container mce-last mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_81-body"><div id="mce_55" class="mce-widget mce-btn mce-first mce-disabled" tabindex="-1" role="button" aria-labeledby="mce_55" aria-label="Undo" aria-disabled="true"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-undo"></i></button></div><div id="mce_56" class="mce-widget mce-btn mce-last mce-disabled" tabindex="-1" role="button" aria-labeledby="mce_56" aria-label="Redo" aria-disabled="true"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-redo"></i></button></div></div></div></div></div><div id="mce_82" class="mce-container mce-toolbar mce-last mce-stack-layout-item" role="toolbar"><div id="mce_82-body" class="mce-container-body mce-flow-layout"><div id="mce_83" class="mce-container mce-first mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_83-body"><div id="mce_57" class="mce-widget mce-btn mce-first" tabindex="-1" role="button" aria-labeledby="mce_57" aria-label="Bold"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-bold"></i></button></div><div id="mce_58" class="mce-widget mce-btn" tabindex="-1" role="button" aria-labeledby="mce_58" aria-label="Underline"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-underline"></i></button></div><div id="mce_59" class="mce-widget mce-btn mce-last" tabindex="-1" role="button" aria-labeledby="mce_59" aria-label="Italic"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-italic"></i></button></div></div></div><div id="mce_84" class="mce-container mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_84-body"><div id="mce_60" class="mce-widget mce-btn mce-first" tabindex="-1" role="button" aria-labeledby="mce_60" aria-label="Align left"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignleft"></i></button></div><div id="mce_61" class="mce-widget mce-btn" tabindex="-1" role="button" aria-labeledby="mce_61" aria-label="Align center"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-aligncenter"></i></button></div><div id="mce_62" class="mce-widget mce-btn" tabindex="-1" role="button" aria-labeledby="mce_62" aria-label="Align right"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignright"></i></button></div><div id="mce_63" class="mce-widget mce-btn mce-last" tabindex="-1" role="button" aria-labeledby="mce_63" aria-label="Justify"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignjustify"></i></button></div></div></div><div id="mce_85" class="mce-container mce-last mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_85-body"><div id="mce_64" class="mce-widget mce-btn mce-first" tabindex="-1" role="button" aria-labeledby="mce_64" aria-label="Bullet list"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-bullist"></i></button></div><div id="mce_65" class="mce-widget mce-btn" tabindex="-1" role="button" aria-labeledby="mce_65" aria-label="Numbered list"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-numlist"></i></button></div><div id="mce_66" class="mce-widget mce-btn" tabindex="-1" role="button" aria-labeledby="mce_66" aria-label="Decrease indent"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-outdent"></i></button></div><div id="mce_67" class="mce-widget mce-btn" tabindex="-1" role="button" aria-labeledby="mce_67" aria-label="Increase indent"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-indent"></i></button></div><div id="mce_68" class="mce-widget mce-btn mce-last" tabindex="-1" role="button" aria-labeledby="mce_68" aria-label="Toggle blockquote"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-blockquote"></i></button></div></div></div></div></div></div></div><div id="mce_86" class="mce-edit-area mce-container mce-panel mce-stack-layout-item" hidefocus="1" tabindex="-1" style="border-width: 1px 0px 0px;"><iframe id="event_en_description_ifr" src="javascript:&quot;&quot;" allowtransparency="true" title="Zone Texte Riche. Appuyer sur ALT-F9 pour le menu. Appuyer sur ALT-F10 pour la barre d'outils. Appuyer sur ALT-0 pour de l'aide." style="width: 100%; height: 300px; display: block;" frameborder="0"></iframe></div><div id="mce_87" class="mce-statusbar mce-container mce-panel mce-last mce-stack-layout-item" hidefocus="1" tabindex="-1" style="border-width: 1px 0px 0px;"><div id="mce_87-body" class="mce-container-body mce-flow-layout"><div id="mce_88" class="mce-path"><div class="mce-path-item">&nbsp;</div></div><div id="mce_89" class="mce-last mce-flow-layout-item mce-resizehandle"><i class="mce-ico mce-i-resize"></i></div></div></div></div></div><textarea name="event[en][description]" id="event_en_description" style="display: none;" aria-hidden="true"></textarea><script type="text/javascript">
                                    tinyMCE.init({
                                        mode: "exact",
                                        elements: "event_en_description",
                                        theme: "modern",
                                        width: "425px",
                                        height: "300px",
                                        theme_advanced_toolbar_location: "top",
                                        theme_advanced_toolbar_align: "left",
                                        theme_advanced_statusbar_location: "bottom",
                                        theme_advanced_resizing: true
                                        ,
                                        extended_valid_elements: "html,head,body,hr[class|width|size|noshade],iframe[src|width|height|name|align],style",
                                        convert_urls: false,
                                        urlconvertor_callback: "email_urlconvertor",
                                        paste_as_text: false,
                                        plugins: "textcolor link image media",
                                        toolbar1: "formatselect fontselect fontsizeselect | link image | forecolor backcolor | undo redo",
                                        toolbar2: "bold underline italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent blockquote",
                                        force_br_newlines: false,
                                        force_p_newlines: false,
                                        forced_root_block: "",
                                        fontsize_formats: "4pt 5pt 6pt 8pt 10pt 12pt 14pt 18pt 24pt 36pt",
                                        language: "fr"
                                    });
                                </script>            <span class="culture">en</span>
                                <span class="lang culture-en">English</span>

                            </div>
                            <div class="widget culture-br" title="Brezhoneg">
                                <div id="mce_111" class="mce-tinymce mce-container mce-panel" hidefocus="1" tabindex="-1" style="visibility: hidden; border-width: 1px; width: 425px;"><div id="mce_111-body" class="mce-container-body mce-stack-layout"><div id="mce_112" class="mce-container mce-menubar mce-toolbar mce-first mce-stack-layout-item" role="menubar" style="border-width: 0px 0px 1px;"><div id="mce_112-body" class="mce-container-body mce-flow-layout"><div id="mce_113" class="mce-widget mce-btn mce-menubtn mce-first mce-flow-layout-item" tabindex="-1" role="menuitem" aria-haspopup="true"><button id="mce_113-open" role="presentation" type="button" tabindex="-1"><span>Fichier</span> <i class="mce-caret"></i></button></div><div id="mce_114" class="mce-widget mce-btn mce-menubtn mce-flow-layout-item" tabindex="-1" role="menuitem" aria-haspopup="true"><button id="mce_114-open" role="presentation" type="button" tabindex="-1"><span>Editer</span> <i class="mce-caret"></i></button></div><div id="mce_115" class="mce-widget mce-btn mce-menubtn mce-flow-layout-item" tabindex="-1" role="menuitem" aria-haspopup="true"><button id="mce_115-open" role="presentation" type="button" tabindex="-1"><span>Insérer</span> <i class="mce-caret"></i></button></div><div id="mce_116" class="mce-widget mce-btn mce-menubtn mce-flow-layout-item" tabindex="-1" role="menuitem" aria-haspopup="true"><button id="mce_116-open" role="presentation" type="button" tabindex="-1"><span>Voir</span> <i class="mce-caret"></i></button></div><div id="mce_117" class="mce-widget mce-btn mce-menubtn mce-last mce-flow-layout-item" tabindex="-1" role="menuitem" aria-haspopup="true"><button id="mce_117-open" role="presentation" type="button" tabindex="-1"><span>Format</span> <i class="mce-caret"></i></button></div></div></div><div id="mce_118" class="mce-container mce-panel mce-stack-layout-item" hidefocus="1" tabindex="-1"><div id="mce_118-body" class="mce-container-body mce-stack-layout"><div id="mce_119" class="mce-container mce-toolbar mce-first mce-stack-layout-item" role="toolbar"><div id="mce_119-body" class="mce-container-body mce-flow-layout"><div id="mce_120" class="mce-container mce-first mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_120-body"><div id="mce_90" class="mce-widget mce-btn mce-menubtn mce-fixed-width mce-listbox mce-first" tabindex="-1" role="button" aria-haspopup="true"><button id="mce_90-open" role="presentation" type="button" tabindex="-1"><span>Paragraph</span> <i class="mce-caret"></i></button></div><div id="mce_91" class="mce-widget mce-btn mce-menubtn mce-fixed-width mce-listbox" tabindex="-1" role="button" aria-labeledby="mce_91" aria-label="Font Family" aria-haspopup="true"><button id="mce_91-open" role="presentation" type="button" tabindex="-1"><span>Font Family</span> <i class="mce-caret"></i></button></div><div id="mce_92" class="mce-widget mce-btn mce-menubtn mce-fixed-width mce-listbox mce-last" tabindex="-1" role="button" aria-labeledby="mce_92" aria-label="Font Sizes" aria-haspopup="true"><button id="mce_92-open" role="presentation" type="button" tabindex="-1"><span>Font Sizes</span> <i class="mce-caret"></i></button></div></div></div><div id="mce_121" class="mce-container mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_121-body"><div id="mce_93" class="mce-widget mce-btn mce-first" tabindex="-1" role="button" aria-labeledby="mce_93" aria-label="Insert/edit link"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-link"></i></button></div><div id="mce_94" class="mce-widget mce-btn mce-last" tabindex="-1" role="button" aria-labeledby="mce_94" aria-label="Insert/edit image"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-image"></i></button></div></div></div><div id="mce_122" class="mce-container mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_122-body"><div id="mce_95" class="mce-widget mce-btn mce-colorbutton mce-first" role="button" aria-labeledby="mce_95" aria-label="Text color"><button role="presentation" hidefocus="" type="button" tabindex="-1"><i class="mce-ico mce-i-forecolor"></i><span id="mce_95-preview" class="mce-preview"></span></button><button type="button" class="mce-open" hidefocus="" tabindex="-1"> <i class="mce-caret"></i></button></div><div id="mce_96" class="mce-widget mce-btn mce-colorbutton mce-last" role="button" aria-labeledby="mce_96" aria-label="Background color"><button role="presentation" hidefocus="" type="button" tabindex="-1"><i class="mce-ico mce-i-backcolor"></i><span id="mce_96-preview" class="mce-preview"></span></button><button type="button" class="mce-open" hidefocus="" tabindex="-1"> <i class="mce-caret"></i></button></div></div></div><div id="mce_123" class="mce-container mce-last mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_123-body"><div id="mce_97" class="mce-widget mce-btn mce-first mce-disabled" tabindex="-1" role="button" aria-labeledby="mce_97" aria-label="Undo" aria-disabled="true"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-undo"></i></button></div><div id="mce_98" class="mce-widget mce-btn mce-last mce-disabled" tabindex="-1" role="button" aria-labeledby="mce_98" aria-label="Redo" aria-disabled="true"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-redo"></i></button></div></div></div></div></div><div id="mce_124" class="mce-container mce-toolbar mce-last mce-stack-layout-item" role="toolbar"><div id="mce_124-body" class="mce-container-body mce-flow-layout"><div id="mce_125" class="mce-container mce-first mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_125-body"><div id="mce_99" class="mce-widget mce-btn mce-first" tabindex="-1" role="button" aria-labeledby="mce_99" aria-label="Bold"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-bold"></i></button></div><div id="mce_100" class="mce-widget mce-btn" tabindex="-1" role="button" aria-labeledby="mce_100" aria-label="Underline"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-underline"></i></button></div><div id="mce_101" class="mce-widget mce-btn mce-last" tabindex="-1" role="button" aria-labeledby="mce_101" aria-label="Italic"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-italic"></i></button></div></div></div><div id="mce_126" class="mce-container mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_126-body"><div id="mce_102" class="mce-widget mce-btn mce-first" tabindex="-1" role="button" aria-labeledby="mce_102" aria-label="Align left"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignleft"></i></button></div><div id="mce_103" class="mce-widget mce-btn" tabindex="-1" role="button" aria-labeledby="mce_103" aria-label="Align center"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-aligncenter"></i></button></div><div id="mce_104" class="mce-widget mce-btn" tabindex="-1" role="button" aria-labeledby="mce_104" aria-label="Align right"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignright"></i></button></div><div id="mce_105" class="mce-widget mce-btn mce-last" tabindex="-1" role="button" aria-labeledby="mce_105" aria-label="Justify"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignjustify"></i></button></div></div></div><div id="mce_127" class="mce-container mce-last mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_127-body"><div id="mce_106" class="mce-widget mce-btn mce-first" tabindex="-1" role="button" aria-labeledby="mce_106" aria-label="Bullet list"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-bullist"></i></button></div><div id="mce_107" class="mce-widget mce-btn" tabindex="-1" role="button" aria-labeledby="mce_107" aria-label="Numbered list"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-numlist"></i></button></div><div id="mce_108" class="mce-widget mce-btn" tabindex="-1" role="button" aria-labeledby="mce_108" aria-label="Decrease indent"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-outdent"></i></button></div><div id="mce_109" class="mce-widget mce-btn" tabindex="-1" role="button" aria-labeledby="mce_109" aria-label="Increase indent"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-indent"></i></button></div><div id="mce_110" class="mce-widget mce-btn mce-last" tabindex="-1" role="button" aria-labeledby="mce_110" aria-label="Toggle blockquote"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-blockquote"></i></button></div></div></div></div></div></div></div><div id="mce_128" class="mce-edit-area mce-container mce-panel mce-stack-layout-item" hidefocus="1" tabindex="-1" style="border-width: 1px 0px 0px;"><iframe id="event_br_description_ifr" src="javascript:&quot;&quot;" allowtransparency="true" title="Zone Texte Riche. Appuyer sur ALT-F9 pour le menu. Appuyer sur ALT-F10 pour la barre d'outils. Appuyer sur ALT-0 pour de l'aide." style="width: 100%; height: 300px; display: block;" frameborder="0"></iframe></div><div id="mce_129" class="mce-statusbar mce-container mce-panel mce-last mce-stack-layout-item" hidefocus="1" tabindex="-1" style="border-width: 1px 0px 0px;"><div id="mce_129-body" class="mce-container-body mce-flow-layout"><div id="mce_130" class="mce-path"><div class="mce-path-item">&nbsp;</div></div><div id="mce_131" class="mce-last mce-flow-layout-item mce-resizehandle"><i class="mce-ico mce-i-resize"></i></div></div></div></div></div><textarea name="event[br][description]" id="event_br_description" style="display: none;" aria-hidden="true"></textarea><script type="text/javascript">
                                    tinyMCE.init({
                                        mode: "exact",
                                        elements: "event_br_description",
                                        theme: "modern",
                                        width: "425px",
                                        height: "300px",
                                        theme_advanced_toolbar_location: "top",
                                        theme_advanced_toolbar_align: "left",
                                        theme_advanced_statusbar_location: "bottom",
                                        theme_advanced_resizing: true
                                        ,
                                        extended_valid_elements: "html,head,body,hr[class|width|size|noshade],iframe[src|width|height|name|align],style",
                                        convert_urls: false,
                                        urlconvertor_callback: "email_urlconvertor",
                                        paste_as_text: false,
                                        plugins: "textcolor link image media",
                                        toolbar1: "formatselect fontselect fontsizeselect | link image | forecolor backcolor | undo redo",
                                        toolbar2: "bold underline italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent blockquote",
                                        force_br_newlines: false,
                                        force_p_newlines: false,
                                        forced_root_block: "",
                                        fontsize_formats: "4pt 5pt 6pt 8pt 10pt 12pt 14pt 18pt 24pt 36pt",
                                        language: "fr"
                                    });
                                </script>            <span class="culture">br</span>
                                <span class="lang culture-br">Brezhoneg</span>

                            </div>
                        </div>
                    </div>
                    <div id="sf_fieldset_manifestations" class="ui-corner-all ui-tabs-panel ui-widget-content ui-corner-bottom" aria-labelledby="ui-id-3" role="tabpanel" style="display: none;" aria-expanded="false" aria-hidden="true">


                        <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_Manifestations">
                            <label for="event_Manifestations">Manifestations</label>    <div class="label ui-helper-clearfix">

                            </div>

                            <div class="widget ">
                                <table>
                                    <tbody><tr>
                                            <th> le </th>
                                            <td><table>
                                                    <tbody><tr>
                                                            <th><label for="event_Manifestations_0_happens_at">Date</label></th>
                                                            <td><span class="date"><input size="2" maxlength="2" name="event[Manifestations][0][happens_at][day]" id="event_Manifestations_0_happens_at_day" type="text">/<input size="2" maxlength="2" name="event[Manifestations][0][happens_at][month]" id="event_Manifestations_0_happens_at_month" type="text">/<input class="sfWFDTyear" size="4" maxlength="4" name="event[Manifestations][0][happens_at][year]" id="event_Manifestations_0_happens_at_year" type="text"><input size="10" id="event_Manifestations_0_happens_at_jquery_control" disabled="disabled" class="hasDatepicker" type="hidden"><button type="button" class="ui-datepicker-trigger">...</button><script type="text/javascript">
                                                                function wfd_event_Manifestations_0_happens_at_read_linked()
                                                                {
                                                                    jQuery("#event_Manifestations_0_happens_at_jquery_control").val(jQuery("#event_Manifestations_0_happens_at_year").val() + "/" + jQuery("#event_Manifestations_0_happens_at_month").val() + "/" + jQuery("#event_Manifestations_0_happens_at_day").val());

                                                                    return {};
                                                                }

                                                                function wfd_event_Manifestations_0_happens_at_update_linked(date)
                                                                {
                                                                    jQuery("#event_Manifestations_0_happens_at_year").val(date.substring(0, 4));
                                                                    jQuery("#event_Manifestations_0_happens_at_month").val(date.substring(5, 7));
                                                                    jQuery("#event_Manifestations_0_happens_at_day").val(date.substring(8));
                                                                }

                                                                function wfd_event_Manifestations_0_happens_at_check_linked_days()
                                                                {
                                                                    var daysInMonth = 32 - new Date(jQuery("#event_Manifestations_0_happens_at_year").val(), jQuery("#event_Manifestations_0_happens_at_month").val() - 1, 32).getDate();
                                                                    jQuery("#event_Manifestations_0_happens_at_day option").attr("disabled", "");
                                                                    jQuery("#event_Manifestations_0_happens_at_day option:gt(" + (daysInMonth) + ")").attr("disabled", "disabled");

                                                                    if (jQuery("#event_Manifestations_0_happens_at_day").val() > daysInMonth)
                                                                    {
                                                                        jQuery("#event_Manifestations_0_happens_at_day").val(daysInMonth);
                                                                    }
                                                                }

                                                                jQuery(document).ready(function () {
                                                                    jQuery("#event_Manifestations_0_happens_at_jquery_control").datepicker(jQuery.extend({}, {
                                                                        changeYear: false,
                                                                        changeMonth: false,
                                                                        minDate: new Date(2012, 1 - 1, 1),
                                                                        maxDate: new Date(2022, 12 - 1, 31),
                                                                        beforeShow: wfd_event_Manifestations_0_happens_at_read_linked,
                                                                        onSelect: wfd_event_Manifestations_0_happens_at_update_linked,
                                                                        showOn: "button",
                                                                        onClose: function () {
                                                                            jQuery("#event_Manifestations_0_happens_at_day, #event_Manifestations_0_happens_at_month, #event_Manifestations_0_happens_at_year").change();
                                                                        }

                                                                    }, jQuery.datepicker.regional["fr"], {}, {dateFormat: "yy-mm-dd"}));
                                                                });

                                                                jQuery("#event_Manifestations_0_happens_at_day, #event_Manifestations_0_happens_at_month, #event_Manifestations_0_happens_at_year").change(wfd_event_Manifestations_0_happens_at_check_linked_days);
                                                                    </script></span> <span class="time"><input maxlength="2" size="2" name="event[Manifestations][0][happens_at][hour]" id="event_Manifestations_0_happens_at_hour" type="text">:<input maxlength="2" size="2" name="event[Manifestations][0][happens_at][minute]" id="event_Manifestations_0_happens_at_minute" type="text"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <th><label for="event_Manifestations_0_online_limit_per_transaction">Limite vente en ligne par transaction</label></th>
                                                            <td><input name="event[Manifestations][0][online_limit_per_transaction]" id="event_Manifestations_0_online_limit_per_transaction" type="text"></td>
                                                        </tr>
                                                        <tr>
                                                            <th><label for="event_Manifestations_0_organism_id">Organisme</label></th>
                                                            <td><input name="event[Manifestations][0][organism_id]" id="event_Manifestations_0_organism_id" type="hidden"><input name="autocomplete_event[Manifestations][0][organism_id]" value="" id="autocomplete_event_Manifestations_0_organism_id" autocomplete="off" class="ac_input" type="text"><script type="text/javascript">
                                                                jQuery(document).ready(function () {
                                                                    jQuery("#autocomplete_event_Manifestations_0_organism_id")
                                                                            .autocomplete('/rp.php/organism/ajax/action.html', jQuery.extend({}, {
                                                                                dataType: 'json',
                                                                                parse: function (data) {
                                                                                    var parsed = [];
                                                                                    for (key in data) {
                                                                                        parsed[parsed.length] = {data: [data[key], key], value: data[key], result: data[key]};
                                                                                    }
                                                                                    return parsed;
                                                                                }
                                                                            }, {}))
                                                                            .result(function (event, data) {
                                                                                jQuery(this).closest('form').find("#event_Manifestations_0_organism_id").val(data[1]).change();
                                                                            });
                                                                });
                                                                </script><a href="/rp.php/organism/ajax/action.html" style="display: none;" id="url_event_Manifestations_0_organism_id"></a>
                                                                <script type="text/javascript"><!--
                                                                  jQuery(document).ready(function () {
                                                                        jQuery('#autocomplete_event_Manifestations_0_organism_id').change(function () {
                                                                            if (jQuery(this).val() === '')
                                                                            {
                                                                                jQuery('#event_Manifestations_0_organism_id').val('').change();
                                                                            }
                                                                        });
                                                                    });
--></script></td>
                                                        </tr>
                                                        <tr>
                                                            <th><label for="event_Manifestations_0_expected_income">Chiffre d'affaire attendu</label></th>
                                                            <td><input name="event[Manifestations][0][expected_income]" id="event_Manifestations_0_expected_income" type="text"></td>
                                                        </tr>
                                                        <tr>
                                                            <th><label for="event_Manifestations_0_location_id">Lieu</label></th>
                                                            <td><select name="event[Manifestations][0][location_id]" id="event_Manifestations_0_location_id">
                                                                    <option value="" selected="selected"></option>
                                                                    <option value="28">Cirque Jules Verne</option>
                                                                    <option value="15">Espace Mont Blanc - St Gervais</option>
                                                                    <option value="13">Grande Salle</option>
                                                                    <option value="18">Grande Salle - 2015/2016</option>
                                                                    <option value="7">Grande Salle debout</option>
                                                                    <option value="6">Grande Salle gradins 585 places</option>
                                                                    <option value="8">Grande Salle Parterre</option>
                                                                    <option value="19">Grande Salle Parterre - 2015/2016</option>
                                                                    <option value="24">Grand Palais</option>
                                                                    <option value="14">Grange au Lac d'Evian</option>
                                                                    <option value="17">Le Parvis des Fiz - Passy</option>
                                                                    <option value="25">Musée d'arts</option>
                                                                    <option value="9">Petite Salle</option>
                                                                    <option value="20">Restaurant d'entreprises PACA</option>
                                                                    <option value="10">Salon Hôtel de Ville</option>
                                                                    <option value="21">Site du spectacle</option>
                                                                    <option value="16">Théâtre Montjoie - St Gervais</option>
                                                                </select></td>
                                                        </tr>
                                                        <tr>
                                                            <th><label for="event_Manifestations_0_color_id">Couleur</label></th>
                                                            <td><select name="event[Manifestations][0][color_id]" id="event_Manifestations_0_color_id">
                                                                    <option value="" selected="selected"></option>
                                                                    <option value="1">Bleu</option>
                                                                    <option value="6">bleu_demo</option>
                                                                    <option value="11">Boissons alcoolisées</option>
                                                                    <option value="12">Boissons soft</option>
                                                                    <option value="15">couleurEvenTest</option>
                                                                    <option value="4">Jaune</option>
                                                                    <option value="9">JP</option>
                                                                    <option value="13">Repas</option>
                                                                    <option value="3">Rose</option>
                                                                    <option value="14"> Souvenir</option>
                                                                    <option value="10">Sport</option>
                                                                    <option value="16">test2</option>
                                                                    <option value="2">Vert</option>
                                                                    <option value="5">vert_demo</option>
                                                                </select></td>
                                                        </tr>
                                                        <tr>
                                                            <th><label for="event_Manifestations_0_vat_id">TVA</label></th>
                                                            <td><select name="event[Manifestations][0][vat_id]" id="event_Manifestations_0_vat_id">
                                                                    <option value="1">0%</option>
                                                                    <option value="3">10%</option>
                                                                    <option value="2">20%</option>
                                                                    <option value="4">2.5%</option>
                                                                </select></td>
                                                        </tr>
                                                        <tr>
                                                            <th><label for="event_Manifestations_0_online_limit">Limite vente en ligne</label></th>
                                                            <td><input name="event[Manifestations][0][online_limit]" value="10" id="event_Manifestations_0_online_limit" type="text"></td>
                                                        </tr>
                                                        <tr>
                                                            <th><label for="event_Manifestations_0_no_print">Billetterie pré-imprimée</label></th>
                                                            <td><input name="event[Manifestations][0][no_print]" id="event_Manifestations_0_no_print" type="checkbox"><input name="event[Manifestations][0][id]" id="event_Manifestations_0_id" type="hidden">
                                                                <input name="event[Manifestations][0][participants_list]" value="" id="event_Manifestations_0_participants_list" type="hidden"></td>
                                                        </tr>
                                                    </tbody></table></td>
                                        </tr>
                                        <tr>
                                            <th> le </th>
                                            <td><table>
                                                    <tbody><tr>
                                                            <th><label for="event_Manifestations_1_happens_at">Date</label></th>
                                                            <td><span class="date"><input size="2" maxlength="2" name="event[Manifestations][1][happens_at][day]" id="event_Manifestations_1_happens_at_day" type="text">/<input size="2" maxlength="2" name="event[Manifestations][1][happens_at][month]" id="event_Manifestations_1_happens_at_month" type="text">/<input class="sfWFDTyear" size="4" maxlength="4" name="event[Manifestations][1][happens_at][year]" id="event_Manifestations_1_happens_at_year" type="text"><input size="10" id="event_Manifestations_1_happens_at_jquery_control" disabled="disabled" class="hasDatepicker" type="hidden"><button type="button" class="ui-datepicker-trigger">...</button><script type="text/javascript">
                                                                    function wfd_event_Manifestations_1_happens_at_read_linked()
                                                                    {
                                                                        jQuery("#event_Manifestations_1_happens_at_jquery_control").val(jQuery("#event_Manifestations_1_happens_at_year").val() + "/" + jQuery("#event_Manifestations_1_happens_at_month").val() + "/" + jQuery("#event_Manifestations_1_happens_at_day").val());

                                                                        return {};
                                                                    }

                                                                    function wfd_event_Manifestations_1_happens_at_update_linked(date)
                                                                    {
                                                                        jQuery("#event_Manifestations_1_happens_at_year").val(date.substring(0, 4));
                                                                        jQuery("#event_Manifestations_1_happens_at_month").val(date.substring(5, 7));
                                                                        jQuery("#event_Manifestations_1_happens_at_day").val(date.substring(8));
                                                                    }

                                                                    function wfd_event_Manifestations_1_happens_at_check_linked_days()
                                                                    {
                                                                        var daysInMonth = 32 - new Date(jQuery("#event_Manifestations_1_happens_at_year").val(), jQuery("#event_Manifestations_1_happens_at_month").val() - 1, 32).getDate();
                                                                        jQuery("#event_Manifestations_1_happens_at_day option").attr("disabled", "");
                                                                        jQuery("#event_Manifestations_1_happens_at_day option:gt(" + (daysInMonth) + ")").attr("disabled", "disabled");

                                                                        if (jQuery("#event_Manifestations_1_happens_at_day").val() > daysInMonth)
                                                                        {
                                                                            jQuery("#event_Manifestations_1_happens_at_day").val(daysInMonth);
                                                                        }
                                                                    }

                                                                    jQuery(document).ready(function () {
                                                                        jQuery("#event_Manifestations_1_happens_at_jquery_control").datepicker(jQuery.extend({}, {
                                                                            changeYear: false,
                                                                            changeMonth: false,
                                                                            minDate: new Date(2012, 1 - 1, 1),
                                                                            maxDate: new Date(2022, 12 - 1, 31),
                                                                            beforeShow: wfd_event_Manifestations_1_happens_at_read_linked,
                                                                            onSelect: wfd_event_Manifestations_1_happens_at_update_linked,
                                                                            showOn: "button",
                                                                            onClose: function () {
                                                                                jQuery("#event_Manifestations_1_happens_at_day, #event_Manifestations_1_happens_at_month, #event_Manifestations_1_happens_at_year").change();
                                                                            }

                                                                        }, jQuery.datepicker.regional["fr"], {}, {dateFormat: "yy-mm-dd"}));
                                                                    });

                                                                    jQuery("#event_Manifestations_1_happens_at_day, #event_Manifestations_1_happens_at_month, #event_Manifestations_1_happens_at_year").change(wfd_event_Manifestations_1_happens_at_check_linked_days);
                                                                    </script></span> <span class="time"><input maxlength="2" size="2" name="event[Manifestations][1][happens_at][hour]" id="event_Manifestations_1_happens_at_hour" type="text">:<input maxlength="2" size="2" name="event[Manifestations][1][happens_at][minute]" id="event_Manifestations_1_happens_at_minute" type="text"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <th><label for="event_Manifestations_1_online_limit_per_transaction">Limite vente en ligne par transaction</label></th>
                                                            <td><input name="event[Manifestations][1][online_limit_per_transaction]" id="event_Manifestations_1_online_limit_per_transaction" type="text"></td>
                                                        </tr>
                                                        <tr>
                                                            <th><label for="event_Manifestations_1_organism_id">Organisme</label></th>
                                                            <td><input name="event[Manifestations][1][organism_id]" id="event_Manifestations_1_organism_id" type="hidden"><input name="autocomplete_event[Manifestations][1][organism_id]" value="" id="autocomplete_event_Manifestations_1_organism_id" autocomplete="off" class="ac_input" type="text"><script type="text/javascript">
                                                                jQuery(document).ready(function () {
                                                                    jQuery("#autocomplete_event_Manifestations_1_organism_id")
                                                                            .autocomplete('/rp.php/organism/ajax/action.html', jQuery.extend({}, {
                                                                                dataType: 'json',
                                                                                parse: function (data) {
                                                                                    var parsed = [];
                                                                                    for (key in data) {
                                                                                        parsed[parsed.length] = {data: [data[key], key], value: data[key], result: data[key]};
                                                                                    }
                                                                                    return parsed;
                                                                                }
                                                                            }, {}))
                                                                            .result(function (event, data) {
                                                                                jQuery(this).closest('form').find("#event_Manifestations_1_organism_id").val(data[1]).change(); });
                                                                });
                                                                </script><a href="/rp.php/organism/ajax/action.html" style="display: none;" id="url_event_Manifestations_1_organism_id"></a>
                                                                <script type="text/javascript"><!--
                                                                  jQuery(document).ready(function () {
                                                                        jQuery('#autocomplete_event_Manifestations_1_organism_id').change(function () {
                                                                            if (jQuery(this).val() === '')
                                                                            {
                                                                                jQuery('#event_Manifestations_1_organism_id').val('').change();
                                                                            }
                                                                        });
                                                                    });
--></script></td>
                                                        </tr>
                                                        <tr>
                                                            <th><label for="event_Manifestations_1_expected_income">Chiffre d'affaire attendu</label></th>
                                                            <td><input name="event[Manifestations][1][expected_income]" id="event_Manifestations_1_expected_income" type="text"></td>
                                                        </tr>
                                                        <tr>
                                                            <th><label for="event_Manifestations_1_location_id">Lieu</label></th>
                                                            <td><select name="event[Manifestations][1][location_id]" id="event_Manifestations_1_location_id">
                                                                    <option value="" selected="selected"></option>
                                                                    <option value="28">Cirque Jules Verne</option>
                                                                    <option value="15">Espace Mont Blanc - St Gervais</option>
                                                                    <option value="13">Grande Salle</option>
                                                                    <option value="18">Grande Salle - 2015/2016</option>
                                                                    <option value="7">Grande Salle debout</option>
                                                                    <option value="6">Grande Salle gradins 585 places</option>
                                                                    <option value="8">Grande Salle Parterre</option>
                                                                    <option value="19">Grande Salle Parterre - 2015/2016</option>
                                                                    <option value="24">Grand Palais</option>
                                                                    <option value="14">Grange au Lac d'Evian</option>
                                                                    <option value="17">Le Parvis des Fiz - Passy</option>
                                                                    <option value="25">Musée d'arts</option>
                                                                    <option value="9">Petite Salle</option>
                                                                    <option value="20">Restaurant d'entreprises PACA</option>
                                                                    <option value="10">Salon Hôtel de Ville</option>
                                                                    <option value="21">Site du spectacle</option>
                                                                    <option value="16">Théâtre Montjoie - St Gervais</option>
                                                                </select></td>
                                                        </tr>
                                                        <tr>
                                                            <th><label for="event_Manifestations_1_color_id">Couleur</label></th>
                                                            <td><select name="event[Manifestations][1][color_id]" id="event_Manifestations_1_color_id">
                                                                    <option value="" selected="selected"></option>
                                                                    <option value="1">Bleu</option>
                                                                    <option value="6">bleu_demo</option>
                                                                    <option value="11">Boissons alcoolisées</option>
                                                                    <option value="12">Boissons soft</option>
                                                                    <option value="15">couleurEvenTest</option>
                                                                    <option value="4">Jaune</option>
                                                                    <option value="9">JP</option>
                                                                    <option value="13">Repas</option>
                                                                    <option value="3">Rose</option>
                                                                    <option value="14"> Souvenir</option>
                                                                    <option value="10">Sport</option>
                                                                    <option value="16">test2</option>
                                                                    <option value="2">Vert</option>
                                                                    <option value="5">vert_demo</option>
                                                                </select></td>
                                                        </tr>
                                                        <tr>
                                                            <th><label for="event_Manifestations_1_vat_id">TVA</label></th>
                                                            <td><select name="event[Manifestations][1][vat_id]" id="event_Manifestations_1_vat_id">
                                                                    <option value="1">0%</option>
                                                                    <option value="3">10%</option>
                                                                    <option value="2">20%</option>
                                                                    <option value="4">2.5%</option>
                                                                </select></td>
                                                        </tr>
                                                        <tr>
                                                            <th><label for="event_Manifestations_1_online_limit">Limite vente en ligne</label></th>
                                                            <td><input name="event[Manifestations][1][online_limit]" value="10" id="event_Manifestations_1_online_limit" type="text"></td>
                                                        </tr>
                                                        <tr>
                                                            <th><label for="event_Manifestations_1_no_print">Billetterie pré-imprimée</label></th>
                                                            <td><input name="event[Manifestations][1][no_print]" id="event_Manifestations_1_no_print" type="checkbox"><input name="event[Manifestations][1][id]" id="event_Manifestations_1_id" type="hidden">
                                                                <input name="event[Manifestations][1][participants_list]" value="" id="event_Manifestations_1_participants_list" type="hidden"></td>
                                                        </tr>
                                                    </tbody></table></td>
                                        </tr>
                                    </tbody></table>        
                            </div>
                        </div>
                    </div>
                    <div id="sf_fieldset_web_content" class="ui-corner-all ui-tabs-panel ui-widget-content ui-corner-bottom" aria-labelledby="ui-id-4" role="tabpanel" style="display: none;" aria-expanded="false" aria-hidden="true">


                        <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_extradesc">
                            <label for="event_fr_extradesc">Description suppl.</label>    <div class="label ui-helper-clearfix">

                            </div>

                            <div class="widget culture-fr" title="Français">
                                <div id="mce_153" class="mce-tinymce mce-container mce-panel" hidefocus="1" tabindex="-1" style="visibility: hidden; border-width: 1px; width: 425px;"><div id="mce_153-body" class="mce-container-body mce-stack-layout"><div id="mce_154" class="mce-container mce-menubar mce-toolbar mce-first mce-stack-layout-item" role="menubar" style="border-width: 0px 0px 1px;"><div id="mce_154-body" class="mce-container-body mce-flow-layout"><div id="mce_155" class="mce-widget mce-btn mce-menubtn mce-first mce-flow-layout-item" tabindex="-1" role="menuitem" aria-haspopup="true"><button id="mce_155-open" role="presentation" type="button" tabindex="-1"><span>Fichier</span> <i class="mce-caret"></i></button></div><div id="mce_156" class="mce-widget mce-btn mce-menubtn mce-flow-layout-item" tabindex="-1" role="menuitem" aria-haspopup="true"><button id="mce_156-open" role="presentation" type="button" tabindex="-1"><span>Editer</span> <i class="mce-caret"></i></button></div><div id="mce_157" class="mce-widget mce-btn mce-menubtn mce-flow-layout-item" tabindex="-1" role="menuitem" aria-haspopup="true"><button id="mce_157-open" role="presentation" type="button" tabindex="-1"><span>Insérer</span> <i class="mce-caret"></i></button></div><div id="mce_158" class="mce-widget mce-btn mce-menubtn mce-flow-layout-item" tabindex="-1" role="menuitem" aria-haspopup="true"><button id="mce_158-open" role="presentation" type="button" tabindex="-1"><span>Voir</span> <i class="mce-caret"></i></button></div><div id="mce_159" class="mce-widget mce-btn mce-menubtn mce-last mce-flow-layout-item" tabindex="-1" role="menuitem" aria-haspopup="true"><button id="mce_159-open" role="presentation" type="button" tabindex="-1"><span>Format</span> <i class="mce-caret"></i></button></div></div></div><div id="mce_160" class="mce-container mce-panel mce-stack-layout-item" hidefocus="1" tabindex="-1"><div id="mce_160-body" class="mce-container-body mce-stack-layout"><div id="mce_161" class="mce-container mce-toolbar mce-first mce-stack-layout-item" role="toolbar"><div id="mce_161-body" class="mce-container-body mce-flow-layout"><div id="mce_162" class="mce-container mce-first mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_162-body"><div id="mce_132" class="mce-widget mce-btn mce-menubtn mce-fixed-width mce-listbox mce-first" tabindex="-1" role="button" aria-haspopup="true"><button id="mce_132-open" role="presentation" type="button" tabindex="-1"><span>Paragraph</span> <i class="mce-caret"></i></button></div><div id="mce_133" class="mce-widget mce-btn mce-menubtn mce-fixed-width mce-listbox" tabindex="-1" role="button" aria-labeledby="mce_133" aria-label="Font Family" aria-haspopup="true"><button id="mce_133-open" role="presentation" type="button" tabindex="-1"><span>Font Family</span> <i class="mce-caret"></i></button></div><div id="mce_134" class="mce-widget mce-btn mce-menubtn mce-fixed-width mce-listbox mce-last" tabindex="-1" role="button" aria-labeledby="mce_134" aria-label="Font Sizes" aria-haspopup="true"><button id="mce_134-open" role="presentation" type="button" tabindex="-1"><span>Font Sizes</span> <i class="mce-caret"></i></button></div></div></div><div id="mce_163" class="mce-container mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_163-body"><div id="mce_135" class="mce-widget mce-btn mce-first" tabindex="-1" role="button" aria-labeledby="mce_135" aria-label="Insert/edit link"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-link"></i></button></div><div id="mce_136" class="mce-widget mce-btn mce-last" tabindex="-1" role="button" aria-labeledby="mce_136" aria-label="Insert/edit image"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-image"></i></button></div></div></div><div id="mce_164" class="mce-container mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_164-body"><div id="mce_137" class="mce-widget mce-btn mce-colorbutton mce-first" role="button" aria-labeledby="mce_137" aria-label="Text color"><button role="presentation" hidefocus="" type="button" tabindex="-1"><i class="mce-ico mce-i-forecolor"></i><span id="mce_137-preview" class="mce-preview"></span></button><button type="button" class="mce-open" hidefocus="" tabindex="-1"> <i class="mce-caret"></i></button></div><div id="mce_138" class="mce-widget mce-btn mce-colorbutton mce-last" role="button" aria-labeledby="mce_138" aria-label="Background color"><button role="presentation" hidefocus="" type="button" tabindex="-1"><i class="mce-ico mce-i-backcolor"></i><span id="mce_138-preview" class="mce-preview"></span></button><button type="button" class="mce-open" hidefocus="" tabindex="-1"> <i class="mce-caret"></i></button></div></div></div><div id="mce_165" class="mce-container mce-last mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_165-body"><div id="mce_139" class="mce-widget mce-btn mce-first mce-disabled" tabindex="-1" role="button" aria-labeledby="mce_139" aria-label="Undo" aria-disabled="true"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-undo"></i></button></div><div id="mce_140" class="mce-widget mce-btn mce-last mce-disabled" tabindex="-1" role="button" aria-labeledby="mce_140" aria-label="Redo" aria-disabled="true"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-redo"></i></button></div></div></div></div></div><div id="mce_166" class="mce-container mce-toolbar mce-last mce-stack-layout-item" role="toolbar"><div id="mce_166-body" class="mce-container-body mce-flow-layout"><div id="mce_167" class="mce-container mce-first mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_167-body"><div id="mce_141" class="mce-widget mce-btn mce-first" tabindex="-1" role="button" aria-labeledby="mce_141" aria-label="Bold"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-bold"></i></button></div><div id="mce_142" class="mce-widget mce-btn" tabindex="-1" role="button" aria-labeledby="mce_142" aria-label="Underline"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-underline"></i></button></div><div id="mce_143" class="mce-widget mce-btn mce-last" tabindex="-1" role="button" aria-labeledby="mce_143" aria-label="Italic"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-italic"></i></button></div></div></div><div id="mce_168" class="mce-container mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_168-body"><div id="mce_144" class="mce-widget mce-btn mce-first" tabindex="-1" role="button" aria-labeledby="mce_144" aria-label="Align left"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignleft"></i></button></div><div id="mce_145" class="mce-widget mce-btn" tabindex="-1" role="button" aria-labeledby="mce_145" aria-label="Align center"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-aligncenter"></i></button></div><div id="mce_146" class="mce-widget mce-btn" tabindex="-1" role="button" aria-labeledby="mce_146" aria-label="Align right"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignright"></i></button></div><div id="mce_147" class="mce-widget mce-btn mce-last" tabindex="-1" role="button" aria-labeledby="mce_147" aria-label="Justify"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignjustify"></i></button></div></div></div><div id="mce_169" class="mce-container mce-last mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_169-body"><div id="mce_148" class="mce-widget mce-btn mce-first" tabindex="-1" role="button" aria-labeledby="mce_148" aria-label="Bullet list"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-bullist"></i></button></div><div id="mce_149" class="mce-widget mce-btn" tabindex="-1" role="button" aria-labeledby="mce_149" aria-label="Numbered list"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-numlist"></i></button></div><div id="mce_150" class="mce-widget mce-btn" tabindex="-1" role="button" aria-labeledby="mce_150" aria-label="Decrease indent"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-outdent"></i></button></div><div id="mce_151" class="mce-widget mce-btn" tabindex="-1" role="button" aria-labeledby="mce_151" aria-label="Increase indent"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-indent"></i></button></div><div id="mce_152" class="mce-widget mce-btn mce-last" tabindex="-1" role="button" aria-labeledby="mce_152" aria-label="Toggle blockquote"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-blockquote"></i></button></div></div></div></div></div></div></div><div id="mce_170" class="mce-edit-area mce-container mce-panel mce-stack-layout-item" hidefocus="1" tabindex="-1" style="border-width: 1px 0px 0px;"><iframe id="event_fr_extradesc_ifr" src="javascript:&quot;&quot;" allowtransparency="true" title="Zone Texte Riche. Appuyer sur ALT-F9 pour le menu. Appuyer sur ALT-F10 pour la barre d'outils. Appuyer sur ALT-0 pour de l'aide." style="width: 100%; height: 300px; display: block;" frameborder="0"></iframe></div><div id="mce_171" class="mce-statusbar mce-container mce-panel mce-last mce-stack-layout-item" hidefocus="1" tabindex="-1" style="border-width: 1px 0px 0px;"><div id="mce_171-body" class="mce-container-body mce-flow-layout"><div id="mce_172" class="mce-path"><div class="mce-path-item">&nbsp;</div></div><div id="mce_173" class="mce-last mce-flow-layout-item mce-resizehandle"><i class="mce-ico mce-i-resize"></i></div></div></div></div></div><textarea name="event[fr][extradesc]" id="event_fr_extradesc" style="display: none;" aria-hidden="true"></textarea><script type="text/javascript">
                                                                    tinyMCE.init({
                                                                        mode: "exact",
                                                                        elements: "event_fr_extradesc",
                                                                        theme: "modern",
                                                                        width: "425px",
                                                                        height: "300px",
                                                                        theme_advanced_toolbar_location: "top",
                                                                        theme_advanced_toolbar_align: "left",
                                                                        theme_advanced_statusbar_location: "bottom",
                                                                        theme_advanced_resizing: true
                                                                        ,
                                                                        extended_valid_elements: "html,head,body,hr[class|width|size|noshade],iframe[src|width|height|name|align],style",
                                                                        convert_urls: false,
                                                                        urlconvertor_callback: "email_urlconvertor",
                                                                        paste_as_text: false,
                                                                        plugins: "textcolor link image media",
                                                                        toolbar1: "formatselect fontselect fontsizeselect | link image | forecolor backcolor | undo redo",
                                                                        toolbar2: "bold underline italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent blockquote",
                                                                        force_br_newlines: false,
                                                                        force_p_newlines: false,
                                                                        forced_root_block: "",
                                                                        fontsize_formats: "4pt 5pt 6pt 8pt 10pt 12pt 14pt 18pt 24pt 36pt",
                                                                        language: "fr"
                                                                    });
                                </script>            <span class="culture">fr</span>
                                <span class="lang culture-fr">Français</span>

                            </div>
                            <div class="widget culture-en" title="English">
                                <div id="mce_195" class="mce-tinymce mce-container mce-panel" hidefocus="1" tabindex="-1" style="visibility: hidden; border-width: 1px; width: 425px;"><div id="mce_195-body" class="mce-container-body mce-stack-layout"><div id="mce_196" class="mce-container mce-menubar mce-toolbar mce-first mce-stack-layout-item" role="menubar" style="border-width: 0px 0px 1px;"><div id="mce_196-body" class="mce-container-body mce-flow-layout"><div id="mce_197" class="mce-widget mce-btn mce-menubtn mce-first mce-flow-layout-item" tabindex="-1" role="menuitem" aria-haspopup="true"><button id="mce_197-open" role="presentation" type="button" tabindex="-1"><span>Fichier</span> <i class="mce-caret"></i></button></div><div id="mce_198" class="mce-widget mce-btn mce-menubtn mce-flow-layout-item" tabindex="-1" role="menuitem" aria-haspopup="true"><button id="mce_198-open" role="presentation" type="button" tabindex="-1"><span>Editer</span> <i class="mce-caret"></i></button></div><div id="mce_199" class="mce-widget mce-btn mce-menubtn mce-flow-layout-item" tabindex="-1" role="menuitem" aria-haspopup="true"><button id="mce_199-open" role="presentation" type="button" tabindex="-1"><span>Insérer</span> <i class="mce-caret"></i></button></div><div id="mce_200" class="mce-widget mce-btn mce-menubtn mce-flow-layout-item" tabindex="-1" role="menuitem" aria-haspopup="true"><button id="mce_200-open" role="presentation" type="button" tabindex="-1"><span>Voir</span> <i class="mce-caret"></i></button></div><div id="mce_201" class="mce-widget mce-btn mce-menubtn mce-last mce-flow-layout-item" tabindex="-1" role="menuitem" aria-haspopup="true"><button id="mce_201-open" role="presentation" type="button" tabindex="-1"><span>Format</span> <i class="mce-caret"></i></button></div></div></div><div id="mce_202" class="mce-container mce-panel mce-stack-layout-item" hidefocus="1" tabindex="-1"><div id="mce_202-body" class="mce-container-body mce-stack-layout"><div id="mce_203" class="mce-container mce-toolbar mce-first mce-stack-layout-item" role="toolbar"><div id="mce_203-body" class="mce-container-body mce-flow-layout"><div id="mce_204" class="mce-container mce-first mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_204-body"><div id="mce_174" class="mce-widget mce-btn mce-menubtn mce-fixed-width mce-listbox mce-first" tabindex="-1" role="button" aria-haspopup="true"><button id="mce_174-open" role="presentation" type="button" tabindex="-1"><span>Paragraph</span> <i class="mce-caret"></i></button></div><div id="mce_175" class="mce-widget mce-btn mce-menubtn mce-fixed-width mce-listbox" tabindex="-1" role="button" aria-labeledby="mce_175" aria-label="Font Family" aria-haspopup="true"><button id="mce_175-open" role="presentation" type="button" tabindex="-1"><span>Font Family</span> <i class="mce-caret"></i></button></div><div id="mce_176" class="mce-widget mce-btn mce-menubtn mce-fixed-width mce-listbox mce-last" tabindex="-1" role="button" aria-labeledby="mce_176" aria-label="Font Sizes" aria-haspopup="true"><button id="mce_176-open" role="presentation" type="button" tabindex="-1"><span>Font Sizes</span> <i class="mce-caret"></i></button></div></div></div><div id="mce_205" class="mce-container mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_205-body"><div id="mce_177" class="mce-widget mce-btn mce-first" tabindex="-1" role="button" aria-labeledby="mce_177" aria-label="Insert/edit link"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-link"></i></button></div><div id="mce_178" class="mce-widget mce-btn mce-last" tabindex="-1" role="button" aria-labeledby="mce_178" aria-label="Insert/edit image"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-image"></i></button></div></div></div><div id="mce_206" class="mce-container mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_206-body"><div id="mce_179" class="mce-widget mce-btn mce-colorbutton mce-first" role="button" aria-labeledby="mce_179" aria-label="Text color"><button role="presentation" hidefocus="" type="button" tabindex="-1"><i class="mce-ico mce-i-forecolor"></i><span id="mce_179-preview" class="mce-preview"></span></button><button type="button" class="mce-open" hidefocus="" tabindex="-1"> <i class="mce-caret"></i></button></div><div id="mce_180" class="mce-widget mce-btn mce-colorbutton mce-last" role="button" aria-labeledby="mce_180" aria-label="Background color"><button role="presentation" hidefocus="" type="button" tabindex="-1"><i class="mce-ico mce-i-backcolor"></i><span id="mce_180-preview" class="mce-preview"></span></button><button type="button" class="mce-open" hidefocus="" tabindex="-1"> <i class="mce-caret"></i></button></div></div></div><div id="mce_207" class="mce-container mce-last mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_207-body"><div id="mce_181" class="mce-widget mce-btn mce-first mce-disabled" tabindex="-1" role="button" aria-labeledby="mce_181" aria-label="Undo" aria-disabled="true"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-undo"></i></button></div><div id="mce_182" class="mce-widget mce-btn mce-last mce-disabled" tabindex="-1" role="button" aria-labeledby="mce_182" aria-label="Redo" aria-disabled="true"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-redo"></i></button></div></div></div></div></div><div id="mce_208" class="mce-container mce-toolbar mce-last mce-stack-layout-item" role="toolbar"><div id="mce_208-body" class="mce-container-body mce-flow-layout"><div id="mce_209" class="mce-container mce-first mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_209-body"><div id="mce_183" class="mce-widget mce-btn mce-first" tabindex="-1" role="button" aria-labeledby="mce_183" aria-label="Bold"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-bold"></i></button></div><div id="mce_184" class="mce-widget mce-btn" tabindex="-1" role="button" aria-labeledby="mce_184" aria-label="Underline"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-underline"></i></button></div><div id="mce_185" class="mce-widget mce-btn mce-last" tabindex="-1" role="button" aria-labeledby="mce_185" aria-label="Italic"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-italic"></i></button></div></div></div><div id="mce_210" class="mce-container mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_210-body"><div id="mce_186" class="mce-widget mce-btn mce-first" tabindex="-1" role="button" aria-labeledby="mce_186" aria-label="Align left"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignleft"></i></button></div><div id="mce_187" class="mce-widget mce-btn" tabindex="-1" role="button" aria-labeledby="mce_187" aria-label="Align center"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-aligncenter"></i></button></div><div id="mce_188" class="mce-widget mce-btn" tabindex="-1" role="button" aria-labeledby="mce_188" aria-label="Align right"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignright"></i></button></div><div id="mce_189" class="mce-widget mce-btn mce-last" tabindex="-1" role="button" aria-labeledby="mce_189" aria-label="Justify"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignjustify"></i></button></div></div></div><div id="mce_211" class="mce-container mce-last mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_211-body"><div id="mce_190" class="mce-widget mce-btn mce-first" tabindex="-1" role="button" aria-labeledby="mce_190" aria-label="Bullet list"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-bullist"></i></button></div><div id="mce_191" class="mce-widget mce-btn" tabindex="-1" role="button" aria-labeledby="mce_191" aria-label="Numbered list"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-numlist"></i></button></div><div id="mce_192" class="mce-widget mce-btn" tabindex="-1" role="button" aria-labeledby="mce_192" aria-label="Decrease indent"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-outdent"></i></button></div><div id="mce_193" class="mce-widget mce-btn" tabindex="-1" role="button" aria-labeledby="mce_193" aria-label="Increase indent"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-indent"></i></button></div><div id="mce_194" class="mce-widget mce-btn mce-last" tabindex="-1" role="button" aria-labeledby="mce_194" aria-label="Toggle blockquote"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-blockquote"></i></button></div></div></div></div></div></div></div><div id="mce_212" class="mce-edit-area mce-container mce-panel mce-stack-layout-item" hidefocus="1" tabindex="-1" style="border-width: 1px 0px 0px;"><iframe id="event_en_extradesc_ifr" src="javascript:&quot;&quot;" allowtransparency="true" title="Zone Texte Riche. Appuyer sur ALT-F9 pour le menu. Appuyer sur ALT-F10 pour la barre d'outils. Appuyer sur ALT-0 pour de l'aide." style="width: 100%; height: 300px; display: block;" frameborder="0"></iframe></div><div id="mce_213" class="mce-statusbar mce-container mce-panel mce-last mce-stack-layout-item" hidefocus="1" tabindex="-1" style="border-width: 1px 0px 0px;"><div id="mce_213-body" class="mce-container-body mce-flow-layout"><div id="mce_214" class="mce-path"><div class="mce-path-item">&nbsp;</div></div><div id="mce_215" class="mce-last mce-flow-layout-item mce-resizehandle"><i class="mce-ico mce-i-resize"></i></div></div></div></div></div><textarea name="event[en][extradesc]" id="event_en_extradesc" style="display: none;" aria-hidden="true"></textarea><script type="text/javascript">
                                    tinyMCE.init({
                                        mode: "exact",
                                        elements: "event_en_extradesc",
                                        theme: "modern",
                                        width: "425px",
                                        height: "300px",
                                        theme_advanced_toolbar_location: "top",
                                        theme_advanced_toolbar_align: "left",
                                        theme_advanced_statusbar_location: "bottom",
                                        theme_advanced_resizing: true
                                        ,
                                        extended_valid_elements: "html,head,body,hr[class|width|size|noshade],iframe[src|width|height|name|align],style",
                                        convert_urls: false,
                                        urlconvertor_callback: "email_urlconvertor",
                                        paste_as_text: false,
                                        plugins: "textcolor link image media",
                                        toolbar1: "formatselect fontselect fontsizeselect | link image | forecolor backcolor | undo redo",
                                        toolbar2: "bold underline italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent blockquote",
                                        force_br_newlines: false,
                                        force_p_newlines: false,
                                        forced_root_block: "",
                                        fontsize_formats: "4pt 5pt 6pt 8pt 10pt 12pt 14pt 18pt 24pt 36pt",
                                        language: "fr"
                                    });
                                </script>            <span class="culture">en</span>
                                <span class="lang culture-en">English</span>

                            </div>
                            <div class="widget culture-br" title="Brezhoneg">
                                <div id="mce_237" class="mce-tinymce mce-container mce-panel" hidefocus="1" tabindex="-1" style="visibility: hidden; border-width: 1px; width: 425px;"><div id="mce_237-body" class="mce-container-body mce-stack-layout"><div id="mce_238" class="mce-container mce-menubar mce-toolbar mce-first mce-stack-layout-item" role="menubar" style="border-width: 0px 0px 1px;"><div id="mce_238-body" class="mce-container-body mce-flow-layout"><div id="mce_239" class="mce-widget mce-btn mce-menubtn mce-first mce-flow-layout-item" tabindex="-1" role="menuitem" aria-haspopup="true"><button id="mce_239-open" role="presentation" type="button" tabindex="-1"><span>Fichier</span> <i class="mce-caret"></i></button></div><div id="mce_240" class="mce-widget mce-btn mce-menubtn mce-flow-layout-item" tabindex="-1" role="menuitem" aria-haspopup="true"><button id="mce_240-open" role="presentation" type="button" tabindex="-1"><span>Editer</span> <i class="mce-caret"></i></button></div><div id="mce_241" class="mce-widget mce-btn mce-menubtn mce-flow-layout-item" tabindex="-1" role="menuitem" aria-haspopup="true"><button id="mce_241-open" role="presentation" type="button" tabindex="-1"><span>Insérer</span> <i class="mce-caret"></i></button></div><div id="mce_242" class="mce-widget mce-btn mce-menubtn mce-flow-layout-item" tabindex="-1" role="menuitem" aria-haspopup="true"><button id="mce_242-open" role="presentation" type="button" tabindex="-1"><span>Voir</span> <i class="mce-caret"></i></button></div><div id="mce_243" class="mce-widget mce-btn mce-menubtn mce-last mce-flow-layout-item" tabindex="-1" role="menuitem" aria-haspopup="true"><button id="mce_243-open" role="presentation" type="button" tabindex="-1"><span>Format</span> <i class="mce-caret"></i></button></div></div></div><div id="mce_244" class="mce-container mce-panel mce-stack-layout-item" hidefocus="1" tabindex="-1"><div id="mce_244-body" class="mce-container-body mce-stack-layout"><div id="mce_245" class="mce-container mce-toolbar mce-first mce-stack-layout-item" role="toolbar"><div id="mce_245-body" class="mce-container-body mce-flow-layout"><div id="mce_246" class="mce-container mce-first mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_246-body"><div id="mce_216" class="mce-widget mce-btn mce-menubtn mce-fixed-width mce-listbox mce-first" tabindex="-1" role="button" aria-haspopup="true"><button id="mce_216-open" role="presentation" type="button" tabindex="-1"><span>Paragraph</span> <i class="mce-caret"></i></button></div><div id="mce_217" class="mce-widget mce-btn mce-menubtn mce-fixed-width mce-listbox" tabindex="-1" role="button" aria-labeledby="mce_217" aria-label="Font Family" aria-haspopup="true"><button id="mce_217-open" role="presentation" type="button" tabindex="-1"><span>Font Family</span> <i class="mce-caret"></i></button></div><div id="mce_218" class="mce-widget mce-btn mce-menubtn mce-fixed-width mce-listbox mce-last" tabindex="-1" role="button" aria-labeledby="mce_218" aria-label="Font Sizes" aria-haspopup="true"><button id="mce_218-open" role="presentation" type="button" tabindex="-1"><span>Font Sizes</span> <i class="mce-caret"></i></button></div></div></div><div id="mce_247" class="mce-container mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_247-body"><div id="mce_219" class="mce-widget mce-btn mce-first" tabindex="-1" role="button" aria-labeledby="mce_219" aria-label="Insert/edit link"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-link"></i></button></div><div id="mce_220" class="mce-widget mce-btn mce-last" tabindex="-1" role="button" aria-labeledby="mce_220" aria-label="Insert/edit image"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-image"></i></button></div></div></div><div id="mce_248" class="mce-container mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_248-body"><div id="mce_221" class="mce-widget mce-btn mce-colorbutton mce-first" role="button" aria-labeledby="mce_221" aria-label="Text color"><button role="presentation" hidefocus="" type="button" tabindex="-1"><i class="mce-ico mce-i-forecolor"></i><span id="mce_221-preview" class="mce-preview"></span></button><button type="button" class="mce-open" hidefocus="" tabindex="-1"> <i class="mce-caret"></i></button></div><div id="mce_222" class="mce-widget mce-btn mce-colorbutton mce-last" role="button" aria-labeledby="mce_222" aria-label="Background color"><button role="presentation" hidefocus="" type="button" tabindex="-1"><i class="mce-ico mce-i-backcolor"></i><span id="mce_222-preview" class="mce-preview"></span></button><button type="button" class="mce-open" hidefocus="" tabindex="-1"> <i class="mce-caret"></i></button></div></div></div><div id="mce_249" class="mce-container mce-last mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_249-body"><div id="mce_223" class="mce-widget mce-btn mce-first mce-disabled" tabindex="-1" role="button" aria-labeledby="mce_223" aria-label="Undo" aria-disabled="true"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-undo"></i></button></div><div id="mce_224" class="mce-widget mce-btn mce-last mce-disabled" tabindex="-1" role="button" aria-labeledby="mce_224" aria-label="Redo" aria-disabled="true"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-redo"></i></button></div></div></div></div></div><div id="mce_250" class="mce-container mce-toolbar mce-last mce-stack-layout-item" role="toolbar"><div id="mce_250-body" class="mce-container-body mce-flow-layout"><div id="mce_251" class="mce-container mce-first mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_251-body"><div id="mce_225" class="mce-widget mce-btn mce-first" tabindex="-1" role="button" aria-labeledby="mce_225" aria-label="Bold"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-bold"></i></button></div><div id="mce_226" class="mce-widget mce-btn" tabindex="-1" role="button" aria-labeledby="mce_226" aria-label="Underline"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-underline"></i></button></div><div id="mce_227" class="mce-widget mce-btn mce-last" tabindex="-1" role="button" aria-labeledby="mce_227" aria-label="Italic"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-italic"></i></button></div></div></div><div id="mce_252" class="mce-container mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_252-body"><div id="mce_228" class="mce-widget mce-btn mce-first" tabindex="-1" role="button" aria-labeledby="mce_228" aria-label="Align left"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignleft"></i></button></div><div id="mce_229" class="mce-widget mce-btn" tabindex="-1" role="button" aria-labeledby="mce_229" aria-label="Align center"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-aligncenter"></i></button></div><div id="mce_230" class="mce-widget mce-btn" tabindex="-1" role="button" aria-labeledby="mce_230" aria-label="Align right"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignright"></i></button></div><div id="mce_231" class="mce-widget mce-btn mce-last" tabindex="-1" role="button" aria-labeledby="mce_231" aria-label="Justify"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignjustify"></i></button></div></div></div><div id="mce_253" class="mce-container mce-last mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_253-body"><div id="mce_232" class="mce-widget mce-btn mce-first" tabindex="-1" role="button" aria-labeledby="mce_232" aria-label="Bullet list"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-bullist"></i></button></div><div id="mce_233" class="mce-widget mce-btn" tabindex="-1" role="button" aria-labeledby="mce_233" aria-label="Numbered list"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-numlist"></i></button></div><div id="mce_234" class="mce-widget mce-btn" tabindex="-1" role="button" aria-labeledby="mce_234" aria-label="Decrease indent"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-outdent"></i></button></div><div id="mce_235" class="mce-widget mce-btn" tabindex="-1" role="button" aria-labeledby="mce_235" aria-label="Increase indent"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-indent"></i></button></div><div id="mce_236" class="mce-widget mce-btn mce-last" tabindex="-1" role="button" aria-labeledby="mce_236" aria-label="Toggle blockquote"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-blockquote"></i></button></div></div></div></div></div></div></div><div id="mce_254" class="mce-edit-area mce-container mce-panel mce-stack-layout-item" hidefocus="1" tabindex="-1" style="border-width: 1px 0px 0px;"><iframe id="event_br_extradesc_ifr" src="javascript:&quot;&quot;" allowtransparency="true" title="Zone Texte Riche. Appuyer sur ALT-F9 pour le menu. Appuyer sur ALT-F10 pour la barre d'outils. Appuyer sur ALT-0 pour de l'aide." style="width: 100%; height: 300px; display: block;" frameborder="0"></iframe></div><div id="mce_255" class="mce-statusbar mce-container mce-panel mce-last mce-stack-layout-item" hidefocus="1" tabindex="-1" style="border-width: 1px 0px 0px;"><div id="mce_255-body" class="mce-container-body mce-flow-layout"><div id="mce_256" class="mce-path"><div class="mce-path-item">&nbsp;</div></div><div id="mce_257" class="mce-last mce-flow-layout-item mce-resizehandle"><i class="mce-ico mce-i-resize"></i></div></div></div></div></div><textarea name="event[br][extradesc]" id="event_br_extradesc" style="display: none;" aria-hidden="true"></textarea><script type="text/javascript">
                                    tinyMCE.init({
                                        mode: "exact",
                                        elements: "event_br_extradesc",
                                        theme: "modern",
                                        width: "425px",
                                        height: "300px",
                                        theme_advanced_toolbar_location: "top",
                                        theme_advanced_toolbar_align: "left",
                                        theme_advanced_statusbar_location: "bottom",
                                        theme_advanced_resizing: true
                                        ,
                                        extended_valid_elements: "html,head,body,hr[class|width|size|noshade],iframe[src|width|height|name|align],style",
                                        convert_urls: false,
                                        urlconvertor_callback: "email_urlconvertor",
                                        paste_as_text: false,
                                        plugins: "textcolor link image media",
                                        toolbar1: "formatselect fontselect fontsizeselect | link image | forecolor backcolor | undo redo",
                                        toolbar2: "bold underline italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent blockquote",
                                        force_br_newlines: false,
                                        force_p_newlines: false,
                                        forced_root_block: "",
                                        fontsize_formats: "4pt 5pt 6pt 8pt 10pt 12pt 14pt 18pt 24pt 36pt",
                                        language: "fr"
                                    });
                                </script>            <span class="culture">br</span>
                                <span class="lang culture-br">Brezhoneg</span>

                            </div>
                        </div>


                        <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_extraspec">
                            <label for="event_fr_extraspec">Spécification suppl.</label>    <div class="label ui-helper-clearfix">

                            </div>

                            <div class="widget culture-fr" title="Français">
                                <div id="mce_279" class="mce-tinymce mce-container mce-panel" hidefocus="1" tabindex="-1" style="visibility: hidden; border-width: 1px; width: 425px;"><div id="mce_279-body" class="mce-container-body mce-stack-layout"><div id="mce_280" class="mce-container mce-menubar mce-toolbar mce-first mce-stack-layout-item" role="menubar" style="border-width: 0px 0px 1px;"><div id="mce_280-body" class="mce-container-body mce-flow-layout"><div id="mce_281" class="mce-widget mce-btn mce-menubtn mce-first mce-flow-layout-item" tabindex="-1" role="menuitem" aria-haspopup="true"><button id="mce_281-open" role="presentation" type="button" tabindex="-1"><span>Fichier</span> <i class="mce-caret"></i></button></div><div id="mce_282" class="mce-widget mce-btn mce-menubtn mce-flow-layout-item" tabindex="-1" role="menuitem" aria-haspopup="true"><button id="mce_282-open" role="presentation" type="button" tabindex="-1"><span>Editer</span> <i class="mce-caret"></i></button></div><div id="mce_283" class="mce-widget mce-btn mce-menubtn mce-flow-layout-item" tabindex="-1" role="menuitem" aria-haspopup="true"><button id="mce_283-open" role="presentation" type="button" tabindex="-1"><span>Insérer</span> <i class="mce-caret"></i></button></div><div id="mce_284" class="mce-widget mce-btn mce-menubtn mce-flow-layout-item" tabindex="-1" role="menuitem" aria-haspopup="true"><button id="mce_284-open" role="presentation" type="button" tabindex="-1"><span>Voir</span> <i class="mce-caret"></i></button></div><div id="mce_285" class="mce-widget mce-btn mce-menubtn mce-last mce-flow-layout-item" tabindex="-1" role="menuitem" aria-haspopup="true"><button id="mce_285-open" role="presentation" type="button" tabindex="-1"><span>Format</span> <i class="mce-caret"></i></button></div></div></div><div id="mce_286" class="mce-container mce-panel mce-stack-layout-item" hidefocus="1" tabindex="-1"><div id="mce_286-body" class="mce-container-body mce-stack-layout"><div id="mce_287" class="mce-container mce-toolbar mce-first mce-stack-layout-item" role="toolbar"><div id="mce_287-body" class="mce-container-body mce-flow-layout"><div id="mce_288" class="mce-container mce-first mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_288-body"><div id="mce_258" class="mce-widget mce-btn mce-menubtn mce-fixed-width mce-listbox mce-first" tabindex="-1" role="button" aria-haspopup="true"><button id="mce_258-open" role="presentation" type="button" tabindex="-1"><span>Paragraph</span> <i class="mce-caret"></i></button></div><div id="mce_259" class="mce-widget mce-btn mce-menubtn mce-fixed-width mce-listbox" tabindex="-1" role="button" aria-labeledby="mce_259" aria-label="Font Family" aria-haspopup="true"><button id="mce_259-open" role="presentation" type="button" tabindex="-1"><span>Font Family</span> <i class="mce-caret"></i></button></div><div id="mce_260" class="mce-widget mce-btn mce-menubtn mce-fixed-width mce-listbox mce-last" tabindex="-1" role="button" aria-labeledby="mce_260" aria-label="Font Sizes" aria-haspopup="true"><button id="mce_260-open" role="presentation" type="button" tabindex="-1"><span>Font Sizes</span> <i class="mce-caret"></i></button></div></div></div><div id="mce_289" class="mce-container mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_289-body"><div id="mce_261" class="mce-widget mce-btn mce-first" tabindex="-1" role="button" aria-labeledby="mce_261" aria-label="Insert/edit link"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-link"></i></button></div><div id="mce_262" class="mce-widget mce-btn mce-last" tabindex="-1" role="button" aria-labeledby="mce_262" aria-label="Insert/edit image"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-image"></i></button></div></div></div><div id="mce_290" class="mce-container mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_290-body"><div id="mce_263" class="mce-widget mce-btn mce-colorbutton mce-first" role="button" aria-labeledby="mce_263" aria-label="Text color"><button role="presentation" hidefocus="" type="button" tabindex="-1"><i class="mce-ico mce-i-forecolor"></i><span id="mce_263-preview" class="mce-preview"></span></button><button type="button" class="mce-open" hidefocus="" tabindex="-1"> <i class="mce-caret"></i></button></div><div id="mce_264" class="mce-widget mce-btn mce-colorbutton mce-last" role="button" aria-labeledby="mce_264" aria-label="Background color"><button role="presentation" hidefocus="" type="button" tabindex="-1"><i class="mce-ico mce-i-backcolor"></i><span id="mce_264-preview" class="mce-preview"></span></button><button type="button" class="mce-open" hidefocus="" tabindex="-1"> <i class="mce-caret"></i></button></div></div></div><div id="mce_291" class="mce-container mce-last mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_291-body"><div id="mce_265" class="mce-widget mce-btn mce-first mce-disabled" tabindex="-1" role="button" aria-labeledby="mce_265" aria-label="Undo" aria-disabled="true"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-undo"></i></button></div><div id="mce_266" class="mce-widget mce-btn mce-last mce-disabled" tabindex="-1" role="button" aria-labeledby="mce_266" aria-label="Redo" aria-disabled="true"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-redo"></i></button></div></div></div></div></div><div id="mce_292" class="mce-container mce-toolbar mce-last mce-stack-layout-item" role="toolbar"><div id="mce_292-body" class="mce-container-body mce-flow-layout"><div id="mce_293" class="mce-container mce-first mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_293-body"><div id="mce_267" class="mce-widget mce-btn mce-first" tabindex="-1" role="button" aria-labeledby="mce_267" aria-label="Bold"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-bold"></i></button></div><div id="mce_268" class="mce-widget mce-btn" tabindex="-1" role="button" aria-labeledby="mce_268" aria-label="Underline"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-underline"></i></button></div><div id="mce_269" class="mce-widget mce-btn mce-last" tabindex="-1" role="button" aria-labeledby="mce_269" aria-label="Italic"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-italic"></i></button></div></div></div><div id="mce_294" class="mce-container mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_294-body"><div id="mce_270" class="mce-widget mce-btn mce-first" tabindex="-1" role="button" aria-labeledby="mce_270" aria-label="Align left"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignleft"></i></button></div><div id="mce_271" class="mce-widget mce-btn" tabindex="-1" role="button" aria-labeledby="mce_271" aria-label="Align center"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-aligncenter"></i></button></div><div id="mce_272" class="mce-widget mce-btn" tabindex="-1" role="button" aria-labeledby="mce_272" aria-label="Align right"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignright"></i></button></div><div id="mce_273" class="mce-widget mce-btn mce-last" tabindex="-1" role="button" aria-labeledby="mce_273" aria-label="Justify"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignjustify"></i></button></div></div></div><div id="mce_295" class="mce-container mce-last mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_295-body"><div id="mce_274" class="mce-widget mce-btn mce-first" tabindex="-1" role="button" aria-labeledby="mce_274" aria-label="Bullet list"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-bullist"></i></button></div><div id="mce_275" class="mce-widget mce-btn" tabindex="-1" role="button" aria-labeledby="mce_275" aria-label="Numbered list"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-numlist"></i></button></div><div id="mce_276" class="mce-widget mce-btn" tabindex="-1" role="button" aria-labeledby="mce_276" aria-label="Decrease indent"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-outdent"></i></button></div><div id="mce_277" class="mce-widget mce-btn" tabindex="-1" role="button" aria-labeledby="mce_277" aria-label="Increase indent"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-indent"></i></button></div><div id="mce_278" class="mce-widget mce-btn mce-last" tabindex="-1" role="button" aria-labeledby="mce_278" aria-label="Toggle blockquote"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-blockquote"></i></button></div></div></div></div></div></div></div><div id="mce_296" class="mce-edit-area mce-container mce-panel mce-stack-layout-item" hidefocus="1" tabindex="-1" style="border-width: 1px 0px 0px;"><iframe id="event_fr_extraspec_ifr" src="javascript:&quot;&quot;" allowtransparency="true" title="Zone Texte Riche. Appuyer sur ALT-F9 pour le menu. Appuyer sur ALT-F10 pour la barre d'outils. Appuyer sur ALT-0 pour de l'aide." style="width: 100%; height: 300px; display: block;" frameborder="0"></iframe></div><div id="mce_297" class="mce-statusbar mce-container mce-panel mce-last mce-stack-layout-item" hidefocus="1" tabindex="-1" style="border-width: 1px 0px 0px;"><div id="mce_297-body" class="mce-container-body mce-flow-layout"><div id="mce_298" class="mce-path"><div class="mce-path-item">&nbsp;</div></div><div id="mce_299" class="mce-last mce-flow-layout-item mce-resizehandle"><i class="mce-ico mce-i-resize"></i></div></div></div></div></div><textarea name="event[fr][extraspec]" id="event_fr_extraspec" style="display: none;" aria-hidden="true"></textarea><script type="text/javascript">
                                    tinyMCE.init({
                                        mode: "exact",
                                        elements: "event_fr_extraspec",
                                        theme: "modern",
                                        width: "425px",
                                        height: "300px",
                                        theme_advanced_toolbar_location: "top",
                                        theme_advanced_toolbar_align: "left",
                                        theme_advanced_statusbar_location: "bottom",
                                        theme_advanced_resizing: true
                                        ,
                                        extended_valid_elements: "html,head,body,hr[class|width|size|noshade],iframe[src|width|height|name|align],style",
                                        convert_urls: false,
                                        urlconvertor_callback: "email_urlconvertor",
                                        paste_as_text: false,
                                        plugins: "textcolor link image media",
                                        toolbar1: "formatselect fontselect fontsizeselect | link image | forecolor backcolor | undo redo",
                                        toolbar2: "bold underline italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent blockquote",
                                        force_br_newlines: false,
                                        force_p_newlines: false,
                                        forced_root_block: "",
                                        fontsize_formats: "4pt 5pt 6pt 8pt 10pt 12pt 14pt 18pt 24pt 36pt",
                                        language: "fr"
                                    });
                                </script>            <span class="culture">fr</span>
                                <span class="lang culture-fr">Français</span>

                            </div>
                            <div class="widget culture-en" title="English">
                                <div id="mce_321" class="mce-tinymce mce-container mce-panel" hidefocus="1" tabindex="-1" style="visibility: hidden; border-width: 1px; width: 425px;"><div id="mce_321-body" class="mce-container-body mce-stack-layout"><div id="mce_322" class="mce-container mce-menubar mce-toolbar mce-first mce-stack-layout-item" role="menubar" style="border-width: 0px 0px 1px;"><div id="mce_322-body" class="mce-container-body mce-flow-layout"><div id="mce_323" class="mce-widget mce-btn mce-menubtn mce-first mce-flow-layout-item" tabindex="-1" role="menuitem" aria-haspopup="true"><button id="mce_323-open" role="presentation" type="button" tabindex="-1"><span>Fichier</span> <i class="mce-caret"></i></button></div><div id="mce_324" class="mce-widget mce-btn mce-menubtn mce-flow-layout-item" tabindex="-1" role="menuitem" aria-haspopup="true"><button id="mce_324-open" role="presentation" type="button" tabindex="-1"><span>Editer</span> <i class="mce-caret"></i></button></div><div id="mce_325" class="mce-widget mce-btn mce-menubtn mce-flow-layout-item" tabindex="-1" role="menuitem" aria-haspopup="true"><button id="mce_325-open" role="presentation" type="button" tabindex="-1"><span>Insérer</span> <i class="mce-caret"></i></button></div><div id="mce_326" class="mce-widget mce-btn mce-menubtn mce-flow-layout-item" tabindex="-1" role="menuitem" aria-haspopup="true"><button id="mce_326-open" role="presentation" type="button" tabindex="-1"><span>Voir</span> <i class="mce-caret"></i></button></div><div id="mce_327" class="mce-widget mce-btn mce-menubtn mce-last mce-flow-layout-item" tabindex="-1" role="menuitem" aria-haspopup="true"><button id="mce_327-open" role="presentation" type="button" tabindex="-1"><span>Format</span> <i class="mce-caret"></i></button></div></div></div><div id="mce_328" class="mce-container mce-panel mce-stack-layout-item" hidefocus="1" tabindex="-1"><div id="mce_328-body" class="mce-container-body mce-stack-layout"><div id="mce_329" class="mce-container mce-toolbar mce-first mce-stack-layout-item" role="toolbar"><div id="mce_329-body" class="mce-container-body mce-flow-layout"><div id="mce_330" class="mce-container mce-first mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_330-body"><div id="mce_300" class="mce-widget mce-btn mce-menubtn mce-fixed-width mce-listbox mce-first" tabindex="-1" role="button" aria-haspopup="true"><button id="mce_300-open" role="presentation" type="button" tabindex="-1"><span>Paragraph</span> <i class="mce-caret"></i></button></div><div id="mce_301" class="mce-widget mce-btn mce-menubtn mce-fixed-width mce-listbox" tabindex="-1" role="button" aria-labeledby="mce_301" aria-label="Font Family" aria-haspopup="true"><button id="mce_301-open" role="presentation" type="button" tabindex="-1"><span>Font Family</span> <i class="mce-caret"></i></button></div><div id="mce_302" class="mce-widget mce-btn mce-menubtn mce-fixed-width mce-listbox mce-last" tabindex="-1" role="button" aria-labeledby="mce_302" aria-label="Font Sizes" aria-haspopup="true"><button id="mce_302-open" role="presentation" type="button" tabindex="-1"><span>Font Sizes</span> <i class="mce-caret"></i></button></div></div></div><div id="mce_331" class="mce-container mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_331-body"><div id="mce_303" class="mce-widget mce-btn mce-first" tabindex="-1" role="button" aria-labeledby="mce_303" aria-label="Insert/edit link"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-link"></i></button></div><div id="mce_304" class="mce-widget mce-btn mce-last" tabindex="-1" role="button" aria-labeledby="mce_304" aria-label="Insert/edit image"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-image"></i></button></div></div></div><div id="mce_332" class="mce-container mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_332-body"><div id="mce_305" class="mce-widget mce-btn mce-colorbutton mce-first" role="button" aria-labeledby="mce_305" aria-label="Text color"><button role="presentation" hidefocus="" type="button" tabindex="-1"><i class="mce-ico mce-i-forecolor"></i><span id="mce_305-preview" class="mce-preview"></span></button><button type="button" class="mce-open" hidefocus="" tabindex="-1"> <i class="mce-caret"></i></button></div><div id="mce_306" class="mce-widget mce-btn mce-colorbutton mce-last" role="button" aria-labeledby="mce_306" aria-label="Background color"><button role="presentation" hidefocus="" type="button" tabindex="-1"><i class="mce-ico mce-i-backcolor"></i><span id="mce_306-preview" class="mce-preview"></span></button><button type="button" class="mce-open" hidefocus="" tabindex="-1"> <i class="mce-caret"></i></button></div></div></div><div id="mce_333" class="mce-container mce-last mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_333-body"><div id="mce_307" class="mce-widget mce-btn mce-first mce-disabled" tabindex="-1" role="button" aria-labeledby="mce_307" aria-label="Undo" aria-disabled="true"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-undo"></i></button></div><div id="mce_308" class="mce-widget mce-btn mce-last mce-disabled" tabindex="-1" role="button" aria-labeledby="mce_308" aria-label="Redo" aria-disabled="true"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-redo"></i></button></div></div></div></div></div><div id="mce_334" class="mce-container mce-toolbar mce-last mce-stack-layout-item" role="toolbar"><div id="mce_334-body" class="mce-container-body mce-flow-layout"><div id="mce_335" class="mce-container mce-first mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_335-body"><div id="mce_309" class="mce-widget mce-btn mce-first" tabindex="-1" role="button" aria-labeledby="mce_309" aria-label="Bold"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-bold"></i></button></div><div id="mce_310" class="mce-widget mce-btn" tabindex="-1" role="button" aria-labeledby="mce_310" aria-label="Underline"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-underline"></i></button></div><div id="mce_311" class="mce-widget mce-btn mce-last" tabindex="-1" role="button" aria-labeledby="mce_311" aria-label="Italic"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-italic"></i></button></div></div></div><div id="mce_336" class="mce-container mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_336-body"><div id="mce_312" class="mce-widget mce-btn mce-first" tabindex="-1" role="button" aria-labeledby="mce_312" aria-label="Align left"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignleft"></i></button></div><div id="mce_313" class="mce-widget mce-btn" tabindex="-1" role="button" aria-labeledby="mce_313" aria-label="Align center"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-aligncenter"></i></button></div><div id="mce_314" class="mce-widget mce-btn" tabindex="-1" role="button" aria-labeledby="mce_314" aria-label="Align right"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignright"></i></button></div><div id="mce_315" class="mce-widget mce-btn mce-last" tabindex="-1" role="button" aria-labeledby="mce_315" aria-label="Justify"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignjustify"></i></button></div></div></div><div id="mce_337" class="mce-container mce-last mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_337-body"><div id="mce_316" class="mce-widget mce-btn mce-first" tabindex="-1" role="button" aria-labeledby="mce_316" aria-label="Bullet list"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-bullist"></i></button></div><div id="mce_317" class="mce-widget mce-btn" tabindex="-1" role="button" aria-labeledby="mce_317" aria-label="Numbered list"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-numlist"></i></button></div><div id="mce_318" class="mce-widget mce-btn" tabindex="-1" role="button" aria-labeledby="mce_318" aria-label="Decrease indent"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-outdent"></i></button></div><div id="mce_319" class="mce-widget mce-btn" tabindex="-1" role="button" aria-labeledby="mce_319" aria-label="Increase indent"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-indent"></i></button></div><div id="mce_320" class="mce-widget mce-btn mce-last" tabindex="-1" role="button" aria-labeledby="mce_320" aria-label="Toggle blockquote"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-blockquote"></i></button></div></div></div></div></div></div></div><div id="mce_338" class="mce-edit-area mce-container mce-panel mce-stack-layout-item" hidefocus="1" tabindex="-1" style="border-width: 1px 0px 0px;"><iframe id="event_en_extraspec_ifr" src="javascript:&quot;&quot;" allowtransparency="true" title="Zone Texte Riche. Appuyer sur ALT-F9 pour le menu. Appuyer sur ALT-F10 pour la barre d'outils. Appuyer sur ALT-0 pour de l'aide." style="width: 100%; height: 300px; display: block;" frameborder="0"></iframe></div><div id="mce_339" class="mce-statusbar mce-container mce-panel mce-last mce-stack-layout-item" hidefocus="1" tabindex="-1" style="border-width: 1px 0px 0px;"><div id="mce_339-body" class="mce-container-body mce-flow-layout"><div id="mce_340" class="mce-path"><div class="mce-path-item">&nbsp;</div></div><div id="mce_341" class="mce-last mce-flow-layout-item mce-resizehandle"><i class="mce-ico mce-i-resize"></i></div></div></div></div></div><textarea name="event[en][extraspec]" id="event_en_extraspec" style="display: none;" aria-hidden="true"></textarea><script type="text/javascript">
                                    tinyMCE.init({
                                        mode: "exact",
                                        elements: "event_en_extraspec",
                                        theme: "modern",
                                        width: "425px",
                                        height: "300px",
                                        theme_advanced_toolbar_location: "top",
                                        theme_advanced_toolbar_align: "left",
                                        theme_advanced_statusbar_location: "bottom",
                                        theme_advanced_resizing: true
                                        ,
                                        extended_valid_elements: "html,head,body,hr[class|width|size|noshade],iframe[src|width|height|name|align],style",
                                        convert_urls: false,
                                        urlconvertor_callback: "email_urlconvertor",
                                        paste_as_text: false,
                                        plugins: "textcolor link image media",
                                        toolbar1: "formatselect fontselect fontsizeselect | link image | forecolor backcolor | undo redo",
                                        toolbar2: "bold underline italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent blockquote",
                                        force_br_newlines: false,
                                        force_p_newlines: false,
                                        forced_root_block: "",
                                        fontsize_formats: "4pt 5pt 6pt 8pt 10pt 12pt 14pt 18pt 24pt 36pt",
                                        language: "fr"
                                    });
                                </script>            <span class="culture">en</span>
                                <span class="lang culture-en">English</span>

                            </div>
                            <div class="widget culture-br" title="Brezhoneg">
                                <div id="mce_363" class="mce-tinymce mce-container mce-panel" hidefocus="1" tabindex="-1" style="visibility: hidden; border-width: 1px; width: 425px;"><div id="mce_363-body" class="mce-container-body mce-stack-layout"><div id="mce_364" class="mce-container mce-menubar mce-toolbar mce-first mce-stack-layout-item" role="menubar" style="border-width: 0px 0px 1px;"><div id="mce_364-body" class="mce-container-body mce-flow-layout"><div id="mce_365" class="mce-widget mce-btn mce-menubtn mce-first mce-flow-layout-item" tabindex="-1" role="menuitem" aria-haspopup="true"><button id="mce_365-open" role="presentation" type="button" tabindex="-1"><span>Fichier</span> <i class="mce-caret"></i></button></div><div id="mce_366" class="mce-widget mce-btn mce-menubtn mce-flow-layout-item" tabindex="-1" role="menuitem" aria-haspopup="true"><button id="mce_366-open" role="presentation" type="button" tabindex="-1"><span>Editer</span> <i class="mce-caret"></i></button></div><div id="mce_367" class="mce-widget mce-btn mce-menubtn mce-flow-layout-item" tabindex="-1" role="menuitem" aria-haspopup="true"><button id="mce_367-open" role="presentation" type="button" tabindex="-1"><span>Insérer</span> <i class="mce-caret"></i></button></div><div id="mce_368" class="mce-widget mce-btn mce-menubtn mce-flow-layout-item" tabindex="-1" role="menuitem" aria-haspopup="true"><button id="mce_368-open" role="presentation" type="button" tabindex="-1"><span>Voir</span> <i class="mce-caret"></i></button></div><div id="mce_369" class="mce-widget mce-btn mce-menubtn mce-last mce-flow-layout-item" tabindex="-1" role="menuitem" aria-haspopup="true"><button id="mce_369-open" role="presentation" type="button" tabindex="-1"><span>Format</span> <i class="mce-caret"></i></button></div></div></div><div id="mce_370" class="mce-container mce-panel mce-stack-layout-item" hidefocus="1" tabindex="-1"><div id="mce_370-body" class="mce-container-body mce-stack-layout"><div id="mce_371" class="mce-container mce-toolbar mce-first mce-stack-layout-item" role="toolbar"><div id="mce_371-body" class="mce-container-body mce-flow-layout"><div id="mce_372" class="mce-container mce-first mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_372-body"><div id="mce_342" class="mce-widget mce-btn mce-menubtn mce-fixed-width mce-listbox mce-first" tabindex="-1" role="button" aria-haspopup="true"><button id="mce_342-open" role="presentation" type="button" tabindex="-1"><span>Paragraph</span> <i class="mce-caret"></i></button></div><div id="mce_343" class="mce-widget mce-btn mce-menubtn mce-fixed-width mce-listbox" tabindex="-1" role="button" aria-labeledby="mce_343" aria-label="Font Family" aria-haspopup="true"><button id="mce_343-open" role="presentation" type="button" tabindex="-1"><span>Font Family</span> <i class="mce-caret"></i></button></div><div id="mce_344" class="mce-widget mce-btn mce-menubtn mce-fixed-width mce-listbox mce-last" tabindex="-1" role="button" aria-labeledby="mce_344" aria-label="Font Sizes" aria-haspopup="true"><button id="mce_344-open" role="presentation" type="button" tabindex="-1"><span>Font Sizes</span> <i class="mce-caret"></i></button></div></div></div><div id="mce_373" class="mce-container mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_373-body"><div id="mce_345" class="mce-widget mce-btn mce-first" tabindex="-1" role="button" aria-labeledby="mce_345" aria-label="Insert/edit link"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-link"></i></button></div><div id="mce_346" class="mce-widget mce-btn mce-last" tabindex="-1" role="button" aria-labeledby="mce_346" aria-label="Insert/edit image"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-image"></i></button></div></div></div><div id="mce_374" class="mce-container mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_374-body"><div id="mce_347" class="mce-widget mce-btn mce-colorbutton mce-first" role="button" aria-labeledby="mce_347" aria-label="Text color"><button role="presentation" hidefocus="" type="button" tabindex="-1"><i class="mce-ico mce-i-forecolor"></i><span id="mce_347-preview" class="mce-preview"></span></button><button type="button" class="mce-open" hidefocus="" tabindex="-1"> <i class="mce-caret"></i></button></div><div id="mce_348" class="mce-widget mce-btn mce-colorbutton mce-last" role="button" aria-labeledby="mce_348" aria-label="Background color"><button role="presentation" hidefocus="" type="button" tabindex="-1"><i class="mce-ico mce-i-backcolor"></i><span id="mce_348-preview" class="mce-preview"></span></button><button type="button" class="mce-open" hidefocus="" tabindex="-1"> <i class="mce-caret"></i></button></div></div></div><div id="mce_375" class="mce-container mce-last mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_375-body"><div id="mce_349" class="mce-widget mce-btn mce-first mce-disabled" tabindex="-1" role="button" aria-labeledby="mce_349" aria-label="Undo" aria-disabled="true"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-undo"></i></button></div><div id="mce_350" class="mce-widget mce-btn mce-last mce-disabled" tabindex="-1" role="button" aria-labeledby="mce_350" aria-label="Redo" aria-disabled="true"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-redo"></i></button></div></div></div></div></div><div id="mce_376" class="mce-container mce-toolbar mce-last mce-stack-layout-item" role="toolbar"><div id="mce_376-body" class="mce-container-body mce-flow-layout"><div id="mce_377" class="mce-container mce-first mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_377-body"><div id="mce_351" class="mce-widget mce-btn mce-first" tabindex="-1" role="button" aria-labeledby="mce_351" aria-label="Bold"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-bold"></i></button></div><div id="mce_352" class="mce-widget mce-btn" tabindex="-1" role="button" aria-labeledby="mce_352" aria-label="Underline"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-underline"></i></button></div><div id="mce_353" class="mce-widget mce-btn mce-last" tabindex="-1" role="button" aria-labeledby="mce_353" aria-label="Italic"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-italic"></i></button></div></div></div><div id="mce_378" class="mce-container mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_378-body"><div id="mce_354" class="mce-widget mce-btn mce-first" tabindex="-1" role="button" aria-labeledby="mce_354" aria-label="Align left"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignleft"></i></button></div><div id="mce_355" class="mce-widget mce-btn" tabindex="-1" role="button" aria-labeledby="mce_355" aria-label="Align center"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-aligncenter"></i></button></div><div id="mce_356" class="mce-widget mce-btn" tabindex="-1" role="button" aria-labeledby="mce_356" aria-label="Align right"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignright"></i></button></div><div id="mce_357" class="mce-widget mce-btn mce-last" tabindex="-1" role="button" aria-labeledby="mce_357" aria-label="Justify"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignjustify"></i></button></div></div></div><div id="mce_379" class="mce-container mce-last mce-flow-layout-item mce-btn-group" role="toolbar"><div id="mce_379-body"><div id="mce_358" class="mce-widget mce-btn mce-first" tabindex="-1" role="button" aria-labeledby="mce_358" aria-label="Bullet list"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-bullist"></i></button></div><div id="mce_359" class="mce-widget mce-btn" tabindex="-1" role="button" aria-labeledby="mce_359" aria-label="Numbered list"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-numlist"></i></button></div><div id="mce_360" class="mce-widget mce-btn" tabindex="-1" role="button" aria-labeledby="mce_360" aria-label="Decrease indent"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-outdent"></i></button></div><div id="mce_361" class="mce-widget mce-btn" tabindex="-1" role="button" aria-labeledby="mce_361" aria-label="Increase indent"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-indent"></i></button></div><div id="mce_362" class="mce-widget mce-btn mce-last" tabindex="-1" role="button" aria-labeledby="mce_362" aria-label="Toggle blockquote"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-blockquote"></i></button></div></div></div></div></div></div></div><div id="mce_380" class="mce-edit-area mce-container mce-panel mce-stack-layout-item" hidefocus="1" tabindex="-1" style="border-width: 1px 0px 0px;"><iframe id="event_br_extraspec_ifr" src="javascript:&quot;&quot;" allowtransparency="true" title="Zone Texte Riche. Appuyer sur ALT-F9 pour le menu. Appuyer sur ALT-F10 pour la barre d'outils. Appuyer sur ALT-0 pour de l'aide." style="width: 100%; height: 300px; display: block;" frameborder="0"></iframe></div><div id="mce_381" class="mce-statusbar mce-container mce-panel mce-last mce-stack-layout-item" hidefocus="1" tabindex="-1" style="border-width: 1px 0px 0px;"><div id="mce_381-body" class="mce-container-body mce-flow-layout"><div id="mce_382" class="mce-path"><div class="mce-path-item">&nbsp;</div></div><div id="mce_383" class="mce-last mce-flow-layout-item mce-resizehandle"><i class="mce-ico mce-i-resize"></i></div></div></div></div></div><textarea name="event[br][extraspec]" id="event_br_extraspec" style="display: none;" aria-hidden="true"></textarea><script type="text/javascript">
                                    tinyMCE.init({
                                        mode: "exact",
                                        elements: "event_br_extraspec",
                                        theme: "modern",
                                        width: "425px",
                                        height: "300px",
                                        theme_advanced_toolbar_location: "top",
                                        theme_advanced_toolbar_align: "left",
                                        theme_advanced_statusbar_location: "bottom",
                                        theme_advanced_resizing: true
                                        ,
                                        extended_valid_elements: "html,head,body,hr[class|width|size|noshade],iframe[src|width|height|name|align],style",
                                        convert_urls: false,
                                        urlconvertor_callback: "email_urlconvertor",
                                        paste_as_text: false,
                                        plugins: "textcolor link image media",
                                        toolbar1: "formatselect fontselect fontsizeselect | link image | forecolor backcolor | undo redo",
                                        toolbar2: "bold underline italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent blockquote",
                                        force_br_newlines: false,
                                        force_p_newlines: false,
                                        forced_root_block: "",
                                        fontsize_formats: "4pt 5pt 6pt 8pt 10pt 12pt 14pt 18pt 24pt 36pt",
                                        language: "fr"
                                    });
                                </script>            <span class="culture">br</span>
                                <span class="lang culture-br">Brezhoneg</span>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="sf_admin_actions_block ui-widget ui-helper-clearfix">
                    <ul class="sf_admin_actions_form">
                        <li class="sf_admin_action_list"><a class="fg-button ui-state-default fg-button-icon-left" href="/event.php/event.html"><span class="ui-icon ui-icon-arrowreturnthick-1-w"></span>Liste</a></li>  <li class="sf_admin_action_save"><button type="submit" class="fg-button ui-state-default fg-button-icon-left"><span class="ui-icon ui-icon-circle-check"></span>Enregistrer</button></li>  <li class="sf_admin_action_save_and_add"><button type="submit" name="_save_and_add" class="fg-button ui-state-default fg-button-icon-left"><span class="ui-icon ui-icon-circle-plus"></span>Enregistrer et ajouter</button></li></ul>
                </div>

            </form>
        </div>
    </div>
    
    <div id="sf_admin_footer">


    </div>

</div>

<script>
    var canvas = new fabric.Canvas('tktCanvas');
</script>