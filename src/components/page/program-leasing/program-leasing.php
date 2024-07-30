<script src="src/components/page/program-leasing/program-leasing.js"></script>
<link rel="stylesheet" href="src/components/page/program-leasing/program-leasing.css">

<?php
require 'src/assets/helpers/format.php';
$programLeasingData = [
   [
      "asideTitle" => "Легковой автотранспорт",
      "section" => "passenger-vehicles",
      "image" => "photo-1.png",
      "title" => "Приобрести легковой автомобиль — легко",
      "text" => "Мы передаем в лизинг легковые автомобили с различным типом кузова: седан, лифтбек, внедорожник, купе, пикапы, фургоны и др. \n \n У нас представлены все самые востребованные и актуальные марки на настоящий день: ...",
      "obtainingLeasing" => [
         "minAdvance" => 5,
         "maxLeasingPeriod" => 1,
         "minRedemptionPayment" => 1200,
      ],
      "requirementsLessees" => [
         [
            "title" => "Организационно-правовая форма",
            "text" => "ООО, ОАО, ПАО, ЗАО, ИП, бюджетные организации"
         ],
         [
            "title" => "Место основной деятельности",
            "text" => "Все регионы РФ"
         ],
         [
            "title" => "Срок деятельности лизингополучателя",
            "text" => 1
         ],
      ],
      "suppliers" => [
         "20-mezcentr.svg",
         "8-pkuspt.svg",

      ]
   ],
   [
      "asideTitle" => "Грузовой автотранспорт",
      "section" => "freight-transport",
      "image" => "photo-2.png",
      "title" => "Серьезная техника для крупного \n  производства",
      "text" => "У нас в наличии: тягачи, самосвалы, рефрижераторы,  фургоны, бортовые грузовики  и другие виды, индивидуально подобранные под ваш бизнес.  \n\n Мы отдаём предпочтение самым надёжным производителям грузового автотранспорта из России, работаем с проверенными поставщиками — УралСпецТранс, АГРО-Лидер, МАЗ Центр Челябинск, ПК УСПТ.",
      "obtainingLeasing" => [
         "minAdvance" => 5,
         "maxLeasingPeriod" => 2,
         "minRedemptionPayment" => 1200,
      ],
      "requirementsLessees" => [
         [
            "title" => "Организационно-правовая форма",
            "text" => "ООО, ОАО, ПАО, ЗАО, ИП, бюджетные организации"
         ],
         [
            "title" => "Место основной деятельности",
            "text" => "Все регионы РФ"
         ],
         [
            "title" => "Срок деятельности лизингополучателя",
            "text" => 1
         ],
      ],
      "suppliers" => [
         "1-zoomlin.svg",
         "8-pkuspt.svg",
         "20-mezcentr.svg",
         "9-UralSpecTrans.svg",
         "2-translift.svg ",

      ]
   ],
   [
      "asideTitle" => "Спецтехника",
      "section" => "special-equipment",
      "image" => "photo-3.png",
      "title" => "Своя спецтехника —\nсвой вектор развития",
      "text" => "У нас представлена техника под любой запрос бизнеса и производства: сельхоз, лесозаготовительная, дорожная, строительная, коммунальная, складская и др. \n\n  Мы сотрудничаем только с надёжными производителями, поставляющими качественные машины: Zoomlion, УралСпецТранс, АГРО-Лидер, ТрансЛифтТехника, МАЗ Центр Челябинск, ПК УСПТ, ЛБР, Агродок, 1-Я ОПАЛУБОЧНАЯ КОМПАНИЯ.",
      "obtainingLeasing" => [
         "minAdvance" => 5,
         "maxLeasingPeriod" => 3,
         "minRedemptionPayment" => 1200,
      ],
      "requirementsLessees" => [
         [
            "title" => "Организационно-правовая форма",
            "text" => "ООО, ОАО, ПАО, ЗАО, ИП, бюджетные организации"
         ],
         [
            "title" => "Место основной деятельности",
            "text" => "Все регионы РФ"
         ],
         [
            "title" => "Срок деятельности лизингополучателя",
            "text" => 1
         ],
      ],
      "suppliers" => [
         "1-zoomlin.svg",
         "6-agrodoc.svg",
         "11-LBR.svg",
         "5-agrolider.svg",

      ]
   ],
   [
      "asideTitle" => "Оборудование",
      "section" => "equipment",
      "image" => "photo-4.png",
      "title" => "Высокотехнологичное \n производство с выгодой",
      "text" => "Оборудование под специальный запрос: для металлообрабатывающего, пищевого, строительного, деревообрабатывающего, строительного  производства. Подберём оборудование под ваш запрос. \n\n Мы поддерживаем российского производителя, именно поэтому участвуем в программе  «Лизинговые проекты» Фонда развития промышленности и предоставляем заём до 27% от общей стоимости российского оборудования. \n\n Работаем со следующими поставщиками: ТрансЛифтТехника, ГСИ-Екатеринбург, FoodProm, РУСТорг, ЛБР, MEDLIGA, 1-Я ОПАЛУБОЧНАЯ КОМПАНИЯ.",
      "obtainingLeasing" => [
         "minAdvance" => 20,
         "maxLeasingPeriod" => 4,
         "minRedemptionPayment" => 1200,
      ],
      "requirementsLessees" => [
         [
            "title" => "Организационно-правовая форма",
            "text" => "ООО, ОАО, ПАО, ЗАО, ИП, бюджетные организации"
         ],
         [
            "title" => "Место основной деятельности",
            "text" => "Все регионы РФ"
         ],
         [
            "title" => "Срок деятельности лизингополучателя",
            "text" => 1
         ],
      ],
      "suppliers" => [
         "4-jood.svg",
         "7-rustorg.svg",
         "3-medizina.svg",
         "10-geocentr.svg",
      ]
   ],
   [
      "asideTitle" => "Медицинское оборудование",
      "section" => "medical-equipment",
      "image" => "photo-5.png",
      "title" => "Делаем доступными передовые \n медицинские технологии ",
      "text" => "Повышаем качество медицинских услуг посредством лизинга медицинского оборудования для клиник, фармацевтической промышленности и исследовательских центров. \n\n Мы сотрудничаем с федеральной компанией MEDLIGA, которая является официальным дистрибьютором профессионального медицинского оборудования: Mindray, Canon, Pentax, General Electric, Samsung, Siemens, Olympus, Электрон, С.П. Гелпик, ЭМА .",
      "obtainingLeasing" => [
         "minAdvance" => 20,
         "maxLeasingPeriod" => 5,
         "minRedemptionPayment" => 1200,
      ],
      "requirementsLessees" => [
         [
            "title" => "Организационно-правовая форма",
            "text" => "ООО, ОАО, ПАО, ЗАО, ИП, бюджетные организации"
         ],
         [
            "title" => "Место основной деятельности",
            "text" => "Все регионы РФ"
         ],
         [
            "title" => "Срок деятельности лизингополучателя",
            "text" => 1
         ],
      ],
      "suppliers" => [
         "3-medizina.svg",
      ]
   ],
   [
      "asideTitle" => "Ресторанное оборудование",
      "section" => "restaurant-equipment",
      "image" => "photo-6.png",
      "title" => "Мишленовские звезды с нашим \n оборудованием — реальность",
      "text" => "Качественный сервис и вкусная еда начинается с технологичного ресторанного оборудования.  У нас можно взять \n в лизинг кухонные процессоры, пароконвектоматы, плиты, холодильные витрины и др. \n\n Нам поставляют оборудование надёжные партнёры, такие как FoodProm и РУСТорг.",
      "obtainingLeasing" => [
         "minAdvance" => 20,
         "maxLeasingPeriod" => 5,
         "minRedemptionPayment" => 1200,
      ],
      "requirementsLessees" => [
         [
            "title" => "Организационно-правовая форма",
            "text" => "ООО, ОАО, ПАО, ЗАО, ИП, бюджетные организации"
         ],
         [
            "title" => "Место основной деятельности",
            "text" => "Все регионы РФ"
         ],
         [
            "title" => "Срок деятельности лизингополучателя",
            "text" => 1
         ],
      ],
      "suppliers" => [
         "1-zoomlin.svg",
         "4-jood.svg",
         "7-rustorg.svg",
      ]
   ],
   [
      "asideTitle" => "Б/У продукция",
      "section" => "used-products",
      "image" => "photo-7.png",
      "title" => "Продлеваем срок действия \n качественных машин",
      "text" => "К поддержанной продукции, сдаваемой в лизинг, мы относим легковой и грузовой транспорт не старше 5 лет. \n\n У нас всё «прозрачно», ведь перед оформлением договора вы можете проверить документы и состояние продукции.\n Выгода лизинга  б/у транспорта составляет 40% перед лизингом аналогичных новых машин. \n\n Мы работаем только с проверенными поставщиками АГРО-Лидер и ГСИ , поэтому уверены в качестве продукции.",
      "obtainingLeasing" => [
         "minAdvance" => 20,
         "maxLeasingPeriod" => 5,
         "minRedemptionPayment" => 1200,
      ],
      "requirementsLessees" => [
         [
            "title" => "Организационно-правовая форма",
            "text" => "ООО, ОАО, ПАО, ЗАО, ИП, бюджетные организации"
         ],
         [
            "title" => "Место основной деятельности",
            "text" => "Все регионы РФ"
         ],
         [
            "title" => "Срок деятельности лизингополучателя",
            "text" => 1
         ],
      ],
      "suppliers" => [
         "1-zoomlin.svg",
         "4-jood.svg",
         "20-mezcentr.svg",
         "2-translift.svg",
         "8-pkuspt.svg",
         "9-UralSpecTrans.svg",
         "7-rustorg.svg",
         "6-agrodoc.svg",
         "10-geocentr.svg",
         "5-agrolider.svg",
         "11-LBR.svg",
      ]
   ],
   [
      "asideTitle" => "Недвижимость",
      "section" => "real-estate",
      "image" => "photo-8.png",
      "title" => "Выгодная альтернатива аренде — \n помещение станет вашим",
      "text" => "Компания А5 предоставляет большой спектр видов недвижимости: дома, квартиры. офисы, торговые площадки, склады и др. Можем подобрать любое помещение под ваш запрос. \n\n Вам нужно только выбрать помещение из нашего списка, мы передаём вам сведения комплексной экспертизы, менеджер А5  заключает договор лизинга и купли-продажи.",
      "obtainingLeasing" => [
         "minAdvance" => 30,
         "maxLeasingPeriod" => 5,
         "minRedemptionPayment" => 1200,
      ],
      "requirementsLessees" => [
         [
            "title" => "Организационно-правовая форма",
            "text" => "ООО, ОАО, ПАО, ЗАО, ИП, бюджетные организации"
         ],
         [
            "title" => "Место основной деятельности",
            "text" => "Все регионы РФ"
         ],
         [
            "title" => "Срок деятельности лизингополучателя",
            "text" => 1
         ],
      ],
      "suppliers" => []
   ],
];



