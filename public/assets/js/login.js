

// สมัครสมาชิก
var getUrl = window.location;
var baseUrl = getUrl .protocol + "//" + getUrl.host + "/";
var csrf = $("meta[name='csrf-token']").attr("content");  //token 
$('.registe').click(function(){ //$.register คือชื่อ class ของปุ่มที่เราจะกด ถ้าเป็น ID จะต้อง #register
    // console.log(csrf)
    $.ajax({
                url: baseUrl+"createaccount", // กำนหดเส้นทางใน Route เพื่อส่งค่าไปยัง route
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
var getUrl = window.location;
var baseUrl = getUrl .protocol + "//" + getUrl.host + "/";
var csrf = $("meta[name='csrf-token']").attr("content");  //token 
$('.Forgetpassword').click(function(){ //$.register คือชื่อ class ของปุ่มที่เราจะกด ถ้าเป็น ID จะต้อง #register
    // console.log(csrf)
    $.ajax({
                url: baseUrl+"Forgetpassword", // กำนหดเส้นทางใน Route เพื่อส่งค่าไปยัง route
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

