

    // $(document).ready(function() {
    //   var forms = $('.needs-validation');
    //   forms.on('submit', function(event) {
    //     var firstNameforms = $('#firstName');
    //     var lastNameforms = $('#lastName');
    //     var descriptionforms = $('#description');
    //     if( !firstNameforms.val()  ){
    //       firstNameforms.addClass('is-invalid');
    //       event.preventDefault();
    //       event.stopPropagation();
    //     } else {
    //       firstNameforms.removeClass('is-invalid');
    //       firstNameforms.addClass('is-valid');
    //     }
    //     if( !lastNameforms.val()  ){
    //       lastNameforms.addClass('is-invalid');
    //       event.preventDefault();
    //       event.stopPropagation();
    //     } else {
    //       lastNameforms.removeClass('is-invalid');
    //       lastNameforms.addClass('is-valid');
    //     } 
    //     if( !descriptionforms.val()  ){
    //       descriptionforms.addClass('is-invalid');
    //       event.preventDefault();
    //       event.stopPropagation();
    //     } else {
    //       descriptionforms.removeClass('is-invalid');
    //       descriptionforms.addClass('is-valid');
    //     }   
    //   });
    // });



    $('#contentForm').on('submit', function(event) {
        var forms = $('.needs-validation');
        var firstNameforms = $('#firstName');
        var lastNameforms = $('#lastName');
        var descriptionforms = $('#description');
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
        if( !descriptionforms.val()  ){
          descriptionforms.addClass('is-invalid');
          event.preventDefault();
          event.stopPropagation();
        } else {
          descriptionforms.removeClass('is-invalid');
          descriptionforms.addClass('is-valid');
        }   
      });


      