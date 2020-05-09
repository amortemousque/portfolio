(function ($) {

  'use strict';

    $.fn.cardStepsAnimation = function(ctrl, params) { 
  
      var ctrl = ctrl; 

      var getTimeline = function(component) {
        var is_secondary_display = ($(component).hasClass('card-steps-display-2')) ? true : false;
        var $card_subtitle = $(component).find('.card-body .card-subtitle');
        var $card_title =  $(component).find('.card-body .card-title');
        var $card_text =  $(component).find('.card-body p');
        var $card_link =  $(component).find('.card-body .card-link');
        var $list_items =  $(component).find('.card-list-group');
        var items = $list_items.find("li");
        
        var tl = new TimelineMax();
        tl.from($card_subtitle, 2, {x: "-20", autoAlpha: 0, ease:Quint.easeOut})
        .from($card_title, 2, {x: "-20", autoAlpha:0, ease:Quart.easeOut}, "-=1.8")
        .from($card_text, 2, {x: "-20", autoAlpha:0, ease:Quart.easeOut}, "-=1.7")
        .from($card_link, 2, {x: "-20", autoAlpha:0, ease:Quart.easeOut}, "-=1.6");
        
        items.each(function(i, item){
          var number = $(item).find(".number");
          var marginTop = 0;
          if(i == 1) marginTop = ($(item).height()/2) + 200;
          else marginTop = 200;

          if (is_secondary_display)
            tl.from(item, 1 - (i*0.1), {y:50, autoAlpha: 0, clearProps:"all"}, "-=1")
            .from(number, 1.5, {lineHeight:"220px", clearProps:"all"}, "-=1");
          else {
            tl.from(item, 1 - (i*0.1), {marginTop:marginTop, opacity: 0, clearProps:"all"}, "-=1")
            .from(number, 1.5, {lineHeight:"220px", clearProps:"all"}, "-=1");
          }
        })
        
        tl.timeScale(2);
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

   