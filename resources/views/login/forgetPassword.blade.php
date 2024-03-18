<div class="modal" tabindex="-1" role="dialog" id="forgetPassword">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Lost your password?</h5>
                <button type="button" class="close bg-transparent" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="hidden" id="hiddenErrorModal1">
                <div class="alert alert-danger" role="alert">
                    <div id="statusMessageModel1"></div>
                </div>
            </div>

            <div class="hidden" id="hiddensuccessModal">
                <div class="alert alert-success" role="alert">
                    <div id="successMessageModel"></div>
                </div>
            </div>


            <div class="modal-body">
                <form action="{{ url('/lostpassword') }}" method="POST" id="lostPasswordForm">
                    @csrf
                    <div class="form-group">
                        <label class="label-700 pl-10">Email</label>
                        <input type="email" name="forgetEmail" id="forgetEmail" class="form-control "
                            placeholder="Enter Email" required>
                        <div id="ErrorlostPassword" style="color: red"></div>
                        <div id="successlostPassword" style="crgb(0, 255, 85)r: red"></div>

                    </div>
                    <div class="pt-20 pb-20  text-center">
                        <button type="submit" class="afterButton rounded-pill btn-lg btn-block" id="submiLostPassword">
                            <i class="fa-regular fa-paper-plane "></i> Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<script>
    var getUrl = window.location;
    var baseUrl = getUrl.protocol + "//" + getUrl.host + "/";
    var csrf = $("meta[name='csrf-token']").attr("content"); //token 
    $('#lostPasswordForm').submit(function(event) {
        event.preventDefault();
        var email = $("#forgetEmail").val();
        $.ajax({
            type: "POST",
            url: baseUrl + "lostpassword", // ระบุ URL ที่จะส่ง Request ไป
            data: {
                _token: csrf,
                forgetEmail: email
            },
            success: function(response) {
                console.log(response);
                // $('#ErrorlostPassword').html(response);

                if (response.success) {
                    $('#successlostPassword').text(response
                    .message); // แสดงข้อความแจ้งเตือนใน div ที่มี id="statusMessage"
                } else {
                    // ถ้าเข้าสู่ระบบไม่สำเร็จ
                    $('#ErrorlostPassword').text(response
                    .messageError); // แสดงข้อความแจ้งเตือนใน div ที่มี id="statusMessage"
                }
            }
        });
    });
</script>
</script>
