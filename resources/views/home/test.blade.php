@extends('layout.master')

@section('content')
    <div id="root">
        <div class="wrapper ovh">

            <div class="signup-modal">
                <div class="modal fade" id="loginSignupModal" tabindex="-1" aria-labelledby="loginSignupModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog  modal-dialog-scrollable modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalToggleLabel">Welcome to Realton</h5><button
                                    type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="log-reg-form">
                                    <div class="navtab-style2">
                                        <nav>
                                            <div class="nav nav-tabs mb20" id="nav-tab" role="tablist">
                                                <button class="nav-link active fw600" id="nav-home-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav-home" type="button" role="tab"
                                                    aria-controls="nav-home" aria-selected="true">Sign
                                                    In</button><button class="nav-link fw600" id="nav-profile-tab"
                                                    data-bs-toggle="tab" data-bs-target="#nav-profile" type="button"
                                                    role="tab" aria-controls="nav-profile" aria-selected="false">New
                                                    Account</button>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent2">
                                            <div class="tab-pane fade show active fz15" id="nav-home" role="tabpanel"
                                                aria-labelledby="nav-home-tab">
                                                <form class="form-style1">
                                                    <div class="mb25"><label
                                                            class="form-label fw600 dark-color">Email</label><input
                                                            type="email" class="form-control" placeholder="Enter Email"
                                                            required=""></div>
                                                    <div class="mb15"><label
                                                            class="form-label fw600 dark-color">Password</label><input
                                                            type="text" class="form-control" placeholder="Enter Password"
                                                            required=""></div>
                                                    <div
                                                        class="checkbox-style1 d-block d-sm-flex align-items-center justify-content-between mb10">
                                                        <label class="custom_checkbox fz14 ff-heading">Remember
                                                            me<input type="checkbox" checked=""><span
                                                                class="checkmark"></span></label><a class="fz14 ff-heading"
                                                            href="#">Lost your
                                                            password?</a>
                                                    </div>
                                                    <div class="d-grid mb20"><button class="ud-btn btn-thm"
                                                            type="submit">Sign in <i
                                                                class="fal fa-arrow-right-long"></i></button></div>
                                                    <div class="hr_content mb20">
                                                        <hr><span class="hr_top_text">OR</span>
                                                    </div>
                                                    <div class="d-grid mb10"><button class="ud-btn btn-white"
                                                            type="button"><i class="fab fa-google"></i> Continue
                                                            Google</button></div>
                                                    <div class="d-grid mb10"><button class="ud-btn btn-fb" type="button"><i
                                                                class="fab fa-facebook-f"></i> Continue
                                                            Facebook</button></div>
                                                    <div class="d-grid mb20"><button class="ud-btn btn-apple"
                                                            type="button"><i class="fab fa-apple"></i> Continue
                                                            Apple</button></div>
                                                    <p class="dark-color text-center mb0 mt10">Not signed up? <a
                                                            class="dark-color fw600" href="/register">Create an
                                                            account.</a></p>
                                                </form>
                                            </div>
                                            <div class="tab-pane fade fz15" id="nav-profile" role="tabpanel"
                                                aria-labelledby="nav-profile-tab">
                                                <form class="form-style1">
                                                    <div class="mb25"><label
                                                            class="form-label fw600 dark-color">Email</label><input
                                                            type="email" class="form-control" placeholder="Enter Email"
                                                            required=""></div>
                                                    <div class="mb20"><label
                                                            class="form-label fw600 dark-color">Password</label><input
                                                            type="text" class="form-control"
                                                            placeholder="Enter Password" required=""></div>
                                                    <div class="d-grid mb20"><button class="ud-btn btn-thm"
                                                            type="submit">Create account <i
                                                                class="fal fa-arrow-right-long"></i></button></div>
                                                    <div class="hr_content mb20">
                                                        <hr><span class="hr_top_text">OR</span>
                                                    </div>
                                                    <div class="d-grid mb10"><button class="ud-btn btn-white"
                                                            type="button"><i class="fab fa-google"></i> Continue
                                                            Google</button></div>
                                                    <div class="d-grid mb10"><button class="ud-btn btn-fb"
                                                            type="button"><i class="fab fa-facebook-f"></i> Continue
                                                            Facebook</button></div>
                                                    <div class="d-grid mb20"><button class="ud-btn btn-apple"
                                                            type="button"><i class="fab fa-apple"></i> Continue
                                                            Apple</button></div>
                                                    <p class="dark-color text-center mb0 mt10">Already Have an Account?
                                                        <a class="dark-color fw600" href="/login">Login</a>
                                                    </p>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="SidebarPanel" aria-labelledby="SidebarPanelLabel">
                <div class="rightside-hidden-bar">
                    <div class="hsidebar-header">
                        <div class="sidebar-close-icon" data-bs-dismiss="offcanvas" aria-label="Close"><span
                                class="far fa-times"></span></div>
                        <h4 class="title">Welcome to Realton</h4>
                    </div>
                    <div class="hsidebar-content">
                        <div class="hiddenbar_navbar_content">
                            <div class="hiddenbar_navbar_menu">
                                <ul class="navbar-nav">
                                    <li class="nav-item"><a class="nav-link" href="#"
                                            role="button">Apartments</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#" role="button">Bungalow</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="#" role="button">Houses</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="#" role="button">Loft</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="#" role="button">Office</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="#" role="button">Townhome</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="#" role="button">Villa</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="hiddenbar_footer position-relative bdrt1">
                                <div class="row pt45 pb30 pl30">
                                    <div class="col-auto">
                                        <div class="contact-info">
                                            <p class="info-title dark-color">Total Free Customer Care</p>
                                            <h6 class="info-phone dark-color"><a href="tel:+012305094502">+(0) 123 050
                                                    945 02</a></h6>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="contact-info">
                                            <p class="info-title dark-color">Need Live Support?</p>
                                            <h6 class="info-mail dark-color"><a
                                                    href="mailto:hi@homez.com">hi@homez.com</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pt30 pb30 bdrt1">
                                    <div class="col-auto">
                                        <div class="social-style-sidebar d-flex align-items-center pl30">
                                            <h6 class="me-4 mb-0">Follow us</h6><a class="me-3" href="#"><i
                                                    class="fab fa-facebook-f"></i></a><a class="me-3" href="#"><i
                                                    class="fab fa-twitter"></i></a><a class="me-3" href="#"><i
                                                    class="fab fa-instagram"></i></a><a class="me-3" href="#"><i
                                                    class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobilie_header_nav stylehome1">
                <div class="mobile-menu">
                    <div class="header innerpage-style">
                        <div class="menu_and_widgets">
                            <div class="mobile_menu_bar d-flex justify-content-between align-items-center">
                                <a class="menubar" href="#" id="menubarButton" data-bs-toggle="offcanvas"
                                    data-bs-target="#mobileMenu" aria-controls="mobileMenu">
                                    <img src="https://img2.pic.in.th/pic/dark-nav-icon.png" alt="mobile icon"
                                        width="30px"></a><a class="mobile_logo" href="/">
                                    <img src="{{ URL('image/YuuDee2.png') }}" alt="logo" width="120px"></a>
                                <a href="/login"><span class="icon fz18 far fa-user-circle "></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="offcanvas offcanvas-start mobile_menu-canvas" tabindex="-1" id="mobileMenu"
                    aria-labelledby="mobileMenuLabel" data-bs-scroll="true">
                    <div class="rightside-hidden-bar">
                        <div class="hsidebar-header">
                            <div class="sidebar-close-icon" data-bs-dismiss="offcanvas" aria-label="Close"><span
                                    class="far fa-times"></span></div>
                            <h4 class="title">Welcome to Homez</h4>
                        </div>
                        <div class="hsidebar-content ">
                            <div class="hiddenbar_navbar_content">
                                <aside data-testid="ps-sidebar-root-test-id" width="100%"
                                    class="ps-sidebar-root my-custom-class css-np5i73">
                                    <div data-testid="ps-sidebar-container-test-id"
                                        class="ps-sidebar-container css-1mb249p">
                                        <nav class="ps-menu-root css-vj11vy">
                                            <ul class="css-ewdv3l">
                                                <li class="ps-menuitem-root ps-submenu-root active css-16jesut"><a
                                                        class="ps-menu-button" data-testid="ps-menu-button-test-id"
                                                        tabindex="0"><span
                                                            class="ps-menu-label css-12w9als">Home</span><span
                                                            class="ps-submenu-expand-icon css-1cuxlhl"><span
                                                                class="css-honxw6"></span></span></a>
                                                    <div data-testid="ps-submenu-content-test-id"
                                                        class="ps-submenu-content css-z5rm24">
                                                        <ul class="css-ewdv3l">
                                                            <li class="ps-menuitem-root css-1tqrhto"><a
                                                                    class="ps-menu-button"
                                                                    data-testid="ps-menu-button-test-id" tabindex="0"
                                                                    href="/home-v1"><span
                                                                        class="ps-menu-label css-12w9als">Home
                                                                        v1</span></a></li>
                                                            <li class="ps-menuitem-root css-1tqrhto"><a
                                                                    class="ps-menu-button"
                                                                    data-testid="ps-menu-button-test-id" tabindex="0"
                                                                    href="/home-v2"><span
                                                                        class="ps-menu-label css-12w9als">Home
                                                                        v2</span></a></li>
                                                            <li class="ps-menuitem-root css-1tqrhto"><a
                                                                    class="ps-menu-button"
                                                                    data-testid="ps-menu-button-test-id" tabindex="0"
                                                                    href="/home-v3"><span
                                                                        class="ps-menu-label css-12w9als">Home
                                                                        v3</span></a></li>
                                                            <li class="ps-menuitem-root css-1tqrhto"><a
                                                                    class="ps-menu-button active"
                                                                    data-testid="ps-menu-button-test-id" tabindex="0"
                                                                    href="/home-v4"><span
                                                                        class="ps-menu-label css-12w9als">Home
                                                                        v4</span></a></li>
                                                            <li class="ps-menuitem-root css-1tqrhto"><a
                                                                    class="ps-menu-button"
                                                                    data-testid="ps-menu-button-test-id" tabindex="0"
                                                                    href="/home-v5"><span
                                                                        class="ps-menu-label css-12w9als">Home
                                                                        v5</span></a></li>
                                                            <li class="ps-menuitem-root css-1tqrhto"><a
                                                                    class="ps-menu-button"
                                                                    data-testid="ps-menu-button-test-id" tabindex="0"
                                                                    href="/home-v6"><span
                                                                        class="ps-menu-label css-12w9als">Home
                                                                        v6</span></a></li>
                                                            <li class="ps-menuitem-root css-1tqrhto"><a
                                                                    class="ps-menu-button"
                                                                    data-testid="ps-menu-button-test-id" tabindex="0"
                                                                    href="/home-v7"><span
                                                                        class="ps-menu-label css-12w9als">Home
                                                                        v7</span></a></li>
                                                            <li class="ps-menuitem-root css-1tqrhto"><a
                                                                    class="ps-menu-button"
                                                                    data-testid="ps-menu-button-test-id" tabindex="0"
                                                                    href="/home-v8"><span
                                                                        class="ps-menu-label css-12w9als">Home
                                                                        v8</span></a></li>
                                                            <li class="ps-menuitem-root css-1tqrhto"><a
                                                                    class="ps-menu-button"
                                                                    data-testid="ps-menu-button-test-id" tabindex="0"
                                                                    href="/home-v9"><span
                                                                        class="ps-menu-label css-12w9als">Home
                                                                        v9</span></a></li>
                                                            <li class="ps-menuitem-root css-1tqrhto"><a
                                                                    class="ps-menu-button"
                                                                    data-testid="ps-menu-button-test-id" tabindex="0"
                                                                    href="/home-v10"><span
                                                                        class="ps-menu-label css-12w9als">Home
                                                                        v10</span></a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="ps-menuitem-root ps-submenu-root css-16jesut"><a
                                                        class="ps-menu-button" data-testid="ps-menu-button-test-id"
                                                        tabindex="0"><span
                                                            class="ps-menu-label css-12w9als">Listings</span><span
                                                            class="ps-submenu-expand-icon css-1cuxlhl"><span
                                                                class="css-honxw6"></span></span></a>
                                                    <div data-testid="ps-submenu-content-test-id"
                                                        class="ps-submenu-content css-z5rm24">
                                                        <ul class="css-ewdv3l">
                                                            <li class="ps-menuitem-root ps-submenu-root css-1ffbfs"><a
                                                                    class="ps-menu-button"
                                                                    data-testid="ps-menu-button-test-id"
                                                                    tabindex="0"><span
                                                                        class="ps-menu-label css-12w9als">Grid
                                                                        View</span><span
                                                                        class="ps-submenu-expand-icon css-1cuxlhl"><span
                                                                            class="css-honxw6"></span></span></a>
                                                                <div data-testid="ps-submenu-content-test-id"
                                                                    class="ps-submenu-content css-z5rm24">
                                                                    <ul class="css-ewdv3l">
                                                                        <li class="ps-menuitem-root css-x3jz15"><a
                                                                                class="ps-menu-button"
                                                                                data-testid="ps-menu-button-test-id"
                                                                                tabindex="0" href="/grid-default"><span
                                                                                    class="ps-menu-label css-12w9als">Grid
                                                                                    Default</span></a></li>
                                                                        <li class="ps-menuitem-root css-x3jz15"><a
                                                                                class="ps-menu-button"
                                                                                data-testid="ps-menu-button-test-id"
                                                                                tabindex="0"
                                                                                href="/grid-full-3-col"><span
                                                                                    class="ps-menu-label css-12w9als">Grid
                                                                                    Full Width 3 Cols</span></a></li>
                                                                        <li class="ps-menuitem-root css-x3jz15"><a
                                                                                class="ps-menu-button"
                                                                                data-testid="ps-menu-button-test-id"
                                                                                tabindex="0"
                                                                                href="/grid-full-4-col"><span
                                                                                    class="ps-menu-label css-12w9als">Grid
                                                                                    Full Width 4 Cols</span></a></li>
                                                                        <li class="ps-menuitem-root css-x3jz15"><a
                                                                                class="ps-menu-button"
                                                                                data-testid="ps-menu-button-test-id"
                                                                                tabindex="0"
                                                                                href="/grid-full-2-col"><span
                                                                                    class="ps-menu-label css-12w9als">Grid
                                                                                    Full Width 2 Cols</span></a></li>
                                                                        <li class="ps-menuitem-root css-x3jz15"><a
                                                                                class="ps-menu-button"
                                                                                data-testid="ps-menu-button-test-id"
                                                                                tabindex="0"
                                                                                href="/grid-full-1-col-v1"><span
                                                                                    class="ps-menu-label css-12w9als">Grid
                                                                                    Full Width 1 Cols v1</span></a></li>
                                                                        <li class="ps-menuitem-root css-x3jz15"><a
                                                                                class="ps-menu-button"
                                                                                data-testid="ps-menu-button-test-id"
                                                                                tabindex="0"
                                                                                href="/grid-full-1-col-v2"><span
                                                                                    class="ps-menu-label css-12w9als">Grid
                                                                                    Full Width 1 Cols v2</span></a></li>
                                                                        <li class="ps-menuitem-root css-x3jz15"><a
                                                                                class="ps-menu-button"
                                                                                data-testid="ps-menu-button-test-id"
                                                                                tabindex="0"
                                                                                href="/banner-search-v1"><span
                                                                                    class="ps-menu-label css-12w9als">Banner
                                                                                    Search v1</span></a></li>
                                                                        <li class="ps-menuitem-root css-x3jz15"><a
                                                                                class="ps-menu-button"
                                                                                data-testid="ps-menu-button-test-id"
                                                                                tabindex="0"
                                                                                href="/banner-search-v2"><span
                                                                                    class="ps-menu-label css-12w9als"></span></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="ps-menuitem-root ps-submenu-root css-1ffbfs"><a
                                                                    class="ps-menu-button"
                                                                    data-testid="ps-menu-button-test-id"
                                                                    tabindex="0"><span
                                                                        class="ps-menu-label css-12w9als">Map
                                                                        Style</span><span
                                                                        class="ps-submenu-expand-icon css-1cuxlhl"><span
                                                                            class="css-honxw6"></span></span></a>
                                                                <div data-testid="ps-submenu-content-test-id"
                                                                    class="ps-submenu-content css-z5rm24">
                                                                    <ul class="css-ewdv3l">
                                                                        <li class="ps-menuitem-root css-x3jz15"><a
                                                                                class="ps-menu-button"
                                                                                data-testid="ps-menu-button-test-id"
                                                                                tabindex="0"
                                                                                href="/header-map-style"><span
                                                                                    class="ps-menu-label css-12w9als">Header
                                                                                    Map Style</span></a></li>
                                                                        <li class="ps-menuitem-root css-x3jz15"><a
                                                                                class="ps-menu-button"
                                                                                data-testid="ps-menu-button-test-id"
                                                                                tabindex="0" href="/map-v1"><span
                                                                                    class="ps-menu-label css-12w9als">Map
                                                                                    V1</span></a></li>
                                                                        <li class="ps-menuitem-root css-x3jz15"><a
                                                                                class="ps-menu-button"
                                                                                data-testid="ps-menu-button-test-id"
                                                                                tabindex="0" href="/map-v2"><span
                                                                                    class="ps-menu-label css-12w9als">Map
                                                                                    V2</span></a></li>
                                                                        <li class="ps-menuitem-root css-x3jz15"><a
                                                                                class="ps-menu-button"
                                                                                data-testid="ps-menu-button-test-id"
                                                                                tabindex="0" href="/map-v3"><span
                                                                                    class="ps-menu-label css-12w9als">Map
                                                                                    V3</span></a></li>
                                                                        <li class="ps-menuitem-root css-x3jz15"><a
                                                                                class="ps-menu-button"
                                                                                data-testid="ps-menu-button-test-id"
                                                                                tabindex="0" href="/map-v4"><span
                                                                                    class="ps-menu-label css-12w9als">Map
                                                                                    V4</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="ps-menuitem-root ps-submenu-root css-1ffbfs"><a
                                                                    class="ps-menu-button"
                                                                    data-testid="ps-menu-button-test-id"
                                                                    tabindex="0"><span
                                                                        class="ps-menu-label css-12w9als">Listing
                                                                        View</span><span
                                                                        class="ps-submenu-expand-icon css-1cuxlhl"><span
                                                                            class="css-honxw6"></span></span></a>
                                                                <div data-testid="ps-submenu-content-test-id"
                                                                    class="ps-submenu-content css-z5rm24">
                                                                    <ul class="css-ewdv3l">
                                                                        <li class="ps-menuitem-root css-x3jz15"><a
                                                                                class="ps-menu-button"
                                                                                data-testid="ps-menu-button-test-id"
                                                                                tabindex="0" href="/list-v1"><span
                                                                                    class="ps-menu-label css-12w9als">List
                                                                                    v1</span></a></li>
                                                                        <li class="ps-menuitem-root css-x3jz15"><a
                                                                                class="ps-menu-button"
                                                                                data-testid="ps-menu-button-test-id"
                                                                                tabindex="0"
                                                                                href="/list-all-style"><span
                                                                                    class="ps-menu-label css-12w9als">List
                                                                                    All Style</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="ps-menuitem-root ps-submenu-root css-16jesut"><a
                                                        class="ps-menu-button" data-testid="ps-menu-button-test-id"
                                                        tabindex="0"><span
                                                            class="ps-menu-label css-12w9als">Property</span><span
                                                            class="ps-submenu-expand-icon css-1cuxlhl"><span
                                                                class="css-honxw6"></span></span></a>
                                                    <div data-testid="ps-submenu-content-test-id"
                                                        class="ps-submenu-content css-z5rm24">
                                                        <ul class="css-ewdv3l">
                                                            <li class="ps-menuitem-root ps-submenu-root css-1ffbfs"><a
                                                                    class="ps-menu-button"
                                                                    data-testid="ps-menu-button-test-id"
                                                                    tabindex="0"><span
                                                                        class="ps-menu-label css-12w9als">Agents</span><span
                                                                        class="ps-submenu-expand-icon css-1cuxlhl"><span
                                                                            class="css-honxw6"></span></span></a>
                                                                <div data-testid="ps-submenu-content-test-id"
                                                                    class="ps-submenu-content css-z5rm24">
                                                                    <ul class="css-ewdv3l">
                                                                        <li class="ps-menuitem-root css-x3jz15"><a
                                                                                class="ps-menu-button"
                                                                                data-testid="ps-menu-button-test-id"
                                                                                tabindex="0" href="/agents"><span
                                                                                    class="ps-menu-label css-12w9als">Agents</span></a>
                                                                        </li>
                                                                        <li class="ps-menuitem-root css-x3jz15"><a
                                                                                class="ps-menu-button"
                                                                                data-testid="ps-menu-button-test-id"
                                                                                tabindex="0"
                                                                                href="/agent-single/1"><span
                                                                                    class="ps-menu-label css-12w9als">Agent
                                                                                    Single</span></a></li>
                                                                        <li class="ps-menuitem-root css-x3jz15"><a
                                                                                class="ps-menu-button"
                                                                                data-testid="ps-menu-button-test-id"
                                                                                tabindex="0" href="/agency"><span
                                                                                    class="ps-menu-label css-12w9als">Agency</span></a>
                                                                        </li>
                                                                        <li class="ps-menuitem-root css-x3jz15"><a
                                                                                class="ps-menu-button"
                                                                                data-testid="ps-menu-button-test-id"
                                                                                tabindex="0"
                                                                                href="/agency-single/1"><span
                                                                                    class="ps-menu-label css-12w9als">Agency
                                                                                    Single</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="ps-menuitem-root ps-submenu-root css-1ffbfs"><a
                                                                    class="ps-menu-button"
                                                                    data-testid="ps-menu-button-test-id"
                                                                    tabindex="0"><span
                                                                        class="ps-menu-label css-12w9als">Single
                                                                        Style</span><span
                                                                        class="ps-submenu-expand-icon css-1cuxlhl"><span
                                                                            class="css-honxw6"></span></span></a>
                                                                <div data-testid="ps-submenu-content-test-id"
                                                                    class="ps-submenu-content css-z5rm24">
                                                                    <ul class="css-ewdv3l">
                                                                        <li class="ps-menuitem-root css-x3jz15"><a
                                                                                class="ps-menu-button"
                                                                                data-testid="ps-menu-button-test-id"
                                                                                tabindex="0" href="/single-v1/1"><span
                                                                                    class="ps-menu-label css-12w9als">Single
                                                                                    V1</span></a></li>
                                                                        <li class="ps-menuitem-root css-x3jz15"><a
                                                                                class="ps-menu-button"
                                                                                data-testid="ps-menu-button-test-id"
                                                                                tabindex="0" href="/single-v2/1"><span
                                                                                    class="ps-menu-label css-12w9als">Single
                                                                                    V2</span></a></li>
                                                                        <li class="ps-menuitem-root css-x3jz15"><a
                                                                                class="ps-menu-button"
                                                                                data-testid="ps-menu-button-test-id"
                                                                                tabindex="0" href="/single-v3/1"><span
                                                                                    class="ps-menu-label css-12w9als">Single
                                                                                    V3</span></a></li>
                                                                        <li class="ps-menuitem-root css-x3jz15"><a
                                                                                class="ps-menu-button"
                                                                                data-testid="ps-menu-button-test-id"
                                                                                tabindex="0" href="/single-v4/1"><span
                                                                                    class="ps-menu-label css-12w9als">Single
                                                                                    V4</span></a></li>
                                                                        <li class="ps-menuitem-root css-x3jz15"><a
                                                                                class="ps-menu-button"
                                                                                data-testid="ps-menu-button-test-id"
                                                                                tabindex="0" href="/single-v5/1"><span
                                                                                    class="ps-menu-label css-12w9als">Single
                                                                                    V5</span></a></li>
                                                                        <li class="ps-menuitem-root css-x3jz15"><a
                                                                                class="ps-menu-button"
                                                                                data-testid="ps-menu-button-test-id"
                                                                                tabindex="0" href="/single-v6/1"><span
                                                                                    class="ps-menu-label css-12w9als">Single
                                                                                    V6</span></a></li>
                                                                        <li class="ps-menuitem-root css-x3jz15"><a
                                                                                class="ps-menu-button"
                                                                                data-testid="ps-menu-button-test-id"
                                                                                tabindex="0" href="/single-v7/1"><span
                                                                                    class="ps-menu-label css-12w9als">Single
                                                                                    V7</span></a></li>
                                                                        <li class="ps-menuitem-root css-x3jz15"><a
                                                                                class="ps-menu-button"
                                                                                data-testid="ps-menu-button-test-id"
                                                                                tabindex="0" href="/single-v8/1"><span
                                                                                    class="ps-menu-label css-12w9als">Single
                                                                                    V8</span></a></li>
                                                                        <li class="ps-menuitem-root css-x3jz15"><a
                                                                                class="ps-menu-button"
                                                                                data-testid="ps-menu-button-test-id"
                                                                                tabindex="0" href="/single-v9/1"><span
                                                                                    class="ps-menu-label css-12w9als">Single
                                                                                    V9</span></a></li>
                                                                        <li class="ps-menuitem-root css-x3jz15"><a
                                                                                class="ps-menu-button"
                                                                                data-testid="ps-menu-button-test-id"
                                                                                tabindex="0" href="/single-v10/1"><span
                                                                                    class="ps-menu-label css-12w9als">Single
                                                                                    V10</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="ps-menuitem-root ps-submenu-root css-16jesut"><a
                                                        class="ps-menu-button" data-testid="ps-menu-button-test-id"
                                                        tabindex="0"><span
                                                            class="ps-menu-label css-12w9als">Dashboard</span><span
                                                            class="ps-submenu-expand-icon css-1cuxlhl"><span
                                                                class="css-honxw6"></span></span></a>
                                                    <div data-testid="ps-submenu-content-test-id"
                                                        class="ps-submenu-content css-z5rm24">
                                                        <ul class="css-ewdv3l">
                                                            <li class="ps-menuitem-root css-1tqrhto"><a
                                                                    class="ps-menu-button"
                                                                    data-testid="ps-menu-button-test-id" tabindex="0"
                                                                    href="/dashboard-home"><span
                                                                        class="ps-menu-label css-12w9als">Dashboard
                                                                        Home</span></a></li>
                                                            <li class="ps-menuitem-root css-1tqrhto"><a
                                                                    class="ps-menu-button"
                                                                    data-testid="ps-menu-button-test-id" tabindex="0"
                                                                    href="/dashboard-message"><span
                                                                        class="ps-menu-label css-12w9als">Message</span></a>
                                                            </li>
                                                            <li class="ps-menuitem-root css-1tqrhto"><a
                                                                    class="ps-menu-button"
                                                                    data-testid="ps-menu-button-test-id" tabindex="0"
                                                                    href="/dashboard-add-property"><span
                                                                        class="ps-menu-label css-12w9als">New
                                                                        Property</span></a></li>
                                                            <li class="ps-menuitem-root css-1tqrhto"><a
                                                                    class="ps-menu-button"
                                                                    data-testid="ps-menu-button-test-id" tabindex="0"
                                                                    href="/dashboard-my-properties"><span
                                                                        class="ps-menu-label css-12w9als">My
                                                                        Properties</span></a></li>
                                                            <li class="ps-menuitem-root css-1tqrhto"><a
                                                                    class="ps-menu-button"
                                                                    data-testid="ps-menu-button-test-id" tabindex="0"
                                                                    href="/dashboard-my-favourites"><span
                                                                        class="ps-menu-label css-12w9als">My
                                                                        Favorites</span></a></li>
                                                            <li class="ps-menuitem-root css-1tqrhto"><a
                                                                    class="ps-menu-button"
                                                                    data-testid="ps-menu-button-test-id" tabindex="0"
                                                                    href="/dashboard-saved-search"><span
                                                                        class="ps-menu-label css-12w9als">Saved
                                                                        Search</span></a></li>
                                                            <li class="ps-menuitem-root css-1tqrhto"><a
                                                                    class="ps-menu-button"
                                                                    data-testid="ps-menu-button-test-id" tabindex="0"
                                                                    href="/dashboard-reviews"><span
                                                                        class="ps-menu-label css-12w9als">Reviews</span></a>
                                                            </li>
                                                            <li class="ps-menuitem-root css-1tqrhto"><a
                                                                    class="ps-menu-button"
                                                                    data-testid="ps-menu-button-test-id" tabindex="0"
                                                                    href="/dashboard-my-package"><span
                                                                        class="ps-menu-label css-12w9als">My
                                                                        Package</span></a></li>
                                                            <li class="ps-menuitem-root css-1tqrhto"><a
                                                                    class="ps-menu-button"
                                                                    data-testid="ps-menu-button-test-id" tabindex="0"
                                                                    href="/dashboard-my-profile"><span
                                                                        class="ps-menu-label css-12w9als">My
                                                                        Profile</span></a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="ps-menuitem-root ps-submenu-root css-16jesut"><a
                                                        class="ps-menu-button" data-testid="ps-menu-button-test-id"
                                                        tabindex="0"><span
                                                            class="ps-menu-label css-12w9als">Blog</span><span
                                                            class="ps-submenu-expand-icon css-1cuxlhl"><span
                                                                class="css-honxw6"></span></span></a>
                                                    <div data-testid="ps-submenu-content-test-id"
                                                        class="ps-submenu-content css-z5rm24">
                                                        <ul class="css-ewdv3l">
                                                            <li class="ps-menuitem-root css-1tqrhto"><a
                                                                    class="ps-menu-button"
                                                                    data-testid="ps-menu-button-test-id" tabindex="0"
                                                                    href="/blog-list-v1"><span
                                                                        class="ps-menu-label css-12w9als">Blog List
                                                                        V1</span></a></li>
                                                            <li class="ps-menuitem-root css-1tqrhto"><a
                                                                    class="ps-menu-button"
                                                                    data-testid="ps-menu-button-test-id" tabindex="0"
                                                                    href="/blog-list-v2"><span
                                                                        class="ps-menu-label css-12w9als">Blog List
                                                                        V2</span></a></li>
                                                            <li class="ps-menuitem-root css-1tqrhto"><a
                                                                    class="ps-menu-button"
                                                                    data-testid="ps-menu-button-test-id" tabindex="0"
                                                                    href="/blog-list-v3"><span
                                                                        class="ps-menu-label css-12w9als">Blog List
                                                                        V3</span></a></li>
                                                            <li class="ps-menuitem-root css-1tqrhto"><a
                                                                    class="ps-menu-button"
                                                                    data-testid="ps-menu-button-test-id" tabindex="0"
                                                                    href="/blogs/2"><span
                                                                        class="ps-menu-label css-12w9als">Blog
                                                                        Single</span></a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="ps-menuitem-root ps-submenu-root css-16jesut"><a
                                                        class="ps-menu-button" data-testid="ps-menu-button-test-id"
                                                        tabindex="0"><span
                                                            class="ps-menu-label css-12w9als">Pages</span><span
                                                            class="ps-submenu-expand-icon css-1cuxlhl"><span
                                                                class="css-honxw6"></span></span></a>
                                                    <div data-testid="ps-submenu-content-test-id"
                                                        class="ps-submenu-content css-z5rm24">
                                                        <ul class="css-ewdv3l">
                                                            <li class="ps-menuitem-root css-1tqrhto"><a
                                                                    class="ps-menu-button"
                                                                    data-testid="ps-menu-button-test-id" tabindex="0"
                                                                    href="/about"><span
                                                                        class="ps-menu-label css-12w9als">About</span></a>
                                                            </li>
                                                            <li class="ps-menuitem-root css-1tqrhto"><a
                                                                    class="ps-menu-button"
                                                                    data-testid="ps-menu-button-test-id" tabindex="0"
                                                                    href="/contact"><span
                                                                        class="ps-menu-label css-12w9als">Contact</span></a>
                                                            </li>
                                                            <li class="ps-menuitem-root css-1tqrhto"><a
                                                                    class="ps-menu-button"
                                                                    data-testid="ps-menu-button-test-id" tabindex="0"
                                                                    href="/compare"><span
                                                                        class="ps-menu-label css-12w9als">Compate</span></a>
                                                            </li>
                                                            <li class="ps-menuitem-root css-1tqrhto"><a
                                                                    class="ps-menu-button"
                                                                    data-testid="ps-menu-button-test-id" tabindex="0"
                                                                    href="/pricing"><span
                                                                        class="ps-menu-label css-12w9als">Pricing</span></a>
                                                            </li>
                                                            <li class="ps-menuitem-root css-1tqrhto"><a
                                                                    class="ps-menu-button"
                                                                    data-testid="ps-menu-button-test-id" tabindex="0"
                                                                    href="/faq"><span
                                                                        class="ps-menu-label css-12w9als">Faq</span></a>
                                                            </li>
                                                            <li class="ps-menuitem-root css-1tqrhto"><a
                                                                    class="ps-menu-button"
                                                                    data-testid="ps-menu-button-test-id" tabindex="0"
                                                                    href="/login"><span
                                                                        class="ps-menu-label css-12w9als">Login</span></a>
                                                            </li>
                                                            <li class="ps-menuitem-root css-1tqrhto"><a
                                                                    class="ps-menu-button"
                                                                    data-testid="ps-menu-button-test-id" tabindex="0"
                                                                    href="/register"><span
                                                                        class="ps-menu-label css-12w9als">Register</span></a>
                                                            </li>
                                                            <li class="ps-menuitem-root css-1tqrhto"><a
                                                                    class="ps-menu-button"
                                                                    data-testid="ps-menu-button-test-id" tabindex="0"
                                                                    href="/404"><span
                                                                        class="ps-menu-label css-12w9als">404</span></a>
                                                            </li>
                                                            <li class="ps-menuitem-root css-1tqrhto"><a
                                                                    class="ps-menu-button"
                                                                    data-testid="ps-menu-button-test-id" tabindex="0"
                                                                    href="/invoice"><span
                                                                        class="ps-menu-label css-12w9als">Invoice</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </aside>
                                <div class="hiddenbar_footer position-relative bdrt1">
                                    <div class="row pt45 pb30 pl30">
                                        <div class="col-auto">
                                            <div class="contact-info">
                                                <p class="info-title dark-color">Total Free Customer Care</p>
                                                <h6 class="info-phone dark-color"><a href="tel:+012305094502">+(0) 123
                                                        050 945 02</a></h6>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="contact-info">
                                                <p class="info-title dark-color">Need Live Support?</p>
                                                <h6 class="info-mail dark-color"><a
                                                        href="mailto:hi@homez.com">hi@homez.com</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pt30 pb30 bdrt1">
                                        <div class="col-auto">
                                            <div class="social-style-sidebar d-flex align-items-center pl30">
                                                <h6 class="me-4 mb-0">Follow us</h6><a class="me-3" href="#"><i
                                                        class="fab fa-facebook-f"></i></a><a class="me-3"
                                                    href="#"><i class="fab fa-twitter"></i></a><a class="me-3"
                                                    href="#"><i class="fab fa-instagram"></i></a><a class="me-3"
                                                    href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="home-banner-style4 p0 bgc-white">
                <div class="home-style4 maxw1600 bdrs24 position-relative mx-auto mx20-lg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-9">
                                <div class="inner-banner-style4">
                                    <h2 class="hero-title animate-up-1">Easy Way to Find a <br class="d-none d-md-block">
                                        Perfect Property</h2>
                                    <p class="hero-text fz15 animate-up-2">From as low as $10 per day with limited time
                                        offer discounts</p>
                                    <div class="home4-floatin-img">
                                        <img class="img-1 spin-left d-none d-xl-block contain"
                                            src="https://img5.pic.in.th/file/secure-sv1/element-10.png"
                                            alt="element-10.png" alt="image">
                                        <img class="img-2 bounce-y d-none d-xl-block"src="https://img2.pic.in.th/pic/element-9.png"
                                            alt="element-9.png" alt="image"style="object-fit: contain;">

                                        {{-- <div class="modal-video" tabindex="-1" role="dialog" area-modal="true"
                                            aria-label="You just opened the modal video">
                                            <div class="modal-video-body">
                                                <div class="modal-video-inner" style="width: 100%;">
                                                    <div class="modal-video-movie-wrap" style="padding-bottom: 56.25%;">
                                                        <iframe id="your-video-iframe-id" width="460" height="230"
                                                            src="//www.youtube.com/embed/XJRkTyvoL4k?autoplay=1&amp;cc_load_policy=1&amp;controls=1&amp;disablekb=0&amp;enablejsapi=0&amp;fs=1&amp;iv_load_policy=1&amp;loop=0&amp;rel=0&amp;showinfo=1&amp;start=0&amp;wmode=transparent&amp;theme=dark&amp;mute=0" --}}
                                                            {{-- src="/assets/videos/videos-yuudee.mp4?autoplay=1"frameborder="0" --}}
                                                            {{-- allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                            allowfullscreen="" tabindex="-1"></iframe>
                                                        <button class="modal-video-close-btn"
                                                            aria-label="Close the modal by clicking here"
                                                            fdprocessedid="mql9x"></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}

                                        <button class="popup-iframe popup-youtube bounce-y d-flex align-items-center justify-content-start justify-content-xl-center fz14 fw600 ff-heading"
                                            style="border: none; background: transparent;"fdprocessedid="bectc">Watch Video
                                            <i class="video-icon fa-solid fa-play fz1 ml20"></i>
                                        </button>

                                        {{-- test3 --}}

                                    </div>
                                    <div class="advance-search-tab mt60 mt30-lg mx-auto animate-up-3">
                                        <ul class="nav nav-tabs  p-0 m-0">
                                            <li class="nav-item">
                                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                                    href="#nav-home" role="tab" aria-controls="nav-buy"
                                                    aria-selected="true">Buy</a>
                                                {{-- <button class="nav-link active" fdprocessedid="pv2zd6">Buy</button> --}}
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                                                    href="#nav-profile" role="tab" aria-controls="nav-rent"
                                                    aria-selected="false">Rent</a>
                                                {{-- <button class="nav-link " fdprocessedid="mpfv3i">Rent</button> --}}
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                                    href="#nav-contact" role="tab" aria-controls="nav-sold"
                                                    aria-selected="false">Sold</a>
                                                {{-- <button class="nav-link " fdprocessedid="3i4n5i">Sold</button> --}}
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="active tab-pane">
                                                <div class="advance-content-style1">
                                                    <div class="row">
                                                        <div class="col-md-8 col-lg-9">
                                                            <div class="advance-search-field position-relative text-start">
                                                                <form class="form-search position-relative">
                                                                    <div class="box-search" id="nav-buy">
                                                                        {{-- <span class="icon flaticon-home-1"></span> --}}
                                                                        <i class="icon fa-solid fa-house my-2"></i>
                                                                        <input class="form-control bgc-f7 bdrs12"
                                                                            type="text" name="search"
                                                                            placeholder="Search Products for Buy"
                                                                            fdprocessedid="ufm989">
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-lg-3">
                                                            <div
                                                                class="d-flex align-items-center justify-content-start justify-content-md-center mt-3 mt-md-0">
                                                                <button class="advance-search-btn" type="button"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#advanceSeachModal"
                                                                    fdprocessedid="13esg"><i
                                                                        class="fa-solid fa-list-ul"></i>
                                                                    Advanced</button><button
                                                                    class="advance-search-icon ud-btn btn-dark ms-4"
                                                                    type="button" fdprocessedid="5isoj8"><i
                                                                        class="fa-solid fa-magnifying-glass"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" tab-pane">
                                                <div class="advance-content-style1">
                                                    <div class="row">
                                                        <div class="col-md-8 col-lg-9">
                                                            <div class="advance-search-field position-relative text-start">
                                                                <form class="form-search position-relative">
                                                                    <div class="box-search" id="nav-rent">
                                                                        {{-- <span class="icon flaticon-home-1"></span> --}}
                                                                        <i class="icon fa-solid fa-house my-2"></i>
                                                                        <input class="form-control bgc-f7 bdrs12"
                                                                            type="text" name="search"
                                                                            placeholder="Search Products for Rent">
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-lg-3">
                                                            <div
                                                                class="d-flex align-items-center justify-content-start justify-content-md-center mt-3 mt-md-0">
                                                                <button class="advance-search-btn" type="button"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#advanceSeachModal"><span
                                                                        class="flaticon-settings"></span>
                                                                    Advanced</button><button
                                                                    class="advance-search-icon ud-btn btn-dark ms-4"
                                                                    type="button"><span
                                                                        class="flaticon-search"></span></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" tab-pane">
                                                <div class="advance-content-style1">
                                                    <div class="row">
                                                        <div class="col-md-8 col-lg-9">
                                                            <div class="advance-search-field position-relative text-start">
                                                                <form class="form-search position-relative">
                                                                    <div class="box-search" id="nav-sold">
                                                                        {{-- <span class="icon flaticon-home-1"></span> --}}
                                                                        <i class="icon fa-solid fa-house my-2"></i>
                                                                        <input class="form-control bgc-f7 bdrs12"
                                                                            type="text" name="search"
                                                                            placeholder="Search Products for Sold">
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-lg-3">
                                                            <div
                                                                class="d-flex align-items-center justify-content-start justify-content-md-center mt-3 mt-md-0">
                                                                <button class="advance-search-btn" type="button"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#advanceSeachModal"><span
                                                                        class="flaticon-settings"></span>
                                                                    Advanced</button><button
                                                                    class="advance-search-icon ud-btn btn-dark ms-4"
                                                                    type="button"><span
                                                                        class="flaticon-search"></span></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="advance-feature-modal">
                                    <div class="modal fade" id="advanceSeachModal" tabindex="-1"
                                        aria-labelledby="advanceSeachModalLabel" style="display: none;"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header pl30 pr30">
                                                    <h5 class="modal-title" id="exampleModalLabel">More Filter</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body pb-0">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="widget-wrapper">
                                                                <h6 class="list-title mb20">Price Range</h6>
                                                                <div class="range-slider-style modal-version">
                                                                    <div class="range-wrapper">
                                                                        <div aria-disabled="false" class="input-range">
                                                                            <span
                                                                                class="input-range__label input-range__label--min"><span
                                                                                    class="input-range__label-container"></span></span>
                                                                            <div
                                                                                class="input-range__track input-range__track--background">
                                                                                <div class="input-range__track input-range__track--active"
                                                                                    style="left: 0.02%; width: 48.817%;">
                                                                                </div><span
                                                                                    class="input-range__slider-container"
                                                                                    style="position: absolute; left: 0.02%;"><span
                                                                                        class="input-range__label input-range__label--value"><span
                                                                                            class="input-range__label-container"></span></span>
                                                                                    <div aria-valuemax="48837"
                                                                                        aria-valuemin="0"
                                                                                        aria-valuenow="20"
                                                                                        class="input-range__slider"
                                                                                        draggable="false" role="slider"
                                                                                        tabindex="0"></div>
                                                                                </span><span
                                                                                    class="input-range__slider-container"
                                                                                    style="position: absolute; left: 48.837%;"><span
                                                                                        class="input-range__label input-range__label--value"><span
                                                                                            class="input-range__label-container"></span></span>
                                                                                    <div aria-valuemax="100000"
                                                                                        aria-valuemin="20"
                                                                                        aria-valuenow="48837"
                                                                                        class="input-range__slider"
                                                                                        draggable="false" role="slider"
                                                                                        tabindex="0"></div>
                                                                                </span>
                                                                            </div><span
                                                                                class="input-range__label input-range__label--max"><span
                                                                                    class="input-range__label-container"></span></span>
                                                                        </div>
                                                                        <div class="d-flex align-items-center"><span
                                                                                id="slider-range-value1">$20</span><i
                                                                                class="fa-sharp fa-solid fa-minus mx-2 dark-color icon"></i><span
                                                                                id="slider-range-value2">$48837</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="widget-wrapper">
                                                                <h6 class="list-title">Type</h6>
                                                                <div class="form-style2 input-group">
                                                                    <div class="select-custom css-b62m3t-container">
                                                                        <span id="react-select-2-live-region"
                                                                            class="css-7pg0cj-a11yText"></span><span
                                                                            aria-live="polite" aria-atomic="false"
                                                                            aria-relevant="additions text"
                                                                            class="css-7pg0cj-a11yText"></span>
                                                                        <div class="select__control css-13cymwt-control">
                                                                            <div
                                                                                class="select__value-container select__value-container--has-value css-hlgwow">
                                                                                <div
                                                                                    class="select__single-value css-1dimb5e-singleValue">
                                                                                    Bungalow</div>
                                                                                <div class="select__input-container css-19bb58m"
                                                                                    data-value=""><input
                                                                                        class="select__input"
                                                                                        autocapitalize="none"
                                                                                        autocomplete="off"
                                                                                        autocorrect="off"
                                                                                        id="react-select-2-input"
                                                                                        spellcheck="false" tabindex="0"
                                                                                        type="text"
                                                                                        aria-autocomplete="list"
                                                                                        aria-expanded="false"
                                                                                        aria-haspopup="true"
                                                                                        aria-required="true"
                                                                                        role="combobox" value=""
                                                                                        style="color: inherit; background: 0px center; opacity: 1; width: 100%; grid-area: 1 / 2; font: inherit; min-width: 2px; border: 0px; margin: 0px; outline: 0px; padding: 0px;">
                                                                                </div>
                                                                            </div>
                                                                            <div class="select__indicators css-1wy0on6">
                                                                                <span
                                                                                    class="select__indicator-separator css-1u9des2-indicatorSeparator"></span>
                                                                                <div class="select__indicator select__dropdown-indicator css-1xc3v61-indicatorContainer"
                                                                                    aria-hidden="true"><svg height="20"
                                                                                        width="20" viewBox="0 0 20 20"
                                                                                        aria-hidden="true"
                                                                                        focusable="false"
                                                                                        class="css-8mmkcg">
                                                                                        <path
                                                                                            d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z">
                                                                                        </path>
                                                                                    </svg></div>
                                                                            </div>
                                                                        </div><input name="colors" type="hidden"
                                                                            value="Bungalow">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="widget-wrapper">
                                                                <h6 class="list-title">Property ID</h6>
                                                                <div class="form-style2"><input type="text"
                                                                        class="form-control" placeholder="RT04949213">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="widget-wrapper">
                                                                <h6 class="list-title">Bedrooms</h6>
                                                                <div class="d-flex">
                                                                    <div class="selection"><input id="xany"
                                                                            name="xbeds" type="radio"
                                                                            checked=""><label
                                                                            for="xany">any</label></div>
                                                                    <div class="selection"><input id="xoneplus"
                                                                            name="xbeds" type="radio"
                                                                            checked=""><label
                                                                            for="xoneplus">1+</label></div>
                                                                    <div class="selection"><input id="xtwoplus"
                                                                            name="xbeds" type="radio"
                                                                            checked=""><label
                                                                            for="xtwoplus">2+</label></div>
                                                                    <div class="selection"><input id="xthreeplus"
                                                                            name="xbeds" type="radio"
                                                                            checked=""><label
                                                                            for="xthreeplus">3+</label></div>
                                                                    <div class="selection"><input id="xfourplus"
                                                                            name="xbeds" type="radio"
                                                                            checked=""><label
                                                                            for="xfourplus">4+</label></div>
                                                                    <div class="selection"><input id="xfiveplus"
                                                                            name="xbeds" type="radio"
                                                                            checked=""><label
                                                                            for="xfiveplus">5+</label></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="widget-wrapper">
                                                                <h6 class="list-title">Bathrooms</h6>
                                                                <div class="d-flex">
                                                                    <div class="selection"><input id="yany"
                                                                            name="ybath" type="radio"
                                                                            checked=""><label
                                                                            for="yany">any</label></div>
                                                                    <div class="selection"><input id="yoneplus"
                                                                            name="ybath" type="radio"
                                                                            checked=""><label
                                                                            for="yoneplus">1+</label></div>
                                                                    <div class="selection"><input id="ytwoplus"
                                                                            name="ybath" type="radio"
                                                                            checked=""><label
                                                                            for="ytwoplus">2+</label></div>
                                                                    <div class="selection"><input id="ythreeplus"
                                                                            name="ybath" type="radio"
                                                                            checked=""><label
                                                                            for="ythreeplus">3+</label></div>
                                                                    <div class="selection"><input id="yfourplus"
                                                                            name="ybath" type="radio"
                                                                            checked=""><label
                                                                            for="yfourplus">4+</label></div>
                                                                    <div class="selection"><input id="yfiveplus"
                                                                            name="ybath" type="radio"
                                                                            checked=""><label
                                                                            for="yfiveplus">5+</label></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="widget-wrapper">
                                                                <h6 class="list-title">Location</h6>
                                                                <div class="form-style2 input-group">
                                                                    <div class="select-custom css-b62m3t-container">
                                                                        <span id="react-select-3-live-region"
                                                                            class="css-7pg0cj-a11yText"></span><span
                                                                            aria-live="polite" aria-atomic="false"
                                                                            aria-relevant="additions text"
                                                                            class="css-7pg0cj-a11yText"></span>
                                                                        <div class="select__control css-13cymwt-control">
                                                                            <div
                                                                                class="select__value-container select__value-container--has-value css-hlgwow">
                                                                                <div
                                                                                    class="select__single-value css-1dimb5e-singleValue">
                                                                                    All Cities</div>
                                                                                <div class="select__input-container css-19bb58m"
                                                                                    data-value=""><input
                                                                                        class="select__input"
                                                                                        autocapitalize="none"
                                                                                        autocomplete="off"
                                                                                        autocorrect="off"
                                                                                        id="react-select-3-input"
                                                                                        spellcheck="false"
                                                                                        tabindex="0" type="text"
                                                                                        aria-autocomplete="list"
                                                                                        aria-expanded="false"
                                                                                        aria-haspopup="true"
                                                                                        aria-required="true"
                                                                                        role="combobox" value=""
                                                                                        style="color: inherit; background: 0px center; opacity: 1; width: 100%; grid-area: 1 / 2; font: inherit; min-width: 2px; border: 0px; margin: 0px; outline: 0px; padding: 0px;">
                                                                                </div>
                                                                            </div>
                                                                            <div class="select__indicators css-1wy0on6">
                                                                                <span
                                                                                    class="select__indicator-separator css-1u9des2-indicatorSeparator"></span>
                                                                                <div class="select__indicator select__dropdown-indicator css-1xc3v61-indicatorContainer"
                                                                                    aria-hidden="true"><svg
                                                                                        height="20" width="20"
                                                                                        viewBox="0 0 20 20"
                                                                                        aria-hidden="true"
                                                                                        focusable="false"
                                                                                        class="css-8mmkcg">
                                                                                        <path
                                                                                            d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z">
                                                                                        </path>
                                                                                    </svg></div>
                                                                            </div>
                                                                        </div><input name="colors" type="hidden"
                                                                            value="All Cities">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="widget-wrapper">
                                                                <h6 class="list-title">Square Feet</h6>
                                                                <div class="space-area">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div class="form-style1"><input type="text"
                                                                                class="form-control" placeholder="Min.">
                                                                        </div><span class="dark-color">-</span>
                                                                        <div class="form-style1"><input type="text"
                                                                                class="form-control" placeholder="Max">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="widget-wrapper mb0">
                                                                <h6 class="list-title mb10">Amenities</h6>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="widget-wrapper mb20">
                                                                <div class="checkbox-style1"><label
                                                                        class="custom_checkbox">Attic<input
                                                                            type="checkbox"><span
                                                                            class="checkmark"></span></label><label
                                                                        class="custom_checkbox">Basketball court<input
                                                                            type="checkbox" checked=""><span
                                                                            class="checkmark"></span></label><label
                                                                        class="custom_checkbox">Air Conditioning<input
                                                                            type="checkbox" checked=""><span
                                                                            class="checkmark"></span></label><label
                                                                        class="custom_checkbox">Lawn<input
                                                                            type="checkbox" checked=""><span
                                                                            class="checkmark"></span></label></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="widget-wrapper mb20">
                                                                <div class="checkbox-style1"><label
                                                                        class="custom_checkbox">TV Cable<input
                                                                            type="checkbox"><span
                                                                            class="checkmark"></span></label><label
                                                                        class="custom_checkbox">Dryer<input
                                                                            type="checkbox"><span
                                                                            class="checkmark"></span></label><label
                                                                        class="custom_checkbox">Outdoor Shower<input
                                                                            type="checkbox"><span
                                                                            class="checkmark"></span></label><label
                                                                        class="custom_checkbox">Washer<input
                                                                            type="checkbox"><span
                                                                            class="checkmark"></span></label></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="widget-wrapper mb20">
                                                                <div class="checkbox-style1"><label
                                                                        class="custom_checkbox">Lake view<input
                                                                            type="checkbox"><span
                                                                            class="checkmark"></span></label><label
                                                                        class="custom_checkbox">Wine cellar<input
                                                                            type="checkbox"><span
                                                                            class="checkmark"></span></label><label
                                                                        class="custom_checkbox">Front yard<input
                                                                            type="checkbox"><span
                                                                            class="checkmark"></span></label><label
                                                                        class="custom_checkbox">Refrigerator<input
                                                                            type="checkbox"><span
                                                                            class="checkmark"></span></label></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer justify-content-between"><button
                                                        class="reset-button"><span
                                                            class="flaticon-turn-back"></span><u>Reset all
                                                            filters</u></button>
                                                    <div class="btn-area"><button data-bs-dismiss="modal"
                                                            type="submit" class="ud-btn btn-thm"><span
                                                                class="flaticon-search align-text-top pr10"></span>Search</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="home4-icon-style mt30 d-none d-sm-flex animate-up-4">
                                    <a
                                        class="d-flex align-items-center dark-color ff-heading me-4"href="/grid-full-4-col"><i
                                            class=" icon fa-solid fa-house"></i> Houses</a>
                                    <a
                                        class="d-flex align-items-center dark-color ff-heading me-4"href="/grid-full-4-col"><i
                                            class="icon fa-regular fa-building"></i>Apartments</a>
                                    <a
                                        class="d-flex align-items-center dark-color ff-heading me-4"href="/grid-full-4-col"><i
                                            class="icon fa-solid fa-house-laptop"></i>Office</a><a
                                        class="d-flex align-items-center dark-color ff-heading me-4"
                                        href="/grid-full-4-col"><i class="icon fa-solid fa-house-flood-water"></i>
                                        Villa</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="pb40-md pb90">
                {{-- <div class="mx-auto maxw1300 position-relative overflow-hidden mx20-lg cons"> --}}
                <div class="container">
                    <div class="row align-items-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                        <div class="col-lg-7">
                            <div class="main-title2">
                                <h2 class="title">Properties by Cities</h2>
                                <p class="paragraph">Aliquam lacinia diam quis lacus euismod</p>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="text-start text-lg-end mb-3">
                                <a class="ud-btn2" href="/map-v3">See All Cities<i
                                        class="fal fa-arrow-right-long"></i></a>
                                {{-- <a class="ud-btn2" href="/map-v3"><i class="fa-solid fa-house fa-flip-both"></i>Houses</a>
                                <a class="ud-btn2" href="/map-v3"><i class="fa-regular fa-building"></i>Apartments</a>
                                <a class="ud-btn2" href="/map-v3"><i class="fa-solid fa-house-laptop"></i>Office</a>
                                <a class="ud-btn2" href="/map-v3"><i class="fa-solid fa-house-flood-water"></i> Villa</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                            <div class="property-city-slider position-relative ">
                                <div
                                    class="swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                                    <div class="swiper-wrapper transforms">
                                        {{-- style="transform: translate3d(-610.5px, 0px, 0px); transition-duration: 0ms;" --}}

                                        <div class="swiper-slide" style="width: 188.5px; margin-right: 15px;">
                                            <div class="item">
                                                <div class="feature-style3 text-center">
                                                    <div class="feature-img rounded-circle">
                                                        <img class="w-100 cover"
                                                            src="https://img5.pic.in.th/file/secure-sv1/cp-m-1.png"
                                                            alt="cities">
                                                    </div>
                                                    <div class="feature-content p20">
                                                        <div class="top-area">
                                                            <h6 class="title mb-1"><a href="/map-v3">Manhattan</a>
                                                            </h6>
                                                            <p class="fz15 fw400 dark-color mb-0">12 Properties</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" style="width: 188.5px; margin-right: 15px;">
                                            <div class="item">
                                                <div class="feature-style3 text-center">
                                                    <div class="feature-img rounded-circle"><img class="w-100 cover"
                                                            src="https://img2.pic.in.th/pic/cp-m-2.png" alt="cities">
                                                    </div>
                                                    <div class="feature-content p20">
                                                        <div class="top-area">
                                                            <h6 class="title mb-1"><a href="/map-v3">San Diego</a>
                                                            </h6>
                                                            <p class="fz15 fw400 dark-color mb-0">12 Properties</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-prev"
                                            style="width: 188.5px; margin-right: 15px;">
                                            <div class="item">
                                                <div class="feature-style3 text-center">
                                                    <div class="feature-img rounded-circle"><img class="w-100 cover"
                                                            src="https://img2.pic.in.th/pic/cp-m-3.png" alt="cities">
                                                    </div>
                                                    <div class="feature-content p20">
                                                        <div class="top-area">
                                                            <h6 class="title mb-1"><a href="/map-v3">San
                                                                    Francisco</a></h6>
                                                            <p class="fz15 fw400 dark-color mb-0">12 Properties</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-active"
                                            style="width: 188.5px; margin-right: 15px;">
                                            <div class="item">
                                                <div class="feature-style3 text-center">
                                                    <div class="feature-img rounded-circle"><img class="w-100 cover"
                                                            src="https://img2.pic.in.th/pic/cp-m-4.png" alt="cities">
                                                    </div>
                                                    <div class="feature-content p20">
                                                        <div class="top-area">
                                                            <h6 class="title mb-1"><a href="/map-v3">Los Angeles</a>
                                                            </h6>
                                                            <p class="fz15 fw400 dark-color mb-0">12 Properties</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-next"
                                            style="width: 188.5px; margin-right: 15px;">
                                            <div class="item">
                                                <div class="feature-style3 text-center">
                                                    <div class="feature-img rounded-circle"><img class="w-100 cover"
                                                            src="https://img5.pic.in.th/file/secure-sv1/cp-m-5.png"
                                                            alt="cities"></div>
                                                    <div class="feature-content p20">
                                                        <div class="top-area">
                                                            <h6 class="title mb-1"><a href="/map-v3">California</a>
                                                            </h6>
                                                            <p class="fz15 fw400 dark-color mb-0">12 Properties</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" style="width: 188.5px; margin-right: 15px;">
                                            <div class="item">
                                                <div class="feature-style3 text-center">
                                                    <div class="feature-img rounded-circle"><img class="w-100 cover"
                                                            src="https://img5.pic.in.th/file/secure-sv1/cp-m-6.png"
                                                            alt="cities"></div>
                                                    <div class="feature-content p20">
                                                        <div class="top-area">
                                                            <h6 class="title mb-1"><a href="/map-v3">New Jersey</a>
                                                            </h6>
                                                            <p class="fz15 fw400 dark-color mb-0">12 Properties</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" style="width: 188.5px; margin-right: 15px;">
                                            <div class="item">
                                                <div class="feature-style3 text-center">
                                                    <div class="feature-img rounded-circle"><img class="w-100 cover"
                                                            src="https://img5.pic.in.th/file/secure-sv1/cp-m-1.png"
                                                            alt="cities"></div>
                                                    <div class="feature-content p20">
                                                        <div class="top-area">
                                                            <h6 class="title mb-1"><a href="/map-v3">Manhattan</a>
                                                            </h6>
                                                            <p class="fz15 fw400 dark-color mb-0">12 Properties</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" style="width: 188.5px; margin-right: 15px;">
                                            <div class="item">
                                                <div class="feature-style3 text-center">
                                                    <div class="feature-img rounded-circle"><img class="w-100 cover"
                                                            src="https://img2.pic.in.th/pic/cp-m-2.png" alt="cities">
                                                    </div>
                                                    <div class="feature-content p20">
                                                        <div class="top-area">
                                                            <h6 class="title mb-1"><a href="/map-v3">San Diego</a>
                                                            </h6>
                                                            <p class="fz15 fw400 dark-color mb-0">12 Properties</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" style="width: 188.5px; margin-right: 15px;">
                                            <div class="item">
                                                <div class="feature-style3 text-center">
                                                    <div class="feature-img rounded-circle"><img class="w-100 cover"
                                                            src="https://img2.pic.in.th/pic/cp-m-3.png" alt="cities">
                                                    </div>
                                                    <div class="feature-content p20">
                                                        <div class="top-area">
                                                            <h6 class="title mb-1"><a href="/map-v3">San
                                                                    Francisco</a></h6>
                                                            <p class="fz15 fw400 dark-color mb-0">12 Properties</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                                <div class="btn-swiper">
                                <div class="rounded-arrow arrowY-center-position">
                                    <button
                                        class="property-by-city-prev__active swiper_button _prev "fdprocessedid="yj6omk">
                                        <i class="fa-solid fa-angle-left"></i>
                                    </button>
                                    <button
                                        class="property-by-city-next__active swiper_button _next swiper-button-disabled "fdprocessedid="1ipwv"
                                        disabled="">
                                        <i class="fa-solid fa-angle-right "></i>
                                    </button>
                                </div>
                            </div>

                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="btn-swiper">
                    <div class="rounded-arrow arrowY-center-position">
                        <button
                            class="property-by-city-prev__active swiper_button _prev "fdprocessedid="yj6omk">
                            <i class="fa-solid fa-angle-left"></i>
                        </button>
                        <button
                            class="property-by-city-next__active swiper_button _next swiper-button-disabled "fdprocessedid="1ipwv"
                            disabled="">
                            <i class="fa-solid fa-angle-right "></i>
                        </button>
                    </div>
                </div> --}}
            {{-- </div> --}}
            </section>
            <section class="pt-0 pb60">
                <div class="container">
                    <div class="row wow fadeInUp" data-wow-delay="100ms">
                        <div class="col-lg-6">
                            <div class="main-title2">
                                <h2 class="title">Best Properties For Sale</h2>
                                <p class="paragraph">Lorem ipsum dolor sit amet, consec tetur cing elit. Suspe ndisse
                                    suscipit</p>
                            </div>
                        </div>
                        <div class="col-lg-6 my-3">
                            <div class="home4-icon-style d-none d-sm-flex justify-content-start justify-content-lg-end">
                                <a class="d-flex align-items-center dark-color ff-heading me-2"
                                    href="/grid-full-4-col"><i class=" icons fa-solid fa-house"
                                        aria-hidden="true"></i> Houses</a>
                                <a class="d-flex align-items-center dark-color ff-heading me-2"
                                    href="/grid-full-4-col"><i class="icons fa-regular fa-building"
                                        aria-hidden="true"></i>Apartments</a>
                                <a class="d-flex align-items-center dark-color ff-heading me-2"
                                    href="/grid-full-4-col"><i class="icons fa-solid fa-house-laptop"
                                        aria-hidden="true"></i>Office</a>
                                <a class="d-flex align-items-center dark-color ff-heading me-2"
                                    href="/grid-full-4-col"><i class="icons fa-solid fa-house-flood-water"
                                        aria-hidden="true"></i>Villa</a>
                            </div>

                            {{-- <a class="ud-btn2" href="/map-v3">
                                <i class="fa-solid fa-house fa-flip-both"></i>Houses</a>
                            <a class="ud-btn2" href="/map-v3"><i class="fa-regular fa-building"></i>Apartments</a>
                            <a class="ud-btn2" href="/map-v3"><i class="fa-solid fa-house-laptop"></i>Office</a>
                            <a class="ud-btn2" href="/map-v3"><i
                                    class="fa-solid fa-house-flood-water"></i>Villa</a> --}}

                            {{-- <div class="dark-light-navtab style2 text-start text-lg-end mt-0 mt-lg-4 mb-4">
                                <ul class="nav nav-pills justify-content-start justify-content-lg-end">
                                    <li class="nav-item">
                                        <button class="nav-link mb10-sm active"fdprocessedid="yvzgu">House</button>
                                    </li>
                                    <li class="nav-item">
                                        <button class="nav-link mb10-sm "fdprocessedid="ew3nq3">Villa</button>
                                    </li>
                                    <li class="nav-item"><button class="nav-link mb10-sm "fdprocessedid="simlea">Office</button>
                                    </li>
                                    <li class="nav-item"><button class="nav-link mb10-sm "fdprocessedid="4uccc">Apartments</button>
                                    </li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>

                    {{-- test1 --}}

                    <div class="row">
                        <div class="col-lg-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                            <div class="property-city-slider position-relative ">
                                <div
                                    class="swipers swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                                    <div class="swiper-wrapper">
                                        {{-- style="transform: translate3d(-410.5px, 0px, 0px); transition-duration: 0ms;" --}}

                                        <div class=" col-sm-6 col-lg-6 swiper-slide swiper-slide-active ">
                                            <div class="listing-style1">
                                                <div class="list-thumb"><img class="w-100  cover"
                                                        src="https://thailandhomeplan.com/wp-content/uploads/2023/06/%E0%B8%9A%E0%B9%89%E0%B8%B2%E0%B8%99%E0%B8%8A%E0%B8%B1%E0%B9%89%E0%B8%99%E0%B9%80%E0%B8%94%E0%B8%B5%E0%B8%A2%E0%B8%A7-S-030-%E0%B8%9B%E0%B8%81%E0%B8%AB%E0%B8%A1%E0%B8%A7%E0%B8%94-jpg.webp"
                                                        alt="listings" style="height: 230px;">
                                                    <div class="sale-sticker-wrap">
                                                        <div class="list-tag fz12">
                                                            <span class="fa-solid fa-baht-sign me-2"></span>FEATURED
                                                        </div>
                                                    </div>
                                                    <div class="list-price">$14,000 / <span>mo</span></div>
                                                </div>
                                                <div class="list-content">
                                                    <h6 class="list-title"><a href="/single-v1/5">Equestrian Family
                                                            Home</a></h6>
                                                    <p class="list-text">San Diego City, CA, USA</p>
                                                    <div class="list-meta d-flex align-items-center">
                                                        <a href="#"><span class="fa-solid fa-bed"
                                                                style="color: #000000;"></span> 5 bed</a>
                                                        <a href="#"> <span class="fa-solid fa-shower"
                                                                style="color: #000000;"></span> 4 bath</a>
                                                        <a href="#"> <span class="fa-brands fa-uncharted"
                                                                style="color: #000000;"></span> 900 sqft</a>
                                                    </div>
                                                    <hr class="mt-2 mb-2">
                                                    <div
                                                        class="list-meta2 d-flex justify-content-between align-items-center">
                                                        <span class="for-what">For Rent</span>
                                                        <div class="icons d-flex align-items-center">
                                                            <a href="#"><span
                                                                    class="fa-regular fa-share-from-square"></span></a>
                                                            <a href="#"><span
                                                                    class="fa-regular fa-square-plus"></span></a>
                                                            <a href="#"><span
                                                                    class="fa-regular fa-heart"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6 swiper-slide swiper-slide-active ">
                                            <div class="listing-style1">
                                                <div class="list-thumb"><img class="w-100  cover"
                                                        src="https://www.black-beam.com/plans/BB-H2-60002.15_3d1.jpg"
                                                        alt="listings" style="height: 230px;">
                                                    <div class="sale-sticker-wrap"></div>
                                                    <div class="list-price">$82,000 / <span>mo</span></div>
                                                </div>
                                                <div class="list-content">
                                                    <h6 class="list-title"><a href="/single-v1/24">Luxury villa in
                                                            Rego Park</a></h6>
                                                    <p class="list-text">Los Angeles City, CA, USA</p>
                                                    <div class="list-meta d-flex align-items-center">
                                                        <a href="#"><span class="fa-solid fa-bed"
                                                                style="color: #000000;"></span> 4 bed</a>
                                                        <a href="#"> <span class="fa-solid fa-shower"
                                                                style="color: #000000;"></span> 4 bath</a>
                                                        <a href="#"> <span class="fa-brands fa-uncharted"
                                                                style="color: #000000;"></span> 1200 sqft</a>
                                                    </div>
                                                    <hr class="mt-2 mb-2">
                                                    <div
                                                        class="list-meta2 d-flex justify-content-between align-items-center">
                                                        <span class="for-what">For Rent</span>
                                                        <div class="icons d-flex align-items-center">
                                                            <a href="#"><span
                                                                    class="fa-regular fa-share-from-square"></span></a>
                                                            <a href="#"><span
                                                                    class="fa-regular fa-square-plus"></span></a>
                                                            <a href="#"><span
                                                                    class="fa-regular fa-heart"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6 swiper-slide swiper-slide-active ">
                                            <div class="listing-style1">
                                                <div class="list-thumb"><img class="w-100  cover"
                                                        src="https://s359.kapook.com/pagebuilder/1bed4621-a115-4691-b187-f51df8275dee.jpg"
                                                        alt="listings" style="height: 230px;">
                                                    <div class="sale-sticker-wrap"></div>
                                                    <div class="list-price">$92,000 / <span>mo</span></div>
                                                </div>
                                                <div class="list-content">
                                                    <h6 class="list-title"><a href="/single-v1/25">Luxury villa in
                                                            Rego Park</a></h6>
                                                    <p class="list-text">California City, CA, USA</p>
                                                    <div class="list-meta d-flex align-items-center">
                                                        <a href="#"><span class="fa-solid fa-bed"
                                                                style="color: #000000;"></span> 1 bed</a>
                                                        <a href="#"> <span class="fa-solid fa-shower"
                                                                style="color: #000000;"></span> 1 bath</a>
                                                        <a href="#"> <span class="fa-brands fa-uncharted"
                                                                style="color: #000000;"></span> 100 sqft</a>
                                                    </div>
                                                    <hr class="mt-2 mb-2">
                                                    <div
                                                        class="list-meta2 d-flex justify-content-between align-items-center">
                                                        <span class="for-what">For Rent</span>
                                                        <div class="icons d-flex align-items-center">
                                                            <a href="#"><span
                                                                    class="fa-regular fa-share-from-square"></span></a>
                                                            <a href="#"><span
                                                                    class="fa-regular fa-square-plus"></span></a>
                                                            <a href="#"><span
                                                                    class="fa-regular fa-heart"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6 swiper-slide swiper-slide-active ">
                                            <div class="listing-style1">
                                                <div class="list-thumb"><img class="w-100  cover"
                                                        src="https://thailandhomeplan.com/wp-content/uploads/2022/12/%E0%B8%9A%E0%B9%89%E0%B8%B2%E0%B8%99%E0%B8%AA%E0%B8%A7%E0%B8%A2%E0%B8%A1%E0%B8%B4%E0%B8%99%E0%B8%B4%E0%B8%A1%E0%B8%AD%E0%B8%A5-P-1409-1.jpg"
                                                        alt="listings" style="height: 230px;">
                                                    <div class="sale-sticker-wrap"></div>
                                                    <div class="list-price">$82,000 / <span>mo</span></div>
                                                </div>
                                                <div class="list-content">
                                                    <h6 class="list-title"><a href="/single-v1/2">Luxury villa in
                                                            Rego Park</a></h6>
                                                    <p class="list-text">Los Angeles City, CA, USA</p>
                                                    <div class="list-meta d-flex align-items-center">
                                                        <a href="#"><span class="fa-solid fa-bed"
                                                                style="color: #000000;"></span> 2 bed</a>
                                                        <a href="#"> <span class="fa-solid fa-shower"
                                                                style="color: #000000;"></span> 1 bath</a>
                                                        <a href="#"> <span class="fa-brands fa-uncharted"
                                                                style="color: #000000;"></span> 1300 sqft</a>
                                                    </div>
                                                    <hr class="mt-2 mb-2">
                                                    <div
                                                        class="list-meta2 d-flex justify-content-between align-items-center">
                                                        <span class="for-what">For Rent</span>
                                                        <div class="icons d-flex align-items-center">
                                                            <a href="#"><span
                                                                    class="fa-regular fa-share-from-square"></span></a>
                                                            <a href="#"><span
                                                                    class="fa-regular fa-square-plus"></span></a>
                                                            <a href="#"><span
                                                                    class="fa-regular fa-heart"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6 swiper-slide swiper-slide-active ">
                                            <div class="listing-style1">
                                                <div class="list-thumb"><img class="w-100  cover"
                                                        src="https://www.black-beam.com/plans/BB-H2-84002.15_3d1.jpg"
                                                        alt="listings" style="height: 230px;">
                                                    <div class="sale-sticker-wrap"></div>
                                                    <div class="list-price">$82,000 / <span>mo</span></div>
                                                </div>
                                                <div class="list-content">
                                                    <h6 class="list-title"><a href="/single-v1/4">Luxury villa in
                                                            Rego Park</a></h6>
                                                    <p class="list-text">New Jersey City, CA, USA</p>
                                                    <div class="list-meta d-flex align-items-center">
                                                        <a href="#"><span class="fa-solid fa-bed"
                                                                style="color: #000000;"></span> 4 bed</a>
                                                        <a href="#"> <span class="fa-solid fa-shower"
                                                                style="color: #000000;"></span> 4 bath</a>
                                                        <a href="#"> <span class="fa-brands fa-uncharted"
                                                                style="color: #000000;"></span> 1200 sqft</a>
                                                    </div>
                                                    <hr class="mt-2 mb-2">
                                                    <div
                                                        class="list-meta2 d-flex justify-content-between align-items-center">
                                                        <span class="for-what">For Rent</span>
                                                        <div class="icons d-flex align-items-center">
                                                            <a href="#"><span
                                                                    class="fa-regular fa-share-from-square"></span></a>
                                                            <a href="#"><span
                                                                    class="fa-regular fa-square-plus"></span></a>
                                                            <a href="#"><span
                                                                    class="fa-regular fa-heart"></span></a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6 swiper-slide swiper-slide-active ">
                                            <div class="listing-style1">
                                                <div class="list-thumb"><img class="w-100  cover"
                                                        src="https://www.seacon.co.th/wp-content/uploads/2016/10/%E0%B9%80%E0%B8%9E%E0%B8%A3%E0%B8%B2%E0%B8%B0%E0%B8%A3%E0%B8%B1%E0%B8%81-1024x664.jpg"
                                                        alt="listings" style="height: 230px;">
                                                    <div class="sale-sticker-wrap"></div>
                                                    <div class="list-price">$82,000 / <span>mo</span></div>
                                                </div>
                                                <div class="list-content">
                                                    <h6 class="list-title"><a href="/single-v1/6">Luxury villa in
                                                            Rego Park</a></h6>
                                                    <p class="list-text">California City, CA, USA</p>
                                                    <div class="list-meta d-flex align-items-center">
                                                        <a href="#"><span class="fa-solid fa-bed"
                                                                style="color: #000000;"></span> 6 bed</a>
                                                        <a href="#"> <span class="fa-solid fa-shower"
                                                                style="color: #000000;"></span> 4 bath</a>
                                                        <a href="#"> <span class="fa-brands fa-uncharted"
                                                                style="color: #000000;"></span> 1200 sqft</a>
                                                    </div>
                                                    <hr class="mt-2 mb-2">
                                                    <div
                                                        class="list-meta2 d-flex justify-content-between align-items-center">
                                                        <span class="for-what">For Rent</span>
                                                        <div class="icons d-flex align-items-center">
                                                            <a href="#"><span
                                                                    class="fa-regular fa-share-from-square"></span></a>
                                                            <a href="#"><span
                                                                    class="fa-regular fa-square-plus"></span></a>
                                                            <a href="#"><span
                                                                    class="fa-regular fa-heart"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6 swiper-slide swiper-slide-active ">
                                            <div class="listing-style1">
                                                <div class="list-thumb"><img class="w-100  cover"
                                                        src="https://www.banidea.com/wp-content/uploads/2021/04/tropical-luxury-house-1.jpg"
                                                        alt="listings" style="height: 230px;">
                                                    <div class="sale-sticker-wrap"></div>
                                                    <div class="list-price">$82,000 / <span>mo</span></div>
                                                </div>
                                                <div class="list-content">
                                                    <h6 class="list-title"><a href="/single-v1/9">Luxury villa in
                                                            Rego Park</a></h6>
                                                    <p class="list-text">Los Angeles City, CA, USA</p>
                                                    <div class="list-meta d-flex align-items-center">
                                                        <a href="#"><span class="fa-solid fa-bed"
                                                                style="color: #000000;"></span> 2 bed</a>
                                                        <a href="#"> <span class="fa-solid fa-shower"
                                                                style="color: #000000;"></span> 3 bath</a>
                                                        <a href="#"> <span class="fa-brands fa-uncharted"
                                                                style="color: #000000;"></span> 1200 sqft</a>
                                                    </div>
                                                    <hr class="mt-2 mb-2">
                                                    <div
                                                        class="list-meta2 d-flex justify-content-between align-items-center">
                                                        <span class="for-what">For Rent</span>
                                                        <div class="icons d-flex align-items-center">
                                                            <a href="#"><span
                                                                    class="fa-regular fa-share-from-square"></span></a>
                                                            <a href="#"><span
                                                                    class="fa-regular fa-square-plus"></span></a>
                                                            <a href="#"><span
                                                                    class="fa-regular fa-heart"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6 swiper-slide swiper-slide-active ">
                                            <div class="listing-style1">
                                                <div class="list-thumb"><img class="w-100  cover"
                                                        src="https://thailandhomeplan.com/wp-content/uploads/2022/12/%E0%B8%9A%E0%B9%89%E0%B8%B2%E0%B8%99%E0%B8%AA%E0%B8%A7%E0%B8%A2%E0%B8%A1%E0%B8%B4%E0%B8%99%E0%B8%B4%E0%B8%A1%E0%B8%AD%E0%B8%A5-P-1409-1.jpg"
                                                        alt="listings" style="height: 230px;">
                                                    <div class="sale-sticker-wrap"></div>
                                                    <div class="list-price">$82,000 / <span>mo</span></div>
                                                </div>
                                                <div class="list-content">
                                                    <h6 class="list-title"><a href="/single-v1/2">Luxury villa in
                                                            Rego Park</a></h6>
                                                    <p class="list-text">Los Angeles City, CA, USA</p>
                                                    <div class="list-meta d-flex align-items-center">
                                                        <a href="#"><span class="fa-solid fa-bed"
                                                                style="color: #000000;"></span> 2 bed</a>
                                                        <a href="#"> <span class="fa-solid fa-shower"
                                                                style="color: #000000;"></span> 1 bath</a>
                                                        <a href="#"> <span class="fa-brands fa-uncharted"
                                                                style="color: #000000;"></span> 1300 sqft</a>
                                                    </div>
                                                    <hr class="mt-2 mb-2">
                                                    <div
                                                        class="list-meta2 d-flex justify-content-between align-items-center">
                                                        <span class="for-what">For Rent</span>
                                                        <div class="icons d-flex align-items-center">
                                                            <a href="#"><span
                                                                    class="fa-regular fa-share-from-square"></span></a>
                                                            <a href="#"><span
                                                                    class="fa-regular fa-square-plus"></span></a>
                                                            <a href="#"><span
                                                                    class="fa-regular fa-heart"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" col-sm-6 col-lg-6 swiper-slide swiper-slide-active ">
                                            <div class="listing-style1">
                                                <div class="list-thumb"><img class="w-100  cover"
                                                        src="https://thailandhomeplan.com/wp-content/uploads/2023/06/%E0%B8%9A%E0%B9%89%E0%B8%B2%E0%B8%99%E0%B8%8A%E0%B8%B1%E0%B9%89%E0%B8%99%E0%B9%80%E0%B8%94%E0%B8%B5%E0%B8%A2%E0%B8%A7-S-030-%E0%B8%9B%E0%B8%81%E0%B8%AB%E0%B8%A1%E0%B8%A7%E0%B8%94-jpg.webp"
                                                        alt="listings" style="height: 230px;">
                                                    <div class="sale-sticker-wrap">
                                                        <div class="list-tag fz12">
                                                            <span class="fa-solid fa-baht-sign me-2"></span>FEATURED
                                                        </div>
                                                    </div>
                                                    <div class="list-price">$14,000 / <span>mo</span></div>
                                                </div>
                                                <div class="list-content">
                                                    <h6 class="list-title"><a href="/single-v1/5">Equestrian Family
                                                            Home</a></h6>
                                                    <p class="list-text">San Diego City, CA, USA</p>
                                                    <div class="list-meta d-flex align-items-center">
                                                        <a href="#"><span class="fa-solid fa-bed"
                                                                style="color: #000000;"></span> 5 bed</a>
                                                        <a href="#"> <span class="fa-solid fa-shower"
                                                                style="color: #000000;"></span> 4 bath</a>
                                                        <a href="#"> <span class="fa-brands fa-uncharted"
                                                                style="color: #000000;"></span> 900 sqft</a>
                                                    </div>
                                                    <hr class="mt-2 mb-2">
                                                    <div
                                                        class="list-meta2 d-flex justify-content-between align-items-center">
                                                        <span class="for-what">For Rent</span>
                                                        <div class="icons d-flex align-items-center">
                                                            <a href="#"><span
                                                                    class="fa-regular fa-share-from-square"></span></a>
                                                            <a href="#"><span
                                                                    class="fa-regular fa-square-plus"></span></a>
                                                            <a href="#"><span
                                                                    class="fa-regular fa-heart"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>

                                {{-- <div class="rounded-arrow arrowY-center-position">

                                    <button
                                        class="property-by-city-prev__active swiper_button _prevs "fdprocessedid="yj6omk">
                                        <i class="fa-solid fa-angle-left"></i>
                                    </button>
                                    <button
                                        class="property-by-city-next__active swiper_button _nexts swiper-button-disabled "fdprocessedid="1ipwv"
                                        disabled="">
                                        <i class="fa-solid fa-angle-right"></i>
                                    </button>
                                </div> --}}
                                {{-- <div class="swiper-pagination"></div> --}}

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="pt30 pb-0">
                <div
                    class="cta-banner3 bgc-thm-light mx-auto maxw1600 pt100 pt60-lg pb90 pb60-lg bdrs24 position-relative overflow-hidden mx20-lg">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-lg-5 pl30-md pl15-xs aos-init aos-animate" data-aos="fade-left"
                                data-aos-delay="300">
                                <div class="mb30">
                                    <h2 class="title text-capitalize">Let’s find the right <br
                                            class="d-none d-md-block"> selling option for you</h2>
                                </div>
                                <div class="why-chose-list style2">
                                    <div class="list-one d-flex align-items-start mb30">
                                        {{-- <span class="list-icon flex-shrink-0 flaticon-security"></span> --}}
                                        <i class="list-icon flex-shrink-0 fa-solid fa-user-shield"></i>
                                        <div class="list-content flex-grow-1 ml20">
                                            <h6 class="mb-1">Property Management</h6>
                                            <p class="text mb-0 fz15">Nullam sollicitudin blandit eros eu pretium.
                                                Nullam maximus ultricies auctor.</p>
                                        </div>
                                    </div>
                                    <div class="list-one d-flex align-items-start mb30">
                                        {{-- <span class="list-icon flex-shrink-0 flaticon-keywording"></span> --}}
                                        <i class="list-icon flex-shrink-0 fa-solid fa-key"></i>
                                        <div class="list-content flex-grow-1 ml20">
                                            <h6 class="mb-1">Mortgage Services</h6>
                                            <p class="text mb-0 fz15">Nullam sollicitudin blandit eros eu pretium.
                                                Nullam maximus ultricies auctor.</p>
                                        </div>
                                    </div>
                                    <div class="list-one d-flex align-items-start mb30"><i
                                            class="list-icon flex-shrink-0 fa-solid fa-sack-dollar"></i>
                                        <div class="list-content flex-grow-1 ml20">
                                            <h6 class="mb-1">Currency Services</h6>
                                            <p class="text mb-0 fz15">Nullam sollicitudin blandit eros eu pretium.
                                                Nullam maximus ultricies auctor.</p>
                                        </div>
                                    </div>
                                </div><a class="ud-btn btn-dark" href="/home-v4">Learn More<i
                                        class="fal fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="pt45 pb-0">
                <div class="container maxw1600 bdrb1 pb50">
                    <div class="row justify-content-center wow fadeInUp" data-wow-delay="300ms">
                        <div class="col-sm-6 col-lg-4 col-xl-2">
                            <div class="funfact_one text-center">
                                <div class="details">
                                    <ul class="ps-0 mb-0">
                                        <li>
                                            <div class="timer"><span><span>400</span></span></div>
                                        </li>
                                    </ul>
                                    <p class="text mb-0">Stores around the world</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xl-2">
                            <div class="funfact_one text-center">
                                <div class="details">
                                    <ul class="ps-0 mb-0">
                                        <li>
                                            <div class="timer"><span><span>200+</span></span></div>
                                        </li>
                                    </ul>
                                    <p class="text mb-0">Stores around the world</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xl-2">
                            <div class="funfact_one text-center">
                                <div class="details">
                                    <ul class="ps-0 mb-0">
                                        <li>
                                            <div class="timer"><span><span>1k+</span></span></div>
                                        </li>
                                    </ul>
                                    <p class="text mb-0">Stores around the world</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="pb30-md">
                <div class="container">
                    <div class="row  justify-content-between align-items-center">
                        <div class="col-auto">
                            <div class="main-title aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                                <h2 class="title">Explore Apartment Types</h2>
                                <p class="paragraph">Aliquam lacinia diam quis lacus euismod</p>
                            </div>
                        </div>
                        <div class="col-auto mb30">
                            {{-- <div class="row align-items-center justify-content-center">
                                <div class="col-auto"><button
                                        class="apartment-type2-prev__active swiper_button swiper-button-disabled"
                                        disabled=""><i
                                            class="fa-solid fa-arrow-right-long fa-rotate-180"></i></i></button></div>
                                <div class="col-auto">
                                    <div
                                        class="pagination swiper--pagination apartment-type2_pagination__active swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                                        <span
                                            class="swiper-pagination-bullet swiper-pagination-bullet-active">
                                        </span>
                                            <span class="swiper-pagination-bullet"></span>
                                            <span class="swiper-pagination-bullet"></span>
                                    </div>
                                </div>
                                <div class="col-auto"><button class="apartment-type2-next__active swiper_button"
                                        fdprocessedid="fubmwm"><i
                                            class="fa-solid fa-arrow-right-long"></i></i></button>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                            <div class="property-city-slider">
                                <div
                                    class="swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                                    <div class="swiper-wrapper">
                                        {{-- style="transform: translate3d(0px, 0px, 0px);" --}}
                                        <div class="swiper-slide swiper-slide-active"
                                            style="width: 229.2px; margin-right: 15px;">
                                            <div class="item"><a href="/map-v1">
                                                    <div class="apartment-style1">
                                                        <div class="apartment-img"><img class="w-100 cover"
                                                                src="https://img5.pic.in.th/file/secure-sv1/as-1.jpeg"
                                                                alt="apartment city"></div>
                                                        <div class="apartment-content">
                                                            <h6 class="title mb-0">House</h6>
                                                            <p class="text mb-0">22 Properties</p>
                                                        </div>
                                                    </div>
                                                </a></div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-next"
                                            style="width: 229.2px; margin-right: 15px;">
                                            <div class="item"><a href="/map-v1">
                                                    <div class="apartment-style1">
                                                        <div class="apartment-img"><img class="w-100 cover"
                                                                src="https://img5.pic.in.th/file/secure-sv1/as-2.jpeg"
                                                                alt="apartment city"></div>
                                                        <div class="apartment-content">
                                                            <h6 class="title mb-0">Apartments</h6>
                                                            <p class="text mb-0">22 Properties</p>
                                                        </div>
                                                    </div>
                                                </a></div>
                                        </div>
                                        <div class="swiper-slide" style="width: 229.2px; margin-right: 15px;">
                                            <div class="item"><a href="/map-v1">
                                                    <div class="apartment-style1">
                                                        <div class="apartment-img"><img class="w-100 cover"
                                                                src="https://img5.pic.in.th/file/secure-sv1/as-3.jpeg"
                                                                alt="apartment city"></div>
                                                        <div class="apartment-content">
                                                            <h6 class="title mb-0">Office</h6>
                                                            <p class="text mb-0">22 Properties</p>
                                                        </div>
                                                    </div>
                                                </a></div>
                                        </div>
                                        <div class="swiper-slide" style="width: 229.2px; margin-right: 15px;">
                                            <div class="item"><a href="/map-v1">
                                                    <div class="apartment-style1">
                                                        <div class="apartment-img"><img class="w-100 cover"
                                                                src="https://img2.pic.in.th/pic/as-4.jpeg"
                                                                alt="as-4.jpeg" alt="apartment city"></div>
                                                        <div class="apartment-content">
                                                            <h6 class="title mb-0">Villa</h6>
                                                            <p class="text mb-0">22 Properties</p>
                                                        </div>
                                                    </div>
                                                </a></div>
                                        </div>
                                        <div class="swiper-slide" style="width: 229.2px; margin-right: 15px;">
                                            <div class="item"><a href="/map-v1">
                                                    <div class="apartment-style1">
                                                        <div class="apartment-img"><img class="w-100 cover"
                                                                src="https://img5.pic.in.th/file/secure-sv1/as-5.jpeg"
                                                                alt="apartment city"></div>
                                                        <div class="apartment-content">
                                                            <h6 class="title mb-0">House</h6>
                                                            <p class="text mb-0">22 Properties</p>
                                                        </div>
                                                    </div>
                                                </a></div>
                                        </div>
                                        <div class="swiper-slide" style="width: 229.2px; margin-right: 15px;">
                                            <div class="item"><a href="/map-v1">
                                                    <div class="apartment-style1">
                                                        <div class="apartment-img"><img class="w-100 cover"
                                                                src="https://img5.pic.in.th/file/secure-sv1/as-2.jpeg"
                                                                alt="apartment city"></div>
                                                        <div class="apartment-content">
                                                            <h6 class="title mb-0">Apartments</h6>
                                                            <p class="text mb-0">22 Properties</p>
                                                        </div>
                                                    </div>
                                                </a></div>
                                        </div>
                                        <div class="swiper-slide" style="width: 229.2px; margin-right: 15px;">
                                            <div class="item"><a href="/map-v1">
                                                    <div class="apartment-style1">
                                                        <div class="apartment-img"><img class="w-100 cover"
                                                                src="https://img5.pic.in.th/file/secure-sv1/as-3.jpeg"
                                                                alt="apartment city"></div>
                                                        <div class="apartment-content">
                                                            <h6 class="title mb-0">Office</h6>
                                                            <p class="text mb-0">22 Properties</p>
                                                        </div>
                                                    </div>
                                                </a></div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-active"
                                            style="width: 229.2px; margin-right: 15px;">
                                            <div class="item"><a href="/map-v1">
                                                    <div class="apartment-style1">
                                                        <div class="apartment-img"><img class="w-100 cover"
                                                                src="https://img5.pic.in.th/file/secure-sv1/as-1.jpeg"
                                                                alt="apartment city"></div>
                                                        <div class="apartment-content">
                                                            <h6 class="title mb-0">House</h6>
                                                            <p class="text mb-0">22 Properties</p>
                                                        </div>
                                                    </div>
                                                </a></div>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- <section class="pt0 pb40-md">
                <div
                    class="cta-banner bgc-f7 mx-auto maxw1600 pt70 pb140 pb30-md bdrs12 position-relative mx20-lg px20-sm">
                    <div class="container">
                        <div class="row align-items-start align-items-xl-center">
                            <div class="col-md-10 col-lg-7 col-xl-6">
                                <div class="position-relative mb35 mb0-sm aos-init aos-animate" data-aos="fade-left"
                                    data-aos-delay="0">
                                    <div class="exclusive-agent-widget mb30-sm">
                                        <h4 class="title mb20"><span class="text-thm">4+</span> Exclusive Agents
                                        </h4>
                                        <div class="thumb d-flex align-items-center mb20">
                                            <div class="flex-shrink-0"><img class="wa"
                                                    src="/images/team/ea-1.png" alt="team"></div>
                                            <div class="flex-grow-1 ml20">
                                                <h6 class="title fz14 mb-0">Marvin McKinney</h6>
                                                <p class="fz13 mb-0">Designer</p>
                                            </div>
                                        </div>
                                        <div class="thumb d-flex align-items-center mb20">
                                            <div class="flex-shrink-0"><img class="wa"
                                                    src="/images/team/ea-2.png" alt="team"></div>
                                            <div class="flex-grow-1 ml20">
                                                <h6 class="title fz14 mb-0">Ralph Edwards</h6>
                                                <p class="fz13 mb-0">Designer</p>
                                            </div>
                                        </div>
                                        <div class="thumb d-flex align-items-center mb20">
                                            <div class="flex-shrink-0"><img class="wa"
                                                    src="/images/team/ea-3.png" alt="team"></div>
                                            <div class="flex-grow-1 ml20">
                                                <h6 class="title fz14 mb-0">Annette Black</h6>
                                                <p class="fz13 mb-0">Designer</p>
                                            </div>
                                        </div>
                                        <div class="thumb d-flex align-items-center mb20">
                                            <div class="flex-shrink-0"><img class="wa"
                                                    src="/images/team/ea-4.png" alt="team"></div>
                                            <div class="flex-grow-1 ml20">
                                                <h6 class="title fz14 mb-0">Jane Cooper</h6>
                                                <p class="fz13 mb-0">Designer</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="exclusive-agent-single mb30-sm">
                                        <div class="agent-img"><img src="/images/team/agent-5.jpg" alt="team">
                                        </div>
                                        <div class="agent-content pt20">
                                            <h6 class="title mb-0">Marvin McKinney</h6>
                                            <p class="fz15 mb-0">Designer</p>
                                        </div>
                                    </div>
                                    <div class="img-box-10 position-relative d-none d-xl-block"><img
                                            class="img-1 spin-right" src="/images/about/element-3.png"
                                            alt="shape"><img class="img-2 bounce-x contain"
                                            src="/images/about/element-5.png" alt="shape"><img
                                            class="img-3 bounce-y contain" src="/images/about/element-6.png"
                                            alt="shape"><img class="img-4 bounce-y"
                                            src="/images/about/element-7.png" alt="shape"><img
                                            class="img-5 spin-right" src="/images/about/element-8.png"
                                            alt="shape"></div>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-5 col-xl-5 offset-xl-1">
                                <div class="about-box-1 pe-4 mt100 mt0-lg mb30-lg aos-init aos-animate"
                                    data-aos="fade-right" data-aos-delay="200">
                                    <h2 class="title mb20">Let’s find the right selling option for you</h2>
                                    <p class="text mb55 mb30-md fz14">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do <br class="d-none d-xl-block"> eiusmod tempor
                                        incididunt.</p>
                                    <div class="list-style1 mb60 mb30-md">
                                        <ul>
                                            <li><i class="far fa-check text-white bgc-dark fz15"></i>Find excellent
                                                deals</li>
                                            <li><i class="far fa-check text-white bgc-dark fz15"></i>Friendly host
                                                &amp; Fast support</li>
                                            <li><i class="far fa-check text-white bgc-dark fz15"></i>List your own
                                                property</li>
                                        </ul>
                                    </div><a class="ud-btn btn-dark" href="/home-v4">See More<i
                                            class="fal fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            {{-- <section class="pt0 pb40-md">
                <div class="container">
                    <div class="row  justify-content-between align-items-center">
                        <div class="col-auto">
                            <div class="main-title aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                                <h2 class="title">People Love Living with Realton</h2>
                                <p class="paragraph">Aliquam lacinia diam quis lacus euismod</p>
                            </div>
                        </div>
                        <div class="col-auto mb30">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-auto"><button
                                        class="testimonila_prev__active swiper_button swiper-button-disabled"
                                        disabled=""><i class="far fa-arrow-left-long"></i></button></div>
                                <div class="col-auto">
                                    <div
                                        class="pagination swiper--pagination testimonila_pagination__active swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                                        <span
                                            class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span
                                            class="swiper-pagination-bullet"></span>
                                    </div>
                                </div>
                                <div class="col-auto"><button class="testimonila_next__active swiper_button"
                                        fdprocessedid="cp36nv"><i class="far fa-arrow-right-long"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="testimonial-slider aos-init aos-animate" data-aos="fade-up"
                                data-aos-delay="300">
                                <div
                                    class="swiper swiper-initialized swiper-horizontal swiper-pointer-events overflow-visible swiper-backface-hidden">
                                    <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                                        <div class="swiper-slide swiper-slide-active"
                                            style="width: 382px; margin-right: 30px;">
                                            <div class="item">
                                                <div class="testimonial-style1 position-relative">
                                                    <div class="testimonial-content">
                                                        <h5 class="title">Great Work</h5><span
                                                            class="icon fas fa-quote-left"></span>
                                                        <p class="text">Amazing design, easy to customize and a
                                                            design quality superlative account on its cloud platform for
                                                            the optimized performance. And we didn’t on our original
                                                            designs.</p>
                                                        <div class="testimonial-review"><a class="me-1"
                                                                href="#"><i class="fas fa-star"></i></a><a
                                                                class="me-1" href="#"><i
                                                                    class="fas fa-star"></i></a><a class="me-1"
                                                                href="#"><i class="fas fa-star"></i></a><a
                                                                class="me-1" href="#"><i
                                                                    class="fas fa-star"></i></a><a class="me-1"
                                                                href="#"><i class="fas fa-star"></i></a></div>
                                                    </div>
                                                    <div class="thumb d-flex align-items-center">
                                                        <div class="flex-shrink-0"><img class="wa"
                                                                src="/images/testimonials/testimonial-1.png"
                                                                alt="avatar"></div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <h6 class="mb-0">Leslie Alexander</h6>
                                                            <p class="mb-0">Nintendo</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-next"
                                            style="width: 382px; margin-right: 30px;">
                                            <div class="item">
                                                <div class="testimonial-style1 position-relative">
                                                    <div class="testimonial-content">
                                                        <h5 class="title">Great Work</h5><span
                                                            class="icon fas fa-quote-left"></span>
                                                        <p class="text">Amazing design, easy to customize and a
                                                            design quality superlative account on its cloud platform for
                                                            the optimized performance. And we didn’t on our original
                                                            designs.</p>
                                                        <div class="testimonial-review"><a class="me-1"
                                                                href="#"><i class="fas fa-star"></i></a><a
                                                                class="me-1" href="#"><i
                                                                    class="fas fa-star"></i></a><a class="me-1"
                                                                href="#"><i class="fas fa-star"></i></a><a
                                                                class="me-1" href="#"><i
                                                                    class="fas fa-star"></i></a><a class="me-1"
                                                                href="#"><i class="fas fa-star"></i></a></div>
                                                    </div>
                                                    <div class="thumb d-flex align-items-center">
                                                        <div class="flex-shrink-0"><img class="wa"
                                                                src="/images/testimonials/testimonial-2.png"
                                                                alt="avatar"></div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <h6 class="mb-0">Floyd Miles</h6>
                                                            <p class="mb-0">Bank of America</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" style="width: 382px; margin-right: 30px;">
                                            <div class="item">
                                                <div class="testimonial-style1 position-relative">
                                                    <div class="testimonial-content">
                                                        <h5 class="title">Great Work</h5><span
                                                            class="icon fas fa-quote-left"></span>
                                                        <p class="text">Amazing design, easy to customize and a
                                                            design quality superlative account on its cloud platform for
                                                            the optimized performance. And we didn’t on our original
                                                            designs.</p>
                                                        <div class="testimonial-review"><a class="me-1"
                                                                href="#"><i class="fas fa-star"></i></a><a
                                                                class="me-1" href="#"><i
                                                                    class="fas fa-star"></i></a><a class="me-1"
                                                                href="#"><i class="fas fa-star"></i></a><a
                                                                class="me-1" href="#"><i
                                                                    class="fas fa-star"></i></a><a class="me-1"
                                                                href="#"><i class="fas fa-star"></i></a></div>
                                                    </div>
                                                    <div class="thumb d-flex align-items-center">
                                                        <div class="flex-shrink-0"><img class="wa"
                                                                src="/images/testimonials/testimonial-3.png"
                                                                alt="avatar"></div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <h6 class="mb-0">Leslie Alexander</h6>
                                                            <p class="mb-0">Nintendo</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" style="width: 382px; margin-right: 30px;">
                                            <div class="item">
                                                <div class="testimonial-style1 position-relative">
                                                    <div class="testimonial-content">
                                                        <h5 class="title">Great Work</h5><span
                                                            class="icon fas fa-quote-left"></span>
                                                        <p class="text">Amazing design, easy to customize and a
                                                            design quality superlative account on its cloud platform for
                                                            the optimized performance. And we didn’t on our original
                                                            designs.</p>
                                                        <div class="testimonial-review"><a class="me-1"
                                                                href="#"><i class="fas fa-star"></i></a><a
                                                                class="me-1" href="#"><i
                                                                    class="fas fa-star"></i></a><a class="me-1"
                                                                href="#"><i class="fas fa-star"></i></a><a
                                                                class="me-1" href="#"><i
                                                                    class="fas fa-star"></i></a><a class="me-1"
                                                                href="#"><i class="fas fa-star"></i></a></div>
                                                    </div>
                                                    <div class="thumb d-flex align-items-center">
                                                        <div class="flex-shrink-0"><img class="wa"
                                                                src="/images/testimonials/testimonial-4.png"
                                                                alt="avatar"></div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <h6 class="mb-0">Floyd Miles</h6>
                                                            <p class="mb-0">Bank of America</p>
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
            </section> --}}
            <section class="mb0-md pb30-md">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 m-auto aos-init">
                            <div class="main-title text-start text-md-center">
                                <h2 class="title">From Our Blog</h2>
                                <p class="paragraph">Aliquam lacinia diam quis lacus euismod</p>
                            </div>
                        </div>
                    </div>
                    <div class="row aos-init"data-aos-delay="300">
                        <div class="col-sm-6 col-lg-4">
                            <div class="blog-style1">
                                <div class="blog-img"><img class="w-100 cover" src="/image/blog-1.jpg"
                                        alt="blog"></div>
                                <div class="blog-content">
                                    <div class="date"><span class="month">July</span><span class="day">28</span>
                                    </div><a class="tag" href="#">Living
                                        Room</a>
                                    <h6 class="title mt-1"><a href="/blogs/1">Private Contemporary Home Balancing
                                            Openness</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="blog-style1">
                                <div class="blog-img"><img class="w-100 cover" src="/image/blog-2.jpg"
                                        alt="blog"></div>
                                <div class="blog-content">
                                    <div class="date"><span class="month">July</span><span class="day">28</span>
                                    </div><a class="tag" href="#">Living
                                        Room</a>
                                    <h6 class="title mt-1"><a href="/blogs/2">Contemporary Home Private Balancing
                                            Openness</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="blog-style1">
                                <div class="blog-img"><img class="w-100
                                     cover"
                                        src="/image/blog-3.jpg" alt="blog"></div>
                                <div class="blog-content">
                                    <div class="date"><span class="month">July</span><span class="day">28</span>
                                    </div><a class="tag" href="#">Living
                                        Room</a>
                                    <h6 class="title mt-1"><a href="/blogs/3">Balancing Private Contemporary Home
                                            Openness</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- test2 --}}
            <section class="mb0-md pb30-md">
                <div class="backg-container py-5">
                    <div class="container">

                        <div class="row">
                            <div class="col-lg-12 m-auto aos-init">
                                <div class="main-title text-start text-md-center">
                                    <h2 class="title">We have the most listings and constant updates.</h2>
                                    <h2 class="title">So you’ll never miss out.</h2>
                                    {{-- <p class="paragraph">Aliquam lacinia diam quis lacus euismod</p> --}}
                                </div>
                            </div>
                        </div>

                        <div class="row mt-8">
                            <div class="col-lg-4 mb-6 mb-lg-0">
                                <div
                                    class="card border-hover shadow-2 shadow-hover-lg-1 pl-5 pr-6 py-6 h-100 hover-change-image">
                                    <div class="row no-gutters">
                                        <div class="col-sm-3">
                                            <img src="https://img5.pic.in.th/file/secure-sv1/group-16.png"
                                                alt="Buy a new home">
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="card-body p-0 pl-0 pl-sm-5 pt-5 pt-sm-0">
                                                <a href="single-property-1.html"
                                                    class="d-flex align-items-center text-dark hover-secondary">
                                                    <h4 class="fs-20 lh-1625 mb-1">Buy a new home </h4>
                                                    {{-- <span class="ml-2 text-primary fs-42 lh-1 hover-image d-inline-flex align-items-center">
                                        <svg class="icon icon-long-arrow"><use xlink:href="#icon-long-arrow"></use></svg>
                                        </span> --}}
                                                </a>
                                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                    sed do eiusmod tempor</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-6 mb-lg-0">
                                <div
                                    class="card border-hover shadow-2 shadow-hover-lg-1 pl-5 pr-6 py-6 h-100 hover-change-image">
                                    <div class="row no-gutters">
                                        <div class="col-sm-3">
                                            <img src="https://img2.pic.in.th/pic/group-17.png" alt="Sell a home">
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="card-body p-0 pl-0 pl-sm-5 pt-5 pt-sm-0">
                                                <a href="single-property-1.html"
                                                    class="d-flex align-items-center text-dark hover-secondary">
                                                    <h4 class="fs-20 lh-1625 mb-1">Sell a home </h4>
                                                    {{-- <span class="ml-2 text-primary fs-42 lh-1 hover-image d-inline-flex align-items-center">
                                    <svg class="icon icon-long-arrow"><use xlink:href="#icon-long-arrow"></use></svg>
                                    </span> --}}
                                                </a>
                                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                    sed do eiusmod tempor</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-6 mb-lg-0">
                                <div
                                    class="card border-hover shadow-2 shadow-hover-lg-1 pl-5 pr-6 py-6 h-100 hover-change-image">
                                    <div class="row no-gutters">
                                        <div class="col-sm-3">
                                            <img src="https://img2.pic.in.th/pic/group-21.png" alt="Rent a home">
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="card-body p-0 pl-0 pl-sm-5 pt-5 pt-sm-0">
                                                <a href="single-property-1.html"
                                                    class="d-flex align-items-center text-dark hover-secondary">
                                                    <h4 class="fs-20 lh-1625 mb-1">Rent a home </h4>
                                                    {{-- <span class="ml-2 text-primary fs-42 lh-1 hover-image d-inline-flex align-items-center">
                                    <svg class="icon icon-long-arrow"><use xlink:href="#icon-long-arrow"></use></svg>
                                    </span> --}}
                                                </a>
                                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                    sed do eiusmod tempor</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    {{-- </div> --}}
            </section>

            <section class="our-partners p-0">
                <div class="container">
                    <div class="row">
                        {{-- <div class="col-lg-12 aos-init" data-aos="fade-up"> --}}
                        <div class="col-lg-12 aos-init">
                            <div class="main-title text-center">
                                <h6>Trusted by the world’s best</h6>
                            </div>
                        </div>
                        <div class="col-lg-12 my-5 text-center">
                            {{-- <div class="dots_none nav_none aos-init" data-aos="fade-up" data-aos-delay="100"> --}}
                            <div class="dots_none nav_none aos-init dots_pad" data-aos-delay="100">
                                <div
                                    class="swiperes swiper-container swiper-initialized swiper-horizontal swiper-pointer-events">
                                    <div class="swiper-wrapper"
                                        style="transform: translate3d(-1418.67px, 0px, 0px); transition-duration: 0ms;">
                                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev"
                                            data-swiper-slide-index="0" style="width: 192.667px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="partner_item"><img class="wa m-auto"
                                                        src="https://img5.pic.in.th/file/secure-sv1/1d103a8fac559d769.png"
                                                        alt="1.png" style="object-fit: contain;"></div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                                            data-swiper-slide-index="1" style="width: 192.667px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="partner_item"><img class="wa m-auto"
                                                        src="https://img2.pic.in.th/pic/25430ad9431a64e27.png"
                                                        alt="2.png" style="object-fit: contain;"></div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next"
                                            data-swiper-slide-index="2" style="width: 192.667px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="partner_item"><img class="wa m-auto"
                                                        src="https://img2.pic.in.th/pic/30029e1ffa8c98d85.png"
                                                        alt="3.png" style="object-fit: contain;"></div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3"
                                            style="width: 192.667px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="partner_item"><img class="wa m-auto"
                                                        src="https://img2.pic.in.th/pic/45f348a5ff73a77c0.png"
                                                        alt="4.png" style="object-fit: contain;"></div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4"
                                            style="width: 192.667px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="partner_item"><img class="wa m-auto"
                                                        src="https://img2.pic.in.th/pic/5ce9191072b8019e8.png"
                                                        alt="5.png" style="object-fit: contain;"></div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="5"
                                            style="width: 192.667px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="partner_item"><img class="wa m-auto"
                                                        src="https://img2.pic.in.th/pic/6c0bf68a04460d508.png"
                                                        alt="6.png" style="object-fit: contain;"></div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="0"
                                            style="width: 192.667px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="partner_item"><img class="wa m-auto"
                                                        src="https://img5.pic.in.th/file/secure-sv1/1d103a8fac559d769.png"
                                                        alt="1.png" style="object-fit: contain;"></div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="1"
                                            style="width: 192.667px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="partner_item"><img class="wa m-auto"
                                                        src="https://img2.pic.in.th/pic/25430ad9431a64e27.png"
                                                        alt="2.png" style="object-fit: contain;"></div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="2"
                                            style="width: 192.667px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="partner_item"><img class="wa m-auto"
                                                        src="https://img2.pic.in.th/pic/30029e1ffa8c98d85.png"
                                                        alt="3.png" style="object-fit: contain;"></div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" data-swiper-slide-index="3"
                                            style="width: 192.667px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="partner_item"><img class="wa m-auto"
                                                        src="https://img2.pic.in.th/pic/45f348a5ff73a77c0.png"
                                                        alt="4.png" style="object-fit: contain;"></div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" data-swiper-slide-index="4"
                                            style="width: 192.667px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="partner_item"><img class="wa m-auto"
                                                        src="https://img2.pic.in.th/pic/5ce9191072b8019e8.png"
                                                        alt="5.png" style="object-fit: contain;"></div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" data-swiper-slide-index="5"
                                            style="width: 192.667px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="partner_item"><img class="wa m-auto"
                                                        src="https://img2.pic.in.th/pic/6c0bf68a04460d508.png"
                                                        alt="6.png" style="object-fit: contain;"></div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev"
                                            data-swiper-slide-index="0" style="width: 192.667px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="partner_item"><img class="wa m-auto"
                                                        src="https://img5.pic.in.th/file/secure-sv1/1d103a8fac559d769.png"
                                                        alt="1.png" style="object-fit: contain;"></div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                                            data-swiper-slide-index="1" style="width: 192.667px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="partner_item"><img class="wa m-auto"
                                                        src="https://img2.pic.in.th/pic/25430ad9431a64e27.png"
                                                        alt="2.png" style="object-fit: contain;"></div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next"
                                            data-swiper-slide-index="2" style="width: 192.667px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="partner_item"><img class="wa m-auto"
                                                        src="https://img2.pic.in.th/pic/30029e1ffa8c98d85.png"
                                                        alt="3.png" style="object-fit: contain;"></div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3"
                                            style="width: 192.667px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="partner_item"><img class="wa m-auto"
                                                        src="https://img2.pic.in.th/pic/45f348a5ff73a77c0.png"
                                                        alt="4.png" style="object-fit: contain;"></div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4"
                                            style="width: 192.667px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="partner_item"><img class="wa m-auto"
                                                        src="https://img2.pic.in.th/pic/5ce9191072b8019e8.png"
                                                        alt="5.png" style="object-fit: contain;"></div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="5"
                                            style="width: 192.667px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="partner_item"><img class="wa m-auto"
                                                        src="https://img2.pic.in.th/pic/6c0bf68a04460d508.png"
                                                        alt="6.png" style="object-fit: contain;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            {{-- <section class="our-cta p-0">
                <div class="cta-banner bgc-thm-light mx-auto maxw1600 pt90 pt60-md pb90 pb60-md bdrs12 position-relative mx20-lg px20-md aos-init"
                    data-aos="fade" data-aos-delay="300">
                    <div class="img-box-5"><img class="img-1 bounce-y contain" src="/images/about/element-4.png"
                            alt="shape"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7 col-xl-6">
                                <div class="cta-style3">
                                    <h2 class="cta-title">Get Your Dream House</h2>
                                    <p class="cta-text mb25">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do <br class="d-none d-md-block"> eiusmod tempor incididunt.</p><a
                                        class="ud-btn btn-dark" href="/register">Register Now <i
                                            class="fal fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-5 col-xl-4 offset-xl-2 d-none d-lg-block">
                                <div class="cta-img"><img class="w-100 h-100 cover"
                                        src="/images/about/cta-building-1.png" alt="shape"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}


        </div>
    </div>
@endsection
