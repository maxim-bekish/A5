<?php
//include 'src/assets/helpers/format.php';
include 'src/state/state.php';
?>

<section class="grid_1-3-box container production mt-160px">
   <div class="grid_1-3_1">
      <p class="p20px">
         Продукция
      </p>
   </div>
   <div class="grid_1-3_3 production">
      <?php
      include 'src/components/page/program-leasing/production/production-select.php';
      ?>
      <div class="production__cards">
         <?php foreach ($production as $el) : ?>
            <a href="<?php echo htmlspecialchars($el['href']); ?>?item=<?php echo htmlspecialchars($el['name']); ?>&id=<?php echo htmlspecialchars($el['id']); ?>">
               <div class="production__cards--item--img">
                  <img src="<?php echo IMG_PATH . 'inventory/' . htmlspecialchars($el['imagePreview']); ?>" alt="img">
               </div>
               <div class="production__cards--item--text">
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
</section>

<style>
   .production__cards {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-column-gap: 40px;
      grid-row-gap: 40px;
   }

   .production__cards--item--img {
      width: 410px;
      height: 410px;
      background-color: #F2F2F2;
      margin-bottom: 8px
   }

   .production__cards--item--img img {
      object-fit: none;
      object-position: center;
      height: 100%;
   }

   .inventory__content--item--text p:nth-child(1) {
      font-size: 20px;
   }

   .production__cards--item--text p:nth-child(2) {
      font-size: 20px;
      font-weight: 500;
      color: #979797;
      margin: 8px 0;
   }

   .production__cards--item--text p:nth-child(3) {
      font-size: 16px;
      line-height: 19.36px;
      color: #979797;
   }
</style>