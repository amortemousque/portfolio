(function ($) {

  'use strict';

    $.fn.carouselParallax = function(ctrl, params) { 
  
      var ctrl = ctrl; 
      
      var getTimeline = function(component) {   
        var $carousel_body = $(component).find('.carousel-item .carousel-slide-body');
        var $carousel_controls = $(component).find('.carousel-controls');
        
        var $carousel_counter = $(component).find('.carousel-item .carousel-counter');
        var $carousel_title = $(component).find('.carousel-item .carousel-slide-body .carousel-title');
        var $carousel_text = $(component).find('.carousel-item .carousel-slide-body .carousel-text');
        var $carousel_link = $(component).find('.carousel-item .carousel-slide-body .carousel-link');
        var $carousel_figure = $(component).find('.carousel-item .carousel-slide-figure');
        var amplitude = params["parallax_amplitude"];
        var amplitude_controls = 100;
        
        var tl = new TimelineMax();
        tl.fromTo($carousel_figure, 1, {y:amplitude+"%", ease: Power0.easeNone}, {y: "-"+amplitude+"%", ease: Power0.easeNone})
        .fromTo($carousel_body, 1, {y: "30%", ease: Power0.easeNone}, {y: "-30%", ease: Power0.easeNone}, "-=1")
        .fromTo($carousel_controls, 1, {y:amplitude_controls+"%", ease: Power0.easeNone}, {y:"-"+amplitude_controls+"%", ease: Power0.easeNone}, "-=1")
        //.fromTo($carousel_text, 1, {y: "30%", ease: Power0.easeNone}, {y: "-30%", ease: Power0.easeNone}, "-=1")
        //.fromTo($carousel_link, 1, {y: "30%", ease: Power0.easeNone}, {y: "-30%", ease: Power0.easeNone}, "-=1")
        //.fromTo($carousel_figure, 1, {y: "30%", ease: Power0.easeNone}, {y: "-30%", ease: Power0.easeNone}, "-=1")
        ;
        return tl; 
      } 

      return this.each( function() { 
        var timeline = getTimeline(this); 
        // build scene
        var scene = new ScrollMagic.Scene({
            triggerElement: this,
            duration: "200%", 
            triggerHook: "onEnter"
        })
        .setTween(timeline)
        .addTo(ctrl);
      }); 
  
    } 
   
}(jQuery)); 

   
/*
(function ($) {
  'use strict';

  // init controller
	var controller = new ScrollMagic.Controller({globalSceneOptions: {triggerHook: "onEnter", duration: "200%"}});

	// build scenes
	new ScrollMagic.Scene({triggerElement: ".card-display-1"})
    .setTween(".card-display-1 > .card-figure", {y: "80%", ease: Linear.easeNone})
    .addIndicators()
    .addTo(controller);   
}(jQuery)); */
