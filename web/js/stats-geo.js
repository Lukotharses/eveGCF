if ( LI === undefined )
  var LI = {};
if ( LI.stats === undefined )
  LI.stats = [];

$(document).ready(function(){

  LI.stats.geo();
});

LI.stats.geo = function(){
  var approach = $('#criterias_approach').children('option[selected="selected"]').val();

  $('#content .jqplot').each(function(){

    var chart = $(this).find('.chart')
    var name = chart.attr('data-series-name');
    var id = chart.prop('id');
    var title = $(this).find('h2') ? $(this).find('h2').text() : '';
    LI.csvData[name] = [
      [
        $(this).find('#csvTitle').text(),
        title
      ],
    ]; 
    
    //retrieve stats
    $.get(chart.attr('data-json-url') + '?type=' + name, function(json){
      var array = [];
      var series = [];

      LI.csvData[name].push(json.csvHeaders);

      //build data array depending on approach filter
      switch ( approach ) {
        case 'by-tickets':
          $.each(json.tickets, function(key, value) {
            array.push([json.translations[key], value.value]);
            LI.csvData[name].push([json.translations[key], json.nb[key].value, json.nb[key].percent, value.value, value.percent, json.value[key].value + ' €', json.value[key].percent]);
          });
          break;
        case 'financial':
          $.each(json.value, function(key, value) {
            array.push([json.translations[key], value.value]);
            LI.csvData[name].push([json.translations[key], json.nb[key].value, json.nb[key].percent, json.tickets[key].value, json.tickets[key].percent, value.value + ' €', value.percent]);
          });
          break;
        default:
         $.each(json.nb, function(key, value) {
            array.push([json.translations[key], value.value]);
            LI.csvData[name].push([json.translations[key], value.value, value.percent, json.tickets[key].value, json.tickets[key].percent, json.value[key].value + ' €', json.value[key].percent]);
          });
      }
      
      //init jqplot with data array
      var plot = $.jqplot(id, [array], {
        seriesDefaults: {
          rendererOptions: {
            fill: true,
            showDataLabels: true,
            slideMargin: 4,
            lineWidth: 5
          },
          renderer: $.jqplot.PieRenderer
        },
        highlighter: {
          sizeAdjust: 2,
          show: true,
          useAxesFormatters: false,
          tooltipFormatString: '%s',
          tooltipContentEditor: LI.stats.pieTooltips
        },
        cursor: {
          showTooltip: false,
          show: true
        },
        legend: {
          show: true,
          location: 'e'
        },
        captureRightClick: true
      });

      LI.stats.resizable(plot, name, id);
    });
  });
};