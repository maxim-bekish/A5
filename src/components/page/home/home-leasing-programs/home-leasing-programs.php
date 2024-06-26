<link rel="stylesheet" href="/src/components/page/home/home-leasing-programs/home-leasing-programs.css">



<?php
$listTitle = [
   [
      'title' => 'Легковой автотранспорт',
      'id' => 1,
      'content' => [
         'term' => '1 год',
         'prepaid' => 'от 5%',
         'info' => 'Легковые автомобили в лизинг для юридических лиц и ИП.',
         'link' => '/program-leasing?section=passenger-vehicles',
         'img' => '1-photo.jpg',
      ]
   ],
   [
      'title' => 'Грузовой автотранспорт',
      'id' => 2,
      'content' => [
         'term' => '2 лет',
         'prepaid' => 'от 5%',
         'info' => 'Легковые автомобили в лизинг для юридических лиц и ИП.',
         'link' => '/program-leasing?section=freight-transport',
         'img' => '2-photo.jpg',
      ],
   ],
   [
      'title' => 'Спецтехника',
      'id' => 3,
      'content' => [
         'term' => '3 лет',
         'prepaid' => 'от 5%',
         'info' => 'Легковые автомобили в лизинг для юридических лиц и ИП.',
         'link' => '/program-leasing?section=special-equipment',
         'img' => '3-photo.jpg',
      ],
   ],
   [
      'title' => 'Оборудование',
      'id' => 4,
      'content' => [
         'term' => '4 лет',
         'prepaid' => 'от 5%',
         'info' => 'Легковые автомобили в лизинг для юридических лиц и ИП.',
         'link' => '/program-leasing?section=equipment',
         'img' => '4-photo.jpg',
      ],
   ],
   [
      'title' => 'Медицинское оборудование',
      'id' => 5,
      'content' => [
         'term' => '12-60 мес',
         'prepaid' => 'от 20%',
         'info' => 'Медицинское оборудование в лизинг — лёгкий способ усовершенствования оказываемых услуг.',
         'link' => '/program-leasing?section=medical-equipment',
         'img' => '5-photo.jpg',
      ],
   ],
   [
      'title' => 'Ресторанное оборудование',
      'id' => 6,
      'content' => [
         'term' => '6 лет',
         'prepaid' => 'от 5%',
         'info' => 'Легковые автомобили в лизинг для юридических лиц и ИП.',
         'link' => '/program-leasing?section=restaurant-equipment',
         'img' => '6-photo.jpg',
      ],
   ],
   [
      'title' => 'Б/У продукция',
      'id' => 7,
      'content' => [
         'term' => '7 лет',
         'prepaid' => 'от 5%',
         'info' => 'Легковые автомобили в лизинг для юридических лиц и ИП.',
         'link' => '/program-leasing?section=used-products',
         'img' => '7-photo.jpg',
      ],
   ],
   [
      'title' => 'Недвижимость',
      'id' => 8,
      'content' => [
         'term' => '8 лет',
         'prepaid' => 'от 5%',
         'info' => 'Легковые автомобили в лизинг для юридических лиц и ИП.',
         'link' => '/program-leasing?section=real-estate',
         'img' => '8-photo.jpg',
      ],
   ],
]
?>
<section class="leasing-programs mt-160px container">
   <h3 class="leasing-programs__title title-page-h3">Программы лизинга</h3>
   <div id="js-leasing-programs" class="leasing-programs__content grid_1-3-box">
      <div class="mobile__select">
         <div class="mobile__title">
            <p> </p>
            <button class="js-open-select  mobile__list-header" type="button">
               <svg class="rt0 js-svg-upend" width="14px" height="9px" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <use href="<?php echo SVG_PATH; ?>icons.svg#icon-arrow-down"></use>
               </svg>
            </button>
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
            <div class="leasing-programs__title-wrapper">
               <h4 id="js-leasing-term" class="leasing-programs__term">
                  <!-- listTitle[0]content.term -->
               </h4>
               <p>Срок лизинга</p>
            </div>
            <div>
               <p class="leasing-programs__content-wrapper__text">
                  График платежей настраивается индивидуально и зависит от особенностей бизнеса.
               </p>
            </div>
            <div class="leasing-programs__title-wrapper">
               <h4 id="js-leasing-prepaid" class="leasing-programs__prepaid">
                  <!-- listTitle[0]content.prepaid -->
               </h4>
               <p>Аванс по договору</p>
            </div>
            <div>
               <p>
                  Размер аванса коррелируется с суммой финансирования, предметом лизинга, объёмом поставок и
                  экономическими показателями клиента.
               </p>
            </div>
            <div>
               <p id="js-leasing-info">
                  <!-- listTitle[0]content.info -->
               </p>
            </div>
            <div class="leasing-programs__img-wrapper leasing-programs__img-wrapper--mobile">
               <!-- listTitle[0]content.img -->
               <img class="js-leasing-img" src="" alt="auto">
            </div>
            <div class="leasing-programs__button-wrapper">
               <!-- listTitle[0]content.link -->
               <a id="js-leasing-link" href="" rel="noopener noreferrer">
                  <button class="button button--white">
                     Подробнее
                  </button>
               </a>
            </div>
         </div>
         <div class="leasing-programs__img-wrapper">
            <!-- listTitle[0]content.img -->
            <img class="js-leasing-img" src="" alt="auto">
         </div>
      </div>
   </div>
</section>



<script>
   $(document).ready(function() {
      const listTitle = <?php echo json_encode($listTitle); ?>;

      const items = $('#js-leasing-ul li');
      const listBox = $('#js-leasing-ul');
      const termElem = $('#js-leasing-term');
      const prepaidElem = $('#js-leasing-prepaid');
      const infoElem = $('#js-leasing-info');
      const linkElem = $('#js-leasing-link');
      const imgElem = $('.js-leasing-img');
      const titleP = $('.mobile__title p');

      items.each(function() {
         $(this).on('click', function() {
            items.find('p').removeClass('leasing-programs__list-item--active');
            const index = $(this).data('index');
            const content = listTitle[index]['content'];
            termElem.text(content['term']);
            prepaidElem.text(content['prepaid']);
            infoElem.text(content['info']);
            linkElem.attr('href', content['link']);
            imgElem.attr('src', '/src/assets/images/img/leasing-programs/' + content['img']);

            $(this).find('p').addClass('leasing-programs__list-item--active');
         });
      });

      // Установим начальные значения для первого элемента
      const initialContent = listTitle[0]['content'];
      titleP.text(listTitle[0]['title']);
      termElem.text(initialContent['term']);
      prepaidElem.text(initialContent['prepaid']);
      infoElem.text(initialContent['info']);
      linkElem.attr('href', initialContent['link']);
      imgElem.attr('src', '/src/assets/images/img/leasing-programs/' + initialContent['img']);
   });
</script>