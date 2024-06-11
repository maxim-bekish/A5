<!--<link rel="stylesheet" href="src/components/page/about-company/about-company/index.css">-->
<!--<script src="src/components/page/about-company/about-company/index.js"></script>-->

<section class="about-company container mt-160px">
   <div class="about-company__box about-company__box--up">
      <div class="about-company__header">
         <p class="about-company--text">О компании</p>
      </div>
      <div class="about-company__content">
         <h3 class="title-page-h3">
            Компания А5 с 2007 года поддерживает малый, средний и крупный бизнес, работает с любой отраслью и
            бизнес-нишей
         </h3>
      </div>
   </div>
   <div class="about-company__box about-company__box--medium">
      <div class="about-company__stats">
         <p class="about-company--big-test">> 5 000</p>
         <p class="about-company--text">лизинговых сделок </p>
      </div>
      <div class="about-company__description">
         <p>
            А5 — компания с большим опытом и развитыми отраслевыми компетенциями в сфере финансового, возвратного,
            оперативного лизинга.
         </p>
         <p>
            С 2020 года состоим в Объединённой Лизинговой Ассоциации.
         </p>
         <p>
            До 2021 года развивались под брендом «Артфин-Тюмень», после ребрендинга поменялось не только имя, но и
            стратегия развития, увеличился оборот техники. В том же году произошло открытие основного подразделения в
            Нижнем Новгороде и филиала в Тюмени.
         </p>
      </div>
      <div class="about-company__achievements">
         <p>
            Входим в ТОП-10 лизинговых компаний Тюменской области.
         </p>
         <p>
            Участвуем в Государственной программе финансовой поддержки малого и среднего бизнеса МСП Банка.
         </p>
         <p>
            В 2023 году были приглашены в Ассоциацию кредитных организаций Тюменской области — показатель качественной
            работы и постоянного роста.
         </p>
      </div>
   </div>
   <div class="about-company__box about-company__box--down ">
      <div class="about-company__years">
         <p class="about-company--big-test">17</p>
         <p class="about-company--text">лет на рынке</p>
      </div>
      <div class="about-company__image">
         <img src="<?php echo IMG_PATH; ?>page-about/img-1.png" alt="Изображение">
      </div>
   </div>
</section>

<style>
   .about-company {
      display: flex;
      flex-direction: column;
      gap: 30px;
   }

   .about-company__box--up {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      grid-template-rows: 1fr;
      grid-column-gap: 0px;
      grid-row-gap: 0px;
   }

   .about-company__box--up .about-company__header {
      grid-area: 1 / 1 / 2 / 2;
   }

   .about-company--text {
      font-size: 20px;
      line-height: 20px;
      text-align: left;
   }

   @keyframes fadeInUp {
      0% {
         opacity: 0;
         transform: translateY(250px);
      }

      100% {
         opacity: 1;
         transform: translateY(0);
      }
   }

   .about-company--big-test {
      font-size: 200px;
      font-weight: 500;
      line-height: 200px;
      text-align: left;
      color: rgba(0, 69, 178, 1);
      opacity: 0;
      /* Начальное состояние - невидимый элемент */
      transform: translateY(250px);
      /* Начальное состояние - сдвиг вниз */
      transition: opacity 0s, transform 0s;
      /* Отключение перехода по умолчанию */
   }

   .about-company--big-test--visible {
      opacity: 1;
      transform: translateY(0);
      transition: opacity 2s ease-out, transform 2s ease-out;
      /* Включение плавного перехода */
   }

   .about-company__box--up .about-company__content {
      grid-area: 1 / 2 / 2 / 5;
   }

   .about-company__box--medium {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      grid-template-rows: 1fr;
      grid-column-gap: 25px;
      grid-row-gap: 0px;
   }

   .about-company__box--medium .about-company__stats {
      grid-area: 1 / 1 / 2 / 3;
      display: flex;
      flex-direction: column;
      justify-content: center;
   }

   .about-company__box--medium .about-company__description {
      grid-area: 1 / 3 / 2 / 4;
   }

   .about-company__box--medium .about-company__achievements {
      grid-area: 1 / 4 / 2 / 5;
   }

   .about-company__box--down {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      grid-template-rows: 1fr;
      grid-column-gap: 20px;
      grid-row-gap: 0px;
      justify-items: end;
      align-items: end;

   }

   .about-company__box--down .about-company__years {
      grid-area: 1 / 2 / 2 / 3;
   }

   .about-company__box--down .about-company__image {
      grid-area: 1 / 3 / 2 / 5;
      width: 100%;
      height: 100%;
   }


   .about-company__box--down .about-company__image img {
      width: 100%;
      height: 100%;
   }
</style>
<script>
   $(document).ready(function () {
      const statsElements = $('.about-company--big-test');

      const observerOptions = {
         root: null,
         rootMargin: '0px',
         threshold: 0.1
      };

      const observer = new IntersectionObserver(function (entries, observer) {
         entries.forEach(function (entry) {
            if (entry.isIntersecting) {
               $(entry.target).addClass('about-company--big-test--visible');
               observer.unobserve(entry.target); // Остановка наблюдения после запуска анимации
            }
         });
      }, observerOptions);

      statsElements.each(function () {
         observer.observe(this);
      });
   });
</script>