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

  breakpoints: {
    1028: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
    480: {
      slidesPerView: 1,
      spaceBetween: 10,
    },
    320:{
      slidesPerView: 1
    }
  },
});

var swiper = new Swiper('.Destiniations_slider', {
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


//Code Verification
var verificationCode = [];
$(".verification-code input[type=text]").keyup(function (e) {
  
  // Get Input for Hidden Field
  $(".verification-code input[type=text]").each(function (i) {
    verificationCode[i] = $(".verification-code input[type=text]")[i].value; 
    $('#verificationCode').val(Number(verificationCode.join('')));
    //console.log( $('#verificationCode').val() );
  });

  //console.log(event.key, event.which);

  if ($(this).val() > 0) {
    if (event.key == 1 || event.key == 2 || event.key == 3 || event.key == 4 || event.key == 5 || event.key == 6 || event.key == 7 || event.key == 8 || event.key == 9 || event.key == 0) {
      $(this).next().focus();
    }
  }else {
    if(event.key == 'Backspace'){
        $(this).prev().focus();
    }
  }

}); // keyup

$('.verification-code input').on("paste",function(event,pastedValue){
  console.log(event)
  $('#txt').val($content)
  console.log($content)
  //console.log(values)
});

$editor.on('paste, keydown', function() {http://jsfiddle.net/5bNx4/#run
var $self = $(this);            
              setTimeout(function(){ 
                var $content = $self.html();             
                $clipboard.val($content);
            },100);
     });

    // Chain  Slider 

 