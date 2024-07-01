<link rel="stylesheet" href="/src/components/page/home/home-main-slider/home-main-slider.css">
<script src="/src/components/page/home/home-main-slider/home-main-slider.js"></script>


<?php
$mainSlider = array(
   array(
      "image" => "step-one.jpeg",
      "title" => "Лизинг транспорта,<br> техники, б/у продукции",
      "description" => "description Минимальный аванс, любая стоимость",
   ),
   array(
      "image" => "step-two.jpeg",
      "title" => "Лизинг медицинского <br> оборудования без НДС",
      "description" => "description с экспресс-оценкой организации",
   ),
   array(
      "image" => "step-three.jpeg",
      "title" => "Гибкий график <br> платежей",
      "description" => "description с экспресс-оценкой организации",
   ),
   array(
      "image" => "step-four.jpeg",
      "title" => "Возмещение части <br> авансового платежа",
      "description" => "description с экспресс-оценкой организации",
   ),

);
?>




<section class="main-slider">
   <div class="main-slider__container slider">
      <!-- ------------- -->
      <?php foreach ($mainSlider as $index => $el) { ?>
         <div class="slide" style="background-image: linear-gradient(rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0.35)), url('<?php echo  IMG_PATH . 'main-slider/' . $el['image'] ?>');">
            <!--<div class="slide__content">-->
            <div class="slide__content-text">
               <h2 class="slide__heading">
                  <?php echo $el['title']; ?>
               </h2>
               <p class="slide__text">
                  <?php echo $el['description'] ?>
               </p>
            </div>
            <!--</div>-->
         </div>
      <?php
      }; ?>
      <!-- ------------- -->
   </div>
   <div class="main-slider-dot">
      <div class="main-slider-dot-item main-slider-dot-active"></div>
      <div class="main-slider-dot-item "></div>
      <div class="main-slider-dot-item "></div>
      <div class="main-slider-dot-item "></div>
   </div>
</section>