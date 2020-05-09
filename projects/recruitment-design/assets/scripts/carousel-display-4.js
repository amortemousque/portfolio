
(function( $ ) {
$.fn.carouselDisplay4 = function() {

     return this.each(function() {

      function separateSlide(item){
        var $item = $(item);
        var $slide = $($item.find('.carousel-slide'));
        var $slideBody = $($slide.find('.carousel-slide-body'));
        var $slideParts = $($slide.find('.carousel-slide-part'));
        if($slideParts.length > 1) {
          $slideParts.each(function(index) {
            $newSlide = $item.clone();
            $newSlide.removeClass('active');
            $slidePart = $(this);
            $newSlide.find('.carousel-slide-body').html('').append($slidePart);
            $carousel.find('.carousel-body').append($newSlide);
          });
          $item.remove();          
        }
      }

      function makeIndicator(){
        var number = $slides.length;
        var firstIndicator = $indicators.first();
        $containerIndicator.html('');
        if(number > 1) {
          for(var i = 0; i < number; i++) {
            $newIndicator = firstIndicator.clone();
            $newIndicator.removeClass('active');
            $newIndicator.attr('data-slide-to', i);
            $containerIndicator.append($newIndicator);
          }
          $containerIndicator.find('li').first().addClass('active');
        } else {
          $containerControls.remove();
          $containerIndicator.remove();
        }

      }

      function switchMode() {
        if (window.matchMedia("(min-width: 640px)").matches) {
          if(isMobile == true) {
            //LAPTOP
            $carousel.find('.carousel-body').html(htmlBody);
            $slides = $carousel.find('.carousel-item');
            makeIndicator();
            isMobile = false;
            $carousel.carousel();
          }
        } else {
          if(isMobile == false) {
            //MOBILE
            $slides.each(function() {
              separateSlide(this, carousel);
            });
            $slides = $carousel.find('.carousel-item');
            $slides.first().addClass('active');
            makeIndicator();

            isMobile = true;
            $carousel.carousel();
          }
        }
      }


      var carousel = this;
      $carousel = $(this);
      var htmlBody = $carousel.find('.carousel-body').html();
      $slides = $carousel.find('.carousel-item');
      $containerIndicator = $carousel.find('.carousel-indicators-line');
      $containerControls = $carousel.find('.carousel-controls');
      $indicators = $containerIndicator.find('li');

      var isMobile = false;

      switchMode();
      window.addEventListener('resize', switchMode, false);

     });
 };

 jQuery('.carousel-display-4').carouselDisplay4();

}( jQuery ));
