// document.addEventListener("DOMContentLoaded", function() {
//     const dropdownBtn = document.querySelector(".dropbtn");
//     const dropdownContent = document.querySelector(".dropdown-content");

//     dropdownBtn.addEventListener("click", function() {
//         dropdownContent.classList.toggle("show");
//     });

//     document.addEventListener("click", function(event) {
//         if (!event.target.matches(".dropbtn")) {
//             const dropdowns = document.getElementsByClassName("dropdown-content");
//             for (let i = 0; i < dropdowns.length; i++) {
//                 const openDropdown = dropdowns[i];
//                 if (openDropdown.classList.contains("show")) {
//                     openDropdown.classList.remove("show");
//                 }
//             }
//         }
//     });
// });



document.addEventListener("DOMContentLoaded", function() {
    const dropdownBtn = document.querySelector(".dropbtn");
    const dropdownContent = document.querySelector(".dropdown-content");

    dropdownBtn.onclick = function() {
        dropdownContent.classList.toggle("show");
    };

    document.onclick = function(event) {
        if (!event.target.matches(".dropbtn")) {
            const dropdowns = document.getElementsByClassName("dropdown-content");
            for (let i = 0; i < dropdowns.length; i++) {
                const openDropdown = dropdowns[i];
                if (openDropdown.classList.contains("show")) {
                    openDropdown.classList.remove("show");
                }
            }
        }
    };
});



document.addEventListener("DOMContentLoaded", function() {
    const sidebarItems = document.querySelectorAll(".sidebar_list_item");
    const items = document.querySelectorAll(".items-center");
    const pitems = document.querySelectorAll(".page-item");

    sidebarItems.forEach(function(item) {
        item.addEventListener("click", function() {
            // ลบคลาส -is-active ออกจากทุก elements ที่มีคลาส -is-active
            sidebarItems.forEach(function(otherItem) {
                otherItem.classList.remove("-is-active");
            });

            // เพิ่มคลาส -is-active เข้าไปที่ element ที่ถูกคลิก
            item.classList.add("-is-active");

            // document.querySelector('.sidebar_list_item [aria-selected="true"]').setAttribute('aria-selected', 'false');
            // // กำหนด aria-selected="true" สำหรับ tab ที่ถูกคลิก
            // item.querySelector('[aria-selected]').setAttribute('aria-selected', 'true');
        });
    });

    items.forEach(function(item) {
        item.addEventListener("click", function() {
            // ลบคลาส -is-active ออกจากทุก elements ที่มีคลาส -is-active
            items.forEach(function(otherItem) {
                otherItem.classList.remove("-is-active");
                otherItem.classList.remove("active");
            });

            // เพิ่มคลาส -is-active เข้าไปที่ element ที่ถูกคลิก
            item.classList.add("-is-active");
        });
    });

    pitems.forEach(function(item) {
        item.addEventListener("click", function() {
            // ลบคลาส -is-active ออกจากทุก elements ที่มีคลาส -is-active
            pitems.forEach(function(otherItem) {
                otherItem.classList.remove("active");
            });

            // เพิ่มคลาส -is-active เข้าไปที่ element ที่ถูกคลิก
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
