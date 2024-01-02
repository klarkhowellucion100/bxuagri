<?php include "headingland.php"; ?>
<div id="wrapper">
            <!-- content    -->
            <div class="content">
                <!--section   -->
                <section class="hero-section">
                    <div class="bg-wrap hero-section_bg">
                        <div class="bg" data-bg="logo3.png"></div>
                    </div>
                    <div class="container">
                        <div class="hero-section_title">
                            <h2>Our Contact</h2>
                        </div>
                        <div class="clearfix"></div>
                        <div class="breadcrumbs-list fl-wrap">
                            <a href="index.php">Home</a> <a href="contact.php">Contact Us</a>
                        </div>
                        <div class="scroll-down-wrap scw_transparent">
                            <div class="mousey">
                                <div class="scroller"></div>
                            </div>
                            <span>Scroll Down To Discover</span>
                        </div>
                    </div>
                </section>
                <!-- section end  -->
                <!--section   -->
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="pr-subtitle prs_big">Details</div>
                                <!--card-item -->
                                <ul class="contacts-list fl-wrap">
                                    <li><span><i class="fa fa-map-marker"></i> Adress :</span> <a href="https://www.google.com/maps?ll=8.968133,125.593208&z=14&t=m&hl=en&gl=PH&mapclient=embed&cid=243665980419470251">DOP Building, Tiniwisan, Butuan City</a></li>
                                    <li><span><i class="fa fa-envelope"></i> Mail :</span> <a href="#">bxuagriculturist@yahoo.com</a></li>
                                </ul>
                                <!--card-item end -->
                                <div class="contact-social fl-wrap">
                                    <span class="cs-title">Find us on: </span>
                                    <ul>
                                        <li><a href="https://web.facebook.com/bxuagriculturist" style="text-decoration: underline;" target="_blank"><i class="fa fa-facebook-f"></i></a></li>
                                    </ul>
                                </div>
                                
                            </div>
                            <div class="col-md-8">
                                <div class="pad-con fl-wrap">
                                    <div class="pr-subtitle prs_big">Drop us a line</div>
                                    <!--<p>Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla. Nulla eget iaculis lectus. Mauris ac maximus neque. Nam in mauris quis libero sodales eleifend. Morbi varius, nulla sit amet rutrum elementum, est elit
                                        finibus tellus, ut tristique elit risus at metus. In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida.</p>-->
                                    <div id="contact-form" style="margin-top: 20px;">
                                        <div id="message"></div>
                                        <form class="custom-form" action="php/contact.php" name="contactform" id="contactform">
                                            <fieldset>
                                                <input type="text" name="name" id="name" placeholder="Your Name *" value="" />
                                                <input type="text" name="email" id="email" placeholder="Email Address*" value="" />
                                                <textarea name="comments" id="comments" cols="40" rows="3" placeholder="Your Message:"></textarea>
                                            </fieldset>
                                            <button class="btn   color-bg float-btn" id="submit">Send message <i class="fa fa-caret-right"></i></button>
                                        </form>
                                    </div>
                                    <!-- contact form  end-->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- content  end-->
      
<?php include "footingland.php"; ?>