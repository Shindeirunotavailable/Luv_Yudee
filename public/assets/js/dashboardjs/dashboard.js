
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
    // $('#selectcategory').val("");
    $('#selectcategory').select2({
        placeholder: "Select...",
        // allowClear: true
    });

    // $('#propertystatus').val("");
    $('#propertystatus').select2({
        placeholder: "Select...",
        // allowClear: true
    });
    $('#provinces').select2({
        placeholder: "กรุณาเลือกจังหวัด"
    });
    $('#amphures').select2();
    $('#districts').select2();

});
// map
    $(document).ready(function() {
        $('#latitudeInput, #longitudeInput').change(updateMap);

        function updateMap() {
            var latitude = $('#latitudeInput').val();
            var longitude = $('#longitudeInput').val();
            // console.log(latitude,longitude);
            if (!latitude || !longitude) {
                $('#mapFrame').attr('src', 'https://maps.google.com/maps?q=0,0&output=embed');
                return;
            }

            var mapSrc = "https://maps.google.com/maps?q=" + latitude + "," + longitude + "&output=embed&hl=th";
            $('#mapFrame').attr('src', mapSrc);
        }

        $(document).ready(function() {
            updateMap();
        });
    });

// db_provinces
        var getUrl = window.location;
        var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" ;
        var lang = document.documentElement.lang;

    $('#provinces').change(function() {
        var id_provinces = $(this).val();
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
            .catch(error => {
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
                    VdoList.append(colDiv);
                }
            });
        }

    });


// decimalinput
$("input[data-type='decimalinput']").on({
    keyup: function() {
        formatCurrency($(this));
    },
    blur: function() {
        formatCurrency($(this), "blur");
    }
});

function formatNumber(n) {
    return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, "");
}

