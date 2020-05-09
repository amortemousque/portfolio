(function ($) {

  'use strict';

    $.fn.whiteLayerImageAnimation = function(ctrl, params) { 
  
      var ctrl = ctrl; 

      var getTimeline = function(component) { 
        var $image_layer =  $(component).find('.image-animate');
        var $image =  $(component).find('img');
        
        //if (params['delay']) var tl = new TimelineMax({delay:params['delay']});
        //else 
        var tl = new TimelineMax();
        tl.set($image, {display: "none"})
        .to($image_layer, 1, {y: "100%", ease:Linear.easeNone})
        .to($image_layer, 1, {x: "100%", ease: Linear.easeNone})
        .set($image, {display: "unset"}, "-=0.2")
        .to($image_layer, 1, {x: "200%", ease: Linear.easeNone})                
        ;
        
        // Old version not working with :after and CSSRulePlugin
        /*var rule = CSSRulePlugin.getRule(".image-animate:after"); //.image-animate:after
        var rule2 = CSSRulePlugin.getRule(".image-animate::after"); //.image-animate:after
        var rule3 = CSSRulePlugin.getRule(".image-animate"); //.image-animate:after 
        var rule4 = CSSRulePlugin.getRule("html"); //.image-animate:after
        console.log(rule);
        console.log(rule2);
        console.log(rule3);
        console.log(rule4);*/
        //tl.to(rule, 3, {cssRule:{backgroundColor:"#FF00FF"}});

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
            triggerHook: 0.8,//params['triggerHook'],
            reverse:false
        })
        .setTween(timeline)
        .addTo(ctrl);
      }); 
  
    } 
   
}(jQuery)); 

   