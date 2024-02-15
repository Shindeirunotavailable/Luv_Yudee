<div class="list-sidebar-style1">
        <a href="javascript:void(0)" class="closebtn" onclick="toggleSidebar()">&times;</a>

    {{-- side-bar --}}
    <ul class="list-group list-group-flush">
        <li class="list-group-item">
            <h6>Find your home</h6>
            <div class="search_area">
                <input type="text" class="form-control form-control-text" placeholder="What are you looking for?"><span>
                <i class="fa-solid fa-magnifying-glass"></i></span>
            </div>
        </li>

        <li class="list-group-item">
            <h6>Listing Status</h6>
            <div class="radio-element">
            
                <div class="form-check">
                    <input class="form-check-input radio-style" type="radio" name="Status" id="Status1" value="Status1"
                        checked>
                    <label class="form-check-label font-style" for="Status1">
                        All
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input radio-style" type="radio" name="Status" id="Status2" value="Status2">
                    <label class="form-check-label font-style" for="Status2">
                        Buy
                    </label>
                </div>
                <div class="form-check ">
                    <input class="form-check-input radio-style" type="radio" name="Status" id="Status3" value="Status3">
                    <label class="form-check-label font-style" for="Status3">
                        Rent
                    </label>
                </div>
            </div>
        </li>

        <li class="list-group-item">
            <h6 class="list-title">Property Type</h6>

            <div class="form-check  custom-checkbox">
                <input class="form-check-input checkboox-Property custom-control-input " type="checkbox" value="" id="PropertyMobile"  onclick="PropertyMobile()">
                <label class="form-check-label custom-control-label font-style" for="PropertyMobile">
                    All
                </label>
            </div>
            <div class="form-check custom-checkbox">
                <input class="form-check-input  checkboox-Property custom-control-input " type="checkbox" value="" id="Property_Houses" onclick="PropertyAll()">
                <label class="form-check-label custom-control-label font-style" for="Property_Houses">
                    Houses
                </label>
            </div>
            <div class="form-check custom-checkbox">
                <input class="form-check-input checkboox-Property custom-control-input " type="checkbox" value="" id="Property_Apartments" onclick="PropertyAll()">
                <label class="form-check-label custom-control-label font-style" for="Property_Apartments">
                    Apartments
                </label>
            </div>
            <div class="form-check  custom-checkbox">
                <input class="form-check-input checkboox-Property custom-control-input " type="checkbox" value="" id="Property_Office" onclick="PropertyAll()">
                <label class="form-check-label custom-control-label font-style" for="Property_Office">
                    Office
                </label>
            </div>
            <div class="form-check custom-checkbox">
                <input class="form-check-input checkboox-Property custom-control-input " type="checkbox" value="" id="Property_Villa" onclick="PropertyAll()">
                <label class="form-check-label custom-control-label font-style" for="Property_Villa">
                    Villa
                </label>
            </div>

        </li>





















        
        <li class="list-group-item">
            <h6>Price Range</h6>
              
              <div class="row">
                <div class="col-12">
                    <div class="form-check  custom-checkbox">
                        <input class="form-check-input custom-control-input price-checkboox" type="checkbox" value="" id="PriceAll" onclick="priceMobile()" >
                        <label class="form-check-label custom-control-label font-style" for="PriceAll">
                            เลือกทั้งหมด
                        </label>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-check  custom-checkbox">
                        <input class="form-check-input custom-control-input price-checkboox" type="checkbox" value="" id="Price1" onclick="checkPrice()" >
                        <label class="form-check-label custom-control-label font-style" for="Price1">
                            น้อยกว่า 1 ล้านบาท
                        </label>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-check  custom-checkbox">
                        <input class="form-check-input custom-control-input price-checkboox" type="checkbox" value="" id="Price2"  onclick="checkPrice()" >
                        <label class="form-check-label custom-control-label font-style" for="Price2">
                             1 ล้าน ถึง 5 ล้านบาท
                        </label>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-check  custom-checkbox">
                        <input class="form-check-input custom-control-input price-checkboox" type="checkbox" value="" id="Price3"  onclick="checkPrice()" >
                        <label class="form-check-label custom-control-label font-style" for="Price3">
                             5 ล้าน ถึง 10 ล้านบาท
                        </label>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-check  custom-checkbox">
                        <input class="form-check-input custom-control-input price-checkboox" type="checkbox" value="" id="Price4"  onclick="checkPrice()" >
                        <label class="form-check-label custom-control-label font-style" for="Price4">
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
                  <option>Houses</option>
                  <option>Apartments</option>
                  <option>Office</option>
                  <option>Villa</option>
                </select>
              </div>
        </li>

        <li class="list-group-item">
            <h6 class="list-title">Bedrooms</h6>
            <div class="d-flex justify-content-center">
                <div class="selection">
                    <input type="radio" id="Bedroomsany" name="Bedrooms" checked>
                    <label for="Bedroomsany">any</label>
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
            <h6 class="list-title">Bathrooms</h6>
            <div class="d-flex justify-content-center">
                <div class="selection">
                    <input type="radio" id="Bathroomasany" name="Bathrooms" checked>
                    <label for="Bathroomasany">any</label>
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
            <button type="submit" class="btn btn-primary btn-lg btn-block afterButton" id="submitModalBtn">
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

