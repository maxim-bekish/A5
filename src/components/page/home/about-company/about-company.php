<link rel="stylesheet" href="/src/components/page/home/about-company/index.css">
<script src="/src/components/page/home/about-company/index.js"></script>
<?php

$list = [
   (object) ['title' => 'Подробнее о компании', 'link' => '#', 'id' => 1],
   (object) ['title' => 'Клиенты и партнеры', 'link' => '#', 'id' => 2],
   (object) ['title' => 'Документы', 'link' => '#', 'id' => 3],

];

?>
<section class="about-company mt-160px ">
   <div class="about-company-box-title">
      <p>О компании</p>
      <p>
         Компания А5 с 2007 года поддерживает малый, средний и крупный бизнес, работает с любой отраслью и бизнес-нишей.
      </p>
   </div>
   <div class="about-company-box-content">
      <div class="box-content-list">
         <svg class="pointer" width="1072" height="930" viewBox="0 0 1072 930" fill="none">
            <use href="<?php echo SVG_PATH; ?>icons.svg#icon-A5"></use>
         </svg>
         <ul class="list">
            <?php foreach ($list as $index => $item): ?>
               <li class="list-item jsListItemAbout <?php echo $index === 0 ? 'list-item-active' : ''; ?>">
                  <a href="<?php echo htmlspecialchars($item->link); ?>">
                     <?php echo htmlspecialchars($item->title); ?>
                  </a>
               </li>
            <?php endforeach; ?>
         </ul>
      </div>
      <div class="box-content-info">
         <div class="text">
            <p>
               А5 — компания с большим опытом.
               <br><br>
               До ... года мы развивались под брендом «Артфин-Тюмень», после ребрендинга поменялось не только имя, но и
               стратегия развития, увеличился оборот техники.
               <br><br>
               С 2020 года состоим в Объединённой Лизинговой Ассоциации.
            </p>
            <p>
               Входим в ТОП-10 лизинговых компаний Тюменской области.
               <br><br>
               Участвуем в Государственной программе финансовой поддержки малого и среднего бизнеса МСП Банка.
            </p>
         </div>
         <div>
            <img src="<?php echo IMG_PATH; ?>about.png" alt="photo">
         </div>
      </div>
   </div>
</section>
<script src="/src/components/page/home/about-company/index.js"></script>