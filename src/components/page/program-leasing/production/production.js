$(document).ready(function () {
   const items = $('.production__cards a');

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

   function checkFormValidity() {
      const name = $('.production__module-window__form .name').val();
      const phone = $('.production__module-window__form .phone').val();
      const checkbox = $('.production__module-window__form .checkbox__input').is(':checked');
      const isFormValid = name && phone && checkbox;
      $('.production__module-window__form .js-popUp-submitBtn').prop('disabled', !isFormValid);
   }

   function resetForm() {
      $('.production__module-window .js-myForm').removeClass('submitted-error');
      $('.production__module-window__form .name').val('')
      $('.production__module-window__form .phone').val('')
      $('.production__module-window__form .checkbox__input').prop('checked', false)
      checkFormValidity(); // Проверяем валидность формы после сброса
   }

   $('.production__module-window__form .phone').on('input', function () {
      const formattedPhoneNumber = formatPhoneNumber(this.value);
      this.value = formattedPhoneNumber;
      checkFormValidity();
   });

   checkFormValidity();

   $('.production__module-window__form .name, .production__module-window__form .checkbox__input').on('input change', checkFormValidity);

   $('#js-production__module-window').click(function () {
      resetForm(); // Сбрасываем форму при каждом открытии
      $('.production__module-window').css('display', 'block');
      $('.app').addClass('blurred');
      $('body').css('overflow', 'hidden');
   });

   $('.production__module-window .js-popUp-submitBtn').click(function () {
      if (!$(this).prop('disabled')) $('.production__module-window-box').css('display', 'none');
      resetForm(); // 
   });
   if (items.length % 3 === 1) {
      $('.production__module-window-img').css("display", "none")
      $('.production__cards').css("flex-direction", "row-reverse")
      $('.production__form').css("width", "calc(66% - 10px)")

   }



   const itemsToShow = 4;
   let itemsHidden = items.length - itemsToShow;
   console.log(window.innerWidth)
   if (window.innerWidth < 1280) {
      if (items.length > itemsToShow) {
         // Показать первые 4 элемента, остальные скрыть
         items.slice(itemsToShow).hide();

         // Обработчик нажатия на кнопку
         $('.js-leady-loading').click(function () {
            // Показать следующие 4 элемента
            const hiddenItems = items.filter(':hidden').slice(0, itemsToShow);
            hiddenItems.show();

            // Обновить количество скрытых элементов
            itemsHidden -= hiddenItems.length;

            // Если больше нет скрытых элементов, скрыть кнопку
            if (itemsHidden <= 0) {
               $(this).hide();
            }
         });
      }
   }
});