$activeNavItem = isset($_GET['section']) ? $_GET['section'] : '';

// Функция для поиска данных по активной секции
function getProgramData($programLeasingData, $activeNavItem)
{
   foreach ($programLeasingData as $program) {
      if ($program['section'] === $activeNavItem) {
         return $program;
      }
   }
   return null;
}

$activeProgram = getProgramData($programLeasingData, $activeNavItem);
?>

<section class="grid_1-3-box container">
   <div class="program-leasing-page__navigation">
      <h3>Программы лизинга</h3>
      <div class="mobile__select">
         <div class="mobile__title js-open-select">
            <p></p>
            <svg class="rt0 js-svg-upend" width="14px" height="9px" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
               <use href="<?php echo SVG_PATH; ?>icons.svg#icon-arrow-down"></use>
            </svg>
         </div>
         <ul class="mobile__list-content">
            <?php foreach ($programLeasingData as $el) : ?>
               <li class="mobile__list-content--item">
                  <a href="?section=<?php echo $el['section'] ?>" class="<?php if ($activeNavItem === $el['section']) echo 'program__navigation--active'; ?>"> <?php echo $el['asideTitle'] ?> </a>
               </li>
            <?php endforeach; ?>
         </ul>
      </div>
   </div>

   <div class="program-leasing-page__content">
      <?php if ($activeProgram) : ?>
         <div class="program-leasing-page__image">
            <img src="<?php echo IMG_PATH . 'program-leasing-page/' . htmlspecialchars($activeProgram['image']); ?>" alt="">
         </div>
         <h3><?php echo htmlspecialchars($activeProgram['title']); ?></h3>
         <div>
            <p><?php echo nl2br(htmlspecialchars($activeProgram['text'])); ?></p>
         </div>
      <?php endif; ?>
   </div>
