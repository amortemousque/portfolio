(function ($) {

  'use strict';

    $.fn.slideAnimation = function(ctrl, params) { 
  
      var ctrl = ctrl; 

      var getTimeline = function(component) { 
        var $carousel_indicators = $(component).find('.carousel-indicators');
        var $carousel_counter = $(component).find('.carousel-slide .carousel-counter');
        var $carousel_slide_title = $(component).find('.carousel-slide .carousel-slide-title');
        var $carousel_slide_text = $(component).find('.carousel-slide .carousel-slide-text');
        var $carousel_slide_link = $(component).find('.carousel-slide .carousel-slide-link');
        
        //if (params['delay']) var tl = new TimelineMax({delay:params['delay']});
        //else 
        var tl = new TimelineMax();
        
        tl.from($carousel_indicators, 1, {x: "-100", autoAlpha:0, ease:Quart.easeOut}, "-=0.5")
        .from($carousel_counter, 1, {height: "0", ease:Quint.easeOut}, "-=1")
        .from($carousel_slide_title, 1, {x: "-60", autoAlpha:0, ease:Quart.easeOut}, "-=0.5")
        .from($carousel_slide_text, 1, {x: "-60", autoAlpha:0, ease:Quart.easeOut}, "-=0.9")
        .from($carousel_slide_link, 1, {x: "-60", autoAlpha:0, ease:Quart.easeOut}, "-=0.9")
        ;
        
        return tl; 
      } 
    
      return getTimeline(this);
    } 
   
}(jQuery)); 

   