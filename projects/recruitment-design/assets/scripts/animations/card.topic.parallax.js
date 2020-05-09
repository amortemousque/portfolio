(function ($) {

  'use strict';

    $.fn.cardTopicParallax = function(ctrl, params) { 
  
      var ctrl = ctrl; 
      
      var getTimeline = function(component) {          
        var $card_header = $(component).find('.card-header');
        var $card_figure = $(component).find('.card-figure');
        var $card_content = $(component).find('.card-content');
        var amplitude = params["parallax_amplitude"];

        var tl = new TimelineMax();
        tl.fromTo($card_figure, 1, {y: amplitude+"%", ease: Linear.easeNone}, {y: "-"+amplitude+"%", ease: Linear.easeNone})
        .fromTo($card_content, 1, {y: amplitude+"%", ease: Linear.easeNone}, {y: "-"+amplitude+"%", ease: Linear.easeNone}, "-=1")
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