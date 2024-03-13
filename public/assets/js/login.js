

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


  


$('#modal_email').on('input', function(event) {
  var emailInput = $('#modal_email');
  var emailValue = emailInput.val();
  var showErrorDiv = $('#ShowError');
  // ล้างคลาสทั้งหมดก่อนที่จะตรวจสอบใหม่
  emailInput.removeClass('border-danger is-valid');


  if (emailValue.trim() === '') {
      showErrorDiv.text('Please enter a valid email');
      emailInput.addClass('border-danger');
      event.preventDefault(); // ป้องกันการ submit แบบปกติ
  } else if (emailValue.indexOf('@') === -1 || emailValue.indexOf('.') === -1) {
      showErrorDiv.text('Please include an @ in the email address. "' + emailValue + '" is missing @ or . is incomplete.');
      emailInput.addClass('border-danger');
      event.preventDefault();
  } else if (emailValue.split('.').length < 2 || emailValue.split('.').pop().trim() === '') {
    showErrorDiv.text('Please enter a part following .');
    emailInput.addClass('border-danger');
    event.preventDefault();
  } else {
      emailInput.addClass('is-valid');
      showErrorDiv.text(''); // ล้างข้อความแจ้งเตือนหากไม่มีข้อผิดพลาด
  }      
});


    function onSubmitRegister(event) {
    var emailInput = $('#modal_email');
    const password = $('#modal_password');
    const confirm = $('#modal_confirmPassword');
    var nameInput =$('#modal_name')
    var emailValue = emailInput.val();
    var showErrorDiv = $('#ShowError');
    var showerrorPassword = $('#errorPassword');
    var showerrorconfirm = $('#errorconfirm');
    const passwordValidation = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

    // ล้างคลาสทั้งหมดก่อนที่จะตรวจสอบใหม่
    emailInput.removeClass('border-danger is-valid');
    password.removeClass('is-invalid is-valid border-danger ');
    confirm.removeClass('is-invalid is-valid border-danger ');
    showErrorDiv.text('');
    showerrorPassword.text('');
    showerrorconfirm.text('');

    if(emailValue.trim() === '' && !password.val() && !confirm.val() && !nameInput.val()){
      showErrorDiv.text('Please enter a valid email');
      emailInput.addClass('border-danger');
      password.addClass('is-invalid');
      confirm.addClass('is-invalid');
      nameInput.addClass('is-invalid');
      event.preventDefault();
      event.stopPropagation();
    }else{
      showErrorDiv.text('');
      emailInput.removeClass('border-danger');
      password.removeClass('is-invalid');
      confirm.removeClass('is-invalid');
      nameInput.removeClass('is-invalid');
      nameInput.addClass('is-valid');

    }

    if (emailValue.trim() === '') {
        showErrorDiv.text('Please enter a valid email');
        emailInput.addClass('border-danger');
        event.preventDefault(); // ป้องกันการ submit แบบปกติ
    } else if (emailValue.indexOf('@') === -1 || emailValue.indexOf('.') === -1) {
        showErrorDiv.text('Please include an @ in the email address. "' + emailValue + '" is missing @ or . is incomplete.');
        emailInput.addClass('border-danger');
        event.preventDefault();
    } else if (emailValue.split('.').length < 2 || emailValue.split('.').pop().trim() === '') {
      showErrorDiv.text('Please enter a part following .');
      emailInput.addClass('border-danger');
      event.preventDefault();
    } else {
        emailInput.addClass('is-valid');
        showErrorDiv.text(''); // ล้างข้อความแจ้งเตือนหากไม่มีข้อผิดพลาด
    }

    if (!password.val() && !confirm.val() && !nameInput.val()) {
        password.addClass('is-invalid');
        confirm.addClass('is-invalid');
        nameInput.addClass('is-invalid');

        event.preventDefault();
        event.stopPropagation();
    } else if(password.val() && !confirm.val() && !nameInput.val() ){
      password.addClass('is-valid');
      password.removeClass('is-invalid');
      confirm.addClass('is-invalid');
      nameInput.addClass('is-invalid');
      event.preventDefault();
      event.stopPropagation();
    } else if(confirm.val() && !password.val() && !nameInput.val()){
      confirm.removeClass('is-invalid');
      confirm.addClass('is-valid');
      password.addClass('is-invalid');
      nameInput.addClass('is-invalid');
      event.preventDefault();
      event.stopPropagation();
    } else if(!confirm.val() && !password.val() && nameInput.val()){
      nameInput.removeClass('is-invalid');
      nameInput.addClass('is-valid');
      password.addClass('is-invalid');
      confirm.addClass('is-invalid');
      event.preventDefault();
      event.stopPropagation();
    }else if(confirm.val() && password.val() && !nameInput.val()){
      password.removeClass('is-invalid');
      confirm.removeClass('is-invalid');
      confirm.addClass('is-valid');
      password.addClass('is-valid');
      nameInput.addClass('is-invalid');
      event.preventDefault();
      event.stopPropagation();
    }
      else {
        password.removeClass('is-invalid');
        confirm.removeClass('is-invalid');
        nameInput.removeClass('is-invalid');
        password.addClass('is-valid');
        nameInput.addClass('is-valid');
        confirm.addClass('is-valid');
    }

   // ตรวจสอบว่า modal_password และ modal_confirmPassword ตรงกันหรือไม่
    if (confirm.val() !== password.val()) {
      showerrorconfirm.text('Passwords do not match');
        confirm.addClass('border-danger');
        password.addClass('border-danger');

        confirm.removeClass('is-valid');
        password.removeClass('is-valid');

        event.preventDefault();
        event.stopPropagation();
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
      } else {
        showerrorPassword.text('');
        password.removeClass('border-danger ');
        confirm.removeClass('border-danger ');

      }
     document.getElementById("registerForm").submit();
}

  if($('#modalError').length){
    $('#createAccount').modal('show');
  }

  if($('#modalsuccess').length){
    $('#createAccount').modal('show');
  }
  