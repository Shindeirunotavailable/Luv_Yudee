
<div class="list-sidebar-style1" id="test">

    {{-- side-bar --}}
    <ul class="list-group list-group-flush">
        <li class="list-group-item">
            <div class="d-flex align-items-center pt-2">
                <h6 class="font-weight-600">ค้นหาบ้านของคุณ</h6>
                <a href="javascript:void(0)" class="closebtn" onclick="toggleSidebar()">&times;</a>
            </div>

            <div class="search_area">
                <input type="text" class="form-control form-control-text "
                    placeholder="คุณกำลังมองหาอะไรอยู่"><span>
                    <i class="fa-solid fa-magnifying-glass"></i></span>
            </div>
        </li>

        <li class="list-group-item">
            <h6 class="font-weight-600">สถานะการขาย</h6>
            <div class="radio-element">

                <div class="form-check">
                    <input class="form-check-input radio-style" type="radio" name="Status" id="Status1"
                        value="Status1" checked>
                    <label class="form-check-label font-style" for="Status1">ทั้งหมด</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input radio-style" type="radio" name="Status" id="Status2"
                        value="Status2">
                    <label class="form-check-label font-style" for="Status2">ซื้อ</label>
                </div>
                <div class="form-check ">
                    <input class="form-check-input radio-style" type="radio" name="Status" id="Status3"
                        value="Status3">
                    <label class="form-check-label font-style" for="Status3">เช่า </label>
                </div>
            </div>
        </li>

        <li class="list-group-item">
            <h6 class="font-weight-600">ประเภทอสังหาริมทรัพย์</h6>

            <div class="form-check  custom-checkbox">
                <input class="form-check-input checkboox-Property custom-control-input " type="checkbox" value=""
                    id="PropertyMobile">
                <label class="form-check-label custom-control-label font-style" for="PropertyMobile">ทั้งหมด</label>
            </div>
            <div class="form-check custom-checkbox">
                <input class="form-check-input  checkboox-Property custom-control-input " type="checkbox" value=""
                    id="Property_Houses">
                <label class="form-check-label custom-control-label font-style" for="Property_Houses">บ้าน</label>
            </div>
            <div class="form-check custom-checkbox">
                <input class="form-check-input checkboox-Property custom-control-input " type="checkbox" value=""
                    id="Property_Apartments">
                <label class="form-check-label custom-control-label font-style" for="Property_Apartments">อพาร์ตเมนต์</label>
            </div>
            <div class="form-check  custom-checkbox">
                <input class="form-check-input checkboox-Property custom-control-input " type="checkbox" value=""
                    id="Property_Office">
                <label class="form-check-label custom-control-label font-style" for="Property_Office">สำนักงาน</label>
            </div>
            <div class="form-check custom-checkbox">
                <input class="form-check-input checkboox-Property custom-control-input " type="checkbox" value=""
                    id="Property_Villa">
                <label class="form-check-label custom-control-label font-style" for="Property_Villa">วิลล่า</label>
            </div>

        </li>
        <li class="list-group-item">
            <h6 class="font-weight-600">ช่วงราคา</h6>

            <div class="row">
                <div class="col-12">
                    <div class="form-check  custom-checkbox">
                        <input class="form-check-input custom-control-input price-checkboox" type="checkbox"
                            value="" id="PriceAll">
                        <label class="form-check-label custom-control-label font-style" for="PriceAll">ทั้งหมด</label>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-check  custom-checkbox">
                        <input class="form-check-input custom-control-input price-checkboox" type="checkbox"
                            value="" id="Price1">
                        <label class="form-check-label custom-control-label font-style" for="Price1">
                            ฿1,000,000
                        </label>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-check  custom-checkbox">
                        <input class="form-check-input custom-control-input price-checkboox" type="checkbox"
                            value="" id="Price2">
                        <label class="form-check-label custom-control-label font-style" for="Price2">
                            ฿1,000,001 - ฿5,000,000
                        </label>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-check  custom-checkbox">
                        <input class="form-check-input custom-control-input price-checkboox" type="checkbox"
                            value="" id="Price3">
                        <label class="form-check-label custom-control-label font-style" for="Price3">
                            ฿5,000,001 - ฿10,000,000
                        </label>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-check  custom-checkbox">
                        <input class="form-check-input custom-control-input price-checkboox" type="checkbox"
                            value="" id="Price4">
                        <label class="form-check-label custom-control-label font-style" for="Price4">
                            ฿10,000,001
                        </label>
                    </div>
                </div>
            </div>

        </li>
        <li class="list-group-item">
            <div class="form-group">
              <h6 class="font-weight-600"> ที่ตั้ง</h6>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>กรุงเทพ</option>
                <option>ปทุมธานี</option>
                <option>นนทบุรี</option>
                <option>อยุธยา</option>
              </select>
            </div>
        </li>

        <li class="list-group-item">
            <h6 class="font-weight-600">ห้องนอน</h6>
            <div class="d-flex justify-content-center">
                <div class="selection">
                    <input type="radio" id="Bedroomsany" name="Bedrooms" checked>
                    <label for="Bedroomsany">เท่าใดก็ได้</label>
                </div>
                <div class="selection">
                    <input type="radio" id="Bedroomsplus1" name="Bedrooms">
                    <label for="Bedroomsplus1">+1</label>
                </div>
                <div class="selection">
                    <input type="radio" id="Bedroomsplus2" name="Bedrooms">
                    <label for="Bedroomsplus2">+2</label>
                </div>
                <div class="selection">
                    <input type="radio" id="Bedroomsplus3" name="Bedrooms">
                    <label for="Bedroomsplus3">+3</label>
                </div>
                <div class="selection">
                    <input type="radio" id="Bedroomsplus4" name="Bedrooms">
                    <label for="Bedroomsplus4">+4</label>
                </div>
                <div class="selection">
                    <input type="radio" id="Bedroomsplus5" name="Bedrooms">
                    <label for="Bedroomsplus5">+5</label>
                </div>
            </div>
        </li>

        <li class="list-group-item">
            <h6 class="font-weight-600">ห้องน้ำ</h6>
            <div class="d-flex justify-content-center">
                <div class="selection">
                    <input type="radio" id="Bathroomasany" name="Bathrooms" checked>
                    <label for="Bathroomasany">เท่าใดก็ได้</label>
                </div>
                <div class="selection">
                    <input type="radio" id="Bathrooms1" name="Bathrooms">
                    <label for="Bathrooms1">+1</label>
                </div>
                <div class="selection">
                    <input type="radio" id="Bathrooms2" name="Bathrooms">
                    <label for="Bathrooms2">+2</label>
                </div>
                <div class="selection">
                    <input type="radio" id="Bathrooms3" name="Bathrooms">
                    <label for="Bathrooms3">+3</label>
                </div>
                <div class="selection">
                    <input type="radio" id="Bathrooms4" name="Bathrooms">
                    <label for="Bathrooms4">+4</label>
                </div>
                <div class="selection">
                    <input type="radio" id="Bathrooms5" name="Bathrooms">
                    <label for="Bathrooms5">+5</label>
                </div>
            </div>
        </li>
        <li class="list-group-item">
            <button type="submit" class="btn btn-primary afterButton rounded-pill w-100 " id="submitModal">
            <i class="fa-solid fa-magnifying-glass"></i> ค้นหา</button>
        </li>
        <li class="list-group-item">
            <div class="d-flex justify-content-between">
                <a href="javascript:void(0)"><i class="fa fa-repeat"></i><span> รีเซ็ตตัวกรองทั้งหมด</span></a>
                {{-- <a href="javascript:void(0)">
                    <span class="fa fa-repeat"></span>
                    <u>Reset all filters</u>
                </a> --}}
                <a href="javascript:void(0)">
                    <span class="fa fa-star"></span>
                    <u>บันทึกการค้นหา</u>
                </a>

            </div>
        </li>

    </ul>
    {{-- end side-bar --}}
</div>

