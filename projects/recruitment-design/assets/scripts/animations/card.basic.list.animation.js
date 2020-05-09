(function ($) {

  'use strict';

    $.fn.cardBasicListAnimation = function(ctrl, params) { 
  
      var ctrl = ctrl; 

      var getTimeline = function(component) { 
          
        var items = $(component).find(".item-display-6");
        
        var tl = new TimelineMax();
        items.each(function(i, item){ 
          var decal = (i%2 == 0) ? 0.4 : 1;
          var orientation = (i%2 == 0) ? -100 : 100;
          tl.from(item, 1, {backgroundColor:"black", x:orientation, autoAlpha: 0, clearProps:"all"}, "-="+decal);
        })
        
        //tl.timeScale(2);
        return tl;
        
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

   