
/*slide cycle */
var swiper = new Swiper(".swiperess", {
  slidesPerView: 7,
  spaceBetween: 28,
  slidesPerGroup: 1,
  loop: true,
  
  centerSlide: "true",
  grapCurser: "true",
  fade: "true",
  // loopFillGroupWithBlank: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },
  navigation: {
    nextEl: "._next",
    prevEl: "._prev",
  },

  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    300: {
      slidesPerView: 2,
    },
    400: {
      slidesPerView: 3,
    },
    768: {
      slidesPerView: 4,
    },
    917: {
      slidesPerView: 5,
    },
    1200: {
      slidesPerView: 7,
    }
  }
});

/*------------------------------------------------------------------------ */

/* slide property-city-slider */
var swiper = new Swiper(".swiper", {
  slidesPerView: 6,
  spaceBetween: 28,
  slidesPerGroup: 1,
  loop: true,
  centerSlide: "true",
  grapCurser: "true",
  fade: "true",
  // loopFillGroupWithBlank: true,
  pagination: {
    el: ".swiper--pagination",
    clickable: true,
    dynamicBullets: true,
  },
  navigation: {
    nextEl: ".apartment-type2-next__active",
    prevEl: ".apartment-type2-prev__active",
  },

  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    300: {
      slidesPerView: 2,
    },
    780: {
      slidesPerView: 3,
    },
    1000: {
      slidesPerView: 6,
    }
  }
});
/*------------------------------------------------------------------------ */

/*Best Properties For Sale */
var swiper = new Swiper(".swipers", {
  slidesPerView: 4,
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
        slidesPerView: 4,
      },
    }
});
// var swiper = new Swiper(".swipers", {
//   slidesPerView: 3,
//   spaceBetween: 30,
//   slidesPerGroup: 1,
//   loop: false,
//   // centerSlide: "true",
//   // grapCurser: "true",
//   // fade: "true",
//   // loopFillGroupWithBlank: true,
//   pagination: {
//     el: "",
//     clickable: true,
//     r
//   },
//   navigation: {
//     nextEl: "._nexts",
//     prevEl: "._prevs",
//   },
//   breakpoints: {
//     0: {
//       slidesPerView: 1,
//     },
//     950: {
//       slidesPerView: 2,
//     },
//     1000: {
//       slidesPerView: 3,
//     }
//   }
// });
/*------------------------------------------------------------------------ */

var swiper = new Swiper(".swiperes", {
  slidesPerView: 6,
  spaceBetween: 30,
  slidesPerGroup: 1,
  loop: true,
  // loopFillGroupWithBlank: true,
  
  autoplay: {
    delay: 3000, // Autoplay delay in milliseconds ทำให้มันสไลด์เอง
  },
  pagination: {
    el: ".swiper-pagination-bullet",
    clickable: true,
    dynamicBullets: true,
  },
  navigation: {
    nextEl: ".apartment-type2-next__active",
    prevEl: ".apartment-type2-prev__active",
  },

  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    300: {
      slidesPerView: 2,
    },
    780: {
      slidesPerView: 3,
    },
    1000: {
      slidesPerView: 6,
    }
  }
});
/*------------------------------------------------------------------------ */

/*--header-nav--*/

window.addEventListener("scroll", function(){
  var header = document.querySelector("header");
  header.classList.toggle("sticky", window.scrollY > 0);
  header.classList.toggle("slideInDown", window.scrollY > 0);
  header.classList.toggle("animated", window.scrollY > 0);
})
/*------------------------------------------------------------------------ */

document.addEventListener('DOMContentLoaded', function() {
  // เพิ่ม event listener สำหรับคลิกที่ element ที่มีคลาส 'menubar'
  document.querySelector('.menusbar').addEventListener('click', function() {
      // เลือก element ที่มีคลาส 'offcanvas offcanvas-start mobile_menu-canvas'
      var offcanvasElement = document.querySelector('.offcanvas.offcanvas-start.mobile_menus-canvas');
      
      // เพิ่มหรือลบคลาส 'show' ขึ้นอยู่กับว่ามีหรือไม่มีในปัจจุบัน
      if (offcanvasElement.classList.contains('show')) {
          offcanvasElement.classList.remove('show');
      } else {
          offcanvasElement.classList.add('show');
      }
  });

  // เพิ่ม event listener สำหรับคลิกที่ element ที่มีคลาส 'sidebar-close-icon'
  document.querySelector('.sidebar-close-icon').addEventListener('click', function() {
      // เลือก element ที่มีคลาส 'offcanvas offcanvas-start mobile_menu-canvas'
      var offcanvasElement = document.querySelector('.offcanvas.offcanvas-start.mobile_menus-canvas');
      
      // ลบคลาส 'show'
      offcanvasElement.classList.remove('show');
  });
});





//============================ js non ==============================//

// เช็คค่าว่างใน input
// $(document).ready(function() {
//   'use strict';
//   var forms = $('.needs-validation');
//   forms.on('submit', function(event) {
//     var form = $(this);

//     if (form[0].checkValidity() === false) {
//       event.preventDefault();
//       event.stopPropagation();
//     }

//     form.addClass('was-validated');
//   });
// });



// function alertText(){  
//   var form = $('#password');
//   console.log(form.val().length);
  
//     if (form.val().length === 0) {
//        $('#textAlert').removeClass('d-none');
//       return false
    
//     }
//       return true
// }



// ใช้เช็คว่าว่างใน modal
//  $('body').on('click', '#exampleModal', function() {
//     $('#exampleModal form').submit(function(event) {
//       if (!$(this)[0].checkValidity()) {
//         event.preventDefault();
//         event.stopPropagation();
//         $(this).addClass('was-validated');
//       }
//     });

// });




// อนิเมชั่น button เครื่องบิน //
    $('#submitModalBtn').on('click', function () {
      $('#start').prop('checked', true);
    });

    $('body').on('click', '#exampleModal', function() {
      $('#submitModal').on('click', function () {
        $('#modalStart').prop('checked', true);
      });
  });
  
