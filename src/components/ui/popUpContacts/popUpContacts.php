<link rel="stylesheet" href="/src/components/ui/popUpContacts/popUpContacts.css">
<script src="/src/components/ui/popUpContacts/popUpContacts.js"></script>
<?php
$state = [
   (object) [
      'state' => 'Тюмень',
      'phone' => '7 (3452) 59-50-69',
      'address' => 'Тюмень, ул. Грибоедова, дом 6, корпус 1/7, офис 3/28',
      'timeWork' => '9:00 — 18:00',
      'email' => 'artfin-t@yandex.ru'
   ],
   (object) [
      'state' => 'Нижний Новгород',
      'phone' => '7 (3452) 59-50-69',
      'address' => 'Нижний Новгород,  ул. Октябрьская, дом 33, помещ.  3, офис 12',
      'timeWork' => '9:00 — 18:00',
      'email' => 'artfin-t@yandex.ru'
   ]
];
?>

<section class="sidebar popUp__sidebar">

   <div class="popup-contacts popUp__sidebar-box">

      <button class="popup-contacts-closed popUp__sidebar-closed">
         <svg width="32" height="32" viewBox="0 0 32 32">
            <use href="<?php echo SVG_PATH; ?>icons.svg#icon-closed"></use>
         </svg>
      </button>

      <div class="popup-contacts-title max-w-462px popUp__sidebar-title">
         <h3>Контакты</h3>
      </div>



      <div class="popup-contacts-radio max-w-462px">
         <?php foreach ($state as $index => $location) : ?>
            <div class="radio-button">
               <label class="custom-radio">
                  <input type="radio" name="location" value="<?php echo $index; ?>" <?php echo $index === 0 ? 'checked' : ''; ?>>
                  <span class="text-html"><?php echo $location->state; ?></span>
                  <span class="radio-checkmark"></span>
               </label>
            </div>
         <?php endforeach; ?>
      </div>
      <div class="underline-box popup-contacts-tel max-w-462px">
         <a id="contact-phone" class="underline-el underline-el-blue" href="tel:<?php echo $state[0]->phone; ?>"><?php echo $state[0]->phone; ?></a>
      </div>
      <div class="popup-contacts-contacts max-w-462px">
         <div class="popup-contacts-contacts-office">
            <h5>Офис</h5>
            <p id="contact-address">
               <?php echo $state[0]->address; ?>
            </p>
            <p id="contact-timework" class="working-hours">
               <?php echo $state[0]->timeWork; ?>
            </p>
            <div class="underline-box">
               <a id="contact-email" class="underline-el underline-el-blue" href="mailto:<?php echo $state[0]->email; ?>"><?php echo $state[0]->email; ?></a>
            </div>
         </div>
         <div class="popup-contacts-contacts-network">
            <h5>Соцсети</h5>
            <div class="underline-box">
               <a class="underline-el underline-el-blue" href="#">Telegram</a>
            </div>
            <div class="underline-box">
               <a class="underline-el underline-el-blue" href="#">Vkontakte</a>
            </div>
            <div class="underline-box">
               <a class="underline-el underline-el-blue" href="#">WhatsAPP</a>
            </div>
         </div>
      </div>
      <div class="popup-contacts-map">
         <p>должна быть карта</p>
      </div>
      <div class="popup-contacts-newsletter">
         <p class="max-w-462px">
            Подпишись, чтобы быть в курсе последних новостей А5
         </p>
         <form class="js-myForm-popup-contacts">
            <div class="popup-contacts-newsletter-form">
               <div class="form-items-100 form-gray input">
                  <div class="form-group">
                     <input name="email" id="email" type="email" placeholder="" required>
                     <label for="email">Email</label>
                  </div>
               </div>
               <button class="button button--blue js-submitBtn-popup-contacts">
                  Подписаться
               </button>
            </div>
            <div class="checkbox checkbox--white">
               <input class="custom-checkbox " type="checkbox" id="option-two" required>
               <label for="option-two">
                  Согласен с политикой конфиденциальности
               </label>
            </div>
         </form>
      </div>


   </div>
</section>



<script>
   document.addEventListener('DOMContentLoaded', function () {
      const stateData = <?php echo json_encode($state); ?>;
      const radioButtons = document.querySelectorAll('input[name="location"]');
      const phoneElement = document.getElementById('contact-phone');
      const addressElement = document.getElementById('contact-address');
      const timeWorkElement = document.getElementById('contact-timework');
      const emailElement = document.getElementById('contact-email');

      radioButtons.forEach(button => {
         button.addEventListener('change', function () {
            const selectedIndex = this.value;
            const selectedLocation = stateData[selectedIndex];

            phoneElement.textContent = selectedLocation.phone;
            phoneElement.href = `tel:${selectedLocation.phone}`;
            addressElement.textContent = selectedLocation.address;
            timeWorkElement.textContent = selectedLocation.timeWork;
            emailElement.textContent = selectedLocation.email;
            emailElement.href = `mailto:${selectedLocation.email}`;
         });
      });
   });
</script>