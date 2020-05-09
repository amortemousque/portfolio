(function ($) {

  'use strict';

    $.fn.carouselAnimation = function(ctrl, params) { 
  
      var ctrl = ctrl; 

      var getTimeline = function(component) { 
          
        var $carousel_subtitle = $(component).find('.carousel-header .carousel-subtitle');
        var $carousel_title = $(component).find('.carousel-header .carousel-title');
        var $carousel_indicators = $(component).find('.carousel-indicators');
        var $carousel_counter = $(component).find('.carousel-slide .carousel-counter');
        //var $carousel_figure = $(component).find('.carousel-slide .carousel-slide-figure');
        var $carousel_slide_title = $(component).find('.carousel-slide .carousel-slide-title');
        var $carousel_slide_text = $(component).find('.carousel-slide .carousel-slide-text');
        var $carousel_slide_link = $(component).find('.carousel-slide .carousel-slide-link');
        //var $carousel_figure_img = $(component).find('.carousel-slide .carousel-slide-figure img');
        
        var tl = new TimelineMax();
        tl.from($carousel_subtitle, 1, {x: "-20", autoAlpha: 0, ease:Quint.easeOut})
        .from($carousel_title, 1, {x: "-20", autoAlpha:0, ease:Quart.easeOut}, "-=0.9")
        .from($carousel_indicators, 1, {x: "-100", autoAlpha:0, ease:Quart.easeOut}, "-=0.5")
        //.from($carousel_figure, 0.7, {width: "0px", "minWidth": "unset", ease:Quart.easeOut}, "-=1")
        //.fromTo($carousel_figure_img, 0.7, {width: "0px", ease:Quart.easeOut},{width: "100%", ease:Quart.easeOut}, "-=0.5")
        .from($carousel_counter, 1, {height: "0", ease:Quint.easeOut}, "-=1.3")
        .from($carousel_slide_title, 1, {x: "-60", autoAlpha:0, ease:Quart.easeOut}, "-=0.5")
        .from($carousel_slide_text, 1, {x: "-60", autoAlpha:0, ease:Quart.easeOut}, "-=0.9")
        .from($carousel_slide_link, 1, {x: "-60", autoAlpha:0, ease:Quart.easeOut}, "-=0.9")
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

   