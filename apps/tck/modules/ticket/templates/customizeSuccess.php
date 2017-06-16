<?php
use_stylesheet('/css/customize/bootstrap-mod.min.css');
use_javascript('/js/customize/bootstrap.min.js');
use_javascript('/js/customize/interact.js');
use_javascript('/js/customize/fabric.min.js');
use_javascript('/js/customize/w3.js');
use_javascript('/js/customize/customFunc.js');
use_javascript('/js/customize/handlebars-v4.0.10.js');
//use_javascript('/js/customize/jquery-1.11.2.js');

//for testing
use_javascript('/js/customize/tThandled.js');
?>

<div class="bootstrap">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div id="menu-tkt" class="panel panel-primary">
                    <div class="panel-heading">
                        <h2 class="panel-title" title="title-menu-tkt">Modification du billet</h2>
                    </div>
                    <div class="panel-body">
                        Panel content
                    </div>

                </div>
            </div>

            <div class="col-md-8">
                <div id="preview-tkt" class="panel panel-primary">
                    <div class="panel-heading">
                        <h2 class="panel-title" title="title-preview-tkt">Prévisualisation</h2>

                    </div>
                    <div class="panel-body">
                        <canvas id="tktCanvas" style="border:1px solid #000000;" width="400" height="300">
                            Please update your browser.
                        </canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <div id="testing">
        
        
    </div>
    

    <script>
        var canvas = new fabric.Canvas('tktCanvas');

        fabric.Image.fromURL('/images/breizhoneg.png', function (oImg) {
            // scale image down, and flip it, before adding it onto canvas
            oImg.scale(0.5).setFlipX(true);
            canvas.add(oImg);
            });
            
        var text = new fabric.Text('hello world', { left: 100, top: 100 });
        canvas.add(text);


        
    </script>
    
    
    
    
        <script id="entry-template" type="text/x-handlebars-template">
    
            <div class="ticket" id="ticketSample"><div class="logo">{{logo}}</div><div class="left"><p class="id">{{id}}</p>
                    <p class="sf_guard_user_id">{{sf_guard_user_id}}</p>
                    <p class="automatic">{{automatic}}</p>
                    <p class="transaction_id">{{transaction_id}}</p>
                    <p class="vat">{{vat}}</p>
                    <p class="value">{{value}}</p>
                    <p class="manifestation_id">{{manifestation_id}}</p>
                    <p class="gauge_id">{{gauge_id}}</p>
                    <p class="price_id">{{price_id}}</p>
                    <p class="price_name">{{price_name}}</p>
                    <p class="printed_at">{{printed_at}}</p>
                    <p class="barcode">{{barcode}}</p>
                    <p class="taxes">{{taxes}}</p>
                    <p class="auto_by_hold">{{auto_by_hold}}</p>
                    <p class="created_at">{{created_at}}</p>
                    <p class="updated_at">{{updated_at}}</p>
                    <p class="version">{{version}}</p>
                    <p class="Transaction.id">{{Transaction.id}}</p>
                    <p class="Transaction.sf_guard_user_id">{{Transaction.sf_guard_user_id}}</p>
                    <p class="Transaction.automatic">{{Transaction.automatic}}</p>
                    <p class="Transaction.type">{{Transaction.type}}</p>
                    <p class="Transaction.closed">{{Transaction.closed}}</p>
                    <p class="Transaction.send_an_email">{{Transaction.send_an_email}}</p>
                    <p class="Transaction.deposit">{{Transaction.deposit}}</p>
                    <p class="Transaction.with_shipment">{{Transaction.with_shipment}}</p>
                    <p class="Transaction.created_at">{{Transaction.created_at}}</p>
                    <p class="Transaction.updated_at">{{Transaction.updated_at}}</p>
                    <p class="Transaction.version">{{Transaction.version}}</p>
                    <p class="Manifestation.id">{{Manifestation.id}}</p>
                    <p class="Manifestation.sf_guard_user_id">{{Manifestation.sf_guard_user_id}}</p>
                    <p class="Manifestation.automatic">{{Manifestation.automatic}}</p>
                    <p class="Manifestation.event_id">{{Manifestation.event_id}}</p>
                    <p class="Manifestation.location_id">{{Manifestation.location_id}}</p>
                    <p class="Manifestation.happens_at">{{Manifestation.happens_at}}</p>
                    <p class="Manifestation.duration">{{Manifestation.duration}}</p>
                    <p class="Manifestation.description">{{Manifestation.description}}</p>
                    <p class="Manifestation.vat_id">{{Manifestation.vat_id}}</p>
                    <p class="Manifestation.online_limit">{{Manifestation.online_limit}}</p>
                    <p class="Manifestation.no_print">{{Manifestation.no_print}}</p>
                    <p class="Manifestation.blocking">{{Manifestation.blocking}}</p>
                    <p class="Manifestation.reservation_begins_at">{{Manifestation.reservation_begins_at}}</p>
                    <p class="Manifestation.reservation_ends_at">{{Manifestation.reservation_ends_at}}</p>
                    <p class="Manifestation.reservation_description">{{Manifestation.reservation_description}}</p>
                    <p class="Manifestation.reservation_optional">{{Manifestation.reservation_optional}}</p>
                    <p class="Manifestation.reservation_confirmed">{{Manifestation.reservation_confirmed}}</p>
                    <p class="Manifestation.voucherized">{{Manifestation.voucherized}}</p>
                    <p class="Manifestation.created_at">{{Manifestation.created_at}}</p>
                    <p class="Manifestation.updated_at">{{Manifestation.updated_at}}</p>
                    <p class="Manifestation.version">{{Manifestation.version}}</p>
                    <p class="Manifestation.Location.id">{{Manifestation.Location.id}}</p>
                    <p class="Manifestation.Location.name">{{Manifestation.Location.name}}</p>
                    <p class="Manifestation.Location.address">{{Manifestation.Location.address}}</p>
                    <p class="Manifestation.Location.postalcode">{{Manifestation.Location.postalcode}}</p>
                    <p class="Manifestation.Location.city">{{Manifestation.Location.city}}</p>
                    <p class="Manifestation.Location.country">{{Manifestation.Location.country}}</p>
                    <p class="Manifestation.Location.email">{{Manifestation.Location.email}}</p>
                    <p class="Manifestation.Location.email_no_newsletter">{{Manifestation.Location.email_no_newsletter}}</p>
                    <p class="Manifestation.Location.email_npai">{{Manifestation.Location.email_npai}}</p>
                    <p class="Manifestation.Location.npai">{{Manifestation.Location.npai}}</p>
                    <p class="Manifestation.Location.automatic">{{Manifestation.Location.automatic}}</p>
                    <p class="Manifestation.Location.description">{{Manifestation.Location.description}}</p>
                    <p class="Manifestation.Location.gauge_max">{{Manifestation.Location.gauge_max}}</p>
                    <p class="Manifestation.Location.place">{{Manifestation.Location.place}}</p>
                    <p class="Manifestation.Location.unlimited">{{Manifestation.Location.unlimited}}</p>
                    <p class="Manifestation.Location.auto_control">{{Manifestation.Location.auto_control}}</p>
                    <p class="Manifestation.Location.slug">{{Manifestation.Location.slug}}</p>
                    <p class="Manifestation.Location.created_at">{{Manifestation.Location.created_at}}</p>
                    <p class="Manifestation.Location.updated_at">{{Manifestation.Location.updated_at}}</p>
                    <p class="Manifestation.Event.id">{{Manifestation.Event.id}}</p>
                    <p class="Manifestation.Event.sf_guard_user_id">{{Manifestation.Event.sf_guard_user_id}}</p>
                    <p class="Manifestation.Event.automatic">{{Manifestation.Event.automatic}}</p>
                    <p class="Manifestation.Event.meta_event_id">{{Manifestation.Event.meta_event_id}}</p>
                    <p class="Manifestation.Event.event_category_id">{{Manifestation.Event.event_category_id}}</p>
                    <p class="Manifestation.Event.event_category_description">{{Manifestation.Event.event_category_description}}</p>
                    <p class="Manifestation.Event.staging">{{Manifestation.Event.staging}}</p>
                    <p class="Manifestation.Event.staging_label">{{Manifestation.Event.staging_label}}</p>
                    <p class="Manifestation.Event.writer">{{Manifestation.Event.writer}}</p>
                    <p class="Manifestation.Event.writer_label">{{Manifestation.Event.writer_label}}</p>
                    <p class="Manifestation.Event.duration">{{Manifestation.Event.duration}}</p>
                    <p class="Manifestation.Event.image_url">{{Manifestation.Event.image_url}}</p>
                    <p class="Manifestation.Event.display_by_default">{{Manifestation.Event.display_by_default}}</p>
                    <p class="Manifestation.Event.accounting_account">{{Manifestation.Event.accounting_account}}</p>
                    <p class="Manifestation.Event.slug">{{Manifestation.Event.slug}}</p>
                    <p class="Manifestation.Event.museum">{{Manifestation.Event.museum}}</p>
                    <p class="Manifestation.Event.created_at">{{Manifestation.Event.created_at}}</p>
                    <p class="Manifestation.Event.updated_at">{{Manifestation.Event.updated_at}}</p>
                    <p class="Manifestation.Event.MetaEvent.id">{{Manifestation.Event.MetaEvent.id}}</p>
                    <p class="Manifestation.Event.MetaEvent.hide_in_month_calendars">{{Manifestation.Event.MetaEvent.hide_in_month_calendars}}</p>
                    <p class="Manifestation.Event.MetaEvent.created_at">{{Manifestation.Event.MetaEvent.created_at}}</p>
                    <p class="Manifestation.Event.MetaEvent.updated_at">{{Manifestation.Event.MetaEvent.updated_at}}</p>
                    <p class="Manifestation.Event.MetaEvent.slug">{{Manifestation.Event.MetaEvent.slug}}</p>
                    <p class="Gauge.id">{{Gauge.id}}</p>
                    <p class="Gauge.workspace_id">{{Gauge.workspace_id}}</p>
                    <p class="Gauge.manifestation_id">{{Gauge.manifestation_id}}</p>
                    <p class="Gauge.value">{{Gauge.value}}</p>
                    <p class="Gauge.online">{{Gauge.online}}</p>
                    <p class="Gauge.onsite">{{Gauge.onsite}}</p>
                    <p class="Gauge.group_name">{{Gauge.group_name}}</p>
                    <p class="Gauge.created_at">{{Gauge.created_at}}</p>
                    <p class="Gauge.updated_at">{{Gauge.updated_at}}</p>
                    <p class="Gauge.Workspace.id">{{Gauge.Workspace.id}}</p>
                    <p class="Gauge.Workspace.name">{{Gauge.Workspace.name}}</p>
                    <p class="Gauge.Workspace.on_ticket">{{Gauge.Workspace.on_ticket}}</p>
                    <p class="Gauge.Workspace.seated">{{Gauge.Workspace.seated}}</p>pYHORSSHUGHVFRP
                    <p class="Gauge.Workspace.created_at">{{Gauge.Workspace.created_at}}</p>
                    <p class="Gauge.Workspace.updated_at">{{Gauge.Workspace.updated_at}}</p>
                </div>
                <div class="right"><p class="id">{{id}}</p>
                    <p class="sf_guard_user_id">{{sf_guard_user_id}}</p>
                    <p class="automatic">{{automatic}}</p>
                    <p class="transaction_id">{{transaction_id}}</p>
                    <p class="vat">{{vat}}</p>
                    <p class="value">{{value}}</p>
                    <p class="manifestation_id">{{manifestation_id}}</p>
                    <p class="gauge_id">{{gauge_id}}</p>
                    <p class="price_id">{{price_id}}</p>
                    <p class="price_name">{{price_name}}</p>
                    <p class="printed_at">{{printed_at}}</p>
                    <p class="barcode">{{barcode}}</p>
                    <p class="taxes">{{taxes}}</p>
                    <p class="auto_by_hold">{{auto_by_hold}}</p>
                    <p class="created_at">{{created_at}}</p>
                    <p class="updated_at">{{updated_at}}</p>
                    <p class="version">{{version}}</p>
                    <p class="Transaction.id">{{Transaction.id}}</p>
                    <p class="Transaction.sf_guard_user_id">{{Transaction.sf_guard_user_id}}</p>
                    <p class="Transaction.automatic">{{Transaction.automatic}}</p>
                    <p class="Transaction.type">{{Transaction.type}}</p>
                    <p class="Transaction.closed">{{Transaction.closed}}</p>
                    <p class="Transaction.send_an_email">{{Transaction.send_an_email}}</p>
                    <p class="Transaction.deposit">{{Transaction.deposit}}</p>
                    <p class="Transaction.with_shipment">{{Transaction.with_shipment}}</p>
                    <p class="Transaction.created_at">{{Transaction.created_at}}</p>
                    <p class="Transaction.updated_at">{{Transaction.updated_at}}</p>
                    <p class="Transaction.version">{{Transaction.version}}</p>
                    <p class="Manifestation.id">{{Manifestation.id}}</p>
                    <p class="Manifestation.sf_guard_user_id">{{Manifestation.sf_guard_user_id}}</p>
                    <p class="Manifestation.automatic">{{Manifestation.automatic}}</p>
                    <p class="Manifestation.event_id">{{Manifestation.event_id}}</p>
                    <p class="Manifestation.location_id">{{Manifestation.location_id}}</p>
                    <p class="Manifestation.happens_at">{{Manifestation.happens_at}}</p>
                    <p class="Manifestation.duration">{{Manifestation.duration}}</p>
                    <p class="Manifestation.description">{{Manifestation.description}}</p>
                    <p class="Manifestation.vat_id">{{Manifestation.vat_id}}</p>
                    <p class="Manifestation.online_limit">{{Manifestation.online_limit}}</p>
                    <p class="Manifestation.no_print">{{Manifestation.no_print}}</p>
                    <p class="Manifestation.blocking">{{Manifestation.blocking}}</p>
                    <p class="Manifestation.reservation_begins_at">{{Manifestation.reservation_begins_at}}</p>
                    <p class="Manifestation.reservation_ends_at">{{Manifestation.reservation_ends_at}}</p>
                    <p class="Manifestation.reservation_description">{{Manifestation.reservation_description}}</p>
                    <p class="Manifestation.reservation_optional">{{Manifestation.reservation_optional}}</p>
                    <p class="Manifestation.reservation_confirmed">{{Manifestation.reservation_confirmed}}</p>
                    <p class="Manifestation.voucherized">{{Manifestation.voucherized}}</p>
                    <p class="Manifestation.created_at">{{Manifestation.created_at}}</p>
                    <p class="Manifestation.updated_at">{{Manifestation.updated_at}}</p>
                    <p class="Manifestation.version">{{Manifestation.version}}</p>
                    <p class="Manifestation.Location.id">{{Manifestation.Location.id}}</p>
                    <p class="Manifestation.Location.name">{{Manifestation.Location.name}}</p>
                    <p class="Manifestation.Location.address">{{Manifestation.Location.address}}</p>
                    <p class="Manifestation.Location.postalcode">{{Manifestation.Location.postalcode}}</p>
                    <p class="Manifestation.Location.city">{{Manifestation.Location.city}}</p>
                    <p class="Manifestation.Location.country">{{Manifestation.Location.country}}</p>
                    <p class="Manifestation.Location.email">{{Manifestation.Location.email}}</p>
                    <p class="Manifestation.Location.email_no_newsletter">{{Manifestation.Location.email_no_newsletter}}</p>
                    <p class="Manifestation.Location.email_npai">{{Manifestation.Location.email_npai}}</p>
                    <p class="Manifestation.Location.npai">{{Manifestation.Location.npai}}</p>
                    <p class="Manifestation.Location.automatic">{{Manifestation.Location.automatic}}</p>
                    <p class="Manifestation.Location.description">{{Manifestation.Location.description}}</p>
                    <p class="Manifestation.Location.gauge_max">{{Manifestation.Location.gauge_max}}</p>
                    <p class="Manifestation.Location.place">{{Manifestation.Location.place}}</p>
                    <p class="Manifestation.Location.unlimited">{{Manifestation.Location.unlimited}}</p>
                    <p class="Manifestation.Location.auto_control">{{Manifestation.Location.auto_control}}</p>
                    <p class="Manifestation.Location.slug">{{Manifestation.Location.slug}}</p>
                    <p class="Manifestation.Location.created_at">{{Manifestation.Location.created_at}}</p>
                    <p class="Manifestation.Location.updated_at">{{Manifestation.Location.updated_at}}</p>
                    <p class="Manifestation.Event.id">{{Manifestation.Event.id}}</p>
                    <p class="Manifestation.Event.sf_guard_user_id">{{Manifestation.Event.sf_guard_user_id}}</p>
                    <p class="Manifestation.Event.automatic">{{Manifestation.Event.automatic}}</p>
                    <p class="Manifestation.Event.meta_event_id">{{Manifestation.Event.meta_event_id}}</p>
                    <p class="Manifestation.Event.event_category_id">{{Manifestation.Event.event_category_id}}</p>
                    <p class="Manifestation.Event.event_category_description">{{Manifestation.Event.event_category_description}}</p>
                    <p class="Manifestation.Event.staging">{{Manifestation.Event.staging}}</p>
                    <p class="Manifestation.Event.staging_label">{{Manifestation.Event.staging_label}}</p>
                    <p class="Manifestation.Event.writer">{{Manifestation.Event.writer}}</p>
                    <p class="Manifestation.Event.writer_label">{{Manifestation.Event.writer_label}}</p>
                    <p class="Manifestation.Event.duration">{{Manifestation.Event.duration}}</p>
                    <p class="Manifestation.Event.image_url">{{Manifestation.Event.image_url}}</p>
                    <p class="Manifestation.Event.display_by_default">{{Manifestation.Event.display_by_default}}</p>
                    <p class="Manifestation.Event.accounting_account">{{Manifestation.Event.accounting_account}}</p>
                    <p class="Manifestation.Event.slug">{{Manifestation.Event.slug}}</p>
                    <p class="Manifestation.Event.museum">{{Manifestation.Event.museum}}</p>
                    <p class="Manifestation.Event.created_at">{{Manifestation.Event.created_at}}</p>
                    <p class="Manifestation.Event.updated_at">{{Manifestation.Event.updated_at}}</p>
                    <p class="Manifestation.Event.MetaEvent.id">{{Manifestation.Event.MetaEvent.id}}</p>
                    <p class="Manifestation.Event.MetaEvent.hide_in_month_calendars">{{Manifestation.Event.MetaEvent.hide_in_month_calendars}}</p>
                    <p class="Manifestation.Event.MetaEvent.created_at">{{Manifestation.Event.MetaEvent.created_at}}</p>
                    <p class="Manifestation.Event.MetaEvent.updated_at">{{Manifestation.Event.MetaEvent.updated_at}}</p>
                    <p class="Manifestation.Event.MetaEvent.slug">{{Manifestation.Event.MetaEvent.slug}}</p>
                    <p class="Gauge.id">{{Gauge.id}}</p>
                    <p class="Gauge.workspace_id">{{Gauge.workspace_id}}</p>
                    <p class="Gauge.manifestation_id">{{Gauge.manifestation_id}}</p>
                    <p class="Gauge.value">{{Gauge.value}}</p>
                    <p class="Gauge.online">{{Gauge.online}}</p>
                    <p class="Gauge.onsite">{{Gauge.onsite}}</p>
                    <p class="Gauge.group_name">{{Gauge.group_name}}</p>
                    <p class="Gauge.created_at">{{Gauge.created_at}}</p>
                    <p class="Gauge.updated_at">{{Gauge.updated_at}}</p>
                    <p class="Gauge.Workspace.id">{{Gauge.Workspace.id}}</p>
                    <p class="Gauge.Workspace.name">{{Gauge.Workspace.name}}</p>
                    <p class="Gauge.Workspace.on_ticket">{{Gauge.Workspace.on_ticket}}</p>
                    <p class="Gauge.Workspace.seated">{{Gauge.Workspace.seated}}</p>
                    <p class="Gauge.Workspace.created_at">{{Gauge.Workspace.created_at}}</p>
                    <p class="Gauge.Workspace.updated_at">{{Gauge.Workspace.updated_at}}</p>
                </div></div>
        

</script>
    
    <script>
      //Handlebars.templates['templateTicket.html']
    //var source   = $("#entry-template").html();
    //var template = Handlebars.compile(source);

    var request = new XMLHttpRequest();
    request.open('GET', 'http://127.0.0.1/tck.php/ticket/14586/print?direct&json', false);
    request.onload = function () {
            var tickets = JSON.parse(this.response);
            var key;
            var ticket = tickets[0];

            //html    = template(ticket);
            html = Handlebars.templates['templateTicket.html'](ticket);
            console.log('HTML '+ html);
        };

    request.send();
    console.log('HTMLOUT'+ html);
    document.getElementById("testing").innerHTML = html;
    </script>
    