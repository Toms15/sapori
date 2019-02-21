jQuery(document).foundation();
jQuery(document).ready(function(){

  // ----------------------------------------
  // Scroll event
  // ----------------------------------------
  jQuery(window).scroll(function() {
    var scroll = jQuery(window).scrollTop();
    if (scroll >= 300) {
      jQuery('.header--fixed').addClass('is--show');
    } else {
      jQuery('.header--fixed').removeClass('is--show');
    }
  });

  // ----------------------------------------
  // Navigation Menu
  // ----------------------------------------
  jQuery('.hamburger__menu').on('click', function() {
    jQuery('.hamburger__menu').toggleClass('shrink');
    jQuery('.header--mobile').toggleClass('is--visible');
  });

  // ----------------------------------------
  // Scroll to div
  // ----------------------------------------
  jQuery(document).on('click', '.main-navigation ul li.go__to--section a[href^="#"]', function(e) {
    // target element id
    var id = jQuery(this).attr('href');
    // target element
    var jQueryid = jQuery(id);
    if (jQueryid.length === 0) {
      return;
    }
    // prevent standard hash navigation (avoid blinking in IE)
    e.preventDefault();
    // top position relative to the document
    var pos = jQueryid.offset().top;
    // animated top scrolling
    jQuery('body, html').animate({scrollTop: pos});
  });

  // ----------------------------------------
  // Swiper
  // ----------------------------------------
  if(jQuery('#swiper--home').length) {
    var homeHero = new Swiper('#swiper--home', {
      speed: 800,
      spaceBetween: 0,
      slidesPerView: 1,
      loop: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      }
    });
  }
  if(jQuery('#swiper--gallery').length) {
    var homeHero = new Swiper('#swiper--gallery', {
      speed: 800,
      loop: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      breakpointsInverse: true,
      breakpoints: {
        // when window width is >= 320px
        320: {
          slidesPerView: 1,
          spaceBetween: 10
        },
        // when window width is >= 768px
        768: {
          slidesPerView: 2,
          spaceBetween: 10
        },
        // when window width is >= 992px
        992: {
          slidesPerView: 3,
          spaceBetween: 10
        },
        // when window width is >= 1200px
        1200: {
          slidesPerView: 4,
          spaceBetween: 10
        }
      }
    });
  }

  // ----------------------------------------
  // Magnific Pop-up
  // ----------------------------------------
  $('section.section__content--gallery').magnificPopup({
    delegate: 'a',
    type: 'image',
    gallery:{
      enabled:true
    }
  });
  $('.single__location--gallery').magnificPopup({
    delegate: 'a',
    type: 'image',
    gallery:{
      enabled:true
    }
  });
  $('.open--gallery').on('click', function(event) {
    event.preventDefault();
    var gallery = $(this).parent().attr('href');
    console.log(gallery);
    $(gallery).magnificPopup({
      delegate: 'a',
      type:'image',
      gallery: {
        enabled: true
      }
    }).magnificPopup('open');
  });

});