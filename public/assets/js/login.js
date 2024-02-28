

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



// ทดลอง //
$('body').on('click', '#exampleModal', function(event) {
        var forms = $('.needs-validation');
        $('.modal-body form').submit(function(event) {
            onChange(event);
        });
    });
    
    function onChange(event) {
        const password = $('#modal_password');
        const confirm = $('#modal_confirmPassword');
        const passwordValidation = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    
        if (confirm.val() !== password.val()) {
            confirm[0].setCustomValidity('Passwords do not match');
            confirm.removeClass('is-valid');
            event.preventDefault();
            event.stopPropagation();
        } else {
            confirm[0].setCustomValidity('');
        }
    
        if (!passwordValidation.test(password.val())) {
            password.addClass('is-invalid');
            event.preventDefault();
            event.stopPropagation();
        } else {
            password.removeClass('is-invalid');
            password.addClass('is-valid');
        }
    
        if (!confirm.val()) {
            confirm.addClass('is-invalid');
        } else {
            confirm.removeClass('is-invalid');
            confirm.addClass('is-valid');
        }

 
    }
    

















// เช็คค่าว่างหน้า login
$(document).ready(function() {
    var forms = $('.needs-validation');
    forms.on('submit', function(event) {
      var firstNameforms = $('#password');
        
      if( !firstNameforms.val()  ){
        firstNameforms.addClass('is-invalid');
        event.preventDefault();
        event.stopPropagation();
      } else {
        firstNameforms.removeClass('is-invalid');
        firstNameforms.addClass('is-valid');
      }
 
    });

  });



  
 
  





  