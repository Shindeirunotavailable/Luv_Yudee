<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ asset('/assets/css/profile.css') }}" rel="stylesheet" type="text/css" />
    <script type="module" crossorigin="" src="/assets/js/profile.js"></script>
</head>

<body>
        <main id="content" class="bg-gray-01">
        <div class="container-fluid">
            
            <div class="row justify-content-center"> 
                
                <div class="col-lg-10">
                    
                    <div class="mb-6">
                        <h2 class="mb-0 text-heading fs-22 lh-15">My Profile</h2>
                        <p class="mb-1">Lorem ipsum dolor sit amet, consec tetur cing elit. Suspe ndisse suscipit</p>
                    </div>

                    <form>
                        <div class="row mb-6">
                            <div class="col-lg-6">
                                <!-- ... (ต่อไปจากต้นฉบับ) -->
                                <div class="card my-6">
                                    <div class="card-body px-6 pt-6 pb-5">
                                        <div class="row">
                                            <div class="col-sm-4 col-xl-12 col-xxl-7 mb-6">
                                                <h3 class="card-title mb-0 text-heading fs-22 lh-15">Photo</h3>
                                                <p class="card-text ">Upload your profile photo.</p>
                                            </div>

                                            <div class="col-sm-8 col-xl-12 col-xxl-5 Photo">
                                                <img src=" " alt="My Profile" class="w-10 h-10">
                                                <div class="custom-file mt-4 h-auto">
                                                    <input type="file" class="custom-file-input" hidden=""  id="customFile" name="file">
                                                    {{-- <button type="submit" class="fourth1 button1">Upload profile
                                                        image</button> --}}
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
                            <div class="col-lg-6">
                                <!-- ... (ต่อไปจากต้นฉบับ) -->

                                <div class="card mb-6">
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
                                                <label for="confirmNewPassword" class="text-heading">Confirm New Password</label>
                                                <input type="password" class="form-control form-control-lg border-0" id="confirmNewPassword" name="confirmNewPassword">
                                                  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end flex-wrap">
                            <button type="submit" class="btn-lg fourth-delete button-delete mb-3">Delete Profile</button>

                            {{-- <button class="btn btn-lg btn-primary ml-4 mb-3">Update Profile</button> --}}
                            <button type="submit" class="btn-lg fourth1 button1 mb-3">Update Profile</button>

                        </div>

                    </form>


                </div>
            </div>
        </div>
    </main>
</body>

</html>
