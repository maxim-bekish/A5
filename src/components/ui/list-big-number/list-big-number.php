<link rel="stylesheet" href="src/components/ui/list-big-number/list-big-number.css">

<?php

$simpleSolution = [

  [
    "title" => "Оставьте заявку в любое время",
    "text" => "Персональный менеджер А5 свяжется с вами в течение 3-х часов в будний день"
  ],
  [
    "title" => "Получите ответ на все интересующие вопросы",
    "text" => "Персональный менеджер А5 поможет подобрать объект недвижимости, если необходимо, ответит на возникшие вопросы"
  ],
  [
    "title" => "Оформление заявки на лизинг недвижимости",
    "text" => "Менеджер А5 оперативно подготовит нужные документы, поможет получить одобрение лизинговой сделки"
  ],
  [
    "title" => "Юридическое сопровождение сделки",
    "text" => "Вам не придётся тратить время и силы на переговоры и проверку документов. Кроме того, мы проверим надёжность продавца и объекта вашей будущей недвижимости"
  ],
  [
    "title" => "Получите вашу недвижимость! ",
    "text" => "С лизингом вы получаете не только ускоренную амортизацию объекта недвижимости, но и налоговые льготы — налог на имущество уплачивает А5!"
  ],

]
?>




<ul class="list-big-number__list">
  <?php foreach ($simpleSolution as $index => $stage): ?>
    <li class="list-big-number__item">
      <h6 class="list-big-number__step"><?= $index + 1 ?></h6>
      <div class="list-big-number__content">
        <h5 class="list-big-number__title"><?= htmlspecialchars($stage['title'], ENT_QUOTES) ?></h5>
        <p class="list-big-number__description"><?= htmlspecialchars($stage['text'], ENT_QUOTES) ?></p>
      </div>
    </li>
  <?php endforeach; ?>
</ul>