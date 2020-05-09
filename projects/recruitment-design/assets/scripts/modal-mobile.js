
(function( $ ) {
  $.fn.modalMobile = function() {

       return this.each(function() {


        function openFilter(){
          $('body').addClass('modal-open');
          $component.addClass('open');
          $title.html(btnTitle);          
          isOpen = true;
        }

        function closeFilter() {
          $('body').removeClass('modal-open');
          $component.removeClass('open');
          $title.html(oldTitle);          
          isOpen = false;
        }

        function switchMode() {
          if (window.matchMedia("(min-width: 640px)").matches) {
            if(isMobile == true) {
              //$formFilter.removeClass('form-filter-modal');
              isMobile = false;
            }
          } else {
            if(isMobile == false) {
              //$formFilter.addClass('form-filter-modal');
              isMobile = true;
            }
          }
        }

        var component = this;
        var $component = $(this);
        var $btn = $($component.find('.btn-floating'));
        var $formFilter = $($component.find('.modal-mobile'));
        var $closeComponent = $($component.find('.close'));
        var $title = $($component.find('.modal-title'));

        var oldTitle = $title.text();
        var btnTitle = $btn.text();
        
        var isOpen = false;
        var isMobile = false;
        $btn.click(openFilter);
        $closeComponent.click(closeFilter);

        switchMode();
        window.addEventListener('resize', switchMode, false);

       });
   };

   jQuery('.form-display-1, .card-splitlist, .card-community').modalMobile();

  }( jQuery ));
