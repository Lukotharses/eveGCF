  $(document).ready(function(){
    // removing the recommandations if none
    if ( $('#cmd-links .products .link, #cmd-links .manifestations .link').length == 0 )
      $('#cmd-links').hide();
    
    // removing options if none
    if ( $('#command tbody .linked-stuff li').length == 0 )
      $('#command thead .linked-stuff').css('font-size', 0);
    
    // adding a button on named tickets
    setTimeout(function(){
      $('<button>ok</button>').insertAfter($('#command .named-tickets .contact .contact_firstname')).click(function(){ return false });
    },2500);
    
    // event's picture
    LI.pubPictureRowspan();
      
    // stop here if needed
    if ( $('#command thead .qty').length == 0 )
      return;
    
    // if continuing, removing the rowspan on pictures
    $('#command td.picture[rowspan]').prop('rowspan', null);
    
    // concatenation of tickets that have the same price
    while ( $('#command tbody > :not(.products):not(.member_cards):not(.done)').length > 0 )
    {
      var data_id;
      var ticket = $('#command tbody > :not(.products):not(.done):first');
      
      price_id = ticket.find('.tickets > [data-price-id]').length > 0 ? ticket.find('.tickets > [data-price-id]').attr(data_id = 'data-price-id') : ticket.find('.tickets > [data-mct-id]').attr(data_id = 'data-mct-id');
      gauge_id = ticket.attr('data-gauge-id');
      ticket.find('.qty').text($('#command tbody [data-gauge-id='+gauge_id+'] .tickets > ['+data_id+'='+price_id+']').length);
      
      var currency = LI.get_currency($('#command tbody [data-gauge-id='+gauge_id+'] .tickets > ['+data_id+'='+price_id+']:first').closest('tr').find('.value').text());
      var fr_style = LI.currency_style($('#command tbody [data-gauge-id='+gauge_id+'] .tickets > ['+data_id+'='+price_id+']:first').closest('tr').find('.value').text()) == 'fr';
      
      var value = 0;
      var taxes = 0;
      $('#command tbody [data-gauge-id='+gauge_id+'] .tickets > ['+data_id+'='+price_id+']').each(function(){
        value += LI.clear_currency($(this).closest('tr').find('.value').text());
        var tmp = LI.clear_currency($(this).closest('tr').find('.extra-taxes').text());
        if ( !isNaN(tmp) )
          taxes += tmp;
      });
      
      ticket.find('.total').html(LI.format_currency(value, true, fr_style, currency));
      ticket.find('.extra-taxes').html(LI.format_currency(taxes, true, fr_style, currency));
      ticket.addClass('done');
      $('#command tbody > [data-gauge-id='+gauge_id+']:not(.done) .tickets > ['+data_id+'='+price_id+']').closest('[data-gauge-id]').remove();
    }
    
    // event's picture
    LI.pubPictureRowspan();
    
    // products
    $('#command tbody > .products').addClass('todo');
    while ( $('#command tbody > .products.todo').length > 0 )
    {
      var pdt = $('#command tbody > .products.todo:first');
      var currency = LI.get_currency($(pdt).find('.value').text());
      var fr_style = LI.currency_style($(pdt).find('.value').text()) == 'fr';
      
      // compare to other lines "todo"
      $('#command tbody > .products.todo:not(:first)').each(function(){
        var go = true;
        var compare = this;
        $.each(['.event', '.manifestation', '.workspace', '.tickets'], function(i, field){
          if ( $(compare).find(field).text() != $(pdt).find(field).text() )
            go = false;
        });
        if ( go )
        {
          if ( $(pdt).find('.value').text() != $(this).find('.value').text() )
            $(pdt).find('.value').text('-');
          
          $(pdt).find('.total').html(LI.format_currency(LI.clear_currency($(pdt).find('.total').text()) + LI.clear_currency($(this).find('.value').text()), true, fr_style, currency));
          $(pdt).find('.qty').text(parseInt($(pdt).find('.qty').text(),10) + parseInt($(this).find('.qty').text(),10));
          $(this).remove();
        }
      });
      
      $(pdt).removeClass('todo');
    }
    
    // Test if the paiement is received
    var state = true;
    var testp = 0;
    
    LI.pubTestPayment = function () {
      $.ajax({
        url: location.href.replace('show', 'ajax'),
        method: 'post',
        success: function(result){
          if ( result['payment'] ) {
            clearTimeout(testp);
            if ( !state ) {
              location.reload();
            }
          } else {
            state = result['payment'];
            testp = setTimeout(LI.pubTestPayment, 5000);
          }
        }
      });
    }
    
    LI.pubTestPayment();
    
  });

