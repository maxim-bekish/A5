<link rel="stylesheet" href="/src/components/page/home/home-thanks/index.css">
<script src="/src/components/page/home/home-thanks/index.js"></script>

<?php
$slides = array(
   array(
      "title" => "Свидетельство о членстве обьединенной лизинговой ассоциации",
      "date" => "2020",
      "image" => "logo1.svg",
      "text" => null,
      "href" => 'file.pdf'
   ),
   array(
      "title" => "Благодарность от Объединенной лизинговой ассоциации",
      "date" => "2022",
      "image" => "logo1.svg",
      "text" => null,
      "href" => 'file.pdf'
   ),
   array(
      "title" => "Свидетельство о членстве Ассоциаций кредитных организаций Тюменской области",
      "date" => "23.10.2023",
      "image" => null,
      "text" => "Ассоциация \n кредитных организаций \n тюменской области",
      "href" => 'file.pdf'
   ),
   array(
      "title" => "Благодарственное письмо от ООО «Юнимед»",
      "date" => null,
      "image" => "logo4.png",
      "text" => null,
      "href" => 'file.pdf'
   ),
   array(
      "title" => "Благодарственное письмо \n от ООО «СК Согласие»",
      "date" => null,
      "image" => "logo5.png",
      "text" => null,
      "href" => 'file.pdf'
   ),
); ?>

<section class="thanks-box mt-160px container">
   <h3 class="thanks-box__title title-page-h3">Благодарности и сертификаты</h3>
   <section class="slider">
      <div class="slider__buttons">
         <button class="slider__button slider__button--prev" type="button">
            <svg class="slider__icon" width="50" height="50" viewBox="0 0 50 50">
               <use href="<?php echo SVG_PATH; ?>icons.svg#icon-arrow-left-circle"></use>
            </svg>
         </button>
         <button class="slider__button slider__button--next" type="button">
            <svg class="slider__icon" width="50" height="50" viewBox="0 0 50 50">
               <use href="<?php echo SVG_PATH; ?>icons.svg#icon-arrow-left-circle"></use>
            </svg>
         </button>
      </div>
      <div class="slider__box">
         <div class="slider__container">
            <?php
            foreach ($slides as $slide) {
               $imagePath = !empty($slide["image"]) ? SVG_PATH . 'slider-thanks/' . $slide["image"] : null;
               $altText = !empty($slide["title"]) ? $slide["title"] : 'Изображение';
               $title = !empty($slide["title"]) ? $slide["title"] : '';
               $date = !empty($slide["date"]) ? $slide["date"] : null;
               $text = !empty($slide["text"]) ? $slide["text"] : null;
               $href = !empty($slide["href"]) ? $slide["href"] : '#';
               echo '<div class="slider__slide">
                        <div class="slider__header">';
               if ($title) {
                  echo '<p class="slider__title">' . htmlspecialchars($title) . '</p>';
               }
               if ($date) {
                  echo '<p class="slider__date">' . htmlspecialchars($date) . '</p>';
               }
               echo '</div> <div class="slider__main">';
               if ($imagePath) {
                  echo '<img class="slider__image" src="' . $imagePath . '" alt="' . htmlspecialchars($altText) . '">';
               }
               if ($text) {
                  echo '<p class="slider__text">' . htmlspecialchars($text) . '</p>';
               }
               echo '</div> <a class="slider__link" target="_blank" href="' . htmlspecialchars($href) . '">
                        <svg class="slider__pointer" width="40" height="40" viewBox="0 0 40 40" fill="none">
                           <use href="' . SVG_PATH . 'icons.svg#icon-eye"></use>
                        </svg>
                     </a>';
               echo '</div>';
            }
            ?>
         </div>
      </div>
   </section>
</section>