<div class="modal" tabindex="-1" role="dialog" id="exampleModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Account</h5>
                <button type="button" class="close bg-transparent" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/register') }}"  method="POST" class="needs-validation" id="registerForm">
                    @csrf
                    
                    <div class="form-group">
                        <label class="label-700 pl-5">Email</label>
                        <input type="Email" name="modal_email" id="modal_email" class="form-control "
                            placeholder="Enter Email" required>
                    </div>
                    <div class="form-group">
                        <label class="label-700 pl-5">Password</label>
                        <div class="d-flex justify-content-end">
                            <span toggle="#modal_password" class="fa fa-fw fa-eye field-icon toggle-password icon-style"></span>
                        </div>
                        <input type="password" name="modal_password" id="modal_password" class="form-control "
                            placeholder="Enter Password"  onChange="onChange()"> 
                        <div class="invalid-feedback">
                            <a> กรุณากรอก Password</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="label-700 pl-5">Confirm Password</label>
                        <div class="d-flex justify-content-end">
                            <span toggle="#modal_confirmPassword" class="fa fa-fw fa-eye field-icon toggle-password icon-style"></span>
                        </div>
                        <input type="password" name="modal_confirmPassword" id="modal_confirmPassword"
                            class="form-control" placeholder="Enter Confirm Password"  onChange="onChange()" >
                        <div class="invalid-feedback">
                            <a> กรุณากรอก Confirm Password</a>
                        </div>
                    </div>
                    <div id="result" class="colorRed"> </div>
                    <div id="statusMessage" style="color: red"></div>

                        <div id="message">
                            <div class="divider d-flex align-items-center">
                                <p class="text-center mx-3 mb-0">Password must contain the following</p>
                           </div>
                            <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                            <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                            <p id="number" class="invalid">A <b>number</b></p>
                            <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                            <p id="specialChar" class="invalid">A <b>special character</b></p>
                        </div>
                            <div class="pt-20 pb-20 text-center">    
                            <button type="submit" class="afterButton rounded-pill btn-lg btn-block"
                                id="submitModal" > 
                                <i class="fa-regular fa-paper-plane "></i> Submit
                            </button> 

                                {{-- <button type="submit" class="g-recaptcha afterButton rounded-pill btn-lg btn-block"
                                id="submitModal" 
                                data-sitekey="{{config('services.recaptcha.site_key')}}" 
                                data-callback='onSubmitRegister' data-action='submit'> 
                                <i class="fa-regular fa-paper-plane "></i> Submit
                            </button>  --}}

                            </div>
                </form>
            </div>
        </div>
    </div>
</div>





<script src="https://www.google.com/recaptcha/api.js"></script>
<script type="text/javascript" src="http://www.google.com/recaptcha/api/js/recaptcha_ajax.js"></script>
<script>
    
    function onSubmitRegister(token) {
          $("#registerForm").submit();
        }


</script>