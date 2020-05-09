(function ($) {

  'use strict';

    $.fn.cardQuoteAnimation = function(ctrl, params) { 
  
      var ctrl = ctrl; 

      var getTimeline = function(component) { 
          
        var $quote_footer =  $(component).find('.blockquote-display-1 .blockquote-footer');

        var tl = new TimelineMax();
        tl.from($quote_footer, 1, {x: "-60", autoAlpha:0, ease:Quart.easeOut});

        return tl; 
      } 
    
      return this.each( function() { 
        // sceneOptions.triggerElement = this; 
        var timeline = getTimeline(this); 

        // build scene
        var scene = new ScrollMagic.Scene({
            triggerElement: this,
            duration: "0%", 
            triggerHook: 0.2,//params['triggerHook'],
            reverse:false
        })
        .setTween(timeline)
        .addTo(ctrl);
      }); 
  
    } 
   
}(jQuery)); 

   