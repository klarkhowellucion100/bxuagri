 <?php include_once "headingland.php" ?>
 <!-- Add your site or application content here -->
 <main>


 <?php
if (isset($_GET['view'])) {
    include_once 'db.inc.php';
   
   $id = $_GET['view'];
   $query="SELECT * FROM posts WHERE id = '$id'";
   $result = mysqli_query($conn,$query); /*or die ("Cannot delete data from database.". mysqli_error($conn));
   if($fire) echo "Data deleted from database";*/
 
   
   $row = $result->fetch_array();

//10


$id= $row['id'];
$code= $row['code'];
$mmonth= $row['mmonth'];
$mday= $row['mday'];
$myear= $row['myear'];
$mtime= $row['mtime'];
$mfull= $row['mfull'];
$fname= $row['fname'];
$mname= $row['mname'];
$lname= $row['lname'];
$ename= $row['ename'];
$ppic= $row['ppic'];
$ppos= $row['ppos'];
$poffice= $row['poffice'];
$ptitle= $row['ptitle'];
$pcont= $row['pcont'];
$file= $row['file'];
$pstat= $row['pstat'];
$pdate= $row['pdate'];
$prem= $row['prem'];




}

$date_f = date('Y-m-d');
   ?>


<!-- page title area start  -->
<section class="page-title-area" data-background="banner.png">
    <div class="page-title-shape">
        <img class="shape-cube" src="armado2/assets/img/shape/cube-shape.png" alt="img not found">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="page-title-wrapper">
                    <h1 class="page-title mb-10">CONTENT</h1>
                </div>
                <div class="breadcrumb-menu">
                    <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                        <ul class="trail-items">
                            <li class="trail-item trail-begin"><a href="index.php"><span>home</span></a>
                            </li>
                            <li class="trail-item"><a href="news.php"><span>news</span></a>
                            </li>
                            <li class="trail-item trail-end"><span>content</span></li>
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
                <div class="blog-details-wrapper mb-20">
                    <div class="single-blog blog-details-single mb-30">
                        <div class="blog-thumb p-relative">
                           
                            <a href="#">
                                <img src="post/<?php echo $file;?>" alt="img not found">
                            </a>

                            <div class="panel wow"></div>
                        </div>
                        <div class="blog-content">
                            <h4 class="blog-title">
                                <a href="#">
                                    <?php echo $ptitle;?>
                                </a>
                            </h4>
                            <div class="blog-meta-wrapper">
                                <div class="meta-list">
                                    <div class="meta-item">
                                        <div class="meta-icon">
                                            <i class="flaticon-048-calendar"></i>
                                        </div>
                                        <div class="meta-text"><?php echo $mfull;?></div>
                                    </div>
                                    <div class="meta-item">
                                        <a href="#">
                                            <div class="meta-icon">
                                                <i class="flaticon-055-speech-bubble"></i>
                                            </div>
                                            <div class="meta-text"><?php echo $fname;?> <?php echo $mname;?> <?php echo $fname;?></div>
                                        </a>
                                    </div>
                                </div>
                                
                            </div>
                            <p><?php echo $pcont;?></p>
                            

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar-widget-wrapper mb-60">
                    
                <div class="blog-sidebar-widget mb-30">
                                <h4 class="sidebar-widget-title">Recent Posts</h4>
                                <div class="sidebar-blog-list">

                                <?php
                                    include 'db.inc.php';
                                        $query1 = mysqli_query($conn,"SELECT * FROM posts WHERE pstat='Approve' ORDER BY id DESC LIMIT 5");
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
<?php include_once "footingland.php" ?>