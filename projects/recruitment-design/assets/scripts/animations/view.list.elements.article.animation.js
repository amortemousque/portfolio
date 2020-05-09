(function ($) {

  'use strict';

    $.fn.viewListElementsArticleAnimation = function(ctrl, params) { 
  
      var ctrl = ctrl; 

      var getTimeline = function(component) { 
          
        var $item_title = $(component).find('.item-body .item-subtitle');
        var $item_subtitle = $(component).find('.item-body .item-title');
        var speed = params["slower"] ? 0.5 : 1;

        var tl = new TimelineMax();
        tl
        .from($item_title, speed, {x: "-100", autoAlpha:0, ease:Quart.easeOut}, '-=1')
        .from($item_subtitle, speed, {x: "-100", autoAlpha:0, ease:Quart.easeOut}, '-=1')     
        ;
        tl.delay(1.5);
        return tl; 
      } 
    
      return this.each( function() { 
        // sceneOptions.triggerElement = this; 
        var timeline = getTimeline(this); 

        // build scene
        var scene = new ScrollMagic.Scene({
            triggerElement: this,
            duration: "0%", 
            triggerHook: 1, //params['triggerHook'],
            reverse:false
        })
        .setTween(timeline)
        .addTo(ctrl);
      }); 
  
    } 
   
}(jQuery)); 

   