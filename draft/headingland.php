


<!DOCTYPE HTML>
<html lang="en">

<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title>City Agriculture Office || Butuan City</title>
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <!--=============== css  ===============-->
    <link type="text/css" rel="stylesheet" href="css/plugins.css">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link type="text/css" rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--=============== favicons ===============-->
    <link rel="shortcut icon" href="logo.png">
    
</head>

<style>
    
</style>

<body>
    <!-- main start  -->
    <div id="main">
        <!-- progress-bar  -->
        <div class="progress-bar-wrap">
            <div class="progress-bar color-bg"></div>
        </div>
        <!-- progress-bar end -->
        <!-- header -->
        <header class="main-header">
            <!-- top bar -->
            <div class="top-bar fl-wrap">
                <div class="container">
                    <div class="date-holder">
                        <span class="date_num"></span>
                        <span class="date_mounth"></span>
                        <span class="date_year"></span>
                    </div>
                    <div class="header_news-ticker-wrap">
                        <div class="hnt_title" style="font-size: 14px;">Hot News :</div>
                        <div class="header_news-ticker fl-wrap">
                            <ul style="font-size: 14px;">

                            <?php
                                                include 'db.inc.php';
                                                $query1 = mysqli_query($conn,"SELECT * FROM posts WHERE pstat='Approve'");
                                                while($result1 = mysqli_fetch_array($query1)): ?>
                                <li><a href="#"><?php echo $result1 ['ptitle']; ?></a></li>
                                <?php endwhile; ?>
                              
                            </ul>
                        </div>
                        <div class="n_contr-wrap" style="font-size: 14px;">
                            <div class="n_contr p_btn"><i class="fa fa-caret-left"></i></div>
                            <div class="n_contr n_btn"><i class="fa fa-caret-right"></i></div>
                        </div>
                    </div>
                    <ul class="topbar-social">
                        <li><a href="https://web.facebook.com/bxuagriculturist" target="_blank"><i class="fa fa-facebook-f" style="font-size: 14px; margin-top: 8px;"></i></a></li>
                       <!-- <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-vk"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-pinterest-p"></i></a></li> -->
                    </ul>
                </div>
            </div>
            <!-- top bar end -->
            <div class="header-inner fl-wrap">
                <div class="container">
                    <!-- logo holder  -->
                    <a href="index.php" class="logo-holder"><img src="logo5.png" alt="" style="width: 100%; height:400%; margin-top: -10px;"></a>
                    <!-- logo holder end -->
                    <div class="search_btn htact show_search-btn"><i class="fa fa-search" style="font-size: 14px;"></i> <span class="header-tooltip">Search</span></div>
                    <div class="srf_btn htact show-reg-form"><i class="fa fa-user" style="font-size: 14px;"></i> <span class="header-tooltip">Sign In</span></div>
                  <!--  <div class="show-cart sc_btn htact"><i class="fa fa-shopping-bag"></i><span class="show-cart_count">2</span><span class="header-tooltip">Your Cart</span></div> -->
                    <!-- header-search-wrap -->
                    <div class="header-search-wrap novis_sarch">
                        <div class="widget-inner">
                            <form action="#">
                                <input name="se" id="se" type="text" class="search" placeholder="Search..." value="" />
                                <button class="search-submit" id="submit_btn"><i class="fa fa-search transition"></i> </button>
                            </form>
                        </div>
                    </div>
                    <!-- header-search-wrap end -->
                    <!-- header-cart_wrap  -->
                    <div class="header-cart_wrap novis_cart">
                        <div class="header-cart_title">Your Cart <span><strong>2</strong> items</span></div>
                        <div class="header-cart_wrap_container fl-wrap">
                            <div class="box-widget-content">
                                <div class="widget-posts fl-wrap">
                                    <ol>
                                        <li class="clearfix">
                                            <a href="#" class="widget-posts-img"><img src="images/shop/1.jpg" class="respimg" alt=""></a>
                                            <div class="widget-posts-descr">
                                                <a href="#" title="">Awesome Merch Wallet</a>
                                                <div class="widget-posts-descr_calc clearfix">1 <span>x</span> $845</div>
                                            </div>
                                            <div class="clear-cart_button"><i class="far fa-times"></i></div>
                                        </li>
                                        <li class="clearfix">
                                            <a href="#" class="widget-posts-img"><img src="images/shop/2.jpg" class="respimg" alt=""></a>
                                            <div class="widget-posts-descr">
                                                <a href="#" title="">Gmag Merch Wallet</a>
                                                <div class="widget-posts-descr_calc clearfix">2 <span>x</span> $222</div>
                                            </div>
                                            <div class="clear-cart_button"><i class="fal fa-times"></i></div>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="header-cart_wrap_total fl-wrap">
                            <div class="header-cart_wrap_total_item">Subtotal : <span>$1559</span></div>
                        </div>
                        <div class="header-cart_wrap_footer fl-wrap">
                            <a href="cart.html"> View Cart</a>
                            <a href="checkout.html"> Checkout</a>
                        </div>
                    </div>
                    <!-- header-cart_wrap end  -->
                    <!-- nav-button-wrap-->
                    <div class="nav-button-wrap">
                        <div class="nav-button">
                            <span></span><span></span><span></span>
                        </div>
                    </div>
                    <!-- nav-button-wrap end-->
                    <!--  navigation -->
                    <div class="nav-holder main-menu" >
                        <nav>
                            <ul>
                                <li>
                                    <a href="index.php" style="font-size: 14px;" class="act-link unique">Home <!--<i class="fa fa-caret-down"></i>--></a>
                                    <!--second level -->
                                  <!--  <ul>
                                        <li><a href="index.html">Slider</a></li>
                                        <li><a href="index2.html">Carousel</a></li>
                                        <li><a href="index3.html">Grid</a></li>
                                    </ul> -->
                                    <!--second level end-->
                                </li>

                                <li><a href="about.php" style="font-size: 14px;" class="unique">About Us</a></li>

                                <li>
                                    <a href="#" style="font-size: 14px;" class="unique">Services<i class="fa fa-caret-down"></i></a>
                                    <!--second level -->
                                    <ul>
                                        <!--<li><a href="#">Farm</a></li>
                                        <li><a href="#">2 Sidebars</a></li>
                                        <li><a href="#">Grid Sidebar</a></li>
                                        <li><a href="#">Full Width Sidebar </a></li>
                                        <li><a href="#">3 Columns Grid</a></li>-->
                                        <li>
                                            <a href="#" style="font-size: 14px; ">Mechanization<i class="fa fa-caret-down"></i></a>
                                            <!--second level -->
                                            <ul>
                                                <li><a href="#" style="font-size: 14px;">Process</a></li>
                                                <li><a href="servicesfarmmech.php" style="font-size: 14px;">Form</a></li>
                                            </ul>
                                            <!--second level end-->
                                        </li>

                                        <li>
                                            <a href="#" style="font-size: 14px;">Products<i class="fa fa-caret-down"></i></a>
                                            <!--second level -->
                                            <ul>
                                                <li><a href="#" style="font-size: 14px;">Process</a></li>
                                                <li><a href="servicesproducts.php" style="font-size: 14px;">Form</a></li>
                                            </ul>
                                            <!--second level end-->
                                        </li>

                                        <li>
                                            <a href="#" style="font-size: 14px;">Registration<i class="fa fa-caret-down"></i></a>
                                            <!--second level -->
                                            <ul>
                                                <li><a href="#" style="font-size: 14px;">Process</a></li>
                                                <li><a href="#" style="font-size: 14px;">Form</a></li>
                                            </ul>
                                            <!--second level end-->
                                        </li>

                                        <li>
                                            <a href="#" style="font-size: 14px;">Certification<i class="fa fa-caret-down"></i></a>
                                            <!--second level -->
                                            <ul>
                                                <li><a href="#" style="font-size: 14px;">Process</a></li>
                                                <li><a href="#" style="font-size: 14px;">Form</a></li>
                                            </ul>
                                            <!--second level end-->
                                        </li>

                                        <li>
                                            <a href="#" style="font-size: 14px;">Training<i class="fa fa-caret-down"></i></a>
                                            <!--second level -->
                                            <ul>
                                                <li><a href="#" style="font-size: 14px;">Process</a></li>
                                                <li><a href="#" style="font-size: 14px;">Form</a></li>
                                            </ul>
                                            <!--second level end-->
                                        </li>

                                        <li>
                                            <a href="#" style="font-size: 14px;">Farm Inputs<i class="fa fa-caret-down"></i></a>
                                            <!--second level -->
                                            <ul>
                                                <li><a href="#" style="font-size: 14px;">Process</a></li>
                                                <li><a href="#" style="font-size: 14px;">Form</a></li>
                                            </ul>
                                            <!--second level end-->
                                        </li>

                                        <li>
                                            <a href="#" style="font-size: 14px;">Technical<i class="fa fa-caret-down"></i></a>
                                            <!--second level -->
                                            <ul>
                                                <li><a href="#" style="font-size: 14px;">Process</a></li>
                                                <li><a href="#" style="font-size: 14px;">Form</a></li>
                                            </ul>
                                            <!--second level end-->
                                        </li>

                                        <li>
                                            <a href="#" style="font-size: 14px;">Admin<i class="fa fa-caret-down"></i></a>
                                            <!--second level -->
                                            <ul>
                                                <li><a href="#" style="font-size: 14px;">Process</a></li>
                                                <li><a href="#" style="font-size: 14px;">Form</a></li>
                                            </ul>
                                            <!--second level end-->
                                        </li>

                                        <li>
                                            <a href="#" style="font-size: 14px;">Others<i class="fa fa-caret-down"></i></a>
                                            <!--second level -->
                                            <ul>                                               
                                                <li><a href="#" style="font-size: 14px;">Form</a></li>
                                            </ul>
                                            <!--second level end-->
                                        </li>
                                    </ul>
                                    <!--second level end-->
                                </li>

                                <li><a href="contact.php" style="font-size: 14px;" class="unique">Contact Us</a></li>
                             <!--   <li><a href="blog.html">Business</a></li>
                                <li><a href="blog.html">Technology</a></li> -->
                              <!--  <li>
                                    <a href="#">Shop <i class="fa fa-caret-down"></i></a>
                                   
                                    <ul>
                                        <li><a href="shop.html">Products</a></li>
                                        <li><a href="product-single.html">Product Single</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                    </ul>
                                  
                                </li> -->
                              <!--  <li>
                                    <a href="#">Pages<i class="fa fa-caret-down"></i></a>
                                  
                                    <ul>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="contacts.html">Contacts</a></li>
                                        <li><a href="category.html">Category</a></li>
                                        <li><a href="author-single.html">Author Single</a></li>
                                        <li><a href="404.html">404</a></li>
                                    </ul>
                                  
                                </li>-->


                            </ul>
                        </nav>
                    </div>
                    <!-- navigation  end -->
                </div>
            </div>
        </header>