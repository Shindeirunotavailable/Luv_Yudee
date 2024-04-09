


<div class="dashboard__main pl-d-0-md">
    <div class="dashboard__content property-page bg-f7">
        <div class="row align-items-center pb-d-40">
            <div class="col-lg-12">
                <div class="dashboard_title_area">
                    <h2 class="fw-600">Admin Profiles</h2>
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
                                    <div class="total_review d-sm-flex align-items-center justify-content-between mb-d-20 mt60">
                                        <h6 class="fw-600 fs-17 mb15">profiles</h6>
                                    </div>
                                </div>

                                @if (isset($data))
                                    @foreach ($data['profiles'] as $item)
                                        <div class="col-md-12 review-item">
                                            <div class="media border-top pt-7 pb-6 d-sm-flex d-block text-sm-left text-center">
                                                    @if(!empty($item->imageuser))
                                                        <img src="{{ $item->imageuser }}" alt="Danny Fox" class="review-icon mr-sm-8 mb-sm-0 img-fluid" style="width: 84px; height: 84px; object-fit: cover;">
                                                    @else
                                                        <img src="{{ asset('/assets/images/user2.jpg') }}" alt="Danny Fox" class=" review-icon mr-sm-8 mb-sm-0 img-fluid" style="width: 84px; height: 84px; object-fit: cover;">
                                                    @endif
                                            
                                                <div class="media-body">
                                                    <div class="row mb-1 align-items-center">
                                                        <div class="col-sm-6 mb-2 mb-sm-0  ">
                                                            <h4 class="fw-600 mb-0 text-heading fs-14">{{$item->name}} {{$item->lastname}}</h4>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-1 align-items-center">
                                                        <div class="col-sm-8 mb-2 mb-sm-0  ">
                                                            <label class="pl-3 font-700" >Phone number : {{$item->phone}}</label><br>
                                                            <label class="pl-3 font-700" >mobile number : {{$item->mobile}}</label><br>
                                                            <label class="pl-3 font-700">E-mail : {{$item->email}}</label>
                                                        </div>
                                                        
                                                        <div class="col-sm-4">
                                                            <div class="d-flex justify-content-sm-end justify-content-center mb-0">
                                                                <!-- ปุ่มรายละเอียด -->
                                                                {{-- <a href="{{route('deleteporfile',['create_by'=>$item->create_by])}}" id="approve_review_{{$item->create_by}}" class="btn btn-info btn-sm mr-2 text-white color-yuudee"> --}}
                                                                    <a  class="btn btn-info btn-sm mr-2 text-white color-yuudee"  data-toggle="modal" data-target="#staticBackdrop">
                                                                    <i class="fa-solid fa-list"></i> รายละเอียด</a>
                                                                <!-- เพิ่มปุ่มลบ -->
                                                                <a href="{{route('deleteporfile',['create_by'=>$item->create_by])}}" class="btn btn-danger btn-sm text-white fa-solid fa-trash fs-20 trash-deletes"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                                {{-- {{$data['pp_reviews']->links()}} --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('dashboard.footerdashboard')
</div>



    {{-- model --}}
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content modal-xl">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Profile User</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body modal-xl">
                @if (isset($data))
                    @foreach ($data['profiles'] as $item)
                        <div class="pb-10">
                            <div class="card cardBox">
                                <div class="card-body p-3">
                                    <div class="text-left">
                                        <h4 class="mb-3 pt-3 font-weight-bold">Contact information</h4>
                                        <label>Lorem ipsum dolor sit amet, consectetur adipiscing elit</label>
                                    </div>
                                    <div class="form-group pt-10">
                                        <label>First name</label>
                                        <input type="text" class="form-control"  placeholder="Example input placeholder" id="title" name="title" value={{$item->name}}>
                                    </div>
                                    <div class="form-group pt-10">
                                        <label>Last name</label>
                                        <input type="text" class="form-control"  placeholder="Example input placeholder" id="title" name="title" value={{$item->lastname}}>
                                    </div>
                                    <div class="form-group pt-10">
                                        <label>phone</label>
                                        <input type="text" class="form-control"  placeholder="Example input placeholder" id="title" name="title" value={{$item->phone}}>
                                    </div>
                                    <div class="form-group pt-10">
                                        <label>mobile</label>
                                        <input type="text" class="form-control" placeholder="Example input placeholder" id="title" name="title" value={{$item->mobile}}>
                                    </div>
                                    <div class="form-group pt-10">
                                        <label>email</label>
                                        <input type="text" class="form-control" placeholder="Example input placeholder" id="title" name="title" value={{$item->email}}>
                                    </div>
                                    <div class="form-group pt-10">
                                        <label>skype</label>
                                        <input type="text" class="form-control" placeholder="Example input placeholder" id="title" name="title" value={{$item->skype}}>
                                    </div>
                                </div>
                            </div>                 
                        </div>      
                        <div class="pb-10">
                            <div class="card cardBox">
                                <div class="card-body p-3">
                                    <div class="text-left">
                                        <h4 class="mb-3 pt-3 font-weight-bold">User detail</h4>
                                        <label>Lorem ipsum dolor sit amet, consectetur adipiscing elit</label>
                                    </div>
                                    <div class="form-group pt-10">
                                        <label>Facebook Url</label>
                                        <input type="text" class="form-control"  placeholder="Example input placeholder" id="title" name="title" value={{$item->facebook}}>
                                    </div>
                                    <div class="form-group pt-10">
                                        <label>Pinterest Url</label>
                                        <input type="text" class="form-control"  placeholder="Example input placeholder" id="title" name="title" value={{$item->pinterest}}>
                                    </div>
                                    <div class="form-group pt-10">
                                        <label>Instagram Url</label>
                                        <input type="text" class="form-control"  placeholder="Example input placeholder" id="title" name="title" value={{$item->instagram}}>
                                    </div>
                                    <div class="form-group pt-10">
                                        <label>Twitter Url</label>
                                        <input type="text" class="form-control"  placeholder="Example input placeholder" id="title" name="title" value={{$item->twitter}}>
                                    </div>
                                    <div class="form-group pt-10">
                                        <label>Linkedin Url</label>
                                        <input type="text" class="form-control"  placeholder="Example input placeholder" id="title" name="title" value={{$item->linkedin}}>
                                    </div>
                                    <div class="form-group pt-10">
                                        <label>Website Url</label>
                                        <input type="text" class="form-control"  placeholder="Example input placeholder" id="title" name="title" value={{$item->website}}>
                                    </div>
                                </div>
                            </div>                 
                        </div>   
                        <div class="pb-10">
                            <div class="card cardBox">
                                <div class="card-body p-3">
                                    <div class="text-left">
                                        <h4 class="mb-3 pt-3 font-weight-bold">User detail</h4>
                                        <label>Lorem ipsum dolor sit amet, consectetur adipiscing elit</label>
                                    </div>
                                    <div class="form-group pt-10">
                                        <label>Title / Posittion</label>
                                        <input type="text" class="form-control"  placeholder="Example input placeholder" id="title" name="title" value={{$item->title}}>
                                    </div>
                                </div>
                            </div>                 
                        </div>   
                    @endforeach
                @endif
            </div>
          </div>
        </div>
    </div>