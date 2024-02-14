@extends('layout.master')

@section('content')
        <div class="wrapper ovh">

            <div class="signup-modal">
                <div class="modal fade" id="loginSignupModal" tabindex="-1" aria-labelledby="loginSignupModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog  modal-dialog-scrollable modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalToggleLabel">Welcome to Realton</h5><button
                                    type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="log-reg-form">
                                    <div class="navtab-style2">
                                        <nav>
                                            <div class="nav nav-tabs mb-20" id="nav-tab" role="tablist">
                                                <button class="nav-link active fw600" id="nav-home-tab" data-bs-toggle="tab"data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Sign In</button>
                                                <button class="nav-link fw600" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">New Account</button>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent2">
                                            <div class="tab-step fade show active fontz15" id="nav-home" role="tabpanel"
                                                aria-labelledby="nav-home-tab">
                                                <form class="form-style1">
                                                    <div class="mb25"><label
                                                            class="form-label fw600 dark-color">Email</label><input
                                                            type="email" class="form-controls" placeholder="Enter Email"
                                                            required=""></div>
                                                    <div class="mb15"><label
                                                            class="form-label fw600 dark-color">Password</label><input
                                                            type="text" class="form-controls" placeholder="Enter Password"
                                                            required=""></div>
                                                    <div
                                                        class="checkbox-style1 d-block d-sm-flex align-items-center justify-content-between mb10">
                                                        <label class="custom_checkbox fz14 ff-heading">Remember
                                                            me<input type="checkbox" checked=""><span
                                                                class="checkmark"></span></label><a class="fz14 ff-heading"
                                                            href="#">Lost your
                                                            password?</a>
                                                    </div>
                                                    <div class="d-grid mb-20"><button class="user-btn btn-thm"
                                                            type="submit">Sign in <i
                                                                class="fal fa-arrow-right-long"></i></button></div>
                                                    <div class="hr_content mb-20">
                                                        <hr><span class="hr_top_text">OR</span>
                                                    </div>
                                                    <div class="d-grid mb10"><button class="user-btn btn-yuudee"
                                                            type="button"><i class="fab fa-google"></i> Continue
                                                            Google</button></div>
                                                    <div class="d-grid mb10"><button class="user-btn btn-fb" type="button"><i
                                                                class="fab fa-facebook-f"></i> Continue
                                                            Facebook</button></div>
                                                    <div class="d-grid mb-20"><button class="user-btn btn-apple"
                                                            type="button"><i class="fab fa-apple"></i> Continue
                                                            Apple</button></div>
                                                    <p class="dark-color text-center mb0 mt10">Not signed up? <a
                                                            class="dark-color fw600" href="/register">Create an
                                                            account.</a></p>
                                                </form>
                                            </div>
                                            <div class="tab-step fade fontz15" id="nav-profile" role="tabpanel"
                                                aria-labelledby="nav-profile-tab">
                                                <form class="form-style1">
                                                    <div class="mb25"><label
                                                            class="form-label fw600 dark-color">Email</label><input
                                                            type="email" class="form-controls" placeholder="Enter Email"
                                                            required=""></div>
                                                    <div class="mb-20"><label
                                                            class="form-label fw600 dark-color">Password</label><input
                                                            type="text" class="form-controls"
                                                            placeholder="Enter Password" required=""></div>
                                                    <div class="d-grid mb-20"><button class="user-btn btn-thm"
                                                            type="submit">Create account <i
                                                                class="fal fa-arrow-right-long"></i></button></div>
                                                    <div class="hr_content mb-20">
                                                        <hr><span class="hr_top_text">OR</span>
                                                    </div>
                                                    <div class="d-grid mb10"><button class="user-btn btn-yuudee"
                                                            type="button"><i class="fab fa-google"></i> Continue
                                                            Google</button></div>
                                                    <div class="d-grid mb10"><button class="user-btn btn-fb"
                                                            type="button"><i class="fab fa-facebook-f"></i> Continue
                                                            Facebook</button></div>
                                                    <div class="d-grid mb-20"><button class="user-btn btn-apple"
                                                            type="button"><i class="fab fa-apple"></i> Continue
                                                            Apple</button></div>
                                                    <p class="dark-color text-center mb0 mt10">Already Have an Account?
                                                        <a class="dark-color fw600" href="/login">Login</a>
                                                    </p>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="offcanvas offcanvas-end" tabindex="-1" id="SidebarPanel" aria-labelledby="SidebarPanelLabel"><div class="rightside-hidden-bar"><div class="hsidebar-header"><div class="sidebar-close-icon" data-bs-dismiss="offcanvas" aria-label="Close"><span class="far fa-times"></span></div><h4 class="title">Welcome to Realton</h4></div><div class="hsidebar-content"><div class="hiddenbar_navbar_content"><div class="hiddenbar_navbar_menu"><ul class="navbar-nav"><li class="nav-item"><a class="nav-link" href="#" role="button">Apartments</a></li><li class="nav-item"><a class="nav-link" href="#" role="button">Bungalow</a></li><li class="nav-item"><a class="nav-link" href="#" role="button">Houses</a></li><li class="nav-item"><a class="nav-link" href="#" role="button">Loft</a></li><li class="nav-item"><a class="nav-link" href="#" role="button">Office</a></li><li class="nav-item"><a class="nav-link" href="#" role="button">Townhome</a></li><li class="nav-item"><a class="nav-link" href="#" role="button">Villa</a></li></ul></div><div class="hiddenbar_footer position-relative bdrt1"><div class="row pt45 pb30 pl30"><div class="col-auto"><div class="contact-info"><p class="info-title dark-color">Total Free Customer Care</p><h6 class="info-phone dark-color"><a href="tel:+012305094502">+(0) 123 050 945 02</a></h6></div></div><div class="col-auto"><div class="contact-info"><p class="info-title dark-color">Need Live Support?</p><h6 class="info-mail dark-color"><a href="mailto:hi@homez.com">hi@homez.com</a></h6></div></div></div><div class="row pt30 pb30 bdrt1"><div class="col-auto"><div class="social-style-sidebar d-flex align-items-center pl30"><h6 class="me-4 mb-0">Follow us</h6><a class="me-3" href="#"><i class="fab fa-facebook-f"></i></a><a class="me-3" href="#"><i class="fab fa-twitter"></i></a><a class="me-3" href="#"><i class="fab fa-instagram"></i></a><a class="me-3" href="#"><i class="fab fa-linkedin-in"></i></a></div></div></div></div></div></div></div></div> --}}
            
            @include('home.banner')

            {{-- @include('home.boxCity')

            @include('home.boxForSales')
            
            @include('home.boxForYou') --}}



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
            <section class="md-pb-30">
                <div class="container">
                    <div class="row  justify-content-between align-items-center">
                        <div class="col-auto">
                            <div class="main-title aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                                <h2 class="title">Explore Apartment Types</h2>
                                <p class="paragraphs">Aliquam lacinia diam quis lacus euismod</p>
                            </div>
                        </div>
                        <div class="col-auto mb30">
                            {{-- <div class="row align-items-center justify-content-center">
                                <div class="col-auto"><button
                                        class="apartment-type2-prev__active swiper_button swiper-button-disabled"
                                        disabled=""><i
                                            class="fa-solid fa-arrow-right-long fa-rotate-180"></i></i></button></div>
                                <div class="col-auto">
                                    <div
                                        class="pagination swiper--pagination apartment-type2_pagination__active swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                                        <span
                                            class="swiper-pagination-bullet swiper-pagination-bullet-active">
                                        </span>
                                            <span class="swiper-pagination-bullet"></span>
                                            <span class="swiper-pagination-bullet"></span>
                                    </div>
                                </div>
                                <div class="col-auto"><button class="apartment-type2-next__active swiper_button"
                                        fdprocessedid="fubmwm"><i
                                            class="fa-solid fa-arrow-right-long"></i></i></button>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                            <div class="pro-city-slider">
                                <div
                                    class="swiper swiper-initialized swiper-horizontal swiper-pointer swiper-backface-hidden">
                                    <div class="swiper-wrapper">
                                        {{-- style="transform: translate3d(0px, 0px, 0px);" --}}
                                        <div class="swiper-slide swiper-slide-active"
                                            style="width: 229.2px; margin-right: 15px;">
                                            <div class="item"><a href="/map-v1">
                                                    <div class="apartment-style1">
                                                        <div class="apartment-img"><img class="w-100 cover"
                                                                src="https://img5.pic.in.th/file/secure-sv1/as-1.jpeg"
                                                                alt="apartment city"></div>
                                                        <div class="apartment-content">
                                                            <h6 class="title mb-0">House</h6>
                                                            <p class="text mb-0">22 Properties</p>
                                                        </div>
                                                    </div>
                                                </a></div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-next"
                                            style="width: 229.2px; margin-right: 15px;">
                                            <div class="item"><a href="/map-v1">
                                                    <div class="apartment-style1">
                                                        <div class="apartment-img"><img class="w-100 cover"
                                                                src="https://img5.pic.in.th/file/secure-sv1/as-2.jpeg"
                                                                alt="apartment city"></div>
                                                        <div class="apartment-content">
                                                            <h6 class="title mb-0">Apartments</h6>
                                                            <p class="text mb-0">22 Properties</p>
                                                        </div>
                                                    </div>
                                                </a></div>
                                        </div>
                                        <div class="swiper-slide" style="width: 229.2px; margin-right: 15px;">
                                            <div class="item"><a href="/map-v1">
                                                    <div class="apartment-style1">
                                                        <div class="apartment-img"><img class="w-100 cover"
                                                                src="https://img5.pic.in.th/file/secure-sv1/as-3.jpeg"
                                                                alt="apartment city"></div>
                                                        <div class="apartment-content">
                                                            <h6 class="title mb-0">Office</h6>
                                                            <p class="text mb-0">22 Properties</p>
                                                        </div>
                                                    </div>
                                                </a></div>
                                        </div>
                                        <div class="swiper-slide" style="width: 229.2px; margin-right: 15px;">
                                            <div class="item"><a href="/map-v1">
                                                    <div class="apartment-style1">
                                                        <div class="apartment-img"><img class="w-100 cover"
                                                                src="https://img2.pic.in.th/pic/as-4.jpeg"
                                                                alt="as-4.jpeg" alt="apartment city"></div>
                                                        <div class="apartment-content">
                                                            <h6 class="title mb-0">Villa</h6>
                                                            <p class="text mb-0">22 Properties</p>
                                                        </div>
                                                    </div>
                                                </a></div>
                                        </div>
                                        <div class="swiper-slide" style="width: 229.2px; margin-right: 15px;">
                                            <div class="item"><a href="/map-v1">
                                                    <div class="apartment-style1">
                                                        <div class="apartment-img"><img class="w-100 cover"
                                                                src="https://img5.pic.in.th/file/secure-sv1/as-5.jpeg"
                                                                alt="apartment city"></div>
                                                        <div class="apartment-content">
                                                            <h6 class="title mb-0">House</h6>
                                                            <p class="text mb-0">22 Properties</p>
                                                        </div>
                                                    </div>
                                                </a></div>
                                        </div>
                                        <div class="swiper-slide" style="width: 229.2px; margin-right: 15px;">
                                            <div class="item"><a href="/map-v1">
                                                    <div class="apartment-style1">
                                                        <div class="apartment-img"><img class="w-100 cover"
                                                                src="https://img5.pic.in.th/file/secure-sv1/as-2.jpeg"
                                                                alt="apartment city"></div>
                                                        <div class="apartment-content">
                                                            <h6 class="title mb-0">Apartments</h6>
                                                            <p class="text mb-0">22 Properties</p>
                                                        </div>
                                                    </div>
                                                </a></div>
                                        </div>
                                        <div class="swiper-slide" style="width: 229.2px; margin-right: 15px;">
                                            <div class="item"><a href="/map-v1">
                                                    <div class="apartment-style1">
                                                        <div class="apartment-img"><img class="w-100 cover"
                                                                src="https://img5.pic.in.th/file/secure-sv1/as-3.jpeg"
                                                                alt="apartment city"></div>
                                                        <div class="apartment-content">
                                                            <h6 class="title mb-0">Office</h6>
                                                            <p class="text mb-0">22 Properties</p>
                                                        </div>
                                                    </div>
                                                </a></div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-active"
                                            style="width: 229.2px; margin-right: 15px;">
                                            <div class="item"><a href="/map-v1">
                                                    <div class="apartment-style1">
                                                        <div class="apartment-img"><img class="w-100 cover"
                                                                src="https://img5.pic.in.th/file/secure-sv1/as-1.jpeg"
                                                                alt="apartment city"></div>
                                                        <div class="apartment-content">
                                                            <h6 class="title mb-0">House</h6>
                                                            <p class="text mb-0">22 Properties</p>
                                                        </div>
                                                    </div>
                                                </a></div>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
           
            <section class="mb0-md md-pb-30">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 m-auto aos-init">
                            <div class="main-title text-al text-md-center">
                                <h2 class="title">From Our Blog</h2>
                                <p class="paragraphs">Aliquam lacinia diam quis lacus euismod</p>
                            </div>
                        </div>
                    </div>
                    <div class="row aos-init"data-aos-delay="300">
                        <div class="col-sm-6 col-lg-4">
                            <div class="blog-style1">
                                <div class="blog-img"><img class="w-100 cover" src="/image/blog-1.jpg"
                                        alt="blog"></div>
                                <div class="blog-content">
                                    <div class="date"><span class="month">July</span><span class="day">28</span>
                                    </div><a class="tag" href="#">Living
                                        Room</a>
                                    <h6 class="title mt-1"><a href="/blogs/1">Private Contemporary Home Balancing
                                            Openness</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="blog-style1">
                                <div class="blog-img"><img class="w-100 cover" src="/image/blog-2.jpg"
                                        alt="blog"></div>
                                <div class="blog-content">
                                    <div class="date"><span class="month">July</span><span class="day">28</span>
                                    </div><a class="tag" href="#">Living
                                        Room</a>
                                    <h6 class="title mt-1"><a href="/blogs/2">Contemporary Home Private Balancing
                                            Openness</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="blog-style1">
                                <div class="blog-img"><img class="w-100
                                     cover"
                                        src="/image/blog-3.jpg" alt="blog"></div>
                                <div class="blog-content">
                                    <div class="date"><span class="month">July</span><span class="day">28</span>
                                    </div><a class="tag" href="#">Living
                                        Room</a>
                                    <h6 class="title mt-1"><a href="/blogs/3">Balancing Private Contemporary Home
                                            Openness</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- test2 --}}
            <section class="mb0-md md-pb-30">
                <div class="backg-container py-5">
                    <div class="container">

                        <div class="row">
                            <div class="col-lg-12 m-auto aos-init">
                                <div class="main-title text-al text-md-center">
                                    <h2 class="title">We have the most listings and constant updates.</h2>
                                    <h2 class="title">So you’ll never miss out.</h2>
                                    {{-- <p class="paragraphs">Aliquam lacinia diam quis lacus euismod</p> --}}
                                </div>
                            </div>
                        </div>

                        <div class="row mt-8">
                            <div class="col-lg-4 mb-6 mb-lg-0">
                                <div
                                    class="card border-hover shadow-2 shadow-hover-lg-1 pl-5 pr-6 py-6 h-100 hover-change-image">
                                    <div class="row no-gutters">
                                        <div class="col-sm-3">
                                            <img src="https://img5.pic.in.th/file/secure-sv1/group-16.png"
                                                alt="Buy a new home">
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="card-body p-0 pl-0 pl-sm-5 pt-5 pt-sm-0">
                                                <a href="single-property-1.html"
                                                    class="d-flex align-items-center text-dark hover-secondary">
                                                    <h4 class="fs-20 lh-1625 mb-1">Buy a new home </h4>
                                                    {{-- <span class="ml-2 text-primary fs-42 lh-1 hover-image d-inline-flex align-items-center">
                                        <svg class="icon icon-long-arrow"><use xlink:href="#icon-long-arrow"></use></svg>
                                        </span> --}}
                                                </a>
                                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                    sed do eiusmod tempor</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-6 mb-lg-0">
                                <div
                                    class="card border-hover shadow-2 shadow-hover-lg-1 pl-5 pr-6 py-6 h-100 hover-change-image">
                                    <div class="row no-gutters">
                                        <div class="col-sm-3">
                                            <img src="https://img2.pic.in.th/pic/group-17.png" alt="Sell a home">
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="card-body p-0 pl-0 pl-sm-5 pt-5 pt-sm-0">
                                                <a href="single-property-1.html"
                                                    class="d-flex align-items-center text-dark hover-secondary">
                                                    <h4 class="fs-20 lh-1625 mb-1">Sell a home </h4>
                                                    {{-- <span class="ml-2 text-primary fs-42 lh-1 hover-image d-inline-flex align-items-center">
                                    <svg class="icon icon-long-arrow"><use xlink:href="#icon-long-arrow"></use></svg>
                                    </span> --}}
                                                </a>
                                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                    sed do eiusmod tempor</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-6 mb-lg-0">
                                <div
                                    class="card border-hover shadow-2 shadow-hover-lg-1 pl-5 pr-6 py-6 h-100 hover-change-image">
                                    <div class="row no-gutters">
                                        <div class="col-sm-3">
                                            <img src="https://img2.pic.in.th/pic/group-21.png" alt="Rent a home">
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="card-body p-0 pl-0 pl-sm-5 pt-5 pt-sm-0">
                                                <a href="single-property-1.html"
                                                    class="d-flex align-items-center text-dark hover-secondary">
                                                    <h4 class="fs-20 lh-1625 mb-1">Rent a home </h4>
                                                    {{-- <span class="ml-2 text-primary fs-42 lh-1 hover-image d-inline-flex align-items-center">
                                    <svg class="icon icon-long-arrow"><use xlink:href="#icon-long-arrow"></use></svg>
                                    </span> --}}
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
                    {{-- </div> --}}
            </section>

            <section class="p50 our-partners p-0">
                <div class="container">
                    <div class="row">
                        {{-- <div class="col-lg-12 aos-init" data-aos="fade-up"> --}}
                        <div class="col-lg-12 aos-init">
                            <div class="main-title text-center">
                                <h6>Trusted by the world’s best</h6>
                            </div>
                        </div>
                        <div class="col-lg-12 my-5 text-center">
                            {{-- <div class="dots_none nav_none aos-init" data-aos="fade-up" data-aos-delay="100"> --}}
                            <div class="dots_none nav_none aos-init dots_pad" data-aos-delay="100">
                                <div
                                    class="swiperes swiper-container swiper-initialized swiper-horizontal swiper-pointer">
                                    <div class="swiper-wrapper"
                                        style="transform: translate3d(-1418.67px, 0px, 0px); transition-duration: 0ms;">
                                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev"
                                            data-swiper-slide-index="0" style="width: 192.667px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="partner_item"><img class="wa m-auto"
                                                        src="https://img5.pic.in.th/file/secure-sv1/1d103a8fac559d769.png"
                                                        alt="1.png" style="object-fit: contain;"></div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                                            data-swiper-slide-index="1" style="width: 192.667px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="partner_item"><img class="wa m-auto"
                                                        src="https://img2.pic.in.th/pic/25430ad9431a64e27.png"
                                                        alt="2.png" style="object-fit: contain;"></div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next"
                                            data-swiper-slide-index="2" style="width: 192.667px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="partner_item"><img class="wa m-auto"
                                                        src="https://img2.pic.in.th/pic/30029e1ffa8c98d85.png"
                                                        alt="3.png" style="object-fit: contain;"></div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3"
                                            style="width: 192.667px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="partner_item"><img class="wa m-auto"
                                                        src="https://img2.pic.in.th/pic/45f348a5ff73a77c0.png"
                                                        alt="4.png" style="object-fit: contain;"></div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4"
                                            style="width: 192.667px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="partner_item"><img class="wa m-auto"
                                                        src="https://img2.pic.in.th/pic/5ce9191072b8019e8.png"
                                                        alt="5.png" style="object-fit: contain;"></div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="5"
                                            style="width: 192.667px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="partner_item"><img class="wa m-auto"
                                                        src="https://img2.pic.in.th/pic/6c0bf68a04460d508.png"
                                                        alt="6.png" style="object-fit: contain;"></div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="0"
                                            style="width: 192.667px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="partner_item"><img class="wa m-auto"
                                                        src="https://img5.pic.in.th/file/secure-sv1/1d103a8fac559d769.png"
                                                        alt="1.png" style="object-fit: contain;"></div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="1"
                                            style="width: 192.667px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="partner_item"><img class="wa m-auto"
                                                        src="https://img2.pic.in.th/pic/25430ad9431a64e27.png"
                                                        alt="2.png" style="object-fit: contain;"></div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="2"
                                            style="width: 192.667px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="partner_item"><img class="wa m-auto"
                                                        src="https://img2.pic.in.th/pic/30029e1ffa8c98d85.png"
                                                        alt="3.png" style="object-fit: contain;"></div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" data-swiper-slide-index="3"
                                            style="width: 192.667px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="partner_item"><img class="wa m-auto"
                                                        src="https://img2.pic.in.th/pic/45f348a5ff73a77c0.png"
                                                        alt="4.png" style="object-fit: contain;"></div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" data-swiper-slide-index="4"
                                            style="width: 192.667px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="partner_item"><img class="wa m-auto"
                                                        src="https://img2.pic.in.th/pic/5ce9191072b8019e8.png"
                                                        alt="5.png" style="object-fit: contain;"></div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" data-swiper-slide-index="5"
                                            style="width: 192.667px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="partner_item"><img class="wa m-auto"
                                                        src="https://img2.pic.in.th/pic/6c0bf68a04460d508.png"
                                                        alt="6.png" style="object-fit: contain;"></div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev"
                                            data-swiper-slide-index="0" style="width: 192.667px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="partner_item"><img class="wa m-auto"
                                                        src="https://img5.pic.in.th/file/secure-sv1/1d103a8fac559d769.png"
                                                        alt="1.png" style="object-fit: contain;"></div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                                            data-swiper-slide-index="1" style="width: 192.667px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="partner_item"><img class="wa m-auto"
                                                        src="https://img2.pic.in.th/pic/25430ad9431a64e27.png"
                                                        alt="2.png" style="object-fit: contain;"></div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next"
                                            data-swiper-slide-index="2" style="width: 192.667px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="partner_item"><img class="wa m-auto"
                                                        src="https://img2.pic.in.th/pic/30029e1ffa8c98d85.png"
                                                        alt="3.png" style="object-fit: contain;"></div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3"
                                            style="width: 192.667px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="partner_item"><img class="wa m-auto"
                                                        src="https://img2.pic.in.th/pic/45f348a5ff73a77c0.png"
                                                        alt="4.png" style="object-fit: contain;"></div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4"
                                            style="width: 192.667px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="partner_item"><img class="wa m-auto"
                                                        src="https://img2.pic.in.th/pic/5ce9191072b8019e8.png"
                                                        alt="5.png" style="object-fit: contain;"></div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="5"
                                            style="width: 192.667px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="partner_item"><img class="wa m-auto"
                                                        src="https://img2.pic.in.th/pic/6c0bf68a04460d508.png"
                                                        alt="6.png" style="object-fit: contain;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
@endsection
