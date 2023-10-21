

var jq = jQuery.noConflict();

jq(document).ready(function () {
  jq('.auctionslide__cards').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
          autoplay: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          autoplay: true
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          autoplay: true
        }
      }
    ]
  });
});

var jq = jQuery.noConflict();

jq(document).ready(function () {
  jq('.slideimgs').slick({
    infinite: true,
    autoplay: true,
    speed: 300
  });
});

jq("document").ready(function () {

  jq('.dropdown-menu').on('click', function (e) {
    if (jq(this).hasClass('dropdown-menu-form')) {
      e.stopPropagation();
    }
  });
});

// All slick slider 
var jq = jQuery.noConflict();

jq(document).ready(function () {
  jq('.slider-thumb').slick({
    vertical: true,
    infinite: true,
    autoplay: true,
    verticalSwiping: true,
    slidesToShow: 5,
    arrows: false,
    asNavFor: '.slider-preview',
    focusOnSelect: true,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          vertical: false,
        }
      },
      {
        breakpoint: 479,
        settings: {
          vertical: false,
          slidesPerRow: 3,
          slidesToShow: 3,
        }
      },
    ]
  });
  jq('.slider-preview').slick({
    vertical: true,
    infinite: true,
    verticalSwiping: true,
    arrows: false,
    slidesToShow: 1,
    asNavFor: '.slider-thumb',
    draggable: false,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          vertical: false,
          fade: true,
        }
      },
    ]
  });
});
// Chats 
jQuery(document).ready(function () {

  $(".chat-list a").click(function () {
    $(".chatbox").addClass('showbox');
    return false;
  });

  $(".chat-icon").click(function () {
    $(".chatbox").removeClass('showbox');
  });
});
jQuery(document).ready(function () {

  $(".moreoption a").click(function () {
    $(".userprofile").addClass('showdivbox');
    return false;
  });

  $(".profile-icon").click(function () {
    $(".userprofile").removeClass('showdivbox');
  });
});
// signup and sign in 
const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#password');
togglePassword.addEventListener('click', () => {
  if (password.getAttribute('type') === 'password') {
    password.setAttribute('type', 'text');
    togglePassword.classList.remove('fa-eye');
    togglePassword.classList.add('fa-eye-slash');
  } else {
    password.setAttribute('type', 'password');
    togglePassword.classList.remove('fa-eye-slash');
    togglePassword.classList.add('fa-eye');
  }
});



