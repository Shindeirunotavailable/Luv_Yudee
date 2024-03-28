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

    // $('#propertystatus').val("1");
    $('#propertystatus').select2({
        placeholder: "Select...",
        allowClear: true
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
        var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" ;// เพิ่ม/yuudee/ก่อนอัพขึ้นserver
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
                // console.log(response)
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
    // CKeditor
    if (document.querySelector('#editor')) {
        ClassicEditor
            .create(document.querySelector('#editor'), {
                 removePlugins: [ '' ],

                 toolbar: [ 'Undo', 'Redo', 'Heading', 'Bold', 'Italic', 'BlockQuote', 'BulletedList'
                 , 'NumberedList' ]
            } )
            .catch(error => {
            });
    }
    //Upload Image show name
    $(document).ready(function() {
        if ($('#customIMG').length) {
            $('#customIMG').on('change', function(e) {
                var fileList = $('#fileList');
                fileList.html('');

                var files = e.target.files;
                for (var i = 0; i < files.length; i++) {
                    var file = files[i];

                    var colDiv = $('<div></div>').addClass('col-2');

                    var fileName = $('<span></span>').text(file.name).css('display', 'block');
                    colDiv.append(fileName);
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

                    var fileName = $('<span></span>').text(file.name).css('display', 'block');
                    colDiv.append(fileName);
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
    var titleproperty = $('#titleproperty');
    var price = $('#price');
    var propertystatus = $('#propertystatus');
    var errorstatus = $('#errorstatus');
    var errorTitleproperty = '<div class="invalid-feedback additional-message">' + 'กรุณาระบุข้อมูล Title' + '</div>';
    var errorPrice = '<div class="invalid-feedback additional-message">' + 'กรุณาระบุข้อมูล price' + '</div>';
    var errorPropertystatus = '<div class="invalid-feedback additional-message">' + 'กรุณาระบุข้อมูล status' + '</div>';


    if( !titleproperty.val() || !price.val() || propertystatus.val().length === 0){
        if( !titleproperty.val()){
            titleproperty.addClass('is-invalid');
            titleproperty.next('.additional-message').remove();
            titleproperty.after(errorTitleproperty)
        }
        if (!price.val()){
            price.addClass('is-invalid');
            price.next('.additional-message').remove();
            price.after(errorPrice)
        }
        if (propertystatus.val().length === 0) {
            errorstatus.addClass('is-invalid');
            errorstatus.next('.additional-message').remove();
            errorstatus.after(errorPropertystatus)
        }
        event.preventDefault();
        event.stopPropagation();
    }else {
        // หากข้อมูลถูกต้อง ให้แสดง SweetAlert และส่งฟอร์ม
        Swal.fire({
            icon: "success",
            title: "Your work has been saved",
            showConfirmButton: false,
            timer: 1500
        });
        // $('#submit-form').submit(); // ส่งฟอร์ม
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

        propertystatus.on('input', function() {
            if ($(this).val()) {
                $(errorstatus).removeClass('is-invalid');
            }
        });
});

$('#submitmedia').click(function(event) {

    var customIMG = $('#customIMG');
    var customVdo = $('#customVdo');
    var errormedia = $('#errormedia');
    var errorMessage = 'ต้องมีรูปหรือวิดีโออย่างน้อย 1 ไฟล์';
    var errorElement = '<div class="invalid-feedback additional-message">' + errorMessage + '</div>';

    if (!customIMG.val() && !customVdo.val()) {
        errormedia.addClass('is-invalid');
        errormedia.next('.additional-message').remove();
        errormedia.after(errorElement);
        event.preventDefault();
        event.stopPropagation();
    } else {
        errormedia.removeClass('is-invalid');
        errormedia.next('.additional-message').remove();
        Swal.fire({
            icon: "success",
            title: "Your work has been saved",
            showConfirmButton: false,
            timer: 1500
        });
        // $('#submit-form').submit();
    }



    customIMG.on('input', function() {
        if (!$(this).val() && !customVdo.val()) {
            errormedia.addClass('is-invalid');
            errormedia.after(errorElement);
        } else {
            errormedia.removeClass('is-invalid');
            errormedia.next('.additional-message').remove();
        }
    });

    customVdo.on('input', function() {
        if (!$(this).val() && !customIMG.val()) {
            errormedia.addClass('is-invalid');
            errormedia.after(errorElement);
        } else {
            errormedia.removeClass('is-invalid');
            errormedia.next('.additional-message').remove();
        }
    });
});


$('#submitlocation').click(function(event) {

    var address = $('#address');
    var latitudeInput = $('#latitudeInput');
    var longitudeInput = $('#longitudeInput');
    var errorAddress = '<div class="invalid-feedback additional-message">' + 'กรุณาระบุข้อมูล Address ' + '</div>';
    var errorLatitude = '<div class="invalid-feedback additional-message">' + 'กรุณาระบุข้อมูล Latitude ' + '</div>';
    var errorLongitude = '<div class="invalid-feedback additional-message">' + 'กรุณาระบุข้อมูล Longitude ' + '</div>';

    var provinces = $('#provinces');
    var amphures = $('#amphures');
    var districts = $('#districts');
    var errorprovinces = $('#errorprovinces');
    var erroramphures = $('#erroramphures');
    var errordistricts = $('#errordistricts');
    var errorMessageProvinces = '<div class="invalid-feedback additional-message">' + 'กรุณาระบุข้อมูล จังหวัด' + '</div>';
    var errorMessageAmphures = '<div class="invalid-feedback additional-message">' + 'กรุณาระบุข้อมูล อำเภอ' + '</div>';
    var errorMessageDistricts = '<div class="invalid-feedback additional-message">' + 'กรุณาระบุข้อมูล ตำบล' + '</div>';

    if (!address.val() || !latitudeInput.val() || !longitudeInput.val() || !provinces.val() || !amphures.val() || !districts.val()) {
        if (!address.val()) {
            address.addClass('is-invalid');
            address.next('.additional-message').remove();
            address.after(errorAddress);
        }

        if (!latitudeInput.val()) {
            latitudeInput.addClass('is-invalid');
            latitudeInput.next('.additional-message').remove();
            latitudeInput.after(errorLatitude);
        }
        if (!longitudeInput.val()) {
            longitudeInput.addClass('is-invalid');
            longitudeInput.next('.additional-message').remove();
            longitudeInput.after(errorLongitude);
        }
        if (!provinces.val()) {
            errorprovinces.addClass('is-invalid');
            errorprovinces.next('.additional-message').remove();
            errorprovinces.after(errorMessageProvinces);
        }
        if (!amphures.val()) {
            erroramphures.addClass('is-invalid');
            erroramphures.next('.additional-message').remove();
            erroramphures.after(errorMessageAmphures);
        }
        if (!districts.val()) {
            errordistricts.addClass('is-invalid');
            errordistricts.next('.additional-message').remove();
            errordistricts.after(errorMessageDistricts);
        }
        event.preventDefault();
        event.stopPropagation();
    }else {
        Swal.fire({
            icon: "success",
            title: "Your work has been saved",
            showConfirmButton: false,
            timer: 1500
        });
        // $('#submit-form').submit();
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
            $(this).removeClass('is-invalid');
        }
    });

    Districts.on('input', function() {
        if ($(this).val()) {
            $(this).removeClass('is-invalid');
        }
    });

    districts.on('input', function() {
        if ($(this).val()) {
            $(this).removeClass('is-invalid');
        }
    });
});


$('#submitdetail').click(function(event) {

    var floor = $('#floor');
    var room = $('#room');
    var bedrooms = $('#bedrooms');
    var bathrooms = $('#bathrooms');
    var interior_size = $('#interior_size');
    var errorFloor = '<div class="invalid-feedback additional-message">' + 'กรุณาระบุข้อมูลจำนวน Floor' + '</div>';
    var errorRoom = '<div class="invalid-feedback additional-message">' + 'กรุณาระบุข้อมูลจำนวน Rooms' + '</div>';

    var errorBedrooms = '<div class="invalid-feedback additional-message">' + 'กรุณาระบุข้อมูลจำนวน bedrooms' + '</div>';
    var errorBathrooms = '<div class="invalid-feedback additional-message">' + 'กรุณาระบุข้อมูลจำนวน bathrooms' + '</div>';
    var errorSize = '<div class="invalid-feedback additional-message">' + 'กรุณาระบุข้อมูลจำนวน Size' + '</div>';

    if (!floor.val() || !room.val() || !bedrooms.val() || !bathrooms.val() || !interior_size.val()) {
        if (!floor.val()) {
            floor.addClass('is-invalid');
            floor.next('.additional-message').remove();
            floor.after(errorFloor);
        }

        if (!room.val()) {
            room.addClass('is-invalid');
            room.next('.additional-message').remove();
            room.after(errorRoom);
        }

        if (!bedrooms.val()) {
            bedrooms.addClass('is-invalid');
            bedrooms.next('.additional-message').remove();
            bedrooms.after(errorBedrooms);
        }

        if (!bathrooms.val()) {
            bathrooms.addClass('is-invalid');
            bathrooms.next('.additional-message').remove();
            bathrooms.after(errorBathrooms);
        }

        if (!interior_size.val()) {
            interior_size.addClass('is-invalid');
            interior_size.next('.additional-message').remove();
            interior_size.after(errorSize);
        }

        event.preventDefault();
        event.stopPropagation();
    }else {
        Swal.fire({
            icon: "success",
            title: "Your work has been saved",
            showConfirmButton: false,
            timer: 1500
        });
        // $('#submit-form').submit();
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

    bedrooms.on('input', function() {
        if ($(this).val()) {
            $(this).removeClass('is-invalid');
        }
    });

    bathrooms.on('input', function() {
        if ($(this).val()) {
            $(this).removeClass('is-invalid');
        }
    });

    interior_size.on('input', function() {
        if ($(this).val()) {
            $(this).removeClass('is-invalid');
        }
    });
});
// Event Handling End

// checkbox อย่างเดียว
// สร้างฟังก์ชันสำหรับการตรวจสอบ checkbox
function validateCheckboxes() {
    var checkboxes = $('.checkbox-style1 input[type="checkbox"]');
    var errorMessage = 'กรุณาเลือกอย่างน้อย1รายการ';
    var errorElement = '<div class="invalid-feedback">' + errorMessage + '</div>';
    var error = $('#error');
    var isChecked = false;
    checkboxes.each(function() {
        if ($(this).is(':checked')) {
            isChecked = true;
            return false;
        }
    });

    if (!isChecked) {
        error.next('.invalid-feedback').remove();
        error.addClass('is-invalid').after(errorElement);
        return false;
    } else {
        error.removeClass('is-invalid').next('.invalid-feedback').remove();
        return true;
    }
}
$('.checkbox-style1 input[type="checkbox"]').change(function() {
    validateCheckboxes();
});
$('#submitamenitie').click(function(event) {
    if (validateCheckboxes()) {
        // หาก checkbox ถูกต้อง ให้ทำการส่ง form
        // $('#submit-form').submit();

        // แสดง SweetAlert
        Swal.fire({
            icon: "success",
            title: "Your work has been saved",
            showConfirmButton: false,
            timer: 1500
        });
    } else {
        // หาก checkbox ไม่ถูกต้อง ไม่ต้องทำอะไรเพิ่มเติม
        event.preventDefault();
    }
});

// checkbox end


// $(document).ready(function() {
//     function confirmation(event) {
//         event.preventDefault();
//         var urlToRedirect = event.currentTarget.getAttribute('href');

//         Swal.fire({
//             position: "center",
//             title: "Are you sure?",
//             text: "You won't be able to revert this!",
//             icon: "warning",
//             showCancelButton: true,
//             confirmButtonColor: "#0071bc",
//             cancelButtonColor: "#d33",
//             confirmButtonText: "Yes, delete it!"
//         })
//         .then((willDelete) => {
//             if (willDelete.isConfirmed) {
//                 window.location.href = urlToRedirect;
//                 Swal.fire({
//                     position: "center",
//                     title: "Delete",
//                     text: "Your file has been deleted",
//                     icon: "success",
//                     showConfirmButton: false,
//                     timer: 1500
//                 })
//             } else {
//                 Swal.fire({
//                     position: "center",
//                     title: "Cancelled",
//                     text: "The media is safe",
//                     icon: "error",
//                     confirmButtonColor: "#0071bc",
//                 })
//             }
//         });
//     }

//     $('.trash-delete').on('click', function(event) {
//         confirmation(event);
//     });
// });


$(document).ready(function() {
    $(".tab-btn").click(function() {
        var targetId = $(this).attr("data-target");
        $(".tab-pane").not(targetId).removeClass("active show");
    });
});
//รออนุมัติ
$(document).ready(function(){
    // จัดการคลิกที่ลิงก์
    $('a[id^="approve_property_"]').click(function(e){
        e.preventDefault(); // ยกเลิกการทำงานของลิงก์

        // ดึง URL และ id_property จากลิงก์
        var url = $(this).attr('href');
        var id_property = $(this).attr('id').split('_')[2];

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
                            $('#approve_review_'+id_property).removeClass('btn-warning').addClass('btn-success').text('อนุมัติแล้ว');
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
    $('a[id^="approve_property_"]').click(function(e){
        e.preventDefault(); // ยกเลิกการทำงานของลิงก์

        // ดึง URL และ id_property จากลิงก์
        var url = $(this).attr('href');
        var id_property = $(this).attr('id').split('_')[2];
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
    $('a.trash-delete').click(function(e){
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
