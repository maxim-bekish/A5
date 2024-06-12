<?php

$listTitle = [
   (object) ['title' => 'Легковой автотранспорт', 'link' => '#', 'id' => 1],
   (object) ['title' => 'Грузовой автотранспорт', 'link' => '#', 'id' => 2],
   (object) ['title' => 'Спецтехника', 'link' => '#', 'id' => 3],
   (object) ['title' => 'Оборудование', 'link' => '#', 'id' => 4],
   (object) ['title' => 'Медицинское оборудование', 'link' => '#', 'id' => 5],
   (object) ['title' => 'Ресторанное оборудование', 'link' => '#', 'id' => 6],
   (object) ['title' => 'Б/У продукция', 'link' => '#', 'id' => 7],
   (object) ['title' => 'Недвижимость', 'link' => '#', 'id' => 8],
];


?>


<section class="leasing-programs mt-160px container">
   <h3 class="leasing-programs__title title-page-h3">Программы лизинга</h3>
   <div id="js-leasing-programs" class="leasing-programs__content">
      <ul id="js-leasing-ul" class="leasing-programs__list">
         <!-- звгрузка данных в js -->
      </ul>
      <div class="leasing-programs__mobile-select">
         <div class="leasing-programs__mobile-title">
            <p></p>
            <button class="leasing-programs__list-header" type="button">
               <svg class="leasing-programs__icon-rt180" width="14px" height="9px" viewBox="0 0 14 9" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <use href="<?php echo SVG_PATH; ?>icons.svg#icon-arrow-down"></use>
               </svg>
            </button>
         </div>
         <ul class="leasing-programs__list-mobile">
            <?php foreach ($listTitle as $index => $item): ?>
               <li>
                  <p id="<?php echo ($item->id); ?>"
                     class="leasing-programs__list-item jsListItemProgram <?php echo $index === 0 ? 'leasing-programs__list-item--active' : ''; ?>">
                     <?php echo htmlspecialchars($item->title); ?>
                  </p>
               </li>
            <?php endforeach; ?>
         </ul>
      </div>
      <div class="leasing-programs__details">
         <div class='leasing-programs__content-wrapper'>
            <div class="leasing-programs__row">
               <div class="leasing-programs__title-wrapper">
                  <h4 id="js-leasing-term" class="leasing-programs__term">
                     <!--1 — 5 лет-->
                  </h4>
                  <p>Срок лизинга</p>
               </div>
               <p>
                  График платежей настраивается индивидуально и зависит от особенностей бизнеса.
               </p>
            </div>
            <div class="leasing-programs__row">
               <div class="leasing-programs__title-wrapper">
                  <h4 id="js-leasing-prepaid" class="leasing-programs__prepaid">
                     <!--от 5%-->
                  </h4>
                  <p>Аванс по договору</p>
               </div>
               <p>
                  Размер аванса коррелируется с суммой финансирования, предметом лизинга, объёмом поставок и
                  экономическими показателями клиента.
               </p>
               <p id="js-leasing-info">
                  <!--Легковые автомобили в лизинг для юридических лиц
                  и ИП.-->
               </p>
            </div>
            <div class="leasing-programs__button-wrapper">
               <a id="js-leasing-link" href="" target="_blank" rel="noopener noreferrer">
                  <button class="button button--white">
                     Подробнее
                  </button>
               </a>
            </div>
         </div>
         <div class="leasing-programs__img-wrapper">
            <img id="js-leasing-img" src="" alt="auto">
         </div>
      </div>
   </div>
</section>

