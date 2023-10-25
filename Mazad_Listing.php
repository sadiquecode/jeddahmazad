<?php include('include/head.php') ?>
    <!-- ============================== product detail start==============================-->
    <style type="text/css">
        .picZoomer {
            position: relative;
            /*margin-left: 40px;
    padding: 15px;*/
        }

        .picZoomer-pic-wp {
            position: relative;
            overflow: hidden;
            text-align: center;
        }

        .picZoomer-pic-wp:hover .picZoomer-cursor {
            display: block;
        }

        .picZoomer-zoom-pic {
            position: absolute;
            top: 0;
            left: 0;
        }

        .picZoomer-zoom-wp {
            display: none;
            position: absolute;
            z-index: 999;
            overflow: hidden;
            border: 1px solid #eee;
            height: 460px;
            margin-top: -19px;
        }

        .picZoomer-cursor {
            display: none;
            cursor: crosshair;
            width: 100px;
            height: 100px;
            position: absolute;
            top: 0;
            left: 0;
            border-radius: 50%;
            border: 1px solid #eee;
            background-color: rgba(0, 0, 0, 0.1);
        }

        .picZoomCursor-ico {
            width: 23px;
            height: 23px;
            position: absolute;
            top: 40px;
            left: 40px;
            background: url(images/zoom-ico.png) left top no-repeat;
        }

        .my_img {
            vertical-align: middle;
            position: absolute;
            top: 0;
            bottom: 0;
            margin: auto;
            height: 100%;
        }

        .piclist li {
            display: inline-block;
            width: 90px;
            height: 114px;
            border: 1px solid #eee;
        }

        .piclist li img {
            width: 97%;
            height: auto;
        }

        /* custom style */
        .picZoomer-pic-wp,
        .picZoomer-zoom-wp {
            border: 1px solid #eee;
        }

        .section-bg {
            background-color: #fff1e0;
        }

        section {
            padding: 60px 0;
        }

        .row-sm .col-md-6 {
            padding-left: 5px;
            padding-right: 5px;
        }

        /*===pic-Zoom===*/
        ._boxzoom .zoom-thumb {
            width: 90px;
            display: inline-block;
            vertical-align: top;
            margin-top: 0px;
        }

        ._boxzoom .zoom-thumb ul.piclist {
            padding-left: 0px;
            top: 0px;
        }

        ._boxzoom ._product-images {
            width: 80%;
            display: inline-block;
        }

        ._boxzoom ._product-images .picZoomer {
            width: 100%;
        }

        ._boxzoom ._product-images .picZoomer .picZoomer-pic-wp img {
            left: 0px;
        }

        ._boxzoom ._product-images .picZoomer img.my_img {
            width: 100%;
        }

        .piclist li img {
            height: 100px;
            object-fit: cover;
        }

        @media (max-width: 767px) {

            /* Adjust the maximum width as needed */
            ._boxzoom {
                display: flex;
                flex-direction: column;
            }

            .zoom-thumb {
                order: 2;
            }

            ._product-images {
                order: 1;
            }

            ._boxzoom .zoom-thumb {
                width: 100%;
                display: inline-block;
                vertical-align: top;
            }

        }
    </style>
    <section class="product_detail">
        <div class="container-fluid">
            <div class="row row-sm">
                <div class="col-md-6 _boxzoom">
                    <div class="zoom-thumb">
                        <ul class="piclist">
                            <li class="thumb_image img-fluid"><img src="assets/images/main/shot-1.png" alt="" width="96"
                                    height="96"></li>
                            <li class="thumb_image img-fluid"><img src="assets/images/main/shot-2.png" alt="" width="96"
                                    height="96">
                            </li>
                            <li class="thumb_image img-fluid"><img src="assets/images/main/shot-3.png" alt="" width="96"
                                    height="96">
                            </li>
                            <li class="thumb_image img-fluid"><img src="assets/images/main/shot-5.png" alt="" width="96"
                                    height="96">
                            </li>
                        </ul>
                    </div>
                    <div class="_product-images">
                        <div class="picZoomer">
                            <img class="my_img" src="assets/images/main/shot-1.png" alt="">
                        </div>
                    </div>
                </div>

                <style>
                    /* START MODULE STYLING */
                    .slider-preview {
                        margin-bottom: 15px;
                    }

                    .slider-preview img {
                        width: 100%;
                        min-height: 100%;
                    }

                    .slider-thumb .thumb_image img {
                        max-width: 100%;
                        height: auto;
                        background-size: cover;
                        background-position: center;
                    }

                    .slider-preview .preview_image img {
                        max-width: 100%;
                        height: auto;
                        background-size: cover;
                        background-position: center;
                    }

                    .product_detail .slider-wrapper {
                        display: flex;
                        overflow: hidden;
                    }

                    .product_detail .slider-thumb {
                        max-width: 125px;
                    }

                    .product_detail .slider-thumb li {
                        max-height: 100px;
                    }

                    .slick-track .slick-track {
                        display: none;
                    }


                    @media (max-width: 767px) {
                        .product_detail .slider-wrapper {
                            flex-direction: column-reverse;
                        }

                        .product_detail .slider-thumb {
                            max-width: 100%;
                        }
                    }
                </style>
                <div class="col-md-6 col-lg-6 col-12">
                    <div class="row">
                        <div class="col-12 pt-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="country">
                                    <a href="#"><img src="assets/images/flag/saudiarabia.png" class="me-2"
                                            alt="saudiarabia" width="32" height="32">SAR</a>
                                </div>
                                <div class="favourite">
                                    <a href="#"><i class="fa-regular fa-heart fa-2x fw-lighter"></i></a>
                                </div>
                                <div class="rating_star d-none d-md-block">
                                    <a href="#">
                                        <ul class="list-unstyled d-flex text-warning mb-0 rounded-3 gap-1">
                                            <li><i class="fas fa-star fa-sm"></i></li>
                                            <li><i class="fas fa-star fa-sm"></i></li>
                                            <li><i class="fas fa-star fa-sm"></i></li>
                                            <li><i class="fas fa-star fa-sm"></i></li>
                                            <li><i class="fas fa-star fa-sm"></i></li>
                                        </ul>
                                    </a>
                                </div>
                                <div class="msg_btn">
                                    <a href="#">Message</a>
                                </div>
                                <div class="user_profile justify-content-between align-items-center d-flex">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-column d-flex text-center">
                                            <strong>Ahmad Kabbani</strong>
                                            <small>ahmad.kabbani@gmail.com</small>
                                        </div>
                                        <img src="assets/images/user/Clipuser.png" alt="user" class="me-2 img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="product_heading pt-5">
                                <h5>Crisp, bold styling and a meticulously engineered rose
                                    gold plated stainless steel
                                    case give the Intrepid Sport Watch
                                    its contemporary air.</h5>
                            </div>
                            <div class="product_time pt-2">
                                <p class="mb-0">Live auction begins on:</p>
                                <p class="mb-0">September 18, 06:00 (GMT+3) KSA</p>
                            </div>
                            <div class="divide_line pt-2"></div>
                            <div class="product_time pt-2">
                                <p class="mb-0">Estimate:</p>
                                <p class="mb-0">7,000 - 10,000 SAR</p>
                            </div>
                            <div class="divide_line"></div>
                            <div class="dropdown pt-4 bid">
                                <button class="btn dropdown-toggle w-100 shadow-none" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    PLACE BID
                                </button>
                                <ul class="dropdown-menu w-100 text-center border-0">
                                    <li><a class="dropdown-item" href="#"><span>20,000
                                                SAR</span> <br><small>Starting
                                                Bid: 250.0
                                                SAR</small></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================== product detail End==============================-->
    <!-- ============================== product user chet Start==============================-->

    <section class="gradient-custom">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-lg-6 col-xl-6 col-12">
                    <div class="divide_line"></div>
                    <ul class="nav nav-pills mb-3 product_navs gap-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active px-0" id="pills-about-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-about" type="button" role="tab" aria-controls="pills-about"
                                aria-selected="true">ASK A QUESTION ABOUT THIS ITEM</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link px-0" id="pills-dec-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-dec" type="button" role="tab" aria-controls="pills-dec"
                                aria-selected="false">DESCRIPTION</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link px-0" id="pills-info-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-info" type="button" role="tab" aria-controls="pills-info"
                                aria-selected="false">ADDITIONAL INFORMATION</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-about" role="tabpanel"
                            aria-labelledby="pills-about-tab" tabindex="0">
                            <div class="card border-0">
                                <div class="card-body p-4">
                                    <div class="row">
                                        <div class="col">
                                            <div class="d-flex flex-start">
                                                <img class="rounded-circle shadow-1-strong me-3"
                                                    src="assets/images/user/user1.png" alt="avatar" width="66"
                                                    height="66" />
                                                <div class="flex-grow-1 flex-shrink-1">
                                                    <div>
                                                        <div class="d-flex justify-content-start">
                                                            <h6 class="mb-1">
                                                                Bid: 20,000 SAR
                                                            </h6>
                                                        </div>
                                                        <div>
                                                            <textarea class="form-control shadow-none"
                                                                id="formControlTextarea" placeholder="Ask a question"
                                                                rows="3"></textarea>
                                                        </div>
                                                        <div class="caption_carousel bid_sendbtn">
                                                            <a href="#">SEND</a>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex flex-start mt-4">
                                                        <a class="me-3" href="#">
                                                            <img class="rounded-circle shadow-1-strong"
                                                                src="assets/images/user/user2.png" alt="avatar"
                                                                width="66" height="66" />
                                                        </a>
                                                        <div class="flex-grow-1 flex-shrink-1">
                                                            <div>
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <h6 class="mb-1">
                                                                        Bid: 17,000 SAR
                                                                    </h6>
                                                                    <p class="mb-0"> January 16</p>
                                                                </div>
                                                                <div>
                                                                    <textarea class="form-control shadow-none"
                                                                        id="formControlTextarea"
                                                                        placeholder="Ask a question"
                                                                        rows="3">Hello I would like to know how many of this watch do you have in stock?</textarea>
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
                        <div class="tab-pane fade" id="pills-dec" role="tabpanel" aria-labelledby="pills-dec-tab"
                            tabindex="0">
                            <div class="product_info p-4">
                                <p>The Intrepid Sport Watch effortlessly marries cutting-edge design with meticulous
                                    engineering, offering a sophisticated, contemporary look and the durability of a
                                    rose gold-plated stainless steel case.<br> Its
                                    striking appearance is a testament to the fusion of fashion and function, suitable
                                    for various occasions, from formal
                                    events to outdoor activities.<br> This timepiece is a symbol of modern elegance and
                                    precision craftsmanship.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-info" role="tabpanel" aria-labelledby="pills-info-tab"
                            tabindex="0">
                            <div class="product_info p-4">
                                <p>The Intrepid Sport Watch offers reliability with precise timekeeping, durability with
                                    scratch-resistant glass and water
                                    resistance, and enhanced readability<br> with luminous hands and markers. Its
                                    customizable straps add a personal touch to
                                    complete a versatile and stylish timepiece.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 col-12">
                    <div class="row">
                        <div class="col-8">
                            <div class="user_details">
                                <div class="card border-0" style="height:380px">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex align-items-center justify-content-between">
                                            <img class="rounded-circle shadow-1-strong me-3"
                                                src="assets/images/user/user1.png" alt="avatar" width="66"
                                                height="66" />
                                            <p class="mb-0">Kassem Ali</p>
                                            <p class="mb-0">20,000 SAR</p>
                                            <div class="btn-group dropend custom_dropdown user_dropbtn">
                                                <button type="button" class="btn dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu drop_menu rounded-3 ms-3">
                                                    <li><a class="dropdown-item" href="#">Block User</a></li>
                                                    <li><a class="dropdown-item" href="#">Visit profile</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center justify-content-between">
                                            <img class="rounded-circle shadow-1-strong me-3"
                                                src="assets/images/user/user2.png" alt="avatar" width="66"
                                                height="66" />
                                            <p class="mb-0">Kassem Ali</p>
                                            <p class="mb-0">20,000 SAR</p>
                                            <div class="btn-group dropend custom_dropdown user_dropbtn">
                                                <button type="button" class="btn dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu drop_menu rounded-3 ms-3">
                                                    <li><a class="dropdown-item" href="#">Block User</a></li>
                                                    <li><a class="dropdown-item" href="#">Visit profile</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="list-group-item"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================== product user chet End==============================-->

    <!-- ==============================Upcoming Auction Card Start ==============================-->
    <section class="auction_cardtrack pt-5 similar_auction">
        <div class="container">
            <div class="justify-content-between align-items-center d-flex">
                <div class="heading flex-column d-flex">
                    <h4><span>Similar</span> Auctions</h4>
                </div>
                <div class="me-md-5 all_auction d-none d-lg-block">
                    <a href="#">VIEW ALL</a>
                </div>
            </div>
        </div>
        <div class="container px-0 pb-5 m-auto">
            <div class="auctionslide__cards d-flex overflow-hidden ">
                <div class=" px-2 py-5">
                    <div class="card auction_card border-0">
                        <img src="assets/images/cards/clip222.png" class="card-img-top" alt="...">
                        <div class="card-body px-0 heading">
                            <h4 class="card_title mb-4">Upcoming Auctions</h4>
                            <p class="card_text d-flex"><small>11 AUGUST - 11 SEPTEMBER 2023 |
                                    10:00</small>
                            </p>
                            <p class=" card_text d-flex mb-5"><small>(GMT+3) KSA</small></p>
                            <div class="d-flex align-items-center">
                                <a href="#" class="card_bidbtn">BID</a>
                                <a href="#"><img src="assets/images/icons/info.png" alt="info" class=" ms-4"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" px-2 py-5">
                    <div class="card auction_card border-0">
                        <img src="assets/images/cards/clip333.png" class="card-img-top" alt="...">
                        <div class="card-body px-0 heading">
                            <h4 class="card-title mb-4">Upcoming Auctions</h4>
                            <p class="card_text d-flex"><small>11 AUGUST - 11 SEPTEMBER 2023 |
                                    10:00</small>
                            </p>
                            <p class=" card_text d-flex mb-5"><small>(GMT+3) KSA</small></p>
                            <div class="d-flex align-items-center">
                                <a href="#" class="card_bidbtn">BID</a>
                                <a href="#"><img src="assets/images/icons/info.png" alt="info" class=" ms-4"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" px-2 py-5">
                    <div class="card auction_card border-0">
                        <img src="assets/images/cards/clip444.png" class="card-img-top" alt="...">
                        <div class="card-body px-0 heading">
                            <h4 class="card-title mb-4">Upcoming Auctions</h4>
                            <p class="card_text d-flex"><small>11 AUGUST - 11 SEPTEMBER 2023 |
                                    10:00</small>
                            </p>
                            <p class=" card_text d-flex mb-5"><small>(GMT+3) KSA</small></p>
                            <div class="d-flex align-items-center">
                                <a href="#" class="card_bidbtn">BID</a>
                                <a href="#"><img src="assets/images/icons/info.png" alt="info" class=" ms-4"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" px-2 py-5">
                    <div class="card auction_card border-0">
                        <img src="assets/images/cards/clip111.png" class="card-img-top" alt="...">
                        <div class="card-body px-0 heading">
                            <h4 class="card-title mb-4">Upcoming Auctions</h4>
                            <p class="card_text d-flex"><small>11 AUGUST - 11 SEPTEMBER 2023 |
                                    10:00</small>
                            </p>
                            <p class=" card_text d-flex mb-5"><small>(GMT+3) KSA</small></p>
                            <div class="d-flex align-items-center">
                                <a href="#" class="card_bidbtn">BID</a>
                                <a href="#"><img src="assets/images/icons/info.png" alt="info" class=" ms-4"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="me-md-5 all_auction d-block d-lg-none text-center">
                <a href="#">VIEW ALL</a>
            </div>
        </div>
    </section>

<?php include('include/contact_us.php') ?>
<?php include('include/footer.php') ?>