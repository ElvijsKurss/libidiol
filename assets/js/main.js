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
        // $showLessElement.show();
        // $element.text(originalText);
      });
      $element.after($showMoreElement);

      // const $showLessElement = $(
      //   "<div class='about-us-read-less'>Read less...</div>"
      // ).hide();
      // $showLessElement.on("click", () => {
      //   console.log($showMoreElement, $showLessElement);

      //   $showMoreElement.show();
      //   $showLessElement.hide();
      //   $element.text(truncatedText);
      // });
      // $element.after($showLessElement);
    }
  });
});
