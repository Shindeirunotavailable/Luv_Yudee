    {{-- side-bar --}}
    <ul class="list-group  list-sidebar-style mb-30 box-shadow">
        <li class="list-group-item">
            <h6 class="font-weight-600">{{ GoogleTranslate::trans('ค้นหาบ้านของคุณ', $locale) }}</h6>
            <div class="search_area">
                <input type="text" class="form-control form-control-text " placeholder="{{ GoogleTranslate::trans('คุณกำลังมองหาอะไรอยู่?', $locale) }}"><span>
                <i class="fa-solid fa-magnifying-glass"></i></span>
            </div>
        </li>

        <li class="list-group-item">
            <h6 class="font-weight-600">{{ GoogleTranslate::trans('สถานะการขาย', $locale) }}</h6>
            <div class="radio-element">

                <div class="form-check">
                    <input class="form-check-input radio-style" type="radio" name="exampleRadios" id="exampleRadios1" value="option1"
                        checked>
                    <label class="form-check-label font-style" for="exampleRadios1">
                        {{ GoogleTranslate::trans('ทั้งหมด', $locale) }}
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input radio-style" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    <label class="form-check-label font-style" for="exampleRadios2">
                        {{ GoogleTranslate::trans('ซื้อ', $locale) }}
                    </label>
                </div>
                <div class="form-check ">
                    <input class="form-check-input radio-style" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                    <label class="form-check-label font-style" for="exampleRadios3">
                        {{ GoogleTranslate::trans('เช่า', $locale) }}
                    </label>
                </div>
            </div>
        </li>

        <li class="list-group-item">
            <h6 class="font-weight-600">{{ GoogleTranslate::trans('ประเภทอสังหาริมทรัพย์', $locale) }}</h6>

            <div class="form-check  custom-checkbox">
                <input class="form-check-input  checkboox-all custom-control-input " type="checkbox" value="" id="All"  onclick="selectAll()">
                <label class="form-check-label custom-control-label font-style" for="All">
                    {{ GoogleTranslate::trans('ทั้งหมด', $locale) }}
                </label>
            </div>
            <div class="form-check custom-checkbox">
                <input class="form-check-input  checkboox-all custom-control-input " type="checkbox" value="" id="Houses" onclick="checkAll()">
                <label class="form-check-label custom-control-label font-style" for="Houses">
                    {{ GoogleTranslate::trans('บ้าน', $locale) }}
                </label>
            </div>
            <div class="form-check custom-checkbox">
                <input class="form-check-input checkboox-all custom-control-input " type="checkbox" value="" id="Apartments" onclick="checkAll()">
                <label class="form-check-label custom-control-label font-style" for="Apartments">
                    {{ GoogleTranslate::trans('อพาร์ตเมนต์', $locale) }}
                </label>
            </div>
            <div class="form-check  custom-checkbox">
                <input class="form-check-input checkboox-all custom-control-input " type="checkbox" value="" id="Office" onclick="checkAll()">
                <label class="form-check-label custom-control-label font-style" for="Office">
                    {{ GoogleTranslate::trans('สำนักงาน', $locale) }}
                </label>
            </div>
            <div class="form-check custom-checkbox">
                <input class="form-check-input checkboox-all custom-control-input " type="checkbox" value="" id="Villa" onclick="checkAll()">
                <label class="form-check-label custom-control-label font-style" for="Villa">
                    {{ GoogleTranslate::trans('วิลล่า', $locale) }}
                </label>
            </div>

        </li>
        <li class="list-group-item">
            <h6 class="font-weight-600">{{ GoogleTranslate::trans('ช่วงราคา', $locale) }}</h6>

              <div class="row">
                <div class="col-12">
                    <div class="form-check  custom-checkbox">
                        <input class="form-check-input custom-control-input checkboox-price " type="checkbox" value="" id="averageAll" onclick="priceAll()" >
                        <label class="form-check-label custom-control-label font-style" for="averageAll">
                            {{ GoogleTranslate::trans('ทั้งหมด', $locale) }}
                        </label>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-check  custom-checkbox">
                        <input class="form-check-input custom-control-input checkboox-price" type="checkbox" value="" id="1Million" onclick="checkPrice()" >
                        <label class="form-check-label custom-control-label font-style" for="1Million">
                            ฿1,000,000
                        </label>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-check  custom-checkbox">
                        <input class="form-check-input custom-control-input checkboox-price" type="checkbox" value="" id="5Million"  onclick="checkPrice()" >
                        <label class="form-check-label custom-control-label font-style" for="5Million">
                            ฿1,000,001 - ฿5,000,000
                        </label>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-check  custom-checkbox">
                        <input class="form-check-input custom-control-input checkboox-price" type="checkbox" value="" id="10Million"  onclick="checkPrice()" >
                        <label class="form-check-label custom-control-label font-style" for="10Million">
                            ฿5,000,000 - ฿10,000,000
                        </label>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-check  custom-checkbox">
                        <input class="form-check-input custom-control-input checkboox-price" type="checkbox" value="" id="10MillionUp"  onclick="checkPrice()" >
                        <label class="form-check-label custom-control-label font-style" for="10MillionUp">
                            ฿10,000,001
                        </label>
                    </div>
                </div>
              </div>
        </li>
        <li class="list-group-item">
              <div class="form-group">
                <h6 class="font-weight-600">{{ GoogleTranslate::trans('ที่ตั้ง', $locale) }}</h6>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>{{ GoogleTranslate::trans('กรุงเทพ', $locale) }}</option>
                    <option>{{ GoogleTranslate::trans('ปทุมธานี', $locale) }}</option>
                    <option>{{ GoogleTranslate::trans('นนทบุรี', $locale) }}</option>
                    <option>{{ GoogleTranslate::trans('อยุธยา', $locale) }}</option>
                </select>
              </div>
        </li>

        <li class="list-group-item">
            <h6 class="font-weight-600">{{ GoogleTranslate::trans('ห้องนอน', $locale) }}</h6>
            <div class="d-flex justify-content-center">
                <div class="selection">
                    <input type="radio" id="any" name="Bedrooms" checked>
                    <label for="any">{{ GoogleTranslate::trans('เท่าใดก็ได้', $locale) }}</label>
                </div>
                <div class="selection">
                    <input type="radio" id="plus1" name="Bedrooms">
                    <label for="plus1">+1</label>
                </div>
                <div class="selection">
                    <input type="radio" id="plus2" name="Bedrooms">
                    <label for="plus2">+2</label>
                </div>
                <div class="selection">
                    <input type="radio" id="plus3" name="Bedrooms">
                    <label for="plus3">+3</label>
                </div>
                <div class="selection">
                    <input type="radio" id="plus4" name="Bedrooms">
                    <label for="plus4">+4</label>
                </div>
                <div class="selection">
                    <input type="radio" id="plus5" name="Bedrooms">
                    <label for="plus5">+5</label>
                </div>
            </div>
        </li>

        <li class="list-group-item">
            <h6 class="font-weight-600">{{ GoogleTranslate::trans('ห้องน้ำ', $locale) }}</h6>
            <div class="d-flex justify-content-center">
                <div class="selection">
                    <input type="radio" id="anyBathrooms" name="Bathrooms" checked>
                    <label for="anyBathrooms">{{ GoogleTranslate::trans('เท่าใดก็ได้', $locale) }}</label>
                </div>
                <div class="selection">
                    <input type="radio" id="plus1Bathrooms" name="Bathrooms">
                    <label for="plus1Bathrooms">+1</label>
                </div>
                <div class="selection">
                    <input type="radio" id="plus2Bathrooms" name="Bathrooms">
                    <label for="plus2Bathrooms">+2</label>
                </div>
                <div class="selection">
                    <input type="radio" id="plus3Bathrooms" name="Bathrooms">
                    <label for="plus3Bathrooms">+3</label>
                </div>
                <div class="selection">
                    <input type="radio" id="plus4Bathrooms" name="Bathrooms">
                    <label for="plus4Bathrooms">+4</label>
                </div>
                <div class="selection">
                    <input type="radio" id="plus5Bathrooms" name="Bathrooms">
                    <label for="plus5Bathrooms">+5</label>
                </div>
            </div>
        </li>

        <li class="list-group-item">

            <button type="submit"
            class="btn btn-primary afterButton rounded-pill w-100 "
            id="submitModal">
            <i class="fa-solid fa-magnifying-glass"></i> {{ GoogleTranslate::trans('ค้นหา', $locale) }}
            </button>

        </li>
        <li class="list-group-item">
            <div class="d-flex justify-content-between">

                <a href="javascript:void(0)">
                    <span class="fa fa-repeat"></span>
                    <u>{{ GoogleTranslate::trans('รีเซ็ตตัวกรองทั้งหมด', $locale) }}</u>
                </a>
                <a href="javascript:void(0)">
                    <span class="fa fa-star"></span>
                    <u>{{ GoogleTranslate::trans('บันทึกการค้นหา', $locale) }}</u>
                </a>

            </div>
        </li>

    </ul>
    {{-- end side-bar --}}

