<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
<script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>

<style>


option {
        background: #db0080;
        background: -webkit-linear-gradient(to right, #0083B0, #00B4DB);
        background: linear-gradient(to right, #0083B0, #00B4DB);
        min-height: 100vh
    }
    .choices__inner{
        border-radius: 25px !important;
        background-color: white !important;
        border: 1px solid #0083B0 !important;
    }
    .choices__input {
        background-color: transparent !important;
    }
    .choices__list{
        border-radius: 25px !important;
        width: 92%;
    }
    input:focus-visible{
        border: transparent !important;
    }
    </style>

    
        <div class="row d-flex justify-content-center ">
            <select id="choices-multiple-remove-button" placeholder="What are you looking for?" multiple>
                <option value="Houses">Houses</option>
                <option value="Apartments">Apartments</option>
                <option value="Office">Office</option>
                <option value="Villa">Villa</option>
                <option value="Condo">Condo</option>
            </select> 
        </div>

        
    <script>
$(document).ready(function(){
    
    var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
       removeItemButton: true
     }); 
    
    
});


</script>
