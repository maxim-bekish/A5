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
   <div class="leasing-guide__buttons">
      <?php foreach ($leasingGuide as $index => $el) : ?>
         <button class="button button--outline <?php echo $index === 0 ? 'leasing-guide__button-active' : ''; ?>" data-index="<?php echo $index; ?>">
            <?php echo htmlspecialchars($el['title']); ?>
         </button>
      <?php endforeach; ?>
   </div>
   <?php foreach ($leasingGuide as $index => $el) : ?>
      <div class="leasing-guide__list">
         <?php foreach ($el['content'] as $content) : ?>
            <div class="leasing-guide__item" data-index="<?php echo $index; ?>" style="<?php echo $index === 0 ? 'display: block;' : 'display: none;'; ?>">

               <div class="leasing-guide__list-title">
                  <h4><?php echo htmlspecialchars($content['title']); ?></h4>
                  <svg class="leasing-guide__icon-down rt0" width="32" height="18" viewBox="0 0 32 18" fill="none">
                     <use href="<?php echo SVG_PATH; ?>icons.svg#icon-arrow-down-big"></use>
                  </svg>
               </div>
               <?php if ($content['text']) : ?>
                  <p class="leasing-guide__text"><?php echo htmlspecialchars($content['text']); ?></p>
               <?php endif; ?>

            </div>
         <?php endforeach; ?>
      </div>
   <?php endforeach; ?>
</section>

<script>
   document.addEventListener('DOMContentLoaded', function() {
      const buttons = document.querySelectorAll('.leasing-guide__buttons .button');
      const items = document.querySelectorAll('.leasing-guide__list .leasing-guide__item');

      buttons.forEach(button => {
         button.addEventListener('click', function() {
            const index = this.getAttribute('data-index');

            buttons.forEach(btn => btn.classList.remove('leasing-guide__button-active'));
            this.classList.add('leasing-guide__button-active');

            items.forEach(item => {
               item.style.display = item.getAttribute('data-index') === index ? 'block' : 'none';
            });
         });
      });
   });
</script>
<style>
   .leasing-guide__list-title h4 {
      font-size: 24px;
      line-height: 24px;
      color: #0045B2;
      max-width: 900px;
   }

   .leasing-guide__text {
      max-height: 0;
      transition: all 0.3s ease;
      opacity: 0;
      margin-top: 0px;
   }

   .leasing-guide__text.open {
      margin-top: 30px;
      transition: all 0.3s ease;
      max-height: 500px;
      max-width: 900px;
      /* Подберите значение в зависимости от вашего контента */
      opacity: 1;
      overflow: hidden;
   }

   .leasing-guide__button-active {
      background-color: rgba(0, 63, 162, 1);
      color: white;

   }

   .leasing-guide__item {
      padding: 30px 38px 30px 0px;
      border-top: 1px solid #979797;
   }

   .leasing-guide__item:last-child {
      border-bottom: 1px solid #979797;
   }

   .leasing-guide__buttons {
      display: flex;
      gap: 20px;
      margin-bottom: 40px;
   }

   .leasing-guide__buttons button {
      max-width: 191px;
      height: 45px;
      font-size: 16px;
      font-weight: 500;
      line-height: 19.36px;
      padding: 0;
   }

   .leasing-guide__list-title {
      display: flex;
      align-items: center;

      justify-content: space-between;
   }
</style>

<script>
   $(document).ready(function() {
      $('.leasing-guide__icon-down').click(function() {
         $(this).toggleClass('rt180');
         $(this).closest('.leasing-guide__list-title').next('.leasing-guide__text').toggleClass('open');
      });
   });
</script>