///////////////////////// Profile.blade //////////////////////////////////////////
      
$('#profileForm').on('submit', function(event) {
    var forms = $('.needs-validation');
 
    ContactinFormation(event);
    passwordCheck(event);
    validSession(event);

  });


//   $('#profileForm').submit(function (event) {
//     event.preventDefault(); // ป้องกันการส่งฟอร์ม
//     var formData = $(this).serialize(); // เก็บข้อมูลฟอร์มเข้าตัวแปร formData
//     $.ajax({
//         type: 'POST', // ใช้เมธอด POST ส่งข้อมูล
//         url: $(this).attr('action'), // ใช้ URL ที่กำหนดใน attribute action ของฟอร์ม
//         data: formData, // ส่งข้อมูลที่เก็บไว้ในตัวแปร formData
//         success: function (response) {
//             if (response.success) {

//                 Swal.fire({
//                     title: "Create account success",
//                     icon: "success",
//                     confirmButtonColor: "#0071BC",
//                     confirmButtonText: "Close",
//                     customClass: {
//                       confirmButton: 'swal-confirm-button',
//                     }
//                   });

//                 //  $('#successUpdate').text(response.message); 
//                 //  $('#hiddensuccessUpdate').removeClass('hidden'); 
//             } else {
//                 // ถ้าเข้าสู่ระบบไม่สำเร็จ
//                 $('#statusMessage').text(response.message); // แสดงข้อความแจ้งเตือนใน div ที่มี id="statusMessage"
//                 $('#hiddenError').removeClass('hidden'); // ลบ class "hidden" ออกเพื่อแสดงข้อความแจ้งเตือน

//             }
//         }
//     });
// });




  function validSession(event){
    const facebook = $('#facebook');
    const pinterest = $('#pinterest');
    const instagram = $('#instagram');
    const twitter = $('#twitter');
    const linkedin = $('#linkedin');
    const website = $('#website'); 

    if( facebook.val() || pinterest.val() || instagram.val() || twitter.val() || linkedin.val() || website.val()){
      facebook.addClass('is-valid');
      pinterest.addClass('is-valid');
      instagram.addClass('is-valid');
      twitter.addClass('is-valid');
      linkedin.addClass('is-valid');
      website.addClass('is-valid');
      return;
    }  else if( !facebook.val() || !pinterest.val() || !instagram.val() || !twitter.val() || !linkedin.val() || !website.val()){
      facebook.removeClass('is-valid');
      pinterest.removeClass('is-valid');
      instagram.removeClass('is-valid');
      twitter.removeClass('is-valid');
      linkedin.removeClass('is-valid');
      website.removeClass('is-valid');
      return;
    } 
    
    else {
      facebook.removeClass('is-valid');
      pinterest.removeClass('is-valid');
      instagram.removeClass('is-valid');
      twitter.removeClass('is-valid');
      linkedin.removeClass('is-valid');
      website.removeClass('is-valid');

    }
  
  }

