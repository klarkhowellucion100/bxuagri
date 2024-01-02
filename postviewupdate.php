<?php include_once 'heading.php';?>



<?php
if (isset($_GET['update'])) {
    include_once 'db.inc.php';
   
   $id = $_GET['update'];
   $query="SELECT * FROM posts WHERE id = $id";
   $result = mysqli_query($conn,$query); /*or die ("Cannot delete data from database.". mysqli_error($conn));
   if($fire) echo "Data deleted from database";*/
 
   
   $row = $result->fetch_array();

//10

$id= $row['id'];

$code= $row['code'];
$fname= $row['fname'];
$ppos= $row['ppos'];
$poffice= $row['poffice'];
$mname= $row['mname'];
$lname= $row['lname'];
$ename= $row['ename'];

$ptitle= $row['ptitle'];
$pcont= $row['pcont'];
$pstat= $row['pstat'];
$pdate= $row['pdate'];
$prem= $row['prem'];

$date_f = date('Y-m-d');

}


   ?>
   <!-- start page title -->
    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">Registration</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Registered</a></li>
                                        <li class="breadcrumb-item active">Employees</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                  

                    <div class="row">
                 
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                  <!--  <h4 class="card-title">Action</h4> -->
                                    
                                    <form action="postviewfunction.php" method="POST" enctype="multipart/form-data">

                                    <h4 style="color: royalblue; font-size:15px; margin-top: 20px;">Action</h4>

                                    <input type="text" style="display:none;" required class="form-control" id="pdate" value="<?php echo $date_f;?>" readonly name='pdate'>      


                                                <div class="mb-3" style="display:none;">
                                                    <div class="commo">
                                                        <label for="id">ID</label>
                                                        <input type="text" required class="form-control" id="id" value="<?php echo $id;?>" readonly name='id'>      
                                                    </div>                                        
                                                </div>

                                                <div class="row">
                                                        
                                                    <div class="col-xl-12">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="code">Code</label>
                                                                <input type="text" required class="form-control" id="code" readonly value="<?php echo $code;?>">      
                                                            </div>                                        
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-3">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="fname">First Name</label>
                                                                <input type="text" required class="form-control" id="fname" readonly value="<?php echo $fname;?>">      
                                                            </div>                                        
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-3">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="mname">Middle Name</label>
                                                                <input type="text" required class="form-control" id="mname" readonly value="<?php echo $mname;?>">      
                                                            </div>                                        
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-3">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="lname">Last Name</label>
                                                                <input type="text" required class="form-control" id="lname" readonly value="<?php echo $lname;?>">      
                                                            </div>                                        
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-3">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="ename">Extension Name</label>
                                                                <input type="text" required class="form-control" id="ename" readonly value="<?php echo $ename;?>">      
                                                            </div>                                        
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-6">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="ppos">Position</label>
                                                                <input type="text" required class="form-control" id="ppos" readonly value="<?php echo $ppos;?>">      
                                                            </div>                                        
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-6">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="poffice">Office</label>
                                                                <input type="text" required class="form-control" id="poffice" readonly value="<?php echo $poffice;?>">      
                                                            </div>                                        
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-12">
                                                            <div class="mb-3">
                                                                <label class="form-label">Content</label>
                                                                <div>
                                                                    <textarea class="form-control" readonly rows="5"><?php echo $pcont;?></textarea>
                                                                </div>
                                                            </div>
                                                        </div>

                                                <?php if($usertype=="Admin"){?>
                                                    <div class="col-xl-12">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="pstat">Status</label>
                                                                <select class="form-select type_selection_class" aria-label="Default select example" id="pstat" name="pstat">
                                                                    <option value="<?php echo $pstat;?>"><?php echo $pstat;?></option> 
                                                                    <option value="Approve">Approve</option> 
                                                                    <option value="Reject">Reject</option> 
                                                                            
                                                                </select>   
                                                            </div>                                        
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-12">
                                                            <div class="mb-3">
                                                                <label class="form-label">Remarks</label>
                                                                <div>
                                                                    <textarea class="form-control" name="prem" rows="5"><?php echo $prem;?></textarea>
                                                                </div>
                                                            </div>
                                                    </div>
                                                <?php } ?>

                                                   

                                                </div>



                                             
                                         

                                               
                                                <?php if($usertype=="Admin"){?>
                                                    <input type="submit"  name="update" value='Update' class="btn btn-success waves-effect waves-light">
                                                <?php } ?>
                                             
                                    </form>

                                    <button class="btn btn-warning waves-effect waves-light" style="margin-left:80px; margin-top: -65px;"><a style="color:#fff;" href="postview.php"> Exit </a></button>


                                    </div>
                                    <!-- end card-body-->
                                </div>
                                <!-- end card-->
                                
                            </div>
                     
                
                        <!-- end col-->

                   
                        
                        </div>

                      
                    

<?php include_once 'footer.php';?>