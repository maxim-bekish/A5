<link rel="stylesheet" href="src/components/page/clients/partners-program/index.css">


<section class="partners-program">
   <div class="partners-program__img">
      <img src="<?php echo IMG_PATH; ?>partners-program.png" alt="">
   </div>
   <h3 class="partners-program__title">Партнерская программа</h3>
   <p>
      Мы считаем, что сильная команда — залог успеха и беспрерывного развития , поэтому приглашаем представителей <br>
      бизнеса к сотрудничеству.
   </p>
   <ul class="partners-program__list">
      <li>
         <p>
            Преимущества от сотрудничества с нами:
         </p>
      </li>
      <li>
         <p>
            Прозрачная система . Можно отслеживать статистику по заявкам;
         </p>
      </li>
      <li>
         <p>
            Большие выплаты. Высокий процент с каждого проданного авто, текущий средний чек — ... рублей;
         </p>
      </li>
      <li>
         <p>
            Скорость. Выплаты поступают к вам на счёт в течение ... дней после передачи предмета в лизинг клиенту;
         </p>
      </li>
      <li>
         <p>
            Постоянное кураторство. Можете задавать любой вопрос сотруднику, закрпелённому за вами.
         </p>
      </li>
   </ul>
   <ul>
      <li>
         <p>
            Вы можете стать нашим партнёром, если:
         </p>
      </li>
      <li>
         <p>
            1. Вы юридическое лицо, ИП или официальный представитель компании;
         </p>
      </li>
      <li>
         <p>
            2. Вы можете передать для лизинга легковой или грузовой автотранспорт новый <br> и с пробегом,
            спецтехнику,
            оборудование, недвижимость;
         </p>
      </li>
      <li>
         <p>
            3. Хотите расширить бизнес;
         </p>
      </li>
      <li>
         <p>
            4. Найти надёжного партнёра.
         </p>
      </li>
   </ul>
   <form class="js-myForm partners-program__form">
      <h4 class="partners-program__title--form">Мы рады сотрудничеству. Оставьте заявку на партнерство</h4>
      <div class="form-items-50 form-white ">
         <div class="form-group">
            <input name="name" id="name" type="text" placeholder="" required>
            <label for="name">Ваше имя</label>
         </div>
         <div class="form-group">
            <input name="email" id="email" type="email" placeholder="" required>
            <label for="email">Email</label>
         </div>
         <div class="form-group">
            <input name="phone" id="phone" type="tel" placeholder=""
               pattern="\+7 \([0-9]{3}\) [0-9]{3}-[0-9]{2}-[0-9]{2}" required>
            <label for="phone">Телефон</label>
         </div>
         <div class="form-group">
            <input name="company" id="company" type="text" placeholder="">
            <label for="company">Компания</label>
         </div>
      </div>


      <div class="checkbox">
         <input class="custom-checkbox " type="checkbox" id="option-one">
         <label for="option-one">
            Согласен с политикой конфиденциальности
         </label>
      </div>


      <button class="partners-program__button button button--blue js-submitBtn" type="button">
         Оставить заявку
      </button>
   </form>
</section>

<style>
   .partners-program .partners-program__img {
      height: 571px;
   }

   .partners-program__list {
      margin: 30px 0 30px 0;
   }

   .partners-program .partners-program__img img {
      height: 100%;
      object-fit: cover;
      object-position: top;
   }

   .partners-program__title {
      margin: 30px 0 40px 0;
      font-size: 70px;
      line-height: 84px;
      color: rgba(0, 69, 178, 1);
   }

   .partners-program__title--form {
      font-size: 40px;
      margin-top: 95px;
      color: rgba(0, 69, 178, 1);
      line-height: 48px;

   }

   .partners-program__form {
      max-width: 860px;
   }

   .partners-program__button {
      margin-top: 30px;
      max-width: calc(50% - 20px);
   }
</style>