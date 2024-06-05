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
<script src="/src/components/page/home/leasing-programs/index.js"></script>
<link rel="stylesheet" href="/src/components/page/home/leasing-programs/index.css">
<section class="leasing-programs-box mt-160px container">
   <h3 class="title-page-h3">Программы лизинга</h3>
   <div id="js-leasing-programs" class="leasing-programs-content">
      <ul class="list">
         <?php foreach ($listTitle as $index => $item): ?>
            <li id="<?php echo ($item->id); ?>" class="list-item jsListItemProgram <?php echo $index === 0 ? 'list-item-active' : ''; ?>">
            <?php echo htmlspecialchars($item->title); ?>
            </li>
         <?php endforeach; ?>
      </ul>

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
               <button class="button button-white">
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