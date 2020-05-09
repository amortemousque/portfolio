(function ($) {

  'use strict';

    $.fn.cardQuoteParallax = function(ctrl, params) { 
  
      var ctrl = ctrl; 
      
      var getTimeline = function(component) {          
        var $quote = $(component);
        var amplitude = params["parallax_amplitude"];
        amplitude *= 0.5;

        var tl = new TimelineMax();
        tl.fromTo($quote, 1, {y: amplitude+"%", ease: Linear.easeNone}, {y: "-"+amplitude+"%", ease: Linear.easeNone})
        ;
        return tl; 
      } 

      return this.each( function() { 
        var timeline = getTimeline(this); 
        // build scene
        var scene = new ScrollMagic.Scene({
            triggerElement: this,
            duration: "200%", 
            triggerHook: "onEnter"
        })
        .setTween(timeline)
        .addTo(ctrl);
      }); 
  
    } 
   
}(jQuery)); 