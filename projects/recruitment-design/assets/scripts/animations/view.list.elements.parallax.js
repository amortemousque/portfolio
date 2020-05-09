
(function ($) {

  'use strict';

    $.fn.viewListElementsParallax = function(ctrl, params) { 
  
      var ctrl = ctrl; 
      
      var getTimeline = function(component) {          
        var $view_header = $(component).find('.card-header');
        var amplitude = params["parallax_amplitude"];
        var tl = new TimelineMax();
        tl.fromTo($view_header, 1, {y: amplitude+"%", ease: Linear.easeNone}, {y: "-"+amplitude+"%", ease: Linear.easeNone})
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