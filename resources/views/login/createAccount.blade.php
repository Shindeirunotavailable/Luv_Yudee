
 <div class="modal" tabindex="-1" role="dialog" id="exampleModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Create Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="background-color: transparent; border: 0;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
          <form class="needs-validation" novalidate>
            @csrf
            <div class="form-group">
              <label class="label-700">Email</label>
              <input type="email" id="modal_email" name="modal_email" placeholder="Enter Username" class="form-control form-control-lg" required>
              <div class="invalid-feedback">
                กรุณากรอก E-mail
              </div>
            </div>
            <div class="form-group">
              <label class="label-700" >Password</label>
              <input type="password" id="password" name="password" placeholder="Enter Password" class="form-control form-control-lg" required>
                <div class="invalid-feedback">
                  กรุณากรอก Password
                </div>
            </div>
            <div class="form-group">
              <label class="form-label" for="typePasswordX-2">Confirm Password</label>
              <input type="password" id="confirmpassword" name="confirmpassword" placeholder="Enter Password" class="form-control form-control-lg" required>
              <div class="invalid-feedback">
                กรุณากรอก Password
              </div>
            </div>

            <button type="submit" class="btn btn-primary btn-lg btn-block rounded-pill" id="submitModalBtn">Submit</button>
          </form>
        
      </div>
    </div>
  </div>
</div>


