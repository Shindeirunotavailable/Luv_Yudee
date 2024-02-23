
    $('body').on('click', '#submitContact', function() {
      alertText();
      function alertText(){  
          var firstNameForm = $('#firstName');
          var lastNameForm = $('#lastName');
          var emailForm = $('#contactEmail');
          var descriptionForm = $('#description');
        
          if (firstNameForm.val().length === 0) {
            firstNameForm.addClass('border-danger');
          }
          else {
            firstNameForm.removeClass('border-danger');
          }
          if (lastNameForm.val().length === 0) {
            lastNameForm.addClass('border-danger');
          }
          else {
            lastNameForm.removeClass('border-danger');
          }
          
          if (emailForm.val().length === 0) {
            emailForm.addClass('border-danger');
          }
          else {
            emailForm.removeClass('border-danger');
          }

          if (descriptionForm.val().length === 0) {
            descriptionForm.addClass('border-danger');
          }
          else {
            descriptionForm.removeClass('border-danger');
          }
           
      }

    });


