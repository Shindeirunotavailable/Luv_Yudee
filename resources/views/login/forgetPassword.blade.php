
<div class="modal" tabindex="-1" role="dialog" id="exampleModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Lost your password?</h5>
        <button type="button" class="close bg-transparent" data-dismiss="modal" aria-label="Close" >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
          <form class="needs-validation" novalidate>
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1" class="label-700">Email</label>
              <input type="Email" name="username" id="Email" class="form-control h-40" id="exampleInputEmail1" placeholder="Enter Username" required>
              <div class="invalid-feedback">
                  <a> กรุณากรอก Email</a>
              </div>
            </div>

            <button type="submit" class="btn btn-primary btn-lg btn-block rounded-pill afterButton fourthAfterButton" id="submitModalBtn">Submit</button>
          </form>
      </div>
    </div>
  </div>
</div>



