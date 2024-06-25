<?php
require 'src/assets/helpers/format.php';
include 'src/state/state.php';
?>

<link rel="stylesheet" href="src/components/page/inventory/inventory.css">

<section class='grid_1-3-box inventory container'>
   <div class="inventory__header">
      <p class="inventory__title">
         Каталог изьятой техники
      </p>
   </div>
   <div class="inventory__content">
      <?php foreach ($inventory as $el) : ?>
         <a href="<?php echo htmlspecialchars($el['href']); ?>?item=<?php echo htmlspecialchars($el['name']); ?>&id=<?php echo htmlspecialchars($el['id']); ?>">
            <div class="inventory__content--item--img">
               <img src="<?php echo IMG_PATH . 'inventory/' . htmlspecialchars($el['imagePreview']); ?>" alt="img">
            </div>
            <div class="inventory__content--item--text">
               <p>
                  <?php echo nl2br(htmlspecialchars($el['name'])); ?>
               </p>
               <p>
                  от <?php echo format($el['priceMonth'], "₽/мес."); ?>
               </p>
               <p>
                  стоимость: от <?php echo format($el['price'], "₽"); ?>
               </p>
            </div>
         </a>
      <?php endforeach; ?>
   </div>
</section>