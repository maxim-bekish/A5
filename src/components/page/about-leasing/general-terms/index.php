<?php
$conditions = [
   [
      "title" => "Аванс",
      "text" => "от 5 до 30%"
   ],
   [
      "title" => "Срок лизинга",
      "text" => "от 12 до 60 мес."
   ],
   [
      "title" => "График платежей",
      "text" => "гибкий график платежей с учетом сезонности"
   ],
   [
      "title" => "Количество документов",
      "text" => "от 3 документов"
   ],
   [
      "title" => "Организационно-правовая форма ",
      "text" => "ИП, Юридические лица"
   ],
];
?>

<section class="grid_1-3-box general-terms-conditions">
   <div class="grid_1-3_1 general-terms-conditions__title">
      <p>
         Условия финансирования
      </p>
   </div>
   <div class="grid_1-3_3">
      <?php foreach ($conditions as $el) : ?>
         <div class="general-terms-conditions__item">
            <p>
               <?php echo nl2br(htmlspecialchars($el['title'])); ?>
            </p>
            <p>
               <?php echo nl2br(htmlspecialchars($el['text'])); ?>
            </p>
         </div>
      <?php endforeach; ?>
   </div>
</section>

<style>
   .general-terms-conditions__title p {
      font-size: 20px;
      line-height: 28px;
   }

   .general-terms-conditions__item {
      padding: 35px 0;
      display: flex;
      border-top: 1px solid #979797;
   }

   .general-terms-conditions__item:last-child {
      border-bottom: 1px solid #979797;
   }

   .general-terms-conditions__item p {
      width: 50%;
   }

   .general-terms-conditions__item p:first-child {
      font-size: 24px;
      line-height: 24px;
      color: #0045B2;
   }
</style>