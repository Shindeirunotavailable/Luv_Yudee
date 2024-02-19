@extends('layout.master')
@section('content')
    </div>
    <main>
        <section class="section-pp">
            <div class="container-pp-fluid">
                <div class="position-relative zoomIn ">

                    <div class="position-absolute pos-fixed-top-right z-index-2">
                        <ul class="list-inline pt-4 pr-5">

                            <li class="list-inline-item mr-2">
                                <a href="#" data-toggle="tooltip" title=""
                                    class="d-flex align-items-center justify-content-center tooltip-icon bg-white text-heading bg-hover-primary hover-white rounded-circle"
                                    data-original-title="Favourite">
                                    <i class="fa-solid fa-heart"></i>
                                </a>
                            </li>

                            <li class="list-inline-item mr-2">
                                <button {{-- เอา btn-white หลัง btn ออก --}}
                                    class="btn-1 btn-white-1 p-0 d-flex align-items-center justify-content-center tooltip-icon text-heading bg-hover-primary hover-white rounded-circle border-0 shadow-none"
                                    type="button" data-placement="top" data-toggle="popover" data-container="body"
                                    data-content='
                                        <ul class="list-inline mb-0 fs-22">
                                            <li class="list-inline-item">
                                                <i class="fab fa-twitter"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="fab fa-facebook"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="fa-brands fa-instagram"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="fa-brands fa-youtube"></i>
                                            </li>
                                        </ul>'
                                    data-html="true" data-original-title="" title="">
                                    <i class="fa-solid fa-share-nodes"></i>
                                </button>
                            </li>


                            <li class="list-inline-item">
                                <a href="#" data-toggle="tooltip" title=""
                                    class="d-flex align-items-center justify-content-center tooltip-icon bg-white text-heading bg-hover-primary hover-white rounded-circle"
                                    data-original-title="Print">
                                    <i class="fa-solid fa-print"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container-pp-fluid">
                <div class="row galleries m-n1 py-2">
                    <div class="col-lg-6 p-1 ">
                        <div class="item item-size-4-3">
                            <div class="card p-0 hover-zoom-in">
                                <a href="{{ asset('/assets/images/property-1.jpg') }}" class="card-img-pp"
                                    data-gtf-mfp="true" data-gallery-id="01">
                                    <img src="{{ asset('/assets/images/property-1.jpg') }}">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 p-1 ">
                        <div class="row m-n1">
                            <div class="col-md-6 p-1 ">
                                <div class="item item-size-4-3">
                                    <div class="card p-0 hover-zoom-in">
                                        <a href="{{ asset('/assets/images/property-2.jpg') }}" class="card-img-pp"
                                            data-gtf-mfp="true" data-gallery-id="01">
                                            <img src="{{ asset('/assets/images/property-2.jpg') }}">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 p-1">
                                <div class="item item-size-4-3">
                                    <div class="card p-0 hover-zoom-in">
                                        <a href="{{ asset('/assets/images/property-3.jpg') }}" class="card-img-pp"
                                            data-gtf-mfp="true" data-gallery-id="01">
                                            <img src="{{ asset('/assets/images/property-3.jpg') }}">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 p-1">
                                <div class="item item-size-4-3">
                                    <div class="card p-0 hover-zoom-in">
                                        <a href="{{ asset('/assets/images/property-4.jpg') }}" class="card-img-pp"
                                            data-gtf-mfp="true" data-gallery-id="01">
                                            <img src="{{ asset('/assets/images/property-4.jpg') }}">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 p-1">
                                <div class="item item-size-4-3">
                                    <div class="card p-0 hover-zoom-in">
                                        <a href="{{ asset('/assets/images/property-5.jpg') }}" class="card-img-pp"
                                            data-gtf-mfp="true" data-gallery-id="01">
                                            <img src="{{ asset('/assets/images/property-5.jpg') }}">
                                        </a>
                                        <div class=" hidden">
                                            <a href="{{ asset('/assets/images/noimg.jpg') }}" class="card-img-pp"
                                                data-gtf-mfp="true" data-gallery-id="01">
                                            </a>
                                            <a href="{{ asset('/assets/images/noimg.jpg') }}" class="card-img-pp"
                                                data-gtf-mfp="true" data-gallery-id="01">
                                            </a>
                                            <a href="{{ asset('/assets/images/noimg.jpg') }}" class="card-img-pp"
                                                data-gtf-mfp="true" data-gallery-id="01">
                                            </a>
                                            <a href="{{ asset('/assets/images/noimg.jpg') }}" class="card-img-pp"
                                                data-gtf-mfp="true" data-gallery-id="01">
                                            </a>
                                            <a href="{{ asset('/assets/images/noimg.jpg') }}" class="card-img-pp"
                                                data-gtf-mfp="true" data-gallery-id="01">
                                            </a>

                                        </div>

                                        <a href="#"
                                            class="card-img-pp-overlay d-flex flex-column align-items-center justify-content-center hover-image bg-dark-opacity-04">
                                            <p class="fs-48 font-weight-600 text-white lh-1 mb-4">+12</p>
                                            <p class="fs-16 font-weight-bold text-white lh-1625 text-uppercase">
                                                View more</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-pp ">
                <nav aria-label="breadcrumb ">
                    <ol class="breadcrumb pb-0 bg-white">
                        <li class="breadcrumb-item fs-12 letter-spacing-087">
                            <a href=".">Home</a>
                        </li>
                        <li class="breadcrumb-item fs-12 letter-spacing-087">
                            <a href="#">Listing</a>
                        </li>
                        <li class="breadcrumb-item fs-12 font-weight-600 letter-spacing-087 active">Villa on Hollywood
                            Boulevard</li>
                    </ol>
                </nav>
            </div>
        </section>

        <div class="container-md-pp ">
            <div class="row">
                <article class="col-lg-8  pr-xl-7 mt-5">
                    <section class="m-top border-bottom-pp">
                        <ul class="list-inline d-sm-flex align-items-sm-center">
                            <li class="list-inline-item badge-pp badge-pp-orange">Featured</li>
                            <li class="list-inline-item badge-pp badge-pp-primary">For Sale</li>
                            <li class="list-inline-item mr-2 mt-2 mt-sm-0"><i class="fa-regular fa-clock mr-1"></i>2months
                                ago
                            </li>
                            <li class="list-inline-item mt-2 mt-sm-0"><i class="fa-regular fa-eye mr-1"></i>1039views
                            </li>
                        </ul>

                        <div class="d-sm-flex justify-content-sm-between ">
                            <div>
                                <h2 class="fs-30 text-heading font-bold mb-0">Villa on Hollywood Boulevard</h2>
                                <p class="mb-0 text-mute"><i class="fa-solid fa-location-dot mr-2"></i>ที่อยู่บ้าน</p>
                            </div>

                            <div class="mt-2 text-lg-right">
                                <p class="fs-22 text-heading font-bold mb-0 font-weight-600">$1.250.000</p>
                                <p class="mb-0">$0000/SqFt</p>
                            </div>
                        </div>
                        <h2 class="fs-22 text-heading font-bold mb-0">Description</h2>
                        <p class="mb-6 lh-md pt-2 ">Massa tempor nec feugiat nisl pretium. Egestas fringilla phasellus
                            faucibus
                            scelerisque eleifend donec.
                            Porta nibh venenatis cras sed felis eget velit aliquet. Neque volutpat ac tincidunt vitae
                            semper
                            quis lectus. Turpis in eu mi bibendum neque
                            egestas congue quisque. Sed elementum tempus egestas sed sed risus pretium quam. Dignissim
                            sodales
                            ut eu sem. Nibh mauris cursus mattis molestie a
                            iaculis at erat pellentesque. Id interdum velit laoreet id donec ultrices tincidunt.
                        </p>
                    </section>

                    <section class="pt-6 border-bottom-pp section-pp">
                        <h2 class="fs-30 text-heading font-bold ">Facts and Features</h2>
                        <div class="row pt-3">
                            <div class="col-lg-3 col-6 mt-4 ">
                                <div class="media ">
                                    <div class="media-fa p-2 shadow-xxs-1 rounded-lg mr-2 ">
                                        <i class="fa-solid fa-house-chimney-window text-blue"></i>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="  fs-ff text-uppercase letter-spacing-093 font-weight-normal ">
                                            Type
                                        </h5>
                                        <p class=" fs-ff2 font-weight-bold text-heading">
                                            Single Family
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-6 mt-4">
                                <div class="media ">
                                    <div class="media-fa p-2 shadow-xxs-1 rounded-lg mr-2 ">
                                        <i class="fa-solid fa-trowel-bricks text-blue"></i>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="  fs-ff text-uppercase letter-spacing-093 font-weight-normal ">
                                            YEAR BUILT
                                        </h5>
                                        <p class=" fs-ff2 font-weight-bold text-heading">
                                            2020
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6 mt-4">
                                <div class="media ">
                                    <div class="media-fa p-2 shadow-xxs-1 rounded-lg mr-2 ">
                                        <i class="fa-solid fa-temperature-arrow-up text-blue"></i>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="  fs-ff text-uppercase letter-spacing-093 font-weight-normal ">
                                            HEATING
                                        </h5>
                                        <p class=" fs-ff2 font-weight-bold text-heading">
                                            Radiant
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-6 mt-4">
                                <div class="media ">
                                    <div class="media-fa p-2 shadow-xxs-1 rounded-lg mr-2  ">
                                        <i class="fa-solid fa-bath text-blue"></i>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="  fs-ff text-uppercase letter-spacing-093 font-weight-normal ">
                                            BATHROOMS
                                        </h5>
                                        <p class=" fs-ff2 font-weight-bold text-heading">
                                            2
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-6 mt-4">
                                <div class="media ">
                                    <div class="media-fa p-2 shadow-xxs-1 rounded-lg mr-2 ">
                                        <i class="fa-solid fa-bed text-blue"></i>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="  fs-ff text-uppercase letter-spacing-093 font-weight-normal ">
                                            BEDROOMS
                                        </h5>
                                        <p class=" fs-ff2 font-weight-bold text-heading">
                                            3
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-6 mt-4">
                                <div class="media ">
                                    <div class="media-fa p-2 shadow-xxs-1 rounded-lg mr-2 ">
                                        <i class="fa-solid fa-house-flag text-blue"></i>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="  fs-ff text-uppercase letter-spacing-093 font-weight-normal ">
                                            SQFT
                                        </h5>
                                        <p class=" fs-ff2 font-weight-bold text-heading">
                                            979.0
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-6 mt-4">
                                <div class="media ">
                                    <div class="media-fa p-2 shadow-xxs-1 rounded-lg mr-2 ">
                                        <i class="fa-solid fa-warehouse text-blue"></i>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="  fs-ff text-uppercase letter-spacing-093 font-weight-normal ">
                                            GARAGE
                                        </h5>
                                        <p class=" fs-ff2 font-weight-bold text-heading">
                                            1
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-6 mt-4">
                                <div class="media ">
                                    <div class="media-fa p-2 shadow-xxs-1 rounded-lg mr-2 ">
                                        <i class="fa-solid fa-scroll text-blue"></i>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="  fs-ff text-uppercase letter-spacing-093 font-weight-normal ">
                                            STATUS
                                        </h5>
                                        <p class=" fs-ff2 font-weight-bold text-heading">
                                            Active
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>

                    <section class="pt-6 border-bottom-pp section-pp">
                        <h2 class="fs-30 text-heading font-bold ">Additional Details</h2>
                        <div class="row pt-2">
                            <dl class="col-sm-6 mb-0 d-flex">
                                <dt class="w-110px fs-14  text-heading pr-2">Property ID</dt>
                                <dd>AD-29100</dd>
                            </dl>

                            <dl class="col-sm-6 mb-0 d-flex">
                                <dt class="w-110px fs-14  text-heading pr-2">Price</dt>
                                <dd>$890.000</dd>
                            </dl>
                            <dl class="col-sm-6 mb-0 d-flex">
                                <dt class="w-110px fs-14  text-heading pr-2">Property type</dt>
                                <dd>Apartment, bar, cafe, villa</dd>
                            </dl>
                            <dl class="col-sm-6 mb-0 d-flex">
                                <dt class="w-110px fs-14  text-heading pr-2">Property status</dt>
                                <dd>For Sale</dd>
                            </dl>
                            <dl class="col-sm-6 mb-0 d-flex">
                                <dt class="w-110px fs-14  text-heading pr-2">Rooms</dt>
                                <dd>4</dd>
                            </dl>
                            <dl class="col-sm-6 mb-0 d-flex">
                                <dt class="w-110px fs-14  text-heading pr-2">Bedrooms</dt>
                                <dd>3</dd>
                            </dl>
                            <dl class="col-sm-6 mb-0 d-flex">
                                <dt class="w-110px fs-14  text-heading pr-2">Size</dt>
                                <dd>900SqFt</dd>
                            </dl>
                            <dl class="col-sm-6 mb-0 d-flex">
                                <dt class="w-110px fs-14  text-heading pr-2">Bathrooms</dt>
                                <dd>2</dd>
                            </dl>
                            <dl class="col-sm-6 mb-0 d-flex">
                                <dt class="w-110px fs-14  text-heading pr-2">Garage</dt>
                                <dd>1</dd>
                            </dl>
                            <dl class="col-sm-6 mb-0 d-flex">
                                <dt class="w-110px fs-14  text-heading pr-2">Bathrooms</dt>
                                <dd>2000 SqFt</dd>
                            </dl>
                            <dl class="col-sm-6 mb-0 d-flex">
                                <dt class="w-110px fs-14  text-heading pr-2">Garage size</dt>
                                <dd>50 SqFt</dd>
                            </dl>
                            <dl class="col-sm-6 mb-0 d-flex">
                                <dt class="w-110px fs-14  text-heading pr-2">Year build</dt>
                                <dd>2020</dd>
                            </dl>
                            <dl class="offset-sm-6 col-sm-6 mb-0 d-flex">
                                <dt class="w-110px fs-14  text-heading pr-2">Label</dt>
                                <dd>Bestseller</dd>
                            </dl>

                        </div>
                        <div class="container-pp list-head">
                        </div>
                    </section>

                    <section class="pt-6 border-bottom-pp section-pp">
                        <h2 class="fs-30 text-heading font-bold ">Offices Amenities</h2>
                        <ul class="list-unstyled mb-0 row pt-2 ">
                            <li class="col-sm-3 col-6 mb-2"><i class="fa-solid fa-check mr-2 text-blue"></i>Balcony
                            </li>
                            <li class="col-sm-3 col-6 mb-2"><i class="fa-solid fa-check mr-2 text-blue"></i>Fireplace
                            </li>
                            <li class="col-sm-3 col-6 mb-2"><i class="fa-solid fa-check mr-2 text-blue"></i>Balcony
                            </li>
                            <li class="col-sm-3 col-6 mb-2"><i class="fa-solid fa-check mr-2 text-blue"></i>Fireplace
                            </li>
                            <li class="col-sm-3 col-6 mb-2"><i class="fa-solid fa-check mr-2 text-blue"></i>Basement
                            </li>
                            <li class="col-sm-3 col-6 mb-2"><i class="fa-solid fa-check mr-2 text-blue"></i>Cooling
                            </li>
                            <li class="col-sm-3 col-6 mb-2"><i class="fa-solid fa-check mr-2 text-blue"></i>Basement
                            </li>
                            <li class="col-sm-3 col-6 mb-2"><i class="fa-solid fa-check mr-2 text-blue"></i>Cooling
                            </li>
                            <li class="col-sm-3 col-6 mb-2"><i class="fa-solid fa-xmark mr-2 text-danger "></i><del>Dining
                                    room</del>
                            </li>
                            <li class="col-sm-3 col-6 mb-2"><i
                                    class="fa-solid fa-xmark mr-2 text-danger "></i><del>Dishwasher</del>
                            </li>
                            <li class="col-sm-3 col-6 mb-2"><i class="fa-solid fa-xmark mr-2 text-danger "></i><del>Dining
                                    room</del>
                            </li>
                            <li class="col-sm-3 col-6 mb-2"><i
                                    class="fa-solid fa-xmark mr-2 text-danger "></i><del>Dishwasher</del>
                            </li>
                        </ul>

                    </section>

                    <section class="pt-6 border-bottom-pp section-pp">

                        <h4 class="fs-30 text-heading font-bold mb-3">Virtual Tour</h4>
                        <iframe height="430" src="https://my.matterport.com/show/?m=wWcGxjuUuSb" allowfullscreen=""
                            class="w-100"></iframe>


                    </section>

                    <section class="pt-6 border-bottom-pp section-pp">
                        <h2 class="fs-30 text-heading font-bold mb-3">Location</h2>
                        <div class="d-flex justify-content-center ">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61986.891901766154!2d100.4506952486328!3d13.828182899999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29bfbc0283e39%3A0x203d873e226cd556!2zTHV2IERyaXZlIENhciBSZW50IGwg4LmA4Lil4Li04LifIOC5hOC4lOC4o-C5jOC4nyDguITguLLguKPguYzguYDguKPguYnguJnguJfguYwg4Liq4Liz4LiZ4Lix4LiB4LiH4Liy4LiZ4LmD4Lir4LiN4LmI!5e0!3m2!1sth!2sth!4v1704791449392!5m2!1sth!2sth"
                                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                    </section>

                    <section class="pt-6 section-pp">
                        <h4 class="fs-30 text-heading lh-15 pt-3">Rating & Reviews</h4>
                        <div class="card border-0 ">
                            <div class="card-body p-0">
                                <div class="row">

                                    <div class="col-sm-6 mb-6 mb-sm-0  ">
                                        <div class="bg-gray-01 rounded-lg pt-2 px-6 pb-5 pl-4">

                                            <h5 class="fs-16 lh-2 text-heading mb-6 ">
                                                Avarage User Rating
                                            </h5>
                                            <p class="fs-40 text-heading font-weight-bold lh-1">4.6 <span
                                                    class="fs-18 text-gray-light font-weight-normal">/5</span>
                                            </p>
                                            <div class="list-inline ">
                                                <li
                                                    class="list-inline-item bg-warning text-white star d-inline-flex align-items-center justify-content-center mb-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li
                                                    class="list-inline-item bg-warning text-white star d-inline-flex align-items-center justify-content-center mb-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li
                                                    class="list-inline-item bg-warning text-white star d-inline-flex align-items-center justify-content-center mb-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li
                                                    class="list-inline-item bg-warning text-white star d-inline-flex align-items-center justify-content-center mb-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li
                                                    class="list-inline-item bg-gray-04 text-white star d-inline-flex align-items-center justify-content-center mb-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-sm-6 pt-2">
                                        <h5 class="fs-16 lh-2 text-heading ">
                                            Rating Breakdown
                                        </h5>
                                        <div class="d-flex align-items-center mx-n1">
                                            <ul class="list-inline d-flex px-1 mb-0">
                                                <li class="list-inline-item text-warning mr-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="list-inline-item text-warning mr-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="list-inline-item text-warning mr-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="list-inline-item text-warning mr-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="list-inline-item text-warning mr-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                            </ul>
                                            <div class="d-block w-100 px-1">
                                                <div class="progress-pp rating-progress-pp">
                                                    <div class="progress-pp-bar bg-warning" role="progressbar"
                                                        style="width: 60%" aria-valuenow="60" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="text-muted px-1">60%</div>
                                        </div>

                                        <div class="d-flex align-items-center mx-n1">
                                            <ul class="list-inline d-flex px-1 mb-0">
                                                <li class="list-inline-item text-warning mr-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="list-inline-item text-warning mr-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="list-inline-item text-warning mr-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="list-inline-item text-warning mr-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="list-inline-item text-border mr-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                            </ul>
                                            <div class="d-block w-100 px-1">
                                                <div class="progress-pp rating-progress-pp">
                                                    <div class="progress-pp-bar bg-warning" role="progressbar"
                                                        style="width: 40%" aria-valuenow="40" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="text-muted px-1">40%</div>
                                        </div>

                                        <div class="d-flex align-items-center mx-n1">
                                            <ul class="list-inline d-flex px-1 mb-0">
                                                <li class="list-inline-item text-warning mr-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="list-inline-item text-warning mr-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="list-inline-item text-warning mr-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="list-inline-item text-border mr-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="list-inline-item text-border mr-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                            </ul>
                                            <div class="d-block w-100 px-1">
                                                <div class="progress-pp rating-progress-pp">
                                                    <div class="progress-pp-bar bg-warning" role="progressbar"
                                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-muted px-1">0%</div>
                                        </div>

                                        <div class="d-flex align-items-center mx-n1">
                                            <ul class="list-inline d-flex px-1 mb-0">
                                                <li class="list-inline-item text-warning mr-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="list-inline-item text-warning mr-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="list-inline-item text-border mr-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="list-inline-item text-border mr-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="list-inline-item text-border mr-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                            </ul>
                                            <div class="d-block w-100 px-1">
                                                <div class="progress-pp rating-progress-pp">
                                                    <div class="progress-pp-bar bg-warning" role="progressbar"
                                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-muted px-1">0%</div>
                                        </div>

                                        <div class="d-flex align-items-center mx-n1">
                                            <ul class="list-inline d-flex px-1 mb-0">
                                                <li class="list-inline-item text-warning mr-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="list-inline-item text-border mr-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="list-inline-item text-border mr-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="list-inline-item text-border mr-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li class="list-inline-item text-border mr-1">
                                                    <i class="fas fa-star"></i>
                                                </li>
                                            </ul>
                                            <div class="d-block w-100 px-1">
                                                <div class="progress-pp rating-progress-pp">
                                                    <div class="progress-pp-bar bg-warning" role="progressbar"
                                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-muted px-1">0%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>

                    <section class="pt-6 border-bottom-pp section-pp">
                        <div class="card border-0 ">
                            <div class="card-body p-0">
                                <h3
                                    class="fs-16 lh-2 text-heading mb-0 d-inline-block pr-4 border-bottom-pp border-primary">
                                    5 Reviews</h3>

                                <div class="media border-top pt-7 pb-6 d-sm-flex d-block text-sm-left text-center">
                                    <img src="{{ asset('/assets/images/review-1.jpg') }}" alt="Danny Fox"
                                        class=" review-icon mr-sm-8 mb-sm-0 img-fluid"
                                        style="width: 84px; height: 84px; object-fit: cover;">
                                    <div class="media-body">
                                        <div class="row mb-1 align-items-center">
                                            <div class="col-sm-6 mb-2 mb-sm-0  ">
                                                <h4 class="mb-0 text-heading fs-14">Danny Fox</h4>
                                            </div>

                                            <div class="col-sm-6">
                                                <ul
                                                    class="list-inline d-flex justify-content-sm-end justify-content-center mb-0">
                                                    <li class="list-inline-item mr-0">
                                                        <span class="align-item-right text-warning">
                                                            <i class="fas fa-star"></i>
                                                        </span>
                                                        <span class="align-item-right text-warning">
                                                            <i class="fas fa-star"></i>
                                                        </span>
                                                        <span class="align-item-right text-warning">
                                                            <i class="fas fa-star"></i>
                                                        </span>
                                                        <span class="align-item-right text-warning">
                                                            <i class="fas fa-star"></i>
                                                        </span>
                                                        <span class="align-item-right text-warning">
                                                            <i class="fas fa-star"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                            <p class="mb-3 m-mb-3 ">Very good and fast support during the week. Thanks for
                                                always keeping your WordPress themes up to date. Your level of support
                                                and
                                                dedication
                                                is second to none.
                                            </p>
                                            <div class="d-flex justify-content-sm-start justify-content-center">
                                                <p class="mb-0 text-muted fs-13 lh-1 ">02 Dec 2020 at 2:40pm</p>
                                                <a href="#"
                                                    class="mb-0 text-heading border-left border-dark hover-primary lh-1 ml-2 pl-2">Reply</a>
                                            </div>
                                    </div>
                                </div>

                                <div class="media border-top pt-7 pb-6 d-sm-flex d-block text-sm-left text-center ">
                                    <img src="{{ asset('/assets/images/review-2.jpg') }}" alt="Viola Austin"
                                        class=" review-icon mr-sm-8 mb-sm-0 img-fluid"
                                        style="width: 84px; height: 84px; object-fit: cover;">
                                        <div class="media-body">
                                            <div class="row mb-1 align-items-center">
                                                <div class="col-sm-6 mb-2 mb-sm-0  ">
                                                    <h4 class="mb-0 text-heading fs-14">Danny Fox</h4>
                                                </div>

                                                <div class="col-sm-6">
                                                    <ul
                                                        class="list-inline d-flex justify-content-sm-end justify-content-center mb-0">
                                                        <li class="list-inline-item mr-0">
                                                            <span class="align-item-right text-warning">
                                                                <i class="fas fa-star"></i>
                                                            </span>
                                                            <span class="align-item-right text-warning">
                                                                <i class="fas fa-star"></i>
                                                            </span>
                                                            <span class="align-item-right text-warning">
                                                                <i class="fas fa-star"></i>
                                                            </span>
                                                            <span class="align-item-right text-warning">
                                                                <i class="fas fa-star"></i>
                                                            </span>
                                                            <span class="align-item-right text-warning">
                                                                <i class="fas fa-star"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                                <p class="mb-3 m-mb-3 ">Very good and fast support during the week. Thanks for
                                                    always keeping your WordPress themes up to date. Your level of support
                                                    and
                                                    dedication
                                                    is second to none.
                                                </p>
                                                <div class="d-flex justify-content-sm-start justify-content-center">
                                                    <p class="mb-0 text-muted fs-13 lh-1 ">02 Dec 2020 at 2:40pm</p>
                                                    <a href="#"
                                                        class="mb-0 text-heading border-left border-dark hover-primary lh-1 ml-2 pl-2">Reply</a>
                                                </div>
                                        </div>
                                </div>

                                <div class="media border-top pt-7 pb-6 d-sm-flex d-block text-sm-left text-center">
                                    <img src="{{ asset('/assets/images/review-3.jpg') }}" alt="Nettie Singleton"
                                        class=" review-icon mr-sm-8 mb-sm-0 img-fluid"
                                        style="width: 84px; height: 84px; object-fit: cover;">
                                        <div class="media-body">
                                            <div class="row mb-1 align-items-center">
                                                <div class="col-sm-6 mb-2 mb-sm-0  ">
                                                    <h4 class="mb-0 text-heading fs-14">Danny Fox</h4>
                                                </div>

                                                <div class="col-sm-6">
                                                    <ul
                                                        class="list-inline d-flex justify-content-sm-end justify-content-center mb-0">
                                                        <li class="list-inline-item mr-0">
                                                            <span class="align-item-right text-warning">
                                                                <i class="fas fa-star"></i>
                                                            </span>
                                                            <span class="align-item-right text-warning">
                                                                <i class="fas fa-star"></i>
                                                            </span>
                                                            <span class="align-item-right text-warning">
                                                                <i class="fas fa-star"></i>
                                                            </span>
                                                            <span class="align-item-right text-warning">
                                                                <i class="fas fa-star"></i>
                                                            </span>
                                                            <span class="align-item-right text-warning">
                                                                <i class="fas fa-star"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                                <p class="mb-3 m-mb-3 ">Very good and fast support during the week. Thanks for
                                                    always keeping your WordPress themes up to date. Your level of support
                                                    and
                                                    dedication
                                                    is second to none.
                                                </p>
                                                <div class="d-flex justify-content-sm-start justify-content-center">
                                                    <p class="mb-0 text-muted fs-13 lh-1 ">02 Dec 2020 at 2:40pm</p>
                                                    <a href="#"
                                                        class="mb-0 text-heading border-left border-dark hover-primary lh-1 ml-2 pl-2">Reply</a>
                                                </div>
                                        </div>
                                </div>

                                <div class="media border-top pt-7 pb-6 d-sm-flex d-block text-sm-left text-center">
                                    <img src="{{ asset('/assets/images/review-1.jpg') }}" alt="Vernon Fisher"
                                        class=" review-icon mr-sm-8 mb-sm-0 img-fluid"
                                        style="width: 84px; height: 84px; object-fit: cover;">
                                        <div class="media-body">
                                            <div class="row mb-1 align-items-center">
                                                <div class="col-sm-6 mb-2 mb-sm-0  ">
                                                    <h4 class="mb-0 text-heading fs-14">Danny Fox</h4>
                                                </div>

                                                <div class="col-sm-6">
                                                    <ul
                                                        class="list-inline d-flex justify-content-sm-end justify-content-center mb-0">
                                                        <li class="list-inline-item mr-0">
                                                            <span class="align-item-right text-warning">
                                                                <i class="fas fa-star"></i>
                                                            </span>
                                                            <span class="align-item-right text-warning">
                                                                <i class="fas fa-star"></i>
                                                            </span>
                                                            <span class="align-item-right text-warning">
                                                                <i class="fas fa-star"></i>
                                                            </span>
                                                            <span class="align-item-right text-warning">
                                                                <i class="fas fa-star"></i>
                                                            </span>
                                                            <span class="align-item-right text-warning">
                                                                <i class="fas fa-star"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                                <p class="mb-3 m-mb-3 ">Very good and fast support during the week. Thanks for
                                                    always keeping your WordPress themes up to date. Your level of support
                                                    and
                                                    dedication
                                                    is second to none.
                                                </p>
                                                <div class="d-flex justify-content-sm-start justify-content-center">
                                                    <p class="mb-0 text-muted fs-13 lh-1 ">02 Dec 2020 at 2:40pm</p>
                                                    <a href="#"
                                                        class="mb-0 text-heading border-left border-dark hover-primary lh-1 ml-2 pl-2">Reply</a>
                                                </div>
                                        </div>
                                </div>

                                <div class="media border-top pt-7 pb-6 d-sm-flex d-block text-sm-left text-center">
                                    <img src="{{ asset('/assets/images/review-4.png') }}" alt="Harry Iglesias"
                                        class=" review-icon mr-sm-8 mb-sm-0 img-fluid"
                                        style="width: 84px; height: 84px; object-fit: cover;">
                                        <div class="media-body">
                                            <div class="row mb-1 align-items-center">
                                                <div class="col-sm-6 mb-2 mb-sm-0  ">
                                                    <h4 class="mb-0 text-heading fs-14">Danny Fox</h4>
                                                </div>

                                                <div class="col-sm-6">
                                                    <ul
                                                        class="list-inline d-flex justify-content-sm-end justify-content-center mb-0">
                                                        <li class="list-inline-item mr-0">
                                                            <span class="align-item-right text-warning">
                                                                <i class="fas fa-star"></i>
                                                            </span>
                                                            <span class="align-item-right text-warning">
                                                                <i class="fas fa-star"></i>
                                                            </span>
                                                            <span class="align-item-right text-warning">
                                                                <i class="fas fa-star"></i>
                                                            </span>
                                                            <span class="align-item-right text-warning">
                                                                <i class="fas fa-star"></i>
                                                            </span>
                                                            <span class="align-item-right text-warning">
                                                                <i class="fas fa-star"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                                <p class="mb-3 m-mb-3 ">Very good and fast support during the week. Thanks for
                                                    always keeping your WordPress themes up to date. Your level of support
                                                    and
                                                    dedication
                                                    is second to none.
                                                </p>
                                                <div class="d-flex justify-content-sm-start justify-content-center">
                                                    <p class="mb-0 text-muted fs-13 lh-1 ">02 Dec 2020 at 2:40pm</p>
                                                    <a href="#"
                                                        class="mb-0 text-heading border-left border-dark hover-primary lh-1 ml-2 pl-2">Reply</a>
                                                </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="pt-6 border-bottom-pp section-pp">
                        <div class="card border-0">
                            <div class="card-body pt-0 ">
                                <h3 class="fs-16 lh-2 text-heading mb-4">Write A Review</h3>
                                <form>

                                    <div class="form-group mb-4 d-flex justify-content-start">
                                        <div class="rate-input">
                                            <input type="radio" id="star5" name="rate" value="5">
                                            <label for="star5" title="text" class="mb-0 mr-1 lh-1">
                                                <i class="fas fa-star"></i>
                                            </label>
                                            <input type="radio" id="star4" name="rate" value="4">
                                            <label for="star4" title="text" class="mb-0 mr-1 lh-1">
                                                <i class="fas fa-star"></i>
                                            </label>
                                            <input type="radio" id="star3" name="rate" value="3">
                                            <label for="star3" title="text" class="mb-0 mr-1 lh-1">
                                                <i class="fas fa-star"></i>
                                            </label>
                                            <input type="radio" id="star2" name="rate" value="2">
                                            <label for="star2" title="text" class="mb-0 mr-1 lh-1">
                                                <i class="fas fa-star"></i>
                                            </label>
                                            <input type="radio" id="star1" name="rate" value="1">
                                            <label for="star1" title="text" class="mb-0 mr-1 lh-1">
                                                <i class="fas fa-star"></i>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group mb-4">
                                                <input placeholder="Your Name"
                                                    class="form-control-pp form-control-pp-lg border-0" type="text"
                                                    name="name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group mb-4">
                                                <input type="email" placeholder="Email" name="email"
                                                    class="form-control-pp form-control-pp-lg border-0">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <textarea class="form-control-pp form-control-pp-lg border-0 textarea-pp" placeholder="Your Review" name="message"
                                            rows="5"></textarea>
                                    </div>
                                    {{-- เอา btn-t-white ออก btn-block --}}
                                    <button type="submit" class="afterButton rounded-pill btn-lg btn-block-sb"
                                        id="submitModalBtn"> Submit </button>

                                </form>
                            </div>
                        </div>
                    </section>

                </article>


                <aside class="col-lg-4 pl-xl-4 pdr-0 primary-sidebar sidebar-sticky  ">
                    <div class="make-me-sticky hide-all ">
                        <div class="card border-0">

                            <div class="card-body pr-sm-6 pl-sm-6 shadow-xxs-2 pb-5 pt-0">
                                <form>
                                    <div class="tab-content pt-1 pb-0 px-0 shadow-none">
                                        {{-- Request Info ID --}}
                                        <div class="tab-pane fade fade show active" id="request-info" role="tabpanel">

                                            <div class="hide-content">
                                                <div
                                                    class="form-check d-flex align-items-center border-bottom-pp pb-3 mb-3">
                                                    <input class="form-check-input" type="radio" name="agent"
                                                        value="option1">
                                                    <div class="form-check-label ml-2">
                                                        <div class="d-flex align-items-center mt-3">
                                                            <a href="#" class="d-block agent-icon mr-3">
                                                                <img class="img-angent"
                                                                    src="{{ asset('/assets/images/agent-1.jpg') }}"
                                                                    class="rounded-circle" alt="agent-2">
                                                            </a>
                                                            <div>
                                                                <a href="#"
                                                                    class="d-block text-dark font-weight-500 lh-15 hover-primary">Oliver
                                                                    Beddows</a>
                                                                <p class="mb-0 fs-13 mb-0 lh-17">Sales Excutive</p>
                                                                <p class="mb-0 fs-13 mb-0 lh-17">
                                                                    <span>(+123)</span><span
                                                                        class="text-heading d-inline-block ml-2">1900
                                                                        68668</span>
                                                                </p>

                                                                <ul class="list-inline mb-0 fs-22 pl-2">

                                                                    <li class="list-inline-item mr-2 ml-2 mb-0">
                                                                        <a href="https://line.me/R/ti/p/@Luvdrive?from=page"
                                                                            target="_blank">
                                                                            <i class="fa-brands fa-line text-success"></i>
                                                                        </a>
                                                                    </li>


                                                                    <li class="list-inline-item mr-2 ml-2 mb-0">
                                                                        <a href="tel:091-545-3939" target="_blank">
                                                                            <i class="fa-solid fa-phone text-blue"></i>
                                                                        </a>
                                                                    </li>
                                                                    </a>
                                                                </ul>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-check d-flex align-items-center mb-6">
                                                    <input class="form-check-input" type="radio" name="agent"
                                                        id="inlineRadio2" value="option2">
                                                    <div class="form-check-label ml-2">
                                                        <div class="d-flex align-items-center">
                                                            <a href="#" class="d-block agent-icon mr-3">
                                                                <img class="img-angent"
                                                                    src="{{ asset('/assets/images/agent-2.jpg') }}"
                                                                    class="rounded-circle" alt="agent-1">
                                                            </a>
                                                            <div>
                                                                <a href="#"
                                                                    class="d-block text-dark font-weight-500 lh-15 hover-primary">Max
                                                                    Kordex</a>
                                                                <p class="mb-0 fs-13 mb-0 lh-17">Real estate broker</p>
                                                                <p class="mb-0 fs-13 mb-0 lh-17">
                                                                    <span>(+123)</span><span
                                                                        class="text-heading d-inline-block ml-2">1900
                                                                        68668</span>
                                                                </p>

                                                                <ul class="list-inline mb-0 fs-22 pl-2">

                                                                    <li class="list-inline-item mr-2 ml-2 mb-0">
                                                                        <a href="https://line.me/R/ti/p/@Luvdrive?from=page"
                                                                            target="_blank">
                                                                            <i class="fa-brands fa-line text-success"></i>
                                                                        </a>
                                                                    </li>


                                                                    <li class="list-inline-item mr-2 ml-2 mb-0">
                                                                        <a href="tel:091-545-3939" target="_blank">
                                                                            <i class="fa-solid fa-phone text-blue"></i>
                                                                        </a>
                                                                    </li>

                                                                </ul>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-3 hide-on-ls show-on-ss">
                                                <h2 class="text-center">Contact</h2>
                                            </div>
                                            <div class="mt-4">
                                                <div class="form-group mb-2">
                                                    <input type="text"
                                                        class="form-control-pp form-control-pp-lg border-0"
                                                        placeholder="First Name, Last Name">
                                                </div>
                                                <div class="form-group mb-2">
                                                    <input type="email"
                                                        class="form-control-pp form-control-pp-lg border-0"
                                                        placeholder="Your Email">
                                                </div>
                                                <div class="form-group mb-2">
                                                    <input type="tel"
                                                        class="form-control-pp form-control-pp-lg border-0"
                                                        placeholder="Your phone">
                                                </div>
                                            </div>
                                            <div class="form-group mb-4">
                                                <textarea class="form-control-pp border-0 textarea-pp" rows="4">Hello, I'm interested in Villa Called Archangel</textarea>
                                            </div>
                                            {{-- เอา btn-t-white ออก --}}
                                            <button type="submit" class="afterButton rounded-pill btn-lg btn-block"
                                                id="submitModalBtn"> Request Info</button>
                                            <div class="form-group form-check mt-2 mb-0">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                                <label class="form-check-label fs-13" for="exampleCheck2">Egestas
                                                    fringilla
                                                    phasellus
                                                    faucibus
                                                    scelerisque
                                                    eleifend donec.</label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </aside>


            </div>
        </div>

        <section class="section-pp md-mb-80">
            <div class="container-pp ">
                <h4 class="fs-22 text-heading ">Similar Homes You May Like</h4>
                <div class="slick-list draggable" style="height: 100%;">
                    <div class="slick-track sm-box">
                        <div class="col-md-12 ">
                            <div class="slick-slider ">

                                <div class=" slick-slide-box slick-active d-flex justify-content-between"
                                    style="width: 400px;" tabindex="0" data-slick-index="2" aria-hidden="false">
                                    <div class="card  shadow-hover-2 mr-2">
                                        <div class="hover-change-image bg-hover-overlay rounded-lg card-img-pp-top">
                                            <img src="{{ asset('/assets/images/properties-1.jpg') }}"
                                                alt="Affordable Urban House">
                                            <div class="card-img-pp-overlay p-2 d-flex flex-column">
                                                <div>
                                                    <span class="badge-pp mr-2 badge-pp-orange">featured</span>
                                                    <span class="badge-pp mr-2 badge-pp-indigo">for Sale</span>
                                                </div>
                                                <ul class="list-inline mb-0 mt-auto hover-image">
                                                    <li class="list-inline-item mr-2" data-toggle="tooltip"
                                                        title="" data-original-title="9 Images">
                                                        <a href="#" class="text-white hover-primary"
                                                            tabindex="0">
                                                            <i class="far fa-images"></i><span class="pl-1">9</span>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item" data-toggle="tooltip" title=""
                                                        data-original-title="2 Video">
                                                        <a href="#" class="text-white hover-primary"
                                                            tabindex="0">
                                                            <i class="far fa-play-circle"></i><span
                                                                class="pl-1">2</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body pt-3">
                                            <h2 class="card-title fs-14 lh-2 mb-0"><a href="#"
                                                    class="text-dark hover-primary" tabindex="0">Home in Metric Way</a>
                                            </h2>
                                            <p class="card-text font-weight-500 text-gray-light mb-2">1421 San Pedro St,
                                                Los Angeles</p>
                                            <div class="row no-gutters">
                                                <div class="col-6 ">
                                                    <div class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center ml-pp"
                                                        data-toggle="tooltip" title=""
                                                        data-original-title="3 Bedroom">
                                                        <i class="fa-solid fa-bed text-blue mr-2"></i>3 Bedroom
                                                    </div>
                                                </div>
                                                <div class="col-6 ">
                                                    <div class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center ml-pp"
                                                        data-toggle="tooltip" title=""
                                                        data-original-title="3 Bathrooms">
                                                        <i class="fa-solid fa-shower text-blue mr-2"></i> 3 Bathroom
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="list-inline-item text-gray font-weight-500 fs-12 d-flex align-items-center ml-pp"
                                                        data-toggle="tooltip" title="" data-original-title="Size">
                                                        <div class="list-inline fa-sq">
                                                            <i
                                                                class="fa-solid fa-up-right-and-down-left-from-center text-blue mr-2"></i>
                                                            2000 Sq.Ft
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="card-footer bg-transparent d-flex justify-content-between align-items-center py-3">
                                            <p class="fs-price mb-0">$1.250.000</p>
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item">
                                                    <a href="#"
                                                        class="tooltip-icon border rounded-circle d-inline-flex align-items-center justify-content-center text-blue bg-accent border-accent"
                                                        data-toggle="tooltip" title="" tabindex="0"
                                                        data-original-title="Wishlist"><i class="fas fa-heart"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#"
                                                        class="tooltip-icon border rounded-circle d-inline-flex align-items-center justify-content-center text-body hover-secondary bg-hover-accent border-hover-accent"
                                                        data-toggle="tooltip" title="" tabindex="0"
                                                        data-original-title="Compare"><i
                                                            class="fas fa-exchange-alt"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class=" slick-slide-box slick-active d-flex justify-content-between"
                                    style="width: 400px;" tabindex="0" data-slick-index="1" aria-hidden="false">
                                    <div class="card shadow-hover-2 mr-2">
                                        <div class="hover-change-image bg-hover-overlay rounded-lg card-img-pp-top">
                                            <img src="{{ asset('/assets/images/properties-2.jpg') }}"
                                                alt="Garden Gingerbread House">
                                            <div class="card-img-pp-overlay p-2 d-flex flex-column">
                                                <div>
                                                    <span class="badge-pp mr-2 badge-pp-orange">featured</span>
                                                    <span class="badge-pp mr-2 badge-pp-indigo">for Sale</span>
                                                </div>
                                                <ul class="list-inline mb-0 mt-auto hover-image">
                                                    <li class="list-inline-item mr-2" data-toggle="tooltip"
                                                        title="" data-original-title="9 Images">
                                                        <a href="#" class="text-white hover-primary"
                                                            tabindex="0">
                                                            <i class="far fa-images"></i><span class="pl-1">9</span>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item" data-toggle="tooltip" title=""
                                                        data-original-title="2 Video">
                                                        <a href="#" class="text-white hover-primary"
                                                            tabindex="0">
                                                            <i class="far fa-play-circle"></i><span
                                                                class="pl-1">2</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body pt-3">
                                            <h2 class="card-title fs-14 lh-2 mb-0"><a href="#"
                                                    class="text-dark hover-primary" tabindex="0">Garden Gingerbread
                                                    House</a></h2>
                                            <p class="card-text font-weight-500 text-gray-light mb-2">1421 San Pedro St,
                                                Los Angeles</p>
                                            <div class="row no-gutters">
                                                <div class="col-6 ">
                                                    <div class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center ml-pp"
                                                        data-toggle="tooltip" title=""
                                                        data-original-title="3 Bedroom">
                                                        <i class="fa-solid fa-bed text-blue mr-2"></i>3 Bedroom
                                                    </div>
                                                </div>
                                                <div class="col-6 ">
                                                    <div class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center ml-pp"
                                                        data-toggle="tooltip" title=""
                                                        data-original-title="3 Bathrooms">
                                                        <i class="fa-solid fa-shower text-blue mr-2"></i> 3 Bathroom
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="list-inline-item text-gray font-weight-500 fs-12 d-flex align-items-center ml-pp"
                                                        data-toggle="tooltip" title="" data-original-title="Size">
                                                        <div class="list-inline fa-sq">
                                                            <i
                                                                class="fa-solid fa-up-right-and-down-left-from-center text-blue mr-2"></i>
                                                            2200 Sq.Ft
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="card-footer bg-transparent d-flex justify-content-between align-items-center py-3">
                                            <p class="fs-price mb-0">$550<span
                                                    class="text-gray-light font-weight-500 fs-14"> / month</span></p>
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item">
                                                    <a href="#"
                                                        class="tooltip-icon border rounded-circle d-inline-flex align-items-center justify-content-center  bg-accent border-accent"
                                                        data-toggle="tooltip" title="" tabindex="0"
                                                        data-original-title="Wishlist"><i
                                                            class="fa-regular fa-heart"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#"
                                                        class="tooltip-icon border rounded-circle d-inline-flex align-items-center justify-content-center text-body hover-secondary bg-hover-accent border-hover-accent"
                                                        data-toggle="tooltip" title="" tabindex="0"
                                                        data-original-title="Compare"><i
                                                            class="fas fa-exchange-alt"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class=" slick-slide-box slick-active d-flex justify-content-between"
                                    style="width: 400px;" tabindex="0" data-slick-index="2" aria-hidden="false">
                                    <div class="card shadow-hover-2 mr-2">
                                        <div class="hover-change-image bg-hover-overlay rounded-lg card-img-pp-top">
                                            <img src="{{ asset('/assets/images/properties-3.jpg') }}"
                                                alt="Affordable Urban House">
                                            <div class="card-img-pp-overlay p-2 d-flex flex-column">
                                                <div>
                                                    <span class="badge-pp mr-2 badge-pp-primary">for Sale</span>
                                                </div>
                                                <ul class="list-inline mb-0 mt-auto hover-image">
                                                    <li class="list-inline-item mr-2" data-toggle="tooltip"
                                                        title="" data-original-title="9 Images">
                                                        <a href="#" class="text-white hover-primary"
                                                            tabindex="0">
                                                            <i class="far fa-images"></i><span class="pl-1">9</span>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item" data-toggle="tooltip" title=""
                                                        data-original-title="2 Video">
                                                        <a href="#" class="text-white hover-primary"
                                                            tabindex="0">
                                                            <i class="far fa-play-circle"></i><span
                                                                class="pl-1">2</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body pt-3">
                                            <h2 class="card-title fs-14 lh-2 mb-0"><a href="#"
                                                    class="text-dark hover-primary" tabindex="0">Affordable Urban
                                                    House</a></h2>
                                            <p class="card-text font-weight-500 text-gray-light mb-2">1421 San Pedro St,
                                                Los Angeles</p>
                                            <div class="row no-gutters">
                                                <div class="col-6 ">
                                                    <div class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center ml-pp"
                                                        data-toggle="tooltip" title=""
                                                        data-original-title="3 Bedroom">
                                                        <i class="fa-solid fa-bed text-blue mr-2"></i>3 Bedroom
                                                    </div>
                                                </div>
                                                <div class="col-6 ">
                                                    <div class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center ml-pp"
                                                        data-toggle="tooltip" title=""
                                                        data-original-title="3 Bathrooms">
                                                        <i class="fa-solid fa-shower text-blue mr-2"></i> 3 Bathroom
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="list-inline-item text-gray font-weight-500 fs-12 d-flex align-items-center ml-pp"
                                                        data-toggle="tooltip" title="" data-original-title="Size">
                                                        <div class="list-inline fa-sq">
                                                            <i
                                                                class="fa-solid fa-up-right-and-down-left-from-center text-blue mr-2"></i>
                                                            2000 Sq.Ft
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="card-footer bg-transparent d-flex justify-content-between align-items-center py-3">
                                            <p class="fs-price mb-0">$1.250.000</p>
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item">
                                                    <a href="#"
                                                        class="tooltip-icon border rounded-circle d-inline-flex align-items-center justify-content-center  bg-accent border-accent"
                                                        data-toggle="tooltip" title="" tabindex="0"
                                                        data-original-title="Wishlist"><i
                                                            class="fa-regular fa-heart"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#"
                                                        class="tooltip-icon border rounded-circle d-inline-flex align-items-center justify-content-center text-body hover-secondary bg-hover-accent border-hover-accent"
                                                        data-toggle="tooltip" title="" tabindex="0"
                                                        data-original-title="Compare"><i
                                                            class="fas fa-exchange-alt"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class=" slick-slide-box slick-active d-flex justify-content-between"
                                    style="width: 400px;" tabindex="0" data-slick-index="3" aria-hidden="false">
                                    <div class="card shadow-hover-2 mr-2">
                                        <div class="hover-change-image bg-hover-overlay rounded-lg card-img-pp-top">
                                            <img src="{{ asset('/assets/images/properties-4.jpg') }}"
                                                alt="Affordable Urban House">
                                            <div class="card-img-pp-overlay p-2 d-flex flex-column">
                                                <div>
                                                    <span class="badge-pp mr-2 badge-pp-primary">for Sale</span>
                                                </div>
                                                <ul class="list-inline mb-0 mt-auto hover-image">
                                                    <li class="list-inline-item mr-2" data-toggle="tooltip"
                                                        title="" data-original-title="9 Images">
                                                        <a href="#" class="text-white hover-primary"
                                                            tabindex="0">
                                                            <i class="far fa-images"></i><span class="pl-1">9</span>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item" data-toggle="tooltip" title=""
                                                        data-original-title="2 Video">
                                                        <a href="#" class="text-white hover-primary"
                                                            tabindex="0">
                                                            <i class="far fa-play-circle"></i><span
                                                                class="pl-1">2</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body pt-3">
                                            <h2 class="card-title fs-14 lh-2 mb-0"><a href="#"
                                                    class="text-dark hover-primary" tabindex="0">Affordable Urban
                                                    House</a></h2>
                                            <p class="card-text font-weight-500 text-gray-light mb-2">1421 San Pedro St,
                                                Los Angeles</p>
                                            <div class="row no-gutters">
                                                <div class="col-6 ">
                                                    <div class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center ml-pp"
                                                        data-toggle="tooltip" title=""
                                                        data-original-title="3 Bedroom">
                                                        <i class="fa-solid fa-bed text-blue mr-2"></i>3 Bedroom
                                                    </div>
                                                </div>
                                                <div class="col-6 ">
                                                    <div class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center ml-pp"
                                                        data-toggle="tooltip" title=""
                                                        data-original-title="3 Bathrooms">
                                                        <i class="fa-solid fa-shower text-blue mr-2"></i> 3 Bathroom
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="list-inline-item text-gray font-weight-500 fs-12 d-flex align-items-center ml-pp"
                                                        data-toggle="tooltip" title="" data-original-title="Size">
                                                        <div class="list-inline fa-sq">
                                                            <i
                                                                class="fa-solid fa-up-right-and-down-left-from-center text-blue mr-2"></i>
                                                            2000 Sq.Ft
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="card-footer bg-transparent d-flex justify-content-between align-items-center py-3">
                                            <p class="fs-price mb-0">$1.250.000</p>
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item">
                                                    <a href="#"
                                                        class="tooltip-icon border rounded-circle d-inline-flex align-items-center justify-content-center  bg-accent border-accent"
                                                        data-toggle="tooltip" title="" tabindex="0"
                                                        data-original-title="Wishlist"><i
                                                            class="fa-regular fa-heart"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#"
                                                        class="tooltip-icon border rounded-circle d-inline-flex align-items-center justify-content-center text-body hover-secondary bg-hover-accent border-hover-accent"
                                                        data-toggle="tooltip" title="" tabindex="0"
                                                        data-original-title="Compare"><i
                                                            class="fas fa-exchange-alt"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class=" slick-slide-box slick-active d-flex justify-content-between"
                                    style="width: 400px;" tabindex="0" data-slick-index="4" aria-hidden="false">
                                    <div class="card shadow-hover-2 mr-2">
                                        <div class="hover-change-image bg-hover-overlay rounded-lg card-img-pp-top">
                                            <img src="{{ asset('/assets/images/properties-5.jpg') }}"
                                                alt="Affordable Urban House">
                                            <div class="card-img-pp-overlay p-2 d-flex flex-column">
                                                <div>
                                                    <span class="badge-pp mr-2 badge-pp-primary">for Sale</span>
                                                </div>
                                                <ul class="list-inline mb-0 mt-auto hover-image">
                                                    <li class="list-inline-item mr-2" data-toggle="tooltip"
                                                        title="" data-original-title="9 Images">
                                                        <a href="#" class="text-white hover-primary"
                                                            tabindex="0">
                                                            <i class="far fa-images"></i><span class="pl-1">9</span>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item" data-toggle="tooltip" title=""
                                                        data-original-title="2 Video">
                                                        <a href="#" class="text-white hover-primary"
                                                            tabindex="0">
                                                            <i class="far fa-play-circle"></i><span
                                                                class="pl-1">2</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body pt-3">
                                            <h2 class="card-title fs-14 lh-2 mb-0"><a href="#"
                                                    class="text-dark hover-primary" tabindex="0">Affordable Urban
                                                    House</a></h2>
                                            <p class="card-text font-weight-500 text-gray-light mb-2">1421 San Pedro St,
                                                Los Angeles</p>
                                            <div class="row no-gutters">
                                                <div class="col-6 ">
                                                    <div class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center ml-pp"
                                                        data-toggle="tooltip" title=""
                                                        data-original-title="3 Bedroom">
                                                        <i class="fa-solid fa-bed text-blue mr-2"></i>3 Bedroom
                                                    </div>
                                                </div>
                                                <div class="col-6 ">
                                                    <div class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center ml-pp"
                                                        data-toggle="tooltip" title=""
                                                        data-original-title="3 Bathrooms">
                                                        <i class="fa-solid fa-shower text-blue mr-2"></i> 3 Bathroom
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="list-inline-item text-gray font-weight-500 fs-12 d-flex align-items-center ml-pp"
                                                        data-toggle="tooltip" title=""
                                                        data-original-title="Size">
                                                        <div class="list-inline fa-sq">
                                                            <i
                                                                class="fa-solid fa-up-right-and-down-left-from-center text-blue mr-2"></i>
                                                            2000 Sq.Ft
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="card-footer bg-transparent d-flex justify-content-between align-items-center py-3">
                                            <p class="fs-price mb-0">$1.250.000</p>
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item">
                                                    <a href="#"
                                                        class="tooltip-icon border rounded-circle d-inline-flex align-items-center justify-content-center  bg-accent border-accent"
                                                        data-toggle="tooltip" title="" tabindex="0"
                                                        data-original-title="Wishlist"><i
                                                            class="fa-regular fa-heart"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#"
                                                        class="tooltip-icon border rounded-circle d-inline-flex align-items-center justify-content-center text-body hover-secondary bg-hover-accent border-hover-accent"
                                                        data-toggle="tooltip" title="" tabindex="0"
                                                        data-original-title="Compare"><i
                                                            class="fas fa-exchange-alt"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class=" slick-slide-box slick-active d-flex justify-content-between"
                                    style="width: 400px;" tabindex="0" data-slick-index="5" aria-hidden="false">
                                    <div class="card shadow-hover-2 mr-2">
                                        <div class="hover-change-image bg-hover-overlay rounded-lg card-img-pp-top">
                                            <img src="{{ asset('/assets/images/properties-6.jpg') }}"
                                                alt="Affordable Urban House">
                                            <div class="card-img-pp-overlay p-2 d-flex flex-column">
                                                <div>
                                                    <span class="badge-pp mr-2 badge-pp-primary">for Sale</span>
                                                </div>
                                                <ul class="list-inline mb-0 mt-auto hover-image">
                                                    <li class="list-inline-item mr-2" data-toggle="tooltip"
                                                        title="" data-original-title="9 Images">
                                                        <a href="#" class="text-white hover-primary"
                                                            tabindex="0">
                                                            <i class="far fa-images"></i><span class="pl-1">9</span>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item" data-toggle="tooltip" title=""
                                                        data-original-title="2 Video">
                                                        <a href="#" class="text-white hover-primary"
                                                            tabindex="0">
                                                            <i class="far fa-play-circle"></i><span
                                                                class="pl-1">2</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body pt-3">
                                            <h2 class="card-title fs-14 lh-2 mb-0"><a href="#"
                                                    class="text-dark hover-primary" tabindex="0">Affordable Urban
                                                    House</a></h2>
                                            <p class="card-text font-weight-500 text-gray-light mb-2">1421 San Pedro St,
                                                Los Angeles</p>
                                            <div class="row no-gutters">
                                                <div class="col-6 ">
                                                    <div class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center ml-pp"
                                                        data-toggle="tooltip" title=""
                                                        data-original-title="3 Bedroom">
                                                        <i class="fa-solid fa-bed text-blue mr-2"></i>3 Bedroom
                                                    </div>
                                                </div>
                                                <div class="col-6 ">
                                                    <div class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center ml-pp"
                                                        data-toggle="tooltip" title=""
                                                        data-original-title="3 Bathrooms">
                                                        <i class="fa-solid fa-shower text-blue mr-2"></i> 3 Bathroom
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="list-inline-item text-gray font-weight-500 fs-12 d-flex align-items-center ml-pp"
                                                        data-toggle="tooltip" title=""
                                                        data-original-title="Size">
                                                        <div class="list-inline fa-sq">
                                                            <i
                                                                class="fa-solid fa-up-right-and-down-left-from-center text-blue mr-2"></i>
                                                            2000 Sq.Ft
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="card-footer bg-transparent d-flex justify-content-between align-items-center py-3">
                                            <p class="fs-price mb-0">$1.250.000</p>
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item">
                                                    <a href="#"
                                                        class="tooltip-icon border rounded-circle d-inline-flex align-items-center justify-content-center  bg-accent border-accent"
                                                        data-toggle="tooltip" title="" tabindex="0"
                                                        data-original-title="Wishlist"><i
                                                            class="fa-regular fa-heart"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#"
                                                        class="tooltip-icon border rounded-circle d-inline-flex align-items-center justify-content-center text-body hover-secondary bg-hover-accent border-hover-accent"
                                                        data-toggle="tooltip" title="" tabindex="0"
                                                        data-original-title="Compare"><i
                                                            class="fas fa-exchange-alt"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="d-flex bottom-bar-action bottom-bar-action-01 con-t bg-gray-01 align-items-center position-fixed fixed-bottom d-sm-none"
            style="">
            <div class="media align-items-center">
                <img class="img-angent" src="{{ asset('/assets/images/agent-3.png') }}" alt="Irene Wallace"
                    class="mr-4 rounded-circle">
                <div class="media-body">
                    <a href="#" class="d-block text-dark fs-15 font-weight-500 lh-15">Irene Wallace</a>
                    <span class="fs-13 lh-2">Sales Excutive</span>
                </div>
            </div>
            <div class="ml-auto">

                <ul class="list-inline mb-0 fs-22 pl-2">

                    <li class="list-inline-item mr-2 ml-2 mb-0">
                        <a href="https://line.me/R/ti/p/@Luvdrive?from=page" target="_blank">
                            <i class="fa-brands fa-line text-success"></i>
                        </a>
                    </li>


                    <li class="list-inline-item mr-2 ml-2 mb-0">
                        <a href="tel:091-545-3939" target="_blank">
                            <i class="fa-solid fa-phone text-blue"></i>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </main>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
@endsection
