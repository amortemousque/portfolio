/**
 * @file
 * Global utilities.
 *
 */
(function ($) {
  
    'use strict';

    // Modify confirmation css if quiz contact form exists
    if ($('.webform-submission-employer_quiz-form'))  $('.alert-info').css({"background-color":"unset", "border":"0px solid black"});

    $('a#submit_contact').on('click', function() {
      // Handle submit form
      if ($('form[name="webform_quiz"]')) $('form[name="webform_quiz"]').submit();
    });

    // Add step-target elements switch number of questions in the quiz
    var count_steps = $('.form-step').length;
    for (var i=1; i <= count_steps; i++) $('.steps-target').append('<div class="step-target" id="step-target-'+ i +'"><span>0'+ i +'</span></div>');

    // Detect the active question in the quiz
    $('#step-target-1').children('span').css('color', 'white');
    $(window).scroll(function(){
      $('.form-step').each(function(){
        var target = $(this).attr('id').replace("edit-group", "");
        if(isScrolledIntoView($(this))) $('#step-target-'+target).children('span').css('color', 'white');
        else $('#step-target-'+target).children('span').css('color', '#555');
      });
    });
    
    function isScrolledIntoView(elem){
        var $elem = $(elem);
        var $window = $(window);    
        var docViewTop = $window.scrollTop();
        var docViewBottom = docViewTop + $window.height();
        var elementHeight = $elem.height() / 2;
        var elemTop = $elem.offset().top;
        var elemBottom = elemTop + $elem.height();

        return ((elemBottom <= (docViewBottom + elementHeight)) && ((elemTop + elementHeight) >= docViewTop));
    }

    $('.employer-quiz #edit-choice-q1 input.form-checkbox').on('click', function() {
      switch($(this).val()) {
        case 'digital':
          $('.employer-quiz input[name=recipient_email]').val('eyup.yuksek@lesnouveauxheritiers.com');
          $('.employer-quiz input[name=recipient_name]').val('Eyup Yuksek');
          break;
        case 'assistantship':
          $('.employer-quiz input[name=recipient_email]').val('laurie.sariano@lesnouveauxheritiers.com');
          $('.employer-quiz input[name=recipient_name]').val('Laurie Sariano');
          break;
        case 'real_estate':
          $('.employer-quiz input[name=recipient_email]').val('laurie.sariano@lesnouveauxheritiers.com');
          $('.employer-quiz input[name=recipient_name]').val('Laurie Sariano');
          break;
        case 'retail':
          $('.employer-quiz input[name=recipient_email]').val('adrien.vedovelli@lesnouveauxheritiers.com');
          $('.employer-quiz input[name=recipient_name]').val('Adrien Vedovelli');
          break;
        case 'marketing':
          $('.employer-quiz input[name=recipient_email]').val('clothilde.baquet@lesnouveauxheritiers.com');
          $('.employer-quiz input[name=recipient_name]').val('Clothilde Baquet');
          break;
        case 'hr':
          $('.employer-quiz input[name=recipient_email]').val('clothilde.baquet@lesnouveauxheritiers.com');
          $('.employer-quiz input[name=recipient_name]').val('Clothilde Baquet');
          break;
        case 'finance':
          $('.employer-quiz input[name=recipient_email]').val('clothilde.baquet@lesnouveauxheritiers.com');
          $('.employer-quiz input[name=recipient_name]').val('Clothilde Baquet');
          break;
        default:
          $('.employer-quiz input[name=recipient_email]').val('clothilde.baquet@lesnouveauxheritiers.com');
          $('.employer-quiz input[name=recipient_name]').val('Clothilde Baquet');
      }
    });

  })(jQuery);
  