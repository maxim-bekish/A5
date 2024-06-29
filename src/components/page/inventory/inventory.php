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

   <div class="inventory__content ">
      <?php
      include 'src/components/page/program-leasing/production-select/production-select.php';
      ?>
      <div class="grid__item__3" >
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
   </div>

   <button class="button button--blue js-leady-loading" type="button">еще</button>
</section>


<script>
   $(document).ready(function() {
      const items = $('.inventory__content a');

      const itemsToShow = 6;
      let itemsHidden = items.length - itemsToShow;
      if (window.innerWidth < 1280) {
         if (items.length > itemsToShow) {
            // Показать первые 4 элемента, остальные скрыть
            items.slice(itemsToShow).hide();

            // Обработчик нажатия на кнопку
            $('.js-leady-loading').click(function() {
               // Показать следующие 4 элемента
               const hiddenItems = items.filter(':hidden').slice(0, itemsToShow);
               hiddenItems.show();

               // Обновить количество скрытых элементов
               itemsHidden -= hiddenItems.length;

               // Если больше нет скрытых элементов, скрыть кнопку
               if (itemsHidden <= 0) {
                  $(this).hide();
               }
            });
         }
      }
   })
</script>