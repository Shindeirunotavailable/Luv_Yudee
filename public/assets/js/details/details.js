// Property Type pc

function selectAll() {
    var allCheckbox = document.getElementById("All");
    var checkboxes = document.querySelectorAll('.checkboox-all');

    checkboxes.forEach(function(checkbox) {
        if (checkbox !== allCheckbox) {
            checkbox.checked = false;
        }
    });
}

function checkAll() {
    var allCheckbox = document.getElementById("All");
    allCheckbox.checked = false;
}

// Price Range pc
function priceAll() {
    var allCheckbox = document.getElementById("averageAll");
    var checkboxes = document.querySelectorAll('.checkboox-price');

    checkboxes.forEach(function(checkbox) {
        if (checkbox !== allCheckbox) {
            checkbox.checked = false;
        }
    });
}

function checkPrice() {
    var allCheckbox = document.getElementById("averageAll");
    allCheckbox.checked = false;
}

// sidebar
function toggleSidebar() {
    const sidebar = document.getElementById('mySidebar');
    sidebar.style.width = sidebar.style.width === '350px' ? '0' : '350px';

    const customBtn = document.querySelector('.custom-btn');
    // customBtn.classList.toggle('show-sidebar');
  }

  $(document).ready(function(){
    
    var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
       removeItemButton: true
     }); 
    
    
});


// มือถือ Property Type
// function PropertyMobile() {
//     var allCheckbox = document.getElementById("propertyMobile");
//     var checkboxes = document.querySelectorAll('.checkboox-Property');

//     checkboxes.forEach(function(checkbox) {
//         if (checkbox !== allCheckbox) {
//             checkbox.checked = false;
//         }
//     });
// }

// function PropertyAll() {
//     var allCheckbox = document.getElementById("propertyMobile");
//     allCheckbox.checked = false;
// }

// มือถือ Price Range

// function PropertyMobile() {
//     var allCheckbox = document.getElementById("Property_All");
//     var checkboxes = document.querySelectorAll('.price-checkboox');

//     checkboxes.forEach(function(checkbox) {
//         if (checkbox !== allCheckbox) {
//             checkbox.checked = false;
//         }
//     });
// }

// function priceAll() {
//     var allCheckbox = document.getElementById("Property_All");
//     allCheckbox.checked = false;
// }



// เช็คราคา radio

// let minValue = $("#min-value");
// let maxValue = $("#max-value");

// const rangeFill = $(".range-fill");

// function validateRange() {
//   let minPrice = parseInt(inputElements[0].value);
//   let maxPrice = parseInt(inputElements[1].value);



//   if (minPrice > maxPrice) {
//     let tempValue = maxPrice;
//     maxPrice = minPrice;
//     minPrice = tempValue;
//   }

//   const minPercentage = ((minPrice - 10) / 490) * 100;
//   const maxPercentage = ((maxPrice - 10) / 490) * 100;

//   rangeFill.css({
    
//     left: minPercentage + "%",
//     width: maxPercentage - minPercentage + "%"
//   });

//   minValue.html("$" + minPrice);
//   maxValue.html("$" + maxPrice);

// }
// const inputElements = $(".radioname");
// inputElements.click(".radioname", validateRange);

// validateRange();


// $(document).ready(function(){
    
//   var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
//      removeItemButton: true
//    }); 
  
// });