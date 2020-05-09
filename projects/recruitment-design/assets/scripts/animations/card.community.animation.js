(function ($) {

  'use strict';

    $.fn.cardCommunityAnimation = function(ctrl, params) { 
  
      var ctrl = ctrl; 

      var getTimeline = function(component) {
        var items = $(component).find("ul.list-group:last-child li");
        
        var tl = new TimelineMax();
        var speed = params["slower"] ? 1 : 1;
        items.each(function(i, item){ 
          var item_figure = $(item).find(".item-figure");
          var item_body = $(item).find(".item-body");
          var item_title = $(item).find(".item-title");
          var item_subtitle = $(item).find(".item-subtitle");
          var nav_socials = $(item).find(".nav-socials");
          //tl.from(item, 1, {autoAlpha: 0, clearProps:"all"}, "-=0.9");

          tl.from(item_figure, speed, {x:-100,autoAlpha: 0, clearProps:"all"}, "-=0.4")
          .from(item_body, speed, {x:100,autoAlpha: 0, clearProps:"all"}, "-="+speed)
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

   