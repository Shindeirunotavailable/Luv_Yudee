@extends('layout.master')
@section('content')
    <div class="container ">
        <div class="imagbackground ">
            <div class="row pt-13 ">
                <div class="col-12 col-lg-6 ">
                    <div class="card cardBox">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="https://img5.pic.in.th/file/secure-sv1/YuuDee2.png" class="logo-sm logo-md">
                                <h2 class="mb-3">Sign in</h2>
                                <label class="mb-5 ">Sign in with this account across the following sites.</label>
                            </div>
                            {{-- <form action="{{ url('/login') }}"  method="POST" class="needs-validation" novalidate> --}}
                            <form class="needs-validation" novalidate>
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="label-700">Email</label>
                                    <input type="Email" name="Email" id="Email" class="form-control "
                                        id="exampleInputEmail1" placeholder="Enter Username" required>
                                    <div class="invalid-feedback">
                                        <a> กรุณากรอก Email</a>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="label-700">Password</label>
                                    <input type="password" name="password" id="password" class="form-control "
                                        id="exampleInputEmail1" placeholder="Enter Password" required>
                                    <div class="invalid-feedback">
                                        <a> กรุณากรอกPassword</a>
                                    </div>
                                </div>
                                <!-- ลืมรหัสผ่าน และ Checkbox -->
                                <div class="text-right">
                                    <button type="button" class="btn Forgetpassword text-left" id="lost-password">Lost your
                                        password?</button>
                                </div>

                                <div class="pt-10 pb-10">
                                    <button type="submit"
                                        class="btn btn-primary btn-lg btn-block afterButton"
                                        id="submitModalBtn">
                                        <i class="fa-regular fa-paper-plane "></i> Submit 
                                    </button>
                                </div>


                            </form>
                            <div class="text-center mt-3">
                                <a href="javascript:void(0)" class="register" id="myBtn"> Not signed up? <span
                                        class="colorBlue">Create an account. </span> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="popupmodal" id="modal-data"></div>

        </div>
    </div>
@endsection
