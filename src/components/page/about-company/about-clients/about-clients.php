<link rel="stylesheet" href="src/components/page/about-company/about-clients/about-clients.css">
<script src="src/components/page/about-company/about-clients/about-clients.js"></script>

<?php
$slidesClients = [
   [
      "image" => "ats-1.png",
      "name" => "ООО «АТС» — многопрофильная компания, активно развивающая сферу электроэнергетики, а также занимающаяся строительством буровых установок /n и крупногабаритными перевозками. Техника и оборудование являются решающими инструментами в развитии ООО «АТС», поэтому они обратились к нам.",
      "description" => "Мы передали в лизинг модульную транспортную систему Goldhofer  /n из Германии, её грузоподъёмность составляет до 600 тонн.",

   ],
   [
      "image" => "novec-2.png",
      "name" => "ООО «Новэк» — компания, которая занимается сбором неопасных отходов и участвует в нацпроекте «Экология».",
      "description" => "Мы передали в лизинг ООО «Новэк» оборудование для развития значимого инвестиционного проекта Тюменской области.",

   ],
   [
      "image" => "med-3.png",
      "name" => "Медицинский центр «ЮниМед» — популярный в Тюмени многопрофильный центр, предоставляющий большой спектр медицинских услуг.",
      "description" => "Для одного из новых отделений мы осуществили поставку и передачу комплекса оборудования, чем обеспечили непрерывное развитие центра.",
   ],
   [
      "image" => "GPKiO-4.png",
      "name" => "ООО «ГПКиО» — компания, организовавшая и обслуживающая один из самых популярных парков развлечений на Цветном бульваре.",
      "description" => "Мы вместе с компанией создаем настроение праздника для жителей и гостей Тюмени: передаём в лизинг аттракционы и вспомогательную технику.
",
   ],
   [
      "image" => "kascad-5.png",
      "name" => "ООО «Каскад Строй Групп» — московская компания, занимающаяся строительством жилых и нежилых зданий.",
      "description" => "Благодаря нашему сотрудничеству осуществилось несколько проектов 
по строительству многоквартирных жилых домов в Москве и Московской области.",
   ],
   [
      "image" => null,
      "name" => "ООО «АйТи Лайт» — московская компания, которая занимается IT-сопровождением, с базой клиентов более 30 тыс.",
      "description" => "Мы сотрудничали с «АйТи Лайт» и передали ей в лизинг передовое IT-оборудование: ПК, системы безопасности и хранения данных, серверы, комплектующие и т.д.",
   ],
   [
      "image" => "nikitino-7.png",
      "name" => "ООО «Никитино» — нижегородская компания, которая занимается разведением крупнорогатого скота, производством молока и другой сельскохозяйственной деятельностью.",
      "description" => "Мы передали компании в лизинг более 50 единиц сельскохозяйственной техники.",
   ],
];
?>



<section class="about-clients container mt-160px">

   <div class="about-clients__header grid_1-3-box">
      <div class="about-clients__header-text">
         <p class="p20px">Клиенты</p>
      </div>
      <div class="about-clients__header-title">
         <h3 class="about-clients__title title-page-h3">
            Решили логистические проблемы на рынке 2022
         </h3>

         <div class="w-50-box about-clients__description">
            <p class="w-50">
               Востребованность лизинга за 9 месяцев 2023 года возросла в 2 раза по сравнению с аналогичным периодом
               2022 года. Резкий скачок связан с геополитическим кризисом, нехваткой техники и быстрым реагированием
               лизинговых компаний.
            </p>
            <p class="w-50">
               Мы своевременно адаптировались к новым условиям, перестроили свою логистическую цепочку и сделали упор
               на сотрудничество с дружественными странами. Компания А5 совместно с коллегами не дала «просесть»
               отечественному производству, а также вывела российский бизнес на показатели выше, чем в докризисный 2021
               год.
            </p>
        
         </div>
      </div>
   </div>

   <div class="about-clients__slider">
      <div class="slider__box">
         <div class="slider__container">
            <?php foreach ($slidesClients as $slide) : ?>
               <div class="slider__slide">
                  <p class="dop-info">Подробнее</p>
                  <div class="slider__slide--front">
                     <img class="slider__image" src="<?php echo IMG_PATH . 'slider-clients/' . (!empty($slide['image']) ? htmlspecialchars($slide['image']) : 'placeholder.png'); ?>" alt="logo">
                  </div>
                  <div class="slider__slide--back">
                     <p class="slider__text"><?php echo nl2br(htmlspecialchars($slide['name'])); ?></p>
                     <p class="slider__text"><?php echo nl2br(htmlspecialchars($slide['description'])); ?></p>
                  </div>
               </div>
            <?php endforeach; ?>
         </div>
      </div>
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
   </div>
</section>