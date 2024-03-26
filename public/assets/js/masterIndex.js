$(document).ready(function() {
  let scrolls = $(".scrollToHome");

  $(window).on("scroll", function() {
    $(this).scrollTop() >= 500 ? scrolls.addClass("show") : scrolls.removeClass("show");
  });

  scrolls.on("click", function() {
    $("html, body").animate({
      scrollTop: 0
    }, "slow");
  });
});

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
  slidesPerView: 7,
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
    516: {
      slidesPerView: 3,
    },
    650: {
      slidesPerView: 4,
    },
    900: {
      slidesPerView: 5,
    },
    1000: {
      slidesPerView: 6,
    },
    1200: {
      slidesPerView: 7,
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
/*------------------------------------------------------------------------ */

var swiper = new Swiper(".swiperes", {
  slidesPerView: 7,
  spaceBetween: 30,
  slidesPerGroup: 1,
  loop: true,
  // loopFillGroupWithBlank: true,
  
  autoplay: {
    delay: 3000,  //Autoplay delay in milliseconds ทำให้มันสไลด์เอง
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
    768: {
      slidesPerView: 4,
    },
    1000: {
      slidesPerView: 6,
    },
    1200: {
      slidesPerView: 7,
    }
  }
});
/*------------------------------------------------------------------------ */
/*boxBlog */
var swiper = new Swiper(".swiperp", {
  slidesPerView: 4,
  spaceBetween: 30,
  slidesPerGroup: 1,
  // loop: true,
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
    500: {
      slidesPerView: 2,
    },
    980: {
      slidesPerView: 3,
    },
    1100: {
      slidesPerView: 4,
    },
  }
});

/*--------------------------------------------------------------*/

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
/*้home-email */
// function onSubmitemail(event) {
//     var emailInput = $('#home-email');
//     var emailValue = emailInput.val();
//     var showErrorDiv = $('#ShowErrorEmail');
//     // ล้างคลาสทั้งหมดก่อนที่จะตรวจสอบใหม่
//     emailInput.removeClass('border-danger is-valid');
//     if (emailValue.trim() === '') {
//         showErrorDiv.text('Please enter a valid email');
//         emailInput.addClass('border-danger');
//         event.preventDefault(); // ป้องกันการ submit แบบปกติ
//     } else if (emailValue.indexOf('@') === -1 || emailValue.indexOf('.') === -1) {
//         showErrorDiv.text('Please include an @ in the email address. "' + emailValue + '" is missing @ or . is incomplete.');
//         emailInput.addClass('border-danger');
//         event.preventDefault();
//     } else if (emailValue.split('.').length < 2 || emailValue.split('.').pop().trim() === '') {
//       showErrorDiv.text('Please enter a part following .');
//       emailInput.addClass('border-danger');
//       event.preventDefault();
//     } else {
//         emailInput.addClass('is-valid');
//         showErrorDiv.text(''); // ล้างข้อความแจ้งเตือนหากไม่มีข้อผิดพลาด
//     }
//     document.getElementById("home_email").submit();
// }
/*------------------------------------------- */

/*เเจ้งเตือน ตอนส่งเมล */

// if($('#newsletter').length){
//   // alert("You have successfully subscribed to our newsletter.");
//   Swal.fire({
//     icon: "success",
//     text: "ขอบคุณสำหรับการสมัครรับข่าวสารค่ะ",
//     confirmButtonColor: "#0071BC",
//   });
// }
// if($('#newslettererror').length){
//   Swal.fire({
//     icon: "error",
//     text: "คุณได้สมัครรับข่าวสารไปเเล้วค่ะ",
//     confirmButtonColor: "#0071BC",
//   });
// }

// $(document).ready(function () {
//   $("#home_email").submit(function (e) {
//     e.preventDefault();

//     let formUrl = $(this).attr("action");
//     let reqMethod = $(this).attr("method");
//     let formData = $(this).serialize();

