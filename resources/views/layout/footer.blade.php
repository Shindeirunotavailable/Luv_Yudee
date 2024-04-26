<?php
$locale = session()->get('locale', 'th');
?>
<section class="footer-style1 at-home4 pt-60 pb-0">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="footer-widget light-style mb-4 mb-lg-5">
                    <a class="footer-logo"href="{{url("home")}}">
                        <img class="mb-10" src="{{ asset('/assets/images/YuuDee2-logo.png') }}" alt="YuuDee2-logo.png"  />
                    </a>

                    <div class="row ml-1 mb-4 mb-lg-5">
                        <div class="contact-info w-100">
                            <p class="text mb-0">Email : yuudee.info@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="footer-widget mb-4 mb-lg-5 ps-0 ps-lg-5">
                    <div class="link-style1 light-style">
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="footer-widget mb-4 mb-lg-5 ps-0 ps-lg-5">
                    <div class="link-style1 light-style mb-3">
                        <h6 class="fw-700">Sitemap</h6>
                        <ul class="link-list ps-0 pl-0">
                            <li><a href="{{url("home")}}">{{ GoogleTranslate::trans('หน้าเเรก', $locale) }}</a></li>
                            <li><a href="{{url("property")}}">{{ GoogleTranslate::trans('รายการขายเช่า', $locale) }}</a></li>
                            <li><a href="{{url("contact")}}">{{ GoogleTranslate::trans('ติดต่อเรา', $locale) }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="footer-widget mb-4 mb-lg-5">
                    <div class="mailchimp-widget mb-30">
                        <form action="{{ url('/home_email') }}"  method="POST" class="needs-validation" id="home_email">
                            @csrf
                            <h6 class="title mb-30 fw-700">{{ GoogleTranslate::trans('ลงทะเบียนเพื่อรับจดหมายข่าวของเรา', $locale) }}</h6>
                            <div class="mailchimp-style1 at-home4 white-version">
                                <input type="email" id="home-email" class="form-control" placeholder="Your Email" name="email">


                                <button type="submit" class="g-recaptcha"
                                    data-sitekey="{{config('services.recaptcha.site_key')}}" data-callback='onSubmitemail' data-action='home'>
                                    <i class="fa-solid fa-rocket"></i>
                                </button>
                            </div>
                            
                            <div class="colorRed" id="ShowErrorEmailFooter"></div>

                        </form>


                        <div class="social-style1 light-style py-2">
                            <a href="https://web.facebook.com/luvdrive?_rdc=1&_rdr"><i class="fab fa-facebook-f list-inline-item"></i></a>
                            <a href="#"><i class="fab fa-twitter list-inline-item"></i></a>
                            <a href="https://www.instagram.com/luvdrivecarrent/"><i class="fab fa-instagram list-inline-item"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="footer-style11 at-home4  pb-3 pt-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="text-lg-start">
                    <p class="copyright-text  mb-0 texts-pad ">© 2024
                        <a class="copyright-text" href="https://themeforest.net/user/ib-themes" target="_blank" rel="noopener noreferrer">yuudee.com</a>
                            | All Rights Reserved
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="scrollToHome" style="cursor: pointer;">
    <i class="fas fa-angle-up"></i>
</div>
<script>
    $('.changeLanguage').change(function(event){
        var url = "{{ route('google.translate.change') }}";
        window.location.href = url+"?lang="+$(this).val()
    })
    </script>