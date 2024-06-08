<?php

$listTitle = [
   (object) ['title' => 'Легковой автотранспорт', 'link' => '#', 'id' => 1],
   (object) ['title' => 'Грузовой автотранспорт', 'link' => '#', 'id' => 2],
   (object) ['title' => 'Спецтехника', 'link' => '#', 'id' => 3],
   (object) ['title' => 'Оборудование', 'link' => '#', 'id' => 4],
   (object) ['title' => 'Медицинское оборудование', 'link' => '#', 'id' => 5],
   (object) ['title' => 'Ресторанное оборудование', 'link' => '#', 'id' => 6],
   (object) ['title' => 'Б/У продукция', 'link' => '#', 'id' => 7],
   (object) ['title' => 'Недвижимость', 'link' => '#', 'id' => 8],
];


?>
<script src="/src/components/page/home/home-leasing-programs/index.js"></script>
<link rel="stylesheet" href="/src/components/page/home/home-leasing-programs/index.css">
<section class="leasing-programs-box mt-160px container">
   <h3 class="title-page-h3">Программы лизинга</h3>
   <div id="js-leasing-programs" class="leasing-programs-content">
      <ul class="list">
         <?php foreach ($listTitle as $index => $item): ?>
            <li id="<?php echo ($item->id); ?>"
               class="list-item jsListItemProgram <?php echo $index === 0 ? 'list-item-active' : ''; ?>">
               <?php echo htmlspecialchars($item->title); ?>
            </li>
         <?php endforeach; ?>
      </ul>
      <div class="mobil-select">
         <div class="mobile-title">
            <p></p>
            <button class="list-header" type="button">
               <svg class="rt180" width="14px" height="9px" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <use href="<?php echo SVG_PATH; ?>icons.svg#icon-arrow-down"></use>
               </svg>
            </button>
         </div>
         <ul class="list-mobile">
            <?php foreach ($listTitle as $index => $item): ?>
               <li>
                  <p id="<?php echo ($item->id); ?>"
                     class="list-item jsListItemProgram <?php echo $index === 0 ? 'list-item-active' : ''; ?>">
                     <?php echo htmlspecialchars($item->title); ?>
                  </p>
               </li>
            <?php endforeach; ?>
         </ul>
      </div>
      <div class="leasing-programs">
         <div class='leasing-content'>
            <div class="leasing-row">
               <div class="leasing-title">
                  <h4 id="js-leasing-term">
                     <!--1 — 5 лет-->
                  </h4>
                  <p>Срок лизинга</p>
               </div>
               <p>
                  График платежей настраивается индивидуально и зависит от особенностей бизнеса.
               </p>
            </div>
            <div class="leasing-row">
               <div class="leasing-title">
                  <h4 id="js-leasing-prepaid">
                     <!--от 5%-->
                  </h4>
                  <p>Аванс по договору</p>
               </div>
               <p>
                  Размер аванса коррелируется с суммой финансирования, предметом лизинга, объёмом поставок и
                  экономическими показателями клиента.
               </p>
               <p id="js-leasing-info">
                  <!--Легковые автомобили в лизинг для юридических лиц
                  и ИП.-->
               </p>
            </div>
            <div class="leasing-button">
               <a id="js-leasing-link" href="" target="_blank" rel="noopener noreferrer">
                  <button class="button button--white">
                     Подробнее
                  </button>
               </a>
            </div>
         </div>
         <div class="leasing-img">
            <img id="js-leasing-img" src="" alt="auto">
         </div>
      </div>



      </di>
</section>