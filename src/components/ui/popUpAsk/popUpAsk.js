
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

   function formatPhoneNumber(value) {
      if (!value) return '+7 '; // Если значение пустое, возвращаем "+7 "
      const phoneNumber = value.replace(/[^\d]/g, ''); // Удаляем все нецифровые символы, кроме цифр
      const phoneNumberWithoutSeven = phoneNumber.startsWith('7') ? phoneNumber.slice(1) : phoneNumber; // Убираем начальную 7, если она есть
      const phoneNumberLength = phoneNumberWithoutSeven.length; // Определяем длину оставшегося телефонного номера
      // Форматируем номер в зависимости от его длины
      if (phoneNumberLength <= 0) return '+7 (';
      if (phoneNumberLength <= 3) return `+7 (${phoneNumberWithoutSeven.slice(0, 3)}`;
      if (phoneNumberLength <= 6) return `+7 (${phoneNumberWithoutSeven.slice(0, 3)}) ${phoneNumberWithoutSeven.slice(3, 6)}`;
      if (phoneNumberLength <= 8) return `+7 (${phoneNumberWithoutSeven.slice(0, 3)}) ${phoneNumberWithoutSeven.slice(3, 6)}-${phoneNumberWithoutSeven.slice(6, 8)}`;
      return `+7 (${phoneNumberWithoutSeven.slice(0, 3)}) ${phoneNumberWithoutSeven.slice(3, 6)}-${phoneNumberWithoutSeven.slice(6, 8)}-${phoneNumberWithoutSeven.slice(8, 10)}`;
   }

   $('.js-myForm-popup-ask .phone').on('input', function () {
      const formattedPhoneNumber = formatPhoneNumber(this.value);
      this.value = formattedPhoneNumber;
   });

});