<?php include('include/head.php') ?>
    <!-- ==============================Auction Card Start==============================-->
    <section class="addpost_heading">
        <?php include('include/page_head.php') ?> 
        <div class="addpost_content py-5">
            <div class="container">
                <div class="addpost_features py-4 px-3">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <div class="product_wrapper">
                                <h6>Product Name</h6>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="product_feature">
                                <input class="form-control shadow-none border-0 ps-0" type="text"
                                    placeholder="Type here" aria-label="default input example">
                            </div>
                        </div>
                        <div class="divide_line"></div>
                        <div class="col-md-4">
                            <div class="product_wrapper">
                                <h6>Product Description</h6>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="product_feature">
                                <textarea class="form-control shadow-none border-0 ps-0"
                                    id="exampleFormControlTextarea1" rows="1" placeholder="Type here"></textarea>
                            </div>
                        </div>
                        <div class="divide_line "></div>
                        <div class="col-md-4">
                            <div class="product_wrapper">
                                <h6>Product Additional Information</h6>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="product_feature">
                                <textarea class="form-control shadow-none border-0 ps-0"
                                    id="exampleFormControlTextarea2" rows="1" placeholder="Type here"></textarea>
                            </div>
                        </div>
                        <div class="divide_line"></div>
                        <div class="col-md-4">
                            <div class="product_wrapper">
                                <h6>Product Brand</h6>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="product_feature">
                                <div class="dropdown">
                                    <a class="dropdown-toggle" data-bs-toggle="dropdown"
                                        data-bs-auto-close="outside">Type here</a>
                                    <div class="dropdown-menu border-0">
                                        <div class="container">
                                            <div class="select_search">
                                                <input type="search" class="form-control shadow-none" id="selctsearch"
                                                    placeholder="Type here">
                                            </div>
                                            <div class="row g-3">
                                                <div class="col-lg-3 col-sm-6 py-4">
                                                    <!-- <div class=""> -->
                                                    <a class="dropdown-item" href="#">Accomodations</a>
                                                    <a class="dropdown-item" href="#">Terms & Conditions</a>
                                                    <a class="dropdown-item" href="#">Privacy</a>
                                                    <a class="dropdown-item" href="#">Lorum</a>
                                                    <a class="dropdown-item" href="#">Lorum</a>
                                                    <!-- </div> -->
                                                </div>
                                                <div class="col-lg-3 col-sm-6 py-4">
                                                    <div>
                                                        <a class="dropdown-item" href="#">Accomodations</a>
                                                        <a class="dropdown-item" href="#">Terms & Conditions</a>
                                                        <a class="dropdown-item" href="#">Privacy</a>
                                                        <a class="dropdown-item" href="#">Lorum</a>
                                                        <a class="dropdown-item" href="#">Lorum</a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 py-4">
                                                    <div>
                                                        <a class="dropdown-item" href="#">Accomodations</a>
                                                        <a class="dropdown-item" href="#">Terms & Conditions</a>
                                                        <a class="dropdown-item" href="#">Privacy</a>
                                                        <a class="dropdown-item" href="#">Lorum</a>
                                                        <a class="dropdown-item" href="#">Lorum</a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 py-4">
                                                    <div>
                                                        <a class="dropdown-item" href="#">Accomodations</a>
                                                        <a class="dropdown-item" href="#">Terms & Conditions</a>
                                                        <a class="dropdown-item" href="#">Privacy</a>
                                                        <a class="dropdown-item" href="#">Lorum</a>
                                                        <a class="dropdown-item" href="#">Lorum</a>
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
                <div class="divide_line pt-4"></div>
            </div>
            <div class="container pt-4">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-8">
                        <div class="custom_control d-flex justify-content-start gap-5">
                            <div class="custom_checks p-1 px-2 rounded d-inline-flex">
                                <input type="checkbox" class="form-check-input shadow-none" id="flexCheckAuction">
                                <label class="form-check-label ps-2" for="flexCheckAuction">Auction</label>
                            </div>
                            <div class="custom_checks p-1 px-2 rounded d-inline-flex" style="margin-left: 35px;">
                                <input type="checkbox" class="form-check-input shadow-none" id="customCheckNonAuction">
                                <label class="form-check-label ps-2" for="customCheckNonAuction">Non-Auction</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="addpost_features p-3 my-3">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <div class="product_wrapper">
                                <p class="mb-0 fw-lighter">Starting Bid</p>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="product_feature">
                                <input class="form-control shadow-none border-0 ps-0" type="text"
                                    placeholder="Type here" aria-label="default input example">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divide_line pt-4"></div>
            </div>
            <div class="container">
                <div class="p-3 my-2">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <div class="product_wrapper">
                                <p class="mb-0 fw-lighter">Gender</p>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="custom_control gap-5 d-flex justify-content-start">
                                <div class="custom_checks p-1 rounded">
                                    <input type="checkbox" class="form-check-input shadow-none" id="flexCheckMen">
                                    <label class="form-check-label ps-2" for="flexCheckMen">Men</label>
                                </div>
                                <div class="custom_checks p-1 rounded" style="margin-left: 57px;">
                                    <input type="checkbox" class="form-check-input shadow-none" id="customCheckWomen">
                                    <label class="form-check-label ps-2" for="customCheckWomen">Women</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pt-3">
                            <div class="product_wrapper">
                                <p class="mb-0 fw-lighter">Category</p>
                            </div>
                        </div>
                        <div class="col-md-8 pt-3">
                            <div class="custom_control d-flex justify-content-between">
                                <div class="custom_checks p-1 rounded d-inline-flex">
                                    <input type="checkbox" class="form-check-input shadow-none" id="customCheckBags">
                                    <label class="form-check-label ps-2 w-100" for="customCheckBags">Bags</label>
                                </div>
                                <div class="custom_checks p-1 rounded d-inline-flex">
                                    <input type="checkbox" class="form-check-input shadow-none" id="customCheckPens">
                                    <label class="form-check-label ps-2  px-4 w-100 text-center"
                                        for="customCheckPens">Pens</label>
                                </div>
                                <div class="custom_checks p-1 rounded d-inline-flex">
                                    <input type="checkbox" class="form-check-input shadow-none" id="customCheckWatches">
                                    <label class="form-check-label ps-2 w-100" for="customCheckWatches">Watches</label>
                                </div>
                                <div class="custom_checks p-1 rounded d-inline-flex">
                                    <input type="checkbox" class="form-check-input shadow-none"
                                        id="customCheckAccessories">
                                    <label class="form-check-label ps-2 w-100"
                                        for="customCheckAccessories">Accessories</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divide_line"></div>
            </div>
            <div class="container pt-4">
                <div class="row">
                    <div class="col-md-4">
                        <div class="d-grid">
                            <div class="file btn fw-lighter">
                                Upload Image(s)
                                <input type="file" name="file" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="justify-content-between align-items-center d-flex">
                            <div class="d-flex align-items-start">
                                <div class="policieschecks mt-1">
                                    <input type="checkbox" class="form-check-input shadow-none mt-0 me-2"
                                        id="emailupdates">
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
                    </div>
                    <div class="col-md-4">
                        <div class="d-grid done_btn">
                            <button class="btn fw-bolder" type="button">Done</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include('include/footer.php') ?>