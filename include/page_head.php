        <?php 
        $file_name = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);

        if ($file_name == 'page_other_auctions.php') {
            $c1 = 'col-md-6 col-lg-6 col-6';
            $c2 = 'col-md-6 col-lg-6 col-6';
            $c3 = 'Profile';
        }else{
            $c1 = 'col-12';
            $c2 = 'd-none';
            $c3 = preg_replace('/\.\w+$/', '', $file_name);
        }
        ?>

        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="<?=$c1?>">
                    <div class="ps-md-5">
                        <h4 class="py-4" style="font-family: 'NouvelleVague-Black';"><?=$c3?></h4>
                    </div>
                </div>
                <div class="<?=$c2?>">
                    <div class="d-flex justify-content-end align-items-center gap-4">
                        <div class="d-flex align-items-center gap-4">
                            <div class="msg_btn  d-none d-md-block">
                                <a href="#">Message</a>
                            </div>
                            <div class="rating_star  d-none d-md-block">
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
                        </div>
                        <div class="ownuserprofile">
                            <div class="justify-content-between align-items-center d-flex flex-column">
                                <div class="d-flex">
                                    <img src="assets/images/user/Clipuser.png" alt="user" class="img-fluid me-2">
                                    <div class="flex-column d-flex text-center">
                                        <strong>Ahmad Kabbani</strong>
                                        <small>ahmad.kabbani@gmail.com</small>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center gap-4 pt-2">
                                    <div class="msg_btn d-block d-md-none">
                                        <a href="#">Message</a>
                                    </div>
                                    <div class="rating_star d-block d-md-none">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>