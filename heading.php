<?php
include 'db.inc.php';



session_start();


//session
$userprofile = $_SESSION['fname'];
$userpic = $_SESSION['pfile'];


$userid = $_SESSION['id'];                      
$usertype = $_SESSION['code'];        
$useruname = $_SESSION['uname'];
 
$usermname = $_SESSION['mname'];
$userlname = $_SESSION['lname'];
$userposition = $_SESSION['position'];
$useroffice = $_SESSION['office'];

$userename = $_SESSION['ename'];
$userbday = $_SESSION['bday'];
$userage = $_SESSION['age'];
$usergender = $_SESSION['gender'];
$usercnumber = $_SESSION['cnumber'];
$usereadd = $_SESSION['eaddr'];
$userpdoc = $_SESSION['pdoc'];
$usertype = $_SESSION['type'];
$userregval = $_SESSION['regval'];



// echo '-------------------------------------'.$userprofile;

if($userprofile==true){

   

} else {

    header("location:index.php");
}

$query= "SELECT * FROM usertable WHERE uname ='$userprofile'";
$data = mysqli_query($conn,$query);
$result = mysqli_fetch_assoc($data);


?>

<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>CAgO Data Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="logo.png">

    <!-- Bootstrap Css -->
    <link href="function/dashboard/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="function/dashboard/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="function/dashboard/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

        <!-- DataTables -->
        <link href="function/datatable/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="function/datatable/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        
    <!-- Responsive datatable examples -->
    <link href="function/datatable/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


</head>