<style>
   .leasing-programs {
      display: flex;
      flex-direction: column;
      gap: 60px;
   }

   .leasing-programs__content {
      display: flex;
      justify-content: space-between;
      position: relative;
   }

   .leasing-programs__list {
      height: 100%;
      display: flex;
      flex-direction: column;
      gap: 30px;
      padding-left: 20px;
      border-left: 1px solid var(--line-blue);
   }

   .leasing-programs__list-item {
      cursor: pointer;
      color: var(--text-gray-dark);
      font-family: var(--font-inter);
   }

   .leasing-programs__list-item:hover {
      color: var(--text-blue);

   }

   .leasing-programs__list-item--active {
      text-decoration: underline;
      color: var(--text-blue);
   }

   .leasing-programs__mobile-select {
      display: none;
   }

   .leasing-programs__mobile-title {
      display: flex;
      justify-content: space-between;
      align-items: center;
   }

   .leasing-programs__list-header {
      background: none;
      border: none;
      cursor: pointer;
   }

   .leasing-programs__icon-rt180 {
      transition: transform 0.3s;
   }

   .leasing-programs__icon-rt180.active {
      transform: rotate(180deg);
   }

   .leasing-programs__list-mobile {
      display: none;
      padding: 10px 10px 0 10px;

      /*flex-direction: column;*/
      width: 100%;
   }

   .leasing-programs__list-mobile li {
      margin-bottom: 20px;
   }

   .leasing-programs__details {
      max-height: 826px;
      max-width: 1310px;
      display: flex;
   }

   .leasing-programs__content-wrapper {
      max-width: 560px;
      background-color: var(--back-blue);
      padding: 50px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      gap: 70px;
   }

   .leasing-programs__row {
      display: flex;
      flex-direction: column;
      gap: 40px;
   }

   .leasing-programs__title-wrapper {
      display: flex;
      flex-direction: column;
   }

   .leasing-programs__term,
   .leasing-programs__prepaid {
      font-family: var(--font-inter);
      font-size: 40px;
      font-weight: 500;
      line-height: 48.4px;
      color: var(--white);
      margin-bottom: 10px;
   }

   .leasing-programs__title-wrapper p,
   .leasing-programs__row>p {
      font-family: var(--font-inter);
      font-size: 18px;
      font-weight: 400;
      line-height: 25.2px;
      color: var(--white);
   }

   .leasing-programs__button-wrapper {
      text-align: center;
   }

   .leasing-programs__img-wrapper img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center;
   }

   #js-leasing-info {
      min-height: 76px;
   }

   @media(max-width: 768px) {
      .leasing-programs__details {
         max-height: 636px;
         min-height: 636px;
         max-width: 100%;
      }

      .leasing-programs__mobile-select {
         position: absolute;
         display: block;
         border-radius: 2px;
         border: 1px solid gray;
         background: white;
         width: 94%;
         min-height: 45px;
         transform: translate(3%, -60px);
         margin: 0 auto;
      }

      .leasing-programs__list {
         display: none;
      }

      .leasing-programs__content {
         flex-direction: column;
         margin-top: 60px;
      }

      .leasing-programs__title {
         padding: 0 20px;
      }

      .leasing-programs__content-wrapper {
         padding: 40px 20px;
         gap: 30px;
      }

      .leasing-programs__row {
         gap: 30px;
      }

      .leasing-programs__term,
      .leasing-programs__prepaid {
         font-size: 30px;
         line-height: 36.3px;
      }

      .leasing-programs__row>p,
      .leasing-programs__title-wrapper p {
         font-size: 16px;
         line-height: 19.36px;
      }

      .leasing-programs__list-header {
         position: absolute;
         top: 15px;
         right: 10px;
         z-index: 99;
      }

      .leasing-programs__list-item--active,
      .leasing-programs__mobile-title p {
         text-decoration: none;
      }

      .leasing-programs__mobile-title p {
         color: var(--text-blue);
         padding: 10px;
         text-decoration: none;
      }
   }
</style>

