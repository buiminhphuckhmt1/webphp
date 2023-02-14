var lastScrollTop = 0;
function scrollHeader() {
  var $header = $('.header');
  if ($header.length) {
    var st = $(this).scrollTop();


    if (st > 0) {
      $header.addClass('fixed');
    } else {
      $header.removeClass('fixed');
    }

    if (st <= 2) {
      $header.css({
        'top': '0'
      }); //.show();
    } else if (st < lastScrollTop) {
      $header.css({
        'top': '0'
      }).show();
    } else {
      $header.css({
        'top': '-250px'
      }); //.hide();
    }

    lastScrollTop = st;

  } else {
    return false;
  }
}

function gioithieuLink() {
  var wrapper = $('.home-gioithieu-nav');
  var btn = wrapper.find('.gioithieu-navlink');
  var li = wrapper.find('li');

  if (btn.length) {

    btn.on('click', function (e) {
      var link = $(this).attr('href');
      var link_pos = $(link).offset().top;
      e.preventDefault();
      li.removeClass('active');
      $(this).parent().addClass('active');

      $('html, body').animate({
        scrollTop: link_pos
      }, 700, "linear");
    });

  } else {
    return false;
  }
}

function studyAnimated() {
  var wrapper = $('.detail-study-animated');
  var target = wrapper.find('.detail-study-image--item');
  var endpoint = wrapper.find('.study-level-gr');

  if (wrapper.length) {

    target.on('mouseenter', function () {
      var link = $(this).attr('data-target');
      $('#' + link).addClass('hovered');
    });

    target.on('mouseleave', function () {
      endpoint.removeClass('hovered');
    });

  } else {
    return false;
  }
}

function outsideContainer() {

}

$(document).ready(function () {
  gioithieuLink();
  studyAnimated();
});

$(window).resize(function () {
});

$(window).scroll(function () {
  scrollHeader();
});