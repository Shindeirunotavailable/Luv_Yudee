@extends('layout.master')
@section('content')
    <section class="p-0">
        <iframe class="content-map home8-map contact-page" loading="lazy"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3874.180657387966!2d100.52433797576472!3d13.828188095519033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29bfbc0283e39%3A0x203d873e226cd556!2zTHV2IERyaXZlIENhciBSZW50IGwg4LmA4Lil4Li04LifIOC5hOC4lOC4o-C5jOC4nyDguITguLLguKPguYzguYDguKPguYnguJnguJfguYwg4Liq4Liz4LiZ4Lix4LiB4LiH4Liy4LiZ4LmD4Lir4LiN4LmI!5e0!3m2!1sth!2sth!4v1704780060715!5m2!1sth!2sth"
            width="600" height="550" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </section>

    <section class="section-120">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <div class="card cardBox">
                        <div class="card-body ">
                            <div class="pb-10 pt-10">
                                <h4>Have questions? Get in touch!</h4>
                            </div>
                            {{-- <form action="{{ url('/contentstone') }}"  method="POST" class="needs-validation" novalidate> --}}
                            <form method="POST" class="needs-validation" novalidate>
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="label-700">First Name</label>
                                    <input type="text" name="firstName" id="firstName" class="form-control "
                                        id="exampleInputEmail1" placeholder="Enter Username" required>
                                    <div class="invalid-feedback">
                                        <a> กรุณากรอก First Name</a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="label-700">Last Name</label>
                                    <input type="text" name="lastName" id="lastName" class="form-control "
                                        id="exampleInputEmail1" placeholder="Enter Username" required>
                                    <div class="invalid-feedback">
                                        <a> กรุณากรอก Last Name</a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="label-700">Email</label>
                                    <input type="Email" name="contactEmail" id="contactEmail" class="form-control "
                                        id="exampleInputEmail1" placeholder="Enter Username" required>
                                    <div class="invalid-feedback">
                                        <a> กรุณากรอก Email</a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="label-700">Textarea</label>
                                    <textarea cols="30" rows="4" placeholder="There are many variations of passages." name="textarea" required></textarea>
                                    <div class="invalid-feedback">
                                        <a> กรุณากรอก Textarea</a>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block afterButton"
                                    id="submitModalBtn"> Submit
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

    <section class="background-grey pt-30">
        <div class="container">
            <div class="row mb-20">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2>Visit Our Office</h2>
                        <p>Realton has more than 9,000 offices of all sizes and all potential of session.</p>
                    </div>
                </div>
            </div>
            <div class="card-deck text-center pt-40 pb-30 ">
                <div class="card cards-effect background-transparent pt-30 cardBox">
                    <div class="text-center">
                        <img src="https://cdn-icons-png.flaticon.com/512/185/185326.png" class="rounded-circle icon-lg icon-sm icom-xl">
                    </div>
                    <div class="card-body mt-15">
                        <h3 class="card-title">Paris</h3>
                        <p class="card-text">1301 2nd Ave, Seattle, WA 98101</p>
                        <h6 class="card-title">(315) 905-2321</h6>
                    </div>
                    <a href="javascript:void(0)" class="text-muted pb-30">
                        <span class="colorBlue">open google map. </span></a>
                </div>
                <div class="card cards-effect background-transparent pt-30 cardBox">
                    <div class="text-center">
                        <img src="https://cdn-icons-png.flaticon.com/512/185/185326.png" class="rounded-circle icon-lg icon-sm icom-xl">
                    </div>
                    <div class="card-body mt-15">
                        <h3 class="card-title">Paris</h3>
                        <p class="card-text">1301 2nd Ave, Seattle, WA 98101</p>
                        <h6 class="card-title">(315) 905-2321</h6>
                    </div>
                    <a href="javascript:void(0)" class="text-muted pb-30">
                        <span class="colorBlue ">open google map. </span></a>
                </div>
                <div class="card cards-effect background-transparent pt-30 cardBox">
                    <div class="text-center">
                        <img src="https://cdn-icons-png.flaticon.com/512/185/185326.png" class="rounded-circle icon-lg icon-sm icom-xl">
                    </div>
                    <div class="card-body mt-15">
                        <h3 class="card-title">Paris</h3>
                        <p class="card-text">1301 2nd Ave, Seattle, WA 98101</p>
                        <h6 class="card-title">(315) 905-2321</h6>
                    </div>
                    <a href="javascript:void(0)" class="text-muted pb-30">
                        <span class="colorBlue">open google map. </span></a>
                </div>
            </div>
        </div>
    </section>


    {{-- <section class="background-BoxIcon">
        <div class="container">
            <div class="row mb-20">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2>Visit Our Office</h2>
                        <p>Realton has more than 9,000 offices of all sizes and all potential of session.</p>
                    </div>
                </div>
            </div>

            <div class="row mt-3" data-aos="fade-up" data-aos-delay="100">
                <div class="col-sm-4">
                    <div class="iconbox-style8 text-center">
                        <div class="icon">
                            <img src="https://cdn-icons-png.flaticon.com/512/185/185326.png" width="40%" height="50%">
                        </div>
                        <div class="iconbox-content">
                            <h4 class="title">Paris</h4>
                            <p class="text mb-1">1301 2nd Ave, Seattle, WA 98101</p>
                            <h6 class="mb10">(315) 905-2321</h6><a class="text-decoration-underline" href="#">Open
                                Google Map</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="iconbox-style8 text-center">
                        <div class="icon">
                            <img src="https://static.thenounproject.com/png/164722-200.png" width="40%" height="50%">
                        </div>
                        <div class="iconbox-content">
                            <h4 class="title">London</h4>
                            <p class="text mb-1">1301 2nd Ave, Seattle, WA 98101</p>
                            <h6 class="mb10">(315) 905-2321</h6><a class="text-decoration-underline" href="#">Open
                                Google Map</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="iconbox-style8 text-center">
                        <div class="icon">
                            <img src="https://cdn3.iconfinder.com/data/icons/famous-city-skyline/48/Sed-12-512.png"
                                width="40%" height="50%">
                        </div>
                        <div class="iconbox-content">
                            <h4 class="title">New York</h4>
                            <p class="text mb-1">1301 2nd Ave, Seattle, WA 98101</p>
                            <h6 class="mb10">(315) 905-2321</h6>
                            <a class="text-decoration-underline" href="#">Open Google Map</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section class="our-cta pt0">
        <div class="cta-banner mx-auto maxw1600 pt120 pt60-md pb120 pb60-md bdrs12 position-relative mx20-lg mt-3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-xl-6 aos-init aos-animate" data-aos="fade-right">
                        <div class="cta-style1">
                            <h2 class="cta-title">Need help? Talk to our expert.</h2>
                            <p class="cta-text mb-0">Talk to our experts or Browse through more properties.</p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-xl-6 aos-init aos-animate" data-aos="fade-left">
                        <div class="cta-btns-style1 d-block d-sm-flex align-items-center justify-content-lg-end">
                            <a class="ud-btn btn-transparent mr30 mr0-xs" href="/conract" onclick="scrollToTop()">
                                Contact Us <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                            <a class="ud-btn btn-dark Blondie" href="Tel:+66915453939">
                                <span class="fa fa-phone vam pe-2"></span>091-545-3939</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    {{-- 
    <div class="scrollToHome" style="cursor: pointer;">
        <i class="fas fa-angle-up"></i>
    </div> --}}
@endsection
