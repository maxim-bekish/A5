<!--<link rel="stylesheet" href="src/components/page/home/home-partners/home-partners.css">
<script src="src/components/page/home/home-partners/home-partners.js"></script>-->

<?php
$partners = array(
   array(
      "image" => "1-zoomlin.svg",
      "alt" => "Zoomlin Logo",
   ),
   array(
      "image" => "2-translift.svg",
      "alt" => "Translift Logo",
   ),
   array(
      "image" => "3-medizina.svg",
      "alt" => "Medizina Logo",
   ),
   array(
      "image" => "4-jood.svg",
      "alt" => "Jood Logo",
   ),
   array(
      "image" => "5-agrolider.svg",
      "alt" => "Agrolider Logo",
   ),
   array(
      "image" => "6-agrodoc.svg",
      "alt" => "Agrodoc Logo",
   ),
   array(
      "image" => "7-rustorg.svg",
      "alt" => "Rustorg Logo",
   ),
   array(
      "image" => "8-pkuspt.svg",
      "alt" => "Pkuspt Logo",
   ),
   array(
      "image" => "9-UralSpecTrans.svg",
      "alt" => "UralSpecTrans Logo",
   ),
   array(
      "image" => "10-geocentr.svg",
      "alt" => "geocentr Logo",
   ),
   array(
      "image" => "11-LBR.svg",
      "alt" => "LBR Logo",
   ),
   array(
      "image" => "12-gorci.svg",
      "alt" => "gorci Logo",
   ),
   array(
      "image" => "13-pесо.svg",
      "alt" => "pесо Logo",
   ),
   array(
      "image" => "14-ingostrah.svg",
      "alt" => "ingostrah Logo",
   ),
   array(
      "image" => "15-jugiria.svg",
   ),
   array(
      "image" => "16-sogaz.svg",
      "alt" => "sogaz Logo",
   ),
   array(
      "image" => "17-energogrant.svg",
      "alt" => "energogrant Logo",
   ),
   array(
      "image" => "18-bsk.svg",
      "alt" => "bsk Logo",
   ),
   array(
      "image" => "19-alfa.svg",
      "alt" => "alfa Logo",
   ),
   array(
      "image" => "20-mezcentr.svg",
      "alt" => "mezcentr Logo",
   ),
);
?>


<section class="partners-box mt-160px container">
   <div class="partners-box__up grid_1-3-box">
      <div>

         <p class="p20px">Партнеры</p>
      </div>
      <div class="partners-box__content">
         <h3 class="title-page-h3">
            Не нашли нужный вам продукт?
         </h3>
         <p class="partners-box__text">
            Мы сотрудничаем с более 1000 поставщиками в России, СНГ и странах ближнего востока. Подберём лизинговые
            условия
            индивидуально для вас
         </p>
         <div class="partners-box__time">
            <div class="partners-box__time-item">
               <p class="partners-box__time-value">25 минут</p>
               <p class="partners-box__time-description">на подбор продукта из нашей базы.</p>
            </div>
            <div class="partners-box__time-item">
               <p class="partners-box__time-value">До 2-х дней</p>
               <p class="partners-box__time-description">занимает время на согласование условий предоставлений лизинга с
                  поставщиком.</p>
            </div>
            <div class="partners-box__time-item">
               <p class="partners-box__time-value">
                  В течение 2-х дней

               </p>
               <p class="partners-box__time-description">
                  будет заключён договор.

               </p>
            </div>
         </div>
         <div class="partners-box__button">
            <button type="button" class="openPopUpButton button button--blue" data-title="Не нашли нужный
            вам продукт?" data-description="true" data-email="false">
               Подобрать
            </button>

         </div>
      </div>
   </div>
   <section class="partners-slider">
      <div class="custom-slider__buttons ">
         <button class="custom-slider__button js-partners-slider-prev " type="button">
            <svg class="custom-slider__icon" width="50" height="50" viewBox="0 0 50 50">
               <use href="<?php echo SVG_PATH; ?>icons.svg#icon-arrow-left-circle"></use>
            </svg>
         </button>
         <button class="custom-slider__button js-partners-slider-next " type="button">
            <svg class="custom-slider__icon" width="50" height="50" viewBox="0 0 50 50">
               <use href="<?php echo SVG_PATH; ?>icons.svg#icon-arrow-left-circle"></use>
            </svg>
         </button>
      </div>
      <div class="partners-slider__box">
         <div id="slides-container">
            <?php
            // Определяем заглушку
            $placeholder = array(
               "image" => "placeholder.svg",
               "alt" => "Placeholder",
               "text" => "This is a placeholder"
            );

            // Выводим все слайды сразу
            foreach ($partners as $el) {
            ?>
               <div class="slide-item">
                  <img src="<?php echo SVG_PATH; ?>custom-slider/<?php echo $el["image"] ?>" alt="<?php echo $el["alt"] ?>">
                  <p><?php echo $el["text"] ?></p>
               </div>
            <?php
            }

            // Добавляем заглушки, чтобы общее количество элементов было кратно 4
            $totalSlides = count($partners);
            while ($totalSlides % 4 != 0) {
            ?>
               <div class="slide-item">
                  <img src="<?php echo SVG_PATH; ?>custom-slider/<?php echo $placeholder["image"] ?>" alt="<?php echo $placeholder["alt"] ?>">
                  <p><?php echo $placeholder["text"] ?></p>
               </div>

            <?php
               $totalSlides++;
            }
            ?>
         </div>
         <div class="partners-slider__container" id="grouped-slides"></div>
      </div>
   </section>
</section>
