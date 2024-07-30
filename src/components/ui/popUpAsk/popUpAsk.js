import { formatPhoneNumber } from '/src/assets/helpers/format.js'


$(document).ready(function () {
   $(document).on('click', function (e) {
      if (!$(e.target).closest('.sidebar-ask').length && !$(e.target).closest('.open-button-ask').length) {
         $('.sidebar-ask').removeClass('open');
      }
   });

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


   function checkFormValidity() {
      const name = $('#name-ask').val();
      const phone = $('#tel-ask').val();
      const checkbox = $('#option-ask').is(':checked');
      const isFormValid = name && phone && checkbox;
      $('.js-submitBtn-popup-ask').prop('disabled', !isFormValid);
      return isFormValid
   }

   $('#tel-ask').on('input', function () {
      const formattedPhoneNumber = formatPhoneNumber(this.value);
      this.value = formattedPhoneNumber;
      checkFormValidity()
   });
   $('#name-ask').on('input', function () {
      checkFormValidity()
   });
   $('#option-ask').on('change', function () {
      checkFormValidity()
   });
});