<script>
   const listContent = [
      {
         title: 'Легковой автотранспорт',
         term: '1 — 5 лет',
         prepaid: 'от 5%',
         info: 'Легковые автомобили в лизинг для юридических лиц и ИП.',
         link: '#',
         img: '1-photo.jpg',
         id: 1
      },
      {
         title: 'Грузовой автотранспорт',
         term: '1 — 5 лет',
         prepaid: 'от 5%',
         info: 'Грузовой автотранспорт в лизинг под любые запросы бизнеса.',
         link: '#',
         img: '2-photo.jpg',
         id: 2
      },
      {
         title: 'Спецтехника',
         term: '1 — 5 лет',
         prepaid: 'от 5%',
         info: 'Спецтехника в лизинг поможет развить бизнес и расширить сферу влияния.',
         link: '#',
         img: '3-photo.jpg',
         id: 3
      },
      {
         title: 'Оборудование',
         term: '1 — 5 лет',
         prepaid: 'от 20%',
         info: 'Оборудование в лизинг — действенный способ модернизации производства.',
         link: '#',
         img: '4-photo.jpg',
         id: 4
      },
      {
         title: 'Медицинское оборудование',
         term: '12 — 60 мес',
         prepaid: 'от 20%',
         info: 'Медицинское оборудование в лизинг — лёгкий способ усовершенствования оказываемых услуг.',
         link: '#',
         img: '5-photo.jpg',
         id: 5
      },
      {
         title: 'Ресторанное оборудование',
         term: '1 — 5 лет',
         prepaid: 'от 20%',
         info: 'Ресторанное оборудование в лизинг ускорит производительность.',
         link: '#',
         img: '6-photo.jpg',
         id: 6
      },
      {
         title: 'Б/У продукция',
         term: '1 — 3 года',
         prepaid: 'от 20%',
         info: 'Автомобили и оборудование с пробегом до 5 лет в лизинг в хорошем состоянии, выгоднее на 30–40%, чем новые.',
         link: '#',
         img: '7-photo.jpg',
         id: 7
      },
      {
         title: 'Недвижимость',
         term: '1 — 5 лет',
         prepaid: 'от 30%',
         info: 'Недвижимость в лизинг поможет сэкономить на расширении бизнеса.',
         link: '#',
         img: '8-photo.jpg',
         id: 8
      },
   ];



   $(document).ready(function () {
      let ul = $('#js-leasing-ul')

      let activeItem = $('.leasing-programs__content .leasing-programs__list-item--active').attr('id');
      let term = $('#js-leasing-term')
      let prepaid = $(' #js-leasing-prepaid')
      let info = $(' #js-leasing-info')
      let link = $(' #js-leasing-link')
      let img = $(' #js-leasing-img')
      let titleMobile = $('.leasing-programs__mobile-title p')
      titleMobile.text($('.leasing-programs__list-item--active').html())

      listContent.forEach((el, index) => {
         let p = $('<p>');
         let li = $('<li>');
         p.addClass('leasing-programs__list-item jsListItemProgram')
         if (index === 0) {
            p.addClass('leasing-programs__list-item--active');
         }
         p.attr('id', el.id)
         p.text(el.title)
         li.append(p)
         ul.append(li)
      
         
      })
      $(".jsListItemProgram").click(function () {
         // Удаляем класс у всех блоков
         $(".jsListItemProgram").removeClass("leasing-programs__list-item--active");
         // Добавляем класс только к текущему блоку
         $(this).addClass("leasing-programs__list-item--active");
         activeItem = $(this).attr("id");
         xxx(activeItem);
      });

      $(".leasing-programs__mobile-title").click(function () {
         $(".leasing-programs__list-mobile").toggle();
         $(".leasing-programs__list-header").toggleClass('rt180');
         titleMobile.toggle();
      });

      $(".leasing-programs__list-mobile").click(function () {
         $(this).toggle();
         titleMobile.toggle();
         $(".leasing-programs__list-header").toggleClass('rt180');
         titleMobile.text($('.leasing-programs__list-item--active').html());
      });


      function xxx(leasing) {
         term.text(listContent[leasing - 1].term);
         prepaid.text(listContent[leasing - 1].prepaid);
         info.text(listContent[leasing - 1].info);
         link.attr('href', ` ${listContent[leasing - 1].link}`);

         img.attr('src', `src/assets/images/img/leasing-programs/${listContent[leasing - 1].img}`);
      }
      xxx(activeItem)


   });

</script>