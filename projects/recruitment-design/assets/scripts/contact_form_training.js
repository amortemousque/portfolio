/**
 * @file
 * Global utilities.
 *
 */
(function ($) {
  
    'use strict';

    $('#btn_training_form').on('click', function () {
      // certifications & trainings hidden fields feeding
      var certifications = $('.form-contact-form-training input[name=certifications]');
      if ($('#check_training').is(':checked')) certifications.val('Oui');
      else certifications.val('Non');

      //Get the trainings here
      var trainings = $('.form-contact-form-training input[name=trainings]');
      var str = "";
      $('.selection-training .list-group-item .item-title span').each(function () { str += $(this).text() + "\n";});
      trainings.val(str);
    });

    // Remove trainings after deselect bookmark
    $('.flag-bookmark a').on('click', function () { $(this).parentsUntil('ul').remove(); });
    
  })(jQuery);
