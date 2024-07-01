<link rel="stylesheet" href="src/components/page/clients/leasing-guide/leasing-guide.css">

<script src="src/components/page/clients/leasing-guide/leasing-guide.js"></script>

<?php
$leasingGuide = [
   [
      'title' => 'Структура сделки',
      'content' => [
         [
            'title' => 'Структура сделки (текс)',
            'text' => null
         ],
         [
            'title' => 'Нужен ли залог при заключении договора лизинга?',
            'text' => 'текст 1'
         ],
         [
            'title' => 'title  3',
            'text' => null
         ],
         [
            'title' => 'Могу ли я оформить лизинг, если у меня уже есть кредит?',
            'text' => null
         ],
         [
            'title' => 'Меня не устраивает тариф, который вы предлагаете',
            'text' => null
         ]
      ]
   ],
   [
      'title' => 'Оформление',
      'content' => [
         [
            'title' => 'Оформление (текс)',
            'text' => null
         ],
         [
            'title' => 'Нужен ли залог при заключении договора лизинга?',
            'text' => 'текст 2'
         ],
         [
            'title' => 'title  3',
            'text' => null
         ],
         [
            'title' => 'Могу ли я оформить лизинг, если у меня уже есть кредит?',
            'text' => null
         ],
         [
            'title' => 'Меня не устраивает тариф, который вы предлагаете',
            'text' => null
         ]
      ]
   ],
   [
      'title' => 'Для физ. лиц',
      'content' => [
         [
            'title' => 'Для физ. лиц (текс)',
            'text' => null
         ],
         [
            'title' => 'Нужен ли залог при заключении договора лизинга?',
            'text' => 'текст 2'
         ],
         [
            'title' => 'title  3',
            'text' => null
         ],
         [
            'title' => 'Могу ли я оформить лизинг, если у меня уже есть кредит?',
            'text' => null
         ],
         [
            'title' => 'Меня не устраивает тариф, который вы предлагаете',
            'text' => null
         ]
      ]
   ],
   [
      'title' => 'Выгода лизинга',
      'content' => [
         [
            'title' => 'Выгода лизинга (текс)',
            'text' => null
         ],
         [
            'title' => 'Нужен ли залог при заключении договора лизинга?',
            'text' => 'текст 2'
         ],
         [
            'title' => 'title  3',
            'text' => null
         ],
         [
            'title' => 'Могу ли я оформить лизинг, если у меня уже есть кредит?',
            'text' => null
         ],
         [
            'title' => 'Меня не устраивает тариф, который вы предлагаете',
            'text' => null
         ]
      ]
   ],
   [
      'title' => 'Правила пользования',
      'content' => [
         [
            'title' => 'Правила пользования (текс)',
            'text' => null
         ],
         [
            'title' => 'Нужен ли залог при заключении договора лизинга?',
            'text' => 'текст 2'
         ],
         [
            'title' => 'title  3',
            'text' => null
         ],
         [
            'title' => 'Могу ли я оформить лизинг, если у меня уже есть кредит?',
            'text' => null
         ],
         [
            'title' => 'Меня не устраивает тариф, который вы предлагаете',
            'text' => null
         ]
      ]
   ],
]
?>

<section class="leasing-guide">
   <div class="mobile__select">
      <div class="mobile__title js-open-select ">
         <p></p>
         <button class="mobile__list-header" type="button">
            <svg class="rt0 js-svg-upend" width="14px" height="9px" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
               <use href="<?php echo SVG_PATH; ?>icons.svg#icon-arrow-down"></use>
            </svg>
         </button>
      </div>
      <ul class="leasing-guide__buttons mobile__list-content">
         <?php foreach ($leasingGuide as $index => $el) : ?>
            <li class="leasing-guide__buttons--item mobile__list-content--item">
               <button class="button button--outline leasing-guide__button <?php echo $index === 0 ? 'leasing-guide__button-active' : ''; ?>" data-index="<?php echo $index; ?>">
                  <?php echo htmlspecialchars($el['title']); ?>
               </button>
            </li>
         <?php endforeach; ?>
      </ul>
   </div>
   <div class="leasing-guide__list-box">
   <?php foreach ($leasingGuide as $index => $el) : ?>
      <div class="leasing-guide__list">
         <?php foreach ($el['content'] as $content) : ?>
            <div class="leasing-guide__item" data-index="<?php echo $index; ?>" style="<?php echo $index === 0 ? 'display: block;' : 'display: none;'; ?>">
               
               <div class="leasing-guide__list-title">
                  <h4><?php echo htmlspecialchars($content['title']); ?></h4>
                  <button type="button" class="leasing-guide__icon-down">
                     <svg class="js-svg-upend rt0" width="32" height="18" viewBox="0 0 32 18" fill="none">
                        <use href="<?php echo SVG_PATH; ?>icons.svg#icon-arrow-down-big"></use>
                     </svg>
                  </button>
               </div>
               <?php if ($content['text']) : ?>
                  <p class="leasing-guide__text"><?php echo htmlspecialchars($content['text']); ?></p>
               <?php endif; ?>

            </div>
         <?php endforeach; ?>
      </div>
   <?php endforeach; ?>
   </div>
</section>