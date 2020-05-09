(function ($) {

  'use strict';

    $.fn.cardBasicAnimation = function(ctrl, params) { 
  
      var ctrl = ctrl; 

      var getTimeline = function(component) { 
          
        var $card_subtitle = $(component).find('.card-body .card-subtitle');
        var $card_title = $(component).find('.card-body .card-title');
        var $card_link = $(component).find('.card-body .card-link');
        
        var tl = new TimelineMax();
        tl.from($card_subtitle, 2, {y: "60",autoAlpha: 0,  ease:Quint.easeOut})
        .from($card_title, 2, {y: "60",autoAlpha: 0,  ease:Quint.easeOut}, "-=1.5")
        .from($card_link, 2, {y: "60",autoAlpha: 0,  ease:Quint.easeOut}, "-=1.5")
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
            triggerHook: params['triggerHook'],
            reverse:false
        })
        .setTween(timeline)
        .addTo(ctrl);
      }); 
  
    } 
   
}(jQuery)); 

   