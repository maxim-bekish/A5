import { formatPhoneNumber } from '/src/assets/helpers/format.js';

$(document).ready(function () {
	$('.footer__form .phone').on('input', function () {
		const formattedPhoneNumber = formatPhoneNumber(this.value);
		this.value = formattedPhoneNumber;
	});

	function checkFormValidity() {
		const name = $('#footer-name').val();
		const phone = $('#footer-phone').val();

		const checkbox = $('#footer-option').is(':checked');
		const isFormValid = checkbox && phone && name;
		$('.js-btn-footer').prop('disabled', !isFormValid);
	}

	$('#footer-name, #footer-phone').on('input', function () {
		checkFormValidity();
	});

	$('#footer-option').on('change', function () {
		checkFormValidity();
	});
});
