<?php include('include/head.php') ?>
    <!-- ==============================Auction Card Start==============================-->
    <section class="search_heading">
        <?php include('include/page_head.php') ?> 
        <div class="search_content">
            <div class="container">
                <div class="search_check d-flex gap-3 pt-5 pb-3">
                    <div class="custom_checks p-1 rounded d-inline-flex">
                        <input type="checkbox" class="form-check-input shadow-none" id="flexCheckMen">
                        <label class="form-check-label ps-2 w-100" for="flexCheckMen">Men</label>
                    </div>
                    <div class="custom_checks p-1 rounded d-inline-flex">
                        <input type="checkbox" class="form-check-input shadow-none" id="customCheckWomen">
                        <label class="form-check-label ps-2 w-100" for="customCheckWomen">Women</label>
                    </div>
                </div>
                <div class="row g-0 gy-3">
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="dropdown_wrapper dropdowncategori">
                            <h6>Category</h6>
                            <div class="dropdown d-grid">
                                <a class="btn dropdown-toggle text-start shadow-none" type="button"
                                    id="categoryDropdown" data-bs-toggle="dropdown" aria-expanded="false"
                                    data-bs-auto-close="outside">
                                    All Categories
                                </a>
                                <ul class="dropdown-menu searchdrop_menu col-12 border-0"
                                    aria-labelledby="categoryDropdown">
                                    <li>
                                        <label class="dropdown-item custom_control">Man
                                            <input class="form-check-input shadow-none" type="checkbox" name="category"
                                                value="Man">
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item custom_control">Woman
                                            <input class="form-check-input shadow-none" type="checkbox" name="category"
                                                value="Woman">
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item custom_control">Jewelry
                                            <input class="form-check-input shadow-none" type="checkbox" name="category"
                                                value="Jewelry">
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item custom_control">Pen
                                            <input class="form-check-input shadow-none" type="checkbox" name="category"
                                                value="Pen">
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item custom_control">Bags
                                            <input class="form-check-input shadow-none" type="checkbox" name="category"
                                                value="Bags">
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="dropdown_wrapper dropdownbrand">
                            <h6>Brand</h6>
                            <div class="dropdown d-grid">
                                <a class="btn dropdown-toggle text-start shadow-none" type="button" id="brandDropdown"
                                    data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                    All Brands
                                </a>
                                <ul class="dropdown-menu searchdrop_menu col-12 border-0"
                                    aria-labelledby="brandDropdown">
                                    <li>
                                        <label class="dropdown-item custom_control">Rolex
                                            <input class="form-check-input shadow-none" type="checkbox" name="category"
                                                value="Rolex">
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item custom_control">Patek Philippe
                                            <input class="form-check-input shadow-none" type="checkbox" name="category"
                                                value="Patek">
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item custom_control">A.Lange & Sohne
                                            <input class="form-check-input shadow-none" type="checkbox" name="category"
                                                value="A.Lange">
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item custom_control">Breitling
                                            <input class="form-check-input shadow-none" type="checkbox" name="category"
                                                value="Pan">
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item custom_control">Piaget
                                            <input class="form-check-input shadow-none" type="checkbox" name="category"
                                                value="Piaget">
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item custom_control">Breguet
                                            <input class="form-check-input shadow-none" type="checkbox" name="category"
                                                value="Breguet">
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item custom_control">Girard-Perregaux
                                            <input class="form-check-input shadow-none" type="checkbox" name="category"
                                                value="Girard-Perregaux">
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item custom_control">OMEGA
                                            <input class="form-check-input shadow-none" type="checkbox" name="category"
                                                value="OMEGA">
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item custom_control">Cartier
                                            <input class="form-check-input shadow-none" type="checkbox" name="category"
                                                value="Cartier">
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item custom_control">Blancpain
                                            <input class="form-check-input shadow-none" type="checkbox" name="category"
                                                value="Blancpain">
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item custom_control">TAG Heuer
                                            <input class="form-check-input shadow-none" type="checkbox" name="category"
                                                value="TAG Heuer">
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item custom_control">Panerai
                                            <input class="form-check-input shadow-none" type="checkbox" name="category"
                                                value="Panerai">
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item custom_control">Seiko
                                            <input class="form-check-input shadow-none" type="checkbox" name="category"
                                                value="Seiko">
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item custom_control">Chopard
                                            <input class="form-check-input shadow-none" type="checkbox" name="category"
                                                value="Chopard">
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item custom_control">Zenith
                                            <input class="form-check-input shadow-none" type="checkbox" name="category"
                                                value="Zenith">
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="dropdown_wrapper dropdownregion">
                            <h6>Region</h6>
                            <div class="dropdown d-grid">
                                <a class="btn dropdown-toggle text-start shadow-none" type="button" id="regionDropdown"
                                    data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                    All Regions
                                </a>
                                <ul class="dropdown-menu searchdrop_menu col-12 border-0"
                                    aria-labelledby="regionDropdown">
                                    <li>
                                        <label class="dropdown-item custom_control">Mecca
                                            <input class="form-check-input shadow-none" type="checkbox" name="category"
                                                value="Mecca">
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item custom_control">Medina
                                            <input class="form-check-input shadow-none" type="checkbox" name="category"
                                                value="Medina">
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item custom_control">Riyadh
                                            <input class="form-check-input shadow-none" type="checkbox" name="category"
                                                value="Riyadh">
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item custom_control">Abhā
                                            <input class="form-check-input shadow-none" type="checkbox" name="category"
                                                value="Abhā">
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item custom_control">Abqaiq
                                            <input class="form-check-input shadow-none" type="checkbox" name="category"
                                                value="Abqaiq">
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item custom_control">Al-Baḥah
                                            <input class="form-check-input shadow-none" type="checkbox" name="category"
                                                value="Al-Baḥah">
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item custom_control">Al-Dammām
                                            <input class="form-check-input shadow-none" type="checkbox" name="category"
                                                value="Al-Dammām">
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item custom_control">Al-Hufūf
                                            <input class="form-check-input shadow-none" type="checkbox" name="category"
                                                value="Al-Hufūf">
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="d-grid filter_search">
                            <button type="submit" class="border-0" id="#">
                                <i class="fa-solid fa-magnifying-glass me-2"></i><span>Search</span>
                            </button>
                        </div>
                    </div>
                </div>
