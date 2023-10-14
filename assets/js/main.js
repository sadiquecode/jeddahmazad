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

jq("document").ready(function() {

  jq('.dropdown-menu').on('click', function(e) {
      if(jq(this).hasClass('dropdown-menu-form')) {
          e.stopPropagation();
      }
  });
});

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
  }});


