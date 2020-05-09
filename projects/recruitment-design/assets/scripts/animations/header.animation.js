(function ($) {

  'use strict';

    $.fn.headerAnimation = function(ctrl, params) { 
  
      var ctrl = ctrl; 

      var getTimeline = function(component) { 
          
        var $nav_menu = $(component).find(".navbar-nav-main");
        var $nav_logo = $(component).find(".navbar-logo");
        

        var tl = new TimelineMax();
        tl.from($nav_menu, 1.5, {marginTop: "100%", ease:Quint.easeOut})
        .from($nav_logo, 1.5, {y: "50", autoAlpha:0, ease:Quint.easeOut}, "-=1");
        
        tl.timeScale(0.75);
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

   