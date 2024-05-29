<script src="/src/components/ui/custom-slider/index.js"></script>
<link rel="stylesheet" href="/src/components/ui/custom-slider/index.css">

<!-- todo fix last slide -->
<section class="custom-slider">
   <div class="buttons">
      <button class="js-custom-slider-prev" type="button">
         <svg class="pointer rt0" width="50" height="50" viewBox="0 0 50 50">
            <use href="<?php echo SVG_PATH; ?>icons.svg#icon-arrow-left-circle"></use>
         </svg>
      </button>
      <button class="js-custom-slider-next" type="button">
         <svg class="pointer rt0" width="50" height="50" viewBox="0 0 50 50">
            <use href="<?php echo SVG_PATH; ?>icons.svg#icon-arrow-left-circle"></use>
         </svg>
      </button>
   </div>
   <div class="box-slider">
      <div class="container-custom-slider">
         <?php
         foreach ($slides as $slide) {
            echo '<div class="custom-slide"><img src="' . SVG_PATH . 'custom-slider/' . $slide["image"] . '" alt="' . $slide["alt"] . '"></div>';
         } ?>
      </div>
   </div>
</section>