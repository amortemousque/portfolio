(function ($) {

  'use strict';

    $.fn.coverParallax = function(ctrl, params) { 
  
      var ctrl = ctrl; 
      
      var getTimeline = function(component) {          
        var $cover_body = $(component).find('.cover-body');
        var $cover_body_background_1 = $(component).find('.cover-body-background-1');
        var $cover_body_background_2 = $(component).find('.cover-body-background-2');
        var $quote = $(component).find('.quote');
        var amplitude = params["parallax_amplitude"];
        var amplitude_pattern = amplitude * 1.25;
        var amplitude_pattern2 = amplitude * 2;
        
        var tl = new TimelineMax();
        //tl.fromTo($cover_body, 1, {y: amplitude+"%", ease: Linear.easeNone}, {y: "-"+amplitude+"%", ease: Linear.easeNone})
        tl.fromTo($cover_body_background_1, 1, {y: amplitude_pattern+"%", ease: Linear.easeNone}, {y: "-"+amplitude_pattern+"%", ease: Linear.easeNone})
        .fromTo($quote, 1, {y: amplitude_pattern*2+"%", ease: Linear.easeNone}, {y: "-"+amplitude_pattern*2+"%", ease: Linear.easeNone}, "-=1")
        .fromTo($cover_body_background_2, 1, {y: amplitude_pattern2+"%", ease: Linear.easeNone}, {y: "-"+amplitude_pattern2+"%", ease: Linear.easeNone}, "-=1")
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
