$(document).ready(function() {
    $('.card-img-pp').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });

    $('[data-toggle="popover"]').popover();

    $('[data-toggle="tooltip"]').tooltip();

});

var swiper = new Swiper(".swipersss", {
    slidesPerView: 3,
    spaceBetween: 30,
    slidesPerGroup: 1,
    loop: true,
    // loopFillGroupWithBlank: true,
    // autoplay: {
    //   delay: 3000, // Autoplay delay in milliseconds ทำให้มันสไลด์เอง
    // },

    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: "._nexts",
      prevEl: "._prevs",
    },

      breakpoints: {
        0: {
          slidesPerView: 1,
        },
        560: {
          slidesPerView: 2,
        },
        1000: {
          slidesPerView: 3,
        },
        1200: {
          slidesPerView: 3,
        },
      }
  });
