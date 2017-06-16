/**********************************************************************************
*
*	    This file is part of e-venement.
*
*    e-venement is free software; you can redistribute it and/or modify
*    it under the terms of the GNU General Public License as published by
*    the Free Software Foundation; either version 2 of the License.
*
*    e-venement is distributed in the hope that it will be useful,
*    but WITHOUT ANY WARRANTY; without even the implied warranty of
*    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*    GNU General Public License for more details.
*
*    You should have received a copy of the GNU General Public License
*    along with e-venement; if not, write to the Free Software
*    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*
*    Copyright (c) 2006-2015 Baptiste SIMON <baptiste.simon AT e-glop.net>
*    Copyright (c) 2006-2015 Libre Informatique [http://www.libre-informatique.fr/]
*
***********************************************************************************/

  if ( LI == undefined )
    var LI = {};
  
  $(document).ready(function(){
    $('#li_transaction_field_content .new-family input[type=submit]').click(function(){
      LI.addFamilies($(this).closest('.new-family').find('select'));
    });
    LI.autoAddFamilies();
    // the autocompleter & the manifestation's selector
    $('#li_transaction_field_content .new-family [name=autocompleter]').keyup(function(e){
      // do not take into account the \n chars
      if ( e.which == 13 )
        return;
      
      var val = $(this).val();
      var direct = $(this).val().replace(/^(.*)(!)$/, '$2') == '!' ? true : false;
      var elt = this;
      setTimeout(function(){ // this timeout is to execute a HTTP request for a bulk for letters instead of for every single keyup()
        if ( val != $(elt).val() ) // stops the request
          return;
        
        // the searched string  
        var search = $(elt).val().replace(/^(.*)(!)$/, '$1');
        
        // the select
        var select = $(elt).closest('.new-family').find('select');
        
        // emptying the previous select's content
        select.html('');
        
        // disabling the selection of any manif that is already selected (including those w/o any ticket yet) 
        var except = [];
        if ( !direct )
        $(elt).closest('.bunch').find('.family:not(.total)').each(function(){
          if ( $(this).attr('data-family-id') )
            except.push($(this).attr('data-family-id'));
        });
        
        $.ajax({
          url: select.attr('data-content-url'),
          data: {
            with_colors: true,
            q: search,
            except: except,
            all: direct ? 'true' : null,
            max: select.attr('data-content-qty'),
            'keep-order': true
          },
          method: 'get',
          success: function(data){
            if ( LI.touchscreenOnNewFamilyLoad != undefined )
            $.each(LI.touchscreenOnNewFamilyLoad, function(i, fct){
              fct(data, $(select).closest('form'));
            });
            
            select.html('');
            $.each(data, function(id, manif){
              $('<option></option>').val(manif.id)
                .css('background-color', manif.color)
                .text(manif.name).prop('title', manif.name)
                .attr('data-gauge-url', manif.gauge_url)
                .appendTo(select);
            });
            
            // reset the search words
            if ( direct )
              $(elt).val('');
            
            // show mini-gauge w/o selecting a new family
            $('#li_transaction_field_content .bunch .new-family select option').unbind('click').click(function(){
              LI.showGauge($(this));
            });
          }
        });
      }, direct ? 50 : 330);
   
      return false;
    }).keyup();
    
    // adding the date of the day with a simple click
    $('#li_transaction_field_content .new-family [name=date]').click(function(){
      var button = this;
      $(this).closest('form').find('[name=autocompleter]').each(function(){
        if ( $(this).val().indexOf($(button).val()) >= 0 )
          return;
        $(this).val($(this).val()+' '+$(button).val())
          .keyup();
      });
      return false;
    });

    // PRINTS OUT THE GLOBAL GAUGE OF A FAMILY
    $('#li_transaction_field_content .family h3 .fg-button.gauge').click(function(){
      $.get($(this).prop('href'), function(data){
        $('#li_transaction_field_product_infos *').remove(); // cleaning products infos
        LI.renderGauge(JSON.stringify(data), true);
      });
      console.error($(this).prop('href'));
      return false;
    });
    
    // REMOVE A FAMILY FROM THE LIST IF THERE IS NO ITEM INSIDE
    $('#li_transaction_field_content .family h3 .fg-button.delete').click(function(){
      var can_be_deleted = true;
      $(this).closest('.family').find('.qty input').each(function(){
        if ( $(this).val() && !isNaN(parseInt($(this).val())) && parseInt($(this).val()) > 0 )
        {
          $(this).addClass('blink');
          can_be_deleted = false;
        }
      });
      
      if ( can_be_deleted )
      {
        var family = $(this).closest('.family').find('.happens_at').text();
        var gauge = $(this).closest('.family').find('.items .item:first .data .gauge.raw').prop('href');
        
        $('<option></option>')
          .val($(this).closest('.family').attr('data-family-id'))
          .html(family)
          .prop('title', family)
          .attr('data-gauge-url', gauge.substr(gauge.indexOf('/pos')))
          .css('background-color', $(this).closest('.family').find('h3').css('background-color'))
          .appendTo($(this).closest('.bunch').find('.new-family select'))
          .click(function(){
            LI.showGauge($(this));
          });
        if ( $('#li_transaction_field_new_transaction a.persistant').length == 1 )
        $('#li_transaction_field_new_transaction a.persistant').prop('href', $('#li_transaction_field_new_transaction a.persistant').prop('href').replace(
          '#'+$(this).closest('.bunch').prop('id').replace('li_transaction_','')+'-'+$(this).closest('.family').attr('data-family-id'),
          ''
        ));
        $(this).closest('.family').remove();
      }
      else
      {
        var elts = $(this).closest('.family').find('.qty.blink');
        LI.blinkQuantities(elts);
      }
      
      return false;
    });
  });

