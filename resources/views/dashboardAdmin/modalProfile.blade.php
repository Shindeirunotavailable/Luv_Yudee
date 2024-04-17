
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