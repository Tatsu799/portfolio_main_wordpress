'use strict';

//スクロールした際にアニメーションを実行する。
let windowSize = $(window).width();
$(function () {
  if (windowSize > 769) {
  } else {
  $("header .drawer").click(function () {
    $('body').toggleClass('nav-open');
    $('header .header-wrapper__nav').fadeToggle(200);
  }); 
  $(".header-wrapper__nav__list__item a").click(function () {
    $('body').toggleClass('nav-open');
    $('header .header-wrapper__nav').fadeToggle(200);
  });
  }
});

// フェードイン
function fadeIn() {
  $('.fadeUpTrigger').each(function() {
  let scroll = $(window).scrollTop();
  let triTop = $(this).offset().top + 100;
  let winHeight = $(window).height();
  if (scroll >= triTop - winHeight) {
  $(this).addClass('fadeUp');
  }
});

$('.fadeLeftTrigger').each(function() {
  let scroll = $(window).scrollTop();
  let triTop = $(this).offset().top + 100;
  let winHeight = $(window).height();
  if (scroll >= triTop - winHeight) {
  $(this).addClass('fadeLeft');
  }
});

$('.fadeRightTrigger').each(function() {
  let scroll = $(window).scrollTop();
  let triTop = $(this).offset().top + 100;
  let winHeight = $(window).height();
  if (scroll >= triTop - winHeight) {
  $(this).addClass('fadeRight');
  }
});
}

$(window).scroll(function() {
fadeIn();
});

//slider の実装
$(function() {
  $(".slider").slick({
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

