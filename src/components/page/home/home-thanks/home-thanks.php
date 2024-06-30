<link rel="stylesheet" href="src/components/page/home/home-thanks/home-thanks.css">
<script src="src/components/page/home/home-thanks/home-thanks.js"></script>

<?php
include 'src/assets/helpers/sliderCustom.php';

$slides = [
   [
      "title" => "111 Свидетельство о членстве обьединенной лизинговой ассоциации",
      "date" => "2020",
      "image" => "logo1.svg",
      "text" => null,
      "href" => 'file.pdf'
   ],
   [
      "title" => "222 Благодарность от Объединенной лизинговой ассоциации",
      "date" => "2022",
      "image" => "logo1.svg",
      "text" => null,
      "href" => 'file.pdf'
   ],
   [
      "title" => "333 Свидетельство о членстве Ассоциаций кредитных организаций Тюменской области",
      "date" => "23.10.2023",
      "image" => null,
      "text" => "Ассоциация \n кредитных организаций \n тюменской области",
      "href" => 'file.pdf'
   ],
   [
      "title" => "444 Благодарственное письмо от ООО «Юнимед»",
      "date" => null,
      "image" => "logo4.png",
      "text" => null,
      "href" => 'file.pdf'
   ],
   [
      "title" => "555 Благодарственное письмо \n от ООО «СК Согласие»",
      "date" => null,
      "image" => "logo5.png",
      "text" => null,
      "href" => 'file.pdf'
   ],
];
?>
<section class="thanks-box mt-160px container">
   <h3 class="thanks-box__title title-page-h3">Благодарности и сертификаты</h3>
   <?php
   ob_start();
   foreach ($slides as $slide) : ?>
      <div class="slider__slide">
         <div class="slider__header">
            <?php if ($slide['title']) : ?>
               <p class="slider__title"><?php echo htmlspecialchars($slide['title']); ?></p>
            <?php endif; ?>
            <?php if ($slide['date']) : ?>
               <p class="slider__date"><?php echo htmlspecialchars($slide['date']); ?></p>
            <?php endif; ?>
         </div>
         <div class="slider__main">
            <?php if ($slide['image']) : ?>
               <img class="slider__image" src="<?php echo SVG_PATH . 'slider-thanks/' . htmlspecialchars($slide['image']); ?>" alt="<?php echo htmlspecialchars($slide['title']); ?>">
            <?php endif; ?>
            <?php if ($slide['text']) : ?>
               <p class="slider__text"><?php echo nl2br(htmlspecialchars($slide['text'])); ?></p>
            <?php endif; ?>
         </div>
         <a class="slider__link" target="_blank" href="<?php echo htmlspecialchars($slide['href']); ?>">
            <svg class="slider__pointer" width="50" height="50" viewBox="0 0 50 50" fill="none">
               <use href="<?php echo SVG_PATH; ?>icons.svg#icon-eye"></use>
            </svg>
            <svg class="slider__pointer--hover" width="50" height="50" viewBox="0 0 50 50" fill="none">
               <use href="<?php echo SVG_PATH; ?>icons.svg#icon-eye-hover"></use>
            </svg>
         </a>
      </div>
   <?php endforeach;
   $content = ob_get_clean();
   //ready
   sliderCustom($content, 3);
   ?>

</section>