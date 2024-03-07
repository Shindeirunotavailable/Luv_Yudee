

// สมัครสมาชิก
var getUrl = window.location;
var baseUrl = getUrl .protocol + "//" + getUrl.host + "/";
var csrf = $("meta[name='csrf-token']").attr("content");  //token 
$('.register').click(function(){ //$.register คือชื่อ class ของปุ่มที่เราจะกด ถ้าเป็น ID จะต้อง #register
    // console.log(csrf)
    $.ajax({
                url: baseUrl+"create-account", // กำนหดเส้นทางใน Route เพื่อส่งค่าไปยัง route
                type: 'POST', // ประเภทการส่งข้อมูล
                dataType: "html", // ประเภทการรับข้อมูลกลับมา
                data:{"_token":csrf}, //ส่งตัวแปร
                success: function(data) {
                    // console.log(data)
                    $('#modal-data').html(data ); 
                    $('#modal-data .modal').modal({backdrop: 'static',keyboard: true});
                    $('.overlay').hide();
                }
            });
})



// กู้รหัสผ่าน
$('.Forgetpassword').click(function(){ //$.register คือชื่อ class ของปุ่มที่เราจะกด ถ้าเป็น ID จะต้อง #register
    // console.log(csrf)
    $.ajax({
        url: baseUrl+"forget-password", // กำนหดเส้นทางใน Route เพื่อส่งค่าไปยัง route
        type: 'POST', // ประเภทการส่งข้อมูล
        dataType: "html", // ประเภทการรับข้อมูลกลับมา
        data:{"_token":csrf}, //ส่งตัวแปร
        success: function(data) {
            // console.log(data)
            $('#modal-data').html(data ); 
            $('#modal-data .modal').modal({backdrop: 'static',keyboard: true});
            $('.overlay').hide();
        }
    });
})


$(document).ready(function() {
  // เมื่อคลิกปุ่ม Submit ภายใน Modal
  $('#submitModal').click(function() {
      // รับค่าจากฟอร์มหรือทำอะไรก็ตามที่คุณต้องการ

      // ทำการ Ajax Request
      $.ajax({
          type: 'get', // หรือ 'GET' หรือตามที่คุณต้องการ
          url: baseUrl+"lostpassword", // ระบุ URL ที่จะส่ง Request ไป
          data:{"_token":csrf,
          "email":$("#ForgerEmail").val()}, //ส่งตัวแปร
          success: function(response) {
              // ประมวลผล response ที่ได้จาก server
              console.log(response);
              $('#statusMessage').html(response);
              
              // ปิด Modal (ตัวอย่าง)
              // $('#exampleModal').modal('hide');

          }
          
      });
  });
});
    ///////////////////////  login //////////////////////


function onSubmitLogin() {
  $("#loginform").submit();
}

// เช็คค่าว่างหน้า login
      $(".card").click(function() {
        const forms = $('.needs-validation');
          forms.on('submit', function(event) {
            const PasswordFrom = $('#password');
            if( !PasswordFrom.val()  ){
              PasswordFrom.addClass('is-invalid');
              event.preventDefault();
              event.stopPropagation();
            } else {
              PasswordFrom.removeClass('is-invalid');
              PasswordFrom.addClass('is-valid');
            }
      
          });
        });

        // เข็คว่าเป็นประเภทของอีเมลหรือไม่
        // $(document).ready(function() {
        //   $('#loginform').submit(function(event) {
        //       var emailInput = $('#email');
        //       var emailValue = emailInput.val();
        //       // ตรวจสอบว่ามีค่าว่างหรือไม่
        //       if (emailValue.trim() === '') {
        //           event.preventDefault();
        //           emailInput.addClass('border-danger');
        //           alert('Please enter your email address.');
        //       } else if (emailValue.indexOf('@') === -1) {
        //           event.preventDefault();
        //           alert('Please enter a valid email address. Missing @ symbol.');
        //           emailInput.addClass('border-danger');

        //       } else if (emailValue.indexOf('.') === -1) {
        //           event.preventDefault();
        //           alert('Please enter a valid email address. Missing dot (.) symbol.');
        //           emailInput.addClass('border-danger');
        //       }else {
        //         emailInput.removeClass('border-danger');

        //       }
        //       });
        //   });


      // เปิด-ปิด password 
      $(".toggle-password").click(function() { 
        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
          input.attr("type", "text");
        } else {
          input.attr("type", "password");
        }
      });


    ///////////////////////  modal //////////////////////

    
     
