

    @extends('layout.master')
    @section('content')

    <div class="wrapper ovh">
        <section class="p-0">
            <iframe class="home8-map contact-page" loading="lazy"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3874.180657387966!2d100.52433797576472!3d13.828188095519033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29bfbc0283e39%3A0x203d873e226cd556!2zTHV2IERyaXZlIENhciBSZW50IGwg4LmA4Lil4Li04LifIOC5hOC4lOC4o-C5jOC4nyDguITguLLguKPguYzguYDguKPguYnguJnguJfguYwg4Liq4Liz4LiZ4Lix4LiB4LiH4Liy4LiZ4LmD4Lir4LiN4LmI!5e0!3m2!1sth!2sth!4v1704780060715!5m2!1sth!2sth"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </section>

        {{-- ต้อง section ซ้อนกัน google map ถึงจะใช้งานได้ --}}
        <section>
            <div class="container">
                <div class="row d-flex align-items-end">
                    <div class="col-lg-5 position-relative justify-content: center                    ">
                        <div class="home8-contact-form default-box-shadow1 bdrs12 bdr1 p30 mb30-md bgc-white">
                            <h4 class="form-title mb25">Have questions? Get in touch!</h4>

                            {{-- <form action="{{ url('/contentstone') }}"  method="POST" class="needs-validation" novalidate> --}}
                            <form method="POST" class="needs-validation" novalidate>
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb20"><label class="heading-color ff-heading fw600 mb10">FirstName</label>
                                            <input type="text" class="form-control" placeholder="Your Name"  name="name" required>
                                            <div class="invalid-feedback">
                                                <a> กรุณากรอกชื่อ</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb20"><label class="heading-color ff-heading fw600 mb10">Last Name</label>
                                            <input type="text" class="form-control" placeholder="Your Name" name="lastname" required>
                                            <div class="invalid-feedback">
                                                <a> กรุณากรอกนามสุกล</a>
                                           </div>
    
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb20">
                                            <label class="heading-color ff-heading fw600 mb10">Email</label>
                                            <input type="text" class="form-control" placeholder="Your Name"name="email" required>
                                            <div class="invalid-feedback">
                                                <a> กรุณากรอก Email</a>
                                           </div>
                                        </div>
 
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb10">
                                            <label class="heading-color ff-heading fw600 mb10">Textarea</label>
                                            <textarea cols="30" rows="4" placeholder="There are many variations of passages." name="textarea" required></textarea>          
                                            <div class="invalid-feedback">
                                                <a> กรุณากรอก Textarea</a>
                                           </div>
                                        </div>                                        
                                    </div>

                                    @if(session('errorMessages'))
                                    <div class="my-2">
                                        <a style="color: red">{{ session('errorMessages') }}</a>
                                    </div>

                                     @endif
                                    <div class="col-md-12">
                                         <div class="d-grid">
                                            <button type="submit" class="ud-btn btn-thm">Submit</button>  
                                        </div>
                                    </div>
                                    
                                </div>
                            </form>
  
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-2 text-center">
                        <h2 class="mb30 text-capitalize text-center">We’d love to hear from you.</h2>
                        <p class="text">We are here to answer any question you may have. As a partner of corporates,
                            realton has more than 9,000 offices of all sizes and all potential of session.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bgc-f7 ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 m-auto aos-init aos-animate">
                        <div class="text-center">
                            <h2 class="title">Visit Our Office</h2>
                            <p class="paragraph">Realton has more than 9,000 offices of all sizes and all potential of
                                session.</p>
                        </div>
                    </div>
                </div>

                <div class="row aos-init aos-animate mt-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-sm-4">
                        <div class="iconbox-style8 text-center">
                            <div class="icon"><img src="https://cdn-icons-png.flaticon.com/512/185/185326.png"
                                    width="40%" height="50%">
                            </div>
                            <div class="iconbox-content">
                                <h4 class="title">Paris</h4>
                                <p class="text mb-1">1301 2nd Ave, Seattle, WA 98101</p>
                                <h6 class="mb10">(315) 905-2321</h6><a class="text-decoration-underline"
                                    href="#">Open Google Map</a>
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
                                <h6 class="mb10">(315) 905-2321</h6><a class="text-decoration-underline" href="#">Open Google Map</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="iconbox-style8 text-center">
                            <div class="icon"> 
                                <img src="https://cdn3.iconfinder.com/data/icons/famous-city-skyline/48/Sed-12-512.png" width="40%" height="50%">
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
        </section>
        <section class="our-cta pt0">
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
                                <a class="ud-btn btn-transparent mr30 mr0-xs" href="/conract" onclick="scrollToTop()"> Contact Us <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                <a class="ud-btn btn-dark Blondie" href="Tel:+66915453939">
                                    <span class="fa fa-phone vam pe-2"></span>091-545-3939</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="scrollToHome" style="cursor: pointer;">
        <i class="fas fa-angle-up"></i>
    </div>
@endsection




