/**
 * @file
 * Global utilities.
 *
 */
(function ($) {
  
    'use strict';
  
    $(window).on("load", function() {
      var first = true;
      $('#block-views-block-article-block-last-articles .bef-links div a, #views-exposed-form-personae-block-list .bef-links div a').each(function(){
        var node_type = this.href.split("?")[1];
        if(first === true) this.remove();
        else this.href = (node_type) ? '?'+node_type+'#view-type-node' : '';
        $(this).addClass('nav-link');
        if($(this).attr('class') != undefined && $(this).hasClass('bef-link-active')) $(this).addClass('active');
        first = false;
      });
      $('#edit-submit-article').remove();      
    });
  
  })(jQuery);
  