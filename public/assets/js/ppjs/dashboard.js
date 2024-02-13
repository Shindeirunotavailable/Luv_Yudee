
document.addEventListener("DOMContentLoaded", function() {
    const dropdownBtns = document.querySelectorAll(".dropbtn");

    dropdownBtns.forEach(function(dropdownBtn) {
        dropdownBtn.onclick = function() {
            const dropdownContent = dropdownBtn.nextElementSibling;
            dropdownContent.classList.toggle("show");
        };
    });

    document.onclick = function(event) {
        const dropdowns = document.querySelectorAll(".dropdown-content");
        dropdowns.forEach(function(openDropdown) {
            if (!event.target.matches(".dropbtn")) {
                openDropdown.classList.remove("show");
            }
        });
    };
});

document.addEventListener("DOMContentLoaded", function() {
    const sidebarItems = document.querySelectorAll(".sidebar_list_item");
    const items = document.querySelectorAll(".items-center");
    // const pitems = document.querySelectorAll(".page-item");

    sidebarItems.forEach(function(item) {
        item.addEventListener("click", function() {
            sidebarItems.forEach(function(otherItem) {
                otherItem.classList.remove("-is-active");
            });

            item.classList.add("-is-active");

        });
    });

    items.forEach(function(item) {
        item.addEventListener("click", function() {
            items.forEach(function(otherItem) {
                otherItem.classList.remove("-is-active");
                otherItem.classList.remove("active");
            });

            item.classList.add("-is-active");
        });
    });
        //     // pitems.forEach(function(item) {
        //     //     item.addEventListener("click", function() {
        //     //         pitems.forEach(function(otherItem) {
        //     //             otherItem.classList.remove("active");
        //     //         });

        //     //         item.classList.add("active");
        //     //     });
        //     // });

});


$(document).ready(function() {
    $('#selectcategory').val('CD');
    $('#selectcategory').select2({
        placeholder: "Select...",
        allowClear: true
    });
    $('#propertystatus').val('FS');
    $('#propertystatus').select2({
        placeholder: "Select...",
        allowClear: true
    });
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
            .create(document.querySelector('#editor'), {})
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    }


    //Upload Image
    if (document.getElementById('customIMG')) {
        document.getElementById('customIMG').addEventListener('change', function(e) {
            var fileList = document.getElementById('fileList');
            fileList.innerHTML = '';

            var files = e.target.files;
            for (var i = 0; i < files.length; i++) {
                var file = files[i];

                // สร้าง Element <div class="col-2"> เพื่อแสดงภาพ
                var colDiv = document.createElement('div');
                colDiv.className = 'col-2';

                var img = document.createElement('img');
                img.src = URL.createObjectURL(file); // กำหนด URL ของภาพ
                img.style.width = '100%'; // กำหนดขนาดภาพ
                img.style.marginBottom = '20px';
                colDiv.appendChild(img);

                fileList.appendChild(colDiv);
            }
        });

        document.getElementById('clearButtonIMG').addEventListener('click', function() {
            var fileList = document.getElementById('fileList');
            fileList.innerHTML = '';

            // Clear input file
            document.getElementById('customIMG').value = '';
        });
    }

    if (document.getElementById('customVdo')) {
        //Upload VDO
        document.getElementById('customVdo').addEventListener('change', function(e) {
            var VdoList = document.getElementById('VdoList');
            VdoList.innerHTML = '';

            var files = e.target.files;
            for (var i = 0; i < files.length; i++) {
                var file = files[i];

                var colDiv = document.createElement('div');
                colDiv.className = 'col-4';

                var video = document.createElement('video');
                video.src = URL.createObjectURL(file);
                video.style.width = '100%';
                video.style.marginBottom = '20px';
                video.controls = true;
                colDiv.appendChild(video);

                VdoList.appendChild(colDiv);
            }
        });

        document.getElementById('clearButtonVDO').addEventListener('click', function() {
            var VdoList = document.getElementById('VdoList');
            VdoList.innerHTML = '';

            // Clear input file
            document.getElementById('customVdo').value = '';
        });
    }
