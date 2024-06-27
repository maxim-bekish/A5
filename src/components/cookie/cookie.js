$(document).ready(function () {
   // Проверяем, что находимся на главной странице и что пользователь не нажимал "Ok" ранее
   if (window.location.pathname === '/' && !localStorage.getItem('cookieAccepted')) {
      // Показываем окошко при загрузке страницы
      setTimeout(function () {
         $('.popup-cookie').addClass('show');
      }, 2000);

      // Скрываем окошко через 15 секунд
      const hiddenCookie = setTimeout(function () {
         $('.popup-cookie').removeClass('show');
      }, 1700000);

      $('.cookie-ok').click(function () {
         $('.popup-cookie').removeClass('show');
         clearTimeout(hiddenCookie);
         // Сохраняем в локальное хранилище, что пользователь нажал "Ok"
         localStorage.setItem('cookieAccepted', 'true');
      });
   }
});