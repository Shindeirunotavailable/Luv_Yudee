
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
  

  $(document).ready(function() {
    function confirmation(event) {
        event.preventDefault();
        var urlToRedirect = event.currentTarget.getAttribute('href');
  
        Swal.fire({
          position: "center",
          title: "Are you sure?",
          text: "You won't be able to revert this!",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#0071bc",
          cancelButtonColor: "#d33",
          confirmButtonText: "Yes, delete it!"
      })
      .then((willDelete) => {
          if (willDelete.isConfirmed) {
              window.location.href = urlToRedirect;
              
          } else {
              
          }
      });
    }
  
    $('.approve-success').on('click', function(event) {
        confirmation(event);
    });
  });