$(document).ready(function() {
    // โค้ดทั้งหมดที่ต้องการให้ทำงานหลังจากโหลดเสร็จ
    $('.card-img').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });

    $('[data-toggle="popover"]').popover();
    });

    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
     });
