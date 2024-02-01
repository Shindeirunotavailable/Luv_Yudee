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
  spaceBetween: 30,
  slidesPerGroup: 1,
  loop: false,

  // centerSlide: "true",
  // grapCurser: "true",
  // fade: "true",
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
  spaceBetween: 30,
  slidesPerGroup: 1,
  loop: false,
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
  loop: false,
  // loopFillGroupWithBlank: true,


  pagination: {
    el: "",
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
      950: {
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

