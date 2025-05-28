<link rel="stylesheet" href="/src/components/page/inventory-card/inventory-card.css">

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
	$price = format($selectedItem['price']);
	$priceMonth = format($selectedItem['priceMonth']);
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
     <h2 class=\"card__title__mobile\">$name</h2>
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
               <button type=\"button\" data-title=\"Оставить заявку\" data-description=\"true\" data-email=\"false\" class=\"openPopUpButton card__button  button button--blue\">Оставить заявку</button>
         </div>
      </div>
   </section>";
} else {
	echo "<p>Элемент с указанным ID не найден.</p>";
}

?>