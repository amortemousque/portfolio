(function ($) {

  'use strict';

    $.fn.coverAnimation = function(ctrl, params) { 
  
      var ctrl = ctrl; 

      var getTimeline = function(component) { 
          
        var $quote_text = $(component).find('.blockquote .quote'),
        $quote_footer =  $(component).find('.blockquote-footer'),
        $quote_link =  $(component).find('.cover-link'),
        $cover_body =  $(component).find('.cover-body');

        var tl = new TimelineMax();
        tl.from($cover_body, 2, {width: "100%", maxWidth: "unset", ease:Quint.easeOut})
        .from($quote_text, 1, {x: "500", autoAlpha:0, ease:Quart.easeOut}, "-=0.9")
        .from($quote_footer, 1, {x: "500", autoAlpha:0, ease:Quart.easeOut}, "-=0.9")
        .from($quote_link, 1, {x: "500", autoAlpha:0, ease:Quart.easeOut}, "-=0.8");

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

   