</section>

<section class="grid_1-3-box container obtaining-leasing">
   <?php if ($activeProgram) : ?>
      <div class="">
         <p class="p20px">
            Условия получения лизинга в выбранной нише:
         </p>
      </div>
      <div class="obtaining-leasing__content">
         <div class="obtaining-leasing__content--item">


            <h4>
               от <?php echo format($activeProgram['obtainingLeasing']['minAdvance'], "%"); ?>
            </h4>
            <p>Минимальный аванс</p>
         </div>
         <div class="obtaining-leasing__content--item">
            <h4>
               <?php echo dateFormat($activeProgram['obtainingLeasing']['maxLeasingPeriod']); ?>
            </h4>
            <p>Максимальный срок лизинга</p>
         </div>
         <div class="obtaining-leasing__content--item">
            <h4>
               <?php echo format($activeProgram['obtainingLeasing']['minRedemptionPayment']); ?>
            </h4>
            <p>Минимальный выкупной платёж</p>
         </div>
      </div>
   <?php endif; ?>
</section>

<section class="grid_1-3-box container requirements">
   <?php if ($activeProgram) : ?>
      <div class="requirements__title">
         <p class="p20px">
            Основные требования к лизингополучателям
         </p>
      </div>
      <ul class="mobile-row">
         <?php foreach ($activeProgram['requirementsLessees'] as $requirement) : ?>
            <li class="row w-50-box">
               <h4 class="w-50 row__title--small"><?php echo htmlspecialchars($requirement['title']); ?></h4>
               <p class="row__text--small w-50">
                  от <?php echo dateFormat($requirement['text'],true); ?>
               </p>
            </li>
         <?php endforeach; ?>
      </ul>
   <?php endif; ?>
