@extends('layout.master')

@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="hero container-fluid">
                    <div class="container">
                        <h1 class="hero-text">Easy Way to Find a <br>
                            Perfect Property</h1>
                        <p class="fz15">From as low as $10 per day with limited time offer discounts</p>
                        <div class="advance-search">
                            <ul class="nav nav-tabs p-0 m-0">
                                <li class="nav-item">
                                    <button class="nav-link" fdprocessedid="cafxtb">Buy</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" fdprocessedid="cafxtb">Rent</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" fdprocessedid="cafxtb">Sold</button>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <form class="form">
                                    <div class="row">
                                        <label for="search">
                                            <input required="" autocomplete="off" placeholder="search your chats"
                                                id="search" type="text">
                                            <div class="icon">
                                                <svg stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg" class="swap-on">
                                                    <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                                                        stroke-linejoin="round" stroke-linecap="round"></path>
                                                </svg>
                                                <svg stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg" class="swap-off">
                                                    <path d="M10 19l-7-7m0 0l7-7m-7 7h18" stroke-linejoin="round"
                                                        stroke-linecap="round"></path>
                                                </svg>
                                            </div>
                                            <button type="reset" class="close-btn">
                                                <svg viewBox="0 0 20 20" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg">
                                                    <path clip-rule="evenodd"
                                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                        fill-rule="evenodd"></path>
                                                </svg>
                                            </button>
                                        </label>
                                    </div>
                                </form>
                                <a href="#" class="adv-button">Addvance</a>
                                <button class="button">
                                    <span>
                                        <svg viewBox="0 0 24 24" height="24" width="24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.145 18.29c-5.042 0-9.145-4.102-9.145-9.145s4.103-9.145 9.145-9.145 9.145 4.103 9.145 9.145-4.102 9.145-9.145 9.145zm0-15.167c-3.321 0-6.022 2.702-6.022 6.022s2.702 6.022 6.022 6.022 6.023-2.702 6.023-6.022-2.702-6.022-6.023-6.022zm9.263 12.443c-.817 1.176-1.852 2.188-3.046 2.981l5.452 5.453 3.014-3.013-5.42-5.421z">
                                            </path>
                                        </svg>
                                    </span>
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="main-title2">
                                <h2 class="title">Properties by Cities</h2>
                                <p>Aliquam lacinia diam quis lacus euismod</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="text-start text-lg-end mb-3">
                                <a class="ud-btn2" href="#">
                                    See All Cities
                                    <i class="fal fa-arrow-right-long"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="container-ac">
                        <div class="col-lg-12">
                            <div id="arrow-left" class="arrow"></div>
                            <div id="arrow-right" class="arrow"></div>
                            <div class="button-container">
                                <div class="custom-tab slide " data-toggle="tab" href="#kt_tab_pane">
                                    <img src="{{ URL('image/properties-grid-03.jpg') }}" alt="">
                                </div>
                                <div class="custom-tab slide" data-toggle="tab" href="#kt_tab_pane">
                                    img2
                                </div>
                                <div class="custom-tab slide" data-toggle="tab" href="#kt_tab_pane">
                                    img3
                                </div>
                                <div class="custom-tab slide" data-toggle="tab" href="#kt_tab_pane">
                                    img4
                                </div>
                                <div class="custom-tab slide" data-toggle="tab" href="#kt_tab_pane">
                                    img5
                                </div>
                                <div class="custom-tab slide" data-toggle="tab" href="#kt_tab_pane">
                                    img6
                                </div>
                                <div class="custom-tab slide" data-toggle="tab" href="#kt_tab_pane">
                                    img7
                                </div>
                                <div class="custom-tab slide" data-toggle="tab" href="#kt_tab_pane">
                                    img8
                                </div>
                                <div class="custom-tab slide" data-toggle="tab" href="#kt_tab_pane">
                                    img9
                                </div>
                                <div class="custom-tab slide" data-toggle="tab" href="#kt_tab_pane">
                                    img10
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>

            {{-- ------------------------------------------------- --}}
            <div
                class="cta-banner3 bgc-thm-light mx-auto maxw1600 pt100 pt60-lg pb90 pb60-lg bdrs24 position-relative overflow-hidden mx20-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-5 pl30-md pl15-xs aos-init aos-animate" data-aos="fade-left"
                            data-aos-delay="300">
                            <div class="mb30">
                                <h2 class="title text-capitalize">Let’s find the right <br class="d-none d-md-block">
                                    selling option for you</h2>
                            </div>
                            <div class="why-chose-list style2">
                                <div class="list-one d-flex align-items-start mb30"><span
                                        class="list-icon flex-shrink-0 flaticon-security"></span>
                                    <div class="list-content flex-grow-1 ml20">
                                        <h6 class="mb-1">Property Management</h6>
                                        <p class="text mb-0 fz15">Nullam sollicitudin blandit eros eu pretium. Nullam
                                            maximus ultricies auctor.</p>
                                    </div>
                                </div>
                                <div class="list-one d-flex align-items-start mb30"><span
                                        class="list-icon flex-shrink-0 flaticon-keywording"></span>
                                    <div class="list-content flex-grow-1 ml20">
                                        <h6 class="mb-1">Mortgage Services</h6>
                                        <p class="text mb-0 fz15">Nullam sollicitudin blandit eros eu pretium. Nullam
                                            maximus ultricies auctor.</p>
                                    </div>
                                </div>
                                <div class="list-one d-flex align-items-start mb30"><span
                                        class="list-icon flex-shrink-0 flaticon-investment"></span>
                                    <div class="list-content flex-grow-1 ml20">
                                        <h6 class="mb-1">Currency Services</h6>
                                        <p class="text mb-0 fz15">Nullam sollicitudin blandit eros eu pretium. Nullam
                                            maximus ultricies auctor.</p>
                                    </div>
                                </div>
                            </div><a class="ud-btn btn-dark" href="#">Learn More<i
                                    class="fal fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- ------------------------------------------------- --}}

        </div>
    </div>
    <script>
        let sliderImages = document.querySelectorAll(".slide"),
            arrowLeft = document.querySelector("#arrow-left"),
            arrowRight = document.querySelector("#arrow-right"),
            current = 0;

        // Clear all images
        function reset() {
            for (let i = 0; i < sliderImages.length; i++) {
                sliderImages[i].style.display = "none";
            }
        }

        // Initial slide
        function startSlide() {
            reset();
            for (let i = 0; i < 4; i++) {
                sliderImages[i].style.display = "block";
            }
        }

        // Show previous 3 buttons
        function slideLeft() {
            reset();
            current -= 4;
            if (current < 0) {
                current = sliderImages.length - 4;
            }
            for (let i = current; i < current + 4; i++) {
                sliderImages[i].style.display = "block";
            }
        }

        // Show next 3 buttons
        function slideRight() {
            reset();
            current += 4;
            if (current >= sliderImages.length) {
                current = 0;
            }
            for (let i = current; i < current + 4; i++) {
                if (i < sliderImages.length) {
                    sliderImages[i].style.display = "block";
                }
            }
        }

        // Left arrow click
        arrowLeft.addEventListener("click", function() {
            slideLeft();
        });

        // Right arrow click
        arrowRight.addEventListener("click", function() {
            slideRight();
        });

        startSlide();

        const buttons = document.querySelectorAll(".custom-tab");

        // ฟังก์ชันที่จะเรียกเมื่อคลิกปุ่ม
        function buttonClick(event) {
            // ล้างคลาส "active" จากปุ่มทั้งหมด
            buttons.forEach(button => button.classList.remove("active"));

            // เพิ่มคลาส "active" เฉพาะปุ่มที่คลิก
            event.target.classList.add("active");
        }

        // เพิ่ม event listener ให้กับทุกปุ่ม
        buttons.forEach(button => button.addEventListener("click", buttonClick));
    </script>
@endsection
