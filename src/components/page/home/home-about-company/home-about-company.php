<link rel="stylesheet" href="/src/components/page/home/home-about-company/home-about-company.css">
<script src="/src/components/page/home/home-about-company/home-about-company.js"></script>
<?php

$list = [
   (object) ['title' => 'Подробнее о компании', 'link' => '/about-company', 'id' => 1],
   (object) ['title' => 'Клиенты и партнеры', 'link' => '/clients', 'id' => 2],
   (object) ['title' => 'Документы', 'link' => '/clients?section=client-documents', 'id' => 3],

];

?>
<section class="about-home mt-160px">
   <div class="about-home__box-title">
      <p class="about-home__box-title-heading">
         О компании
      </p>
      <p class="about-home__box-title-description">
         Компания А5 с 2007 года поддерживает малый, средний и крупный бизнес, работает с любой отраслью и бизнес-нишей.
      </p>
   </div>
   <div class="about-home__box-content">
      <div class="about-home__content-info">
         <div class="about-home__text">
            <div class="about-home__text-column w-50">
               <p class="about-home__paragraph">
                  А5 — компания с большим опытом и развитыми отраслевыми компетенциями в сфере финансового, возвратного,
                  оперативного лизинга.
               </p>
               <p class="about-home__paragraph">
                  С 2020 года состоим в Объединённой Лизинговой Ассоциации.
               </p>
               <p class="about-home__paragraph">
                  До 2021 года развивались под брендом «Артфин-Тюмень», после ребрендинга поменялось не только имя, но и
                  стратегия развития, увеличился оборот техники. В том же году произошло открытие основного
                  подразделения в Нижнем Новгороде и филиала в Тюмени.
               </p>
            </div>
            <div class="about-home__text-column w-50">
               <p class="about-home__paragraph">
                  Входим в ТОП-10 лизинговых компаний Тюменской области.
               </p>
               <p class="about-home__paragraph">
                  Участвуем в Государственной программе финансовой поддержки малого и среднего бизнеса МСП Банка.
               </p>
               <p class="about-home__paragraph">
                  В 2023 году были приглашены в Ассоциацию кредитных организаций Тюменской области — показатель
                  качественной работы и постоянного роста.
               </p>
            </div>
         </div>
      </div>
      <div class="about-home__content-list">
         <svg class="about-home__pointer" width="1072" height="930" viewBox="0 0 1072 930" fill="none">
            <use href="<?php echo SVG_PATH; ?>icons.svg#icon-A5"></use>
         </svg>
         <ul class="about-home__list w-50">
            <?php foreach ($list as $index => $item) : ?>
               <li class="about-home__list-item jsListItemAbout">
                  <a href="<?php echo htmlspecialchars($item->link); ?>">
                     <?php echo htmlspecialchars($item->title); ?>
                  </a>
               </li>
            <?php endforeach; ?>
         </ul>
         <div class="w-50">
            <img src="<?php echo IMG_PATH; ?>about.png" alt="photo" class="about-home__image">
         </div>
      </div>
   </div>
</section>