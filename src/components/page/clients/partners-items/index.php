<?php
$clientsPartnersItems = [
   [
      "image" => "1-pесо.svg",
      "alt" => "1-pесо",
   ],
   [
      "image" => "2-ingostrah.svg",
      "alt" => "2-ingostrah",
   ],
   [
      "image" => "3-jurgia.svg",
      "alt" => "3-jurgia",
   ],
   [
      "image" => "4-sogaz.svg",
      "alt" => "4-sogaz",
   ],
   [
      "image" => "5-energotrant.svg",
      "alt" => "5-energotrant",
   ],
   [
      "image" => "6-BSK.svg",
      "alt" => "6-BSK",
   ],
   [
      "image" => "7-alfa.svg",
      "alt" => "7-alfa",
   ],
   [
      "image" => "8-gorsi.svg",
      "alt" => "8-gorsi",
   ],
];
?>

<section class="partners-items container mt-160px">
   <div class="partners-items__title">
      <p>Партнеры</p>
   </div>
   <div class="partners-items__img">
      <?php foreach ($clientsPartnersItems as $slide): ?>
         <div>
            <img class="slider__image"
               src="<?php echo SVG_PATH . 'clients.partners-items/' . htmlspecialchars($slide['image']); ?>"
               alt="<?php echo htmlspecialchars($slide['alt']); ?>">
         </div>
      <?php endforeach; ?>
   </div>
</section>

<style>
   .partners-items {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      grid-template-rows: 1fr;
      grid-column-gap: 40px;
      grid-row-gap: 0px;
   }

   .partners-items__img>div {
      display: flex;
      width: 410px;
      height: 410px;
      background: rgba(242, 242, 242, 1);
      align-items: center;
      justify-content: center;
   }

   .partners-items__img>div>img {
      object-fit: none;
   }

   .partners-items__title {
      grid-area: 1 / 1 / 2 / 2;
   }

   .partners-items__img {
      grid-area: 1 / 2 / 2 / 5;


      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-column-gap: 40px;
      grid-row-gap: 40px;

   }
</style>