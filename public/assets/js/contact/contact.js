
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


 

    function alertContact() {
      var firstNameForm = $('#firstName');
      var lastNameForm = $('#lastName');
      var descriptionForm = $('#description');
      var isValid = true;

        console.log(firstNameForm);
        console.log(lastNameForm);
        console.log(descriptionForm);

        // ตรวจสอบ First Name
      if (firstNameForm.val().length === 0) {
        $('#alertfirstName').removeClass('d-none');
        firstNameForm.addClass('border-danger');
        isValid = false;
      } else {
        $('#alertfirstName').addClass('d-none');
        firstNameForm.removeClass('border-danger');
      }

      if (lastNameForm.val().length === 0) {
        $('#alertLastName').removeClass('d-none');
        lastNameForm.addClass('border-danger');
        isValid = false;
      } else {
        $('#alertLastName').addClass('d-none');
        lastNameForm.removeClass('border-danger');
      }

      if (descriptionForm.val().length === 0) {
        $('#alertdescription').removeClass('d-none');
        descriptionForm.addClass('border-danger');
        isValid = false;
      } else {
        $('#alertdescription').addClass('d-none');
        descriptionForm.removeClass('border-danger');
      }

      
      console.log(isValid);
      return isValid;
    }

