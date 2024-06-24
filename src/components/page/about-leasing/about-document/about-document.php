<link rel="stylesheet" href="/src/components/page/about-leasing/about-document/about-document.css">




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
   <div>
      <p class="p20px-big">
         Документы
      </p>
   </div>
   <div class="about-document__items w-50-box">
      <?php foreach ($aboutDocument as $el) : ?>
         <div class="about-document__item w-50">
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