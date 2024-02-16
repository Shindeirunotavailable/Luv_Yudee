<div class="list-sidebar-style1 mb-30">
    {{-- side-bar --}}
    <ul class="list-group list-group-flush">
        <li class="list-group-item">
            <h6>Find your home</h6>
            <div class="search_area">
                <input type="text" class="form-control form-control-text color-border" placeholder="What are you looking for?"><span>
                <i class="fa-solid fa-magnifying-glass"></i></span>
            </div>
        </li>

        <li class="list-group-item">
            <h6>Listing Status</h6>
            <div class="radio-element">
            
                <div class="form-check">
                    <input class="form-check-input radio-style" type="radio" name="exampleRadios" id="exampleRadios1" value="option1"
                        checked>
                    <label class="form-check-label font-style" for="exampleRadios1">
                        All
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input radio-style" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    <label class="form-check-label font-style" for="exampleRadios2">
                        Buy
                    </label>
                </div>
                <div class="form-check ">
                    <input class="form-check-input radio-style" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                    <label class="form-check-label font-style" for="exampleRadios3">
                        Rent
                    </label>
                </div>
            </div>
        </li>

        <li class="list-group-item">
            <h6 class="list-title">Property Type</h6>

            <div class="form-check  custom-checkbox">
                <input class="form-check-input  checkboox-all custom-control-input " type="checkbox" value="" id="All"  onclick="selectAll()">
                <label class="form-check-label custom-control-label font-style" for="All">
                    All
                </label>
            </div>
            <div class="form-check custom-checkbox">
                <input class="form-check-input  checkboox-all custom-control-input " type="checkbox" value="" id="Houses" onclick="checkAll()">
                <label class="form-check-label custom-control-label font-style" for="Houses">
                    Houses
                </label>
            </div>
            <div class="form-check custom-checkbox">
                <input class="form-check-input checkboox-all custom-control-input " type="checkbox" value="" id="Apartments" onclick="checkAll()">
                <label class="form-check-label custom-control-label font-style" for="Apartments">
                    Apartments
                </label>
            </div>
            <div class="form-check  custom-checkbox">
                <input class="form-check-input checkboox-all custom-control-input " type="checkbox" value="" id="Office" onclick="checkAll()">
                <label class="form-check-label custom-control-label font-style" for="Office">
                    Office
                </label>
            </div>
            <div class="form-check custom-checkbox">
                <input class="form-check-input checkboox-all custom-control-input " type="checkbox" value="" id="Villa" onclick="checkAll()">
                <label class="form-check-label custom-control-label font-style" for="Villa">
                    Villa
                </label>
            </div>

        </li>
        <li class="list-group-item">
            <h6>Price Range</h6>

              {{-- <div class="row">
                <div class="col-12 col-lg-12">

                    <label class="label-700">ราคาสูงสุด</label>
                    <div class="input-group pb-10">
                        <div class="input-group-prepend">
                          <span class="input-group-text">฿</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Max value">
                      </div>

                      <label class="label-700">ราคาต่ำสุด</label>
                      <div class="input-group ">
                        <div class="input-group-prepend">
                          <span class="input-group-text">฿</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Min value">
                      </div>
                </div> --}}
{{--            <div class="col-6 col-lg-6">
                    <label class="label-700">ราคาสูงสุด</label>
                    <div class="input-group pb-10">
                        <div class="input-group-prepend">
                          <span class="input-group-text">฿</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                      </div>
                </div>
                <div class="col-6 col-lg-6">
                      <label class="label-700">ราคาต่ำสุด</label>
                      <div class="input-group ">
                        <div class="input-group-prepend">
                          <span class="input-group-text">฿</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                      </div>
                </div> --}}
              {{-- </div> --}}
              
              <div class="row">
                <div class="col-12">
                    <div class="form-check  custom-checkbox">
                        <input class="form-check-input custom-control-input checkboox-price " type="checkbox" value="" id="averageAll" onclick="priceAll()" >
                        <label class="form-check-label custom-control-label font-style" for="averageAll">
                            เลือกทั้งหมด
                        </label>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-check  custom-checkbox">
                        <input class="form-check-input custom-control-input checkboox-price" type="checkbox" value="" id="1Million" onclick="checkPrice()" >
                        <label class="form-check-label custom-control-label font-style" for="1Million">
                            น้อยกว่า 1 ล้านบาท
                        </label>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-check  custom-checkbox">
                        <input class="form-check-input custom-control-input checkboox-price" type="checkbox" value="" id="5Million"  onclick="checkPrice()" >
                        <label class="form-check-label custom-control-label font-style" for="5Million">
                             1 ล้าน ถึง 5 ล้านบาท
                        </label>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-check  custom-checkbox">
                        <input class="form-check-input custom-control-input checkboox-price" type="checkbox" value="" id="10Million"  onclick="checkPrice()" >
                        <label class="form-check-label custom-control-label font-style" for="10Million">
                             5 ล้าน ถึง 10 ล้านบาท
                        </label>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-check  custom-checkbox">
                        <input class="form-check-input custom-control-input checkboox-price" type="checkbox" value="" id="10MillionUp"  onclick="checkPrice()" >
                        <label class="form-check-label custom-control-label font-style" for="10MillionUp">
                            มากกว่า 10 ล้านบาท
                        </label>
                    </div>
                </div>
              </div>
              

  
        </li>
        <li class="list-group-item">
              <div class="form-group">
                <h6 class="list-title">Location</h6>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>กรุงเทพมหานคร</option>
                  <option>ปทุมธานี</option>
                  <option>นนทบุรี</option>
                  <option>พระนครศรีอยุธยา</option>
                </select>
              </div>
        </li>

        <li class="list-group-item">
            <h6 class="list-title">Bedrooms</h6>
            <div class="d-flex justify-content-center">
                <div class="selection">
                    <input type="radio" id="any" name="Bedrooms" checked>
                    <label for="any">any</label>
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
            <h6 class="list-title">Bathrooms</h6>
            <div class="d-flex justify-content-center">
                <div class="selection">
                    <input type="radio" id="anyBathrooms" name="Bathrooms" checked>
                    <label for="anyBathrooms">any</label>
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
   

{{-- 
        <li class="list-group-item">
            <h6>Square Feet</h6>
            <div class="d-flex justify-content-between">
                <input type="number" class="form-control" placeholder="Min." id="minFeet">
                <h3 class=" pl-10 pr-10"> - </h3>
                <input type="number" class="form-control" placeholder="Max." id="minFeet">
            </div>
        </li> --}}
        {{-- <li class="list-group-item">
            <h6>Year Built</h6>
            <div class="d-flex justify-content-between">
                <input type="number" class="form-control P-10" placeholder="2019" id="minFeet">
                <h3 class=" pl-10 pr-10"> - </h3>
                <input type="number" class="form-control P-10" placeholder="2024" id="minFeet">
            </div>
        </li> --}}
        <li class="list-group-item">
      
            <button type="submit"
            class="btn btn-primary afterButton rounded-pill w-100 "
            id="submitModal"> 
            <i class="fa-solid fa-magnifying-glass"></i> search
            </button>

        </li>
        <li class="list-group-item">
            <div class="d-flex justify-content-between">

                <a href="javascript:void(0)">
                    <span class="fa fa-repeat"></span>
                    <u>Reset all filters</u>
                </a>
                <a href="javascript:void(0)">
                    <span class="fa fa-star"></span>
                    <u>Save Search</u>
                </a>

            </div>
        </li>

    </ul>
    {{-- end side-bar --}}
</div>

