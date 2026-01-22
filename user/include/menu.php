<!-- Preloader -->
        <div id="preloader-wrap">
            <div class="spinner spinner-8">
                <div class="ms-circle1 ms-child"></div>
                <div class="ms-circle2 ms-child"></div>
                <div class="ms-circle3 ms-child"></div>
                <div class="ms-circle4 ms-child"></div>
                <div class="ms-circle5 ms-child"></div>
                <div class="ms-circle6 ms-child"></div>
                <div class="ms-circle7 ms-child"></div>
                <div class="ms-circle8 ms-child"></div>
                <div class="ms-circle9 ms-child"></div>
                <div class="ms-circle10 ms-child"></div>
                <div class="ms-circle11 ms-child"></div>
                <div class="ms-circle12 ms-child"></div>
            </div>
        </div>
        <!-- Overlays -->
        <div class="ms-aside-overlay ms-overlay-left ms-toggler" data-target="#ms-side-nav" data-toggle="slideLeft"></div>
        <div class="ms-aside-overlay ms-overlay-right">
            <a href="javascript:;"><img src="img/circle-left.png" alt=""></a>
        </div>
        <!-- Sidebar Navigation Left -->
        <aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">
            <!-- Logo -->
            <div class="logo-sn ms-d-block-lg">
                <a class="pl-0 ml-0 text-center" href="index.html"> <img src="../img/logo.png" alt="logo"> </a>
            </div>
            <!-- Navigation -->
            <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
                <!-- Dashboard -->
                <li class="menu-item">
                    <a href="#">
                        <span>
                            <img src="img/box.png" alt="">Home 
                        </span>
                    </a>
                </li>
                <!-- /Dashboard -->
                <li class="menu-item">
                    <a href="account-center.php">
                        <span>
                            <img src="img/box.png" alt="">Account Center
                        </span>
                    </a>
                </li>
                <!-- Basic UI Elements -->
                <li class="menu-item">
                    <a href="board.php">
                        <span>
                            <img src="img/box.png" alt="">Board
                        </span>
                    </a>
                </li>
                <!-- /Basic UI Elements -->
                <!-- Advanced UI Elements -->
                <li class="menu-item">
                    <a href="request-send.php">
                        <span>
                            <img src="img/box.png" alt="">Request Send
                        </span>
                    </a>
                </li>
                <!-- /Advanced UI Elements -->
                <li class="menu-item">
                    <a href="favourite-artist.php">
                        <span>
                            <img src="img/box.png" alt="">
                            Favourite Artist
                        </span>
                    </a>
                </li>
                <!-- Form Elements -->
                <li class="menu-item">
                    <a href="#" class="has-chevron" data-toggle="collapse" data-target="#form-elements" aria-expanded="false" aria-controls="form-elements">
                        <span>
                            <img src="img/box.png" alt="">More
                        </span>
                    </a>
                    <ul id="form-elements" class="collapse" aria-labelledby="form-elements" data-parent="#side-nav-accordion">
                        <li> <a href="faq.php"><img src="img/box.png" alt=""> FAQ</a> </li>
                        <li> <a href="help-support.php"><img src="img/box.png" alt=""> Help & Support</a> </li>
                        <li> <a href="privacy-policy.php"><img src="img/box.png" alt=""> Privacy Policy</a> </li>
                        <li> <a href="about-us.php"><img src="img/box.png" alt=""> About Us</a> </li>
                        <li> <a href="terms-conditions.php"><img src="img/box.png" alt=""> Terms & Conditions</a> </li>
                        <li> <a href=""><img src="img/box.png" alt=""> Settings</a></li>
                    </ul>
                </li>
                <!-- /Form Elements -->
            </ul>
        </aside>
        <!-- Main Content -->
        <main class="body-content">
            <!-- Navigation Bar -->
            <nav class="navbar ms-navbar">
                <div class="ms-aside-toggler ms-toggler pl-0" data-target="#ms-side-nav" data-toggle="slideLeft">
                    <span class="ms-toggler-bar bg-primary"></span>
                    <span class="ms-toggler-bar bg-primary"></span>
                    <span class="ms-toggler-bar bg-primary"></span>
                </div>
                <ul class="ms-nav-list ms-inline mb-0" id="ms-nav-options">
                    <li class="ms-nav-item dropdown">
                        <a href="#" class="text-disabled ms-has-notification" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flaticon-bell"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="notificationDropdown">
                            <li class="dropdown-menu-header">
                                <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Notifications</span></h6>
                                <span class="badge badge-pill badge-info">4 New</span>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li class="ms-scrollable ms-dropdown-list">
                                <a class="media p-2" href="#">
                                    <div class="media-body">
                                        <span>12 ways to improve your crypto dashboard</span>
                                        <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 30 seconds ago</p>
                                    </div>
                                </a>
                                <a class="media p-2" href="#">
                                    <div class="media-body">
                                        <span>You have newly registered users</span>
                                        <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 45 minutes ago</p>
                                    </div>
                                </a>
                                <a class="media p-2" href="#">
                                    <div class="media-body">
                                        <span>Your account was logged in from an unauthorized IP</span>
                                        <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 2 hours ago</p>
                                    </div>
                                </a>
                                <a class="media p-2" href="#">
                                    <div class="media-body">
                                        <span>An application form has been submitted</span>
                                        <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 1 day ago</p>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-menu-footer text-center">
                                <a href="#">View all Notifications</a>
                            </li>
                        </ul>
                    </li>
                    <li class="ms-nav-item ms-nav-user dropdown">
                        <a href="#"  id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img class="ms-user-img ms-img-round float-right" src="img/people-5.jpg" alt="people"> </a>
                        <ul class="dropdown-menu dropdown-menu-right user-dropdown" aria-labelledby="userDropdown">
                            <li class="dropdown-menu-header">
                                <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Welcome, Anny Farisha</span></h6>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li class="ms-dropdown-list">
                                <a class="media fs-14 p-2" href="#"> <span><i class="flaticon-user mr-2"></i> Profile</span> </a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-menu-footer">
                                <a class="media fs-14 p-2" href="pages/prebuilt-pages/default-login.html"> <span><i class="flaticon-shut-down mr-2"></i> Logout</span> </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="ms-toggler ms-d-block-sm pr-0 ms-nav-toggler" data-toggle="slideDown" data-target="#ms-nav-options">
                    <span class="ms-toggler-bar bg-primary"></span>
                    <span class="ms-toggler-bar bg-primary"></span>
                    <span class="ms-toggler-bar bg-primary"></span>
                </div>
            </nav>
            <!-- Body Content Wrapper -->
            <div class="ms-content-wrapper">