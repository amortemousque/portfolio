(function ($) {

  'use strict';

    $.fn.cardAnimation = function(ctrl, params) { 
  
      var ctrl = ctrl; 

      var getTimeline = function(component) { 
        var $card_subtitle = $(component).find('.card-body .card-subtitle');
        var $card_title =  $(component).find('.card-body .card-title');
        var $card_text =  $(component).find('.card-body p');
        var $card_link =  $(component).find('.card-body .card-link');
        var $card_figure =  $(component).find('.card-figure');
        var $card_figure_img =  $(component).find('.card-figure img');
        var $card_line =  $(component).find('.card-footer .card-line');
        var $card_footer =  $(component).find('.card-footer p');
        
        // Image comes from other side when card is reverse
        var img_direction = $(component).hasClass('card-reverse') ? '100%' : '-100%';
        var tl = new TimelineMax();
        tl.from($card_subtitle, 1, {x: "-20", autoAlpha: 0, ease:Quint.easeOut})
        .from($card_title, 1, {x: "-20", autoAlpha:0, ease:Quart.easeOut}, "-=0.9")
        .from($card_text, 1, {x: "-20", autoAlpha:0, ease:Quart.easeOut}, "-=0.9")
        .from($card_link, 1, {x: "-20", autoAlpha:0, ease:Quart.easeOut}, "-=0.8")
        .from($card_line, 1, {height: "0px", minHeight: "unset", ease:Quint.easeOut})
        .from($card_footer, 1, {height: "0px", overflow: "hidden", ease:Quint.easeOut}, "-=0.5")
        ;
        tl.delay(0.8);
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

   