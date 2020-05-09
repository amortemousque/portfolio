(function ($) {

  'use strict';

    $.fn.listElementsAnimation = function(ctrl, params) { 
  
      var ctrl = ctrl; 

      var getTimeline = function(component) {
        var items = $(component).find("ul.list-group:last-child li");
        
        var tl = new TimelineMax();
        var speed = params["slower"] ? 1 : 0.5;
        items.each(function(i, item){ tl.from(item, speed, {y:60, autoAlpha: 0, clearProps:"all"}, "-=0.4"); })
        
        tl.timeScale(2);
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

   