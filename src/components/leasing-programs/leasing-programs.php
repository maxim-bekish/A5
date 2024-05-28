<?php

$people = [
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
<link rel="stylesheet" href="/src/components/leasing-programs/index.css">
<section class="leasing-programs-box container">
   <h3>Программы лизинга</h3>
   <div class="leasing-programs-content">
      <ul class="list">
         <?php foreach ($people as $index => $item): ?>
            <li class="list-item <?php echo $index === 0 ? 'list-item-active' : ''; ?>">
               <a href="<?php echo htmlspecialchars($item->link); ?>">
                  <?php echo htmlspecialchars($item->title); ?>
               </a>
            </li>
         <?php endforeach; ?>
      </ul>
      <div class="leasing-programs">
         <div class='leasing-content'>
            <div class="leasing-row">
               <div class="leasing-title">
                  <h4>1 — 5 лет</h4>
                  <p>Срок лизинга</p>
               </div>
               <p>
                  График платежей настраивается индивидуально и зависит от особенностей бизнеса.
               </p>
            </div>
            <div class="leasing-row">
               <div class="leasing-title">
                  <h4>от 5%</h4>
                  <p>Аванс по договору</p>
               </div>
               <p>
                  Размер аванса коррелируется с суммой финансирования, предметом лизинга, объёмом поставок и
                  экономическими показателями клиента.
               </p>
               <p>
                  Легковые автомобили в лизинг для юридических лиц
                  и ИП.
               </p>
            </div>
            <div class="leasing-button">
               <button class="button button-white">Подробнее</button>
            </div>
         </div>
         <div class="leasing-img">
            <img src="<?php echo IMG_PATH; ?>leasing-car.jpeg" alt="auto">
         </div>
      </div>
   </div>
</section>
<script src="/src/components/leasing-programs/index.js"></script>