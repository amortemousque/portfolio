(function ($) {

  'use strict';

    $.fn.viewListElementsAnimation = function(ctrl, params) { 
  
      var ctrl = ctrl; 

      var getTimeline = function(component) { 
          
        var $card_subtitle = $(component).find('.card-header .card-subtitle'),
        $card_title =  $(component).find('.card-header .card-title');

        var tl = new TimelineMax();
        tl.from($card_subtitle, 1, {x: "-100", autoAlpha:0, ease:Quart.easeOut})
        .from($card_title, 1, {x: "-100", autoAlpha:0, ease:Quart.easeOut}, "-=0.9");

        return tl; 
      } 
    
      return this.each( function() { 
        // sceneOptions.triggerElement = this; 
        var timeline = getTimeline(this); 

        // build scene
        var scene = new ScrollMagic.Scene({
            triggerElement: this,
            duration: "0%", 
            triggerHook: params['triggerHook'],
            reverse:false
        })
        .setTween(timeline)
        .addTo(ctrl);
      }); 
  
    } 
   
}(jQuery)); 

   