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

                <form class="needs-validation" novalidate>
                    @csrf
                    <div class="form-group">
                        <label class="label-700">Email</label>
                        <input type="Email" name="modal_email" id="modal_email" class="form-control "
                            id="exampleInputEmail1" placeholder="Enter Email" required>
                        <div class="invalid-feedback">
                            <a> กรุณากรอก E-mail</a>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="label-700">Password</label>
                        <input type="password" name="modal_password" id="modal_password" class="form-control "
                            id="exampleInputEmail1" placeholder="Enter Password" required>
                        <div class="invalid-feedback">
                            <a> กรุณากรอกPassword</a>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="label-700">Confirm Password</label>
                        <input type="password" name="modal_confirmPassword" id="modal_confirmPassword"
                            class="form-control " id="exampleInputEmail1" placeholder="Enter Password" required>
                        <div class="invalid-feedback">
                            <a> กรุณากรอกPassword</a>
                        </div>
                    </div>

                    <div class="pt-20 pb-20 text-center">
                        <button type="submit"
                            class="btn btn-primary afterButton rounded-pill  w-300 "
                            id="submitModal"> 
                            <i class="fa-regular fa-paper-plane "></i> Submit 
                        </button>                       
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