<body>

    <!-- <body data-layout="horizontal" data-topbar="colored"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="javascript:void(0);" class="logo logo-dark">
                                <span class="logo-sm">
              
              
                                <img src="logo5.png" alt="" height="50">
                                </span>
                                <span class="logo-lg">
                                    <img src="logo5.png" alt="" height="100">
                                </span>
                            </a>

                        <a href="javascript:void(0);" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="logo5.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="logo5.png" alt="" height="20">
                                </span>
                            </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                    <!-- App Search-->
              




                </div>

                <div class="d-flex">

                    <div class="dropdown d-inline-block d-lg-none ms-2">
                        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="uil-search"></i>
                            </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">

                            <form class="p-3">
                                <div class="m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>



                    <div class="dropdown d-none d-lg-inline-block ms-1">
                        <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                                <i class="uil-minus-path"></i>
                            </button>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="uil-bell"></i>

                                <?php if($usertype=="Admin"){?>

                                    <?php
                                            include 'db.inc.php';
                                            $query = mysqli_query($conn,  "SELECT COUNT(idf) FROM services WHERE enat='' AND (enpe LIKE '%$useroffice%')");
                                            while($result = mysqli_fetch_array($query)): ?>
                                                <?php                                                            
                                                    $pendingnotif = $result['COUNT(idf)'];                                                               
                                                ?>
                                    <span class="badge bg-danger rounded-pill"><?php echo $pendingnotif; ?></span>
                                <?php endwhile; ?> 

                                <?php } ?>


                                <?php if($usertype=="Employee"){?>
                                    <?php
                                            include 'db.inc.php';
                                            $query = mysqli_query($conn,  "SELECT COUNT(idf) FROM services WHERE enat='Endorsed' AND (enpe LIKE '%$useroffice%')");
                                            while($result = mysqli_fetch_array($query)): ?>
                                                <?php                                                            
                                                    $endorsednotif = $result['COUNT(idf)'];                                                               
                                                ?>
                                <span class="badge bg-danger rounded-pill"><?php echo $endorsednotif; ?></span>
                                <?php endwhile; ?> 
                                <?php } ?>

                            </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                            <div class="p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="m-0 font-size-16"> Notifications </h5>
                                    </div>
                                    <!--<div class="col-auto">
                                        <a href="#!" class="small"> Mark all as read</a>
                                    </div>-->
                                </div>
                            </div>
                            <div data-simplebar style="max-height: 230px;">

                             
                            
                            <?php if($usertype=="Admin"){?>
                                <?php
                                            include 'db.inc.php';
                                            $query = mysqli_query($conn,  "SELECT * FROM services WHERE enat='' AND (enpe LIKE '%$useroffice%')");
                                            while($result = mysqli_fetch_array($query)): ?>

                                <a href="pendingrequestsupdate.php?update=<?php echo $result['idf'];?>" class="text-reset notification-item">
                                    <div class="d-flex align-items-start">
                                        <!--<div class="flex-shrink-0 me-3">
                                            <img src="function/dashboard/assets/images/users/avatar-3.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                        </div>-->
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1"><?php echo $result['fnamef']; ?></h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1"><?php echo $result['servicesf']; ?></p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <?php echo $result['mfullf']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <?php endwhile; ?> 
                            <?php } ?>

                            <?php if($usertype=="Employee"){?>
                                <?php
                                            include 'db.inc.php';
                                            $query = mysqli_query($conn,  "SELECT * FROM services WHERE enat='Endorsed' AND (enpe LIKE '%$useroffice%')");
                                            while($result = mysqli_fetch_array($query)): ?>

                                <a href="pendingrequestsupdate.php?update=<?php echo $result['idf'];?>" class="text-reset notification-item">
                                    <div class="d-flex align-items-start">
                                        <!--<div class="flex-shrink-0 me-3">
                                            <img src="function/dashboard/assets/images/users/avatar-3.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                        </div>-->
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1"><?php echo $result['fnamef']; ?></h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1"><?php echo $result['servicesf']; ?></p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <?php echo $result['mfullf']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <?php endwhile; ?> 
                            <?php } ?>
                               
                                

                         
                                
                            </div>
                            <div class="p-2 border-top">
                                <div class="d-grid">
                                    <a class="btn btn-sm btn-link font-size-14 text-center" href="pendingrequests.php">
                                            <i class="uil-arrow-circle-right me-1"></i> View all...
                                        </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                     <img style='height:30px; width:30px; border-radius:50%;' src='users/<?php echo $userpic; ?>'/>
                             
                                <span class="d-none d-xl-inline-block ms-1 fw-medium font-size-15"><?php echo $userprofile;?></span>
                                <i class="uil-angle-down d-none d-xl-inline-block font-size-15"></i>
                            </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                           <!-- <a class="dropdown-item" href="#"><i class="uil uil-user-circle font-size-18 align-middle text-muted me-1"></i> <span class="align-middle">View Profile</span></a> -->
              
                            <a class="dropdown-item" href="logoutprocess.php"><i class="uil uil-sign-out-alt font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle">Sign out</span></a>
                        </div>
                    </div>

                    <!--
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                                <i class="uil-cog"></i>
                            </button>
                    </div>
                    -->
                </div>
            </div>
        </header>
        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="javascript:void(0);" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="logo5.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="logo5.png" alt="" height="20">
                        </span>
                    </a>

                <a href="javascript:void(0);" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="logo5.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="logo5.png" alt="" height="20">
                        </span>
                    </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

            <div data-simplebar class="sidebar-menu-scroll">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Menu</li>

                        <li>
                            <a style='cursor:pointer;' href="dashboard.php">
                                    <i class="uil-home-alt"></i><span class="badge rounded-pill bg-primary float-end">01</span>
                                    <span>Dashboard</span>
                                </a>
                        </li>




                     <!--   <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="uil-share-alt"></i>
                                    <span>Requests</span>
                                </a>
                            <ul class="sub-menu" aria-expanded="true">
                                
                                <li><a href="javascript: void(0);" class="has-arrow">Market Price</a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        <li><a href="pmcommodity.php">Add Commodity</a></li>
                                       <li><a href="pmstore.php">Add Store</a></li> 
                                        <li><a href="pmdata.php">Add Data</a></li>
                                    </ul>
                                </li>

                                <li><a href="javascript: void(0);" class="has-arrow">Farmgate Price</a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        <li><a href="javascript: void(0);">Entries</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </li> -->


                   

             
                        <li>
                            <a style='cursor:pointer;' href="pendingrequests.php">
                                    <i class="uil-file-alt"></i>
                                    <span>Requests</span>
                                </a>
                        </li>


                        <?php if($usertype=="Admin"){?>

                        <li>
                            <a style='cursor:pointer;' href="pendingregistration.php">
                                    <i class="uil-file-alt"></i>
                                    <span>Registration</span>
                                </a>
                        </li>

                        <?php } ?>

                        <li>
                            <a style='cursor:pointer;' href="pds.php">
                                    <i class="uil-file-alt"></i>
                                    <span>PDS</span>
                                </a>
                        </li>



                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="uil-file-alt"></i>
                                    <span>Posts</span>
                                </a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                           
                                    <a style='cursor:pointer;' href='postadd.php'>Add Post</a>    
                             
                                    <a style='cursor:pointer;' href='postview.php'>View Posts</a> 
                                
                                </li>
                            </ul>

                        </li> 

                        
                        

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="uil-file-alt"></i>
                                    <span>Price Monitoring</span>
                                </a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                           
                                    <a style='cursor:pointer;' href='priceadd.php'>Add Price</a>    
                             
                                    <a style='cursor:pointer;' href='priceview.php'>View Price</a> 
                                
                                </li>
                            </ul>

                        </li> 

                        <li>
                            <a style='cursor:pointer;' href="logoutprocess.php">
                                    <i class="uil-file-alt"></i>
                                    <span>Logout</span>
                                </a>
                        </li>

                      
   <!--
                        <li>
                            <a style='cursor:pointer;' href="#">
                                    <i class="uil-file-alt"></i>
                                    <span>Production</span>
                                </a>
                        </li>

                        <li>
                            <a style='cursor:pointer;' href="#">
                                    <i class="uil-file-alt"></i>
                                    <span>Distribution</span>
                                </a>
                        </li>
                -->
                
                      

                 
                  <!--
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="uil-file-alt"></i>
                                    <span>Accomplishment</span>
                                </a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a style='cursor:pointer;' href='accomplishment.php'>Production</a>         
                                    <a style='cursor:pointer;' href='distribution.php'>Distribution</a>          
                                </li>
                            </ul>

                        </li> 

                        -->
                  

                  

                      <!--  <li>
                            <a href="datamapview.php" class="waves-effect">
                                    <i class="uil-location-point"></i>
                                    <span>Maps</span>
                                </a>
                            
                        </li> -->
                        
                        
                      <!--  <li>
                            <a href="calendar.php" class="waves-effect">
                                    <i class="uil-calender"></i>
                                    <span>Calendar</span>
                                </a>
                        </li>


                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="uil-comments-alt"></i>
                                    <span>Chat</span>
                                </a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="javascript: void(0);">Personal</a>                                   
                                </li>

                                <li>
                                    <a href="table.php">Group</a>                                  
                                </li>
                            </ul>
                        </li>    

                   

                        <li>
                            <a href="javascript: void(0);">
                                    <i class="uil-user-circle"></i>
                                    <span>Users</span>
                                </a>
                          
                        </li>

-->

                    

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->



              <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                   
                <!-- End Modal -->