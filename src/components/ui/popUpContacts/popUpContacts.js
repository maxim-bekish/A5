$(document).ready(function () {
  $(".open-button-contact").on("click", function () {
    $(".sidebar").addClass("open");
    $(".app").addClass("blurred");
    $("body").css("overflow", "hidden");
  });

  $(".popup-contacts-closed").on("click", function () {
    $(".sidebar").removeClass("open");
    $(".app").removeClass("blurred");
    $("body").css("overflow", "auto");
  });
  $(document).on("click", function (e) {
    console.log(123);
    if (
      !$(e.target).closest(".sidebar").length &&
      !$(e.target).closest(".open-button-contact").length
    ) {
      $(".sidebar").removeClass("open");
    }
  });
  function checkFormValidity() {
    const email = $("#email-contact").val();
    const checkbox = $("#option-contact").is(":checked");
    const isFormValid = email && checkbox;
    $(".js-submitBtn-popup-contacts").prop("disabled", !isFormValid);
  }

  $("#email-contact").on("input", function () {
    checkFormValidity();
  });
  $("#option-contact").on("change", function () {
    checkFormValidity();
  });
});
