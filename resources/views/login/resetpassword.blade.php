@extends('layout.master')
@section('content')
<div class="container h-70vh">
    <div class="imagbackground ">
        <div class="row pt-13 ">
            <div class="col-12 col-lg-6 ">
                <div class="card cardBox">
                    <div class="card-body">
                        <div class="text-center">
                            <h2 class="mb-3 pt-3 font-weight-bold">Reset password</h2>

                            
                            
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

                                                  
                        </div>
                            <form action="{{ url('/newPassword') }}" method="POST" class="needs-validation" id="resetPasswordForm">
                                @csrf
                                <div class="form-group">
                                    <label class="label-700 pl-5">Email</label>
                                    <input type="email" name="email" id="modal_email" class="form-control" placeholder="Enter Email" value="{{ $email }}" readonly>
                                    <div class="colorRed" id="errorEmail"></div>
                                    <div class="invalid-feedback">
                                        <a> กรุณากรอก Email</a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="label-700 pl-5">Password</label>
                                    <div class="d-flex justify-content-end">
                                        <span toggle="#modal_password" class="fa fa-fw fa-eye field-icon toggle-password icon-style"></span>
                                    </div>
                                    <input type="password" name="password" id="modal_password" class="form-control" placeholder="Enter Password">
                                    <div class="colorRed" id="errorPassword"></div>
                                    <div class="invalid-feedback">
                                        <a> กรุณากรอก Password</a>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label class="label-700 pl-5">Confirm Password</label>
                                    <div class="d-flex justify-content-end">
                                        <span toggle="#modal_confirmPassword" class="fa fa-fw fa-eye field-icon toggle-password icon-style"></span>
                                    </div>
                                    <input type="password" name="password_confirmation" id="modal_confirmPassword" class="form-control"
                                        placeholder="Enter Confirm Password">
                                    <div class="colorRed" id="errorconfirm"></div>
                                    <div class="invalid-feedback">
                                        <a> กรุณากรอก Confirm Password</a>
                                    </div>
                                    <div class="colorRed" id="errorpassword"></div>
                                </div>
                                <div class="pt-10 pb-10 ">
                                    <button type="submit" class="afterButton rounded-pill btn-lg btn-block" id="loginSubmit">
                                        <i class="fa-regular fa-paper-plane" ></i> Submit
                                    </button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>  
        </div>
    </div>
</div>

@endsection
