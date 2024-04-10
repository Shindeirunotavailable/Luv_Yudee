///////////////////////// Profile.blade //////////////////////////////////////////
      
$('#profileForm').on('submit', function(event) {
    var forms = $('.needs-validation');

    var fname = $('#firstName').val();
    var lname = $('#lastName').val();
    var fullName = fname + " " + lname;
    $('#nameUser').val(fullName);

    ContactinFormation(event);
    passwordCheck(event);
    validSession(event);

  });

  




  $('#profileForm').submit(function (event) {
    var firstNameforms = $('#firstName');
    var lastNameforms = $('#lastName');
    var phoneforms = $('#phone');
    var mobileform = $('#mobile');
    var emailfrom = $('#email');
    
    if(!firstNameforms.val() &&!lastNameforms.val() && !phoneforms.val() && !mobileform.val() && !emailfrom.val()   ){
      firstNameforms.addClass('is-invalid');
      lastNameforms.addClass('is-invalid');
      phoneforms.addClass('is-invalid');
      mobileform.addClass('is-invalid');
      emailfrom.addClass('is-invalid');

      event.preventDefault();
      event.stopPropagation();
      return;
    }

    if( !firstNameforms.val()  ){
      firstNameforms.addClass('is-invalid');
      event.preventDefault();
      event.stopPropagation();
      return;
  
    } else {
      firstNameforms.removeClass('is-invalid');
      firstNameforms.addClass('is-valid');
    }
    if( !lastNameforms.val()  ){
      lastNameforms.addClass('is-invalid');
      event.preventDefault();
      event.stopPropagation();
      return;
  
    } else {
      lastNameforms.removeClass('is-invalid');
      lastNameforms.addClass('is-valid');
    } 
    if( !phoneforms.val()  ){
      phoneforms.addClass('is-invalid');
      event.preventDefault();
      event.stopPropagation();
      return;
  
    } else {
      phoneforms.removeClass('is-invalid');
      phoneforms.addClass('is-valid');
    }
    if( !mobileform.val()  ){
      mobileform.addClass('is-invalid');
      event.preventDefault();
      event.stopPropagation();
      return;
  
    } else {
      mobileform.removeClass('is-invalid');
      mobileform.addClass('is-valid');
    } 
    if( !emailfrom.val()  ){
      emailfrom.addClass('is-invalid');
      event.preventDefault();
      event.stopPropagation();
      return;
    } else {
      emailfrom.removeClass('is-invalid');
      emailfrom.addClass('is-valid');
    } 

    var formData = $(this).serialize(); // เก็บข้อมูลฟอร์มเข้าตัวแปร formData
    $.ajax({
        type: 'POST', // ใช้เมธอด POST ส่งข้อมูล
        url: $(this).attr('action'), // ใช้ URL ที่กำหนดใน attribute action ของฟอร์ม
        data: formData, // ส่งข้อมูลที่เก็บไว้ในตัวแปร formData
        success: function (response) {
            if (response.success) {

                Swal.fire({
                    title: "update profile success",
                    icon: "success",
                    confirmButtonColor: "#0071BC",
                    confirmButtonText: "Close",
                    customClass: {
                      confirmButton: 'swal-confirm-button',
                    }
                  });

                 $('#firstName').removeClass('is-invalid is-valid'); 
                 $('#lastName').removeClass('is-invalid is-valid'); 
                 $('#phone').removeClass('is-invalid is-valid'); 
                 $('#mobile').removeClass('is-invalid is-valid'); 
                 $('#email').removeClass('is-invalid is-valid'); 

                 $('#facebook').removeClass('is-invalid is-valid'); 
                 $('#pinterest').removeClass('is-invalid is-valid'); 
                 $('#instagram').removeClass('is-invalid is-valid'); 
                 $('#twitter').removeClass('is-invalid is-valid'); 
                 $('#linkedin').removeClass('is-invalid is-valid'); 
                 $('#website').removeClass('is-invalid is-valid'); 
                 $('#formGroupExampleInput').removeClass('is-invalid is-valid'); 
                //  $('#successUpdate').text(response.message); 
                //  $('#hiddensuccessUpdate').removeClass('hidden'); 
            } else {
                $('#statusMessage').text(response.message); 
                $('#hiddenError').removeClass('hidden'); 

            }
        }
    });
});



  function validSession(event) {
    const elements = ['#facebook', '#pinterest', '#instagram', '#twitter', '#linkedin', '#website','#formGroupExampleInput'];

    elements.forEach(element => {
        const $element = $(element);

        if ($element.val()) {
            $element.addClass('is-valid');
        } else {
            $element.removeClass('is-valid');
        }
    });
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
    return;

  } else {
    firstNameforms.removeClass('is-invalid');
    firstNameforms.addClass('is-valid');
  }
  if( !lastNameforms.val()  ){
    lastNameforms.addClass('is-invalid');
    event.preventDefault();
    event.stopPropagation();
    return;

  } else {
    lastNameforms.removeClass('is-invalid');
    lastNameforms.addClass('is-valid');
  } 
  if( !phoneforms.val()  ){
    phoneforms.addClass('is-invalid');
    event.preventDefault();
    event.stopPropagation();
    return;

  } else {
    phoneforms.removeClass('is-invalid');
    phoneforms.addClass('is-valid');
  }
  if( !mobileform.val()  ){
    mobileform.addClass('is-invalid');
    event.preventDefault();
    event.stopPropagation();
    return;

  } else {
    mobileform.removeClass('is-invalid');
    mobileform.addClass('is-valid');
  } 
  if( !emailfrom.val()  ){
    emailfrom.addClass('is-invalid');
    event.preventDefault();
    event.stopPropagation();
    return;
  } else {
    emailfrom.removeClass('is-invalid');
    emailfrom.addClass('is-valid');
  } 

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
          $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
      }
      reader.readAsDataURL(input.files[0]);
  } else {
      $('#imagePreview').css('background-image', 'url(https://static.vecteezy.com/system/resources/previews/008/442/086/non_2x/illustration-of-human-icon-user-symbol-icon-modern-design-on-blank-background-free-vector.jpg)');
  }
}
$("#imageuser").change(function() {
  readURL(this);
});


