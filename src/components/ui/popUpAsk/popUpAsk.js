import { formatPhoneNumber } from '/src/assets/helpers/format.js'


$(document).ready(function () {
   //$('.js-submitBtn-popup-ask').click(function () {
   //   var form = $('.js-myForm-popup-ask');
   //   if (form[0].checkValidity()) {
   //      form.addClass('submitted');
   //   } else {
   //      form.removeClass('submitted').addClass('submitted-error');
   //   }
   //});
   $('.open-button-ask').on('click', function () {
      $('.sidebar-ask').addClass('open');
      $('.app').addClass('blurred');
      $('body').css('overflow', 'hidden');
   });

   $('.popUp__sidebar-closed').on('click', function () {
      $('.sidebar-ask').removeClass('open');
      $('.app').removeClass('blurred');
      $('body').css('overflow', 'auto');
   });
   $('.bottom-select-ask').click(function () {
      // Находим родителя и всех потомков с классом .bottom-select-ask
      $(this).parent().find('.bottom-select-ask').removeClass('bottom-select-ask-active');
      // Добавляем класс к текущему элементу
      $(this).addClass('bottom-select-ask-active');
  });


   $('.js-myForm-popup-ask .phone').on('input', function () {
      const formattedPhoneNumber = formatPhoneNumber(this.value);
      this.value = formattedPhoneNumber;
   });

});