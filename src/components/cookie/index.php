<section class="popup-cookie">
   <p>
      Пользуясь сайтом, вы даёте согласие на использование файлов cookie, помогающих нам сделать его удобнее для вас. Подробная информация приведена в соответсвующих правилах
      <a href="/personal-data" target="_blank" rel="noopener noreferrer">
         соответсвующих правилах
      </a>
   </p>
   <button class="cookie-ok button button--outline" type="button">Ok</button>
</section>
<style>
   .popup-cookie {
      width: 100%;
      left: 0;
      height: 130px;
      position: fixed;
      display: flex;
      bottom: -130px;
      padding: 40px 50px;
      background-color: #F2F2F2;
      justify-content: space-between;
      align-items: center;
      transition: bottom 0.5s ease-in-out;
   }

   .popup-cookie.show {
      bottom: 0;
   }

   .popup-cookie p {
      max-width: 900px;
   }

   .popup-cookie p a {
      color: #0045B2;
   }

   .popup-cookie button {
      max-width: 163px;
      max-height: 60px;
   }
</style>
<script>
   $(document).ready(function() {
      // Проверяем, что находимся на главной странице и что пользователь не нажимал "Ok" ранее
      if (window.location.pathname === '/' && !localStorage.getItem('cookieAccepted')) {
         // Показываем окошко при загрузке страницы
         setTimeout(function() {
            $('.popup-cookie').addClass('show');
         }, 1000);

         // Скрываем окошко через 15 секунд
         const hiddenCookie = setTimeout(function() {
            $('.popup-cookie').removeClass('show');
         }, 16000);

         $('.cookie-ok').click(function() {
            $('.popup-cookie').removeClass('show');
            clearTimeout(hiddenCookie);
            // Сохраняем в локальное хранилище, что пользователь нажал "Ok"
            localStorage.setItem('cookieAccepted', 'true');
         });
      }
   });
</script>