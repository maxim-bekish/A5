<?php
require 'src/assets/helpers/format.php';
include 'src/state/state.php';

$id = isset($_GET['id']) ? intval($_GET['id']) : null;

$selectedItem = null;

foreach ($inventory as $item) {
   if ($item['id'] === $id) {
      $selectedItem = $item;
      break;
   }
}

if ($selectedItem !== null) {
   $imagePath = isset($selectedItem['image']) ? IMG_PATH . 'inventory/' . $selectedItem['image'] : IMG_PATH . 'placeholder.png';
   $name = $selectedItem['name'];
   $price = format($selectedItem['price'], '₽');
   $priceMonth = format($selectedItem['priceMonth'],'₽');
   $term = $selectedItem['term'] . ' мес.';

   // Выводим характеристики, если они есть
   $characteristicsHtml = '';
   if (isset($selectedItem['characteristics']) && is_array($selectedItem['characteristics'])) {
      foreach ($selectedItem['characteristics'] as $characteristic) {
         $label = $characteristic['title'];
         $value = $characteristic['value'];
         if ($label === 'Пробег') {
            $value = format($characteristic['value'], "км");
         }
         $characteristicsHtml .= "
                  <li class=\"card__characteristic\">
                     <p class=\"card__characteristic-label\">$label</p>
                     <p class=\"card__characteristic-value\">$value</p>
                  </li>";
      }
   }

   echo "
   <section class=\"card container\">
      <div class=\"card__image-container\">
         <img class=\"card__image\" src=\"$imagePath\" alt=\"\">
      </div>
      <div class=\"card__content\">
         <h2 class=\"card__title\">$name</h2>
         <div class=\"card__details\">
               <div class=\"card__detail\">
                  <p class=\"card__detail-label\">Стоимость</p>
                  <p class=\"card__detail-value\">от $price</p>
               </div>
               <div class=\"card__detail\">
                  <p class=\"card__detail-label\">Ежемесячный платеж:</p>
                  <p class=\"card__detail-value\">от $priceMonth</p>
               </div>
               <div class=\"card__detail\">
                  <p class=\"card__detail-label\">Срок</p>
                  <p class=\"card__detail-value\">$term</p>
               </div>
         </div>
         <div class=\"card__characteristics\">
               <h4 class=\"card__characteristics-title\">Характеристики</h4>
               <ul>
                  $characteristicsHtml
               </ul>
               <button type=\"button\" class=\"card__button button button--blue\">Оставить заявку</button>
         </div>
      </div>
   </section>";
} else {
   echo "<p>Элемент с указанным ID не найден.</p>";
}

?>


<!--<section class="card container">
   <div class="card__image-container">
      <img class="card__image" src="<?php echo IMG_PATH; ?>inventory/bus.png" alt="">
   </div>
   <div class="card__content">
      <h2 class="card__title">Автобус ПАЗ Vector NEXT 320415-04</h2>
      <div class="card__details">
         <div class="card__detail">
            <p class="card__detail-label">Стоимость</p>
            <p class="card__detail-value">от 4 300 000 ₽</p>
         </div>
         <div class="card__detail">
            <p class="card__detail-label">Ежемесячный платеж:</p>
            <p class="card__detail-value">от 220 000 ₽</p>
         </div>
         <div class="card__detail">
            <p class="card__detail-label">Срок</p>
            <p class="card__detail-value">до 36 мес.</p>
         </div>
      </div>
      <div class="card__characteristics">
         <h4 class="card__characteristics-title">Характеристики</h4>
         <ul>
            <li class="card__characteristic">
               <p class="card__characteristic-label">Год</p>
               <p class="card__characteristic-value">2021</p>
            </li>
            <li class="card__characteristic">
               <p class="card__characteristic-label">Пробег</p>
               <p class="card__characteristic-value">180 000 км</p>
            </li>
         </ul>
         <button type="button" class="card__button button button--blue">Оставить заявку</button>
      </div>
   </div>
</section>-->

<style>
   .card {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      grid-column-gap: 40px;
   }

   .card__content {
      display: flex;
      flex-direction: column;
   }

   .card__details {
      display: flex;
      justify-content: space-between;
      margin: 30px 0 65px 0;
   }

   .card__title {
      font-size: 70px;
      line-height: 84.72px;
      color: #0045B2;
      margin-bottom: 10px;
   }

   .card__detail-label {
      font-size: 16px;
      line-height: 16px;
      color: #979797;
   }

   .card__detail-value {
      font-size: 30px;
      font-weight: 500;
      line-height: 36.31px;
      color: #0045B2;
   }

   .card__characteristics-title {
      font-size: 20px;
      line-height: 24.2px;
      color: #515151;
   }

   .card__characteristic {
      display: flex;
      justify-content: space-between;
   }

   .card__characteristic-label {
      font-size: 16px;
      line-height: 16px;
      color: #979797;
   }

   .card__characteristic-value {
      font-size: 16px;
      line-height: 16px;
      color: #515151;
   }

   .card__characteristics {
      max-width: 410px;
      height: 100%;
   }

   .card__characteristics ul {
      display: flex;
      flex-direction: column;
      gap: 20px;
      margin: 30px 0;
      height: calc(100% - 147px);
   }

   .card__image-container {
      height: 700px;
   }

   .card__image-container .card__image {
      object-fit: cover;
      height: 100%;
   }
</style>