

    @extends('layout.master')
    @section('content')

    <div class="imagbackground">
        <div class="container py-10 h-100 " style="padding: 20px">

            <div class="row d-flex  ">
                <div class="col-12 col-lg-6 col-xl-6">
                    <div class="card " style="border-radius: 1rem;">
                        <div class="card-body p-10 text-center">
                            <img src="https://img5.pic.in.th/file/secure-sv1/YuuDee2.png" class="img-fluid">
                            <h2 class="mb-3">Sign in</h2>
                            <label class="mb-5 ">Sign in with this account across the following sites.</label>
                        </div>
                        

                            {{-- <form action="{{ url('/login') }}"  method="POST" class="needs-validation" novalidate> --}}
                                
                            <form class="needs-validation" novalidate>
                                @csrf
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="typeEmailX-2">Email</label>
                                        <input type="text" id="Email" name="Email" placeholder="Enter Username" class="form-control form-control-lg" required>

                                    <div class="invalid-feedback">
                                        <a> กรุณากรอก Email</a>
                                    </div>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="typePasswordX-2">Password</label>
                                        <input type="password" id="Password" name="Password" placeholder="Enter Password" class="form-control form-control-lg" required>
                                    <div class="invalid-feedback">
                                        <a> กรุณากรอกPassword</a>
                                    </div>
                                </div>
                                <!-- ลืมรหัสผ่าน และ Checkbox -->
                                <div class="d-flex justify-content-between mb-4 flex-md-row flex-column">
                                    <div class="form-check">
                                        <label class="form-check-label" for="form1Example3">
                                            <input class="form-check-input" type="checkbox" value="" id="">Remember password
                                        </label>
                                    </div>
                                    <button type="button" class="btn Forgetpassword text-left" id="lost-password">Lost your password?</button>
                                </div>
                                    <button type="submit" class="btn-primary btn-lg btn-block fourth1 button1">Sing in </button>
                            </form>                            
                            
                            {{-- <div class="divider d-flex align-items-center my-4">
                                     <p class="text-center fw-bold mx-3 mb-0">Or</p>
                                </div>
                                    <button class="btn btn-lg btn-block btn-outline-dark mb-2 form-control"style="background-color: #ffffff; color: #000000;"type="submit">
                                        <i class="fa fa-google  text-left" aria-hidden="true"></i> Continue Google
                                    </button> <br>
                                    <button class="btn btn-lg btn-block btn-primary mb-2 form-control"style="background-color: #3b5998;"type="submit">
                                        <i class="fa fa-facebook" aria-hidden="true"></i> Continue Facebook
                                    </button> <br>
                                    <button class="btn btn-lg btn-block btn-dark mb-2 form-control" style="background-color: #000000;"type="submit">
                                        <i class="fa fa-apple" aria-hidden="true"></i> Continue Apple
                                    </button> <br>  --}}

                                    <button type="button" class="btn link-red registe container " id="myBtn">
                                        <label class="d-inline-block container">Not signed up? Create an account.
                                    </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="popupmodal" id="modal-data"></div>
    </div>

@endsection
