(function ($) {

  'use strict';

    $.fn.cardFigureParallax = function(ctrl, params) { 
  
      var ctrl = ctrl; 
      
      var getTimeline = function(component) {          
        var $card_figure = $(component).find('.card-figure');
        var $card_footer = $(component).find('.card-footer');
        var amplitude = params["parallax_amplitude"];

        var tl = new TimelineMax();
        tl.fromTo($card_figure, 1, {y: amplitude+"%", ease: Linear.easeNone}, {y: "-"+amplitude+"%", ease: Linear.easeNone})
        .fromTo($card_footer, 1, {y: amplitude+"%", ease: Linear.easeNone}, {y: "-"+amplitude*10+"%", ease: Linear.easeNone}, "-=1");        
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
