// ハンバーガーメニュー
(function ($) {
  $(function() {
      var $header = $('#top-head');
      // Nav Fixed
      $(window).scroll(function() {
          if ($(window).scrollTop() > 350) {
              $header.addClass('fixed');
          } else {
              $header.removeClass('fixed');
          }
      });
      // Nav Toggle Button
      $('#nav-toggle').click(function(){
          $header.toggleClass('open');
      });
  });
})(jQuery);

$(window).resize(function(){
  var w = $(window).width();
  var x = 767;
  if (w <= x) {
    $('#container').addClass('container-fluid') 
    $('#container').removeClass('container')
  } else {
    $('#container').addClass('container') 
    $('#container').removeClass('container-fluid')
  }
});

// トップへ戻るボタン
$(function () {
$('#back a').on('click',function(){
  $('body, html').animate({
    scrollTop:0
  }, 800);
    return false;
});
});

// スライドショー
var swiper1 = new Swiper('.swiper1', {
loop: true,
// ループ時には必須
loopedSlides: 5,
speed: 600,
// 左右の表示枚数
slidesPerView: 1.2,
// 画像の余白
spaceBetween: 0,
// 中央に画像を表示するか
centeredSlides: true,
// ページネーションを表示する場合
pagination: {
  el: '.page1',
  type: 'bullets',
  clickable: true,
},
autoplay: {
  // スライドが切り替わるまでの表示時間(ミリ秒)
  delay: 3000,
  // 最後のスライドまで表示されたら自動再生を中止するか
  stopOnLast: false,
  // ユーザーの動作を検出したら自動再生を中止するか
  disableOnInteraction: false    
},
breakpoints: {
  576: {
    loop: true,
    // ループ時には必須
    loopedSlides: 5,
    speed: 600,
    // 左右の表示枚数
    slidesPerView: 1.3,
    // 画像の余白
    spaceBetween: 0,
    // 中央に画像を表示するか
    centeredSlides: true,
    // ページネーションを表示する場合
    pagination: {
      el: '.page1',
      type: 'bullets',
      clickable: true,
    },
    // 前後スライドへのナビゲーションを表示する場合
    navigation: {
      nextEl: '.next1',
      prevEl: '.prev1'
    },
    autoplay: {
      // スライドが切り替わるまでの表示時間(ミリ秒)
      delay: 3000,
      // 最後のスライドまで表示されたら自動再生を中止するか
      stopOnLast: false,
      // ユーザーの動作を検出したら自動再生を中止するか
      disableOnInteraction: false    
    }
  },
}
});

var swiper2 = new Swiper('.swiper2', {
loop: true,
// ループ時には必須
loopedSlides: 4,
speed: 600,
// 左右の表示枚数
slidesPerView: 2,
// 画像の余白
spaceBetween: 10,
// 中央に画像を表示するか
centeredSlides: true,
// ページネーションを表示する場合
pagination: {
  el: '.page2',
  type: 'bullets',
  clickable: true,
},
// 前後スライドへのナビゲーションを表示する場合
navigation: {
  nextEl: '.next2',
  prevEl: '.prev2'
},
autoplay: {
  // スライドが切り替わるまでの表示時間(ミリ秒)
  delay: 3000,
  // 最後のスライドまで表示されたら自動再生を中止するか
  stopOnLast: false,
  // ユーザーの動作を検出したら自動再生を中止するか
  disableOnInteraction: false    
},
breakpoints: {
  768: {
    loop: true,
    // ループ時には必須
    loopedSlides: 4,
    speed: 600,
    // 左右の表示枚数
    slidesPerView: 4,
    // 画像の余白
    spaceBetween: 40,
    // 中央に画像を表示するか
    centeredSlides: false,
    // ページネーションを表示する場合
    pagination: {
      el: '.page2',
      type: 'bullets',
      clickable: true,
    },
    // 前後スライドへのナビゲーションを表示する場合
    navigation: {
      nextEl: '.next2',
      prevEl: '.prev2'
    },
    autoplay: {
      // スライドが切り替わるまでの表示時間(ミリ秒)
      delay: 3000,
      // 最後のスライドまで表示されたら自動再生を中止するか
      stopOnLast: false,
      // ユーザーの動作を検出したら自動再生を中止するか
      disableOnInteraction: false    
    },
  },
  992: {
    loop: true,
    // ループ時には必須
    loopedSlides: 4,
    speed: 600,
    // 左右の表示枚数
    slidesPerView: 4,
    // 画像の余白
    spaceBetween: 40,
    // 中央に画像を表示するか
    centeredSlides: false,
    // ページネーションを表示する場合
    pagination: {
      el: '.page2',
      type: 'bullets',
      clickable: true,
    },
    // 前後スライドへのナビゲーションを表示する場合
    navigation: {
      nextEl: '.next2',
      prevEl: '.prev2'
    },
    autoplay: {
      // スライドが切り替わるまでの表示時間(ミリ秒)
      delay: 3000,
      // 最後のスライドまで表示されたら自動再生を中止するか
      stopOnLast: false,
      // ユーザーの動作を検出したら自動再生を中止するか
      disableOnInteraction: false    
    },
  },
},
});

