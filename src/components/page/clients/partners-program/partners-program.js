import { formatPhoneNumber } from '/src/assets/helpers/format.js'

$(document).ready(function () {


   $('.partners-program__form .phone').on('input', function () {
      const formattedPhoneNumber = formatPhoneNumber(this.value);
      this.value = formattedPhoneNumber;
   });
})

