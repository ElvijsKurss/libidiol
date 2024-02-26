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
        "<div class='about-us-read-more'>Read more...</div>"
      );
      $showMoreElement.on("click", () => {
        $showMoreElement.hide();
        $showLessElement.show();
        $element.text(originalText);
      });
      $element.after($showMoreElement);

      const $showLessElement = $(
        "<div class='about-us-read-less'>Read less...</div>"
      ).hide();
      $showLessElement.on("click", () => {
        console.log($showMoreElement, $showLessElement);

        $showMoreElement.show();
        $showLessElement.hide();
        $element.text(truncatedText);
      });
      $element.after($showLessElement);
    }
  });
});

/* Scroll up button JS*/

var scrollToTopButton = document.getElementById("scrollToTop");
scrollToTopButton.addEventListener("click", function () {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
});
window.addEventListener("scroll", function () {
  if (document.documentElement.scrollTop > 100) {
    scrollToTopButton.style.display = "block";
  } else {
    scrollToTopButton.style.display = "none";
  }
});
