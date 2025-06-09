<link rel="stylesheet" href="src/components/page/clients/support-businesses/support-businesses.css">


<?php
require_once 'src/components/ui/card-docs/card-docs.php';
$listOne = [
  [
    "title" => "Лизингополучатель ",
    "label" => "Получатель государственной поддержки",
    "text" => "Программы нацелены на возмещение расходов лизингополучателя в рамках заключённого лизингового договора. В зависимости от программ, возмещаться может авансовый платёж, который оплачен лизингополучателем по договору, или сами лизинговые платежи. Свяжитесь с менеджером А5 и узнайте об этом больше"
  ],
  [
    "title" => "Лизинговая компания ",
    "label" => "Получатель государственной поддержки",
    "text" => "Программы предусматривают возмещение лизинговым компаниям скидки, предоставленной лизингополучателю, отражённую в лизинговом договоре. Лизингополучатель оплачивает сниженные лизинговые платежи, а лизинговая компания получает возмещение в соответствии с условиями программ гос. поддержки.
    \n \n
    Важно: получатель господдержки обязан выполнить все условия, прописанные в конкретной программе"
  ],
];
$listTwo = [
  [
    'title' => 'Реестр мер государственной поддержки',
    'link' => '/real/path/document1.pdf',
    'show' => true,
  ],
  [
    'title' => 'Информация о субсидиях юридическим лицам, индивидуальным предпринимателям, физическим лица',
    'link' => '/real/path/document1.pdf',
    'show' => true,
  ],
];
$listThree = [
  [
    'title' => 'Об утверждении порядка предоставления субсидии субъектам малого и среднего предпринимательства от 01 апреля 2008 года',
    'link' => '/real/path/document1.pdf',
    'show' => true,
  ],
  [
    'title' => 'Об утверждении порядков предоставления субсидий субъектам деятельности в сфере промышленности, управляющим компаниям индустриальных (промышленных) парков от 07 мая 2007 года ',
    'link' => '/real/path/document1.pdf',
    'show' => true,
  ]
];
?>


<section class="support-business">
  <section class="general-condition general-condition__banner">
    <div class="general-condition__banner-img">
      <img src="<?php echo IMG_PATH; ?>banner-clients-1.png" alt="">
    </div>
    <div class="general-condition__banner-heading">
      <h3>
        Государственная <br> поддержка с А5
      </h3>
    </div>
  </section>

  <section class="state-support-card">
    <h4 class="support-business__title mb-50px">В лизинге существуют два типа государственной поддержки. Они зависят от того, кто хочет её получить
    </h4>
    <ol class="support-cards">
      <?php foreach ($listOne as $index => $item): ?>
        <li class="support-card">
          <span class="support-card__number"><?= $index + 1 ?></span>
          <div class="support-card__content">
            <div class="support-card__recipient">
              <p class="support-card__label"><?= htmlspecialchars($item['label'], ENT_QUOTES) ?></p>
              <h3 class="support-card__title"><?= htmlspecialchars($item['title'], ENT_QUOTES) ?></h3>
            </div>
            <p class="support-card__text"><?= htmlspecialchars($item['text'], ENT_QUOTES) ?></p>
          </div>
        </li>
      <?php endforeach; ?>
    </ol>




  </section>
</section>

<section class="support-business__docs mt-100px">
  <h5 class="support-business__docs-title mb-50px">Обязательно ознакомьтесь с информацией и условиями актуальных программ поддержки, действующие в вашем регионе, а также с программами, подходящими вашей сфере бизнеса, не ограничиваясь предложенными ссылками ниже</h5>
  <?php
  echo generateDynamicCardDocs($listTwo);
  ?>
</section>
<section>
  
</section>
<section class="support-business__docs mt-100px">
  <h4 class="support-business__title mb-50px">Информация о мерах государственной поддержки для предпринимателей Тюменской области</h4>
  <?php
  echo generateDynamicCardDocs($listThree);
  ?>
</section>


