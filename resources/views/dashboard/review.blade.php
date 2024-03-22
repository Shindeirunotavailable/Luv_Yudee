<div class="dashboard__main pl-d-0-md">
    <div class="dashboard__content property-page bg-f7">
        <div class="row align-items-center pb-d-40">
            <div class="col-lg-12">
                <div class="dashboard_title_area">
                    <h2 class="fw-600">Reviews</h2>
                    <p class="text-ap">We are glad to see you again!</p>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-xl-12">
                <div class="ps-widget bg-white bdrs-12 default-box-shadow2 p-d-30 mb-6 overflow-hidden position-relative">
                    <div class="product_single_content mb-8">
                        <div class="mbp_pagination_comments">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div
                                        class="total_review d-sm-flex align-items-center justify-content-between mb-d-20 mt60">
                                        <h6 class="fw-600 fs-17 mb15">reviews</h6>
                                        <div
                                            class="page_control_shorting d-flex align-items-center justify-content-center justify-content-sm-end">
                                            <div class="pcs_dropdown mb15 d-flex align-items-center"><span
                                                    style="min-width: 60px;">Sort by</span><select class="form-select">
                                                    <option>Newest</option>
                                                    <option>Best Seller</option>
                                                    <option>Best Match</option>
                                                    <option>Price Low</option>
                                                    <option>Price High</option>
                                                </select></div>
                                        </div>
                                    </div>
                                </div>

                                @if (isset($data))
                                @foreach ($data['pp_reviews'] as $item)
                                <div class="col-md-12">
                                    <div class="media border-top pt-7 pb-6 d-sm-flex d-block text-sm-left text-center">
                                        <img src="{{ asset('/assets/images/review-1.jpg') }}" alt="Danny Fox"
                                            class=" review-icon mr-sm-8 mb-sm-0 img-fluid"
                                            style="width: 84px; height: 84px; object-fit: cover;">
                                        <div class="media-body">
                                            <div class="row mb-1 align-items-center">
                                                <div class="col-sm-6 mb-2 mb-sm-0  ">
                                                    <h4 class="fw-600 mb-0 text-heading fs-14">{{$item->review_name}}</h4>
                                                </div>

                                                <div class="col-sm-6">
                                                    <ul class="list-inline d-flex justify-content-sm-end justify-content-center mb-0">
                                                        <li class="list-inline-item mr-0">
                                                                @php
                                                                    $star = $item->review_star;
                                                                @endphp

                                                                @for ($i = 1; $i <= 5; $i++)
                                                                @if ($i <= $star)
                                                                    <span class="fa fa-star text-warning"></span>
                                                                @else
                                                                    <span class="fa fa-star text-secondary"></span>
                                                                @endif
                                                                @endfor
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                                <p class="mb-3 m-mb-3 ">{{$item->review_content}}</p>
                                                <div class="d-flex justify-content-sm-start justify-content-center">
                                                    <p class="mb-0 text-muted fs-13 lh-1 ">{{$item->create_datetime}}</p>
                                                    <a href="#"
                                                        class="mb-0 text-heading border-left border-dark hover-primary lh-1 ml-2 pl-2">Reply</a>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @endif

                                {{-- <div class="col-md-12">
                                    <div class="media border-top pt-7 pb-6 d-sm-flex d-block text-sm-left text-center ">
                                        <img src="{{ asset('/assets/images/review-2.jpg') }}"
                                            alt="Viola Austin" class=" review-icon mr-sm-8 mb-sm-0 img-fluid"
                                            style="width: 84px; height: 84px; object-fit: cover;">
                                        <div class="media-body">
                                            <div class="row mb-1 align-item-center">
                                                <div class="col-sm-6 mb-2 mb-sm-0 pl-0">
                                                    <h4 class="fw-600 mb-0 text-heading fs-14">Viola Austin</h4>
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

                                                <p class="mb-3 m-mb-3">Very good and fast support during the week. Thanks for
                                                    always keeping your WordPress themes up to date. Your level of support
                                                    and
                                                    dedication
                                                    is second to none.
                                                </p>
                                                <div class="d-flex justify-content-center justify-content-sm-start">
                                                    <p class="mb-0 text-muted fs-13 lh-1"> 02 Dec 2020 at 2:40 </p>
                                                    <a href="#"
                                                        class="mb-0 text-heading border-left border-dark lh-1 ml-2 pl-2">Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="media border-top pt-7 pb-6 d-sm-flex d-block text-sm-left text-center">
                                        <img src="{{ asset('/assets/images/review-3.jpg') }}"
                                            alt="Nettie Singleton" class=" review-icon mr-sm-8 mb-sm-0 img-fluid"
                                            style="width: 84px; height: 84px; object-fit: cover;">
                                        <div class="media-body">
                                            <div class="row mb-1 align-item-center">
                                                <div class="col-sm-6 mb-2 mb-sm-0 pl-0">
                                                    <h4 class="fw-600 mb-0 text-heading fs-14">Nettie Singleton</h4>
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

                                                <p class="mb-3 m-mb-3">Very good and fast support during the week. Thanks for
                                                    always keeping your WordPress themes up to date. Your level of support
                                                    and
                                                    dedication
                                                    is second to none.
                                                </p>
                                                <div class="d-flex justify-content-center justify-content-sm-start">
                                                    <p class="mb-0 text-muted fs-13 lh-1"> 02 Dec 2020 at 2:40 </p>
                                                    <a href="#"
                                                        class="mb-0 text-heading border-left border-dark lh-1 ml-2 pl-2">Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="media border-top pt-7 pb-6 d-sm-flex d-block text-sm-left text-center">
                                        <img src="{{ asset('/assets/images/review-1.jpg') }}"
                                            alt="Vernon Fisher" class=" review-icon mr-sm-8 mb-sm-0 img-fluid"
                                            style="width: 84px; height: 84px; object-fit: cover;">
                                        <div class="media-body">
                                            <div class="row mb-1 align-item-center">
                                                <div class="col-sm-6 mb-2 mb-sm-0 pl-0">
                                                    <h4 class="fw-600 mb-0 text-heading fs-14">Vernon Fisher</h4>
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
                                                            <span class="align-item-right text-border">
                                                                <i class="fas fa-star"></i>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <p class="mb-3 m-mb-3">Very good and fast support during the week. Thanks for
                                                    always keeping your WordPress themes up to date. Your level of support
                                                    and
                                                    dedication
                                                    is second to none.
                                                </p>
                                                <div class="d-flex justify-content-center justify-content-sm-start">
                                                    <p class="mb-0 text-muted fs-13 lh-1"> 02 Dec 2020 at 2:40 </p>
                                                    <a href="#"
                                                        class="mb-0 text-heading border-left border-dark lh-1 ml-2 pl-2">Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 ">
                                    <div class="media border-top pt-7 pb-6 d-sm-flex d-block text-sm-left text-center">
                                        <img src="{{ asset('/assets/images/review-4.png') }}"
                                            alt="Harry Iglesias" class=" review-icon mr-sm-8 mb-sm-0 img-fluid"
                                            style="width: 84px; height: 84px; object-fit: cover;">
                                        <div class="media-body">
                                            <div class="row mb-1 align-item-center">
                                                <div class="col-sm-6 mb-2 mb-sm-0 pl-0">
                                                    <h4 class="fw-600 mb-0 text-heading fs-14">Harry Iglesias</h4>
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
                                                            <span class="align-item-right text-border">
                                                                <i class="fas fa-star"></i>
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <p class="mb-3 m-mb-3">Very good and fast support during the week. Thanks for
                                                    always keeping your WordPress themes up to date. Your level of support
                                                    and
                                                    dedication
                                                    is second to none.
                                                </p>
                                                <div class="d-flex justify-content-center justify-content-sm-start">
                                                    <p class="mb-0 text-muted fs-13 lh-1"> 02 Dec 2020 at 2:40 </p>
                                                    <a href="#"
                                                        class="mb-0 text-heading border-left border-dark lh-1 ml-2 pl-2">Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}






                                <div class="col-md-12">
                                    {{-- เอา btn-t-white ออก --}}
                                    <div class="position-relative bdrb1 pt-d-30 pb20"><a href="#"
                                            class="ud-btn afterButton btn-t-white">Show all 134 reviews

                                            <i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>

                    {{-- <div class="mt30">
                        <div class="mbp_pagination text-center">
                            <ul class="page_navigation">

                                <li class="page-item"><span class="page-link pointer" href="#"><span
                                            class="fas fa-angle-left"></span></span></li>

                                <li class="page-item"><span class="page-link pointer" href="#">1</span></li>
                                <li class="page-item active"><span class="page-link pointer" href="#">2</span>
                                </li>
                                <li class="page-item"><span class="page-link pointer" href="#">3</span></li>
                                <li class="page-item"><span class="page-link pointer" href="#">4</span></li>
                                <li class="page-item"><span class="page-link pointer" href="#">5</span></li>


                                <li class="page-item pointer"><span class="page-link" href="#"><span
                                            class="fas fa-angle-right"></span></span></li>
                            </ul>
                            <p class="mt10 pagination_page_count text-center">1-8 of 300+ property available</p>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="footer100vh"></div>
</div>

