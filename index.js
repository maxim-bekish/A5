$(document).ready(function () {
   $('.js-submitBtn').click(function () {
      var form = $('.js-myForm');
      if (form[0].checkValidity()) {
         form.addClass('submitted');
      } else {
         form.removeClass('submitted').addClass('submitted-error');
      }
   });
   $('.js-submitBtn-popup-contacts').click(function () {
      var form = $('.js-myForm-popup-contacts');
      if (form[0].checkValidity()) {
         form.addClass('submitted');
      } else {
         form.removeClass('submitted').addClass('submitted-error');
      }
   });
   $('.js-submitBtn-popup-ask').click(function () {
      var form = $('.js-myForm-popup-ask');
      if (form[0].checkValidity()) {
         form.addClass('submitted');
      } else {
         form.removeClass('submitted').addClass('submitted-error');
      }
   });
});
