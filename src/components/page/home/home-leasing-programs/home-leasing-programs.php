<link rel="stylesheet" href="src/components/page/home/home-leasing-programs/home-leasing-programs.css">
<script type="module" src="src/components/page/home/home-leasing-programs/home-leasing-programs.js"></script>




<?php
$listTitle = [
  [
    'title' => 'Легковой автотранспорт',
    'id' => 1,
    'content' => [
      'term' => '1 год',
      'prepaid' => 5,
      'info' => "Размер аванса коррелируется с суммой финансирования, предметом лизинга, объёмом поставок и экономическими показателями клиента\n\nЛегковые автомобили в лизинг для юридических лиц и индивидуальных предпринимателей\n\nПредприятия на упрощённой системе налогообложения могут получать от нас графики с выделенным НДС 5%",
      'link' => '/program-leasing?section=passenger-vehicles',
      'img' => '1-photo.jpg',
    ]
  ],
  [
    'title' => 'Грузовой автотранспорт и спецтехника',
    'id' => 2,
    'content' => [
      'term' => '2 года',
      'prepaid' => 5,
      'info' => "Размер аванса коррелируется с суммой финансирования, предметом лизинга, объёмом поставок и экономическими показателями клиента \n\n
      Можно взять в лизинг с А5 любую технику: дорожную, строительную, коммунальную, производственную, транспортную, грузовую, подъёмную, сельскохозяйственную – от любого производителя на индивидуальных условиях",
      'link' => '/program-leasing?section=freight-transport',
      'img' => '2-photo.jpg',
    ],
  ],
  [
    'title' => 'Оборудование',
    'id' => 3,
    'content' => [
      'term' => '4 лет',
      'prepaid' => 5,
      'info' => "Размер аванса коррелируется с суммой финансирования, предметом лизинга, объёмом поставок и экономическими показателями клиента\n\nДля тех, кто хочет легко и быстро на индивидуальных условиях модернизировать производство. Оформить в лизинг с А5 можно любое оборудование отечественного или импортного производства",
      'link' => '/program-leasing?section=equipment',
      'img' => '4-photo.jpg',
    ],
  ],

  [
    'title' => 'Возвратный лизинг',
    'id' => 4,
    'content' => [
      'term' => '1-5  лет',
      'prepaid' => 20,
      'info' => "Размер аванса коррелируется с суммой финансирования, предметом лизинга, объёмом поставок и экономическими показателями клиента\n\nПрограммы возвратного лизинга с А5 берегут оборотные средства вашей компании и минимизируют налоговые платежи",
      'link' => '/program-leasing?section=refusal-leasing',
      'img' => '6-photo.jpg',
    ],
  ],

  [
    'title' => 'Недвижимость',
    'id' => 5 ,
    'content' => [
      'term' => '1-5 лет',
      'prepaid' => 30,
      'info' => 'С лизинговой компанией А5 вы сможете подобрать любую недвижимость под ваши запросы на индивидуальных условиях ',
      'link' => '/program-leasing?section=real-estate',
      'img' => '8-photo.jpg',
    ],
  ],
];
?>
<section class="leasing-programs mt-160px container">
  <div id="js-leasing-programs" class="leasing-programs__content grid_1-3-box">
    <div class="mobile__select  leasing-programs__select">
      <h3 class="leasing-programs__title title-page-h3">Программы лизинга</h3>
      <div class="mobile__title js-open-select">
        <p> </p>
        <svg class="rt0 js-svg-upend" width="14px" height="9px" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
          <use href="<?php echo SVG_PATH; ?>icons.svg#icon-arrow-down"></use>
        </svg>
      </div>
      <ul id="js-leasing-ul" class="leasing-programs__list mobile__list-content">
        <?php $index = 0; ?>
        <?php foreach ($listTitle as $el) : ?>
          <li id="<?php echo htmlspecialchars($el['id']); ?>" data-index="<?php echo $index; ?>" class="mobile__list-content--item">
            <p class="leasing-programs__list-item jsListItemProgram <?php echo $index === 0 ? 'leasing-programs__list-item--active' : ''; ?>">
              <?php echo htmlspecialchars($el['title']); ?>
            </p>
          </li>
          <?php $index++; ?>
        <?php endforeach; ?>
      </ul>
    </div>
    <div class="leasing-programs__details">
      <div class='leasing-programs__content-wrapper'>
        <div class="leasing-programs__item-info-wrapper">
          <div class="leasing-programs__item-info">
            <div class="leasing-programs__title-wrapper">
              <h4 id="js-leasing-term" class="leasing-programs__term"></h4>
              <p>Срок лизинга</p>
            </div>

            <p class="leasing-programs__content-wrapper__text">
              График платежей настраивается индивидуально и зависит от особенностей бизнеса.
            </p>

          </div>

          <div class="leasing-programs__item-info">
            <div class="leasing-programs__title-wrapper">
              <h4 id="js-leasing-prepaid" class="leasing-programs__prepaid"></h4>
              <p>Аванс по договору</p>
            </div>

            <p>
              Размер аванса коррелируется с суммой финансирования, предметом лизинга, объёмом поставок и
              экономическими показателями клиента.
            </p>


            <p id="js-leasing-info"></p>

          </div>
        </div>
        <div class="leasing-programs__img-wrapper leasing-programs__img-wrapper--mobile">
          <img class="js-leasing-img" src="" alt="auto">
        </div>
        <div class="leasing-programs__button-wrapper">
          <a id="js-leasing-link" href="" rel="noopener noreferrer">
            <button class="button button--white">Подробнее</button>
          </a>
        </div>
      </div>
      <div class="leasing-programs__img-wrapper">
        <img class="js-leasing-img" src="" alt="auto">
      </div>
    </div>
  </div>
</section>

<script>
  const listTitle = <?php echo json_encode($listTitle); ?>;
</script>