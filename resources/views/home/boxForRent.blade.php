<?php
$locale = session()->get('locale', 'th');
?>
{{--boxForRent--}}
<div class="pt-5 pt-0">
    <section class="pt-0 mx20-lg">
        <div class="max-width1460-con position-relative mr-auto ml-auto">
            <div class="row wow fadeInUp" data-wow-delay="100ms">
                <div class="col-lg-6">
                    <div class="main-title-2">
                        <h2 class="title">{{ GoogleTranslate::trans('อสังหาริมทรัพย์ที่ให้เช่า', $locale) }}</h2>
                        {{-- <p class="par">Lorem ipsum dolor sit amet, consec tetur cing elit. Suspe ndisse suscipit</p> --}}
                    </div>
                </div>
                <div class="col-lg-6 my-3 pr-4 ">
                    <div class="d-flex home-icon-st flex-wrap d-sm-flex justify-content-start justify-content-md-end justify-content-lg-end">
                        <a class="d-flex align-items-center dark-color  me-2 md-me-2" href="#">
                            <i class=" icons fa-solid fa-house" aria-hidden="true"></i>{{ GoogleTranslate::trans('บ้าน', $locale) }}
                        </a>
                        <a class="d-flex align-items-center dark-color  me-2 md-me-2" href="#">
                            <i class="icons fa-regular fa-building" aria-hidden="true"></i>{{ GoogleTranslate::trans('อพาร์ตเมนต์', $locale) }}
                        </a>
                        <a class="d-flex align-items-center dark-color  me-2 md-me-2" href="#">
                            <i class="icons fa-solid fa-house-laptop" aria-hidden="true"></i>{{ GoogleTranslate::trans('สำนักงาน', $locale) }}
                        </a>
                        <a class="d-flex align-items-center dark-color  md-me-2" href="#">
                            <i class="icons fa-solid fa-house-flood-water" aria-hidden="true"></i>{{ GoogleTranslate::trans('วิลล่า', $locale) }}
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 aos-init aos-animate pl-0 pr-0" data-aos="fade-up" data-aos-delay="300">
                    <div class="pro-city-slider position-relative ">
                        <div class="swipers swiper-initialized swiper-horizontal swiper-pointer swiper-backface-hidden">
                            <div class="swiper-wrapper pb-20">
                                <div class=" col-sm-6 col-lg-6 swiper-slide swiper-slide-active">
                                    <div class="card box-shadow-lightblue mb-30">
                                        <div class="card-body p-0">
                                            <div class="img-block ">
                                                <div class="block-text text-center">
                                                    <b class="font-size-13">{{ GoogleTranslate::trans('โดดเด่น', $locale) }}</b>
                                                </div>
                                                <div class="text-block text-center">
                                                    <a href="javascript:void(0)" class="font-weight-500">฿14,000</a>
                                                </div>
                                                <img src="{{ asset('/assets/images/properties-grid-02.jpg') }}" alt="listings"
                                                    class="card-img-top img-sell">
                                            </div>
                                            <div class="p-10">
                                                <h6 class="card-title"><a href="javascript:void(0)">Equestrian Family Home</a></h6>
                                                <p class="list-text">San Diego City, CA, USA</p>
                                                <div class="d-flex align-items-center">
                                                    <a href="javascript:void(0)" class="mr-10"><i class="fa-solid fa-bed"></i> 5
                                                        bed</a>
                                                    <a href="javascript:void(0)" class="mr-10"><i class="fa-solid fa-bath"></i> 4
                                                        bath</a>
                                                    <a href="javascript:void(0)" class="mr-10"> <i
                                                            class="fa-brands fa-uncharted"></i> 900 sqft</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer bg-transparent">
                                            <div class="d-flex ">
                                                <div class="flex-grow-1">
                                                    <label class="label-700">{{ GoogleTranslate::trans('เช่า', $locale) }}</label>
                                                </div>
                                                <div class="flex-row-reverse">
                                                    <i class="fa-regular fa-share-from-square mr-10 blue"aria-hidden="true"></i>
                                                    <i class="fa fa-heart-o mr-10 red" aria-hidden="true"></i>
                                                    <i class="fa-regular fa-square-plus mr-10 green" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-sm-6 col-lg-6 swiper-slide swiper-slide-active ">
                                    <div class="card box-shadow-lightblue mb-30">
                                        <div class="card-body p-0">
                                            <div class="img-block ">
                                                <div class="text-block text-center">
                                                    <a href="javascript:void(0)" class="font-weight-500">฿14,000</a>
                                                </div>
                                                <img src="{{ asset('/assets/images/properties-grid-05.jpg') }}" alt="listings"
                                                    class="card-img-top img-sell">
                                            </div>
            
                                            <div class="p-10">
                                                <h6 class="card-title"><a href="javascript:void(0)">Equestrian Family Home</a>
                                                </h6>
                                                <p class="list-text">San Diego City, CA, USA</p>
                                                <div class="d-flex align-items-center">
                                                    <a href="javascript:void(0)" class="mr-10"><i class="fa-solid fa-bed"></i> 5
                                                        bed</a>
                                                    <a href="javascript:void(0)" class="mr-10"><i class="fa-solid fa-bath"></i>
                                                        4 bath</a>
                                                    <a href="javascript:void(0)" class="mr-10"> <i
                                                            class="fa-brands fa-uncharted"></i> 900 sqft</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer bg-transparent">
                                            <div class="d-flex ">
                                                <div class="flex-grow-1">
                                                    <label class="label-700">{{ GoogleTranslate::trans('เช่า', $locale) }}</label>
                                                </div>
                                                <div class="flex-row-reverse">
                                                    <i class="fa-regular fa-share-from-square mr-10 blue"aria-hidden="true"></i>
                                                    <i class="fa fa-heart-o mr-10 red" aria-hidden="true"></i>
                                                    <i class="fa-regular fa-square-plus mr-10 green" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-sm-6 col-lg-6 swiper-slide swiper-slide-active ">
                                    <div class="card box-shadow-lightblue mb-30">
                                        <div class="card-body p-0">
                                            <div class="img-block ">
                                                <div class="block-text text-center">
                                                    <b class="font-size-13">{{ GoogleTranslate::trans('โดดเด่น', $locale) }}</b>
                                                </div>
                                                <div class="text-block text-center">
                                                    <a href="javascript:void(0)" class="font-weight-500">฿14,000</a>
                                                </div>
                                                <img src="{{ asset('/assets/images/properties-grid-06.jpg') }}" alt="listings"
                                                    class="card-img-top img-sell">
                                            </div>
            
                                            <div class="p-10">
                                                <h6 class="card-title"><a href="javascript:void(0)">Equestrian Family Home</a></h6>
                                                <p class="list-text">San Diego City, CA, USA</p>
                                                <div class="d-flex align-items-center">
                                                    <a href="javascript:void(0)" class="mr-10"><i class="fa-solid fa-bed"></i> 5
                                                        bed</a>
                                                    <a href="javascript:void(0)" class="mr-10"><i class="fa-solid fa-bath"></i> 4
                                                        bath</a>
                                                    <a href="javascript:void(0)" class="mr-10"> <i
                                                            class="fa-brands fa-uncharted"></i> 900 sqft</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer bg-transparent">
                                            <div class="d-flex ">
                                                <div class="flex-grow-1">
                                                    <label class="label-700">{{ GoogleTranslate::trans('เช่า', $locale) }}</label>
                                                </div>
                                                <div class="flex-row-reverse">
                                                    <i class="fa-regular fa-share-from-square mr-10 blue"aria-hidden="true"></i>
                                                    <i class="fa fa-heart-o mr-10 red" aria-hidden="true"></i>
                                                    <i class="fa-regular fa-square-plus mr-10 green" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-sm-6 col-lg-6 swiper-slide swiper-slide-active ">
                                    <div class="card box-shadow-lightblue mb-30">
                                        <div class="card-body p-0">
                                            <div class="img-block ">
                                                <div class="block-text text-center ">
                                                    <b class="font-size-13">{{ GoogleTranslate::trans('โดดเด่น', $locale) }}</b>
                                                </div>
                                                <div class="text-block text-center">
                                                    <a href="javascript:void(0)" class="font-weight-500">฿14,000</a>
                                                </div>
                                                <img src="{{ asset('/assets/images/properties-grid-07.jpg') }}" alt="listings"
                                                    class="card-img-top img-sell">
                                            </div>
            
                                            <div class="p-10">
                                                <h6 class="card-title"><a href="javascript:void(0)">Equestrian Family Home</a></h6>
                                                <p class="list-text">San Diego City, CA, USA</p>
                                                <div class="d-flex align-items-center">
                                                    <a href="javascript:void(0)" class="mr-10"><i class="fa-solid fa-bed"></i> 5
                                                        bed</a>
                                                    <a href="javascript:void(0)" class="mr-10"><i class="fa-solid fa-bath"></i> 4
                                                        bath</a>
                                                    <a href="javascript:void(0)" class="mr-10"> <i
                                                            class="fa-brands fa-uncharted"></i> 900 sqft</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer bg-transparent">
                                            <div class="d-flex ">
                                                <div class="flex-grow-1">
                                                    <label class="label-700">{{ GoogleTranslate::trans('เช่า', $locale) }}</label>
                                                </div>
                                                <div class="flex-row-reverse">
                                                    <i class="fa-regular fa-share-from-square mr-10 blue"aria-hidden="true"></i>
                                                    <i class="fa fa-heart-o mr-10 red" aria-hidden="true"></i>
                                                    <i class="fa-regular fa-square-plus mr-10 green" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-sm-6 col-lg-6 swiper-slide swiper-slide-active ">
                                    <div class="card box-shadow-lightblue mb-30">
                                        <div class="card-body p-0">
                                            <div class="img-block ">
                                                <div class="text-block text-center">
                                                    <a href="javascript:void(0)" class="font-weight-500">฿14,000</a>
                                                </div>
                                                <img src="{{ asset('/assets/images/properties-grid-02.jpg') }}" alt="listings"
                                                    class="card-img-top img-sell">
                                            </div>
            
                                            <div class="p-10">
                                                <h6 class="card-title"><a href="javascript:void(0)">Equestrian Family Home</a></h6>
                                                <p class="list-text">San Diego City, CA, USA</p>
                                                <div class="d-flex align-items-center">
                                                    <a href="javascript:void(0)" class="mr-10"><i class="fa-solid fa-bed"></i> 5
                                                        bed</a>
                                                    <a href="javascript:void(0)" class="mr-10"><i class="fa-solid fa-bath"></i> 4
                                                        bath</a>
                                                    <a href="javascript:void(0)" class="mr-10"> <i
                                                            class="fa-brands fa-uncharted"></i> 900 sqft</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer bg-transparent">
                                            <div class="d-flex ">
                                                <div class="flex-grow-1">
                                                    <label class="label-700">{{ GoogleTranslate::trans('เช่า', $locale) }}</label>
                                                </div>
                                                <div class="flex-row-reverse">
                                                    <i class="fa-regular fa-share-from-square mr-10 blue"aria-hidden="true"></i>
                                                    <i class="fa fa-heart-o mr-10 red" aria-hidden="true"></i>
                                                    <i class="fa-regular fa-square-plus mr-10 green" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-sm-6 col-lg-6 swiper-slide swiper-slide-active ">
                                    <div class="card box-shadow-lightblue mb-30">
                                        <div class="card-body p-0">
                                            <div class="img-block ">
                                                <div class="block-text text-center ">
                                                    <b class="font-size-13">FEATURED</b>
                                                </div>
                                                <div class="text-block text-center">
                                                    <a href="javascript:void(0)" class="font-weight-500">฿14,000</a>
                                                </div>
                                                <img src="{{ asset('/assets/images/properties-grid-05.jpg') }}" alt="listings"
                                                    class="card-img-top img-sell">
                                            </div>
            
                                            <div class="p-10">
                                                <h6 class="card-title"><a href="javascript:void(0)">Equestrian Family Home</a></h6>
                                                <p class="list-text">San Diego City, CA, USA</p>
                                                <div class="d-flex align-items-center">
                                                    <a href="javascript:void(0)" class="mr-10"><i class="fa-solid fa-bed"></i> 5
                                                        bed</a>
                                                    <a href="javascript:void(0)" class="mr-10"><i class="fa-solid fa-bath"></i> 4
                                                        bath</a>
                                                    <a href="javascript:void(0)" class="mr-10"> <i
                                                            class="fa-brands fa-uncharted"></i> 900 sqft</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer bg-transparent">
                                            <div class="d-flex ">
                                                <div class="flex-grow-1">
                                                    <label class="label-700">{{ GoogleTranslate::trans('เช่า', $locale) }}</label>
                                                </div>
                                                <div class="flex-row-reverse">
                                                    <i class="fa-regular fa-share-from-square mr-10 blue"aria-hidden="true"></i>
                                                    <i class="fa fa-heart-o mr-10 red" aria-hidden="true"></i>
                                                    <i class="fa-regular fa-square-plus mr-10 green" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-sm-6 col-lg-6 swiper-slide swiper-slide-active ">
                                    <div class="card box-shadow-lightblue mb-30">
                                        <div class="card-body p-0">
                                            <div class="img-block ">
                                                <div class="block-text text-center">
                                                    <b class="font-size-13">FEATURED</b>
                                                </div>
                                                <div class="text-block text-center">
                                                    <a href="javascript:void(0)" class="font-weight-500">฿14,000</a>
                                                </div>
                                                <img src="{{ asset('/assets/images/properties-grid-06.jpg') }}" alt="listings"
                                                    class="card-img-top img-sell">
                                            </div>
            
                                            <div class="p-10">
                                                <h6 class="card-title"><a href="javascript:void(0)">Equestrian Family Home</a></h6>
                                                <p class="list-text">San Diego City, CA, USA</p>
                                                <div class="d-flex align-items-center">
                                                    <a href="javascript:void(0)" class="mr-10"><i class="fa-solid fa-bed"></i> 5
                                                        bed</a>
                                                    <a href="javascript:void(0)" class="mr-10"><i class="fa-solid fa-bath"></i> 4
                                                        bath</a>
                                                    <a href="javascript:void(0)" class="mr-10"> <i
                                                            class="fa-brands fa-uncharted"></i> 900 sqft</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer bg-transparent">
                                            <div class="d-flex ">
                                                <div class="flex-grow-1">
                                                    <label class="label-700">{{ GoogleTranslate::trans('เช่า', $locale) }}</label>
                                                </div>
                                                <div class="flex-row-reverse">
                                                    <i class="fa-regular fa-share-from-square mr-10 blue"aria-hidden="true"></i>
                                                    <i class="fa fa-heart-o mr-10 red" aria-hidden="true"></i>
                                                    <i class="fa-regular fa-square-plus mr-10 green" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-sm-6 col-lg-6 swiper-slide swiper-slide-active ">
                                    <div class="card box-shadow-lightblue mb-30">
                                        <div class="card-body p-0">
                                            <div class="img-block ">
                                                <div class="text-block text-center">
                                                    <a href="javascript:void(0)" class="font-weight-500">฿14,000</a>
                                                </div>
                                                <img src="{{ asset('/assets/images/properties-grid-07.jpg') }}" alt="listings"
                                                    class="card-img-top img-sell">
                                            </div>
            
                                            <div class="p-10">
                                                <h6 class="card-title"><a href="javascript:void(0)">Equestrian Family Home</a>
                                                </h6>
                                                <p class="list-text">San Diego City, CA, USA</p>
                                                <div class="d-flex align-items-center">
                                                    <a href="javascript:void(0)" class="mr-10"><i class="fa-solid fa-bed"></i> 5
                                                        bed</a>
                                                    <a href="javascript:void(0)" class="mr-10"><i class="fa-solid fa-bath"></i>
                                                        4 bath</a>
                                                    <a href="javascript:void(0)" class="mr-10"> <i
                                                            class="fa-brands fa-uncharted"></i> 900 sqft</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer bg-transparent">
                                            <div class="d-flex ">
                                                <div class="flex-grow-1">
                                                    <label class="label-700">{{ GoogleTranslate::trans('เช่า', $locale) }}</label>
                                                </div>
                                                <div class="flex-row-reverse">
                                                    <i class="fa-regular fa-share-from-square mr-10 blue"aria-hidden="true"></i>
                                                    <i class="fa fa-heart-o mr-10 red" aria-hidden="true"></i>
                                                    <i class="fa-regular fa-square-plus mr-10 green" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-sm-6 col-lg-6 swiper-slide swiper-slide-active ">
                                    <div class="card box-shadow-lightblue mb-30">
                                        <div class="card-body p-0">
                                            <div class="img-block ">
                                                <div class="block-text text-center ">
                                                    <b class="font-size-13">{{ GoogleTranslate::trans('โดดเด่น', $locale) }}</b>
                                                </div>
                                                <div class="text-block text-center">
                                                    <a href="javascript:void(0)" class="font-weight-500">฿14,000</a>
                                                </div>
                                                <img src="{{ asset('/assets/images/properties-grid-02.jpg') }}" alt="listings"
                                                    class="card-img-top img-sell">
                                            </div>
            
                                            <div class="p-10">
                                                <h6 class="card-title"><a href="javascript:void(0)">Equestrian Family Home</a></h6>
                                                <p class="list-text">San Diego City, CA, USA</p>
                                                <div class="d-flex align-items-center">
                                                    <a href="javascript:void(0)" class="mr-10"><i class="fa-solid fa-bed"></i> 5
                                                        bed</a>
                                                    <a href="javascript:void(0)" class="mr-10"><i class="fa-solid fa-bath"></i> 4
                                                        bath</a>
                                                    <a href="javascript:void(0)" class="mr-10"> <i
                                                            class="fa-brands fa-uncharted"></i> 900 sqft</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer bg-transparent">
                                            <div class="d-flex ">
                                                <div class="flex-grow-1">
                                                    <label class="label-700">{{ GoogleTranslate::trans('เช่า', $locale) }}</label>
                                                </div>
                                                <div class="flex-row-reverse">
                                                    <i class="fa-regular fa-share-from-square mr-10 blue"aria-hidden="true"></i>
                                                    <i class="fa fa-heart-o mr-10 red" aria-hidden="true"></i>
                                                    <i class="fa-regular fa-square-plus mr-10 green" aria-hidden="true"></i>
                                                </div>
                                            </div>
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
    </section>
</div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script>
$('.changeLanguage').change(function(event){
    var url = "{{ route('google.translate.change') }}";
    window.location.href = url+"?lang="+$(this).val()
})
</script>
 {{--end boxForRent--}}