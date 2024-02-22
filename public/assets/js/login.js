

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




    // เช็คค่าว่างใน input
    function alertText(){  
        var form = $('#password');
        // console.log(form.val().length);
        
          if (form.val().length === 0) {
            $('#textAlert').removeClass('d-none');
            form.addClass('border-danger');
            return false
          }
            return true
      }

      $('body').on('click', '#submitModalBtn', function() {
        alertText();
        function alertText(){  
          var form = $('#password');
          console.log(form.val().length);
          
            if (form.val().length === 0) {
              $('#textAlert').removeClass('d-none');
              form.addClass('border-danger');
              return false
            }
            else {
              $('#textAlert').addClass('d-none');
              form.removeClass('border-danger');
              return true
            }
             
        }

      });




  // ใช้เช็คว่าว่างใน modal
$('body').on('click', '#submitModal', function() {
    // เรียกใช้ modalTextAlert
    
    modalTextAlert();
    function modalTextAlert() {
      var firstNameForm = $('#modal_password');
      var tellForm = $('#modal_confirmPassword');
      // var isValid = true;
          console.log(firstNameForm.val().length);
          console.log(tellForm.val().length);

      if (firstNameForm.val().length === 0) {
        $('#alertModalPassword').removeClass('d-none');
        firstNameForm.addClass('border-danger');
        isValid = false;
      } 

      // ตรวจสอบConfirmPassword

      if (tellForm.val().length === 0) {
        
        $('#alertModalConfirmPassword').removeClass('d-none');
        tellForm.addClass('border-danger');
        isValid = false;
        
      }
      console.log(isValid);
      return isValid;
    }


  });



