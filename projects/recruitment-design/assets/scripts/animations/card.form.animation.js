(function ($) {

  'use strict';

    $.fn.cardFormAnimation = function(ctrl, params) { 
  
      var ctrl = ctrl; 

      var getTimeline = function(component) {
        var items = $(component).find("form .form-row");
        
        var tl = new TimelineMax();
        items.each(function(i, item){
          var left = $(item).find(".col:first-child");
          var right = $(item).find(".col:nth-child(2)");
          tl.from(left, 1 - (i*0.1), {x:-100, autoAlpha: 0, clearProps:"all"})
          .from(right, 1 - (i*0.1), {x:100, autoAlpha: 0, clearProps:"all"}, "-="+(1 - (i*0.1)));
        })
        
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

   