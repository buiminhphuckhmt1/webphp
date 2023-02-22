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
const iconInterval = () => {
	let wrapper = document.querySelector('#getInterval');
	let item = document.querySelectorAll('#getInterval img');

	const runInterval = () => {
		for (var i = 0; i < item.length; i++) {
			setTimeout(() => {
				item[0].classList.add('active');
			}, 0);

			setTimeout(() => {
				item[0].classList.remove('active');
			}, 500);

			setTimeout(() => {
				item[1].classList.add('active');
			}, 1000);

			setTimeout(() => {
				item[1].classList.remove('active');
			}, 1500);

			setTimeout(() => {
				item[2].classList.add('active');
			}, 2000);

			setTimeout(() => {
				item[2].classList.remove('active');
			}, 2500);
		}
	};

	const runningUp = setInterval(runInterval, 3000);
};

const fixedsocialPopup = () => {
	const itemclicked = document.querySelector('.js-item-single');

	itemclicked.addEventListener('click', (e) => {
		let clicked = e.currentTarget;

		clicked.nextElementSibling.classList.add('active');
	});

	var ignoreMe = document.querySelector('#fixedSocialList');
	window.addEventListener('mouseup', function (event) {
		if (
			event.currentTarget != ignoreMe &&
			event.currentTarget.parentNode != ignoreMe
		) {
			ignoreMe.classList.remove('active');
		}
	});
};

function triggerFixedEle() {
	var sideEle = $('#sidefixed-ele');
	var footerEle = $('#fixedScreen');

	if (sideEle.length) {
		let eleoffset = sideEle.offset().top;

		$(window).scroll(function () {
			let scrollTop = $(window).scrollTop();

			if (scrollTop > eleoffset - 100) {
				sideEle.addClass('fixed');
			} else {
				sideEle.removeClass('fixed');
			}
		});
	}

	if (footerEle.length) {
		var backTop = footerEle.find('#backTop');
		var wHeight = $(window).height();

		backTop.on('click', function () {
			$('html, body').animate(
				{
					scrollTop: 0
				},
				'linear'
			);
		});

		$(window).scroll(function () {
			let scrollTop = $(window).scrollTop();

			if (scrollTop > wHeight - 100) {
				footerEle.addClass('show');
			} else {
				footerEle.removeClass('show');
			}
		});
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