function formatCurrency(input, blur) {
    var input_val = input.val();
    if (input_val === "") { return; }
    var original_len = input_val.length;
    var caret_pos = input.prop("selectionStart");

    if (input_val.indexOf(".") >= 0) {
        var decimal_pos = input_val.indexOf(".");
        var left_side = input_val.substring(0, decimal_pos);
        var right_side = input_val.substring(decimal_pos);
        left_side = formatNumber(left_side);
        right_side = formatNumber(right_side);

        if (blur === "blur") {
            right_side += "00";
        }

        right_side = right_side.substring(0, 2);
        input_val = left_side + "." + right_side;

    } else {
        input_val = formatNumber(input_val);

        if (blur === "blur") {
            input_val += ".00";
        }
    }

    input.val(input_val);

    var updated_len = input_val.length;
    caret_pos = updated_len - original_len + caret_pos;
    input[0].setSelectionRange(caret_pos, caret_pos);
}
// Event Handling
  $('body').on('click', '#nav-media-tab, #nav-location-tab, #nav-detail-tab, #nav-amenities-tab' , function(event) {
    var forms = $('.needs-validation');
    // console.log('dasdas')
    var titleproperty = $('#titleproperty');
    var price = $('#price');
    var address = $('#address');
    var latitudeInput = $('#latitudeInput');
    var longitudeInput = $('#longitudeInput');

    var provinces = $('#provinces');
    var errorprovinces = $('#errorprovinces');
    var amphures = $('#amphures');
    var erroramphures = $('#erroramphures');
    var districts = $('#districts');
    var errordistricts = $('#errordistricts');
    var errorMessage = 'ต้องระบุข้อมูลที่อยู่สถานที่';
    var errorElement = '<div class="invalid-feedback additional-message">' + errorMessage + '</div>';

    if( !titleproperty.val()  ){
            titleproperty.addClass('is-invalid');
                event.preventDefault();
                event.stopPropagation();
              } else if (!price.val()){
                price.addClass('is-invalid');
                event.preventDefault();
                event.stopPropagation();
              }

        titleproperty.on('input', function() {
            if (!$(this).val()) {
                $(this).addClass('is-invalid');
            } else {
                $(this).removeClass('is-invalid');
            }
        });

        price.on('input', function() {
            if (!$(this).val()) {
                $(this).addClass('is-invalid');
            } else {
                $(this).removeClass('is-invalid');
            }
        });

    if (!address.val() && $(this).is('#nav-detail-tab, #nav-amenities-tab')) {
            address.addClass('is-invalid');
            event.preventDefault();
            event.stopPropagation();
            }else if (!latitudeInput.val()&& $(this).is('#nav-detail-tab, #nav-amenities-tab')){
                latitudeInput.addClass('is-invalid');
                event.preventDefault();
                event.stopPropagation();
            }else if (!longitudeInput.val()&& $(this).is('#nav-detail-tab, #nav-amenities-tab')){
                longitudeInput.addClass('is-invalid');
                event.preventDefault();
                event.stopPropagation();
            }

        address.on('input', function() {
            if (!$(this).val()) {
                $(this).addClass('is-invalid');
            } else {
                $(this).removeClass('is-invalid');
            }
        });

        latitudeInput.on('input', function() {
            if (!$(this).val()) {
                $(this).addClass('is-invalid');
            } else {
                $(this).removeClass('is-invalid');
            }
        });

        longitudeInput.on('input', function() {
            if (!$(this).val()) {
                $(this).addClass('is-invalid');
            } else {
                $(this).removeClass('is-invalid');
            }
        });

        if (!provinces.val() && $(this).is('#nav-detail-tab, #nav-amenities-tab')) {
            errorprovinces.addClass('is-invalid');
            errorprovinces.next('.additional-message').remove();
            errorprovinces.after(errorElement);
            event.preventDefault();
            event.stopPropagation();
        }

        if (!amphures.val() && $(this).is('#nav-detail-tab, #nav-amenities-tab')) {
            erroramphures.addClass('is-invalid');
            erroramphures.next('.additional-message').remove();
            erroramphures.after(errorElement);
            event.preventDefault();
            event.stopPropagation();
        }

        if (!districts.val() && $(this).is('#nav-detail-tab, #nav-amenities-tab')) {
            errordistricts.addClass('is-invalid');
            errordistricts.next('.additional-message').remove();
            errordistricts.after(errorElement);
            event.preventDefault();
            event.stopPropagation();
        }

        provinces.on('input', function() {
            if (!$('#errorprovinces').val()) {
                $('#errorprovinces').next('.additional-message').remove();
            } else {
                $('#errorprovinces').next('.additional-message').remove();
            }
        });
        amphures.on('input', function() {
            if (!$('#erroramphures').val()) {
                $('#erroramphures').next('.additional-message').remove();
            } else {
                $('#erroramphures').next('.additional-message').remove();
            }
        });
        districts.on('input', function() {
            if (!$('#errordistricts').val()) {
                $('#errordistricts').next('.additional-message').remove();
            } else {
                $('#errordistricts').next('.additional-message').remove();
            }
        });

});

$('#submitpp').click(function(event) {
    var checkboxes = $('.checkbox-style1 input[type="checkbox"]');
    var errorMessage = 'กรุณาเลือกอย่างน้อย1รายการ';
    var errorElement = '<div class="invalid-feedback">' + errorMessage + '</div>';
    var error = $('#error');
    var isChecked = false;

    function validateCheckboxes() {
        isChecked = false;
        checkboxes.each(function() {
            if ($(this).is(':checked')) {
                isChecked = true;
                return false;
            }
        });
        if (!isChecked) {
            error.next('.invalid-feedback').remove();
            error.addClass('is-invalid').after(errorElement);
            event.preventDefault();
        } else {
            error.removeClass('is-invalid').next('.invalid-feedback').remove();
        }
    }

    checkboxes.change(function() {
        validateCheckboxes();
    });

    validateCheckboxes();
});
