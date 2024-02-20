
$(document).ready(function() {
    $(".dropbtn").click(function() {
        var dropdownContent = $(this).next(".dropdown-content");
        dropdownContent.toggleClass("show");
    });

    $(document).click(function(event) {
        if (!$(event.target).hasClass("dropbtn")) {
            $(".dropdown-content").removeClass("show");
        }
    });
});


$(document).ready(function() {
    const sidebarItems = $(".sidebar_list_item");
    const items = $(".items-center-db");

    sidebarItems.each(function(index, item) {
        $(item).on("click", function() {
            sidebarItems.removeClass("-is-active");
            $(this).addClass("-is-active");
        });
    });

    items.each(function(index, item) {
        $(item).on("click", function() {
            items.removeClass("-is-active active");
            $(this).addClass("-is-active");
        });
    });
});



$(document).ready(function() {
    $('#selectcategory').val('1');
    $('#selectcategory').select2({
        placeholder: "Select...",
        allowClear: true
    });

    $('#propertystatus').val('1');
    $('#propertystatus').select2({
        placeholder: "Select...",
        allowClear: true
    });


});

$(document).ready(function() {
    $('#provinces').select2({
        placeholder: "กรุณาเลือกจังหวัด"
    });
    $('#amphures').select2();
    $('#districts').select2();
});



// db_provinces
        var getUrl = window.location;
        var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" ;
        // var csrf = $('meta[name="csrf-token"]').attr('content');
        var lang = document.documentElement.lang;
        // console.log(lang,getUrl,baseUrl,csrf);
        // var url = '/db_provinces';

    $('#provinces').change(function() {
        var id_provinces = $(this).val();
        // console.log($('#db_provinces').val())
         // console.log($("input[name=_token]").val())
        $.ajax({
            type: "post",
            url: baseUrl+"db_provinces",
            data: {
                id: id_provinces,
                function: 'provinces',
                '_token': csrf
            },
            success: function(response) {
                console.log(response)
                $('#amphures').html(response.options);
                $('#districts').html('');
                $('#zipcode').val('');
            }
        });

    });
    $('#amphures').change(function() {
        var id_amphures = $(this).val();
        $.ajax({
            type: "post",
            url: baseUrl+"db_provinces",
            data: {
                id: id_amphures,
                function: 'amphures',
                '_token': csrf
            },
            success: function(response) {
                $('#districts').html(response.options);
                $('#zipcode').val('');
            }
        });
    });
    $('#districts').change(function() {
        var id_districts = $(this).val();
        $.ajax({
            type: "post",
            url: baseUrl+"db_provinces",
            data: {
                id: id_districts,
                function: 'districts',
                '_token': csrf
            },
            success: function(response) {
                $('#zipcode').val(response.zip_code);

            }
        });
    });

    if (document.querySelector('#editor')) {
        ClassicEditor
            .create(document.querySelector('#editor'), {
                 removePlugins: [ '' ],

                 toolbar: [ 'Undo', 'Redo', 'Heading', 'Bold', 'Italic', 'Link', 'InsertTable', 'BlockQuote', 'BulletedList'
                 , 'NumberedList' ]
            } )
            // .then(editor => {
            //     // console.log(editor);
            // })

            .catch(error => {
                // console.error(error);
            });
    }


    //Upload Image
    $(document).ready(function() {
        if ($('#customIMG').length) {
            $('#customIMG').on('change', function(e) {
                var fileList = $('#fileList');
                fileList.html('');

                var files = e.target.files;
                for (var i = 0; i < files.length; i++) {
                    var file = files[i];

                    var colDiv = $('<div></div>').addClass('col-2');

                    var img = $('<img />').attr('src', URL.createObjectURL(file)).css({
                        'width': '100%',
                        'margin-bottom': '20px'
                    });
                    colDiv.append(img);

                    // Add delete button for each image
                    var deleteButton = $('<button></button>').addClass('btn btn-danger delete-button').text('X');
                    deleteButton.click(function() {
                        $(this).parent().remove(); // Remove the parent container (colDiv) of the clicked delete button
                    });
                    colDiv.prepend(deleteButton); // Prepend delete button to the colDiv container

                    fileList.append(colDiv);
                }
            });
        }
        if ($('#customVdo').length) {
            $('#customVdo').on('change', function(e) {
                var VdoList = $('#VdoList');
                VdoList.html('');

                var files = e.target.files;
                for (var i = 0; i < files.length; i++) {
                    var file = files[i];

                    var colDiv = $('<div></div>').addClass('col-4');

                    var video = $('<video></video>').attr({
                        'src': URL.createObjectURL(file),
                        'controls': true
                    }).css({
                        'width': '100%',
                        'margin-bottom': '20px'
                    });
                    colDiv.append(video);
                    var deleteButton = $('<button></button>').addClass('btn btn-danger delete-button').text('X');
                    deleteButton.click(function() {
                        $(this).parent().remove();
                    });
                    colDiv.prepend(deleteButton);

                    VdoList.append(colDiv);
                }
            });
        }

    });



