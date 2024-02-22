
// function alertContact(){  
//     var form = $('#firstName');
//     var form = $('#lastName');
//     var form = $('#description');

//     console.log(form.val().length);
    
//       if (form.val().length === 0) {
//          $('#firstNameAlert').removeClass('d-none');
//          $('#lastNameAlert').removeClass('d-none');
//          $('#descriptionAlert').removeClass('d-none');
//         return false
//       }
//         return true
//   }


  $('body').on('click', '#submitContact', function() {

    alertContact();
    function alertContact() {
      var firstNameForm = $('#firstName');
      var lastNameForm = $('#lastName');
      var descriptionForm = $('#description');
      var contactEmailForm = $('#contactEmail');
      var isValid = true;
  
      // ตรวจสอบpassword
      if (firstNameForm.val().length === 0) {
        $('#alertfirstName').removeClass('d-none');
        firstNameForm.addClass('border-danger');
        isValid = false;
      }

      // ตรวจสอบConfirmPassword
      if (lastNameForm.val().length === 0) {
        $('#alertLastName').removeClass('d-none');
        lastNameForm.addClass('border-danger');
        isValid = false;
      }

      if (descriptionForm.val().length === 0) {
        $('#alertdescription').removeClass('d-none');
        descriptionForm.addClass('border-danger');
        isValid = false;
      }

      if (contactEmailForm.val().length === 0) {
        contactEmailForm.addClass('border-danger');
        isValid = false;
      }

      return isValid;
    }


  });