@extends('layout.master')
@section('content')
    <section class="p-0">
        <iframe class="content-map contact-page" loading="lazy"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3874.180657387966!2d100.52433797576472!3d13.828188095519033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29bfbc0283e39%3A0x203d873e226cd556!2zTHV2IERyaXZlIENhciBSZW50IGwg4LmA4Lil4Li04LifIOC5hOC4lOC4o-C5jOC4nyDguITguLLguKPguYzguYDguKPguYnguJnguJfguYwg4Liq4Liz4LiZ4Lix4LiB4LiH4Liy4LiZ4LmD4Lir4LiN4LmI!5e0!3m2!1sth!2sth!4v1704780060715!5m2!1sth!2sth"
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </section>

    <section class="section-120">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5 pb-30">
                    <div class="card cardBox">
                        <div class="card-body ">
                            <div class="pb-10 pt-10">
                                <h4>Have questions? Get in touch!</h4>
                            </div>
                            <form action="{{ url('/contentstone') }}"  method="POST" class="needs-validation" id="contentForm">
                            {{-- <form class="needs-validation"> --}}
                                @csrf
                                <div class="form-group">
                                    <label class="label-700">First Name</label>
                                    <input type="text" name="firstName" id="firstName" class="form-control "
                                        placeholder="Enter First Name">
                                    <div class="invalid-feedback">
                                        <a> กรุณากรอก First Name</a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="label-700">Last Name</label>
                                    <input type="text" name="lastName" id="lastName" class="form-control "
                                        placeholder="Enter Last Name">
                                    <div class="invalid-feedback">
                                        <a> กรุณากรอก Last Name</a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="label-700">Email</label>
                                    <input type="Email" name="contactEmail" id="contactEmail" class="form-control "
                                        placeholder="Enter Email" required>

                                </div>
                                <div class="form-group">
                                    <label class="label-700">Description</label>
                                    <textarea cols="30" rows="4" placeholder="There are many variations of passages." id="description"
                                        name="description" class="form-control"></textarea>
                                    <div class="invalid-feedback">
                                        <a> กรุณากรอก Description</a>
                                    </div>
                                </div>
                                <button type="submit" class="afterButton rounded-pill btn-lg btn-block btn "
                                    id="submitContact"> Submit
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-2 align-self-end">
                    <div class="text-center">
                        <h2>We’d love to hear from you.</h2>
                        <label>We are here to answer any question you may have. As a partner of corporates,
                            realton has more than 9,000 offices of all sizes and all potential of session.</label>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section>
        <div class=" background-grey pt-30">
            <div class="container">
                <div class="row mb-20">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h2>Visit Our Office</h2>
                            <p>Realton has more than 9,000 offices of all sizes and all potential of session.</p>
                        </div>
                    </div>
                </div>
                <div class="card-deck text-center pb-30 ">
                    <div class="card cards-effect bg-transparent border-0 pt-30 ">
                        <div class="text-center">
                            <img src="https://cdn-icons-png.flaticon.com/512/185/185326.png"
                                class="icon-lg icon-sm icon-xl">
                        </div>
                        <div class="card-body mt-15">
                            <h3 class="card-title">Paris</h3>
                            <p class="card-text">1301 2nd Ave, Seattle, WA 98101</p>
                            <h6 class="card-title">(315) 905-2321</h6>
                        </div>
                        <a href="javascript:void(0)" class="text-muted pb-30">
                            <span class="text-blue link-effect">open google map. </span></a>
                    </div>
                    <div class="card cards-effect bg-transparent border-0 pt-30 ">
                        <div class="text-center">
                            <img src="https://cdn-icons-png.flaticon.com/512/185/185326.png"
                                class="icon-lg icon-sm icon-xl">
                        </div>
                        <div class="card-body mt-15">
                            <h3 class="card-title">Paris</h3>
                            <p class="card-text">1301 2nd Ave, Seattle, WA 98101</p>
                            <h6 class="card-title">(315) 905-2321</h6>
                        </div>
                        <a href="javascript:void(0)" class="text-muted pb-30">
                            <span class="text-blue link-effect">open google map. </span></a>
                    </div>
                    <div class="card cards-effect bg-transparent border-0 pt-30 ">
                        <div class="text-center">
                            <img src="https://cdn-icons-png.flaticon.com/512/185/185326.png"
                                class="icon-lg icon-sm icon-xl">
                        </div>
                        <div class="card-body mt-15">
                            <h3 class="card-title">Paris</h3>
                            <p class="card-text">1301 2nd Ave, Seattle, WA 98101</p>
                            <h6 class="card-title">(315) 905-2321</h6>
                        </div>
                        <a href="javascript:void(0)" class="text-muted pb-30">
                            <span class="text-blue link-effect">open google map. </span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="pt-60 pb-30">
        <div class="container">
            <div class="card border-0">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-lg-7 text-center">
                            <h2>Need help? Talk to our expert.</h2>
                            <p>Talk to our experts or Browse through more properties.</p>
                        </div>
                        <div class="col-lg-5 text-center">
                            <a href=""></a>

                            {{-- <button type="button" class="btn btn-primary mobile" data-bs-toggle="offcanvas">
                                <span class="fa-solid fa-sliders text-white"></span> <b class="text-white">search</b>
                            </button>
                            <button type="button" class="btn btn-primary mobile" data-bs-toggle="offcanvas">
                                <span class="fa-solid fa-sliders text-white"></span> <b class="text-white">search</b>
                            </button> --}}

                            <button type="button" class="user-btn btn-yuudee btn-contact rounded-pill text-a " href="javascript:void(0)">
                                <i class="fa-solid fa-location-arrow"></i> <span>Contact Us</span>
                            </button>
                            <button type="button" class="user-btn btn-yuudee btn-contact rounded-pill text-a " href="Tel:0915453939">
                                <i class="fa-solid fa-phone"></i> <span>091-545-3939</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 
    <div class="scrollToHome" style="cursor: pointer;">
        <i class="fas fa-angle-up"></i>
    </div> --}}
@endsection
