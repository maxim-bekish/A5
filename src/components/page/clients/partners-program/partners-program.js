import { formatPhoneNumber } from '/src/assets/helpers/format.js'

$(document).ready(function () {


   $('.partners-program__form .phone').on('input', function () {
      const formattedPhoneNumber = formatPhoneNumber(this.value);
      this.value = formattedPhoneNumber;
   });


   const name = $('#name-partners-program');
   const phone = $('#phone-partners-program');
   const checkbox = $('#option-partners-program');
   function checkFormValidity() {
      let isFormValid = name.val() && phone.val() && checkbox.is(':checked');
      $('.partners-program__button').prop('disabled', !isFormValid);
   }

   $('#name-partners-program, #phone-partners-program').on('input', function () {
      checkFormValidity();
   });

   $('#option-partners-program').on('change', function () {
      checkFormValidity();
   });
})

