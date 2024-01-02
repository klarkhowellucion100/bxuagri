

<?php include "headingland.php"; ?>


<?php
if (isset($_GET['print'])) {
    include_once 'db.inc.php';
   
   $codef = $_GET['print'];
}

   ?>


<?php
                                                        include 'db.inc.php';
                                                        $query1 = mysqli_query($conn,"SELECT * FROM services WHERE (codef LIKE '%$codef%')");
                                                        while($result1 = mysqli_fetch_array($query1)): ?>





                                                        <?php endwhile; ?>





                                                   
                                                        <div id="wrapper">
                                                            
            <!-- content    -->
                <!--section   -->
                <section class="hero-section">
                    <div class="bg-wrap hero-section_bg">
                        <div class="bg" data-bg="logo3.png"></div>
                    </div>
                    <div class="container">
                        <div class="hero-section_title">
                            <h2>Request and Collection Forms</h2>
                        </div>
                        <div class="clearfix"></div>
                        <div class="breadcrumbs-list fl-wrap">
                            <a href="index.php" style="font-size: 15px;">Home</a>
                        </div>
                        <div class="scroll-down-wrap scw_transparent">
                            <div class="mousey">
                                <div class="scroller"></div>
                            </div>
                            <span style="font-size: 15px;">Scroll Down To Discover</span>
                        </div>
                    </div>
                </section>
                <!-- section end  -->
                <!--section   -->
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="main-container fl-wrap fix-container-init">
                                    <div class="section-title">
                                        <h2>Filled Request Form</h2>
                                        <h4>You can download this form or present the code for printing</h4>                                       
                                    </div>
                                    <div class="list-post-wrap list-post-wrap_column list-post-wrap_column_fw">
                                        <!--list-post-->
                                        <style>
                                            table, td, th {  
                                            border: 1px solid #ddd;
                                            text-align: left;
                                            }

                                            table {
                                            border-collapse: collapse;
                                            width: 100%;
                                            }

                                            th, td {
                                            padding: 15px;
                                            }
                                        </style>

                                        <table>
                                            <tr>
                                              
                                                <td colspan=4 style="text-align:left;">City Government of Butuan <br><span style="font-weight:bold; font-style:italic; font-size: 15px;">City Agriculture Office</span> <br> <span style="font-weight:bold;">GUIDELINES ON CAgO'S CUTOMER FEEDBACK RESPONSE HANDLING PROCESS</span></td>
                                                <td colspan=1 style="text-align:center;"><img src="logo2.png" style="width:70px; height:70px;" alt=""></td>
                                                
                                            </tr>

                                            <tr>
                                                <td colspan=5 style="text-align:right;"><span style="font-size: 13px;"> CAgO-CF Form 7 </span> </td>
                                            </tr>

                                            <tr>
                                                <td colspan=5 style="text-align:center;"><span style="font-size: 20px; font-weight:bold;">  City Agriculture Office </span></td>
                                            </tr>

                                            <tr>
                                                <td colspan=5 style="text-align:center;"><span style="font-size: 15px;"> (CAgO) </span></td>
                                            </tr>

                                            <tr>                                              
                                                <td colspan=5 style="text-align:center;"><span style="font-size: 20px; font-weight:bold;"> REQUEST FORM </span></td>
                                            </tr>

                                            <tr>                                              
                                                <td colspan=5 style="text-align:center;"><span style="font-size: 15px; font-weight:bold;"> REQUEST FORM </span></td>
                                            </tr>

                                            <tr>                                              
                                                <td colspan=1 style="text-align:center;"><span style="font-size: 15px; font-weight:bold;">Name</span></td>
                                                <td colspan=2 style="text-align:center;"><span style="font-size: 15px;"></span></td>
                                                <td colspan=1 style="text-align:center;"><span style="font-size: 15px; font-weight:bold;">Date</span></td>
                                                <td colspan=1 style="text-align:center;"><span style="font-size: 15px;"></span></td>
                                            </tr>

                                            <tr>                                              
                                                <td colspan=1 style="text-align:center;"><span style="font-size: 15px; font-weight:bold;">Address</span></td>
                                                <td colspan=2 style="text-align:center;"><span style="font-size: 15px;"></span></td>
                                                <td colspan=1 style="text-align:center;"><span style="font-size: 15px; font-weight:bold;">Tel/Cellphone No.</span></td>
                                                <td colspan=1 style="text-align:center;"><span style="font-size: 15px;"></span></td>
                                            </tr>

                                            <tr>                                              
                                                <td colspan=1 style="text-align:center;"><span style="font-size: 15px; font-weight:bold;">Office</span></td>
                                                <td colspan=2 style="text-align:center;"><span style="font-size: 15px;"></span></td>
                                                <td colspan=1 style="text-align:center;"><span style="font-size: 15px; font-weight:bold;">Email Address</span></td>
                                                <td colspan=1 style="text-align:center;"><span style="font-size: 15px;"></span></td>
                                            </tr>

                                            <tr>                                              
                                                <td colspan=5 style="text-align:center;"><span style="font-size: 15px; font-weight:bold;">Details of Request</span></td>                                              
                                            </tr>

                                            <tr>                                              
                                                <td colspan=5 style="text-align:center;"><span style="font-size: 15px; font-weight:bold;"></span></td>                                              
                                            </tr>

                                            <tr>                                              
                                                <td colspan=5 style="text-align:right;"><span style="font-size: 15px; font-weight:bold;"></span></td>                                              
                                            </tr>

                                            <tr >                                              
                                                <td colspan=5 style="text-align:right; border:none;"><span style="font-size: 10px;">Client's Signature over Printed Name</span></td>                                              
                                            </tr>

                                        </table>
                                                                            
                                     
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="load-more_btn lmb_center-align"><i class="fal fa-undo"></i>Load More</div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <!-- sidebar   -->
                                <div class="sidebar-content fl-wrap fixed-bar">
                                    <!-- box-widget -->
                                    <div class="box-widget fl-wrap">
                                        <div class="box-widget-content">
                                            <div class="search-widget fl-wrap">
                                                <form action="#">
                                                    <input name="se" id="se12" type="text" class="search" placeholder="Search..." value="" />
                                                    <button class="search-submit2" id="submit_btn12"><i class="far fa-search"></i> </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- box-widget  end -->
                                    <!-- box-widget -->
                                    <div class="box-widget fl-wrap">
                                        <div class="box-widget-content">
                                            <div class="banner-widget fl-wrap">
                                                <div class="bg-wrap bg-parallax-wrap-gradien">
                                                    <div class="bg  " data-bg="images/bg/7.jpg"></div>
                                                </div>
                                                <div class="banner-widget_content">
                                                    <h5>Visit our awesome merch and souvenir online shop.</h5>
                                                    <a href="#" class="btn float-btn color-bg small-btn">Our shop</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- box-widget  end -->
                                    <!-- box-widget -->
                                    <div class="box-widget fl-wrap">
                                        <div class="widget-title">Categories</div>
                                        <div class="box-widget-content">
                                            <ul class="cat-wid-list">
                                                <li><a href="#">Science</a><span>3</span></li>
                                                <li><a href="#">Politics</a> <span>6</span></li>
                                                <li><a href="#">Technology</a> <span>12</span></li>
                                                <li><a href="#">Sports</a> <span>4</span></li>
                                                <li><a href="#">Business</a> <span>22</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- box-widget  end -->
                                    <!-- box-widget -->
                                    <div class="box-widget fl-wrap">
                                        <div class="widget-title">Popular Tags</div>
                                        <div class="box-widget-content">
                                            <div class="tags-widget">
                                                <a href="#">Science</a>
                                                <a href="#">Politics</a>
                                                <a href="#">Technology</a>
                                                <a href="#">Business</a>
                                                <a href="#">Sports</a>
                                                <a href="#">Food</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- box-widget  end -->
                                    <!-- box-widget -->
                                    <div class="box-widget fl-wrap">
                                        <div class="widget-title">Follow Us</div>
                                        <div class="box-widget-content">
                                            <div class="social-widget">
                                                <a href="#" target="_blank" class="facebook-soc">
                                                    <i class="fab fa-facebook-f"></i>
                                                    <span class="soc-widget-title">Likes</span>
                                                    <span class="soc-widget_counter">2640</span>
                                                    </a>
                                                <a href="#" target="_blank" class="twitter-soc">
                                                    <i class="fab fa-twitter"></i>
                                                    <span class="soc-widget-title">Followers</span>
                                                    <span class="soc-widget_counter">1456</span>												
                                                    </a>
                                                <a href="#" target="_blank" class="youtube-soc">
                                                    <i class="fab fa-youtube"></i>
                                                    <span class="soc-widget-title">Followers</span>
                                                    <span class="soc-widget_counter">1456</span>												
                                                    </a>
                                                <a href="#" target="_blank" class="instagram-soc">
                                                    <i class="fab fa-instagram"></i>
                                                    <span class="soc-widget-title">Followers</span>
                                                    <span class="soc-widget_counter">1456</span>												
                                                    </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- box-widget  end -->
                                    <!-- box-widget -->
                                    <div class="box-widget fl-wrap">
                                        <div class="box-widget-content">
                                            <!-- content-tabs-wrap -->
                                            <div class="content-tabs-wrap tabs-act tabs-widget fl-wrap">
                                                <div class="content-tabs fl-wrap">
                                                    <ul class="tabs-menu fl-wrap no-list-style">
                                                        <li class="current"><a href="#tab-popular"> Popular News </a></li>
                                                        <li><a href="#tab-resent">Resent News</a></li>
                                                    </ul>
                                                </div>
                                                <!--tabs -->
                                                <div class="tabs-container">
                                                    <!--tab -->
                                                    <div class="tab">
                                                        <div id="tab-popular" class="tab-content first-tab">
                                                            <div class="post-widget-container fl-wrap">
                                                                <!-- post-widget-item -->
                                                                <div class="post-widget-item fl-wrap">
                                                                    <div class="post-widget-item-media">
                                                                        <a href="post-single.html"><img src="images/all/thumbs/1.jpg"  alt=""></a>
                                                                    </div>
                                                                    <div class="post-widget-item-content">
                                                                        <h4><a href="post-single.html">How to start Home education.</a></h4>
                                                                        <ul class="pwic_opt">
                                                                            <li><span><i class="far fa-clock"></i> 25 may 2022</span></li>
                                                                            <li><span><i class="far fa-comments-alt"></i> 12</span></li>
                                                                            <li><span><i class="fal fa-eye"></i> 654</span></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <!-- post-widget-item end -->
                                                                <!-- post-widget-item -->
                                                                <div class="post-widget-item fl-wrap">
                                                                    <div class="post-widget-item-media">
                                                                        <a href="post-single.html"><img src="images/all/thumbs/2.jpg"  alt=""></a>
                                                                    </div>
                                                                    <div class="post-widget-item-content">
                                                                        <h4><a href="post-single.html">The secret to moving this   screening.</a></h4>
                                                                        <ul class="pwic_opt">
                                                                            <li><span><i class="far fa-clock"></i> 13 april 2021</span></li>
                                                                            <li><span><i class="far fa-comments-alt"></i> 6</span></li>
                                                                            <li><span><i class="fal fa-eye"></i> 1227</span></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <!-- post-widget-item end -->
                                                                <!-- post-widget-item -->
                                                                <div class="post-widget-item fl-wrap">
                                                                    <div class="post-widget-item-media">
                                                                        <a href="post-single.html"><img src="images/all/thumbs/3.jpg"  alt=""></a>
                                                                    </div>
                                                                    <div class="post-widget-item-content">
                                                                        <h4><a href="post-single.html">Fall ability to keep Congress on rails.</a></h4>
                                                                        <ul class="pwic_opt">
                                                                            <li><span><i class="far fa-clock"></i> 02 December 2021</span></li>
                                                                            <li><span><i class="far fa-comments-alt"></i> 12</span></li>
                                                                            <li><span><i class="fal fa-eye"></i> 654</span></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <!-- post-widget-item end -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--tab  end-->
                                                    <!--tab -->
                                                    <div class="tab">
                                                        <div id="tab-resent" class="tab-content">
                                                            <div class="post-widget-container fl-wrap">
                                                                <!-- post-widget-item -->
                                                                <div class="post-widget-item fl-wrap">
                                                                    <div class="post-widget-item-media">
                                                                        <a href="post-single.html"><img src="images/all/thumbs/5.jpg"  alt=""></a>
                                                                    </div>
                                                                    <div class="post-widget-item-content">
                                                                        <h4><a href="post-single.html">Magpie nesting zone sites.</a></h4>
                                                                        <ul class="pwic_opt">
                                                                            <li><span><i class="far fa-clock"></i> 05 april 2021</span></li>
                                                                            <li><span><i class="far fa-comments-alt"></i> 16</span></li>
                                                                            <li><span><i class="fal fa-eye"></i> 727</span></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <!-- post-widget-item end -->
                                                                <!-- post-widget-item -->
                                                                <div class="post-widget-item fl-wrap">
                                                                    <div class="post-widget-item-media">
                                                                        <a href="post-single.html"><img src="images/all/thumbs/6.jpg"  alt=""></a>
                                                                    </div>
                                                                    <div class="post-widget-item-content">
                                                                        <h4><a href="post-single.html">Locals help create whole new community.</a></h4>
                                                                        <ul class="pwic_opt">
                                                                            <li><span><i class="far fa-clock"></i> 22 march 2021</span></li>
                                                                            <li><span><i class="far fa-comments-alt"></i> 31</span></li>
                                                                            <li><span><i class="fal fa-eye"></i> 63</span></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <!-- post-widget-item end -->
                                                                <!-- post-widget-item -->
                                                                <div class="post-widget-item fl-wrap">
                                                                    <div class="post-widget-item-media">
                                                                        <a href="post-single.html"><img src="images/all/thumbs/7.jpg"  alt=""></a>
                                                                    </div>
                                                                    <div class="post-widget-item-content">
                                                                        <h4><a href="post-single.html">Tennis season still to proceed.</a></h4>
                                                                        <ul class="pwic_opt">
                                                                            <li><span><i class="far fa-clock"></i> 06 December 2021</span></li>
                                                                            <li><span><i class="far fa-comments-alt"></i> 05</span></li>
                                                                            <li><span><i class="fal fa-eye"></i> 145</span></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <!-- post-widget-item end -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--tab end-->
                                                </div>
                                                <!--tabs end-->
                                            </div>
                                            <!-- content-tabs-wrap end -->
                                        </div>
                                    </div>
                                    <!-- box-widget  end -->
                                </div>
                                <!-- sidebar  end -->
                            </div>
                        </div>
                        <div class="limit-box fl-wrap"></div>
                    </div>
                </section>
                <!-- section end -->
                <!-- section  -->
                <div class="gray-bg ad-wrap fl-wrap">
                    <div class="content-banner-wrap">
                        <img src="images/all/banner.jpg" class="respimg" alt="">
                    </div>
                </div>
                <!-- section end -->
            </div>
            <!-- content  end-->
            <!-- footer -->


<?php include "footingland.php"; ?>