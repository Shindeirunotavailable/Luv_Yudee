<?php
$locale = session()->get('locale', 'th');
?>
<section class="mb0-md md-pb-30 mx20-lg">
    <div class="max-width1460-con position-relative mr-auto ml-auto">
        <div class="row">
            <div class="col-lg-6 aos-init pt-40">
                <div class="main-title ">
                    <h2 class="title">{{ GoogleTranslate::trans('รายการแนะนำพิเศษ', $locale) }}</h2>
                    {{-- <p class="par">Aliquam lacinia diam quis lacus euismod</p> --}}
                </div>
            </div>
        </div>
        <div class="max-width1460-con position-relative mr-auto ml-auto">
            <div class="row">
                <div class="col-lg-12 aos-init aos-animate pl-0 pr-0" data-aos="fade-up" data-aos-delay="300">
                    <div class="pro-city-slider position-relative ">
                        <div class="swiperp swiper-initialized swiper-horizontal swiper-pointer swiper-backface-hidden">
                            <div class="swiper-wrapper pb-20">
                                <div class=" col-sm-6 col-lg-6 swiper-slide swiper-slide-active">
                                    <div class="blog-style1">
                                        <div class="blog-img">
                                            <img class="w-100 cover" src="{{ asset('/assets/images/blog-1.jpg') }}" alt="blog">
                                        </div>
                                        <div class="blog-content">
                                            <div class="date">
                                                <span class="month">July</span><span class="day">28</span>
                                            </div>
                                            <a class="tag" href="#">Living
                                                Room</a>
                                            <h6 class="title mt-1"><a href="/blogs/1">Private Contemporary Home Balancing Openness</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-sm-6 col-lg-6 swiper-slide swiper-slide-active ">
                                    <div class="blog-style1">
                                        <div class="blog-img">
                                            <img class="w-100 cover" src="{{ asset('/assets/images/blog-2.jpg') }}" alt="blog">
                                        </div>
                                        <div class="blog-content">
                                            <div class="date">
                                                <span class="month">July</span><span class="day">28</span>
                                            </div>
                                            <a class="tag" href="#">Living Room</a>
                                            <h6 class="title mt-1"><a href="/blogs/2">Contemporary Home Private Balancing Openness</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-sm-6 col-lg-6 swiper-slide swiper-slide-active ">
                                    <div class="blog-style1">
                                        <div class="blog-img">
                                            <img class="w-100 cover" src="{{ asset('/assets/images/blog-3.jpg') }}" alt="blog">
                                        </div>
                                        <div class="blog-content">
                                            <div class="date">
                                                <span class="month">July</span><span class="day">28</span>
                                            </div>
                                            <a class="tag" href="#">Living Room</a>
                                            <h6 class="title mt-1"><a href="/blogs/3">Balancing Private Contemporary Home Openness</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-sm-6 col-lg-6 swiper-slide swiper-slide-active ">
                                    <div class="blog-style1">
                                        <div class="blog-img">
                                            <img class="w-100 cover" src="{{ asset('/assets/images/blog-2.jpg') }}" alt="blog">
                                        </div>
                                        <div class="blog-content">
                                            <div class="date">
                                                <span class="month">July</span><span class="day">28</span>
                                            </div>
                                            <a class="tag" href="#">Living Room</a>
                                            <h6 class="title mt-1"><a href="/blogs/2">Contemporary Home Private Balancing Openness</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script>
$('.changeLanguage').change(function(event){
    var url = "{{ route('google.translate.change') }}";
    window.location.href = url+"?lang="+$(this).val()
})
</script>