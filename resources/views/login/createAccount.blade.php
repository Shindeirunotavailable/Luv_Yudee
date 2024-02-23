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

                <form onsubmit="return modalTextAlert()">
                    @csrf
                    <div class="form-group">
                        <label class="label-700 pl-10">Email</label>
                        <input type="Email" name="modal_email" id="modal_email" class="form-control "
                            placeholder="Enter Email" required>
                    </div>

                    <div class="form-group">
                        <label class="label-700 pl-10">Password</label>
                        <input type="password" name="modal_password" id="modal_password" class="form-control "
                            placeholder="Enter Password" >
                        <div class="d-none " id="alertModalPassword">
                            <a class="colorRed"> กรุณากรอกPassword</a>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="label-700 pl-10">Confirm Password</label>
                        <input type="password" name="modal_confirmPassword" id="modal_confirmPassword"
                            class="form-control "  placeholder="Enter Password"  >
                            <div class="d-none " id="alertModalConfirmPassword">
                                <a class="colorRed"> กรุณากรอก Confirm Password</a>
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
