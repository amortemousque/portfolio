/**
 * @file
 * Global utilities.
 *
 */
(function ($) {
  
    'use strict';
  
      /*$('#submit_contact').on('click', function() {
        $('.card-form').hide();
        $('#schedule').show('slow');
      });*/

      $('#schedule_table td').on('mouseenter', function() {
        if (!$(this).hasClass('checked')) {
          $(this).addClass('bg-primary');
        }
      });
      $('#schedule_table td').on('mouseleave', function() {
        if (!$(this).hasClass('checked')) {
          $(this).removeClass('bg-primary');
        }
      });
      $('#schedule_table td').on('click', function() {
        if (!$(this).hasClass('checked')) {
          $(this).addClass('bg-primary');
          $(this).addClass('checked');

          // Provide values to selectboxes
          console.log($(this).attr("class"));
        }
        else {
          $(this).removeClass('bg-primary');
          $(this).removeClass('checked');
        }
      });
  
  })(jQuery);
  