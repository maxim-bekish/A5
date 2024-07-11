import { formatPhoneNumber } from '/src/assets/helpers/format.js'


$(document).ready(function () {
   const items = $('.production__cards a');

   $('.production__module-window__form .phone').on('input', function () {
      const formattedPhoneNumber = formatPhoneNumber(this.value);
      this.value = formattedPhoneNumber;
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