{{-- 
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
          <div class="center">
            
            <form action="" >
              @csrf
            <div class="form-outline mb-4 text-start  text-left">
              <label class="form-label" for="typeEmailX-2">Email</label>
                  <input type="email" id="Email" name="username" placeholder="Enter Username" class="form-control form-control-lg" required>
            </div>
            <div class="form-outline mb-4 text-start  text-left">
              <label class="form-label" for="typePasswordX-2">Password</label>
                  <input type="password" id="password" name="password" placeholder="Enter Password" class="form-control form-control-lg" required>
            </div>
            <a class="message"></a>
            <div class="form-outline mb-4 text-start  text-left">
              <label class="form-label" for="typePasswordX-2">Password</label>
                  <input type="password" id="confirmpassword" name="confirmpassword" placeholder="Enter Password" class="form-control form-control-lg" required>
            </div>            
                <button type="submit" class="fourth1 create" id="submitModalBtn">Submit</button>
          </form>

          </div>
        </div>
      </div>
    </div>
  </div>

 --}}

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
        <div class="center">
          <form class="needs-validation" novalidate>
            @csrf
            <div class="form-outline mb-4 text-start text-left">
              <label class="form-label" for="typeEmailX-2">Email</label>
              <input type="email" id="Email" name="username" placeholder="Enter Username" class="form-control form-control-lg" required>
              <div class="invalid-feedback">
                กรุณากรอก E-mail
              </div>
            </div>

            
            <div class="form-outline mb-4 text-start text-left">
              <label class="form-label" for="typePasswordX-2">Password</label>
              <input type="password" id="password" name="password" placeholder="Enter Password" class="form-control form-control-lg" required>
                <div class="invalid-feedback">
                  กรุณากรอก Password
                </div>
            </div>


            <div class="form-outline mb-4 text-start text-left">
              <label class="form-label" for="typePasswordX-2">Confirm Password</label>
              <input type="password" id="confirmpassword" name="confirmpassword" placeholder="Enter Password" class="form-control form-control-lg" required>
              <div class="invalid-feedback">
                กรุณากรอก Password
              </div>
            </div>

            <button type="submit" class="fourth1 create" id="submitModalBtn">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