//     $.ajax ({
//       url: formUrl,
//       type: reqMethod,
//       data: formData,
//       success: function(data) {
//         if (data.status == "success"){ 
//           Swal.fire("SweetAlert2 is working!");
//         }else {
//           Swal.fire("SweetAlert2 is !");
//         }
//       }
//     })
//   })
// })

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
  //   $('#submitModalBtn').on('click', function () {
  //     $('#start').prop('checked', true);
  //   });

    $('body').on('click', '#exampleModal', function() {
      $('#submitModal').on('click', function () {
        $('#modalStart').prop('checked', true);
      });
  });


//check email footer
  function onSubmitemail(event) {
    // console.log('footer');
    var emailInput = $('#home-email');
    var emailValue = emailInput.val();
    var showErrorDivFooter = $('#ShowErrorEmailFooter');
    // ล้างคลาสทั้งหมดก่อนที่จะตรวจสอบใหม่
    emailInput.removeClass('border-danger is-valid');
    if (emailValue.trim() === '') {
        showErrorDivFooter.text('Please enter a valid email');
        emailInput.addClass('border-danger');
        event.preventDefault(); // ป้องกันการ submit แบบปกติ
    } else if (emailValue.indexOf('@') === -1 || emailValue.indexOf('.') === -1) {
        showErrorDivFooter.text('Please include an @ in the email address. "' + emailValue + '" is missing @ or . is incomplete.');
        emailInput.addClass('border-danger');
        event.preventDefault();
    } else if (emailValue.split('.').length < 2 || emailValue.split('.').pop().trim() === '') {
      showErrorDivFooter.text('Please enter a part following .');
      emailInput.addClass('border-danger');
      event.preventDefault();
    } else {
        emailInput.addClass('is-valid');
        showErrorDivFooter.text(''); // ล้างข้อความแจ้งเตือนหากไม่มีข้อผิดพลาด
    }
    // document.getElementById("home_email").submit();
    var formData = $("#home_email").serialize();
        $.ajax({
            type: 'POST', // ใช้เมธอด POST ส่งข้อมูล
            url: $("#home_email").attr('action'), // ใช้ URL ที่กำหนดใน attribute action ของฟอร์ม
            data: formData, // ส่งข้อมูลที่เก็บไว้ในตัวแปร formData
            success: function (response) {
                if (response.success) {

                  Swal.fire({
                    icon: "success",
                    text: "ขอบคุณสำหรับการสมัครรับข่าวสารค่ะ",
                    confirmButtonColor: "#0071BC",
                  });

                } else {
                    Swal.fire({
                    icon: "warning",
                    text: "คุณได้สมัครรับข่าวสารไปเเล้วค่ะ",
                    confirmButtonColor: "#0071BC",
                  });

                }
            }
        });
}


//check review
// $("#form_review").click(function() {
//   // console.log('review');
//   const forms = $('.needs-validation');
//     forms.on('submit', function(event) {
//       // var emailInput = $('#email');
//       // var emailValue = emailInput.val();
//       // var showErrorDiv = $('#ShowErrorEmail');
//       const namereview = $('#name');
//       const contentreview = $('#content')
//       const emailreview = $('#email');

//       // emailInput.removeClass('border-danger is-valid');
//       // if (emailValue.trim() === '') {
//       //   showErrorDiv.text('Please enter a valid email');
//       //   emailInput.addClass('border-danger');
//       //   event.preventDefault(); // ป้องกันการ submit แบบปกติ
//       // } else if (emailValue.indexOf('@') === -1 || emailValue.indexOf('.') === -1) {
//       //     showErrorDiv.text('Please include an @ in the email address. "' + emailValue + '" is missing @ or . is incomplete.');
//       //     emailInput.addClass('border-danger');
//       //     event.preventDefault();
//       // } else if (emailValue.split('.').length < 2 || emailValue.split('.').pop().trim() === '') {
//       //   showErrorDiv.text('Please enter a part following .');
//       //   emailInput.addClass('border-danger');
//       //   event.preventDefault();
//       // } else {
//       //     emailInput.addClass('is-valid');
//       //     showErrorDiv.text(''); // ล้างข้อความแจ้งเตือนหากไม่มีข้อผิดพลาด
//       // }
//       if( !namereview.val()  ){
//         namereview.addClass('is-invalid');
//         event.preventDefault();
//         event.stopPropagation();
//         return;
//       } else {
//         namereview.removeClass('is-invalid');
//         namereview.addClass('is-valid');
//       }
//       if( !emailreview.val()  ){
//         emailreview.addClass('is-invalid');
//         event.preventDefault();
//         event.stopPropagation();
//         return;
//       } else {
//         emailreview.removeClass('is-invalid');
//         emailreview.addClass('is-valid');
//       }
//       if( !contentreview.val()  ){
//         contentreview.addClass('is-invalid');
//         event.preventDefault();
//         event.stopPropagation();
//         return;
//       } else {
//         contentreview.removeClass('is-invalid');
//         contentreview.addClass('is-valid');
//       }
//       event.preventDefault();
//       Swal.fire({
//         position: "center",
//         icon: "warning",
//         text: "กรุณารอการอนุมัติรีวิวจากเจ้าหน้าที่",
//         confirmButtonColor: "#0071BC",
//       }).then((result) => {
//                     if (result.isConfirmed) {
//                         $('#form_review').submit();
//                     }
//                 });
//     });
//   });


