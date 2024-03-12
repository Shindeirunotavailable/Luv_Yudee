
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
// $(document).ready(function() {
//     // อัปเดตป้ายกำกับของรูปภาพ
//     function updateImage(input) {
//         var fileName = input.files[0].name;
//         var label = $('#imageLabel');
//         label.html(fileName);
//     }

//     // อัปเดตป้ายกำกับของวิดีโอ
//     function updateVideoLabel(input) {
//         var fileName = input.files[0].name;
//         var label = $('#videoLabel');
//         label.html(fileName);
//     }

//     // รับอีเวนต์ change จาก input รูปภาพ
//     $('#customIMG').change(function() {
//         updateImage(this);
//     });

//     // รับอีเวนต์ change จาก input วิดีโอ
//     $('#customVdo').change(function() {
//         updateVideoLabel(this);
//     });
// });

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
        var baseUrl = getUrl.protocol + "//" + getUrl.host + "/yuudee/" ;// เพิ่ม/yuudee/ก่อนอัพขึ้นserver
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
$('#submitdescription').click(function(event) {
    var forms = $('.needs-validation');
    var titleproperty = $('#titleproperty');
    var price = $('#price');
    var errorMessage = 'กรุณากรอกข้อมูลที่จำเป็นในช่องสีแดง';
    var errorElement = '<div class="invalid-feedback additional-message">' + errorMessage + '</div>';

    if( !titleproperty.val() || !price.val() ){
        if( !titleproperty.val()){
            titleproperty.addClass('is-invalid');
            titleproperty.next('.additional-message').remove();
            titleproperty.after(errorElement)
        }
        if (!price.val()){
            price.addClass('is-invalid');
            price.next('.additional-message').remove();
            price.after(errorElement)

        }
        event.preventDefault();
        event.stopPropagation();
    }
        titleproperty.on('input', function() {
            if ($(titleproperty).val()) {
                $(titleproperty).removeClass('is-invalid');
            }
        });

        price.on('input', function() {
            if ($(this).val()) {
                $(this).removeClass('is-invalid');
            }
        });
});

$('#submitmedia').click(function(event) {
    var forms = $('.needs-validation');

    var customIMG = $('#customIMG');
    var errormedia = $('#errormedia');
    var errorMessage = 'ต้องมีรูปอย่างน้อย 1 รูป';
    var errorElement = '<div class="invalid-feedback additional-message">' + errorMessage + '</div>';

    if (!customIMG.val()) {
        errormedia.addClass('is-invalid');
        errormedia.next('.additional-message').remove();
        errormedia.after(errorElement);
        event.preventDefault();
        event.stopPropagation();
    } else {
        errormedia.removeClass('is-invalid');
        errormedia.next('.additional-message').remove();
    }

    customIMG.on('input', function() {
        if (!$(this).val()) {
            errormedia.addClass('is-invalid');
            errormedia.after(errorElement);
        } else {
            errormedia.removeClass('is-invalid');
            errormedia.next('.additional-message').remove();
        }
    });
});


$('#submitlocation').click(function(event) {
    var forms = $('.needs-validation');

    var address = $('#address');
    var latitudeInput = $('#latitudeInput');
    var longitudeInput = $('#longitudeInput');
    var provinces = $('#provinces');
    var amphures = $('#amphures');
    var districts = $('#districts');
    var errorMessage = 'ต้องระบุข้อมูลที่อยู่สถานที่';
    var errorElement = '<div class="invalid-feedback additional-message">' + errorMessage + '</div>';

    if (!address.val() || !latitudeInput.val() || !longitudeInput.val() || !provinces.val() || !amphures.val() || !districts.val()) {
        if (!address.val()) {
            address.addClass('is-invalid');
        }

        if (!latitudeInput.val()) {
            latitudeInput.addClass('is-invalid');
        }

        if (!longitudeInput.val()) {
            longitudeInput.addClass('is-invalid');
        }

        if (!provinces.val()) {
            $('#errorprovinces').addClass('is-invalid');
            $('#errorprovinces').after(errorElement);
        }

        if (!amphures.val()) {
            $('#erroramphures').addClass('is-invalid');
            $('#erroramphures').after(errorElement);
        }

        if (!districts.val()) {
            $('#errordistricts').addClass('is-invalid');
            $('#errordistricts').after(errorElement);
        }

        event.preventDefault();
        event.stopPropagation();
    }

    address.on('input', function() {
        if ($(this).val()) {
            $(this).removeClass('is-invalid');
        }
    });

    latitudeInput.on('input', function() {
        if ($(this).val()) {
            $(this).removeClass('is-invalid');
        }
    });

    longitudeInput.on('input', function() {
        if ($(this).val()) {
            $(this).removeClass('is-invalid');
        }
    });

    provinces.on('input', function() {
        if ($(this).val()) {
            $('#errorprovinces').removeClass('is-invalid');
        }
    });

    amphures.on('input', function() {
        if ($(this).val()) {
            $('#erroramphures').removeClass('is-invalid');
        }
    });

    districts.on('input', function() {
        if ($(this).val()) {
            $('#errordistricts').removeClass('is-invalid');
        }
    });
});


$('#submitdetail').click(function(event) {
    var forms = $('.needs-validation');

    var floor = $('#floor');
    var room = $('#room');
    var errorMessage = 'กรุณากรอกข้อมูลที่จำเป็นในช่องสีแดง';
    var errorElement = '<div class="invalid-feedback additional-message">' + errorMessage + '</div>';

    if (!floor.val() || !room.val()) {
        if (!floor.val()) {
            floor.addClass('is-invalid');
            floor.next('.additional-message').remove();
            floor.after(errorElement);
        }

        if (!room.val()) {
            room.addClass('is-invalid');
            room.next('.additional-message').remove();
            room.after(errorElement);
        }

        event.preventDefault();
        event.stopPropagation();
    }

    floor.on('input', function() {
        if ($(this).val()) {
            $(this).removeClass('is-invalid');
        }
    });

    room.on('input', function() {
        if ($(this).val()) {
            $(this).removeClass('is-invalid');
        }
    });
});


$('#submitamenitie').click(function(event) {
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
