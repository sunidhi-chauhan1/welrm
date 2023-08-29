document.onclick = function (e) {
  e.stopPropagation();

  // if (e.target.id !== 'initial_sign') {
  //   initial_sign.classList.remove('openSing');
  // }

  if (e.target.id !== 'Home_Room_booking') {
    Home_Room_booking.classList.remove('HomeActive');
  }
};

// ! Header On scroll

$(document).ready(function () {
  $(window).scroll(function () {
    if ($(document).scrollTop() > 50) {
      $('.main_header').addClass('sticky');
    } else {
      $('.main_header').removeClass('sticky');
    }
  });
});

// ! Header On scroll

//  ! Welcome Deal
var swiper = new Swiper('.mySwiper', {
  freeMode: true,

  breakpoints: {
    1028: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
    480: {
      slidesPerView: 1,
      spaceBetween: 10,
    },
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: false,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

//  ! Welcome Deal

var swiper = new Swiper('.OurSlider', {
  slidesPerView: 3,
  spaceBetween: 30,
  freeMode: true,
  autoplay: true,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  breakpoints: {
    1028: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
    480: {
      slidesPerView: 1,
      spaceBetween: 10,
    },
    320: {
      slidesPerView: 1,
    },
  },
});

var swiper = new Swiper('.Destiniations_slider', {
  slidesPerView: 'auto',
  freeMode: true,
  breakpoints: {
    1028: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
    480: {
      slidesPerView: 1,
      spaceBetween: 10,
    },
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: false,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

var swiper = new Swiper('.cities', {
  slidesPerView: 10,
  spaceBetween: 30,
  freeMode: true,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

var swiper = new Swiper('.blogSlider', {
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

var swiper = new Swiper('.Trends_cards', {
  allowTouchMove: false,
  noSwipingClass: 'swiper-no-swiping',
  pagination: {
    el: '.swiper-pagination',

    type: 'progressbar',
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

var swiper = new Swiper('.Trend_slider_img_2', {
  loop: true,
  spaceBetween: 10,
  slidesPerView: 4,
  freeMode: true,
  watchSlidesProgress: true,
  autoplay: true,
  noSwipingClass: 'swiper-no-swiping',
});

var swiper3 = new Swiper('.Trend_slider_img_1', {
  loop: true,
  spaceBetween: 10,
  noSwipingClass: 'swiper-no-swiping',
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  thumbs: {
    swiper: swiper,
  },
});

var swiper = new Swiper('.Trend_slider_img_5', {
  loop: true,
  spaceBetween: 10,
  slidesPerView: 4,
  freeMode: true,
  watchSlidesProgress: true,
  allowTouchMove: false,
  autoplay: true,
});

var swiper100 = new Swiper('.Trend_slider_img_6', {
  loop: true,
  spaceBetween: 10,
  allowTouchMove: false,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  thumbs: {
    swiper: swiper,
  },
});
var swiper = new Swiper('.Trend_slider_img_7', {
  loop: true,
  spaceBetween: 10,
  slidesPerView: 4,
  freeMode: true,
  watchSlidesProgress: true,
  allowTouchMove: false,
  autoplay: true,
});

var swiper101 = new Swiper('.Trend_slider_img_8', {
  loop: true,
  spaceBetween: 10,
  allowTouchMove: false,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  thumbs: {
    swiper: swiper,
  },
});

var swiper = new Swiper('.Hotel_details_slider', {
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

// new

// new

// Chain  Slider

// const Login_pop_btn = document.querySelector('.Login_pop_btn');
// const Login_pop_main = document.querySelector('.Login_popup');
// Login_pop_btn.addEventListener('click', () => {
//   Login_pop_main.classList.toggle('Login_on')
//   // document.body.classList.toggle('ovrflw')
// })
// Login_pop_main.addEventListener('click', () => {
//   Login_pop_main.classList.remove('Login_on')
//   // document.body.classList.toggle('ovrflw')
// })
// const Popup_profile = document.querySelector('.Popup_profile');
// Popup_profile.addEventListener('click', (event) => {
//   event.stopPropagation()
// })

// CodeVerify
var otp_inputs = document.querySelectorAll('.otp__digit');
var mykey = '0123456789'.split('');
otp_inputs.forEach(_ => {
  _.addEventListener('keyup', handle_next_input);
});
function handle_next_input(event) {
  let current = event.target;
  let index = parseInt(current.classList[1].split('__')[2]);
  current.value = event.key;

  if (event.keyCode == 8 && index > 1) {
    current.previousElementSibling.focus();
  }
  if (index < 6 && mykey.indexOf('' + event.key + '') != -1) {
    var next = current.nextElementSibling;
    next.focus();
  }
  var _finalKey = '';
  for (let { value } of otp_inputs) {
    _finalKey += value;
  }
  if (_finalKey.length == 6) {
    document.querySelector('#_otp').classList.replace('_notok', '_ok');
    document.querySelector('#_otp').innerText = _finalKey;
  } else {
    document.querySelector('#_otp').classList.replace('_ok', '_notok');
    document.querySelector('#_otp').innerText = _finalKey;
  }
}

// CodeVerify

// ! Data Picker
$(function () {
  $('.date_icons_1').daterangepicker({
    ssingleDatePicker: 'true',
    showShortcuts: 'false',
    showTopbar: 'false',
  });
});
// ! Data Picker

//Code Verification
var verificationCode = [];
$('.verification-code input[type=text]').keyup(function (e) {
  // Get Input for Hidden Field
  $('.verification-code input[type=text]').each(function (i) {
    verificationCode[i] = $('.verification-code input[type=text]')[i].value;
    $('#verificationCode').val(Number(verificationCode.join('')));
    //console.log( $('#verificationCode').val() );
  });

  //console.log(event.key, event.which);

  if ($(this).val() > 0) {
    if (
      event.key == 1 ||
      event.key == 2 ||
      event.key == 3 ||
      event.key == 4 ||
      event.key == 5 ||
      event.key == 6 ||
      event.key == 7 ||
      event.key == 8 ||
      event.key == 9 ||
      event.key == 0
    ) {
      $(this).next().focus();
    }
  } else {
    if (event.key == 'Backspace') {
      $(this).prev().focus();
    }
  }
}); // keyup

$('.verification-code input').on('paste', function (event, pastedValue) {
  console.log(event);
  $('#txt').val($content);
  console.log($content);
  //console.log(values)
});

$editor.on('paste, keydown', function () {
  //jsfiddle.net/5bNx4/#run
  http: var $self = $(this);
  setTimeout(function () {
    var $content = $self.html();
    $clipboard.val($content);
  }, 100);
});