<!-- /////////////// -->
<div class="py-5">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3 col-12">
                                <div class="card auction_card customsearch__card border-0 px-0">
                            <div class="active_btn position-relative">
                                <a href="#" class="d-block position-absolute">Active</a>
                                <img src="assets/images/cards/clip222.png" class="card-img-top w-100 img-fluid" alt="...">
                            </div>
                            <div class="card-body px-0 heading">
                             <a href="#">   <h4 class="card_title mb-4">GG Marmont</h4></a>
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
        <div class="col-sm-6 col-md-4 col-lg-3 col-12">
                        <div class="card auction_card customsearch__card border-0 px-0">
                            <div class="text-center active_btn position-relative">
                                <a href="#" class="d-block position-absolute">Active</a>
                                <img src="assets/images/cards/clip333.png" class="card-img-top img-fluid" alt="...">
                            </div>
                            <div class="card-body px-0 heading">
                              <a href="#">  <h4 class="card_title mb-4">GG Marmont</h4></a>
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
        <div class="col-sm-6 col-md-4 col-lg-3 col-12">
                                  <div class="card auction_card customsearch__card border-0 px-0">
                            <div class="text-center active_btn position-relative">
                                <a href="#" class="d-block position-absolute">Active</a>
                                <img src="assets/images/cards/clip444.png" class="card-img-top img-fluid" alt="...">
                            </div>
                            <div class="card-body px-0 heading">
                               <a href="#"> <h4 class="card-title mb-4">Ongoing Auctions</h4></a>
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
        <div class="col-sm-6 col-md-4 col-lg-3 col-12">
                                  <div class="card auction_card customsearch__card border-0 px-0">
                            <div class="text-center active_btn position-relative">
                                <a href="#" class="d-block position-absolute">Active</a>
                                <img src="assets/images/cards/clip444.png" class="card-img-top img-fluid" alt="...">
                            </div>
                            <div class="card-body px-0 heading">
                               <a href="#"> <h4 class="card-title mb-4">Ongoing Auctions</h4></a>
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
</div>
<!-- /////////////// -->
<div class="py-5">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3 col-12">
                                <div class="card auction_card customsearch__card border-0 px-0">
                            <div class="text-center active_btn position-relative">
                                <a href="#" class="d-block position-absolute">Active</a>
                                <img src="assets/images/cards/clip222.png" class="card-img-top img-fluid" alt="...">
                            </div>
                            <div class="card-body px-0 heading">
                             <a href="#">   <h4 class="card_title mb-4">GG Marmont</h4></a>
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
        <div class="col-sm-6 col-md-4 col-lg-3 col-12">
                        <div class="card auction_card customsearch__card border-0 px-0">
                            <div class="text-center active_btn position-relative">
                                <a href="#" class="d-block position-absolute">Active</a>
                                <img src="assets/images/cards/clip333.png" class="card-img-top img-fluid" alt="...">
                            </div>
                            <div class="card-body px-0 heading">
                              <a href="#">  <h4 class="card_title mb-4">GG Marmont</h4></a>
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
        <div class="col-sm-6 col-md-4 col-lg-3 col-12">
                                  <div class="card auction_card customsearch__card border-0 px-0">
                            <div class="text-center active_btn position-relative">
                                <a href="#" class="d-block position-absolute">Active</a>
                                <img src="assets/images/cards/clip444.png" class="card-img-top img-fluid" alt="...">
                            </div>
                            <div class="card-body px-0 heading">
                               <a href="#"> <h4 class="card-title mb-4">Ongoing Auctions</h4></a>
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
        <div class="col-sm-6 col-md-4 col-lg-3 col-12">
                                  <div class="card auction_card customsearch__card border-0 px-0">
                            <div class="text-center active_btn position-relative">
                                <a href="#" class="d-block position-absolute">Active</a>
                                <img src="assets/images/cards/clip444.png" class="card-img-top img-fluid" alt="...">
                            </div>
                            <div class="card-body px-0 heading">
                               <a href="#"> <h4 class="card-title mb-4">Ongoing Auctions</h4></a>
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
</div>
<!-- /////////////// -->

                <!-- <div class="auctionslide__cards d-flex overflow-hidden ">
                    <div class=" px-2 py-5">
                        <div class="card auction_card customsearch__card border-0 px-0">
                            <div class="text-center active_btn position-relative">
                                <a href="#" class="d-block position-absolute">Active</a>
                                <img src="assets/images/cards/clip222.png" class="card-img-top img-fluid" alt="...">
                            </div>
                            <div class="card-body px-0 heading">
                             <a href="#">   <h4 class="card_title mb-4">GG Marmont</h4></a>
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
                        <div class="card auction_card customsearch__card border-0 px-0">
                            <div class="text-center active_btn position-relative">
                                <a href="#" class="d-block position-absolute">Active</a>
                                <img src="assets/images/cards/clip333.png" class="card-img-top img-fluid" alt="...">
                            </div>
                            <div class="card-body px-0 heading">
                              <a href="#">  <h4 class="card_title mb-4">GG Marmont</h4></a>
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
                        <div class="card auction_card customsearch__card border-0 px-0">
                            <div class="text-center active_btn position-relative">
                                <a href="#" class="d-block position-absolute">Active</a>
                                <img src="assets/images/cards/clip444.png" class="card-img-top img-fluid" alt="...">
                            </div>
                            <div class="card-body px-0 heading">
                               <a href="#"> <h4 class="card-title mb-4">Ongoing Auctions</h4></a>
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
                        <div class="card auction_card customsearch__card border-0 px-0">
                            <div class="text-center active_btn position-relative">
                                <a href="#" class="d-block position-absolute">Active</a>
                                <img src="assets/images/cards/clip111.png" class="card-img-top img-fluid" alt="...">
                            </div>
                            <div class="card-body px-0 heading">
                           <a href="#">     <h4 class="card-title mb-4">Ongoing Auctions</h4></a>
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
                <div class="auctionslide__cards d-flex overflow-hidden ">
                    <div class=" px-2 py-5">
                        <div class="card auction_card customsearch__card border-0 px-0">
                            <div class="text-center active_btn position-relative">
                                <a href="#" class="d-block position-absolute">Active</a>
                                <img src="assets/images/cards/clip222.png" class="card-img-top img-fluid" alt="...">
                            </div>
                            <div class="card-body px-0 heading">
                               <a href="#"> <h4 class="card_title mb-4">GG Marmont</h4></a>
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
                        <div class="card auction_card customsearch__card border-0 px-0">
                            <div class="text-center active_btn position-relative">
                                <a href="#" class="d-block position-absolute">Active</a>
                                <img src="assets/images/cards/clip333.png" class="card-img-top img-fluid" alt="...">
                            </div>
                            <div class="card-body px-0 heading">
                               <a href="#"> <h4 class="card_title mb-4">GG Marmont</h4></a>
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
                        <div class="card auction_card customsearch__card border-0 px-0">
                            <div class="text-center active_btn position-relative">
                                <a href="#" class="d-block position-absolute">Active</a>
                                <img src="assets/images/cards/clip444.png" class="card-img-top img-fluid" alt="...">
                            </div>
                            <div class="card-body px-0 heading">
                              <a href="#">  <h4 class="card-title mb-4">Ongoing Auctions</h4></a>
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
                        <div class="card auction_card customsearch__card border-0 px-0">
                            <div class="text-center active_btn position-relative">
                                <a href="#" class="d-block position-absolute">Active</a>
                                <img src="assets/images/cards/clip111.png" class="card-img-top img-fluid" alt="...">
                            </div>
                            <div class="card-body px-0 heading">
                        <a href="#">        <h4 class="card-title mb-4">Ongoing Auctions</h4></a>
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
                </div> -->
            </div>
        </div>
    </section>
    <!-- ==============================Upcoming Auction Card End ==============================-->

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
    <?php include('include/footer.php') ?>