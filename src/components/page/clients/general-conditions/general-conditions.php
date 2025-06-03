<link rel="stylesheet" href="src/components/page/clients/general-conditions/general-conditions.css">

<?php
$financing = [
  [
    "title" => "Аванс",
    "description" => "от 5 до 30%",
  ],
  [
    "title" => "Срок лизинга",
    "description" => "от 12 до 60 мес.",
  ],
  [
    "title" => "График платежей",
    "description" => "гибкий график платежей с учетом сезонности",
  ],
  [
    "title" => "Количество документов",
    "description" => "от 3 документов",
  ],
  [
    "title" => "Организационно-правовая форма ",
    "description" => "ИП, Юридические лица",
  ],
];
$list = [
  ['subTitle' =>  "Лизинговая компания А5 учитывает сезонность вашего бизнеса при формирования графика платежей: можем предложить любой график с учётом нужной вам нагрузки"],
  ['subTitle' =>  "Работаем в ЭДО — все процессы онлайн в любое удобное для вас время, главное, чтобы был интернет!"],
  ['subTitle' => "Гибкие условия: в А5 всегда готовы к переговорам"],
  ['subTitle' =>  "Предлагаем графики с НДС 20% и 5%. Большинство лизинговых компаний, если поставщик предмета лизинга находится на УСНО и назначает 20% НДС, А5 — только 5%, что значительно удешевит график платежей. Свяжитесь с вашим менеджером и узнайте, как это работает"],
  ['subTitle' =>  "Курс на развитие вашего бизнеса: задача А5 — развивать бизнес клиентов в долгосрочной перспективе. Не всегда планы соответствуют ожиданиям, но А5 всегда занимает позицию клиентов для сохранения партнёрских отношений"],
];
$listTwo =  [
  [
    "title" => "Экономия средств",
    "subTitle" => "Меньшие первоначальные затраты",
    "text" => "не нужна большая предоплата, оплачивается небольшая сумма в начале, затем — регулярные лизинговые платежи"
  ],
  [
    "title" => "Гибкость условий",
    "subTitle" => "Подбор индивидуального плана",
    "text" => "выбрайте оптимальный срок лизинга и условия платежей, которые подходят вашей компании"
  ],
  [
    "title" => "Учёт налогов",
    "subTitle" => "Лизинговые платежи учитываются как расходы",
    "text" => "это снижает налогооблагаемую базу вашей компании"
  ],
  [
    "title" => "Удобство обслуживания",
    "subTitle" => null,
    "text" => "Речь не только о том, что все процессы будут осуществляться онлайн — у А5 большая география поставок техники, транспорта и оборудования, если вы не можете найти подходящее, воспользуйтесь услугой подбора предмета лизинга"
  ],
  [
    "title" => "Государственные субсидии",
    "subTitle" => null,
    "text" => "А5 предоставляет своим клиентам актуальные государственные субсидии и скидки от партнёров, доступные при оформлении договора лизинга"
  ],
  [
    "title" => "Надёжность поставщиков",
    "subTitle" => null,
    "text" => "А5 сотрудничает только с надёжными поставщиками техники, транспорта, оборудования и гарантирует юридическую чистоту каждой сделки и корректность всех документов"
  ],
  [
    "title" => "Обновление оборудования",
    "subTitle" => null,
    "text" => "Лизинг позволяет регулярно обновлять оборудование, способствуя повышению эффективности работы и развитию бизнеса"
  ],
  [
    "title" => "Упрощение финансового планирования",
    "subTitle" => null,
    "text" => "Фиксированные платежи. Зная сумму лизинговых платежей заранее, вы можете легче планировать бюджет своей компании"
  ]
];
?>

<section class="general-condition general-condition__banner">
  <div class="general-condition__banner-img">
    <img src="<?php echo IMG_PATH; ?>banner-clients-1.png" alt="">
  </div>


  <div class="general-condition__banner-heading">
    <h3>
      Абсолютный лизинг в гибкими условиями и большими возможностями
    </h3>
  </div>

</section>

<section class="general-condition general-condition__list mt-100px">

  <?php
  require_once 'src/components/ui/corner-list/corner-list.php';
  echo generateCornerList($list, 'col-3')
  ?>

</section>

<section class="general-condition general-condition__financing mt-100px">
  <div class='general-condition__title'>
    <h4>Условия финансирования</h4>
  </div>
  <ul>
    <?php foreach ($financing as $item): ?>
      <li class="row w-50-box">
        <h6 class="row__title w-50"><?php echo $item['title']; ?></h6>
        <p class="row__text w-50"><?php echo $item['description']; ?></p>
      </li>
    <?php endforeach; ?>
  </ul>
</section>

<section class="general-condition general-condition__list-big mt-100px">
  <div class='general-condition__title'>
    <div class='general-condition__title-left'>
      <h4>Лизинг с А5 – это просто!</h4>
    </div>
    <div class="general-condition__title-right">
      <button class="button button--blue general-condition__financing-button" type="button">Хочу бесплатную консультацию! </button>
    </div>
  </div>

  <?php
  include 'src/components/ui/list-big-number/list-big-number.php';
  ?>
</section>

<section class="general-condition general-condition__calculator mt-100px">
  <div class='general-condition__title'>
    <div class='general-condition__title-left'>
      <h4>Лизинговый калькулятор</h4>
      <p>Укажите все параметры и получите точный расчет</p>
    </div>
  </div>
  <div class='leasing-calculator__box--content'>
    <?php
    include 'src/components/ui/calculator/calculator.php';
    include 'src/components/ui/calculator-result/calculator-result.php';
    ?>
  </div>
</section>

<section class="general-condition general-condition__advantages  mt-100px">
  <div class='general-condition__title'>
    <h4>Преимущества лизинга</h4>
  </div>
  <?php
  require_once 'src/components/ui/corner-list/corner-list.php';
  echo generateCornerList($listTwo, 'col-3')
  ?>
</section>
