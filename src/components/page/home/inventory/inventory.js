$(document).ready(function () {
   const items = $('.inventory__content a');
   const itemsToShow = 6;
   let itemsHidden = items.length - itemsToShow;
   let visibleItems = items.slice(0, itemsToShow); // Сохраняем первоначально видимые элементы

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
         const hiddenItems = items.filter(':hidden').slice(0, itemsToShow);
         hiddenItems.show();
         visibleItems = items.filter(':visible'); // Обновляем список видимых элементов
         itemsHidden -= hiddenItems.length;
         updateVisibility(); // Проверяем видимость кнопки после показа скрытых элементов
      });
   }

   $(window).resize(function () {
      if (window.innerWidth < 1280) {
         items.hide();
         visibleItems.show(); // Показываем сохранённые видимые элементы
         updateVisibility(); // Проверяем видимость кнопки при изменении размера окна
      } else {
         items.show();
         $('.js-leady-loading').hide();
      }
   }).resize();
});