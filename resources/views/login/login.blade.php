@extends('layout.master')
@section('content')
    {{--
@ foreach ($count as $item)
    {{ $item }}
@endforeach --}}

    <div class="container h-60vh">
        <div class="imagbackground ">
            <div class="row pt-13 ">
                <div class="col-12 col-lg-6 ">
                    <div class="card cardBox">
                        <div class="card-body">
                            <div class="text-center">
                                <h2 class="mb-3 pt-3 font-weight-bold">Sign in</h2>
                                <label class="mb-5 ">Sign in with this account across the following sites.</label>

                                <div class="hidden" id="hiddenError">
                                    <div class="alert alert-danger" role="alert">
                                        <div id="statusMessage"></div>
                                    </div>
                                </div>


                                {{-- @if ($errors->any())
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <input type="hidden" value="1" id="modalError">
                                        <strong>{{ $errors->first() }}</strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif --}}

                                @if (session('error'))
                                    <div class="alert alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong> {{ session('error') }}</strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                            </div>
                            {{-- <form action="{{ url('/login') }}"  method="POST" class="needs-validation" novalidate> --}}
                            <form action="{{ url('/loginform') }}" method="POST" class="needs-validation" id="loginform">
                                @csrf
                                <div class="form-group">
                                    <label class="label-700">Email</label>
                                    <input type="email" name="email" id="email" class="form-control "
                                        placeholder="Enter Email" required>
                                </div>
                                <div class="form-group box-search">
                                    <label class="label-700">Password</label>
                                    <div class="d-flex justify-content-end">
                                        <span toggle="#password"
                                            class="fa fa-fw fa-eye field-icon toggle-password icon-style"></span>
                                    </div>
                                    <input type="password" name="password" id="password" class="form-control "
                                        placeholder="Enter Password">
                                    <div class="invalid-feedback">
                                        <a> กรุณากรอก Password</a>
                                    </div>
                                </div>

                                <!-- ลืมรหัสผ่าน และ Checkbox -->
                                <div class="text-right">
                                    <button type="button" class="btn Forgetpassword text-left" id="lost-password">Lost your
                                        password?</button>
                                </div>
                                <div class="pt-10 pb-10 ">
                                    {{-- <button type="submit" class=" g-recaptcha afterButton rounded-pill btn-lg btn-block" id="loginSubmit"
                                   data-sitekey="{{co nfig('services.recaptcha.site_key')}}" data-callback='onSubmitLogin' data-action='submit'>
                                        <i class="fa-r egular fa-paper-plane "></i> Submit
                                   </button>  --}}
                                    <button type="submit" class="afterButton rounded-pill btn-lg btn-block"
                                        id="loginSubmit">
                                        <i class="fa-regular fa-paper-plane "></i> Submit
                                    </button>
                                </div>

                                <div id="result"> </div>

                            </form>

                            <div class="text-center mt-3">
                                {{-- <a href="javascript:void(0)" class="register" id="myBtn"> Not signed up?
                                    <span class="colorBlue">Create an account. </span> </a> --}}
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#createAccount"> Not signed
                                    up?
                                    <span class="colorBlue">Create an account. </span> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="popupmodal" id="modal-data"></div>
        </div>


        <div class="modal fade pb-300" id="createAccount" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Create Account</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">


                        {{-- @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <input type="hidden" value="1" id="modalsuccess">
                                <strong> {{ session('status') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif --}}

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



                        <form action="{{ url('/register') }}" method="POST" class="needs-validation" id="registerForm">
                            @csrf
                            <div class="form-group">
                                <label class="label-700 pl-5">name</label>
                                <input type="text" name="modal_name" id="modal_name" class="form-control "
                                    placeholder="Enter Your name">
                                <div class="invalid-feedback">
                                    <a> กรุณากรอก กรอกชื่อผู้ใช้งาน</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="label-700 pl-5">Email</label>
                                <input type="Email" name="modal_email" id="modal_email" class="form-control "
                                    placeholder="Enter Email">
                                <div class="colorRed" id="ShowError"></div>
                            </div>
                            <div class="form-group">
                                <label class="label-700 pl-5">Password</label>
                                <div class="d-flex justify-content-end">
                                    <span toggle="#modal_password"
                                        class="fa fa-fw fa-eye field-icon toggle-password icon-style"></span>
                                </div>
                                <input type="password" name="modal_password" id="modal_password" class="form-control "
                                    placeholder="Enter Password">
                                <div class="colorRed" id="errorPassword"></div>
                                <div class="invalid-feedback">
                                    <a> กรุณากรอก Password</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="label-700 pl-5">Confirm Password</label>
                                <div class="d-flex justify-content-end">
                                    <span toggle="#modal_confirmPassword"
                                        class="fa fa-fw fa-eye field-icon toggle-password icon-style"></span>
                                </div>
                                <input type="password" name="modal_confirmPassword" id="modal_confirmPassword"
                                    class="form-control" placeholder="Enter Confirm Password">
                                <div class="colorRed" id="errorconfirm"></div>
                                <div class="invalid-feedback">
                                    <a> กรุณากรอก Confirm Password</a>
                                </div>
                                <div class="colorRed" id="errorpassword"></div>
                            </div>
                            <div class="pt-20 pb-20 text-center">
                                <button type="submit" class=" g-recaptcha afterButton rounded-pill btn-lg btn-block"
                                    id="registerBtn" data-sitekey="{{ config('services.recaptcha.site_key') }}"
                                    data-callback='onSubmitRegister' data-action='register'>
                                    <i class="fa-regular fa-paper-plane "></i> Submit
                                </button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