LI.blinkQuantities = function(elts, full = false){
  elts.blink = 0;
  
  var blink = function(){
    if ( elts.blink % 2 == 0 )
      elts.css('border-color', 'red').css('color', full ? 'red' : '');
    else
      elts.css('border-color', '').css('color', '');
    
    if ( elts.blink < 7 )
      setTimeout(blink,500);
    else
      elts.removeClass('blink');
    elts.blink++;
  }
  blink();
}

// add automatically manifestations to the current transaction
LI.autoAddFamilies = function(form){
  $(location.hash.split('#')).each(function(key, value){
    if ( !value )
      return;
    var type = value.replace(/-\d+(,\d+)*$/,'');
    var id = value.replace(/^\w+-/,'');

    switch ( type ) {
    case 'museum':
    case 'manifestations':
      var field = 'manifestation';
      $('#li_transaction_'+type+' .new-family [name="'+field+'_id[]"] *').remove();
      $(id.split(',')).each(function(i, v){
        $('#li_transaction_'+type+' .new-family [name="'+field+'_id[]"]')
          .append($('<option>'+v+'</option>').val(v).prop('selected',true));
      });
      LI.addFamilies($('#li_transaction_'+type+' .new-family [name="'+field+'_id[]"]'));
      break;
    case 'store':
      var field = 'product';
      $('#li_transaction_'+type+' .new-family [name="'+field+'_id[]"] *').remove();
      $(id.split(',')).each(function(i, v){
        $('#li_transaction_'+type+' .new-family [name="'+field+'_id[]"]')
          .append($('<option>'+v+'</option>').val(v).prop('selected',true));
      });
      LI.addFamilies($('#li_transaction_'+type+' .new-family [name="'+field+'_id[]"]'));
      break;
    }
  });
}


  LI.addFamilies = function(elt){
  elt == undefined
    ? $('#li_transaction_field_content .new-family select')
    : $(elt).closest('.new-family').find('select')
  ;

  $(elt).each(function(){
    if ( !$(this).val() )
      return;
      
    var nf = $(this).closest('.new-family');
    var bunch = nf.closest('.bunch');
    
    nf.submit();
    nf.find('select option:selected').remove();
    
    setTimeout(function(){
      bunch.find('.families:not(.sample) .family:not(.total):last .item:first').click();
    }, 1000);
  });
}

LI.showGauge = function(option){
  if ( !option.attr('data-gauge-url') )
    return;

  $.get(option.attr('data-gauge-url'), function(data){
    $('#li_transaction_field_product_infos *').remove(); // cleaning products infos
    
    switch ( option.closest('[data-bunch-id]').attr('data-bunch-id') ) {
    case 'store':
      LI.renderStocks(JSON.stringify(data));
      break;
    default:
      LI.renderGauge(JSON.stringify(data), true);
      break;
    }
  });
}