$('#form_review').submit(function (event) {
  event.preventDefault(); // ป้องกันการส่งฟอร์ม
  onSubmitReview(event);

    var formData = $(this).serialize(); // เก็บข้อมูลฟอร์มเข้าตัวแปร formData
    $.ajax({
        type: 'POST', // ใช้เมธอด POST ส่งข้อมูล
        url: $(this).attr('action'), // ใช้ URL ที่กำหนดใน attribute action ของฟอร์ม
        data: formData, // ส่งข้อมูลที่เก็บไว้ในตัวแปร formData
        success: function (response) {
            if (response.success) {
              Swal.fire({
                  position: "center",
                  icon: "warning",
                  text: "กรุณารอการอนุมัติรีวิวจากเจ้าหน้าที่",
                  confirmButtonColor: "#0071BC",
              })
              $('#content').val("");
              $('#content').removeClass('is-invalid is-valid');
              $('#name').removeClass('is-invalid is-valid');
              $('#email').removeClass('is-invalid is-valid');
              $('input[name="star"]').prop('checked', false);


            } else {
                // ถ้าเข้าสู่ระบบไม่สำเร็จ
                $('#error').val(""); 
                $('#statusMessageModel').text(response.messageError); // แสดงข้อความแจ้งเตือนใน div ที่มี id="statusMessage"
                $('#hiddenErrorModal').removeClass('hidden'); // ลบ class "hidden" ออกเพื่อแสดงข้อความแจ้งเตือน
                $('#hiddensuccessModal').addClass('hidden'); // ลบ class "hidden" ออกเพื่อแสดงข้อความแจ้งเตือน

            }
        }
    });
        
});

function onSubmitReview (event){
  const forms = $('.needs-validation');
  const namereview = $('#name');
  const contentreview = $('#content')
  const emailreview = $('#email');

  if( !namereview.val()  ){
    namereview.addClass('is-invalid');
    event.preventDefault();
    event.stopPropagation();
    return;
  } else {
    namereview.removeClass('is-invalid');
    namereview.addClass('is-valid');
  }
  if( !emailreview.val()  ){
    emailreview.addClass('is-invalid');
    event.preventDefault();
    event.stopPropagation();
    return;

  } else {
    emailreview.removeClass('is-invalid');
    emailreview.addClass('is-valid');
  }
  if( !contentreview.val()  ){
    contentreview.addClass('is-invalid');
    event.preventDefault();
    event.stopPropagation();
    return;

  } else {
    contentreview.removeClass('is-invalid');
    contentreview.addClass('is-valid');
  }
 
}



  //popup เเจ้งเดือน รอรีวิว
//   $(document).ready(function() {
//     function confirmation(event) {
//         event.preventDefault();
        
//         Swal.fire({
//             position: "center",
//             icon: "warning",
//             text: "กรุณารอการอนุมัติรีวิวจากเจ้าหน้าที่",
//             confirmButtonColor: "#0071BC",
//         }).then((result) => {
//             if (result.isConfirmed) {
//                 $('#form_review').submit();
//             }
//         });
//     }

//     $('.wait-al').on('click', function(event) {
//         confirmation(event);
//     });
// });

















  
