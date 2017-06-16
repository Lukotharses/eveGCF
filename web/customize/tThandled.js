(function() {
  var template = Handlebars.template, templates = Handlebars.templates = Handlebars.templates || {};
templates['templateTicket.html'] = template({"compiler":[7,">= 4.0.0"],"main":function(container,depth0,helpers,partials,data) {
    var stack1, helper, alias1=depth0 != null ? depth0 : (container.nullContext || {}), alias2=helpers.helperMissing, alias3="function", alias4=container.escapeExpression, alias5=container.lambda;

  return "        <div class=\"page\">\n            <div class=\"ticket\"><div class=\"logo\">"
    + alias4(((helper = (helper = helpers.logo || (depth0 != null ? depth0.logo : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"logo","hash":{},"data":data}) : helper)))
    + "</div><div class=\"left\"><p class=\"id\">"
    + alias4(((helper = (helper = helpers.id || (depth0 != null ? depth0.id : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"id","hash":{},"data":data}) : helper)))
    + "</p>\n                    <p class=\"sf_guard_user_id\">"
    + alias4(((helper = (helper = helpers.sf_guard_user_id || (depth0 != null ? depth0.sf_guard_user_id : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"sf_guard_user_id","hash":{},"data":data}) : helper)))
    + "</p>\n                    <p class=\"automatic\">"
    + alias4(((helper = (helper = helpers.automatic || (depth0 != null ? depth0.automatic : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"automatic","hash":{},"data":data}) : helper)))
    + "</p>\n                    <p class=\"transaction_id\">"
    + alias4(((helper = (helper = helpers.transaction_id || (depth0 != null ? depth0.transaction_id : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"transaction_id","hash":{},"data":data}) : helper)))
    + "</p>\n                    <p class=\"vat\">"
    + alias4(((helper = (helper = helpers.vat || (depth0 != null ? depth0.vat : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"vat","hash":{},"data":data}) : helper)))
    + "</p>\n                    <p class=\"value\">"
    + alias4(((helper = (helper = helpers.value || (depth0 != null ? depth0.value : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"value","hash":{},"data":data}) : helper)))
    + "</p>\n                    <p class=\"manifestation_id\">"
    + alias4(((helper = (helper = helpers.manifestation_id || (depth0 != null ? depth0.manifestation_id : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"manifestation_id","hash":{},"data":data}) : helper)))
    + "</p>\n                    <p class=\"gauge_id\">"
    + alias4(((helper = (helper = helpers.gauge_id || (depth0 != null ? depth0.gauge_id : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"gauge_id","hash":{},"data":data}) : helper)))
    + "</p>\n                    <p class=\"price_id\">"
    + alias4(((helper = (helper = helpers.price_id || (depth0 != null ? depth0.price_id : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"price_id","hash":{},"data":data}) : helper)))
    + "</p>\n                    <p class=\"price_name\">"
    + alias4(((helper = (helper = helpers.price_name || (depth0 != null ? depth0.price_name : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"price_name","hash":{},"data":data}) : helper)))
    + "</p>\n                    <p class=\"printed_at\">"
    + alias4(((helper = (helper = helpers.printed_at || (depth0 != null ? depth0.printed_at : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"printed_at","hash":{},"data":data}) : helper)))
    + "</p>\n                    <p class=\"barcode\">"
    + alias4(((helper = (helper = helpers.barcode || (depth0 != null ? depth0.barcode : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"barcode","hash":{},"data":data}) : helper)))
    + "</p>\n                    <p class=\"taxes\">"
    + alias4(((helper = (helper = helpers.taxes || (depth0 != null ? depth0.taxes : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"taxes","hash":{},"data":data}) : helper)))
    + "</p>\n                    <p class=\"auto_by_hold\">"
    + alias4(((helper = (helper = helpers.auto_by_hold || (depth0 != null ? depth0.auto_by_hold : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"auto_by_hold","hash":{},"data":data}) : helper)))
    + "</p>\n                    <p class=\"created_at\">"
    + alias4(((helper = (helper = helpers.created_at || (depth0 != null ? depth0.created_at : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"created_at","hash":{},"data":data}) : helper)))
    + "</p>\n                    <p class=\"updated_at\">"
    + alias4(((helper = (helper = helpers.updated_at || (depth0 != null ? depth0.updated_at : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"updated_at","hash":{},"data":data}) : helper)))
    + "</p>\n                    <p class=\"version\">"
    + alias4(((helper = (helper = helpers.version || (depth0 != null ? depth0.version : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"version","hash":{},"data":data}) : helper)))
    + "</p>\n                    <p class=\"Transaction.id\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Transaction : depth0)) != null ? stack1.id : stack1), depth0))
    + "</p>\n                    <p class=\"Transaction.sf_guard_user_id\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Transaction : depth0)) != null ? stack1.sf_guard_user_id : stack1), depth0))
    + "</p>\n                    <p class=\"Transaction.automatic\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Transaction : depth0)) != null ? stack1.automatic : stack1), depth0))
    + "</p>\n                    <p class=\"Transaction.type\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Transaction : depth0)) != null ? stack1.type : stack1), depth0))
    + "</p>\n                    <p class=\"Transaction.closed\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Transaction : depth0)) != null ? stack1.closed : stack1), depth0))
    + "</p>\n                    <p class=\"Transaction.send_an_email\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Transaction : depth0)) != null ? stack1.send_an_email : stack1), depth0))
    + "</p>\n                    <p class=\"Transaction.deposit\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Transaction : depth0)) != null ? stack1.deposit : stack1), depth0))
    + "</p>\n                    <p class=\"Transaction.with_shipment\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Transaction : depth0)) != null ? stack1.with_shipment : stack1), depth0))
    + "</p>\n                    <p class=\"Transaction.created_at\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Transaction : depth0)) != null ? stack1.created_at : stack1), depth0))
    + "</p>\n                    <p class=\"Transaction.updated_at\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Transaction : depth0)) != null ? stack1.updated_at : stack1), depth0))
    + "</p>\n                    <p class=\"Transaction.version\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Transaction : depth0)) != null ? stack1.version : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.id\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.id : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.sf_guard_user_id\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.sf_guard_user_id : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.automatic\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.automatic : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.event_id\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.event_id : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.location_id\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.location_id : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.happens_at\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.happens_at : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.duration\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.duration : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.description\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.description : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.vat_id\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.vat_id : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.online_limit\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.online_limit : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.no_print\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.no_print : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.blocking\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.blocking : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.reservation_begins_at\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.reservation_begins_at : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.reservation_ends_at\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.reservation_ends_at : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.reservation_description\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.reservation_description : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.reservation_optional\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.reservation_optional : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.reservation_confirmed\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.reservation_confirmed : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.voucherized\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.voucherized : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.created_at\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.created_at : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.updated_at\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.updated_at : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.version\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.version : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Location.id\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Location : stack1)) != null ? stack1.id : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Location.name\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Location : stack1)) != null ? stack1.name : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Location.address\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Location : stack1)) != null ? stack1.address : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Location.postalcode\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Location : stack1)) != null ? stack1.postalcode : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Location.city\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Location : stack1)) != null ? stack1.city : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Location.country\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Location : stack1)) != null ? stack1.country : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Location.email\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Location : stack1)) != null ? stack1.email : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Location.email_no_newsletter\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Location : stack1)) != null ? stack1.email_no_newsletter : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Location.email_npai\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Location : stack1)) != null ? stack1.email_npai : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Location.npai\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Location : stack1)) != null ? stack1.npai : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Location.automatic\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Location : stack1)) != null ? stack1.automatic : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Location.description\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Location : stack1)) != null ? stack1.description : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Location.gauge_max\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Location : stack1)) != null ? stack1.gauge_max : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Location.place\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Location : stack1)) != null ? stack1.place : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Location.unlimited\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Location : stack1)) != null ? stack1.unlimited : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Location.auto_control\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Location : stack1)) != null ? stack1.auto_control : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Location.slug\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Location : stack1)) != null ? stack1.slug : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Location.created_at\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Location : stack1)) != null ? stack1.created_at : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Location.updated_at\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Location : stack1)) != null ? stack1.updated_at : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Event.id\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Event : stack1)) != null ? stack1.id : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Event.sf_guard_user_id\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Event : stack1)) != null ? stack1.sf_guard_user_id : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Event.automatic\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Event : stack1)) != null ? stack1.automatic : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Event.meta_event_id\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Event : stack1)) != null ? stack1.meta_event_id : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Event.event_category_id\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Event : stack1)) != null ? stack1.event_category_id : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Event.event_category_description\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Event : stack1)) != null ? stack1.event_category_description : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Event.staging\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Event : stack1)) != null ? stack1.staging : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Event.staging_label\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Event : stack1)) != null ? stack1.staging_label : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Event.writer\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Event : stack1)) != null ? stack1.writer : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Event.writer_label\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Event : stack1)) != null ? stack1.writer_label : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Event.duration\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Event : stack1)) != null ? stack1.duration : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Event.image_url\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Event : stack1)) != null ? stack1.image_url : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Event.display_by_default\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Event : stack1)) != null ? stack1.display_by_default : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Event.accounting_account\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Event : stack1)) != null ? stack1.accounting_account : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Event.slug\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Event : stack1)) != null ? stack1.slug : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Event.museum\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Event : stack1)) != null ? stack1.museum : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Event.created_at\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Event : stack1)) != null ? stack1.created_at : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Event.updated_at\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Event : stack1)) != null ? stack1.updated_at : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Event.MetaEvent.id\">"
    + alias4(alias5(((stack1 = ((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Event : stack1)) != null ? stack1.MetaEvent : stack1)) != null ? stack1.id : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Event.MetaEvent.hide_in_month_calendars\">"
    + alias4(alias5(((stack1 = ((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Event : stack1)) != null ? stack1.MetaEvent : stack1)) != null ? stack1.hide_in_month_calendars : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Event.MetaEvent.created_at\">"
    + alias4(alias5(((stack1 = ((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Event : stack1)) != null ? stack1.MetaEvent : stack1)) != null ? stack1.created_at : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Event.MetaEvent.updated_at\">"
    + alias4(alias5(((stack1 = ((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Event : stack1)) != null ? stack1.MetaEvent : stack1)) != null ? stack1.updated_at : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Event.MetaEvent.slug\">"
    + alias4(alias5(((stack1 = ((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Event : stack1)) != null ? stack1.MetaEvent : stack1)) != null ? stack1.slug : stack1), depth0))
    + "</p>\n                    <p class=\"Gauge.id\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Gauge : depth0)) != null ? stack1.id : stack1), depth0))
    + "</p>\n                    <p class=\"Gauge.workspace_id\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Gauge : depth0)) != null ? stack1.workspace_id : stack1), depth0))
    + "</p>\n                    <p class=\"Gauge.manifestation_id\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Gauge : depth0)) != null ? stack1.manifestation_id : stack1), depth0))
    + "</p>\n                    <p class=\"Gauge.value\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Gauge : depth0)) != null ? stack1.value : stack1), depth0))
    + "</p>\n                    <p class=\"Gauge.online\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Gauge : depth0)) != null ? stack1.online : stack1), depth0))
    + "</p>\n                    <p class=\"Gauge.onsite\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Gauge : depth0)) != null ? stack1.onsite : stack1), depth0))
    + "</p>\n                    <p class=\"Gauge.group_name\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Gauge : depth0)) != null ? stack1.group_name : stack1), depth0))
    + "</p>\n                    <p class=\"Gauge.created_at\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Gauge : depth0)) != null ? stack1.created_at : stack1), depth0))
    + "</p>\n                    <p class=\"Gauge.updated_at\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Gauge : depth0)) != null ? stack1.updated_at : stack1), depth0))
    + "</p>\n                    <p class=\"Gauge.Workspace.id\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Gauge : depth0)) != null ? stack1.Workspace : stack1)) != null ? stack1.id : stack1), depth0))
    + "</p>\n                    <p class=\"Gauge.Workspace.name\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Gauge : depth0)) != null ? stack1.Workspace : stack1)) != null ? stack1.name : stack1), depth0))
    + "</p>\n                    <p class=\"Gauge.Workspace.on_ticket\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Gauge : depth0)) != null ? stack1.Workspace : stack1)) != null ? stack1.on_ticket : stack1), depth0))
    + "</p>\n                    <p class=\"Gauge.Workspace.seated\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Gauge : depth0)) != null ? stack1.Workspace : stack1)) != null ? stack1.seated : stack1), depth0))
    + "</p>\n                    <p class=\"Gauge.Workspace.created_at\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Gauge : depth0)) != null ? stack1.Workspace : stack1)) != null ? stack1.created_at : stack1), depth0))
    + "</p>\n                    <p class=\"Gauge.Workspace.updated_at\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Gauge : depth0)) != null ? stack1.Workspace : stack1)) != null ? stack1.updated_at : stack1), depth0))
    + "</p>\n                </div>\n                <div class=\"right\"><p class=\"id\">"
    + alias4(((helper = (helper = helpers.id || (depth0 != null ? depth0.id : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"id","hash":{},"data":data}) : helper)))
    + "</p>\n                    <p class=\"sf_guard_user_id\">"
    + alias4(((helper = (helper = helpers.sf_guard_user_id || (depth0 != null ? depth0.sf_guard_user_id : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"sf_guard_user_id","hash":{},"data":data}) : helper)))
    + "</p>\n                    <p class=\"automatic\">"
    + alias4(((helper = (helper = helpers.automatic || (depth0 != null ? depth0.automatic : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"automatic","hash":{},"data":data}) : helper)))
    + "</p>\n                    <p class=\"transaction_id\">"
    + alias4(((helper = (helper = helpers.transaction_id || (depth0 != null ? depth0.transaction_id : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"transaction_id","hash":{},"data":data}) : helper)))
    + "</p>\n                    <p class=\"vat\">"
    + alias4(((helper = (helper = helpers.vat || (depth0 != null ? depth0.vat : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"vat","hash":{},"data":data}) : helper)))
    + "</p>\n                    <p class=\"value\">"
    + alias4(((helper = (helper = helpers.value || (depth0 != null ? depth0.value : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"value","hash":{},"data":data}) : helper)))
    + "</p>\n                    <p class=\"manifestation_id\">"
    + alias4(((helper = (helper = helpers.manifestation_id || (depth0 != null ? depth0.manifestation_id : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"manifestation_id","hash":{},"data":data}) : helper)))
    + "</p>\n                    <p class=\"gauge_id\">"
    + alias4(((helper = (helper = helpers.gauge_id || (depth0 != null ? depth0.gauge_id : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"gauge_id","hash":{},"data":data}) : helper)))
    + "</p>\n                    <p class=\"price_id\">"
    + alias4(((helper = (helper = helpers.price_id || (depth0 != null ? depth0.price_id : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"price_id","hash":{},"data":data}) : helper)))
    + "</p>\n                    <p class=\"price_name\">"
    + alias4(((helper = (helper = helpers.price_name || (depth0 != null ? depth0.price_name : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"price_name","hash":{},"data":data}) : helper)))
    + "</p>\n                    <p class=\"printed_at\">"
    + alias4(((helper = (helper = helpers.printed_at || (depth0 != null ? depth0.printed_at : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"printed_at","hash":{},"data":data}) : helper)))
    + "</p>\n                    <p class=\"barcode\">"
    + alias4(((helper = (helper = helpers.barcode || (depth0 != null ? depth0.barcode : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"barcode","hash":{},"data":data}) : helper)))
    + "</p>\n                    <p class=\"taxes\">"
    + alias4(((helper = (helper = helpers.taxes || (depth0 != null ? depth0.taxes : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"taxes","hash":{},"data":data}) : helper)))
    + "</p>\n                    <p class=\"auto_by_hold\">"
    + alias4(((helper = (helper = helpers.auto_by_hold || (depth0 != null ? depth0.auto_by_hold : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"auto_by_hold","hash":{},"data":data}) : helper)))
    + "</p>\n                    <p class=\"created_at\">"
    + alias4(((helper = (helper = helpers.created_at || (depth0 != null ? depth0.created_at : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"created_at","hash":{},"data":data}) : helper)))
    + "</p>\n                    <p class=\"updated_at\">"
    + alias4(((helper = (helper = helpers.updated_at || (depth0 != null ? depth0.updated_at : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"updated_at","hash":{},"data":data}) : helper)))
    + "</p>\n                    <p class=\"version\">"
    + alias4(((helper = (helper = helpers.version || (depth0 != null ? depth0.version : depth0)) != null ? helper : alias2),(typeof helper === alias3 ? helper.call(alias1,{"name":"version","hash":{},"data":data}) : helper)))
    + "</p>\n                    <p class=\"Transaction.id\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Transaction : depth0)) != null ? stack1.id : stack1), depth0))
    + "</p>\n                    <p class=\"Transaction.sf_guard_user_id\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Transaction : depth0)) != null ? stack1.sf_guard_user_id : stack1), depth0))
    + "</p>\n                    <p class=\"Transaction.automatic\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Transaction : depth0)) != null ? stack1.automatic : stack1), depth0))
    + "</p>\n                    <p class=\"Transaction.type\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Transaction : depth0)) != null ? stack1.type : stack1), depth0))
    + "</p>\n                    <p class=\"Transaction.closed\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Transaction : depth0)) != null ? stack1.closed : stack1), depth0))
    + "</p>\n                    <p class=\"Transaction.send_an_email\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Transaction : depth0)) != null ? stack1.send_an_email : stack1), depth0))
    + "</p>\n                    <p class=\"Transaction.deposit\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Transaction : depth0)) != null ? stack1.deposit : stack1), depth0))
    + "</p>\n                    <p class=\"Transaction.with_shipment\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Transaction : depth0)) != null ? stack1.with_shipment : stack1), depth0))
    + "</p>\n                    <p class=\"Transaction.created_at\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Transaction : depth0)) != null ? stack1.created_at : stack1), depth0))
    + "</p>\n                    <p class=\"Transaction.updated_at\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Transaction : depth0)) != null ? stack1.updated_at : stack1), depth0))
    + "</p>\n                    <p class=\"Transaction.version\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Transaction : depth0)) != null ? stack1.version : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.id\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.id : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.sf_guard_user_id\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.sf_guard_user_id : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.automatic\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.automatic : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.event_id\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.event_id : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.location_id\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.location_id : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.happens_at\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.happens_at : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.duration\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.duration : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.description\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.description : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.vat_id\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.vat_id : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.online_limit\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.online_limit : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.no_print\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.no_print : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.blocking\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.blocking : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.reservation_begins_at\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.reservation_begins_at : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.reservation_ends_at\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.reservation_ends_at : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.reservation_description\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.reservation_description : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.reservation_optional\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.reservation_optional : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.reservation_confirmed\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.reservation_confirmed : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.voucherized\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.voucherized : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.created_at\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.created_at : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.updated_at\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.updated_at : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.version\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.version : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Location.id\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Location : stack1)) != null ? stack1.id : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Location.name\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Location : stack1)) != null ? stack1.name : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Location.address\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Location : stack1)) != null ? stack1.address : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Location.postalcode\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Location : stack1)) != null ? stack1.postalcode : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Location.city\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Location : stack1)) != null ? stack1.city : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Location.country\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Location : stack1)) != null ? stack1.country : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Location.email\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Location : stack1)) != null ? stack1.email : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Location.email_no_newsletter\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Location : stack1)) != null ? stack1.email_no_newsletter : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Location.email_npai\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Location : stack1)) != null ? stack1.email_npai : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Location.npai\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Location : stack1)) != null ? stack1.npai : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Location.automatic\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Location : stack1)) != null ? stack1.automatic : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Location.description\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Location : stack1)) != null ? stack1.description : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Location.gauge_max\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Location : stack1)) != null ? stack1.gauge_max : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Location.place\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Location : stack1)) != null ? stack1.place : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Location.unlimited\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Location : stack1)) != null ? stack1.unlimited : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Location.auto_control\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Location : stack1)) != null ? stack1.auto_control : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Location.slug\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Location : stack1)) != null ? stack1.slug : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Location.created_at\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Location : stack1)) != null ? stack1.created_at : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Location.updated_at\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Location : stack1)) != null ? stack1.updated_at : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Event.id\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Event : stack1)) != null ? stack1.id : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Event.sf_guard_user_id\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Event : stack1)) != null ? stack1.sf_guard_user_id : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Event.automatic\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Event : stack1)) != null ? stack1.automatic : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Event.meta_event_id\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Event : stack1)) != null ? stack1.meta_event_id : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Event.event_category_id\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Event : stack1)) != null ? stack1.event_category_id : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Event.event_category_description\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Event : stack1)) != null ? stack1.event_category_description : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Event.staging\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Event : stack1)) != null ? stack1.staging : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Event.staging_label\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Event : stack1)) != null ? stack1.staging_label : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Event.writer\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Event : stack1)) != null ? stack1.writer : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Event.writer_label\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Event : stack1)) != null ? stack1.writer_label : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Event.duration\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Event : stack1)) != null ? stack1.duration : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Event.image_url\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Event : stack1)) != null ? stack1.image_url : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Event.display_by_default\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Event : stack1)) != null ? stack1.display_by_default : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Event.accounting_account\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Event : stack1)) != null ? stack1.accounting_account : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Event.slug\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Event : stack1)) != null ? stack1.slug : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Event.museum\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Event : stack1)) != null ? stack1.museum : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Event.created_at\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Event : stack1)) != null ? stack1.created_at : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Event.updated_at\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Event : stack1)) != null ? stack1.updated_at : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Event.MetaEvent.id\">"
    + alias4(alias5(((stack1 = ((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Event : stack1)) != null ? stack1.MetaEvent : stack1)) != null ? stack1.id : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Event.MetaEvent.hide_in_month_calendars\">"
    + alias4(alias5(((stack1 = ((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Event : stack1)) != null ? stack1.MetaEvent : stack1)) != null ? stack1.hide_in_month_calendars : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Event.MetaEvent.created_at\">"
    + alias4(alias5(((stack1 = ((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Event : stack1)) != null ? stack1.MetaEvent : stack1)) != null ? stack1.created_at : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Event.MetaEvent.updated_at\">"
    + alias4(alias5(((stack1 = ((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Event : stack1)) != null ? stack1.MetaEvent : stack1)) != null ? stack1.updated_at : stack1), depth0))
    + "</p>\n                    <p class=\"Manifestation.Event.MetaEvent.slug\">"
    + alias4(alias5(((stack1 = ((stack1 = ((stack1 = (depth0 != null ? depth0.Manifestation : depth0)) != null ? stack1.Event : stack1)) != null ? stack1.MetaEvent : stack1)) != null ? stack1.slug : stack1), depth0))
    + "</p>\n                    <p class=\"Gauge.id\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Gauge : depth0)) != null ? stack1.id : stack1), depth0))
    + "</p>\n                    <p class=\"Gauge.workspace_id\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Gauge : depth0)) != null ? stack1.workspace_id : stack1), depth0))
    + "</p>\n                    <p class=\"Gauge.manifestation_id\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Gauge : depth0)) != null ? stack1.manifestation_id : stack1), depth0))
    + "</p>\n                    <p class=\"Gauge.value\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Gauge : depth0)) != null ? stack1.value : stack1), depth0))
    + "</p>\n                    <p class=\"Gauge.online\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Gauge : depth0)) != null ? stack1.online : stack1), depth0))
    + "</p>\n                    <p class=\"Gauge.onsite\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Gauge : depth0)) != null ? stack1.onsite : stack1), depth0))
    + "</p>\n                    <p class=\"Gauge.group_name\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Gauge : depth0)) != null ? stack1.group_name : stack1), depth0))
    + "</p>\n                    <p class=\"Gauge.created_at\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Gauge : depth0)) != null ? stack1.created_at : stack1), depth0))
    + "</p>\n                    <p class=\"Gauge.updated_at\">"
    + alias4(alias5(((stack1 = (depth0 != null ? depth0.Gauge : depth0)) != null ? stack1.updated_at : stack1), depth0))
    + "</p>\n                    <p class=\"Gauge.Workspace.id\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Gauge : depth0)) != null ? stack1.Workspace : stack1)) != null ? stack1.id : stack1), depth0))
    + "</p>\n                    <p class=\"Gauge.Workspace.name\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Gauge : depth0)) != null ? stack1.Workspace : stack1)) != null ? stack1.name : stack1), depth0))
    + "</p>\n                    <p class=\"Gauge.Workspace.on_ticket\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Gauge : depth0)) != null ? stack1.Workspace : stack1)) != null ? stack1.on_ticket : stack1), depth0))
    + "</p>\n                    <p class=\"Gauge.Workspace.seated\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Gauge : depth0)) != null ? stack1.Workspace : stack1)) != null ? stack1.seated : stack1), depth0))
    + "</p>\n                    <p class=\"Gauge.Workspace.created_at\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Gauge : depth0)) != null ? stack1.Workspace : stack1)) != null ? stack1.created_at : stack1), depth0))
    + "</p>\n                    <p class=\"Gauge.Workspace.updated_at\">"
    + alias4(alias5(((stack1 = ((stack1 = (depth0 != null ? depth0.Gauge : depth0)) != null ? stack1.Workspace : stack1)) != null ? stack1.updated_at : stack1), depth0))
    + "</p>\n                </div></div>\n        </div>\n\n";
},"useData":true});
})();