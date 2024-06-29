
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

   let mobile = false;
   const itemsToShow = 6;
   let itemsHidden = items.length - itemsToShow;
   let visibleItems = items.slice(0, itemsToShow);  // Сохраняем первоначально видимые элементы

   function updateFormAndImage() {
      if (items.filter(':visible').length % 3 === 1) {
         $('.production__module-window-img').css("display", "none");
         $('.production__cards').css("flex-direction", "row-reverse")
         $('.production__form').css("width", "calc(66% - 10px)");
      } else {
         $('.production__module-window-img').css("display", "block");
         $('.production__form').css("width", "100%");
      }
      if (mobile) {
         $('.production__module-window-img').css("display", "none");
      }
   }
   function updateVisibility() {
      if (itemsHidden <= 0) {
         $('.js-leady-loading').hide();
      } else {
         $('.js-leady-loading').show();
      }
   }
   if (items.length <= itemsToShow) {
      items.show();
   } else {
      items.slice(itemsToShow).hide();
      $('.js-leady-loading').click(function () {
         // Показать следующие 6 элементов
         const hiddenItems = items.filter(':hidden').slice(0, itemsToShow);
         hiddenItems.show();
         visibleItems = items.filter(':visible'); // Обновляем список видимых элементов
         // Обновить количество скрытых элементов
         itemsHidden -= hiddenItems.length;

         // Если больше нет скрытых элементов, скрыть кнопку
         updateVisibility();

         // Обновить состояние формы и картинки
         updateFormAndImage();
      });
   }

   // Изначально обновить состояние формы и картинки
   updateFormAndImage();

   // Проверяем ширину окна при изменении размера
   $(window).resize(function () {
      if (window.innerWidth < 1280) {
         items.hide();
         updateFormAndImage();
         visibleItems.show();
         updateVisibility();
      } else {
         items.show();
         updateFormAndImage();
         $('.js-leady-loading').hide();
      }
      if (window.innerWidth <= 768) {
         mobile = true;
         updateFormAndImage();
      } else {
         mobile = false;
         updateFormAndImage();
      }
   }).resize(); // Инициализируем проверку при загрузке страницы
});