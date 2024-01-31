    <div class="dashboard__main pl0-md">
        <div class="dashboard__content property-page bgc-f7">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="mb-6">
                        <h2 class="mb-0 text-heading fs-22 lh-15">My Profile</h2>
                        <p class="">Lorem ipsum dolor sit amet, consec tetur cing elit. Suspe ndisse suscipit</p>
                    </div>

                    <div class="container">
                        <div class="row ">
                            <div class="col-md-6">

                                <div class="card mb-6">
                                    <div class="card-body px-6 pt-6 pb-5">
                                        <div class="row">
                                            <div class="col-sm-4 col-xl-12 col-xxl-7 ">
                                                <h3 class="card-title mb-0 text-heading fs-22 lh-15">Photo</h3>
                                                <p class="card-text mb-4 ">Upload your profile photo.</p>
                                            </div>
                                            {{-- ลบ col-sm-8 col-xl-12 col-xxl-5 ออกจาก class --}}
                                            <div class=" Photo text-center">
                                                <img src="https://homez-reactjs.ibthemespro.com/images/listings/profile-1.jpg" alt="My Profile" class="mx-auto d-block img-fluid">
                                                <div class="custom-file mt-4 h-auto">
                                                    {{-- เอา btn-t-white ออก --}}
                                                    <input type="file" class="custom-file-input" hidden="" id="customFile" name="file">
                                                    <button type="submit" class="ud-btn btn-white " >Upload profile image</button>
                                                </div>
                                                <p class="mb-0 mt-2">
                                                    *minimum 500px x 500px
                                                </p>
                                            </div>


                                        </div>
                                    </div>
                                </div>


                                <div class="card mb-6">
                                    <div class="card-body px-6 pt-6 pb-5">
                                        <h3 class="card-title mb-0 text-heading fs-22 lh-15">Contact information</h3>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                        <div class="form-row mx-n4">
                                            <div class="form-group col-md-6 px-4">
                                                <label for="firstName" class="text-heading">First name</label>
                                                <input type="text" class="form-control form-control-lg border-0"
                                                    id="firstName" name="firsName">
                                            </div>
                                            <div class="form-group col-md-6 px-4">
                                                <label for="lastName" class="text-heading">Last name</label>
                                                <input type="text" class="form-control form-control-lg border-0"
                                                    id="lastName" name="lastname">
                                            </div>
                                        </div>
                                        <div class="form-row mx-n4">
                                            <div class="form-group col-md-6 px-4">
                                                <label for="phone" class="text-heading">Phone</label>
                                                <input type="text" class="form-control form-control-lg border-0"
                                                    id="phone" name="phone">
                                            </div>
                                            <div class="form-group col-md-6 px-4">
                                                <label for="mobile" class="text-heading">Mobile</label>
                                                <input type="text" class="form-control form-control-lg border-0"
                                                    id="mobile" name="mobile">
                                            </div>
                                        </div>
                                        <div class="form-row mx-n4">
                                            <div class="form-group col-md-6 px-4 mb-md-0">
                                                <label for="email" class="text-heading">Email</label>
                                                <input type="email" class="form-control form-control-lg border-0"
                                                    id="email" name="email">
                                            </div>
                                            <div class="form-group col-md-6 px-4 mb-md-0">
                                                <label for="skype" class="text-heading">Skype</label>
                                                <input type="text" class="form-control form-control-lg border-0"
                                                    id="skype" name="skype">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-6 mb-lg-0">
                                    <div class="card-body px-6 pt-6 pb-5">
                                        <h3 class="card-title mb-0 text-heading fs-22 lh-15">User detail</h3>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                        <div class="form-group mb-0">
                                            <label for="title" class="text-heading">Title / Posittion</label>
                                            <input type="text" class="form-control form-control-lg border-0"
                                                id="title" name="title">
                                        </div>
                                    </div>
                                </div>




                            </div>
                            <div class="col-md-6">


                                <div class="card mb-6 ">
                                        <div class="card-body px-6 pt-6 pb-5">
                                            <h3 class="card-title mb-0 text-heading fs-22 lh-15">User detail</h3>
                                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                            </p>
                                            <div class="form-group">
                                                <label for="facebook" class="text-heading">Facebook Url</label>
                                                <input type="url" class="form-control form-control-lg border-0"
                                                    id="facebook" name="facebook">
                                            </div>
                                            <div class="form-group">
                                                <label for="pinterest" class="text-heading">Pinterest Url</label>
                                                <input type="url" class="form-control form-control-lg border-0"
                                                    id="pinterest" name="pinterest">
                                            </div>
                                            <div class="form-group">
                                                <label for="instagram" class="text-heading">Instagram Url</label>
                                                <input type="url" class="form-control form-control-lg border-0"
                                                    id="instagram" name="instagram">
                                            </div>
                                            <div class="form-group">
                                                <label for="twitter" class="text-heading">Twitter Url</label>
                                                <input type="url" class="form-control form-control-lg border-0"
                                                    id="twitter" name="twitter">
                                            </div>
                                            <div class="form-group">
                                                <label for="linkedin" class="text-heading">Linkedin Url</label>
                                                <input type="url" class="form-control form-control-lg border-0"
                                                    id="linkedin" name="linkedin">
                                            </div>
                                            <div class="form-group mb-7">
                                                <label for="website" class="text-heading">Website Url <span
                                                        class="text-muted">(without http)</span>
                                                </label>
                                                <input type="url" class="form-control form-control-lg border-0"
                                                    id="website" name="website">
                                            </div>
                                        </div>
                                </div>

                                <div class="card">
                                    <div class="card-body px-6 pt-6 pb-5">
                                        <h3 class="card-title mb-0 text-heading fs-22 lh-15">Change password</h3>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                        </p>
                                        <div class="form-group">
                                            <label for="oldPassword" class="text-heading">Old Password</label>
                                            <input type="password" class="form-control form-control-lg border-0"
                                                id="oldPassword" name="oldPassword">
                                        </div>
                                        <div class="form-row mx-n4">
                                            <div class="form-group col-md-6 col-lg-12 col-xxl-6 px-4">
                                                <label for="newPassword" class="text-heading">New Password</label>
                                                <input type="password" class="form-control form-control-lg border-0"
                                                    id="newPassword" name="newPassword">
                                            </div>
                                            <div class="form-group col-md-6 col-lg-12 col-xxl-6 px-4">
                                                <label for="confirmNewPassword" class="text-heading">Confirm New
                                                    Password</label>
                                                <input type="password" class="form-control form-control-lg border-0"
                                                    id="confirmNewPassword" name="confirmNewPassword">


                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>



                        </div>

                        <div class="d-flex justify-content-end flex-wrap">
                            {{-- เอา btn-t-white ออก --}}
                            <div class="position-relative  pt30 pb20 mr-2" ><a href="#"
                                class="ud-btn btn-white  ">Delete Profile
                                <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            {{-- เอา btn-t-white ออก --}}
                            <div class="position-relative  pt30 pb20 mr-2"><a href="#"
                                class="ud-btn btn-white ">Update Profile
                                <i class="fa-solid fa-arrow-right"></i></a>
                        </div>

                        </div>



                    </div>
                </div>
            </div>
        </div>
        <footer class="dashboard_footer pt30 pb10">
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

