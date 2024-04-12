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
        "<div class='about-us-read-more'><a href=\"custom-theme-website.test/about/?v=cb21c4d7dea9\">Read more...</a></div>"
      );

      $showMoreElement.on("click", () => {
        $showMoreElement.show();
      });

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
