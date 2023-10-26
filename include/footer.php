
    <!-- =============================Footer Start==============================--> 
    <div class="footer_top_line">
        <hr>
    </div>
    <section class="py-5 footer_none">
        <div class="container">
            <div class="row gy-3">
                <div class="col-md-3">
                    <div>
                        <a href="#" class="branding">
                            <img src="assets/images/logo/Logojeddah_11zon.png" alt="logo">
                        </a>
                    </div>
                    <div class="social_btn d-flex align-items-center justify-content-between mt-3 mt-md-0">
                        <a href="#">Facebook</a>
                        <a href="#">Twitter</a>
                        <a href="#">Instagram</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="newsletter d-flex align-items-center justify-content-md-end">
                        <h5 class="mb-0 me-3">Newsletter</h5>
                        <div class="newsletter_email">
                            <form class="newsletter_form d-flex align-items-center w-100" method="POST" action="#">
                                <input type="email" placeholder="Enter your email address here" title="Enter email" />
                                <button type="submit"><i class="fa-solid fa-paper-plane"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-md-6">
                    <div class="footer_end">
                        <div class="text-center text-md-start">
                            <p>© 2023 <b>Jeddah Mazad</b>. All Rights Reserved</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="footer_end justify-content-between d-flex">
                        <a href="#">Shipping</a>
                        <a href="#">Privacy Policy</a>
                        <a href="#">Terms & Conditions</a>
                        <a href="#">Contact</a>
                    </div>
                </div>
            </div>
    </section>
    <section class="footer_block">
        <div class="footer_block_btn">
            <ul>
                <li class="list-unstyled mb-3"><a href="#" target="_blank" rel="noopener noreferrer">CONTACT US</a></li>
                <li class="list-unstyled mb-3"><a href="#" target="_blank" rel="noopener noreferrer">TERMS & CONDITIONS
                        / PRIVACY POLICY</a>
                </li>
                <li class="list-unstyled mb-3"><a href="#" target="_blank" rel="noopener noreferrer">LANGUAGE</a>
                </li>
            </ul>
            <p>© 2023 <a href="#"><b>Jeddah Mazad.</b></a> All Rights Reserved</p>
        </div>
    </section>


    <!-- =============================Footer End==============================-->
    <!-- jQuery link  -->
    <script type="text/javascript" src="assets/jquery/jquery-3.6.0.min.js"></script>
    <!-- Slick slider js  -->
    <script type="text/javascript" src="assets/js/slick.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="assets/js/main.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>


    <script type="text/javascript">
        (function ($) {
            $.fn.picZoomer = function (options) {
                var opts = $.extend({}, $.fn.picZoomer.defaults, options),
                    $this = this,
                    $picBD = $('<div class="picZoomer-pic-wp"></div>')
                        .css({ width: opts.picWidth + "px", height: opts.picHeight + "px" })
                        .appendTo($this),
                    $pic = $this.children("img").addClass("picZoomer-pic").appendTo($picBD),
                    $cursor = $(
                        '<div class="picZoomer-cursor"><i class="f-is picZoomCursor-ico"></i></div>'
                    ).appendTo($picBD),
                    cursorSizeHalf = { w: $cursor.width() / 2, h: $cursor.height() / 2 },
                    $zoomWP = $(
                        '<div class="picZoomer-zoom-wp"><img src="" alt="" class="picZoomer-zoom-pic"></div>'
                    ).appendTo($this),
                    $zoomPic = $zoomWP.find(".picZoomer-zoom-pic"),
                    picBDOffset = { x: $picBD.offset().left, y: $picBD.offset().top };

                opts.zoomWidth = opts.zoomWidth || opts.picWidth;
                opts.zoomHeight = opts.zoomHeight || opts.picHeight;
                var zoomWPSizeHalf = { w: opts.zoomWidth / 2, h: opts.zoomHeight / 2 };

    
                $zoomWP.css({
                    width: opts.zoomWidth + "px",
                    height: opts.zoomHeight + "px"
                });
                $zoomWP.css(
                    opts.zoomerPosition || { top: 0, left: opts.picWidth + 30 + "px" }
                );
                $zoomPic.css({
                    width: opts.picWidth * opts.scale + "px",
                    height: opts.picHeight * opts.scale + "px"
                });

                $picBD
                    .on("mouseenter", function (event) {
                        $cursor.show();
                        $zoomWP.show();
                        $zoomPic.attr("src", $pic.attr("src"));
                    })
                    .on("mouseleave", function (event) {
                        $cursor.hide();
                        $zoomWP.hide();
                    })
                    .on("mousemove", function (event) {
                        var x = event.pageX - picBDOffset.x,
                            y = event.pageY - picBDOffset.y;

                        $cursor.css({
                            left: x - cursorSizeHalf.w + "px",
                            top: y - cursorSizeHalf.h + "px"
                        });
                        $zoomPic.css({
                            left: -(x * opts.scale - zoomWPSizeHalf.w) + "px",
                            top: -(y * opts.scale - zoomWPSizeHalf.h) + "px"
                        });
                    });
                return $this;
            };
            $.fn.picZoomer.defaults = {
                picHeight: 460,
                scale: 2.5,
                zoomerPosition: { top: "0", left: "380px" },

                zoomWidth: 400,
                zoomHeight: 460
            };
        })(jQuery);

        $(document).ready(function () {
            $(".picZoomer").picZoomer();
            $(".piclist li").on("click", function (event) {
                var $pic = $(this).find("img");
                $(".picZoomer-pic").attr("src", $pic.attr("src"));
            });
        });

    </script>
</body>


</html>