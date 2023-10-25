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
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- fontawesome kit  -->
    <script src="assets/js/kit-fontawesome.js"></script>
</head>

<body>
    <!-- ==============================Navbar Start==============================-->
    <div class="container-fluid px-0 px-lg-5 bg-white fixed-top smallscrnav_block">
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
                    <div class="container-fluid">
                        <div class="offcanvas offcanvas-start w-100" tabindex="-1" id="offcanvas"
                            data-bs-keyboard="false" data-bs-backdrop="false">
                            <div class="offcanvas-header">
                                <div class="search-box w-100">
                                    <form class="search-form d-flex align-items-center" method="POST" action="#">
                                        <img src="assets/images/icons/leftarrow_11x16.png" alt="leftarrow" class="me-2">
                                        <input type="search" placeholder="Search Jeddah Mazad"
                                            title="Enter search keyword" />
                                        <button type="submit" title="Search"><i
                                                class="fa-solid fa-magnifying-glass"></i></button>
                                    </form>
                                </div>
                                <button type="button" class="btn-close text-reset shadow-none ms-2"
                                    data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body px-0">
                                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-start" id="menu">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link text-truncate">
                                            <span class="ms-1 d-sm-inline">Home</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link text-truncate">
                                            <span class="ms-1 d-sm-inline">Home</span> </a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link text-truncate">
                                            <span class="ms-1 d-sm-inline">Home</span></a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link text-truncate">
                                            <span class="ms-1 d-sm-inline">Home</span></a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link text-truncate">
                                            <span class="ms-1 d-sm-inline">Home</span> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
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
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">WOMEN</a>
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
                            <a class="nav-link p-0  d-flex align-items-center" href="#"><i
                                    class="fa-solid fa-circle-plus me-1"></i>
                                <span style="line-height: 17px;">ADD <br>
                                    POST</span></a>
                        </div>
                    </div>
                    <div class="search-bar">
                        <form class="search-form d-flex align-items-center" method="POST" action="">
                            <input type="search" placeholder="Search Jeddah Mazad" title="Enter search keyword" />
                            <button type="submit" title="Search"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- ==============================Navbar End==============================-->
    <section>
        <div class="text-center py-3 smallscrnav_none">
            <a href="index.php"><img src="assets/images/logo/Logojeddah_11zon.png" style="width: 185px;" alt="logo"></a>
        </div>
        <div>

            <form id="signup" action="" method="post" class="mb-5">
                <div class="container">
                    <div class="mt-5 col-md-5 mx-auto">
                        <div class="content">
                            <div class="text-center">
                                <h2>Create an account</h2>
                                <p>Creating an account allows you to view auction results, discover more, stay up to
                                    date and manage
                                    your activity</p>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control shadow-none" id="email"
                                    placeholder="example@gmail.com " name="email" required="">
                                <label for="email">Email Address</label>
                            </div>
                            <div class="form-floating mb-3 position-relative password_eye">
                                <input type="password" class="form-control shadow-none" id="password"
                                    placeholder="password" name="password" required="">
                                <i class="fas fa-eye position-absolute" id="togglePassword"></i>
                                <label for="password">Password</label>
                            </div>
                            <div class="">
                                <p>Please enter your legal name as it appears on your ID.</p>
                            </div>
                            <div class="row g-3">
                                <div class="col-4">
                                    <div class="form-floating mb-3">
                                        <input type="title" class="form-control shadow-none" id="title"
                                            placeholder="title" name="title" required="">
                                        <label for="title">Title</label>
                                    </div>
                                </div>

                                <div class="col-8">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control shadow-none" id="firstname"
                                            placeholder=" " name="firstname" required="First name">
                                        <label for="firstname">First name</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control shadow-none" id="lastname"
                                            placeholder="Last name" name="lastname" required="">
                                        <label for="lastname">Last name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="justify-content-between align-items-center d-flex">
                                <div class="d-flex align-items-start">
                                    <div class="policieschecks">
                                        <input type="checkbox" class="form-check-input shadow-none mt-0 me-2"
                                            id="emailupdates">
                                    </div>
                                    <div class="flex-column d-flex">
                                        <p>I would like to receive email updates from Jeddah Mazad about upcoming
                                            auctions,
                                            events, and more
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="justify-content-between align-items-center d-flex">
                                <div class="d-flex align-items-start">
                                    <div class="policieschecks">
                                        <input type="checkbox" class="form-check-input shadow-none mt-0 me-2"
                                            id="policiescheck">
                                    </div>
                                    <div class="flex-column d-flex">
                                        <p>I have read and agree to the <a href="#" target="_blank"
                                                rel="noopener noreferrer">Privacy Policy</a> &
                                            jeddahmazad.com <a href="#" target="_blank" rel="noopener noreferrer">Terms
                                                &
                                                Conditions</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-box pt-0 pb-2">
                                <div class="login_button">
                                    <button id="submitBTN" type="submit" class="btn w-100 shadow-none">Sign Up</button>
                                </div>
                                <div class="mt-3 row text-center">
                                    <div class="col-12 text-center">
                                        <p>Already have an account?<a href="#" target="_blank"
                                                rel="noopener noreferrer"> Log in</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- =============================Contact Us Start==============================-->
    <section class="contact_wrapper py-4 my-3 d-block d-md-none">
        <div class="container">
            <div class="row">
                <div class="col-7">
                    <div class="contect_detail d-flex align-items-center justify-content-between">
                        <h1 class="mb-0">Contact Us</h1>
                        <i class="fa-brands fa-whatsapp fa-3x"></i>
                    </div>
                </div>
                <div class="col-5 align-self-center text-end">
                    <div class="contect_detail">
                        <h1 class="mb-0">54553421</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =============================Contact Us End==============================-->
    <div class="footer_top_line">
        <hr>
    </div>
    <section class="footer_block">
        <div class="footer_block_btn">
            <ul>
                <li class="list-unstyled mb-3"><a href="#" target="_blank" rel="noopener noreferrer">CONTACT US</a></li>
                <li class="list-unstyled mb-3"><a href="#" target="_blank" rel="noopener noreferrer">TERMS &
                        CONDITIONS</a>
                </li>
                <li class="list-unstyled mb-3"><a href="#" target="_blank" rel="noopener noreferrer">PRIVACY POLICY</a>
                </li>
            </ul>
            <p>© 2023 <a href="#"><b>Jeddah Mazad.</b></a> All Rights Reserved</p>
        </div>
    </section>
    <!-- jQuery link  -->
    <script type="text/javascript" src="assets/jquery/jquery-3.6.0.min.js"></script>
    <script src="assets/js/main.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
</body>


</html>