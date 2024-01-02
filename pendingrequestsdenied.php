<?php include_once 'heading.php';?>


<?php
include 'db.inc.php';

//session
$uid = $_SESSION['id'];
$time = "Active now";

$query=mysqli_query($conn, "UPDATE usertable SET status='Active now' WHERE id=$uid");
// echo '-------------------------------------'.$userprofile;

//echo $time;


?>



<div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">Requests</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Transaction</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end mt-2">
                                       
                                            <i class="uil-graph-bar" style="color: red; font-size: 30px;"></i>
                                        
                                    </div>
                                    <div>

                                    <?php
                                            include 'db.inc.php';
                                            $query = mysqli_query($conn,  "SELECT COUNT(idf) FROM services WHERE (enpe LIKE '%$useroffice%')");
                                            while($result = mysqli_fetch_array($query)): ?>
                                                <?php                                                            
                                                    $sumrequests = $result['COUNT(idf)'];                                                               
                                                ?>

                                        <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?php echo $sumrequests;?></span></h4>
                                        <p class="text-muted mb-0"> <a href="pendingrequests.php"> Total Clients Requests </a></p>
                                    </div>
                                    <!--<p class="text-muted mt-3 mb-0"><span class="text-success me-1"><i class="mdi mdi-arrow-up-bold me-1"></i>2.65%</span> since last week
                                    </p>-->
                                </div>
                            </div>
                            <?php endwhile; ?> 
                        </div>
                        <!-- end col-->

                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end mt-2">
                                        <i class="uil-graph-bar" style="color: orange; font-size: 30px;"></i>
                                    </div>
                                    <div>

                                    <?php
                                            include 'db.inc.php';
                                            $query = mysqli_query($conn,  "SELECT COUNT(idf) FROM services WHERE enat='' AND (enpe LIKE '%$useroffice%')");
                                            while($result = mysqli_fetch_array($query)): ?>
                                                <?php                                                            
                                                    $sumpending = $result['COUNT(idf)'];                                                               
                                                ?>

                                        <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?php echo $sumpending;?></span></h4>
                                        <p class="text-muted mb-0"><a href="pendingrequestspending.php"> Pending </a></p>
                                    </div>
                                    <!--<p class="text-muted mt-3 mb-0"><span class="text-danger me-1"><i class="mdi mdi-arrow-down-bold me-1"></i>0.82%</span> since last week
                                    </p>-->
                                </div>
                            </div>
                            <?php endwhile; ?> 
                        </div>
                        <!-- end col-->

                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end mt-2">
                                        <i class="uil-graph-bar" style="color: yellow; font-size: 30px;"></i>
                                    </div>
                                    <div>

                                    <?php
                                            include 'db.inc.php';
                                            $query = mysqli_query($conn,  "SELECT COUNT(idf) FROM services WHERE enat='Endorsed' AND (enpe LIKE '%$useroffice%')");
                                            while($result = mysqli_fetch_array($query)): ?>
                                                <?php                                                            
                                                    $sumendorsed = $result['COUNT(idf)'];                                                               
                                                ?>
                                        <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?php echo $sumendorsed;?></span></h4>
                                        <p class="text-muted mb-0"><a href="pendingrequestsendorsed.php"> Endorsed </a></p>
                                    </div>
                                    <!--<p class="text-muted mt-3 mb-0"><span class="text-danger me-1"><i class="mdi mdi-arrow-down-bold me-1"></i>6.24%</span> since last week
                                    </p>-->
                                </div>
                            </div>
                            <?php endwhile; ?> 
                        </div>
                        <!-- end col-->

                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end mt-2">
                                        <i class="uil-graph-bar" style="color: violet; font-size: 30px;"></i>
                                    </div>
                                    <div>

                                    <?php
                                            include 'db.inc.php';
                                            $query = mysqli_query($conn,  "SELECT COUNT(idf) FROM services WHERE enat='Ongoing Validation' AND (enpe LIKE '%$useroffice%')");
                                            while($result = mysqli_fetch_array($query)): ?>
                                                <?php                                                            
                                                    $sumonvalidated = $result['COUNT(idf)'];                                                               
                                                ?>
                                        <h4 class="mb-1 mt-1"> <span data-plugin="counterup"><?php echo $sumonvalidated;?></span></h4>
                                        <p class="text-muted mb-0"><a href="pendingrequestsongoing.php">Ongoing Validation</a></p>
                                    </div>
                                    <!--<p class="text-muted mt-3 mb-0"><span class="text-success me-1"><i class="mdi mdi-arrow-up-bold me-1"></i>10.51%</span> since last week
                                    </p>-->
                                </div>
                            </div>
                            <?php endwhile; ?> 
                        </div>
                        <!-- end col-->
                    </div>

                    

                    <div class="row">

                        <div class="col-md-6 col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end mt-2">
                                        <i class="uil-graph-bar" style="color: royalblue; font-size: 30px;"></i>
                                    </div>
                                    <div>

                                    <?php
                                            include 'db.inc.php';
                                            $query = mysqli_query($conn,  "SELECT COUNT(idf) FROM services WHERE enat='Validated' AND (enpe LIKE '%$useroffice%')");
                                            while($result = mysqli_fetch_array($query)): ?>
                                                <?php                                                            
                                                    $sumvalidated = $result['COUNT(idf)'];                                                               
                                                ?>
                                        <h4 class="mb-1 mt-1"> <span data-plugin="counterup"><?php echo $sumvalidated;?></span></h4>
                                        <p class="text-muted mb-0"><a href="pendingrequestsvalidated.php">Validated</a></p>
                                    </div>
                                    <!--<p class="text-muted mt-3 mb-0"><span class="text-success me-1"><i class="mdi mdi-arrow-up-bold me-1"></i>10.51%</span> since last week
                                    </p>-->
                                </div>
                            </div>
                            <?php endwhile; ?> 
                        </div>
                        <!-- end col-->

                        <div class="col-md-6 col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end mt-2">
                                        <i class="uil-graph-bar" style="color: crimson; font-size: 30px;"></i>
                                    </div>
                                    <div>

                                    <?php
                                            include 'db.inc.php';
                                            $query = mysqli_query($conn,  "SELECT COUNT(idf) FROM services WHERE docstat='Deny' AND (enpe LIKE '%$useroffice%')");
                                            while($result = mysqli_fetch_array($query)): ?>
                                                <?php                                                            
                                                    $sumdenied = $result['COUNT(idf)'];                                                               
                                                ?>
                                        <h4 class="mb-1 mt-1"> <span data-plugin="counterup"><?php echo $sumdenied;?></span></h4>
                                        <p class="text-muted mb-0"><a href="pendingrequestsdenied.php">Denied</a></p>
                                    </div>
                                    <!--<p class="text-muted mt-3 mb-0"><span class="text-success me-1"><i class="mdi mdi-arrow-up-bold me-1"></i>10.51%</span> since last week
                                    </p>-->
                                </div>
                            </div>
                            <?php endwhile; ?> 
                        </div>
                        <!-- end col-->

                        <div class="col-md-6 col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end mt-2">
                                        <i class="uil-graph-bar" style="color: green; font-size: 30px;"></i>
                                    </div>
                                    <div>

                                    <?php
                                            include 'db.inc.php';
                                            $query = mysqli_query($conn,  "SELECT COUNT(idf) FROM services WHERE docstat='Approve' AND (enpe LIKE '%$useroffice%')");
                                            while($result = mysqli_fetch_array($query)): ?>
                                                <?php                                                            
                                                    $sumaccom = $result['COUNT(idf)'];                                                               
                                                ?>
                                        <h4 class="mb-1 mt-1"> <span data-plugin="counterup"><?php echo $sumaccom;?></span></h4>
                                        <p class="text-muted mb-0"><a href="pendingrequestsapproved.php">Approved</a></p>
                                    </div>
                                    <!--<p class="text-muted mt-3 mb-0"><span class="text-success me-1"><i class="mdi mdi-arrow-up-bold me-1"></i>10.51%</span> since last week
                                    </p>-->
                                </div>
                            </div>
                            <?php endwhile; ?> 
                        </div>
                        <!-- end col-->


                    </div>
                    <!-- end row-->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">List of Requests</h4>
                                    <div class="table-responsive">
                                  <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;"> 
                                  <!--<table class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;"> -->
                                    <thead>
                                            <tr>
                                        
                                                <th>Name</th>
                                                <th>Code</th>
                                                <th>Number</th>
                                                <th>Date</th>
                                                <th>Service</th>
                                                <th>Concern</th>
                                                <th>Specify</th>
                                                <th>Phone Number</th>         
                                                <th>Email</th> 
                                                <th>Address</th> 
                                                <th>Details</th>
                                                <th>Endorsed</th>
                                                <th>Date Endorsed</th>
                                                <th>Status</th>
                                                <th>Remarks</th>
                                                <th>Action Taken</th>
                                                <th>Date of Action</th>
                                                <th>View</th>
                                                <th>Delete</th>
                                                                                  
                                              <!--  <th>Update</th>
                                                <th>Delete</th> -->
                                                
                                                                            
                                            </tr>
                                        </thead>


                                        <tbody>
                                            <?php
                                                include 'db.inc.php';
                                                $query1 = mysqli_query($conn,"SELECT * FROM services WHERE docstat='Deny' AND (enpe LIKE '%$useroffice%') ORDER BY tms ASC");
                                                while($result1 = mysqli_fetch_array($query1)): ?>
                                            <tr>
                                                                                
                                              <?php 
                                               

                                                
                                              ?>
                                                <td><?php echo $result1 ['fnamef']; ?></td>
                                                <td><?php echo $result1 ['codef']; ?></td>
                                                <td><?php echo $result1 ['idf']; ?></td>
                                                <td><?php echo $result1 ['mfullf']; ?></td>
                                                <td><?php echo $result1 ['servicesf']; ?></td>
                                                <td><?php echo $result1 ['spcf']; ?></td>                                           
                                                <td><?php echo $result1 ['spotf']; ?></td>
                                                <td><?php echo $result1 ['cnumberf']; ?></td>

                                                <td><?php echo $result1 ['eaddrf']; ?></td>
                                                <td><?php echo $result1 ['apppurokf']; ?>, <?php echo $result1 ['brgyf']; ?>, Butuan City, Caraga, 8600</td>
                                                <td><?php echo $result1 ['appdetf']; ?></td>
                                                <td><?php echo $result1 ['enpe']; ?></td>
                                                <td><?php echo $result1 ['endt']; ?></td>
                                                <td><?php echo $result1 ['docstat']; ?></td>
                                                <td><?php echo $result1 ['enrm']; ?></td>
                                                    <?php $actiontook = $result1 ['enat'];?>
                                                <td <?php if($actiontook='Endorsed'){echo'style="background:yellow;"';};?>><?php echo $result1 ['enat']; ?></td>
                                                <td><?php echo $result1 ['enda']; ?></td>
                                           
                                                
                                                <td> <a href="pendingrequestsupdate.php?update=<?php echo $result1['idf'];?>" class="btn  btn-raised btn-success waves-effect">View</a></td>        
                                                <td> <a onClick="deleteme('deletefile=services/<?php echo $result1 ['filef'];?>&&delete=<?php echo $result1['idf'];?>')" class="btn  btn-raised btn-danger waves-effect">Delete</a></td> 

                                                    <script>
                                                        function deleteme(delid){
                                                            if(confirm("Are you sure you want to delete this data?")){
                                                            window.location.href='pendingrequestsfunction.php?' +delid+ '';
                                                            return true;
                                                            }
                                                            }
                                                    </script>

                                                <script>
                                                    function deleteme(delid){
                                                        if(confirm("Are you sure you want to delete this data?")){
                                                        window.location.href='pendingrequestsfunction.php?delete=' +delid+ '';
                                                        return true;
                                                        }
                                                        }
                                                </script>
                                            
                                            
                                                                                        
                                            </tr>
                                                <?php endwhile; ?>

                                        </tbody>
                                   
                                    </table>
                                    </div>
                                    <!-- end table-responsive -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    


                </div>
                <!-- container-fluid -->




<?php include_once 'footer.php'; ?>



    
                 

                    
