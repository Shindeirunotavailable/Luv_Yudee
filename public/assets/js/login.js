

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



      $('body').on('click', '#submitModalBtn', function() {
        alertText();
        function alertText(){  
          var passwordForm = $('#password');
          var emailForm = $('#email');

         
          if (emailForm.val().length === 0) {
            emailForm.addClass('border-danger');
          }
          else {
            emailForm.removeClass('border-danger');
          }
            if (passwordForm.val().length === 0) {
              passwordForm.addClass('border-danger');
            }
            else {
              passwordForm.removeClass('border-danger');
            }
             
        }

      });


      $('body').on('click', '#exampleModal', function() {
        modalTextAlert();
        function modalTextAlert() {
          var emailmodlForm = $('#modal_email');
          var firstNameForm = $('#modal_password');
          var tellForm = $('#modal_confirmPassword');

          if (emailmodlForm.val().length === 0) {
            emailmodlForm.addClass('border-danger');
          }else {
            emailmodlForm.removeClass('border-danger');
          } 
          if (firstNameForm.val().length === 0) {
            firstNameForm.addClass('border-danger');
          }else {
            firstNameForm.removeClass('border-danger');
          } 
          if (tellForm.val().length === 0) {
            tellForm.addClass('border-danger');
          }else {
            tellForm.removeClass('border-danger');
          } 

        }        
  
      });


      $('body').on('click', '#forgetPassword', function() {
        modalTextAlert();
        function modalTextAlert() {
          var forgetEmailForm = $('#forgetEmail');

          if (forgetEmailForm.val().length === 0) {
            forgetEmailForm.addClass('border-danger');
          }else {
            forgetEmailForm.removeClass('border-danger');
          }  

        }        
  
      });