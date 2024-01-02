<?php include_once "headingland.php"; ?>
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
                            <h1 class="page-title mb-10">News</h1>
                        </div>
                        <div class="breadcrumb-menu">
                            <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                                <ul class="trail-items">
                                    <li class="trail-item trail-begin"><a href="index.php"><span>home</span></a>
                                    </li>
                                    <li class="trail-item trail-end"><span>News</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page title area end  -->

        <!-- blog area start  -->
        <section class="blog-area pt-130 pb-70">
            <div class="container">
                <div class="row wow fadeInUp" data-wow-delay=".3s">


                    <div class="col-lg-8">
                        <div class="blog-main-wrapper mb-60">

                        <?php
                            include 'db.inc.php';
                                $query1 = mysqli_query($conn,"SELECT * FROM posts WHERE poffice!='AgriBOOST' AND pstat='Approve' ORDER BY id DESC");
                                        while($result1 = mysqli_fetch_array($query1)): ?>

                            <div class="single-blog blog-main-single mb-30">
                                <div class="blog-thumb">
                                    <!--<div class="blog-tags">
                                        <a href="blog.html" class="blog-tag">Training</a>
                                    </div>-->
                                    <a href="newscontent.php?view=<?php echo $result1['id'];?>">
                                        <img src="post/<?php echo $result1 ['file']; ?>" alt="img not found">
                                    </a>
                                    <div class="panel wow"></div>
                                </div>
                                <div class="blog-content">
                                    <h4 class="blog-title">
                                        <a href="newscontent.php?view=<?php echo $result1['id'];?>">
                                            <?php echo $result1 ['ptitle']; ?>
                                        </a>
                                    </h4>
                                    <div class="blog-meta-wrapper">
                                        <div class="meta-list">
                                            <div class="meta-item">
                                                <div class="meta-icon">
                                                    <i class="flaticon-048-calendar"></i>
                                                </div>
                                                <div class="meta-text"><?php echo $result1 ['mfull']; ?></div>
                                            </div>
                                            <div class="meta-item">
                                                <a href="javascript:0;">
                                                    <div class="meta-icon">
                                                        <i class="flaticon-055-speech-bubble"></i>
                                                    </div>
                                                    <div class="meta-text"><?php echo $result1 ['fname']; ?> <?php echo $result1 ['mname']; ?> <?php echo $result1 ['lname']; ?></div>
                                                </a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; ?>
                            <!--<div class="basic-pagination mt-55">
                                <ul>
                                    <li><span aria-current="page" class="page-numbers current">01</span></li>
                                    <li><a class="page-numbers" href="#">02</a></li>
                                    <li><a class="next page-numbers" href="#">
                                            <i class="fal fa-arrow-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>-->
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="sidebar-widget-wrapper mb-60">

                            <!--<div class="blog-sidebar-widget mb-30">
                                <h4 class="sidebar-widget-title">Search</h4>
                                <div class="sidebar-search">
                                    <div class="search-input-field sidebar-search">
                                        <input type="text" placeholder="Search Now . . .">
                                        <button><i class="far fa-search"></i></button>
                                    </div>
                                </div>
                            </div>

                            <div class="blog-sidebar-widget mb-30">
                                <h4 class="sidebar-widget-title">Category</h4>
                                <div class="category-list sidebar-category">
                                    <ul>
                                        <li>
                                            <a href="blog.html">Guard (<span class="category-items">5</span>)</a>
                                        </li>
                                        <li>
                                            <a href="blog.html">Security (<span class="category-items">5</span>)</a>
                                        </li>
                                        <li>
                                            <a href="blog.html">Emargency (<span class="category-items">7</span>)</a>
                                        </li>
                                        <li>
                                            <a href="blog.html">Standard (<span class="category-items">6</span>)</a>
                                        </li>
                                        <li>
                                            <a href="blog.html">Bank Security (<span
                                                    class="category-items">3</span>)</a>
                                        </li>
                                    </ul>
                                </div>
                            </div> -->

                            <div class="blog-sidebar-widget mb-30">
                                <h4 class="sidebar-widget-title">Recent Posts</h4>
                                <div class="sidebar-blog-list">

                                <?php
                                    include 'db.inc.php';
                                        $query1 = mysqli_query($conn,"SELECT * FROM posts WHERE poffice!='AgriBOOST' AND pstat='Approve' ORDER BY id DESC LIMIT 5");
                                                while($result1 = mysqli_fetch_array($query1)): ?>

                                    <div class="sidebar-blog">
                                        <div class="blog-thumb">
                                            <a href="blog-details.html">
                                                <img src="post/<?php echo $result1 ['file']; ?>" alt="img not found">
                                            </a>
                                        </div>
                                        <div class="blog-content">
                                            <h4 class="blog-title">
                                                <a href="blog-details.html">
                                                    <?php echo $result1 ['ptitle']; ?>
                                                </a>
                                            </h4>
                                            <div class="meta-list">
                                                <div class="meta-item">
                                                    <div class="meta-icon">
                                                        <i class="flaticon-048-calendar"></i>
                                                    </div>
                                                    <div class="meta-text"><?php echo $result1 ['mfull']; ?></div>
                                                </div>
                                                <div class="meta-item">
                                                    <a href="javascript:0;">
                                                        <div class="meta-icon">
                                                            <i class="flaticon-055-speech-bubble"></i>
                                                        </div>
                                                        <div class="meta-text"><?php echo $result1 ['fname']; ?> <?php echo $result1 ['mname']; ?> <?php echo $result1 ['lname']; ?></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endwhile; ?>
                                    
                                </div>
                            </div>




                            <div class="blog-sidebar-widget mb-30">
                                <h4 class="sidebar-widget-title">Popular Tags</h4>
                                <div class="sidebar-blog-tags">
                                    <a href="newsagboost.php" class="blog-tag">AgriBOOST</a>
                                    <a href="newscityag.php" class="blog-tag">CAgO</a>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog area end  -->

    </main>
    <?php include_once "footingland.php"; ?>