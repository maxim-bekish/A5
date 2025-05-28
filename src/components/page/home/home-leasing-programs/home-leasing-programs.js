import { formatNumberWithSymbol } from "/src/assets/helpers/format.js";

$(document).ready(function () {
  const items = $("#js-leasing-ul li");
  const termElem = $("#js-leasing-term");
  const prepaidElem = $("#js-leasing-prepaid");
  const infoElem = $("#js-leasing-info");
  const linkElem = $("#js-leasing-link");
  const imgElem = $(".js-leasing-img");
  const titleP = $(".mobile__title p");

  items.each(function () {
    $(this).on("click", function () {
      items.find("p").removeClass("leasing-programs__list-item--active");
      const index = $(this).data("index");
      const content = listTitle[index]["content"];
      termElem.text(content["term"]);
      prepaidElem.text(`от ${formatNumberWithSymbol(content["prepaid"], "%")}`);
      infoElem.text(content["info"]);
      linkElem.attr("href", content["link"]);
      imgElem.attr(
        "src",
        "/src/assets/images/img/leasing-programs/" + content["img"],
      );
      $(this).find("p").addClass("leasing-programs__list-item--active");
    });
  });

  // Установим начальные значения для первого элемента
  const initialContent = listTitle[0]["content"];
  titleP.text(listTitle[0]["title"]);
  termElem.text(initialContent["term"]);
  prepaidElem.text(
    `от ${formatNumberWithSymbol(initialContent["prepaid"], "%")}`,
  );
  infoElem.text(initialContent["info"]);
  linkElem.attr("href", initialContent["link"]);
  imgElem.attr(
    "src",
    "/src/assets/images/img/leasing-programs/" + initialContent["img"],
  );
});
