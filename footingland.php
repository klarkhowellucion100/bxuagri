 <!-- footer-area-start -->
 <footer class="footer-sticky">

<!-- subscribe-area-start -->
<section class="subscribe-area footer-bg pt-130 pb-80 p-relative z-index-1">
    <div class="noise-wrapper">
        <div class="noise"></div>
    </div>
    <div class="container">
        <div class="subscribe-inner p-relative">
           
            <div class="row">
                <div class="col-xl-12">
                    <div class="subscribe-wrapper">
                        <div class="subscribe-icon">
                            <i class="flaticon-070-email-1"></i>
                        </div>
                        <div class="subscribe-text">
                            <h3 class="subscribe-title">THANK YOU FOR VISITING OUR PAGE!</h3>
                        </div>
                        <div class="subscribe-form p-relative">
                           <!-- <div class="single-input-field field-email">
                                <input type="email" placeholder="Enter Your Mail">
                            </div>
                            <div class="subs-btn">
                                <a href="#" class="fill-btn">Subscribe Now</a>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- subscribe-area-end -->
<section class="footer-widget-area footer-bg p-relative z-index-1">
    <div class="noise-wrapper">
        <div class="noise"></div>
    </div>
    <div class="container">
        <div class="footer-shape-wrapper">
            <div class="footer-shape shape-1">
                <img src="armado/assets/img/shape/footer/img-1.png" alt="img not found">
            </div>
        </div>
        <div class="arm-footer-border">
            <div class="row">

                <div class="col-xl-3 col-lg-3">
                    <div class="arm-footer-widget footer2-widget-1 mb-40">
                        <div class="footer-widget-logo mb-30">
                            <a href="index.php">

                                <img src="logo2.2.png" alt="img not found">
                            </a>
                        </div>
                        <!--<p>A security agency is a governmental organization which conducts intelligence activities for the internal security of a nation.</p>-->
                        <div class="footer-widget-social">
                            <a href="https://www.facebook.com/bxuagriculturist" target="_blank"><i class="fab fa-facebook"></i></a>
                            <!--<a href="https://twitter.com
                            " target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="https://linkedin.com/" target="_blank"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a href="https://youtube.com
                            " target="_blank"><i class="fab fa-youtube"></i></a>-->
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3">
                    <div class="amr-footer-widget footer2-widget-2 mb-40">
                        <div class="footer-widget-title">
                            <h3>Our Address</h3>
                        </div>
                        <div class="footer-widget-contact">
                            <ul>
                                <li>
                                    <div class="arm-single-contact">
                                        <div class="footer-contact-icon">
                                            <i class="flaticon-077-map"></i>
                                        </div>
                                        <p>DOP Building, Tiniwisan, Butuan City, Philippines, 8600</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="arm-single-contact">
                                        <div class="footer-contact-icon">
                                            <i class="flaticon-073-email-2"></i>
                                        </div>
                                        <p><a href="#">bxuagriculturist@yahoo.com</a></p>
                                    </div>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                </div>

                
                <div class="col-xl-3 col-lg-3">
                    <div class="amr-footer-widget footer2-widget-2 mb-40">
                        <div class="footer-widget-title">
                            <h3>Location</h3>
                        </div>
                            <div class="footer-widget-contact">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7657.679258331965!2d125.58939201286749!3d8.969090949306203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x330195b3cbc1fcd7%3A0x361aceb0ebff3ab!2sOffice%20of%20the%20City%20Agriculturist!5e0!3m2!1sen!2sph!4v1671432232270!5m2!1sen!2sph" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                                       
                            </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3">
                    <div class="arm-footer-widget footer2-widget-3 mb-40">
                        <div class="footer-widget-blog">
                            <div class="footer-widget-title">
                                <h3>Recent news</h3>
                            </div>

                            <?php
                            include 'db.inc.php';
                                $query1 = mysqli_query($conn,"SELECT * FROM posts WHERE pstat='Approve' ORDER BY id DESC LIMIT 2");
                                        while($result1 = mysqli_fetch_array($query1)): ?>
                            <div class="blog-single blog-footer mb-30">
                                <div class="footer-blog-thumb">
                                    <a href="newscontent.php?view=<?php echo $result1['id'];?>"><img src="post/<?php echo $result1['file'];?>"
                                            alt="img not found"></a>
                                </div>
                                <div class="arm-footer-blog-content">
                                    <div class="footer-blog-title">
                                        <h5><a href="newscontent.php?view=<?php echo $result1['id'];?>"><?php echo $result1['ptitle'];?></a></h5>
                                    </div>
                                    <div class="arm-footer-blog-meta-list">
                                        <div class="arm-footer-blog-meta">
                                            <div class="footer-blog-icon">
                                                <i class="flaticon-048-calendar"></i>
                                            </div>
                                            <div class="footer-blog-meta-text">
                                                <span><?php echo $result1['mfull'];?></span>
                                            </div>
                                        </div>
                                        <div class="arm-footer-blog-meta">
                                            <div class="footer-blog-icon">
                                                <i class="flaticon-052-chat-bubble"></i>
                                            </div>
                                            <div class="footer-blog-meta-text">
                                                <a href="#"><span><?php echo $result1['fname'];?> <?php echo $result1['mname'];?> <?php echo $result1['lname'];?></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; ?>
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<div class="copyright-area footer-bg pt-60 pb-60 p-relative z-index-1">
    <div class="noise-wrapper">
        <div class="noise"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="copyright-text copyright-2-text text-center">
                    Copyright &copy; 2023  <a href="#">City Agriculture Office of Butuan</a>. All rights reserved.
                </div>
            </div>
        </div>
    </div>