$(document).ready(function(){
  $('#searchUser').on('keyup', function(){
      var searchText = $(this).val().toLowerCase();
      $('.review-item').each(function(){
          var name = $(this).find('.text-heading').text().toLowerCase();
          var email = $(this).find('.font-700:contains('+searchText+')').text().toLowerCase();
          var phone = $(this).find('.font-700:contains('+searchText+')').text().toLowerCase();
          if(name.includes(searchText) || email.includes(searchText) || phone.includes(searchText)){
              $(this).show();
          }else{
              $(this).hide();
          }
      });
  });
});





//////////////////////////////////////////////////// test js ///////////////////////////////////////////////

// $(".trash-delete").click(function() {
//     forms.on('submit', function(event) {
//       event.preventDefault(); // ป้องกันการส่งฟอร์ม
//       var formData = $(this).serialize(); // เก็บข้อมูลฟอร์มเข้าตัวแปร formData
//       $.ajax({
//           type: 'POST', // ใช้เมธอด POST ส่งข้อมูล
//           url: $(this).attr('action'), // ใช้ URL ที่กำหนดใน attribute action ของฟอร์ม
//           data: formData, // ส่งข้อมูลที่เก็บไว้ในตัวแปร formData
//           success: function (response) {
//               if (response.success) {

//                 Swal.fire({
//                   title: "Create account success",
//                   icon: "success",
//                   confirmButtonColor: "#0071BC",
//                   confirmButtonText: "Close",
//                   customClass: {
//                     confirmButton: 'swal-confirm-button',
//                   }
//                 });

//               }
//           }
//       });     
//     });
//   });

$('.del-review').click(function (event) {
  event.preventDefault(); // ป้องกันการโหลดหน้าใหม่
  var id_review = $(this).data('id'); // รับค่า id_review จากแอตทริบิวต์ data-id
  var csrfToken = $('meta[name="csrf-token"]').attr('content');

  $.ajax({
      type: 'GET',
      url: '/deletereview/' + id_review, // URL ของเส้นทาง deletereview พร้อมกับพารามิเตอร์ id_review
      data: { _token: csrfToken,  },
      success: function (response) {
          if (response.success) {
              // หากการลบรีวิวสำเร็จ
              Swal.fire({
                  title: "delete success",
                  icon: "success",
                  confirmButtonColor: "#0071BC",
                  confirmButtonText: "Close",
                  customClass: {
                      confirmButton: 'swal-confirm-button',
                  }
              });
          }
      }
  });
});


// $('.del-review').click(function (event) {
//   event.preventDefault(); // ป้องกันการโหลดหน้าใหม่
//   var id_review = $(this).data('id'); // รับค่า id_review จากแอตทริบิวต์ data-id

//   // แสดงข้อความยืนยันการลบ
//   Swal.fire({
//       title: 'คุณแน่ใจหรือไม่?',
//       text: 'คุณต้องการที่จะลบรีวิวนี้?',
//       icon: 'warning',
//       showCancelButton: true,
//       confirmButtonColor: '#d33',
//       cancelButtonColor: '#3085d6',
//       confirmButtonText: 'ใช่, ลบรีวิว!',
//       cancelButtonText: 'ยกเลิก'
//   }).then((result) => {
//       if (result.isConfirmed) {
//           var csrfToken = $('meta[name="csrf-token"]').attr('content');
//           $.ajax({
//               type: 'POST',
//               data: {
//                   _token: csrfToken, // แนบ CSRF token ไปยังข้อมูลที่ส่ง
//               },
//               url: '/deletereview/' + id_review, // URL ของเส้นทาง deletereview พร้อมกับพารามิเตอร์ id_review
//               success: function (response) {
//                   if (response.success) {
//                       // หากการลบรีวิวสำเร็จ
//                       Swal.fire({
//                           title: 'ลบรีวิวสำเร็จ!',
//                           text: 'รีวิวถูกลบออกจากระบบแล้ว',
//                           icon: 'success',
//                           confirmButtonColor: '#0071BC',
//                           confirmButtonText: 'Close',
//                           customClass: {
//                               confirmButton: 'swal-confirm-button',
//                           }
//                       });

//                       // ซ่อนปุ่มลบรีวิวที่ถูกคลิก
//                       $('.del-review[data-id="' + id_review + '"]').hide();
//                   }
//               }
//           });
//       }
//   });
// });




