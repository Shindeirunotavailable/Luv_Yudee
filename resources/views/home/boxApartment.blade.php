<?php
$locale = session()->get('locale', 'th');
?>
<div class="backg-container pt-0">    
    <section class="md-pb-30 pt-40 mx20-lg">
        <div class="max-width1460-con position-relative mr-auto ml-auto">
            <div class="row  justify-content-between align-items-center">
                <div class="col-auto">
                    <div class="main-title aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                        <h2 class="title">{{ GoogleTranslate::trans('ประเภทอสังหาริมทรัย์', $locale) }}</h2>
                        {{-- <p class="par">Aliquam lacinia diam quis lacus euismod</p> --}}
                    </div>
                </div>
                <div class="col-auto mb30">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                    <div class="pro-city-slider">
                        <div
                            class="swiper swiper-initialized swiper-horizontal swiper-pointer swiper-backface-hidden">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide swiper-slide-active" style="width: 229.2px; margin-right: 15px;">
                                    <div class="item">
                                        <a href="# ">
                                            <div class="homestead-st1">
                                                <div class="homestead-img">
                                                    <img class="w-100 cover" src="{{ asset('/assets/images/as-1.jpg') }}" alt="apartment city">
                                                </div>
                                                <div class="homestead-content">
                                                    <h6 class="title mb-0">{{ GoogleTranslate::trans('บ้าน', $locale) }}</h6>
                                                    <p class="text mb-0">{{ GoogleTranslate::trans('22 บ้าน', $locale) }}</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-next" style="width: 229.2px; margin-right: 15px;">
                                    <div class="item">
                                        <a href="# ">
                                            <div class="homestead-st1">
                                                <div class="homestead-img">
                                                    <img class="w-100 cover" src="{{ asset('/assets/images/as-2.jpg') }}" alt="apartment city">
                                                </div>
                                                <div class="homestead-content">
                                                    <h6 class="title mb-0">{{ GoogleTranslate::trans('อาพร์ตเมนต์', $locale) }}</h6>
                                                    <p class="text mb-0">{{ GoogleTranslate::trans('22 อพาร์ตเมนต์', $locale) }}</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide" style="width: 229.2px; margin-right: 15px;">
                                    <div class="item">
                                        <a href="# ">
                                            <div class="homestead-st1">
                                                <div class="homestead-img">
                                                    <img class="w-100 cover" src="{{ asset('/assets/images/as-3.jpg') }}" alt="apartment city">
                                                </div>
                                                <div class="homestead-content">
                                                    <h6 class="title mb-0">{{ GoogleTranslate::trans('สำนักงาน', $locale) }}</h6>
                                                    <p class="text mb-0">{{ GoogleTranslate::trans('22 สำนักงาน', $locale) }}</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide" style="width: 229.2px; margin-right: 15px;">
                                    <div class="item">
                                        <a href="# ">
                                            <div class="homestead-st1">
                                                <div class="homestead-img">
                                                    <img class="w-100 cover" src="{{ asset('/assets/images/as-4.jpg') }}" alt="as-4.jpeg" alt="apartment city">
                                                </div>
                                                <div class="homestead-content">
                                                    <h6 class="title mb-0">{{ GoogleTranslate::trans('วิลล่า', $locale) }}</h6>
                                                    <p class="text mb-0">{{ GoogleTranslate::trans('22 วิลล่า', $locale) }}</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide" style="width: 229.2px; margin-right: 15px;">
                                    <div class="item">
                                        <a href="# ">
                                            <div class="homestead-st1">
                                                <div class="homestead-img">
                                                    <img class="w-100 cover" src="{{ asset('/assets/images/as-5.jpg') }}" alt="apartment city">
                                                </div>
                                                <div class="homestead-content">
                                                    <h6 class="title mb-0">{{ GoogleTranslate::trans('บ้าน', $locale) }}</h6>
                                                    <p class="text mb-0">{{ GoogleTranslate::trans('22 บ้าน', $locale) }}</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide" style="width: 229.2px; margin-right: 15px;">
                                    <div class="item">
                                        <a href="# ">
                                            <div class="homestead-st1">
                                                <div class="homestead-img">
                                                    <img class="w-100 cover" src="{{ asset('/assets/images/as-2.jpg') }}" alt="apartment city">
                                                </div>
                                                <div class="homestead-content">
                                                    <h6 class="title mb-0">{{ GoogleTranslate::trans('อาพร์ตเมนต์', $locale) }}</h6>
                                                    <p class="text mb-0">{{ GoogleTranslate::trans('22 อพาร์ตเมนต์', $locale) }}</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide" style="width: 229.2px; margin-right: 15px;">
                                    <div class="item">
                                        <a href="# ">
                                            <div class="homestead-st1">
                                                <div class="homestead-img">
                                                    <img class="w-100 cover" src="{{ asset('/assets/images/as-3.jpg') }}" alt="apartment city">
                                                </div>
                                                <div class="homestead-content">
                                                    <h6 class="title mb-0">{{ GoogleTranslate::trans('สำนักงาน', $locale) }}</h6>
                                                    <p class="text mb-0">{{ GoogleTranslate::trans('22 สำหนักงาน', $locale) }}</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-active" style="width: 229.2px; margin-right: 15px;">
                                    <div class="item">
                                        <a href="# ">
                                            <div class="homestead-st1">
                                                <div class="homestead-img">
                                                    <img class="w-100 cover" src="{{ asset('/assets/images/as-1.jpg') }}" alt="apartment city">
                                                </div>
                                                <div class="homestead-content">
                                                    <h6 class="title mb-0">{{ GoogleTranslate::trans('บ้าน', $locale) }}</h6>
                                                    <p class="text mb-0">{{ GoogleTranslate::trans('22 บ้าน', $locale) }}</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    $('.changeLanguage').change(function(event){
        var url = "{{ route('google.translate.change') }}";
        window.location.href = url+"?lang="+$(this).val()
    })
    </script>