<div class="dashboard__main pl-d-0-md">
    <div class="dashboard__content property-page bg-f7">
        <div class="row ">
            <div class="col-xl-12">
                <div class="ps-widget bg-white bdrs-12 default-box-shadow2 p-d-30 mb-6 overflow-hidden position-relative">
                    <div class="product_single_content mb-8">
                        <div class="mbp_pagination_comments">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div
                                        class="total_review d-sm-flex align-items-center justify-content-between mb-d-20 mt60">
                                        <h6 class="fw-600 fs-17 mb15">Reviews</h6>
                                    </div>
                                </div>
                                @if (isset($data))
                                    @foreach ($data['pp_reviews']->where('create_by', Auth::id())->unique('id_review')  as $review)
                                        <div class="col-md-12 review-item">
                                            <div class="media border-top pt-7 pb-6 d-sm-flex d-block text-sm-left text-center">
                                                @if (isset($data))
                                                    @foreach ($data['profiles']->where('create_by', Auth::id())->unique('id_profiles')  as $item)
                                                        @if(!empty($item->imageuser))
                                                            <img src="{{ $item->imageuser }}" alt="Danny Fox" class="review-icon mr-sm-8 mb-sm-0 img-fluid" style="width: 84px; height: 84px; object-fit: cover;">
                                                        @else
                                                            <img src="{{ asset('/assets/images/user2.jpg') }}" alt="Danny Fox" class=" review-icon mr-sm-8 mb-sm-0 img-fluid" style="width: 84px; height: 84px; object-fit: cover;">
                                                        @endif
                                                    @endforeach
                                                @endif
                                                <div class="media-body">
                                                    <div class="row mb-1 align-items-center">
                                                        <div class="col-sm-6 mb-2 mb-sm-0  ">
                                                            <h4 class="fw-600 mb-0 text-heading fs-14">{{$review->review_name}}</h4>
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <ul class="list-inline d-flex justify-content-sm-end justify-content-center mb-0">
                                                                <li class="list-inline-item mr-0">
                                                                        @php
                                                                            $star = $review->review_star;
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
                                                    <div class="row mb-1 align-items-center">
                                                        <div class="col-sm-8 mb-2 mb-sm-0  ">
                                                            <p class="mb-3 m-mb-3 ">{{$review->review_content}}</p>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="d-flex justify-content-sm-end justify-content-center mb-0">
                                                                <a href="{{route('deletereview',['id_review'=>$review->id_review])}}" class="btn btn-danger btn-sm text-white fa-solid fa-trash fs-20 trash-deletes"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        <div class="d-flex justify-content-sm-start justify-content-center">
                                                            <p class="mb-0 text-muted fs-13 lh-1 ">{{$review->create_datetime}}</p>
                                                        </div>

                                                </div>
                                            </div>
                                        </div>
                                        @if (isset($data))
                                        @foreach ($data['pp_reply']->where('id_review', $review->id_review) as $reply)
                                            <div class="col-md-11 review-item ml-auto">
                                                <div class="media border-top pt-7 pb-6 d-sm-flex d-block text-sm-left text-center">
                                                    @if (isset($data))
                                                        @foreach ($data['profiles']->where('create_by', $reply->create_by)->unique('id_profiles') as $item)
                                                            @if (!empty($item->imageuser))
                                                                <img src="{{ $item->imageuser }}" alt="{{ $item->imageuser }}" class="review-icon mr-sm-8 mb-sm-0 img-fluid" style="width: 84px; height: 84px; object-fit: cover;">
                                                            @else
                                                                <img src="{{ asset('/assets/images/user2.jpg') }}" alt="{{ $item->imageuser }}" class="review-icon mr-sm-8 mb-sm-0 img-fluid" style="width: 84px; height: 84px; object-fit: cover;">
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                    <div class="media-body">
                                                        <div class="row mb-1 align-items-center">
                                                            <div class="col-sm-6 mb-2 mb-sm-0">
                                                                <h4 class="fw-600 mb-0 text-heading fs-14">{{$reply->reply_name}}</h4>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-1 align-items-center">
                                                            <div class="col-sm-8 mb-2 mb-sm-0">
                                                                <p class="mb-3 m-mb-3 ">{{$reply->reply_content}}</p>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="d-flex justify-content-sm-end justify-content-center mb-0">
                                                                    @if ($reply->create_by == Auth::id())
                                                                        <a href="{{ route('deletereply', ['id_reply' => $reply->id_reply]) }}" class="btn btn-danger btn-sm text-white fa-solid fa-trash fs-20 trash-deletes"></a>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-sm-start justify-content-center">
                                                            <p class="mb-0 text-muted fs-13 lh-1 ">{{$reply->create_datetime}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif

                                    @endforeach
                                @endif

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('dashboard.footerdashboard')
</div>

