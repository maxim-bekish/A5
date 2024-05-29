<link rel="stylesheet" href="/src/components/page/home/partners/index.css">
<section class="partners-box container">
   <div class="partners-content">
      <h3>
         Не нашли нужный вам продукт?
      </h3>
      <p>
         Мы сотрудничаем с более 1000 поставщиками в России, СНГ и странах ближнего востока. Подберём лизинговые условия
         индивидуально для вас
      </p>
      <div class="partners-box-time">
         <div>
            <p>25 минут</p>
            <p>на подбор продукта из нашей базы.</p>
         </div>
         <div>
            <p>До 2-ух дней</p>
            <p>занимает время на согласование условий предоставлений лизинга с поставщиком.</p>
         </div>
         <div>
            <p>В течение 2-ух дней</p>
            <p>будет заключён договор.</p>
         </div>
      </div>
      <button type="button" class="button button-blue">Подобрать</button>
   </div>
   <?php
   $slides = array(
      array(
         "image" => "zoomlin.svg",
         "alt" => "Zoomlin Logo"
      ),
      array(
         "image" => "translift.svg",
         "alt" => "Translift Logo"
      ),
      array(
         "image" => "medizina.svg",
         "alt" => "Medizina Logo"
      ),
      array(
         "image" => "jood.svg",
         "alt" => "Jood Logo"
      ),
      array(
         "image" => "agrolider.svg",
         "alt" => "Agrolider Logo"
      ),
      array(
         "image" => "agrodoc.svg",
         "alt" => "Agrodoc Logo"
      ),
      array(
         "image" => "rustorg.svg",
         "alt" => "Rustorg Logo"
      ),
      array(
         "image" => "pkuspt.svg",
         "alt" => "Pkuspt Logo"
      )
   );
   include 'src/components/ui/custom-slider/custom-slider.php';
   ?>

</section>
<script src="/src/components/page/home/partners/index.js"></script>