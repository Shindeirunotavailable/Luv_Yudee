<?php
$locale = session()->get('locale', 'th');
?>
<section class="md-pb-40 pb-90 pt-40 mx20-lg">
    <div class="max-width1460-con position-relative mr-auto ml-auto">
        <div class="row align-items-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-7">
                <div class="main-title-2">
                    <h2 class="title">{{ GoogleTranslate::trans('จังหวัด', $locale) }}</h2>
                    {{-- <p class="par">Aliquam lacinia diam quis lacus euismod</p> --}}
                </div>
            </div>
            <div class="col-lg-5">
                <div class="text-al text-lg-end mb-3">
                    <a class="user-arrow user-btn2" href="#">{{ GoogleTranslate::trans('ดูเพิ่มเติม', $locale) }}
                        <i class="fa-solid fa-arrow-right fa-lg"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                <div class="pro-city-slider position-relative ">
                    <div class="swiperess swiper-initialized swiper-horizontal swiper-pointer swiper-backface-hidden">
                        <div class="swiper-wrapper transforms">
                            <div class="swiper-slide slide-w" style="width: 188.5px; margin-right: 15px;">
                                <div class="item">
                                    <div class="feature-st3 text-center">
                                        <div class="feature-img rounded-circle">
                                            <img class="w-100 cover" src="{{ asset('/assets/images/11zon_cropped.png') }}" alt="cities">
                                        </div>
                                        <div class="feature-content pt-20 pb-40">
                                            <div class="top-area">
                                                <h6 class="title mb-1"><a href="/map-v3">{{ GoogleTranslate::trans('เชียงราย', $locale) }}</a> </h6>
                                                <p class="fs-15 fw-400 dark-color mb-0">{{ GoogleTranslate::trans('12 อำเภอ', $locale) }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slide-w" style="width: 188.5px; margin-right: 15px;">
                                <div class="item">
                                    <div class="feature-st3 text-center">
                                        <div class="feature-img rounded-circle">
                                            <img class="w-100 cover" src="{{ asset('/assets/images/11zon_cropped-2.png') }}" alt="cities">
                                        </div>
                                        <div class="feature-content pt-20 pb-40">
                                            <div class="top-area">
                                                <h6 class="title mb-1"><a href="/map-v3">{{ GoogleTranslate::trans('เชียงใหม่', $locale) }}</a> </h6>
                                                <p class="fs-15 fw-400 dark-color mb-0">{{ GoogleTranslate::trans('12 อำเภอ', $locale) }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slide-w swiper-slide-prev" style="width: 188.5px; margin-right: 15px;">
                                <div class="item">
                                    <div class="feature-st3 text-center">
                                        <div class="feature-img rounded-circle">
                                            <img class="w-100 cover" src="{{ asset('/assets/images/11zon_cropped-3.png') }}" alt="cities">
                                        </div>
                                        <div class="feature-content pt-20 pb-40">
                                            <div class="top-area">
                                                <h6 class="title mb-1"><a href="/map-v3">{{ GoogleTranslate::trans('กระบี่', $locale) }}</a></h6>
                                                <p class="fs-15 fw-400 dark-color mb-0">{{ GoogleTranslate::trans('12 อำเภอ', $locale) }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slide-w swiper-slide-active" style="width: 188.5px; margin-right: 15px;">
                                <div class="item">
                                    <div class="feature-st3 text-center">
                                        <div class="feature-img rounded-circle">
                                            <img class="w-100 cover" src="{{ asset('/assets/images/11zon_cropped-5.png') }}" alt="cities">
                                        </div>
                                        <div class="feature-content pt-20 pb-40">
                                            <div class="top-area">
                                                <h6 class="title mb-1"><a href="/map-v3">{{ GoogleTranslate::trans('ชลบุรี', $locale) }}</a> </h6>
                                                <p class="fs-15 fw-400 dark-color mb-0">{{ GoogleTranslate::trans('12 อำเภอ', $locale) }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slide-w swiper-slide-next"
                                style="width: 188.5px; margin-right: 15px;">
                                <div class="item">
                                    <div class="feature-st3 text-center">
                                        <div class="feature-img rounded-circle">
                                            <img class="w-100 cover" src="{{ asset('/assets/images/11zon_cropped-6.png') }}" alt="cities"></div>
                                        <div class="feature-content pt-20 pb-40">
                                            <div class="top-area">
                                                <h6 class="title mb-1"><a href="/map-v3">{{ GoogleTranslate::trans('เพชรบูรณ์', $locale) }}</a> </h6>
                                                <p class="fs-15 fw-400 dark-color mb-0">{{ GoogleTranslate::trans('12 อำเภอ', $locale) }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slide-w" style="width: 188.5px; margin-right: 15px;">
                                <div class="item">
                                    <div class="feature-st3 text-center">
                                        <div class="feature-img rounded-circle">
                                            <img class="w-100 cover" src="{{ asset('/assets/images/11zon_cropped-7.png') }}" alt="cities"></div>
                                        <div class="feature-content pt-20 pb-40">
                                            <div class="top-area">
                                                <h6 class="title mb-1"><a href="/map-v3">{{ GoogleTranslate::trans('สระบุรี', $locale) }}</a></h6>
                                                <p class="fs-15 fw-400 dark-color mb-0">{{ GoogleTranslate::trans('12 อำเภอ', $locale) }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slide-w" style="width: 188.5px; margin-right: 15px;">
                                <div class="item">
                                    <div class="feature-st3 text-center">
                                        <div class="feature-img rounded-circle">
                                            <img class="w-100 cover" src="{{ asset('/assets/images/cp-m-1.png') }}" alt="cities"></div>
                                        <div class="feature-content pt-20 pb-40">
                                            <div class="top-area">
                                                <h6 class="title mb-1"><a href="/map-v3">{{ GoogleTranslate::trans('กรุงเทพ', $locale) }}</a></h6>
                                                <p class="fs-15 fw-400 dark-color mb-0">{{ GoogleTranslate::trans('12 อำเภอ', $locale) }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slide-w" style="width: 188.5px; margin-right: 15px;">
                                <div class="item">
                                    <div class="feature-st3 text-center">
                                        <div class="feature-img rounded-circle">
                                            <img class="w-100 cover" src="{{ asset('/assets/images/11zon_cropped.png') }}" alt="cities">
                                        </div>
                                        <div class="feature-content pt-20 pb-40">
                                            <div class="top-area">
                                                <h6 class="title mb-1"><a href="/map-v3">{{ GoogleTranslate::trans('เชียงราย', $locale) }}</a> </h6>
                                                <p class="fs-15 fw-400 dark-color mb-0">{{ GoogleTranslate::trans('12 อำเภอ', $locale) }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slide-w" style="width: 188.5px; margin-right: 15px;">
                                <div class="item">
                                    <div class="feature-st3 text-center">
                                        <div class="feature-img rounded-circle">
                                            <img class="w-100 cover" src="{{ asset('/assets/images/11zon_cropped-2.png') }}" alt="cities">
                                        </div>
                                        <div class="feature-content pt-20 pb-40">
                                            <div class="top-area">
                                                <h6 class="title mb-1"><a href="/map-v3">{{ GoogleTranslate::trans('เชียงใหม่', $locale) }}</a> </h6>
                                                <p class="fs-15 fw-400 dark-color mb-0">{{ GoogleTranslate::trans('12 อำเภอ', $locale) }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide slide-w swiper-slide-prev" style="width: 188.5px; margin-right: 15px;">
                                <div class="item">
                                    <div class="feature-st3 text-center">
                                        <div class="feature-img rounded-circle">
                                            <img class="w-100 cover" src="{{ asset('/assets/images/11zon_cropped-3.png') }}" alt="cities">
                                        </div>
                                        <div class="feature-content pt-20 pb-40">
                                            <div class="top-area">
                                                <h6 class="title mb-1"><a href="/map-v3">{{ GoogleTranslate::trans('กระบี่', $locale) }}</a></h6>
                                                <p class="fs-15 fw-400 dark-color mb-0">{{ GoogleTranslate::trans('12 อำเภอ', $locale) }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slide-w swiper-slide-active" style="width: 188.5px; margin-right: 15px;">
                                <div class="item">
                                    <div class="feature-st3 text-center">
                                        <div class="feature-img rounded-circle">
                                            <img class="w-100 cover" src="{{ asset('/assets/images/11zon_cropped-5.png') }}" alt="cities">
                                        </div>
                                        <div class="feature-content pt-20 pb-40">
                                            <div class="top-area">
                                                <h6 class="title mb-1"><a href="/map-v3">{{ GoogleTranslate::trans('ชลบุรี', $locale) }}</a> </h6>
                                                <p class="fs-15 fw-400 dark-color mb-0">{{ GoogleTranslate::trans('12 อำเภอ', $locale) }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slide-w swiper-slide-next"
                                style="width: 188.5px; margin-right: 15px;">
                                <div class="item">
                                    <div class="feature-st3 text-center">
                                        <div class="feature-img rounded-circle">
                                            <img class="w-100 cover" src="{{ asset('/assets/images/11zon_cropped-6.png') }}" alt="cities"></div>
                                        <div class="feature-content pt-20 pb-40">
                                            <div class="top-area">
                                                <h6 class="title mb-1"><a href="/map-v3">{{ GoogleTranslate::trans('เพชรบูรณ์', $locale) }}</a> </h6>
                                                <p class="fs-15 fw-400 dark-color mb-0">{{ GoogleTranslate::trans('12 อำเภอ', $locale) }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slide-w" style="width: 188.5px; margin-right: 15px;">
                                <div class="item">
                                    <div class="feature-st3 text-center">
                                        <div class="feature-img rounded-circle">
                                            <img class="w-100 cover" src="{{ asset('/assets/images/11zon_cropped-7.png') }}" alt="cities"></div>
                                        <div class="feature-content pt-20 pb-40">
                                            <div class="top-area">
                                                <h6 class="title mb-1"><a href="/map-v3">{{ GoogleTranslate::trans('สระบุรี', $locale) }}</a></h6>
                                                <p class="fs-15 fw-400 dark-color mb-0">{{ GoogleTranslate::trans('12 อำเภอ', $locale) }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="btn-swiper">
                        <div class="rounded-arrow arrowY-center-position">
                            <button class="property-by-city-prev__active swiper_button _prev ">
                                <i class="fa-solid fa-angle-left"></i>
                            </button>
                            <button class="property-by-city-next__active swiper_button _next swiper-button-disabled " disabled="">
                                <i class="fa-solid fa-angle-right "></i>
                            </button>
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