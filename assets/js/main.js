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
    }
  });

  /* Removes the filter that doesnt removes automaticalyfor paymenys with Debit Card*/
  setInterval(() => {
    $(".wc-block-components-loading-mask").removeClass(
      "wc-block-components-loading-mask"
    );
  }, 1000);
});

document.addEventListener("DOMContentLoaded", function () {
  var languageLink = document.querySelector(".language-link");
  var languageContent = document.querySelector(".hidden-content-mobile");

  var accountLink = document.querySelector(".icon-wrapper");
  var accountContent = document.querySelector(".options");

  languageLink.addEventListener("click", function (event) {
    event.preventDefault();
    languageContent.classList.toggle("show");
    accountContent.classList.remove("show"); // Hide account content
    languageLink.classList.toggle("active"); // Toggle active class for language link
    accountLink.classList.remove("active"); // Remove active class from account link
  });

  accountLink.addEventListener("click", function (event) {
    event.stopPropagation();
    accountContent.classList.toggle("show");
    languageContent.classList.remove("show"); // Hide language content
    accountLink.classList.toggle("active"); // Toggle active class for account link
    languageLink.classList.remove("active"); // Remove active class from language link
  });

  document.addEventListener("click", function (event) {
    if (!languageLink.contains(event.target)) {
      languageContent.classList.remove("show");
      languageLink.classList.remove("active"); // Remove active class if click is outside language link
    }
    if (!accountLink.contains(event.target)) {
      accountContent.classList.remove("show");
      accountLink.classList.remove("active"); // Remove active class if click is outside account link
    }
  });
});

/*Cart refresh once item is added*/
jQuery(document).ready(function ($) {
  $("body").on("added_to_cart", function () {
    location.reload();
  });
});
