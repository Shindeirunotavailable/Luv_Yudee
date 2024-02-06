
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

