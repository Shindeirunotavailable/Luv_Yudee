
//check review
// $("#form_review").click(function() {
//   // console.log('review');
//   const forms = $('.needs-validation');
//     forms.on('submit', function(event) {
//       // var emailInput = $('#email');
//       // var emailValue = emailInput.val();
//       // var showErrorDiv = $('#ShowErrorEmail');
//       const namereview = $('#name');
//       const contentreview = $('#content')
//       const emailreview = $('#email');

//       // emailInput.removeClass('border-danger is-valid');
//       // if (emailValue.trim() === '') {
//       //   showErrorDiv.text('Please enter a valid email');
//       //   emailInput.addClass('border-danger');
//       //   event.preventDefault(); // ป้องกันการ submit แบบปกติ
//       // } else if (emailValue.indexOf('@') === -1 || emailValue.indexOf('.') === -1) {
//       //     showErrorDiv.text('Please include an @ in the email address. "' + emailValue + '" is missing @ or . is incomplete.');
//       //     emailInput.addClass('border-danger');
//       //     event.preventDefault();
//       // } else if (emailValue.split('.').length < 2 || emailValue.split('.').pop().trim() === '') {
//       //   showErrorDiv.text('Please enter a part following .');
//       //   emailInput.addClass('border-danger');
//       //   event.preventDefault();
//       // } else {
//       //     emailInput.addClass('is-valid');
//       //     showErrorDiv.text(''); // ล้างข้อความแจ้งเตือนหากไม่มีข้อผิดพลาด
//       // }
//       if( !namereview.val()  ){
//         namereview.addClass('is-invalid');
//         event.preventDefault();
//         event.stopPropagation();
//         return;
//       } else {
//         namereview.removeClass('is-invalid');
//         namereview.addClass('is-valid');
//       }
//       if( !emailreview.val()  ){
//         emailreview.addClass('is-invalid');
//         event.preventDefault();
//         event.stopPropagation();
//         return;
//       } else {
//         emailreview.removeClass('is-invalid');
//         emailreview.addClass('is-valid');
//       }
//       if( !contentreview.val()  ){
//         contentreview.addClass('is-invalid');
//         event.preventDefault();
//         event.stopPropagation();
//         return;
//       } else {
//         contentreview.removeClass('is-invalid');
//         contentreview.addClass('is-valid');
//       }
//       event.preventDefault();
//       Swal.fire({
//         position: "center",
//         icon: "warning",
//         text: "กรุณารอการอนุมัติรีวิวจากเจ้าหน้าที่",
//         confirmButtonColor: "#0071BC",
//       }).then((result) => {
//                     if (result.isConfirmed) {
//                         $('#form_review').submit();
//                     }
//                 });
//     });
//   });


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

//ลบ
$(document).ready(function(){
  // จัดการคลิกที่ลิงก์ลบ
  $('a.trash-deletes').click(function(e){
      e.preventDefault(); // ยกเลิกการทำงานของลิงก์

      // ดึง URL และ id_review จากลิงก์
      var url = $(this).attr('href');
      var $rowToDelete = $(this).closest('tr'); // ระบุแถวที่ต้องการลบ

      // แสดง SweetAlert
      Swal.fire({
          title: 'คุณแน่ใจหรือไม่ที่ต้องการลบ?',
          text: 'การกระทำนี้ไม่สามารถยกเลิกได้!',
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#d33',
          cancelButtonColor: '#0071BC',
          confirmButtonText: 'ใช่, ลบเลย!',
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
            
                    // ลบแถวที่มีข้อมูลที่ถูกลบออกจากตาราง
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







 
 document.addEventListener("DOMContentLoaded", function() {
  const replyBtns = document.querySelectorAll('.reply-btn');

  replyBtns.forEach(btn => {
    btn.addEventListener('click', function() {
      const parentComment = this.parentElement;
      const repliesSection = parentComment.querySelector('.replies');
      const replyInput = document.createElement('div');
      replyInput.classList.add('reply-input');
      replyInput.innerHTML = `
        <input type="text" placeholder="Type your reply...">
        <button class="submit-reply">Submit</button>
      `;
      repliesSection.appendChild(replyInput);
      const submitBtn = replyInput.querySelector('.submit-reply');
      submitBtn.addEventListener('click', function() {
        const replyText = replyInput.querySelector('input').value;
        if (replyText.trim() !== '') {
          const newReply = document.createElement('p');
          newReply.textContent = replyText;
          repliesSection.appendChild(newReply);
          replyInput.style.display = 'none';
        }
      });
    });
  });
});
$(document).ready(function() {
  $('.reply-link').click(function(e) {
      e.preventDefault();
      $(this).closest('.media-body').find('.reply-form').toggle();
  });
});

  