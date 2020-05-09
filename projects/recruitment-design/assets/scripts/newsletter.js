/**
 * @file
 * Global utilities.
 *
 */
(function ($) {
  
    'use strict';

    var form = $('.webform-submission-newsletter-form');
    form.on('submit', confirm_message);
    $('#edit-actions button', form).on('click', confirm_message);  
    $('.mobile-submit-button', form).on('click', confirm_message);  
      

    function confirm_message() {
      $('#newsletter_form .form-group-row, #newsletter_form .mobile-submit-button, #newsletter_form p.modal-subtitle, #newsletter_form .card-subtitle,#newsletter_form .form-info, #newsletter_form #edit-actions-submit, .newsletter_form_group, .throbber').hide();
      $('#edit-confirmation-message').show();
    }

    
  
  })(jQuery);
