@extends('layout.master')

@section('content')
        <div class="wrapper overhid">

            @include('home.banner')

            {{-- @include('home.boxCity') --}}

            {{-- @include('home.boxForSales') --}}
            
            @include('home.boxForYou')



            <section class="pt-45 pb-0">
                <div class="container maxw1600 bdrb1 pb50">
                    <div class="row justify-content-center wow fadeInUp" data-wow-delay="300ms">
                        <div class="col-sm-6 col-lg-4 col-xl-2">
                            <div class="funfact_one text-center">
                                <div class="details">
                                    <ul class="ps-0 mb-0">
                                        <li>
                                            <div class="timer"><span><span>400</span></span></div>
                                        </li>
                                    </ul>
                                    <p class="text mb-0">Stores around the world</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xl-2">
                            <div class="funfact_one text-center">
                                <div class="details">
                                    <ul class="ps-0 mb-0">
                                        <li>
                                            <div class="timer"><span><span>200+</span></span></div>
                                        </li>
                                    </ul>
                                    <p class="text mb-0">Stores around the world</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xl-2">
                            <div class="funfact_one text-center">
                                <div class="details">
                                    <ul class="ps-0 mb-0">
                                        <li>
                                            <div class="timer"><span><span>1k+</span></span></div>
                                        </li>
                                    </ul>
                                    <p class="text mb-0">Stores around the world</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
@endsection
