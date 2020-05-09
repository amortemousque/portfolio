(function ($) {

  'use strict';

    $.fn.cardTopicAnimation = function(ctrl, params) { 
  
      var ctrl = ctrl; 

      var getTimeline = function(component) { 
          
        var $card_topic = $(component).find('.card-header h2');
        //var $card_figure =  $(component).find('.card-figure');
        //var $card_figure_img =  $(component).find('.card-figure img');
        var $card_content_subtitle =  $(component).find('.card-content .card-subtitle');
        var $card_content_link =  $(component).find('.card-content .card-link');
        var $card_content_text =  $(component).find('.card-content .card-text');
        

        var tl = new TimelineMax();
        tl.from($card_topic, 1.5, {x: "-40", autoAlpha: 0, ease:Quint.easeOut})
        //.from($card_figure_img, 0.7, {x: "-100%", ease:Quart.easeOut}, "-=0.5")
        //.from($card_figure, 0.9, {width: "0px", flex: "0 0 auto", "minWidth": "unset", ease:Quart.easeOut}, "-=1")
        .from($card_content_subtitle, 1, {x: "-10", autoAlpha:0, ease:Quart.easeOut}, "-=0.6")
        .from($card_content_text, 1, {x: "-20", autoAlpha:0, ease:Quart.easeOut}, "-=0.9")
        .from($card_content_link, 1, {x: "-20", autoAlpha:0, ease:Quart.easeOut}, "-=0.9")
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

   