@csrf
<div class="dashboard__main pl-d-0-md">
    <div class="dashboard__content property-page bgc-f7">
        <div class="row align-items-center pb-d-40">
            <div class="col-lg-12">
                <div class="dashboard_title_area">
                    <h2>Add New Property</h2>
                    <p class="text">We are glad to see you again!</p>
                </div>

            </div>
        </div>
        <div class="row d-flex">
            <div class="col-xl-12">
                <div class="ps-widget bgc-white bdrs12 default-box-shadow2 pt-d-30 mb-6 overflow-hidden position-relative">
                    <div class="navtab-style1">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab2" role="tablist">
                                <button class="nav-link-ap active font-weight-600 ms-3" id="nav-item1-tab"
                                    data-toggle="tab" data-target="#nav-item1" type="button" role="tab"
                                    aria-controls="nav-item1" aria-selected="true">
                                    1. Description
                                </button>
                                <button class="nav-link-ap font-weight-600" id="nav-item2-tab" data-toggle="tab"
                                    data-target="#nav-item2" type="button" role="tab" aria-controls="nav-item2"
                                    aria-selected="false">2. Media
                                </button>
                                <button class="nav-link-ap font-weight-600" id="nav-item3-tab" data-toggle="tab"
                                    data-target="#nav-item3" type="button" role="tab" aria-controls="nav-item3"
                                    aria-selected="false">3. Location
                                </button>
                                <button class="nav-link-ap font-weight-600" id="nav-item4-tab" data-toggle="tab"
                                    data-target="#nav-item4" type="button" role="tab" aria-controls="nav-item4"
                                    aria-selected="false">4. Detail
                                </button>
                                <button class="nav-link-ap font-weight-600" id="nav-item5-tab" data-toggle="tab"
                                    data-target="#nav-item5" type="button" role="tab" aria-controls="nav-item5"
                                    aria-selected="false">5. Amenities
                                </button>
                            </div>
                        </nav>

                        <div class="tab-content-ds" id="nav-tabContent">

                            <div class="tab-pane fade show active" id="nav-item1" role="tabpanel"
                                aria-labelledby="nav-item1-tab">
                                <div class="ps-widget bgc-white bdrs12 p-d-30 overflow-hidden position-relative">
                                    <h4 class="title fs-17 mb-6">Property Description</h4>
                                    <form class="form-style1">
                                        <div class="row ">
                                            <div class="col-sm-12">
                                                <div class="mb-d-20">
                                                    <label
                                                        class="heading-color ff-heading font-weight-600 mb-d-10">Title</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Your Name">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="mb-d-20">
                                                    <label
                                                        class="heading-color ff-heading font-weight-600 mb-d-10">Description

                                                    </label>
                                                    <form method="POST" action={{ url('store') }}>
                                                        <p><textarea name="editor" id="editor"></textarea></p>
                                                        {{ csrf_field() }}
                                                    </form>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-xl-4">
                                                <div class="mb-d-20">
                                                    <label class="heading-color ff-heading font-weight-600 mb-d-10">Select
                                                        Category</label>
                                                    <div class="">
                                                        <div id="result-container "></div>
                                                        <div>
                                                            <select id="selectcategory" name="selectcategory" class="form-select "
                                                                style="width: 100%; height: 55px;" multiple>
                                                                    <option value="CD">คอนโด</option>
                                                                    <option value="DT">บ้นเดี่ยว</option>
                                                                    <option value="TH">ทาวน์เฮาส์</option>
                                                                    <option value="AP">อพาร์ทเมนท์</option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xl-4">
                                                <div class="mb-d-20">
                                                    <label
                                                        class="heading-color ff-heading font-weight-600 mb-d-10">Property
                                                        Status</label>
                                                    <div class="mb-6">
                                                        <select id="propertystatus" name="propertystatus" class="form-control "
                                                            style="width: 100%; height: 38px;" multiple>
                                                                <option value="FS">ขาย</option>
                                                                <option value="HI">เช่า</option>
                                                        </select>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-xl-4">
                                                <div class="mb-6">
                                                    <label class="heading-color ff-heading font-weight-600 mb-d-10">Price
                                                        in baht</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Price">
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-item2" role="tabpanel"
                                aria-labelledby="nav-item2-tab">
                                <div class="ps-widget bgc-white bdrs12 p-d-30 overflow-hidden position-relative">
                                    <h4 class="title fs-17 mb-6">Upload photos of your property</h4>
                                    <form class="form-style1">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="row">

                                                    <div class="col-sm-6 col-xl-4 mb-4">
                                                        <label for="customIMG" class="upload-button btn-block">Select Image</label>
                                                        <input type="file" style="visibility:hidden;"  id="customIMG" multiple accept="image/*"  />
                                                    </div>
                                                    <div class="col-sm-6 col-xl-4 mb-4">
                                                        <button id="clearButtonIMG" class="clearButton">Clear</button>
                                                    </div>
                                                    <div class="col-sm-12 mt-30 row"  id="fileList"></div>

                                                </div>
                                                <div class="row position-relative d-md-flex align-items-end mb50"></div>
                                                </div>
                                        </div>
                                        <h4 class="title fs-17 mb-6">Video Option</h4>
                                        <div class="row">
                                            <div class="col-sm-6 col-xl-4 mb-4">
                                                <label for="customVdo" class="upload-button btn-block">Select Video</label>
                                                <input type="file" style="visibility:hidden;"  id="customVdo" multiple  accept="video/*"/>
                                            </div>
                                            <div class="col-sm-6 col-xl-4 mb-4">
                                                <button id="clearButtonVDO" class="clearButton ">Clear</button>
                                            </div>
                                            <div class="col-sm-12 mt-30 row"  id="VdoList"></div>

                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-item3" role="tabpanel"
                                aria-labelledby="nav-item3-tab">
                                <div class="ps-widget bgc-white bdrs12 p-d-30 overflow-hidden position-relative">
                                    <h4 class="title fs-17 mb-6">Listing Location</h4>
                                    <form class="form-style1">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="mb-d-20"><label
                                                        class="heading-color ff-heading font-weight-600 mb-d-10">Address</label><input
                                                        type="text" class="form-control"
                                                        placeholder="Your Name"></div>
                                            </div>
                                            <div class="col-sm-6 col-xl-4">
                                                <div class="mb-d-20">
                                                    <label
                                                        class="heading-color ff-heading font-weight-600 mb-d-10">Country /State</label>
                                                    <div class="">

                                                        <select name="provinces" id="provinces" class="form-control">
                                                            <option value="" selected disabled>กรุณาเลือกจังหวัด</option>
                                                            @foreach ($provinces as $value)
                                                                <option value="{{ $value['id'] }}">{{ $value['name_th'] }}</option>
                                                            @endforeach
                                                        </select>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xl-4">
                                                <div class="mb-d-20"><label
                                                        class="heading-color ff-heading font-weight-600 mb-d-10">City</label>
                                                    <div class="">

                                                        <select name="amphures" id="amphures" class="form-control">
                                                        </select>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xl-4">
                                                <div class="mb-d-20"><label
                                                        class="heading-color ff-heading font-weight-600 mb-d-10">Country</label>
                                                    <div class=" ">

                                                        <select name="districts" id="districts" class="form-control">
                                                        </select><br>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xl-4">
                                                <div class="mb-d-20">
                                                    <label class="heading-color ff-heading font-weight-600 mb-d-10">Zip</label>
                                                    <input type="text" name="zipcode" id="zipcode" readonly class="form-control"></div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="mb-d-20 mt30">
                                                    <label class="heading-color ff-heading font-weight-600 mb-6">Place
                                                        the listing pin on the map</label>
                                                    <iframe
                                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61986.891901766154!2d100.4506952486328!3d13.828182899999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29bfbc0283e39%3A0x203d873e226cd556!2zTHV2IERyaXZlIENhciBSZW50IGwg4LmA4Lil4Li04LifIOC5hOC4lOC4o-C5jOC4nyDguITguLLguKPguYzguYDguKPguYnguJnguJfguYwg4Liq4Liz4LiZ4Lix4LiB4LiH4Liy4LiZ4LmD4Lir4LiN4LmI!5e0!3m2!1sth!2sth!4v1705384925758!5m2!1sth!2sth"
                                                        width="100%" height="450" style="border:0;"
                                                        allowfullscreen="" loading="lazy"
                                                        referrerpolicy="no-referrer-when-downgrade">
                                                    </iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-item4" role="tabpanel"
                                aria-labelledby="nav-item4-tab">
                                <div class="ps-widget bgc-white bdrs12 p-d-30 overflow-hidden position-relative">
                                    <h4 class="title fs-17 mb-6">Listing Details</h4>
                                    <form class="form-style1">
                                        <div class="row">
                                            <div class="col-sm-5 col-xl-4">
                                                <div class="mb-d-20"><label
                                                        class="heading-color ff-heading font-weight-600 mb-d-10">Property ID
                                                        (only numbers)</label><input type="text"
                                                        class="form-control" placeholder="Your ID">
                                                </div>
                                            </div>
                                            <div class="col-sm-5 col-xl-4">
                                                <div class="mb-d-20"><label
                                                        class="heading-color ff-heading font-weight-600 mb-d-10">Property type
                                                        (only numbers)</label><input type="text"
                                                        class="form-control" placeholder="Your Property type">
                                                </div>
                                            </div>
                                            <div class="col-sm-5 col-xl-4">
                                                <div class="mb-d-20"><label
                                                        class="heading-color ff-heading font-weight-600 mb-d-10">Property status</label><input
                                                        type="text" class="form-control"
                                                        placeholder="Status"></div>
                                            </div>
                                            <div class="col-sm-5 col-xl-4">
                                                <div class="mb-d-20"><label
                                                        class="heading-color ff-heading font-weight-600 mb-d-10">Price</label><input
                                                        type="text" class="form-control"
                                                        placeholder="Price"></div>
                                            </div>
                                            <div class="col-sm-5 col-xl-4">
                                                <div class="mb-d-20"><label
                                                        class="heading-color ff-heading font-weight-600 mb-d-10">Rooms</label><input
                                                        type="text" class="form-control"
                                                        placeholder="Rooms"></div>
                                            </div>
                                            <div class="col-sm-5 col-xl-4">
                                                <div class="mb-d-20"><label
                                                        class="heading-color ff-heading font-weight-600 mb-d-10">Bedrooms
                                                        </label><input type="text" class="form-control"
                                                        placeholder="Rooms">
                                                </div>
                                            </div>
                                            <div class="col-sm-5 col-xl-4">
                                                <div class="mb-d-20"><label
                                                        class="heading-color ff-heading font-weight-600 mb-d-10">Bathrooms</label><input
                                                        type="text" class="form-control"
                                                        placeholder="Rooms"></div>
                                            </div>
                                            <div class="col-sm-5 col-xl-4">
                                                <div class="mb-d-20"><label
                                                        class="heading-color ff-heading font-weight-600 mb-d-10">Size
                                                        </label><input type="text" class="form-control"
                                                        placeholder="SqFt">
                                                </div>
                                            </div>
                                            <div class="col-sm-5 col-xl-4">
                                                <div class="mb-d-20"><label
                                                        class="heading-color ff-heading font-weight-600 mb-d-10">Garage
                                                        </label><input type="text" class="form-control"
                                                        placeholder="Garage">
                                                </div>
                                            </div>
                                            <div class="col-sm-5 col-xl-4">
                                                <div class="mb-d-20"><label
                                                        class="heading-color ff-heading font-weight-600 mb-d-10">Garage size
                                                        </label><input type="text" class="form-control"
                                                        placeholder="SqFt">
                                                </div>
                                            </div>
                                            <div class="col-sm-5 col-xl-4">
                                                <div class="mb-d-20"><label
                                                        class="heading-color ff-heading font-weight-600 mb-d-10">PSM / sqm
                                                        </label><input type="text" class="form-control"
                                                        placeholder="SqFt">
                                                </div>
                                            </div>
                                            <div class="col-sm-5 col-xl-4">
                                                <div class="mb-d-20"><label
                                                    class="heading-color ff-heading font-weight-600 mb-d-10">TYPE
                                                    </label><input type="text" class="form-control"
                                                    placeholder="Family">
                                                </div>
                                            </div>
                                            <div class="col-sm-5 col-xl-4">
                                                <div class="mb-d-20"><label
                                                        class="heading-color ff-heading font-weight-600 mb-d-10">Available
                                                        from
                                                        (date)</label><input type="text" class="form-control"
                                                        placeholder="99.aa.yyyy">
                                                </div>
                                            </div>

                                            <div class="col-sm-5 col-xl-4">
                                                <div class="mb-d-20"><label
                                                        class="heading-color ff-heading font-weight-600 mb-d-10">Year build
                                                        </label><input type="text" class="form-control"
                                                        placeholder="Year">
                                                </div>
                                            </div>
                                            <div class="col-sm-5 col-xl-4">
                                                <div class="mb-d-20"><label
                                                        class="heading-color ff-heading font-weight-600 mb-d-10">Label</label><input
                                                        type="text" class="form-control"
                                                        placeholder="status"></div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="mb-d-20"><label
                                                        class="heading-color ff-heading font-weight-600 mb-d-10">Owner/
                                                        Agent
                                                        nots (not visible on front end)</label>
                                                    <textarea cols="30" rows="5" placeholder="There are many variations of passages."></textarea>
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-item5" role="tabpanel"
                                aria-labelledby="nav-item5-tab">
                                <div class="ps-widget bgc-white bdrs12 p-d-30 overflow-hidden position-relative">
                                    <h4 class="title fs-17 mb-6">Select Amenities</h4>
                                    <div class="row">
                                        <div class="row-ap flex-lg-row flex-wrap">
                                            <div class="col-sm-12 col-md-6 col-lg-4">
                                                <div class="checkbox-style1"><label
                                                        class="custom_checkbox">Attic<input type="checkbox"><span
                                                            class="checkmark"></span></label><label
                                                        class="custom_checkbox">Basketball court<input type="checkbox"
                                                            checked=""><span
                                                            class="checkmark"></span></label><label
                                                        class="custom_checkbox">Air Conditioning<input type="checkbox"
                                                            checked=""><span
                                                            class="checkmark"></span></label><label
                                                        class="custom_checkbox">Lawn<input type="checkbox"
                                                            checked=""><span
                                                            class="checkmark"></span></label><label
                                                        class="custom_checkbox">Swimming Pool<input
                                                            type="checkbox"><span
                                                            class="checkmark"></span></label><label
                                                        class="custom_checkbox">Barbeque<input type="checkbox"><span
                                                            class="checkmark"></span></label><label
                                                        class="custom_checkbox">Microwave<input type="checkbox"><span
                                                            class="checkmark"></span></label></div>
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-4">
                                                <div class="checkbox-style1"><label class="custom_checkbox">TV
                                                        Cable<input type="checkbox"><span
                                                            class="checkmark"></span></label><label
                                                        class="custom_checkbox">Dryer<input type="checkbox"
                                                            checked=""><span
                                                            class="checkmark"></span></label><label
                                                        class="custom_checkbox">Outdoor Shower<input type="checkbox"
                                                            checked=""><span
                                                            class="checkmark"></span></label><label
                                                        class="custom_checkbox">Washer<input type="checkbox"
                                                            checked=""><span
                                                            class="checkmark"></span></label><label
                                                        class="custom_checkbox">Gym<input type="checkbox"><span
                                                            class="checkmark"></span></label><label
                                                        class="custom_checkbox">Ocean view<input
                                                            type="checkbox"><span
                                                            class="checkmark"></span></label><label
                                                        class="custom_checkbox">Private space<input
                                                            type="checkbox"><span class="checkmark"></span></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-4">
                                                <div class="checkbox-style1"><label class="custom_checkbox">Lake
                                                        view<input type="checkbox"><span
                                                            class="checkmark"></span></label><label
                                                        class="custom_checkbox">Wine cellar<input type="checkbox"
                                                            checked=""><span
                                                            class="checkmark"></span></label><label
                                                        class="custom_checkbox">Front yard<input type="checkbox"
                                                            checked=""><span
                                                            class="checkmark"></span></label><label
                                                        class="custom_checkbox">Refrigerator<input type="checkbox"
                                                            checked=""><span
                                                            class="checkmark"></span></label><label
                                                        class="custom_checkbox">WiFi<input type="checkbox"><span
                                                            class="checkmark"></span></label><label
                                                        class="custom_checkbox">Laundry<input type="checkbox"><span
                                                            class="checkmark"></span></label><label
                                                        class="custom_checkbox">Sauna<input type="checkbox"><span
                                                            class="checkmark"></span></label></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <footer class="dashboard_footer pt-d-30 pb10">
        <div class="container">
            <div class="row items-center justify-content-center justify-content-md-between">
                <div class="col-auto">
                    <div class="copyright-widget">
                        <p class="text">© Homez 2024 <a href="https://themeforest.net/user/ib-themes"
                                target="_blank" rel="noopener noreferrer">ib-themes</a> - All rights reserved</p>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="footer_bottom_right_widgets text-center text-lg-end">
                        <p><a href="#">Privacy</a> · <a href="#">Terms</a> · <a
                                href="#">Sitemap</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>



</div>
