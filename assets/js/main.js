$(document).ready(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 1) {
      $(".page-title").addClass("sticky");
    } else {
      $(".page-title").removeClass("sticky");
    }
  });

  const readMoreMaxLen = 200;
  $(".read-more").each((index, element) => {
    const $element = $(element);
    const originalText = $element.text();

    if ($element.text().length > readMoreMaxLen) {
      const truncatedText = originalText.substring(0, readMoreMaxLen) + "...";
      $element.text(truncatedText);

      const $showMoreElement = $(
        "<div class='about-us-read-more'><a href=\"Libidiol.com/about\">" +
          translation_object.read_more_text +
          "</a></div>"
      );

      $element.after($showMoreElement);
    }
  });
});

document.addEventListener("DOMContentLoaded", function () {
  var languageLink = document.querySelector(".language-link");
  var hiddenContent = document.querySelector(".hidden-content-mobile");

  languageLink.addEventListener("click", function (event) {
    event.preventDefault();
    hiddenContent.classList.toggle("show");
  });
});