// รับ function จากหน้าสมัคร//
// $('body').on('click', '#forgetPassword', function() {
//         var forms = $('.needs-validation');
//         $('.modal-body form').submit(function(event) {
//           onChange(event);
//         });

//         $(".toggle-password").click(function() {
//           $(this).toggleClass("fa-eye fa-eye-slash");
//           var input = $($(this).attr("toggle"));
//           if (input.attr("type") == "password") {
//             input.attr("type", "text");
//           } else {
//             input.attr("type", "password");
//           }
//         });

//     });


    // เช็คค่าต่างๆหน้าสมัคร 
    // function onChange(event) {
    //     const password = $('#modal_password');
    //     const confirm = $('#modal_confirmPassword');
    //     const passwordValidation = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    //     var emailValue = emailInput.val();
    //     var errorDiv = $('#error');
    //     // ตรวจสอบว่า modal_password และ modal_confirmPassword ตรงกันหรือไม่
    //     if (confirm.val() !== password.val()) {
    //       showError(emailInput, errorDiv, 'please fill out this field');
    //       confirm.addClass('border-danger');
    //         confirm.removeClass('is-valid');
    //         event.preventDefault();
    //         event.stopPropagation();
    //     } else {
    //         confirm.removeClass('border-danger ');
    //         confirm[0].setCustomValidity('');
    //     }if (!passwordValidation.test(password.val())) {
    //         password[0].setCustomValidity('Password is not formation');
    //         password.addClass('border-danger ');
    //         confirm.addClass('border-danger ');
    //         password.removeClass('is-valid');
    //         confirm.removeClass('is-valid');

    //         event.preventDefault();
    //         event.stopPropagation();
    //     } else {
    //         password[0].setCustomValidity('');
    //         password.removeClass('border-danger ');
    //     }
    // }


  
  // new modal



  function onSubmitRegister(event) {
    var emailInput = $('#modal_email');
    const password = $('#modal_password');
    const confirm = $('#modal_confirmPassword');
    const passwordValidation = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    var emailValue = emailInput.val();
    var errorDiv = $('#error');
    var errorPassword =$('#errorpassword')

    if (emailValue.trim() === '') {
      showError(emailInput, errorDiv, 'please fill out this field');
      event.preventDefault();
    } else if (emailValue.indexOf('@') === -1) {
      showError(emailInput, errorDiv, 'please include an @ in the email');
      event.preventDefault();
    } else if (emailValue.indexOf('.') === -1) {
      showError(emailInput, errorDiv, 'please enter a part fllowing .');
      event.preventDefault();
    } else{
      showError(emailInput, errorDiv, '');
    }

    // ตรวจสอบว่า modal_password มีค่าว่างหรือไม่
    if (!password.val() && !confirm.val()) {
        password.addClass('is-invalid');
        confirm.addClass('is-invalid');

        event.preventDefault();
        event.stopPropagation();
    }else {
        password.removeClass('is-invalid');
        confirm.removeClass('is-invalid');
        confirm.addClass('is-valid');
        password.addClass('is-valid');
    }
    if (!confirm.val()) {
      confirm.addClass('is-invalid');
      event.preventDefault();
      event.stopPropagation();
  }else {
      confirm.removeClass('is-invalid');
      confirm.addClass('is-valid');
  }

    
    // ตรวจสอบว่า modal_password และ modal_confirmPassword ตรงกันหรือไม่
    if (confirm.val() !== password.val()) {
        showError(confirm, errorPassword, 'Passwords do not match');
        confirm.addClass('border-danger');
        confirm.removeClass('is-valid');
        event.preventDefault();
        event.stopPropagation();
    } else {
        confirm.removeClass('border-danger ');
        showError(confirm, errorPassword, '');
    }
    
    
    if (!passwordValidation.test(password.val())) {
        showError(confirm, errorPassword, 'รหัสผ่านควรมีความยาว 8 ตัวอักษรขึ้นไป ประกอบด้วย ตัวอักษรทั้งพิมพ์เล็ก พิมพ์ใหญ่ (a-z, A-Z) ตัวเลข (0-9) และมีเครื่องหมายหรืออักขระพิเศษ  (!@#$%^&*()_+|~-=\`{}[]:"');
        password.addClass('border-danger ');
        confirm.addClass('border-danger ');
        password.removeClass('is-valid');
        confirm.removeClass('is-valid');

        event.preventDefault();
        event.stopPropagation();
    } else {
      showError(confirm, errorPassword, '');
      password.removeClass('border-danger ');
      document.getElementById("registerForm").submit();

    }
  }




  function showError(input, errorDiv, message) {
    // ลบคลาส is-invalid ทั้งหมด
    $('input').removeClass('is-invalid');
    // เพิ่มคลาส is-invalid และแสดงข้อความ
    input.addClass('is-invalid');
    errorDiv.text(message); // แสดงข้อความผิดพลาดใน div
  }


























  // function onSubmitRegister(event) {
  //     var emailInput = $('#modal_email');
  //     var emailValue = emailInput.val();
  //     if (emailValue.trim() === '') {
  //       emailInput.addClass('is-invalid');
  //       event.preventDefault();
  //     } else if (emailValue.indexOf('@') === -1) {
  //       emailInput.addClass('is-invalid');
  //       event.preventDefault();

  //     } else if (emailValue.indexOf('.') === -1) {
  //       emailInput.addClass('is-invalid');
  //       event.preventDefault();

  //     }
  //     document.getElementById("registerForm").submit();

  // }


  ///////////////////////////////////////////////////////////////////////
  // เช็คค่าว่างใน modal
