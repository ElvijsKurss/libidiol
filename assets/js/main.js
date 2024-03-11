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

/* Navbar expand/collapse script*/
jQuery(document).ready(function ($) {
  // Ensure DOM is fully loaded
  $(".navbar-toggler").click(function () {
    // Toggle the collapse class on navbar-collapse
    $(".navbar-collapse").toggleClass("collapse");
  });
});

/*Scritp for search function*/
jQuery(document).ready(function ($) {
  // Ensure DOM is fully loaded
  $(".search-icon").click(function (e) {
    e.preventDefault(); // Prevent default action of anchor tag
    $("#search-overlay").fadeIn(); // Show search overlay
  });

  // Close search overlay when close button is clicked
  $(".close-search").click(function () {
    $("#search-overlay").fadeOut(); // Hide search overlay
  });
});
