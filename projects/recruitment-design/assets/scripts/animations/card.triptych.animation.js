(function ($) {

  'use strict';

    $.fn.cardTriptychAnimation = function(ctrl, params) { 
  
      var ctrl = ctrl; 

      var getTimeline = function(component) { 
          
        var $card_text = $(component).find('.card-body .card-text');
        var $card_nav = $(component).find('.card-body .card-nav');
        
        var tl = new TimelineMax();
        tl.from($card_nav, 1.5, {y: "80", ease:Quart.easeOut}, 0)
        .from($card_nav, 3, {autoAlpha: 0}, 0)
        ;
        
        return tl; 
      } 
    
      return this.each( function() { 
        // sceneOptions.triggerElement = this; 
        var timeline = getTimeline(this); 

        // build scene
        var scene = new ScrollMagic.Scene({
            triggerElement: this,
            duration: "0%", 
            triggerHook: 0.5,//params['triggerHook'],
            reverse:false
        })
        .setTween(timeline)
        .addTo(ctrl);
      }); 
  
    } 
   
}(jQuery)); 

   