
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
    const pitems = document.querySelectorAll(".page-item");

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

    pitems.forEach(function(item) {
        item.addEventListener("click", function() {
            pitems.forEach(function(otherItem) {
                otherItem.classList.remove("active");
            });

            item.classList.add("active");
        });
    });

});


$(document).ready(function() {
    $('#select1, #select2, #select3 , #select4, #select5, #select6, #select7, #select8, #select9, #select10, #select11').val('AK');
    $('#select1, #select2, #select3 , #select4, #select5, #select6, #select7, #select8, #select9, #select10, #select11').select2({
        placeholder: "Select...",
        allowClear: true
    });
});


// db_provinces
        var getUrl = window.location;
        var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
        var csrf = $('meta[name="csrf-token"]').attr('content');
        var lang = document.documentElement.lang;
        // console.log(lang,getUrl,baseUrl,csrf);

        var url = '/dashboard.db_provinces';
        $('#provinces').change(function() {
            var id_provinces = $(this).val();
            // console.log($('#db_provinces').val())
            // console.log($("input[name=_token]").val())
            $.ajax({
                type: "post",
                url: url,

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
                url: url,
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
                url: url,
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