// $('body').on('click', '#exampleModal', function() {
//   var forms = $('.needs-validation');
//   $('#exampleModal form').submit(function(event) {
//       var firstNameforms = $('#modal_password');
//       var lastNameforms = $('#modal_confirmPassword');


//       if (!firstNameforms.val()) {
//           firstNameforms.addClass('is-invalid');
//           event.preventDefault();
//           event.stopPropagation();
//       } else {
//           firstNameforms.removeClass('is-invalid');
//           firstNameforms.addClass('is-valid');
//       }

//       if (!lastNameforms.val()) {
//           lastNameforms.addClass('is-invalid');
//       } else {
//           lastNameforms.removeClass('is-invalid');
//           lastNameforms.addClass('is-valid');
//       }

//   });
// });


// เช็คครหัสตรงกันหรือไม่ modal 
// $('body').on('click', '#exampleModal', function(event) {
//     $('.modal-body form').submit(onChange);
//   });
  
// function onChange() {
//     const password = $('#modal_password');
//     const confirm = $('#modal_confirmPassword');
//     console.log('hi');

//     if (confirm.val() === password.val()) {
//         confirm[0].setCustomValidity('');
//         password.removeClass('border-danger');
//         confirm.removeClass('border-danger');

//     } else {
//         confirm[0].setCustomValidity('Passwords do not match');
//         password.addClass('border-danger ');
//         confirm.addClass('border-danger ');
//     }

// }

//  หลัก

// $('body').on('click', '#exampleModal', function(event) {
//     var forms = $('.needs-validation');
//     $('.modal-body form').submit(function(event) {
//         onChange(event);
//     });
// });

// function onChange(event) {
//     const password = $('#modal_password');
//     const confirm = $('#modal_confirmPassword');
//      if(confirm.val() !== password.val()){
//         confirm[0].setCustomValidity('Passwords do not match');
//         // confirm.addClass('border-danger');
//         confirm.removeClass('is-valid');
//     } else{
//         confirm[0].setCustomValidity('');
//     }
//     if (!password.val()) {
//         password.addClass('is-invalid');
//         event.preventDefault();
//         event.stopPropagation();
//     } else {
//         password.removeClass('is-invalid');
//         password.addClass('is-valid');
//     }

//     if (!confirm.val()) {
//         confirm.addClass('is-invalid');
//     } else {
//         confirm.removeClass('is-invalid');
//         confirm.addClass('is-valid');
//     }
// }





