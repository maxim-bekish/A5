<script src="src/components/page/about-company/team-slider/team-slider.js"></script>
<link rel="stylesheet" href="src/components/page/about-company/team-slider/team-slider.css" />


<?php
$slides = [
   [
      "image" => "photo-1.png",
      "name" => "Владимир Петров",
      "jobTitle" => "1Генеральный директор",
   ],
   [
      "image" => "photo-2.png",
      "name" => "Вася Пупкин",
      "jobTitle" => "2Генеральный директор",
   ],
   [
      "image" => "photo-3.png",
      "name" => "Вася Пупкин",
      "jobTitle" => "3Генеральный директор",
   ],
   [
      "image" => "photo-4.png",
      "name" => "Вася Пупкин",
      "jobTitle" => "4Генеральный директор",
   ],
   [
      "image" => "photo-5.png",
      "name" => "Вася Пупкин",
      "jobTitle" => "5Генеральный директор",
   ],
   [
      "image" => "photo-6.png",
      "name" => "Вася Пупкин",
      "jobTitle" => "6Генеральный директор",
   ],
   [
      "image" => "photo-7.png",
      "name" => "Вася Пупкин",
      "jobTitle" => "7Генеральный директор",
   ],
];
?>


<section class="team-slider container mt-160px">
   <h3 class="team-slider__title title-page-h3">Команда</h3>

   <section class="slider">
      <div class="custom-slider__buttons">
         <button class="custom-slider__button slider__button--prev" type="button">
            <svg class="custom-slider__icon" width="50" height="50" viewBox="0 0 50 50">
               <use href="<?php echo SVG_PATH; ?>icons.svg#icon-arrow-left-circle"></use>
            </svg>
         </button>
         <button class="custom-slider__button slider__button--next" type="button">
            <svg class="custom-slider__icon" width="50" height="50" viewBox="0 0 50 50">
               <use href="<?php echo SVG_PATH; ?>icons.svg#icon-arrow-left-circle"></use>
            </svg>
         </button>
      </div>
      <div class="slider__box">
         <div class="slider__container">
            <?php foreach ($slides as $slide) : ?>
               <div class="slider__slide" data-title="<?php echo htmlspecialchars($slide['name']); ?>" data-description="<?php echo htmlspecialchars($slide['jobTitle']); ?>">
                  <div class="slider__header">
                     <img class="slider__image" src="<?php echo IMG_PATH . 'program-leasing-page/' . htmlspecialchars($slide['image']); ?>" alt="people">
                  </div>
               </div>
            <?php endforeach; ?>
         </div>
      </div>
      <div class="slider__main">
         <!-- сюда нужно автоматически подставлять данные в зависимости что в слайдере -->
         <p class="slider__text slider__title"></p>
         <p class="slider__text slider__description"></p>
      </div>
   </section>
</section>