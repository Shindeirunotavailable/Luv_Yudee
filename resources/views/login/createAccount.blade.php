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
                        <input type="Email" id="modal_email" name="modal_email" placeholder="Enter Username"
                            class="form-control form-control-lg height-40" required>
                        <div class="invalid-feedback">
                            กรุณากรอก E-mail
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="label-700">Password</label>
                        <input type="password" id="modal_password" name="modal_password" placeholder="Enter Password"
                            class="form-control form-control-lg height-40" required>
                        <div class="invalid-feedback">
                            กรุณากรอก Password
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="label-700" for="typePasswordX-2">Confirm Password</label>
                        <input type="password" id="modal_confirmPassword" name="modal_confirmPassword" placeholder="Enter Password"
                            class="form-control form-control-lg height-40" required>
                        <div class="invalid-feedback">
                            กรุณากรอก Password
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg btn-block rounded-pill afterButton fourthAfterButton" id="submitModalBtn">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