function ContactinFormation(event){
  var firstNameforms = $('#firstName');
  var lastNameforms = $('#lastName');
  var phoneforms = $('#phone');
  var mobileform = $('#mobile');
  var emailfrom = $('#email');

  if( !firstNameforms.val()  ){
    firstNameforms.addClass('is-invalid');
    event.preventDefault();
    event.stopPropagation();
  } else {
    firstNameforms.removeClass('is-invalid');
    firstNameforms.addClass('is-valid');
  }
  if( !lastNameforms.val()  ){
    lastNameforms.addClass('is-invalid');
    event.preventDefault();
    event.stopPropagation();
  } else {
    lastNameforms.removeClass('is-invalid');
    lastNameforms.addClass('is-valid');
  } 
  if( !phoneforms.val()  ){
    phoneforms.addClass('is-invalid');
    event.preventDefault();
    event.stopPropagation();
  } else {
    phoneforms.removeClass('is-invalid');
    phoneforms.addClass('is-valid');
  }
  if( !mobileform.val()  ){
    mobileform.addClass('is-invalid');
    event.preventDefault();
    event.stopPropagation();
  } else {
    mobileform.removeClass('is-invalid');
    mobileform.addClass('is-valid');
  } 
  if( !emailfrom.val()  ){
    emailfrom.addClass('is-invalid');
    event.preventDefault();
    event.stopPropagation();
  } else {
    emailfrom.removeClass('is-invalid');
    emailfrom.addClass('is-valid');
  } 

  event.preventDefault(); // ป้องกันการส่งฟอร์ม
  var formData = $(this).serialize(); // เก็บข้อมูลฟอร์มเข้าตัวแปร formData
  $.ajax({
      type: 'POST', // ใช้เมธอด POST ส่งข้อมูล
      url: $(this).attr('action'), // ใช้ URL ที่กำหนดใน attribute action ของฟอร์ม
      data: formData, // ส่งข้อมูลที่เก็บไว้ในตัวแปร formData
      success: function (response) {
          if (response.success) {

              Swal.fire({
                  title: "Create account success",
                  icon: "success",
                  confirmButtonColor: "#0071BC",
                  confirmButtonText: "Close",
                  customClass: {
                    confirmButton: 'swal-confirm-button',
                  }
                });

              //  $('#successUpdate').text(response.message); 
              //  $('#hiddensuccessUpdate').removeClass('hidden'); 
          } else {
              // ถ้าเข้าสู่ระบบไม่สำเร็จ
              $('#statusMessage').text(response.message); // แสดงข้อความแจ้งเตือนใน div ที่มี id="statusMessage"
              $('#hiddenError').removeClass('hidden'); // ลบ class "hidden" ออกเพื่อแสดงข้อความแจ้งเตือน

          }
      }
  });

}


function passwordCheck (event){
  const password = $('#newPassword');
  const confirm = $('#confirmNewPassword');
  const passwordValidation = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
  var showerrorPassword = $('#errorPassword');
  var showerrorconfirm = $('#errorconfirm');

  if (!confirm.val() && !password.val()){
    confirm.removeClass('border-danger');
    password.removeClass('border-danger');
    showerrorconfirm.text('');
    showerrorPassword.text('');
    return;

  } else if (confirm.val() !== password.val()) {
    showerrorconfirm.text('Passwords do not match');
    confirm.addClass('border-danger');
    password.addClass('border-danger');

    confirm.removeClass('is-valid');
    password.removeClass('is-valid');

    event.preventDefault();
    event.stopPropagation();
    return;

  } else {
      confirm.removeClass('border-danger ');
      password.removeClass('border-danger ');
      showerrorconfirm.text('');
  }


if (!passwordValidation.test(password.val())) {
    showerrorPassword.text('รหัสผ่านควรมีความยาว 8-20 ตัวอักษรขึ้น และต้องประกอบด้วยตัวเลขอย่างน้อย 1 ตัว ตัวอักษร 1 ตัว และเครื่องหมาย 1 ตัว');
    showerrorconfirm.text('รหัสผ่านควรมีความยาว 8-20 ตัวอักษรขึ้น และต้องประกอบด้วยตัวเลขอย่างน้อย 1 ตัว ตัวอักษร 1 ตัว และเครื่องหมาย 1 ตัว');
    password.addClass('border-danger ');
    confirm.addClass('border-danger ');

    password.removeClass('is-valid');
    password.removeClass('is-invalid');
    confirm.removeClass('is-valid');
    confirm.removeClass('is-invalid');

    event.preventDefault();
    event.stopPropagation();
    return;

  } else {
    showerrorPassword.text('');
    password.removeClass('border-danger ');
    confirm.removeClass('border-danger ');

  }

 
}

function readURL(input) {
  if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
          $('#imagePreview').css('background-image', 'url('+e.target.result +')');
          $('#imagePreview').hide();
          $('#imagePreview').fadeIn(650);
      }
      reader.readAsDataURL(input.files[0]);
  }
}
$("#imageUpload").change(function() {
  readURL(this);
});