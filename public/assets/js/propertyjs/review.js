
//check review

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
                    icon: "success",
                    text: "กรุณารอการอนุมัติรีวิวจากเจ้าหน้าที่",
                    confirmButtonColor: "#0071BC",
                })
                $('#content').val("");
                $('#content').removeClass('is-invalid is-valid');
                $('#name').removeClass('is-invalid is-valid');
                $('#email').removeClass('is-invalid is-valid');
                $('input[name="star"]').prop('checked', false);
  
              } else {
                
              }
          }
      });
          
  });
  
  function onSubmitReview (event){
    console.log('555555')
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

//รอการอนุมัติ
  $(document).ready(function(){
    // จัดการคลิกที่ลิงก์
    $('a[id^="approve_review_"]').click(function(e){
        e.preventDefault(); // ยกเลิกการทำงานของลิงก์

        // ดึง URL และ id_review จากลิงก์
        var url = $(this).attr('href');
        var id_review = $(this).attr('id').split('_')[2];

        // แสดง SweetAlert
        Swal.fire({
            title: 'ยืนยันการอนุมัติ?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#0071BC',
            cancelButtonColor: '#d33',
            confirmButtonText: 'ยืนยัน',
            cancelButtonText: 'ยกเลิก'
        }).then((result) => {
            if (result.isConfirmed) {
                // ทำการเปลี่ยนสถานะโดยใช้ Ajax
                $.ajax({
                    type: 'GET',
                    url: url,
                    success: function(data) {
                        // หากทำการเปลี่ยนสถานะสำเร็จ
                        Swal.fire({
                          title: 'อนุมัติเรียบร้อย!',
                          icon: 'success',
                          confirmButtonColor: '#0071BC',
                      }).then((result) => {
                            // ทำการอัพเดตสถานะของปุ่ม
                            $('#approve_review_'+id_review).removeClass('btn-warning').addClass('btn-success').text('อนุมัติแล้ว');
                        });
                    },
                    error: function(xhr, status, error) {
                        // หากเกิดข้อผิดพลาดในการเปลี่ยนสถานะ
                        Swal.fire(
                            'ข้อผิดพลาด!',
                            'เกิดข้อผิดพลาดในการอนุมัติรีวิว',
                            'error'
                        );
                    }
                });
            }
        });
    });
});

//อนุมัติ
$(document).ready(function(){
  // จัดการคลิกที่ลิงก์
  $('a[id^="approve_review_"]').click(function(e){
      e.preventDefault(); // ยกเลิกการทำงานของลิงก์

      // ดึง URL และ id_review จากลิงก์
      var url = $(this).attr('href');
      var id_review = $(this).attr('id').split('_')[2];
      var $button = $(this); // เก็บอ้างอิงปุ่มที่ถูกคลิกไว้ในตัวแปร

      // ตรวจสอบสถานะปุ่ม
      if ($button.hasClass('disabled')) {
          return false; // ถ้าปุ่มถูกปิดใช้งานให้ไม่ทำงาน
      }

      // แสดง SweetAlert
      var swalText = ($button.hasClass('btn-success')) ? 'ยืนยันการยกเลิกอนุมัติ?' : 'ยืนยันการอนุมัติ?';
      Swal.fire({
          title: swalText,
          icon: 'question',
          showCancelButton: true,
          confirmButtonColor: '#0071BC',
          cancelButtonColor: '#d33',
          confirmButtonText: 'ยืนยัน',
          cancelButtonText: 'ยกเลิก'
      }).then((result) => {
          if (result.isConfirmed) {
              // ทำการเปลี่ยนสถานะโดยใช้ Ajax
              $.ajax({
                  type: 'GET',
                  url: url,
                  success: function(data) {
                      // หากทำการเปลี่ยนสถานะสำเร็จ
                      var newClass = ($button.hasClass('btn-success')) ? 'btn-warning' : 'btn-success';
                      var newText = ($button.hasClass('btn-success')) ? 'รอการอนุมัติ' : 'อนุมัติแล้ว';
                      Swal.fire({
                        title: (newClass === 'btn-success') ? 'อนุมัติเรียบร้อย!' : 'ยกเลิกอนุมัติเรียบร้อย!',
                        text: '',
                        icon: 'success',
                        confirmButtonColor: '#0071BC', 
                    }).then((result) => {
                          // ทำการอัพเดตสถานะของปุ่ม
                          $button.removeClass('btn-warning btn-success').addClass(newClass).text(newText);
                      });
                  },
                  error: function(xhr, status, error) {
                      // หากเกิดข้อผิดพลาดในการเปลี่ยนสถานะ
                      Swal.fire(
                          'ข้อผิดพลาด!',
                          (newClass === 'btn-success') ? 'เกิดข้อผิดพลาดในการยกเลิกอนุมัติรีวิว' : 'เกิดข้อผิดพลาดในการอนุมัติรีวิว',
                          'error'
                      );
                  }
              });
          }
      });
  });
});

$(document).ready(function(){
    // จัดการคลิกที่ลิงก์ลบ
    $('a.trash-deletes').click(function(e){
        e.preventDefault(); // ยกเลิกการทำงานของลิงก์

        // ดึง URL และ id_review จากลิงก์
        var url = $(this).attr('href');
        var $rowToDelete = $(this).closest('.review-item'); // ระบุอิงค์ประกอบที่ต้องการลบ

        // แสดง SweetAlert
        Swal.fire({
            title: 'คุณแน่ใจหรือไม่ที่ต้องการลบ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#0071BC',
            confirmButtonText: 'ใช่',
            cancelButtonText: 'ยกเลิก'
        }).then((result) => {
            if (result.isConfirmed) {
                // ทำการลบโดยใช้ Ajax
                $.ajax({
                    type: 'GET',
                    url: url,
                    success: function(data) {
                        // หากการลบสำเร็จ
                        Swal.fire({
                            title: 'ลบเรียบร้อย!',
                            text: '',
                            icon: 'success',
                            confirmButtonColor: '#0071BC', // กำหนดสีเขียวสำหรับปุ่มยืนยัน
                        });

                        // ลบอิงค์ประกอบที่มีข้อมูลที่ถูกลบออกจากหน้าเว็บ
                        $rowToDelete.fadeOut(500, function() {
                            $(this).remove();
                        });
                    },
                    error: function(xhr, status, error) {
                        // หากเกิดข้อผิดพลาดในการลบ
                        Swal.fire(
                            'ข้อผิดพลาด!',
                            'เกิดข้อผิดพลาดในการลบ',
                            'error'
                        );
                    }
                });
            }
        });
    });
});
    
function openReplyModal(id_review) {
    // กำหนดค่า id_review ให้กับ input hidden ใน modal
    document.getElementById('id_review_modal').value = id_review;
    // เปิด modal
    $('#replyModal').modal('show');
}

$(document).on('submit', '#form_reply_modal', function(event) {
    event.preventDefault(); // ป้องกันการส่งฟอร์ม
    onSubmitReply(event);

    var formData = $(this).serialize(); // เก็บข้อมูลฟอร์มเข้าตัวแปร formData
    $.ajax({
        type: 'POST', // ใช้เมธอด POST ส่งข้อมูล
        url: $(this).attr('action'), // ใช้ URL ที่กำหนดใน attribute action ของฟอร์ม
        data: formData, // ส่งข้อมูลที่เก็บไว้ในตัวแปร formData
        success: function(response) {
            if (response.success) {
                Swal.fire({
                    position: "center",
                    icon: "success",
                    text: "กรุณารอการอนุมัติรีวิวจากเจ้าหน้าที่",
                    confirmButtonColor: "#0071BC",
                });
                $('#content_reply').val("");
                $('#content_reply').removeClass('is-invalid is-valid');
                $('#name_reply').removeClass('is-invalid is-valid');
                $('#email_reply').removeClass('is-invalid is-valid');
            } else {
                // กรณีไม่สำเร็จ คุณสามารถทำอะไรก็ได้ตามความเหมาะสม
            }
        }
    });
});

function onSubmitReply(event) {
    const namereply = $('#name_reply');
    const contentreply = $('#content_reply');
    const emailreply = $('#email_reply');
    if( !namereply.val()  ){
              namereply.addClass('is-invalid');
              event.preventDefault();
              event.stopPropagation();
              return;
            } else {
              namereply.removeClass('is-invalid');
              namereply.addClass('is-valid');
            }
            if( !emailreply.val()  ){
              emailreply.addClass('is-invalid');
              event.preventDefault();
              event.stopPropagation();
              return;
          
            } else {
              emailreply.removeClass('is-invalid');
              emailreply.addClass('is-valid');
            }
            if( !contentreply.val()  ){
              contentreply.addClass('is-invalid');
              event.preventDefault();
              event.stopPropagation();
              return;
          
            } else {
              contentreply.removeClass('is-invalid');
              contentreply.addClass('is-valid');
            }
           
          }
        



