(function ($) {

  'use strict';

    $.fn.headingParallax = function(ctrl, params) { 
  
      var ctrl = ctrl; 
      
      var getTimeline = function(component) {          
        var $heading_figure = $(component).find('.heading-figure');
        var $heading_body = $(component).find('.heading-body');
        var $heading_pattern = $(component).find('.heading-pattern');
        var amplitude = params["parallax_amplitude"];
        var amplitude_body = amplitude * 1;
        var amplitude_pattern = amplitude * 1.5;
        
        var tl = new TimelineMax();
        tl.fromTo($heading_figure, 1, {y: amplitude+"%", ease: Linear.easeNone}, {y: "-"+amplitude+"%", ease: Linear.easeNone})
        .fromTo($heading_body, 1, {y: amplitude_body+"%", ease: Linear.easeNone}, {y: "-"+amplitude_body*3+"%", ease: Linear.easeNone}, "-=1")
        .fromTo($heading_pattern, 1, {y: amplitude_pattern+"%", ease: Linear.easeNone}, {y: "-"+amplitude_pattern+"%", ease: Linear.easeNone}, "-=1")
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
