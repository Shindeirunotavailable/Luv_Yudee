<div class="modal" tabindex="-1" role="dialog" id="forgetPassword">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Lost your password?</h5>
                <button type="button" class="close bg-transparent" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            
            <div class="hidden" id="hiddenErrorModal">
                <div class="alert alert-danger" role="alert">
                    <div id="statusMessageModel"></div>
                </div>
            </div>

            <div class="hidden" id="hiddensuccessModal">
                <div class="alert alert-success" role="alert">
                    <div id="successMessageModel"></div>
                </div>
            </div>


            <div  class="modal-body" >
                <form action="{{ url('/lostpassword') }}"  method="POST" id="lostPasswordForm">
                    @csrf
                    <div class="form-group">
                        <label class="label-700 pl-10">Email</label>
                        <input type="email" name="forgetEmail" id="forgetEmail" class="form-control " placeholder="Enter Email" required>
                    </div>
                    <div class="pt-20 pb-20  text-center">
                        <button type="submit" class="afterButton rounded-pill btn-lg btn-block" id="submitModal"  > <i class="fa-regular fa-paper-plane "></i> Submit</button> 
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

