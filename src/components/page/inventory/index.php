<?php
require 'src\assets\helpers\format.php';


$slides = [
   [
      "name" => "Автобус ПАЗ Vector NEXT 320415-04",
      "priceMonth" => "220000",
      "price" => "4300000",
      "href" => '#',
      "image" => 'bus.png',
   ],
   [
      "name" => "Chery Tiggo 7 Pro 1.5 CVT",
      "priceMonth" => "127636",
      "price" => "1890000",
      "href" => '#',
      "image" => 'redAuto.png',
   ],
   [
      "name" => "Автобус ПАЗ Vector NEXT 320435-04",
      "priceMonth" => "127636",
      "price" => "5060000",
      "href" => '#',
      "image" => 'tr.png',
   ],
   [
      "name" => "Сушильная камера для древесины",
      "priceMonth" => "127636",
      "price" => "3290000",
      "href" => '#',
      "image" => 'tr.png',
   ],
];
?>

<link rel="stylesheet" href="src\components\page\inventory\index.css">

<section class='grid_1-3-box inventory container'>
   <div class="grid_1-3_1 inventory__header">
      <p class="inventory__title">
         Каталог изьятой техники
      </p>
   </div>
   <div class="grid_1-3_3 inventory__content">
      <?php foreach ($slides as $slide) : ?>
         <a href="<?php echo htmlspecialchars($slide['href']); ?>">
            <div class="inventory__content--item--img">
               <img class="slider__image" src="<?php echo IMG_PATH . 'inventory/' . htmlspecialchars($slide['image']); ?>" alt="img">
            </div>
            <p class="slider__text"></p>
            <div class="inventory__content--item--text">
               <p>
                  <?php echo nl2br(htmlspecialchars($slide['name'])); ?>
               </p>
               <p>
                  от <?php echo formatNumber($slide['priceMonth']); ?> ₽/мес.
               </p>
               <p>
                  стоимость: от <?php echo formatNumber($slide['price']); ?> ₽
               </p>
            </div>
         </a>
      <?php endforeach; ?>
   </div>
</section>