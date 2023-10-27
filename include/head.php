<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeddah Mazad Website</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/OG Logo.png" type="image/svgicon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/default-font/Acumin-BdItPro.otf">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Custom RTL CSS -->
    <!-- <link rel="stylesheet" href="assets/css/stylertl.css"> -->
    <!-- Slick slider css  -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <!-- Slick slider theme css  -->
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <!-- fontawesome kit  -->
    <script src="assets/js/kit-fontawesome.js"></script>
 <!-- Select2 -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> -->
        <link rel="stylesheet" href="assets/select-2/select2.min.css">
</head>
</head>

<body>
    <header class="header_features fixed-top">
        <!-- ==============================Topbar Start==============================-->
        <div class="container-fluid topbar px-md-5">
            <nav class="navbar navbar-expand-lg py-0">
                <ul class="navbar-nav d-flex align-items-center">
                    <li class="list-unstyled nav-item dropdown custom_dropdown">
                        <a href="#" class="nav-link dropdown-toggle p-0" data-bs-toggle="dropdown"
                            id="navbarDropdownMenu" role="button"><i class="fa-regular fa-user"></i>
                            MY ACCOUNT
                        </a>
                        <ul class="dropdown-menu drop_menu rounded-0" aria-labelledby="navbarDropdownMenu">
                            <li><a class="dropdown-item" href="filtersearch.php">Filter Search</a></li>
                            <li><a class="dropdown-item" href="mazad_listing.php">Mazad Listing</a></li>
                            <li><a class="dropdown-item" href="page_other_auctions.php">Other Auctions</a></li>
                            <li><a class="dropdown-item" href="chat.php">Chat</a></li>
                            <li><a class="dropdown-item" href="mazad_about.php">Mazad About</a></li>
                            <li><a class="dropdown-item" href="agreement.php">Agreement</a></li>
                            <li><a class="dropdown-item" href="terms.php">Terms&Cond</a></li>
                            <li><a class="dropdown-item" href="services.php">Services</a></li>
                            <li><a class="dropdown-item" href="login.php">Login</a></li>
                            <li><a class="dropdown-item" href="signup.php">Signup</a></li>
                            <li class="d-inline-flex gap-3 ps-3 w-100">
                                <div class="form-check form-switch">
                                <label class="form-check-label"
                                    for="flexSwitchCheckDefault">Dark
                                    Mode</label>
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav logout">
                    <li class="nav-item">
                        <a class="nav-link pt-0" href="#"></a>LOG OUT</a>
                    </li>
                </ul>
                <div class="align-items-center navsbtns">
                    <ul class="navbar-nav d-flex align-items-center gap-lg-4">
                        <li class="nav-item">
                            <a class="nav-link" href="#">ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">INBOX</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">SERVICES</a>
                        </li>
                        <li class="nav-item dropdown custom_dropdown">
                            <a class="nav-link dropdown-toggle btn" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                LANGUAGE
                            </a>
                            <ul class="dropdown-menu drop_menu2 rounded-0 border-0 m-0">
                                <li><a class="dropdown-item justify-content-center d-flex" href="#">
                                        English</a></li>
                                <li><a class="dropdown-item justify-content-center d-flex" href="#">
                                        عَرَبِيّ</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="bottom_line d-none d-md-block">
            <hr>
        </div>
        <!-- ==============================Topbar End==============================-->
        <!-- ==============================Navbar Start==============================-->
        <div class="container-fluid px-0 px-lg-5"style="box-shadow: 0px 15px 10px -15px #111;">
            <nav class="navbar navbar-expand-lg bottom_bar">
                <a href="index.php" class="navbar-brand branding ps-lg-0 ps-2">
                    <img src="assets/images/logo/Logojeddah_11zon.png" alt="logo">
                </a>
                <div class=" ml-auto d-flex gap-3">
                    <div class="searchaddicon">
                        <div class=" d-flex align-items-center gap-3">
                            <ul class="p-0 m-0">
                                <li class="list-unstyled"><a href="#"><i class="fa-solid fa-circle-plus fs-3"></i></a>
                                </li>
                            </ul>
                            <ul class="p-0 m-0">
                                <li class="list-unstyled">
                                    <a href="#" class="btn float-end shadow-none" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvas" role="button">
                                        <i class="fa-solid fa-magnifying-glass fs-3" data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvas"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- /////////// -->
                        <div class="container-fluid">
                            <div class="offcanvas offcanvas-start w-100 h-75" tabindex="-1" id="offcanvas"
                                data-bs-keyboard="false" data-bs-backdrop="false">
                                <div class="offcanvas-header">
                                    <div class="search-box w-100">
                                        <form class="search-form d-flex align-items-center" method="POST" action="#">
                                            <img src="assets/images/icons/leftarrow_11x16.png" alt="leftarrow"
                                                class="me-2">
                                            <input type="search" placeholder="Search Jeddah Mazad"
                                                title="Enter search keyword" />
                                            <button type="submit" title="Search"><i
                                                    class="fa-solid fa-magnifying-glass"></i></button>
                                        </form>
                                    </div>
                                    <button type="button" class="btn-close text-reset shadow-none ms-2"
                                        data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body offcanvasbody px-4">
                                    <h5 class="px-3">Top Searches</h5>
                                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-start" id="menu">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i
                                                    class="fa-solid fa-magnifying-glass me-3"></i>hermes
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#submenu1" data-bs-toggle="collapse"
                                                class="nav-link">
                                                                                              <i
                                                    class="fa-solid fa-magnifying-glass me-3"></i>rolex </a>
                                        </li>
                                        <li>
                                            <a href="#" class="nav-link">
                                                                                      <i
                                                    class="fa-solid fa-magnifying-glass me-3"></i>chanel</a>
                                        </li>
                                        <li>
                                            <a href="#" class="nav-link">
                                                                                             <i
                                                    class="fa-solid fa-magnifying-glass me-3"></i>louis vitton</a>
                                        </li>
                                        <li>
                                            <a href="#" class="nav-link">
                                                                                               <i
                                                    class="fa-solid fa-magnifying-glass me-3"></i>bracelet</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /////////// -->
                    </div>
                    <button
                        class="navbar-toggler collapsed d-flex d-lg-none flex-column justify-content-around align-self-center me-lg-0 me-2"
                        type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="toggler-icon top-bar"></span>
                        <span class="toggler-icon middle-bar"></span>
                        <span class="toggler-icon bottom-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav justify-content-center m-auto gap-lg-4 ms_screennav_item">
                        <li class="nav-item womenlarge">
                            <a class="nav-link" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">WOMEN</a>
                       </li>
                        <li class="nav-item womensmall">
                            <a class="nav-link" href="#">WOMEN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">MEN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">WATCHES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">PENS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">BAGS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">JEWELRY</a>
                        </li>
                    </ul>
                    <div class="bottom_line px-0 d-block d-md-none w-100">
                        <hr>
                    </div>
                    <div class="small_screennav">
                        <ul class="navbar-nav pt-2">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">LOGOUT</a>
                            </li>
                            <div class="nav-item dropdown custom_dropdown">
                                <a href="#" class="nav-link dropdown-toggle p-0" data-bs-toggle="dropdown"
                                    id="navbarDropdownMenu" role="button">
                                    MY ACCOUNT
                                </a>
                                <ul class="dropdown-menu drop_menu rounded-0 m-0" aria-labelledby="navbarDropdownMenu">
                                    <li><a class="dropdown-item" href="#">Profile</a></li>
                                    <li><a class="dropdown-item" href="#">Settings</a></li>
                                    <li class="d-inline-flex gap-3 ps-3 w-100"><label class="form-check-label"
                                            for="flexSwitchCheckDefault">Dark
                                            Mode</label>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                        </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <li class="nav-item">
                                <a class="nav-link" href="#">ABOUT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">INBOX</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">SERVICES</a>
                            </li>
                            <li class="nav-item dropdown custom_dropdown">
                                <a class="nav-link dropdown-toggle btn p-0 d-flex align-items-center gap-0" href="#"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    LANGUAGE
                                </a>
                                <ul class="dropdown-menu drop_menu2 rounded-0 border-0 m-0">
                                    <li><a class="dropdown-item justify-content-center d-flex" href="#">
                                            English</a></li>
                                    <li><a class="dropdown-item justify-content-center d-flex" href="#">
                                            عَرَبِيّ</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="ml-auto d-flex gap-3">
                        <div class="navbar-nav add_post justify-content-between align-items-center d-flex">
                            <div class="nav-item">
                                <a class="nav-link p-0  d-flex align-items-center" href="addpost.php"><i
                                        class="fa-solid fa-circle-plus"></i>
                                    <span style="line-height: 17px;">ADD <br>
                                        POST</span></a>
                            </div>
                        </div>
                        <div class="search-bar">
                            <form class="search-form d-flex align-items-center" method="POST" action="#">
                                <input type="search" placeholder="Search Jeddah Mazad" title="Enter search keyword" />
                                <button type="submit" title="Search"><i
                                        class="fa-solid fa-magnifying-glass"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- ==============================Navbar End==============================-->
    </header>