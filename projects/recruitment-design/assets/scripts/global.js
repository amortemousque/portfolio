/**
 * @file
 * Global utilities.
 *
 */

(function ($) {

  'use strict';

  var isIE11 = !!navigator.userAgent.match(/Trident.*rv\:11\./);

  if (!isIE11) {
    // Init controller
    var controller = new ScrollMagic.Controller();

    // Animations / Parallax params
    var params = {
      'parallax_amplitude' : '15',
      'triggerHook' : 0.5,
    };
  }

  $(window).on("load", function() {

    //$.fn.carousel.Constructor.TRANSITION_DURATION = 2000;
    $('#statusMessages').modal('show');
    if (!isIE11) {  
      // Animations callbacks
      $(".cover").coverAnimation(controller, params);
      $(".cover.cover-display-2").cover2Animation(controller, params);
      $(".card.card-quote").cardQuoteAnimation(controller, params);
      $(".card.card-triptych").cardTriptychAnimation(controller, params);
      $(".card-figure, .carousel-slide-figure").whiteLayerImageAnimation(controller, params);           // , .item-figure Class must be placed on the wrapper of the image concerned
      $(".card.card-display-1:not(.card-small)").cardAnimation(controller, params);
      $(".carousel.carousel-display-1").carouselAnimation(controller, params);
      $(".card.card-display-2").cardTopicAnimation(controller, params);
      $(".view-list-elements-anim").viewListElementsAnimation(controller, params);
      $(".navbar-main").headerAnimation(controller, params);
      $(".heading.heading-display-1").headingAnimation(controller, params);
      $(".heading.heading-display-1 .heading-body").headingBodyAnimation(controller, params);
      $(".card.card-steps").cardStepsAnimation(controller, params);
      $(".card-form").cardFormAnimation(controller, params);
      $(".card-basic").cardBasicAnimation(controller, params);
      $(".card-basic .list-group-2").cardBasicListAnimation(controller, params);
      $(".card-community").cardCommunityAnimation(controller, params);

      // Rebound of animations on dynamically created elements (i.e view infinite scroll) + first creation of this element
      // Example : jobs
      var parent = $('.list-elements-animate');
      var params_list = params;
      if (parent.length) parent.onCreate('ul.list-group', function(elements) { 
        if ($(".list-elements-animate ul.list-group").length > 1) params_list["slower"] = true;
        parent.listElementsAnimation(controller, params_list); 
      },true);
      // Articles
      var parent = $('.list-elements-animate2');
      var params_list = params;
      if (parent.length) parent.onCreate('ul.list-group', function(elements) { 
        if ($(".list-elements-animate2 ul.list-group").length > 1) params_list["slower"] = true;
        $(".list-group:last-child .item-figure").whiteLayerImageAnimation(controller, params_list);
        $(".list-group:last-child article").viewListElementsArticleAnimation(controller, params_list);
      },true);
      // Personas
      var parent = $('.form-result.list-elements-animate3');
      var params_list = params;
      if (parent.length) parent.onCreate('ul.list-group', function(elements) { 
        if ($(".form-result.list-elements-animate3 ul.list-group").length > 1) params_list["slower"] = true;
        parent.cardCommunityAnimation(controller, params_list);
      },true);
      
      
      // Parallax effect for all but mobile
      if (! /Mobi/i.test(navigator.userAgent)) {
        $(".card.card-display-3, .card.card-display-1").cardFigureParallax(controller, params);
        $(".carousel.carousel-display-1").carouselParallax(controller, params);
        $(".card.card-display-2").cardTopicParallax(controller, params);
        $(".card.card-quote .blockquote-display-1").cardQuoteParallax(controller, params);
        $(".view-list-elements-anim").viewListElementsParallax(controller, params);
        $(".heading.heading-display-1, .heading.heading-display-3").headingParallax(controller, params);
        $(".cover.cover-display-2").coverParallax(controller, params);
        $(".cover.cover-display-1").coverParallax(controller, params);
      }
    }

    /** HEADER FIXE NAV WITH TOGGLER **/
    $("#header .navbar-toggler").on('click', function(e){
      // Invert class detection cause of playing script before bootstrap behavior
      if ($(this).hasClass('collapsed')) {
        $("#header").removeClass('collapsed');
        $(".megamenu-wrapper").css("display", "block");
        $(".megamenu").animate({ marginLeft: '0' }, 100);    
        $(".megamenu-social li").animate({ padding: '0' }, 700); 
        $(".megamenu-nav .nav-item a").animate({ marginLeft: '-7rem' }, 0); 
        $(".megamenu-nav .nav-item:nth-child(1) a").animate({ marginLeft: '0' }, 1000);
        $(".megamenu-nav .nav-item:nth-child(2) a").animate({ marginLeft: '0' }, 1200);
        $(".megamenu-nav .nav-item:nth-child(3) a").animate({ marginLeft: '0' }, 1400);
        $(".megamenu-nav .nav-item:nth-child(4) a").animate({ marginLeft: '0' }, 1600);
        $(".megamenu-nav .nav-item:nth-child(5) a").animate({ marginLeft: '0' }, 1800);
      } else {
        $(".megamenu").animate({ marginLeft: '-150%' }, 100);
        $('html, body').animate({ scrollTop: 0 }, 0);
        $(".megamenu-social li").animate({ padding: '1rem 0' }, 1500);
        $(".megamenu-nav .nav-item a").animate({ marginLeft: '-7rem' }, 1000);    
        setTimeout(function() { 
          $("#header").addClass('collapsed'); 
          $(".megamenu-wrapper").css("display", "none");
        }, 500);
      }
    });

    $('.custom-select').select2({
      theme: "lnh",
      width: '100%',
      allowClear: true
    });

    $('#btn-switcher').click(function() {
      var $modal = $("#btn-switcher").parents(".modal-switcher");
      console.log($modal);
      var $body = $("body");
      var $backdrop = $("<div class='modal-backdrop fade show'></div>");
      if(!$modal.hasClass('show')) {
        $body.addClass('modal-open');
        $modal.addClass('show');
        $body.append($backdrop);
      } else {
        $body.removeClass('modal-open');
        $modal.removeClass('show');
        $(".modal-backdrop").remove();
      }
    });

    $('#btn-switcher-obs').click(function() {
      var $modal = $("#btn-switcher-obs").parents(".modal-switcher");
      console.log($modal);
      var $body = $("body");
      var $backdrop = $("<div class='modal-backdrop fade show'></div>");
      if(!$modal.hasClass('show')) {
        $body.addClass('modal-open');
        $modal.addClass('show');
        $body.append($backdrop);
      } else {
        $body.removeClass('modal-open');
        $modal.removeClass('show');
        $(".modal-backdrop").remove();
      }
    });

    // Triptych buttons animation on click (clap effect)
    // if (!isIE11) {
    //   var $card_triptych = $(".card-triptych");
    //   var $first_span = $(".card-triptych .nav-item-title span");  
    //   $(".card-triptych .nav-item-title").each(function(index) {
    //     var content = $(this).html();
    //     $(this).html('<span>'+content+'</span><span>'+content+'</span>');
    //   });
    //   $(".card-triptych .nav-link").on( 'mouseenter', function( e ) {
    //     var span = $(this).find('.nav-item-title span:nth-child(2)');
    //     setTimeout(function(){
    //       span.css('height','0%');
    //     },250); 
    //   });
    //   $(".card-triptych .nav-link").on( 'mouseleave', function( e ) {
    //     var span = $(this).find('.nav-item-title span:nth-child(2)');
    //     span.css('height','100%');
    //   });
    // }

    // $( '.custom-file-input').on( 'change', function( e )
		// {
    //   var fileName = '';
		// 	if( this.files && this.files.length > 1 )
		// 		fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
		// 	else if( e.target.value )
		// 		fileName = e.target.value.split( '\\' ).pop();

		// 	if( fileName ) $( 'span.custom-file-control').html( fileName );
		// });
    
    // Change the target for search training block on modal / form
    // to prevent acting on other blocks of this type
    // $(".modal-display-6.modal-switcher .card-display-6 form .btn-more-options").attr('data-target','#area-togglable2');
    // $(".modal-display-6.modal-switcher .card-display-6 form #area-togglable").prop('id', 'area-togglable2');

    // $(".modal-display-6.modal-switcher .card-display-6 form #area-togglable2 fieldset input").each(function() {
    //   $(this).attr('id', $(this).attr('id') + '-modal');
    //   $(this).attr('drupal-selector', $(this).attr('id'));
    // });
    // $(".modal-display-6.modal-switcher .card-display-6 form #area-togglable2 fieldset label").each(function() {
    //   $(this).attr('for', $(this).attr('for') + '-modal');
    // });

    // $(".splash-screen").css("opacity", "0");
    // $(".splash-screen").css("z-index", "0");
  });


})(jQuery);