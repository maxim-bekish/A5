<?php
$aboutDocument = [
   [
      "title" => "Перечень документов для ИП",
      "date" => "20.01.2024",
      "dowland" => "test.pdf",
      "view" => "test.pdf",
   ],
   [
      "title" => "Перечень документов \n для юридических лиц",
      "date" => "20.01.2024",
      "dowland" => "test.pdf",
      "view" => "test.pdf",
   ],
];
?>

<section class="about-document grid_1-3-box container mt-160px">
   <div class="grid_1-3_1">
      <p class="p20px">
         Документы
      </p>
   </div>
   <div class="grid_1-3_3  about-document__items">
      <?php foreach ($aboutDocument as $el) : ?>
         <div class="about-document__item">
            <p>
               <?php echo nl2br(htmlspecialchars($el['title'])); ?>
            </p>

            <p class="about-document__date">
               <?php echo nl2br(htmlspecialchars($el['date'])); ?>
            </p>

            <div class="about-document__controller">
               <a class="dowland" href="/src/assets/<?php echo nl2br(htmlspecialchars($el['dowland'])); ?>" download="filename.pdf" target="_blank" rel="noopener noreferrer">
                  <svg class="dowland__default" viewBox="0 0 50 50" fill="none">
                     <use href="<?php echo SVG_PATH; ?>icons.svg#icon-dowland"></use>
                  </svg>
                  <svg class="dowland__hover" viewBox="0 0 50 50" fill="none">
                     <use href="<?php echo SVG_PATH; ?>icons.svg#icon-dowland-hover"></use>
                  </svg>
               </a>
               <a class="view" target="_blanc" href="/src/assets/<?php echo nl2br(htmlspecialchars($el['view'])); ?>">
                  <svg class="view__default" viewBox="0 0 50 50" fill="none">
                     <use href="<?php echo SVG_PATH; ?>icons.svg#icon-eye"></use>
                  </svg>
                  <svg class="view__hover" viewBox="0 0 50 50" fill="none">
                     <use href="<?php echo SVG_PATH; ?>icons.svg#icon-eye-hover"></use>
                  </svg>
               </a>
            </div>
         </div>
      <?php endforeach; ?>
   </div>
</section>

<style>
   .dowland svg,
   .view svg,
   .dowland,
   .view {
      width: 38px;
      height: 38px;
   }

   .about-document {
      display: grid;
      grid-template-columns: repeat(2, 410px);
      grid-template-rows: repeat(2, 200px);
      grid-column-gap: 40px;
      grid-row-gap: 40px;
   }

   .about-document__controller {
      position: absolute;
      right: 20px;
      bottom: 20px;
      display: flex;
      gap: 10px;
   }

   .about-document__items {
      display: flex;
      gap: 40px;
   }

   .about-document__date {
      font-size: 16px;
      line-height: 19.2px;
      position: absolute;
      left: 20px;
      bottom: 20px;
      color: #979797;
   }

   .about-document__item p {
      font-size: 20px;
      font-weight: 500;
      line-height: 24px;
   }

   .about-document__item {
      padding: 30px 20px;
      position: relative;
      width: 410px;
      background: rgba(242, 242, 242, 1);
      height: 200px;
   }
</style>