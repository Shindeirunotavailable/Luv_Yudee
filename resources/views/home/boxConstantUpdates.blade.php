<?php
$locale = session()->get('locale', 'th');
?>
<section class="mb0-md md-pb-30">
    <div class="backg-container py-5">
        <div class="max-width1460-con position-relative mr-auto ml-auto mx20-lg">
            <div class="row">
                <div class="col-lg-12 m-auto aos-init">
                    <div class="main-title  text-md-center">
                        <h2 class="title">We have the most listings and constant updates.</h2>
                        <h2 class="title">So you’ll never miss out.</h2>
                    </div>
                </div>
            </div>

            <div class="row mt-8">
                <div class="col-lg-4 mb-20 mb-lg-0">
                    <div class="card border-hover shadow-2 shadow-hover-lg-1 p-xl-30 p-lg-20 h-100 hover-change-image">
                        <div class="row no-gutters ">
                            <div class="col-sm-3 b-cen">
                                <img src="{{ asset('/assets/images/group-16.png') }}" alt="Buy a new home">
                            </div>
                            <div class="col-sm-9 t-cen">
                                <div class="card-body p-0 pl-0 pl-sm-5 pt-5 pt-sm-0">
                                    <a href="#" class="text-dark hover-secondary">
                                        <h4 class="fs-20 lh-1625 mb-1">{{ GoogleTranslate::trans('ซื้อบ้าน', $locale) }}</h4>
                                    </a>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do eiusmod tempor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-20 mb-lg-0">
                    <div class="card border-hover shadow-2 shadow-hover-lg-1 p-xl-30 p-lg-20 h-100 hover-change-image">
                        <div class="row no-gutters">
                            <div class="col-sm-3 b-cen">
                                <img src="{{ asset('/assets/images/group-16.png') }}" alt="Sell a home">
                            </div>
                            <div class="col-sm-9 t-cen">
                                <div class="card-body p-0 pl-0 pl-sm-5 pt-5 pt-sm-0">
                                    <a href="#"
                                        class="text-dark hover-secondary">
                                        <h4 class="fs-20 lh-1625 mb-1">{{ GoogleTranslate::trans('ขายบ้าน', $locale) }}</h4>
                                    </a>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do eiusmod tempor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-6 mb-lg-0">
                    <div class="card border-hover shadow-2 shadow-hover-lg-1 p-xl-30 p-lg-20 h-100 hover-change-image">
                        <div class="row no-gutters">
                            <div class="col-sm-3 b-cen">
                                <img src="{{ asset('/assets/images/group-16.png') }}" alt="Rent a home">
                            </div>
                            <div class="col-sm-9 t-cen">
                                <div class="card-body p-0 pl-0 pl-sm-5 pt-5 pt-sm-0">
                                    <a href="#"
                                        class="text-dark hover-secondary">
                                        <h4 class="fs-20 lh-1625 mb-1">{{ GoogleTranslate::trans('เช่าบ้าน', $locale) }}</h4>
                                    </a>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do eiusmod tempor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<script>
    $('.changeLanguage').change(function(event){
        var url = "{{ route('google.translate.change') }}";
        window.location.href = url+"?lang="+$(this).val()
    })
    </script>