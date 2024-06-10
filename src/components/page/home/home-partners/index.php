<link rel="stylesheet" href="/src/components/page/home/home-partners/index.css">
<script src="/src/components/page/home/home-partners/index.js"></script>

<?php
$slides = array(
   array(
      "image" => "1-zoomlin.svg",
      "alt" => "Zoomlin Logo"
   ),
   array(
      "image" => "2-translift.svg",
      "alt" => "Translift Logo"
   ),
   array(
      "image" => "3-medizina.svg",
      "alt" => "Medizina Logo"
   ),
   array(
      "image" => "4-jood.svg",
      "alt" => "Jood Logo"
   ),

   array(
      "image" => "5-agrolider.svg",
      "alt" => "Agrolider Logo"
   ),
   array(
      "image" => "6-agrodoc.svg",
      "alt" => "Agrodoc Logo"
   ),
   array(
      "image" => "7-rustorg.svg",
      "alt" => "Rustorg Logo"
   ),
   array(
      "image" => "8-pkuspt.svg",
      "alt" => "Pkuspt Logo"
   ),
   array(
      "image" => "9-UralSpecTrans.svg",
      "alt" => "UralSpecTrans Logo"
   ),
   array(
      "image" => "10-geocentr.svg",
      "alt" => "geocentr Logo"
   ),
   array(
      "image" => "11-LBR.svg",
      "alt" => "LBR Logo"
   ),
   array(
      "image" => "12-gorci.svg",
      "alt" => "gorci Logo"
   ),

   array(
      "image" => "13-pесо.svg",
      "alt" => "pесо Logo"
   ),
   array(
      "image" => "14-ingostrah.svg",
      "alt" => "ingostrah Logo"
   ),
   array(
      "image" => "15-jugiria.svg",
      "alt" => "jugiria Logo"
   ),
   array(
      "image" => "16-sogaz.svg",
      "alt" => "sogaz Logo"
   ),
   array(
      "image" => "17-energogrant.svg",
      "alt" => "energogrant Logo"
   ),
   array(
      "image" => "18-bsk.svg",
      "alt" => "bsk Logo"
   ),
   array(
      "image" => "19-alfa.svg",
      "alt" => "alfa Logo"
   ),
   array(
      "image" => "20-mezcentr.svg",
      "alt" => "mezcentr Logo"
   ),

);
?>


<section class="partners-box mt-160px container">
   <div class="partners-box__up">
      <p class="partners-box__title">Партнеры</p>
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
               <p class="partners-box__time-value">До 2-ух дней</p>
               <p class="partners-box__time-description">занимает время на согласование условий предоставлений лизинга с
                  поставщиком.</p>
            </div>
            <div class="partners-box__time-item">
               <p class="partners-box__time-value">В течение 2-ух дней</p>
               <p class="partners-box__time-description">будет заключён договор.</p>
            </div>
         </div>
         <button type="button" class="partners-box__button button button--blue">Подобрать</button>
      </div>
   </div>
   <section class="custom-slider">
      <div class="custom-slider__buttons">
         <button class="custom-slider__button js-partners-slider-prev button--visible" type="button">
            <svg class="custom-slider__icon" width="50" height="50" viewBox="0 0 50 50">
               <use href="<?php echo SVG_PATH; ?>icons.svg#icon-arrow-left-circle"></use>
            </svg>
         </button>
         <button class="custom-slider__button js-partners-slider-next button--visible" type="button">
            <svg class="custom-slider__icon" width="50" height="50" viewBox="0 0 50 50">
               <use href="<?php echo SVG_PATH; ?>icons.svg#icon-arrow-left-circle"></use>
            </svg>
         </button>
      </div>
      <div class="custom-slider__box">
         <div class="custom-slider__container">
            <?php foreach ($slides as $slide) {
               echo '<div class="custom-slider__slide"><img src="' . SVG_PATH . 'custom-slider/' . $slide["image"] . '" alt="' . $slide["alt"] . '"></div>';
            } ?>
         </div>
      </div>
   </section>
</section>


