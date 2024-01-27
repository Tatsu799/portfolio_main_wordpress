'use strict';

//トップのタイトルのアニメーション
jQuery(window).on("load", function() {
  jQuery('.text-anime').addClass('inview'); 
});

//スクロールした際にアニメーションを実行する。
let windowSize = jQuery(window).width();
jQuery(function () {
  if (windowSize > 769) {
  } else {
    jQuery("header .drawer").click(function () {
    jQuery('body').toggleClass('nav-open');
    jQuery('header .header-wrapper__nav').fadeToggle(200);
  }); 
  jQuery(".header-wrapper__nav__list__item a").click(function () {
    jQuery('body').toggleClass('nav-open');
    jQuery('header .header-wrapper__nav').fadeToggle(200);
  });
  }
});

// フェードイン
function fadeIn() {
  jQuery('.fadeUpTrigger').each(function() {
  let scroll = jQuery(window).scrollTop();
  let triTop = jQuery(this).offset().top + 100;
  let winHeight = jQuery(window).height();
  if (scroll >= triTop - winHeight) {
    jQuery(this).addClass('fadeUp');
  }
});

jQuery('.fadeLeftTrigger').each(function() {
  let scroll = jQuery(window).scrollTop();
  let triTop = jQuery(this).offset().top + 100;
  let winHeight = jQuery(window).height();
  if (scroll >= triTop - winHeight) {
    jQuery(this).addClass('fadeLeft');
  }
});

jQuery('.fadeRightTrigger').each(function() {
  let scroll = jQuery(window).scrollTop();
  let triTop = jQuery(this).offset().top + 100;
  let winHeight = jQuery(window).height();
  if (scroll >= triTop - winHeight) {
    jQuery(this).addClass('fadeRight');
  }
});
}

jQuery(window).scroll(function() {
fadeIn();
});

//slider の実装
jQuery(function() {
  jQuery(".slider").slick({
    autoplaySpeed: 2500,
    speed: 1500,
    arrows: false, 
    autoplay: true,
    infinite: true,
    dots: true,
    dotsClass: "slide-dots",
    slidesToShow: 3,
    centerMode: true,
    centerPadding: '0px', 
    responsive: [
      {
        breakpoint: 769,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
        },
      },
      {
        breakpoint: 480,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
        },
      },  
    ],
  });
});