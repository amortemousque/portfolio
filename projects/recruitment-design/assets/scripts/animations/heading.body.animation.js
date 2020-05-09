(function ($) {

  'use strict';

    $.fn.headingBodyAnimation = function(ctrl, params) { 
  
      var ctrl = ctrl; 

      var getTimeline = function(component) { 
          
        var $heading_line =  $(component).find('.heading-line');
        var $heading_text =  $(component).find('p');
        
        var tl = new TimelineMax();
        tl.from($heading_line, 1, {height: "0px", minHeight: "unset", ease:Quint.easeOut})
        .from($heading_text, 1, {height: "0px", overflow: "hidden", ease:Quint.easeOut}, "-=0.5")
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
            triggerHook: 0.7, //params['triggerHook'],
            reverse:false
        })
        .setTween(timeline)
        .addTo(ctrl);
      }); 
  
    } 
   
}(jQuery)); 

   