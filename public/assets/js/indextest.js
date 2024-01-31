/*scrollToHome */

let scrolls =document.querySelector(".scrollToHome");

window.onscroll = function () {
  // console.log(this.scrollY);
  // if(this.scrollY >= 1000) {
  //   scrolls.classList.add("show");
  // } else {
  //   scrolls.classList.remove("show");
  // }
  this.scrollY >= 500 ? scrolls.classList.add("show") : scrolls.classList.remove("show");
};

scrolls.onclick = function () {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  })
}
/*------------------------------------------------------------------------ */

/*slide cycle */
var swiper = new Swiper(".swiper", {
  slidesPerView: 6,
  spaceBetween: 28,
  slidesPerGroup: 1,
  loop: true,
  
  centerSlide: "true",
  grapCurser: "true",
  fade: "true",
  loopFillGroupWithBlank: true,
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
    780: {
      slidesPerView: 3,
    },
    1000: {
      slidesPerView: 6,
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
  slidesPerView: 3,
  spaceBetween: 30,
  slidesPerGroup: 1,
  loop: true,
  // loopFillGroupWithBlank: true,
  autoplay: {
    delay: 3000, // Autoplay delay in milliseconds ทำให้มันสไลด์เอง
  },

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

/*video */

/*ใช้ได้ เเต่ video ไม่หยุดเล่น */
// document.addEventListener("DOMContentLoaded", function () {
//   var watchVideoButton = document.querySelector('.popup-iframe');
//   var modalVideo = document.querySelector('.modal-video');

//   watchVideoButton.addEventListener('click', function () {
//       // แสดง modal-video เมื่อปุ่มถูกคลิก
//       modalVideo.style.display = 'block';
//   });

//   // เพิ่มเหตุการณ์สำหรับปุ่มปิด modal-video
//   var closeVideoButton = document.querySelector('.modal-video-close-btn');
//   closeVideoButton.addEventListener('click', function () {
//       // ซ่อน modal-video เมื่อปุ่มปิดถูกคลิก
//       modalVideo.style.display = 'none';

//   });
// });


// document.addEventListener("DOMContentLoaded", function () {
//   var watchVideoButton = document.querySelector('.popup-iframe');
//   var modalVideo = document.querySelector('.modal-video');
//   var closeVideoButton = document.querySelector('.modal-video-close-btn');
//   var videoIframe = document.getElementById('your-video-iframe-id');

//   // เพิ่มเหตุการณ์สำหรับปุ่ม "Watch Video"
//   watchVideoButton.addEventListener('click', function () {
//     // แสดง modal-video เมื่อปุ่มถูกคลิก
//     modalVideo.style.display = 'block';
//   });

//   // เพิ่มเหตุการณ์สำหรับปุ่มปิด modal-video
//   closeVideoButton.addEventListener('click', function () {
//     // ซ่อน modal-video เมื่อปุ่มปิดถูกคลิก
//     modalVideo.style.display = 'none';

//     // หยุดการเล่นวิดีโอ
//     videoIframe.src = videoIframe.src;  // กำหนดค่า src เป็นตัวเดียวกันจะทำให้วิดีโอหยุดเล่น
//   });

//   // เพิ่มเหตุการณ์สำหรับปุ่ม "popup-iframe"
//   watchVideoButton.addEventListener('click', function () {
//     // กำหนดค่า src เพื่อเริ่มเล่นวิดีโอใหม่
//     videoIframe.src = videoIframe.src;

//     var iframeSrc = videoIframe.src;
//     iframeSrc = iframeSrc.replace('autoplay=1', 'autoplay=0');
//     videoIframe.src = iframeSrc;
//   });
// });






document.addEventListener('DOMContentLoaded', function() {
  var toggleSidebarBtn = document.getElementById('toggleSidebar');
  var sidebarPanel = document.getElementById('SidebarPanel');
  var sidebarCloseIcon = document.querySelector('.sidebar-close-icon');

  toggleSidebarBtn.addEventListener('click', function() {
     sidebarPanel.classList.add('show');
  });

  sidebarCloseIcon.addEventListener('click', function() {
     sidebarPanel.classList.remove('show');
  });
});

// $('#id').click(function () {
//   console.log(test);
// });



// // รับ element ของปุ่ม menubar และ offcanvas menu
// const menubarButton = document.getElementById('menubarButton');
// const mobileMenu = document.getElementById('mobileMenu');

// // เพิ่ม event listener สำหรับคลิกที่ปุ่ม menubar
// menubarButton.addEventListener('click', function() {
//     // เพิ่มหรือลบคลาส "show" จาก offcanvas menu
//     mobileMenu.classList.toggle('show');
// });


//============================ js non ==============================//

// เช็คค่าว่างใน login
$(document).ready(function() {
  'use strict';
  var forms = $('.needs-validation');
  forms.on('submit', function(event) {
    var form = $(this);

    if (form[0].checkValidity() === false) {
      event.preventDefault();
      event.stopPropagation();
    }

    form.addClass('was-validated');
  });
});

// ใช้เช็คว่าว่างใน modal
 $('body').on('click', '#exampleModal', function() {
    $('#exampleModal form').submit(function(event) {
      if (!$(this)[0].checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
        $(this).addClass('was-validated');
      }
    });

});