</section>

<?php
include 'src/components/page/program-leasing/production/production.php';
?>
<section class="grid_1-3-box container mt-160px">
   <div class="program-leasing-calculator-title">
      <p class="p20px-big">
         Калькулятор лизинга
      </p>
      <p class="p20px">
         Укажите все параметры и получите точный расчет
      </p>
   </div>
   <div class="program-leasing-calculator">
      <?php

ini_set('display_errors', 1);  // Включение отображения ошибок
ini_set('display_startup_errors', 1); // Включение отображения ошибок запуска
error_reporting(E_ALL); // Сообщать обо всех ошибках
      include 'src/components/ui/calculator/calculator.php';
   
  
      include 'src/components/ui/calculator-result/calculator-result.php';
      ?>
   </div>
</section>

<?php
if (count($activeProgram['suppliers']) > 0) :
?>
   <section class="grid_1-3-box program-leasing__slider container mt-160px">
      <div>
         <p class="p20px-big">
            Поставщики
         </p>

      </div>
      <?php
      include 'src/assets/helpers/sliderCustom.php';

      if (count($activeProgram['suppliers']) > 3) :
         ob_start();
         foreach ($activeProgram['suppliers'] as $slide) : ?>
            <div class="slider__slide">
               <img class="slider__image" src="<?php echo SVG_PATH . 'custom-slider/' . (!empty($slide) ? htmlspecialchars($slide) : 'placeholder.png'); ?>" alt="logo">
            </div>
         <?php endforeach;
         $content = ob_get_clean();
         //ready
         sliderCustom($content, 3);
      else :
         ?>
         <div class="no-slider__slide-box">
            <?php if ($activeProgram) : ?>
               <?php foreach ($activeProgram['suppliers'] as $slide) : ?>
                  <div class="no-slider__slide">
                     <img class="slider__image" src="<?php echo SVG_PATH . 'custom-slider/' . (!empty($slide) ? htmlspecialchars($slide) : 'placeholder.png'); ?>" alt="logo">
                  </div>
               <?php endforeach; ?>
            <?php endif; ?>
         <?php endif; ?>
         </div>
   </section>
<?php endif; ?>