</div>
</footer>
<!-- footer-area-end -->

<!-- preloader  -->
<div id="preloader">
<div id="ctn-preloader" class="ctn-preloader">
    <div class="animation-preloader">
        <div class="spinner"></div>
        <div class="txt-loading">
            <span data-text-preloader="C" class="letters-loading">
                C
            </span>
            <span data-text-preloader="A" class="letters-loading">
                A
            </span>
            <span data-text-preloader="g" class="letters-loading">
                g
            </span>
            <span data-text-preloader="O" class="letters-loading">
                O
            </span>
           <!-- <span data-text-preloader="D" class="letters-loading">
                D
            </span>
            <span data-text-preloader="O" class="letters-loading">
                O
            </span> -->
        </div>
    </div>
    <div class="loader">
        <div class="row">
            <div class="col-3 loader-section section-left">
                <div class="bg"></div>
            </div>
            <div class="col-3 loader-section section-left">
                <div class="bg"></div>
            </div>
            <div class="col-3 loader-section section-right">
                <div class="bg"></div>
            </div>
            <div class="col-3 loader-section section-right">
                <div class="bg"></div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- preloader end -->

<!-- back to top start -->
<div class="progress-wrap">
<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
    <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
</svg>
</div>
<!-- back to top end -->

<!-- JS here -->
<script data-cfasync="false" src="armado/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="armado/assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="armado/assets/js/vendor/waypoints.min.js"></script>
<script src="armado/assets/js/bootstrap.bundle.min.js"></script>
<script src="armado/assets/js/meanmenu.js"></script>
<script src="armado/assets/js/swiper-bundle.min.js"></script>
<script src="armado/assets/js/magnific-popup.min.js"></script>
<script src="armado/assets/js/backToTop.js"></script>
<script src="armado/assets/js/nice-select.min.js"></script>
<script src="armado/assets/js/ajax-form.js"></script>
<script src="armado/assets/js/wow.min.js"></script>
<script src="armado/assets/js/isotope.pkgd.min.js"></script>
<script src="armado/assets/js/imagesloaded.pkgd.min.js"></script>
<script src="armado/assets/js/jquery.appear.js"></script>
<script src="armado/assets/js/jquery.odometer.min.js"></script>
<script src="armado/assets/js/slick.min.js"></script>
<script src="armado/assets/js/js_circle-progress.min.js"></script>
<script src="armado/assets/js/main.js"></script>
</body>

</html>