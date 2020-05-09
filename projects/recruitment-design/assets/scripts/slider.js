/**
 * @file
 * Global utilities.
 *
 */
(function ($) {
  
    'use strict';

    $('.slider').each(function() {
        var select = $(this).children('select');
        var id = select.attr('id');

        var slider = $( "<div id='slider-"+ id +"'></div>" ).insertAfter( select ).slider({
          animate: "slow",
          min: 1,
          max: select.children('option').length,
          range: "min",
          slide: function( event, ui ) {
            select[ 0 ].selectedIndex = ui.value - 1;
          }
        });
        
        slider.slider( "value", select[ 0 ].selectedIndex + 1 );

        var labels = [];
        var labels_container = '';    
        $('#'+id+' option').each(function() { labels.push($(this).text()); }); 
        var counter = 0;    
        labels.forEach(function(label){ 
          if(label != '' && counter > 0) {
            labels_container += '<div class="slider-limit-indicator"></div><div id="" class="label-slider label-slider-basis-'+ (select.children('option').length - 1) +'">'+ label +'</div>'; 
          }
          counter++;
        });

        // Display labels for sliders, from select list
        $( "<div class='labels-slider' id='labels-slider-"+ id +"'>" + labels_container + "</div>" ).insertAfter("#slider-"+ id);
    });

    /*$( ".zzzz").on( "click", function() {
      //selected_value = $(this).attr('id');
      //console.log(selected_value);
      //slider.slider( "value", selected_value );
    });*/
    
  })(jQuery);
  