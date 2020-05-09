/**
 * @file
 * Global utilities.
 *
 */
(function ($) {
  
    'use strict';

    var token_value = $('.email_token input').val();
    if (token_value == '[webform_submission:node:field_email]') $('input[name=token_email_text]').val('');
    else $('input[name=token_email_text]').val(token_value);

  })(jQuery);
  