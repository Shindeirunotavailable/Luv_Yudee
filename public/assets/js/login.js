

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

 $('body').on('click', '#exampleModal', function() {
        var forms = $('.needs-validation');
    $('#exampleModal form').submit(function(event) {
        var firstNameforms = $('#modal_password');
        var lastNameforms = $('#modal_confirmPassword');

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
    });

});



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

