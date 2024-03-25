<div class="footer100vh"></div>
    <footer class="mb-1 pt-30 m-0 mt-footer ">
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
                                        <input type="email" id="home-email" class="form-control" placeholder="Your Email" name="email">


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

    </footer>
