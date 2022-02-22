// ローディング判定
jQuery(function ($) {
  jQuery(window).on("load", function () {
    jQuery("body").attr("data-loading", "true");
  });

  jQuery(function () {
    // スクロール判定
    jQuery(window).on("scroll", function () {
      if (100 < jQuery(this).scrollTop()) {
        jQuery("body").attr("data-scroll", "true");
      } else {
        jQuery("body").attr("data-scroll", "false");
      }
    });

    // ハンバーガーメニュー
    $("#js-hamburger").click(function () {
      $("body").toggleClass("is-drawerActive");
      if ($(this).attr("aria-expanded") == "false") {
        $(this).attr("aria-expanded", "true");
        $("#js-sp-nav").attr("aria-hidden", "false");
      } else {
        $(this).attr("aria-expanded", "false");
        $("#js-sp-nav").attr("aria-hidden", "true");
      }
    });

    // アコーディオン
    // 最初開ける↓
    $(".js-accordion-text--first").addClass("is-open");
    $(".js-accordion-title--first").addClass("is-active");
    $(".js-accordion-title").on("click", function () {
      $(this).next().toggleClass("is-open");
      $(this).toggleClass("is-active");
    });

    // スクロールヒント、スマホだけ
    if (window.matchMedia("(max-width: 767px)").matches) {
      new ScrollHint(".js-scrollable", {
        scrollHintIconAppendClass: "scroll-hint-icon-white",
        enableOverflowScrolling: true,
        i18n: {
          scrollable: "スクロールできます",
        },
      });
    }

    // WP Social Bookmarking Lightのidを削除
    // $('div').removeClass('fb-root');

    /* スムーススクロール */
    jQuery('a[href^="#"]').click(function () {
      let header = jQuery(".js-header").height();
      let speed = 300;
      let id = jQuery(this).attr("href");
      let target = jQuery("#" == id ? "html" : id);
      let position = jQuery(target).offset().top - header;
      if ("fixed" !== jQuery("#header").css("position")) {
        position = jQuery(target).offset().top;
      }
      if (0 > position) {
        position = 0;
      }
      jQuery("html, body").animate(
        {
          scrollTop: position,
        },
        speed
      );
      return false;
    });

    /* 電話リンク */
    let ua = navigator.userAgent;
    if (ua.indexOf("iPhone") < 0 && ua.indexOf("Android") < 0) {
      jQuery('a[href^="tel:"]')
        .css("cursor", "default")
        .on("click", function (e) {
          e.preventDefault();
        });
    }
  });
});
