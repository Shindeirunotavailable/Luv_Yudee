    <div class="dashboard__main pl-d-0-md">
        <div class="dashboard__content property-page bg-f7">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="mb-6">
                        <h2 class="fw-600 mb-0 text-heading fs-mp-h">My Profile</h2>
                        <p class="">Lorem ipsum dolor sit amet, consec tetur cing elit. Suspe ndisse suscipit</p>
                    </div>
                    <div class="container">
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="card mb-6">
                                    <div class="card-body px-6 pt-6 pb-5">
                                        <div class="row">
                                            <div class="col-sm-12 col-xl-12 col-xxl-7 ">
                                                <h3 class="fw-600 card-title mb-0 text-heading fs-mp-h">Photo</h3>
                                                <p class=" fs-mp mb-4 ">Upload your profile photo.</p>
                                            </div>
                                            <div class="col-sm-8 col-xl-12 col-xxl-5 text-center">
                                                <img src="https://homez-reactjs.ibthemespro.com/images/listings/profile-1.jpg"
                                                    alt="My Profile" class="mx-auto d-block img">
                                                <div class="custom-file mt-4 h-auto">
                                                    <input type="file" class="custom-file-input" hidden=""
                                                        id="customFile" name="file">
                                                    <button type="submit"
                                                        class="afterButton rounded-pill btn-lg mt-2">Upload profile
                                                        image</button>
                                                </div>
                                            </div>
                                            <p class="col-sm-12 d-flex justify-content-center">
                                                *minimum 500px x 500px
                                            </p>

                                        </div>
                                    </div>
                                </div>


                                <div class="card mb-6">
                                    <div class="card-body px-6 pt-6 pb-5">
                                        <h3 class="fw-600 card-title mb-0 text-heading fs-mp-h">Contact information</h3>
                                        <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                        <div class="form-row mx-n4">
                                            @if (session('user_name'))
                                                <div class="form-group col-md-6 px-4">
                                                    <label for="firstName" class="text-heading">First name</label>
                                                    <input type="text" class="form-control form-control-lg "
                                                        id="firstName" name="firsName"
                                                        value="{{ session('user_name') }}">
                                                </div>
                                            @endif

                                            <div class="form-group col-md-6 px-4">
                                                <label for="lastName" class="text-heading">Last name</label>
                                                <input type="text" class="form-control form-control-lg "
                                                    id="lastName" name="lastname">
                                            </div>
                                        </div>
                                        <div class="form-row mx-n4">
                                            <div class="form-group col-md-6 px-4">
                                                <label for="phone" class="text-heading">Phone</label>
                                                <input type="text" class="form-control form-control-lg "
                                                    id="phone" name="phone">
                                            </div>
                                            <div class="form-group col-md-6 px-4">
                                                <label for="mobile" class="text-heading">Mobile</label>
                                                <input type="text" class="form-control form-control-lg "
                                                    id="mobile" name="mobile">
                                            </div>
                                        </div>
                                        <div class="form-row mx-n4">

                                            @if (session('user_email'))
                                                <div class="form-group col-md-6 px-4 mb-md-0">
                                                    <label for="email" class="text-heading">Email</label>
                                                    <input type="email" class="form-control form-control-lg"
                                                        id="email" name="email"
                                                        value="{{ session('user_email') }}">
                                                </div>
                                            @endif


                                            <div class="form-group col-md-6 px-4 mb-md-0">
                                                <label for="skype" class="text-heading">Skype</label>
                                                <input type="text" class="form-control form-control-lg "
                                                    id="skype" name="skype">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-6 mb-lg-0">
                                    <div class="card-body px-6 pt-6 pb-5">
                                        <h3 class="fw-600 card-title mb-0 text-heading fs-mp-h">User detail</h3>
                                        <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                        <div class="form-group mb-0">
                                            <label for="title" class="text-heading">Title / Posittion</label>
                                            <input type="text" class="form-control form-control-lg " id="title"
                                                name="title">
                                        </div>
                                    </div>
                                </div>




                            </div>
                            <div class="col-md-6">


                                <div class="card mb-6 ">
                                    <div class="card-body  pt-6 pb-5">
                                        <h3 class="fw-600 card-title mb-0 text-heading fs-mp-h">User detail</h3>
                                        <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                        </p>
                                        <div class="form-group">
                                            <label for="facebook" class="text-heading">Facebook Url</label>
                                            <input type="url" class="form-control form-control-lg " id="facebook"
                                                name="facebook">
                                        </div>
                                        <div class="form-group">
                                            <label for="pinterest" class="text-heading">Pinterest Url</label>
                                            <input type="url" class="form-control form-control-lg "
                                                id="pinterest" name="pinterest">
                                        </div>
                                        <div class="form-group">
                                            <label for="instagram" class="text-heading">Instagram Url</label>
                                            <input type="url" class="form-control form-control-lg "
                                                id="instagram" name="instagram">
                                        </div>
                                        <div class="form-group">
                                            <label for="twitter" class="text-heading">Twitter Url</label>
                                            <input type="url" class="form-control form-control-lg "
                                                id="twitter" name="twitter">
                                        </div>
                                        <div class="form-group">
                                            <label for="linkedin" class="text-heading">Linkedin Url</label>
                                            <input type="url" class="form-control form-control-lg "
                                                id="linkedin" name="linkedin">
                                        </div>
                                        <div class="form-group mb-7">
                                            <label for="website" class="text-heading">Website Url <span
                                                    class="text-muted">(without http)</span>
                                            </label>
                                            <input type="url" class="form-control form-control-lg "
                                                id="website" name="website">
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body px-6 pt-6 pb-5">
                                        <h3 class="fw-600 card-title mb-0 text-heading fs-mp-h">Change password</h3>
                                        <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                        </p>
                                        <div class="form-group">
                                            <label for="oldPassword" class="text-heading">Old Password</label>
                                            <input type="password" class="form-control form-control-lg "
                                                id="oldPassword" name="oldPassword">
                                        </div>
                                        <div class="form-row mx-n4">
                                            <div class="form-group col-md-6 col-lg-12 col-xxl-6 px-4">
                                                <label for="newPassword" class="text-heading">New Password</label>
                                                <input type="password" class="form-control form-control-lg "
                                                    id="newPassword" name="newPassword">
                                            </div>
                                            <div class="form-group col-md-6 col-lg-12 col-xxl-6 px-4">
                                                <label for="confirmNewPassword" class="text-heading">Confirm New
                                                    Password</label>
                                                <input type="password" class="form-control form-control-lg "
                                                    id="confirmNewPassword" name="confirmNewPassword">


                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>



                        </div>

                        <div class="d-flex justify-content-end flex-wrap">
                            {{-- เอา btn-t-white ออก --}}
                            <div class="position-relative  pt-d-30 pb20 mr-2 "><a href="#"
                                    class="afterButton rounded-pill btn-lg mt-2">Delete Profile
                                    <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            {{-- เอา btn-t-white ออก --}}
                            <div class="position-relative  pt-d-30 pb20 mr-2 "><a href="#"
                                    class="afterButton rounded-pill btn-lg mt-2">Update Profile
                                    <i class="fa-solid fa-arrow-right"></i></a>
                            </div>

                        </div>



                    </div>
                </div>
            </div>
        </div>
        <div class="footer100vh"></div>

        {{-- <footer class="mb-1 pt-30 m-0 mt-footer ">
        <section class="footer-style1 at-home4 pt-60 pb-0 bdrs-12">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-widget light-style mb-4 mb-lg-5">
                            <a class="footer-logo"href="{{url("home")}}">
                                <img class="mb-10" src="{{ asset('/assets/images/YuuDee2-logo.png') }}" alt="YuuDee2-logo.png"  />
                            </a>

                            <div class="row ml-1 mb-4 mb-lg-5">
                                <div class="contact-info w-100">
                                    <p class="text mb-0">58 Howard Street #2 San Francisco</p>
                                </div>
                                <div class="contact-info w-100">
                                    <p class="text mb-0">hi@homez.com</p>
                                </div>
                                <div class="contact-info w-100">
                                    <p class="text mb-0">+(0) 123 050 945 02</p>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-widget mb-4 mb-lg-5 ps-0 ps-lg-5">
                            <div class="link-style1 light-style">
                                <h6 class="fw-700">Popular Search</h6>
                                <ul class="link-list ps-0 pl-0">
                                    <li><a href="#">Apartment for Rent</a></li>
                                    <li><a href="#">Apartment Low to Hide</a></li>
                                    <li><a href="#">Offices for Buy</a></li>
                                    <li><a href="#">Offices for Rent</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-widget mb-4 mb-lg-5 ps-0 ps-lg-5">
                            <div class="link-style1 light-style mb-3">
                                <h6 class="fw-700">Quick Links</h6>
                                <ul class="ps-0 pl-0">
                                    <li><a href="#">Terms of Use</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Pricing Plans</a></li>
                                    <li><a href="#">Our Services</a></li>
                                    <li><a href="#">Contact Support</a></li>
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="#">FAQs</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-widget mb-4 mb-lg-5">
                            <div class="mailchimp-widget mb-30">
                                <form action="{{ url('/home_email') }}"  method="POST" class="needs-validation" id="home_email">
                                    @csrf
                                    <h6 class="title mb-30 fw-700">Sign Up for Our Newsletter</h6>
                                    <div class="mailchimp-style1 at-home4 white-version">
                                        <input type="email" id="" class="form-control" placeholder="Your Email" name="email">


                                        <button type="submit" class="g-recaptcha"
                                            data-sitekey="{{config('services.recaptcha.site_key')}}" data-callback='onSubmitemail' data-action='home'>
                                            <i class="fa-solid fa-rocket"></i>
                                        </button>
                                    </div>

                                    <div class="colorRed" id="ShowErrorEmail"></div>
                                </form>
                                <div class="social-style1 light-style py-2">
                                    <a href="#"><i class="fab fa-facebook-f list-inline-item"></i></a>
                                    <a href="#"><i class="fab fa-twitter list-inline-item"></i></a>
                                    <a href="#"><i class="fab fa-instagram list-inline-item"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in list-inline-item"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </footer> --}}
    </div>
