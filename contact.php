<?php include_once "headingland.php" ?>

 <!-- Add your site or application content here -->
 <main>

<!-- page title area start  -->
<section class="page-title-area" data-background="banner.png">
    <div class="page-title-shape">
        <img class="shape-cube" src="armado2/assets/img/shape/cube-shape.png" alt="img not found">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="page-title-wrapper">
                    <h1 class="page-title mb-10">contact us</h1>
                </div>
                <div class="breadcrumb-menu">
                    <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                        <ul class="trail-items">
                            <li class="trail-item trail-begin"><a href="index.php"><span>home</span></a>
                            </li>
                            <li class="trail-item trail-end"><span>contact us</span></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- page title area end  -->

<!-- contact form area start  -->
<section class="contact-form-area pt-130 pb-65">
    <div class="container">
        <div class="contact-form-area-inner p-relative">
            <div class="contact-form-area-shape">
                <img class="contact-form-shape-1" src="armado/assets/img/shape/shape-2.png" alt="img not found">
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="contact-form-area-content mb-65 wow fadeInUp" data-wow-delay=".3s">
                        <div class="bd-section-title-wrapper">
                            <h3 class="bd-section-title mb-40">You may contact us
                            </h3>
                        </div>
                       <!-- <p class="">Armado weapon often resembles real firearms, but the replicas shoot small plastic 6mm BBs. In its nature, airsoft is similar to first-person shooting video games, and it allows experiencing realistic battle and tactical
                            scenario gameplay.</p> -->
                        <!--<div class="social-links form-content-social  wow fadeInUp d-none" data-wow-delay=".3s">
                            <ul>
                                <li><a href="https://facebook.com
                            " target="_blank"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com
                            " target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://linkedin.com/" target="_blank"><i
                                            class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="https://youtube.com
                            " target="_blank"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>-->
                        <div class="meta-items meta-items-contact-form">
                            <div class="meta-item">
                                <div class="meta-item-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="meta-item-content">
                                    <div class="meta-title">Location</div>
                                    <p>DOP Building, Tiniwisan, Butuan City, Philippines, 8600</p>
                                </div>
                            </div>
                            <div class="meta-item">
                                <a href="/cdn-cgi/l/email-protection#026b6c646d42677a636f726e672c616d6f">
                                    <div class="meta-item-icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                </a>
                                <div class="meta-item-content">
                                    <div class="meta-title">Email us</div>
                                    <p><a href="#"><span>bxuagriculturist@yahoo.com</span></a></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form-wrapper mb-65  wow fadeInUp" data-wow-delay=".3s">
                        <div class="contact-form">
                           
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="single-input-field field-f-name">
                                            <input type="text" id="fname" placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-input-field field-l-name">
                                            <input type="text" id="lname" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-input-field field-phone">
                                            <input type="text" id="cnumber" placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-input-field field-subject">
                                            <input type="text" id="subjects" placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-input-field field-message">
                                            <textarea id="details" placeholder="Write Messgae . . . " ></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="contact-form-btn">
                                          
                                            <button class="border-btn" type="submit" name="send" onclick=addmessage()>Send Message</button>
                                        </div>
                                    </div>
                                </div>
                           

                                <script>
                                    function addmessage(){
                                                    var fname= $('#fname').val();
                                                    var lname= $('#lname').val();
                                                    var cnumber= $('#cnumber').val();
                                                    var subjects= $('#subjects').val();
                                                    var details= $('#details').val();

                                                    const alerta = document.getElementById('alerta');

                                                            $.ajax({
                                                                    url:"contactinsert.php",
                                                                    method:"POST",
                                                                    data:{fname:fname,lname:lname,cnumber:cnumber,subjects:subjects,details:details},
                                                                    success:function(data,status){
                                                                        alert("Thank you for your message. We will get back to you shortly");
                                                                        $('#fname').val('');
                                                                        $('#lname').val('');
                                                                        $('#cnumber').val('');
                                                                        $('#subjects').val('');
                                                                        $('#details').val('');
                                                                    
                                                                        
                                                                    }
                                                                });
                                                }
                                </script>
                                <!-- Contact Section Ends -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact form area end  -->

<!-- cta-area-start -->
<section class="cta-area  pt-130 pb-130 contact-cta">
    <div class="container">
        <div class="cta-box p-relative wow fadeInUp" data-wow-delay=".3s">
            <div class="cta-thumb">
                <img src="armado/assets/img/bg/img-3.png" alt="img not found">
            </div>
            <div class="cta-shape-wrapper">
                <div class="cta-shape-1">
                    <img src="armado/assets/img/shape/frame-3.png" alt="img not found">
                </div>
                <div class="cta-shape-2">
                    <img src="armado/assets/img/shape/frame-3.png" alt="img not found">
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="cta-content">
                        <div class="bd-section-title-wrapper centered-title">
                            <div class="bd-section-subtitle cta-color">
                                <i class="flaticon-001-bullet"></i>
                                <span>call now</span>
                                <i class="flaticon-001-bullet"></i>
                            </div>
                            <h3 class="bd-section-title mb-40"><u>24/7
                                    Available. Call us Immediately</u></h3>
                        </div>
                        <div class="cta-num  text-center">
                            <h3><a href="tel:+916668880000">+91 666 888 0000</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- cta-area-end -->

</main>


<?php include_once "footingland.php" ?>