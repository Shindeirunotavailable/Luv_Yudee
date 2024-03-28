


<div class="dashboard__main pl-d-0-md">
    <div class="dashboard__content property-page bg-f7">
        <div class="row align-items-center pb-d-40">
            <div class="col-lg-12">
                <div class="dashboard_title_area">
                    <h2 class="fw-600">Profile</h2>
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
                                @if (isset($data))
                                    @foreach ($data['profiles'] as $item)
                                        <div class="col-md-12">
                                            <div class="media border-top pt-7 pb-6 d-sm-flex d-block text-sm-left text-center">
                                                <img src="{{ asset('/assets/images/review-1.jpg') }}" alt="Danny Fox"
                                                    class=" review-icon mr-sm-8 mb-sm-0 img-fluid"
                                                    style="width: 84px; height: 84px; object-fit: cover;">
                                                <div class="media-body">
                                                    <div class="row mb-1 align-items-center">
                                                        <div class="col-sm-6 mb-2 mb-sm-0  ">
                                                            <h4 class="fw-600 mb-0 text-heading fs-14">{{$item->name}}</h4>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-1 align-items-center">
                                                        <div class="col-sm-8 mb-2 mb-sm-0  ">
                                                            <p class="mb-3 m-mb-3 ">{{$item->lastname}}</p>
                                                        </div>
                                                    </div>
                                                        {{-- <p class="mb-3 m-mb-3 ">{{$item->review_content}}</p> --}}
                                                        <div class="d-flex justify-content-sm-start justify-content-center">
                                                            <p class="mb-0 text-muted fs-13 lh-1 ">{{$item->phone}}</p>
                                                            {{-- <a href="#" class="mb-0 text-heading border-left border-dark hover-primary lh-1 ml-2 pl-2">Reply</a> --}}
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                                {{-- {{$data['profiles']->links()}} --}}
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('dashboard.footerdashboard')
</div>

