

<?php $locale = session()->get('locale', 'th'); ?>

<div class="dashboard__main pl-d-0-md">
    <div class="dashboard__content property-page bg-f7">
        <div class="row align-items-center pb-d-40">
            <div class="col-lg-12">
                <div class="dashboard_title_area">
                    <h2 class="fw-600">{{ GoogleTranslate::trans('จัดการข้อมูลผู้ใช้งาน', $locale) }}</h2>
                    <p class="text-ap">{{ GoogleTranslate::trans('บริหารจัดการข้อมูลผู้ใช้งาน', $locale) }}</p>
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
                                        <h5 class="font-weight-600">{{ GoogleTranslate::trans('โปรไฟล์', $locale) }}</h5>
                                        <div class="search_area">
                                            <input type="text" class="form-control form-control-text" id="searchUser" placeholder="search User"><span>
                                            <i class="fa-solid fa-magnifying-glass"></i> </span>
                                        </div>                                    
                                    </div>
                                </div>
                                
                                    <div class="col-12 col-lg-12">
                                        <div class="table-wrap">
                                            <table class="table">
                                                <thead class="color-yuudee">
                                                <tr>
                                                    <th class="text-white">โปรไฟล์</th>
                                                    <th class="text-left text-white">ชื่อ นามสุกล</th>
                                                    <th class="text-left text-white">เบอร์มือถือ</th>
                                                    <th class="text-left text-white">เบอร์บ้าน</th>
                                                    <th class="text-left text-white">Email</th>
                                                    <th>&nbsp;</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @if (isset($data))
                                                @foreach ($data['profiles'] as $item)
                                                <tr class="alert" role="alert">
                                                    <th scope="row">
                                                        @if(!empty($item->imageuser))
                                                            <img src="{{ $item->imageuser }}" alt="Danny Fox" class="review-icon mr-sm-8 mb-sm-0 img-fluid" style="width: 84px; height: 84px; object-fit: cover;">
                                                        @else
                                                            <img src="{{ asset('/assets/images/user2.jpg') }}" alt="Danny Fox" class=" review-icon mr-sm-8 mb-sm-0 img-fluid" style="width: 84px; height: 84px; object-fit: cover;">
                                                        @endif
                                                    </th>
                                                    <td>{{$item->name}} {{$item->lastname}}</td>
                                                    <td>{{$item->phone}}</td>
                                                    <td>{{$item->mobile}}</td>
                                                    <td>{{$item->email}}</td>
                                                    <td>
                                                        <div class="d-flex justify-content-sm-end justify-content-center mb-0">
                                                            <a class="btn btn-info btn-sm mr-2 text-white color-yuudee" data-toggle="modal" data-target="#staticBackdrop">
                                                                <i class="fa-solid fa-list"></i>  {{ GoogleTranslate::trans('รายละเอียด', $locale) }}
                                                            </a>
                                                            <a href="{{route('deleteporfile',['create_by'=>$item->create_by])}}" class="btn btn-danger btn-sm text-white fa-solid fa-trash fs-20 trash-deletes"></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                {{-- @if (isset($data))
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
                                                            <h4 class="fw-600 mb-0 text-heading fs-14">{{$item->name}} {{$item->lastname}} </h4>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-1 align-items-center">
                                                        {{ GoogleTranslate::trans('', $locale) }}
                                                        <div class="col-sm-8 mb-2 mb-sm-0  ">
                                                            <label class="pl-3 font-700" >{{ GoogleTranslate::trans('เบอร์มือถือ', $locale) }} : {{$item->phone}}</label><br>
                                                            <label class="pl-3 font-700" >{{ GoogleTranslate::trans('เบอร์บ้าน', $locale) }} : {{$item->mobile}}</label><br>
                                                            <label class="pl-3 font-700">{{ GoogleTranslate::trans('อีเมล์', $locale) }} : {{$item->email}}</label>
                                                        </div>
                                                        
                                                        <div class="col-sm-4">
                                                            <div class="d-flex justify-content-sm-end justify-content-center mb-0">
                                                                <a class="btn btn-info btn-sm mr-2 text-white color-yuudee" data-toggle="modal" data-target="#staticBackdrop">
                                                                    <i class="fa-solid fa-list"></i>  {{ GoogleTranslate::trans('รายละเอียด', $locale) }}
                                                                </a>
                                                                <a href="{{route('deleteporfile',['create_by'=>$item->create_by])}}" class="btn btn-danger btn-sm text-white fa-solid fa-trash fs-20 trash-deletes"></a>
                                                            </div>
                                                        </div>
                                                    </div>   
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif --}}
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
              <h5 class="modal-title" id="staticBackdropLabel">{{ GoogleTranslate::trans('โปรไฟล์ผู้ใช้งาน', $locale) }}</h5>

              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body modal-xl">
                @if (isset($data))
                @foreach ($data['profiles']->unique('id_profiles') as $item)
                        <div class="pb-10">
                            <div class="card cardBox">
                                <div class="card-body p-3">
                                    <div class="text-left">
                                        <h4 class="mb-3 pt-3 font-weight-bold">{{ GoogleTranslate::trans('ช่องทางการติดต่อ', $locale) }}</h4>

                                        <label>{{ GoogleTranslate::trans('รายละเอียดติดต่อผู้ใช้งาน', $locale) }}</label>
                                    </div>
                                    <div class="form-group pt-10">
                                        <label>{{ GoogleTranslate::trans('ชื่อ', $locale) }}</label>
                                        <input type="text" class="form-control"  placeholder="Example input placeholder" id="title" name="title" value={{$item->name}}>
                                    </div>
                                    <div class="form-group pt-10">
                                        <label>{{ GoogleTranslate::trans('นามสุกล', $locale) }}</label>
                                        <input type="text" class="form-control"  placeholder="Example input placeholder" id="title" name="title" value={{$item->lastname}}>
                                    </div>
                                    <div class="form-group pt-10">
                                        <label>{{ GoogleTranslate::trans('เบอร์มือถือ', $locale) }}</label>
                                        <input type="text" class="form-control"  placeholder="Example input placeholder" id="title" name="title" value={{$item->phone}}>
                                    </div>
                                    <div class="form-group pt-10">
                                        <label>{{ GoogleTranslate::trans('เบอร์บ้าน', $locale) }}</label>
                                        <input type="text" class="form-control" placeholder="Example input placeholder" id="title" name="title" value={{$item->mobile}}>
                                    </div>
                                    <div class="form-group pt-10">
                                        <label>{{ GoogleTranslate::trans('อีเมล์', $locale) }}</label>
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
                                        <h4 class="mb-3 pt-3 font-weight-bold">{{ GoogleTranslate::trans('รายละเอียดผู้ใช้งาน', $locale) }}</h4>
                                        <label>{{ GoogleTranslate::trans('รายละเอียดติดต่อผ่านช่องทางโซเชียล', $locale) }}</label>
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


    

<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script>
$('.changeLanguage').change(function(event){
    var url = "{{ route('google.translate.change') }}";
    window.location.href = url+"?lang="+$(this).val()
})
</script>