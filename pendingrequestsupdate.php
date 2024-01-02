<?php include_once 'heading.php';?>



<?php
if (isset($_GET['update'])) {
    include_once 'db.inc.php';
   
   $idf = $_GET['update'];
   $query="SELECT * FROM services WHERE idf = $idf";
   $result = mysqli_query($conn,$query); /*or die ("Cannot delete data from database.". mysqli_error($conn));
   if($fire) echo "Data deleted from database";*/
 
   
   $row = $result->fetch_array();

//10

$idf= $row['idf'];

$tms= $row['tms'];
$codef= $row['codef'];
$mmonthf= $row['mmonthf'];
$mdayf= $row['mdayf'];
$myearf= $row['myearf'];
$mtimef= $row['mtimef'];
$mfullf= $row['mfullf'];
$fnamef= $row['fnamef'];
$servicesf= $row['servicesf'];
$genderf= $row['genderf'];
$appofficef= $row['appofficef'];
$agef= $row['agef'];
$cnumberf= $row['cnumberf'];
$eaddrf= $row['eaddrf'];
$apppurokf= $row['apppurokf'];
$brgyf= $row['brgyf'];
$appcomf= $row['appcomf'];
$appareaf= $row['appareaf'];
$appdetf= $row['appdetf'];
$filef= $row['filef'];
$spcf= $row['spcf'];
$spotf= $row['spotf'];
$enpe= $row['enpe'];
$endt= $row['endt'];
$enrm= $row['enrm'];
$enat= $row['enat'];
$enda= $row['enda'];
$docvalue= $row['docvalue'];
$docstat= $row['docstat'];

$enres= $row['enres'];
$appfee= $row['appfee'];


}

$date_f = date('Y-m-d');
   ?>
   <!-- start page title -->
    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">Requests</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Requests</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
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
                                    
                                    <form action="pendingrequestsfunction.php" method="POST" enctype="multipart/form-data">

                                    <h4 style="color: royalblue; font-size:15px; margin-top: 20px;">Action</h4>

                                    <input type="text" style="display:none;" required class="form-control" id="docvalue" value="1" readonly name="docvalue">    
                                    <input type="text" style="display:none;" required class="form-control" id="endt" value="<?php echo $date_f; ?>" readonly name="endt">      

                                    <input type="text" style="display:none;" required class="form-control" id="enda" value="<?php echo $date_f; ?>" readonly name="enda">   

                                                <div class="mb-3" style="display:none;">
                                                    <div class="commo">
                                                        <label for="idf">ID</label>
                                                        <input type="text" required class="form-control" id="idf" value="<?php echo $idf;?>" readonly name='idf'>      
                                                    </div>                                        
                                                </div>

                                                <div class="row">
                                                        
                                                    <div class="col-xl-6">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="codef">Code</label>
                                                                <input type="text" required class="form-control" id="codef" readonly value="<?php echo $codef;?>">      
                                                            </div>                                        
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-6">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="mfullf">Date Availed</label>
                                                                <input type="text" required class="form-control" id="mfullf" readonly value="<?php echo $mfullf;?>">      
                                                            </div>                                        
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-6">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="fnamef">Full Name</label>
                                                                <input type="text" required class="form-control" id="fnamef" readonly value="<?php echo $fnamef;?>">      
                                                            </div>                                        
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-6">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="mfullf">Date</label>
                                                                <input type="text" required class="form-control" id="mfullf" readonly value="<?php echo $mfullf;?>">      
                                                            </div>                                        
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-6">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="fnamef">Address</label>
                                                                <input type="text" required class="form-control" id="fnamef" readonly value="<?php echo $apppurokf;?>, <?php echo $brgyf; ?>, Butuan City, Caraga, 8600">      
                                                            </div>                                        
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-6">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="cnumberf">Phone Number</label>
                                                                <input type="text" required class="form-control" id="cnumberf" readonly value="<?php echo $cnumberf;?>">      
                                                            </div>                                        
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-6">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="appofficef">Office</label>
                                                                <input type="text" required class="form-control" id="appofficef" readonly value="<?php echo $appofficef; ?>">      
                                                            </div>                                        
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-6">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="eaddrf">Email Address</label>
                                                                <input type="text" required class="form-control" id="eaddrf" readonly value="<?php echo $eaddrf;?>">      
                                                            </div>                                        
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-4">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="servicesf">Sevice Availed</label>
                                                                <input type="text" required class="form-control" id="servicesf" readonly value="<?php echo $servicesf;?>">      
                                                            </div>                                        
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-4">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="spcf">Type</label>
                                                                <input type="text" required class="form-control" id="spcf" readonly value="<?php echo $spcf;?>">      
                                                            </div>                                        
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-4">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="spotf">Specific</label>
                                                                <input type="text" required class="form-control" id="spotf" readonly value="<?php echo $spotf;?>">      
                                                            </div>                                        
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-12">
                                                        <div class="mb-3">
                                                            <label class="form-label">Details</label>
                                                            <div>
                                                                <textarea required readonly class="form-control" rows="5"><?php echo $appdetf;?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-6">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="enat">Action Taken</label>
                                                                <select class="form-select type_selection_class" aria-label="Default select example" id="enat" name="enat">
                                                                    <option value="<?php echo $enat;?>"><?php echo $enat;?></option> 
                                                                    <option value="Endorsed">Endorsed</option> 
                                                                    <option value="Ongoing Validation">Ongoing Validation</option> 
                                                                    <option value="Validated">Validated</option> 
                                                                            
                                                                </select>   
                                                            </div>                                        
                                                        </div>
                                                    </div>

                                                    

                                                    <?php if($usertype=="Admin"){?>

                                                        <div class="col-xl-6">
                                                            <div class="mb-3">
                                                                <div class="commo">
                                                                    <label for="enpe">Endorsed to</label>
                                                                    <select class="form-select type_selection_class" aria-label="Default select example" id="enpe" name="enpe">

                                                                        <option value="<?php echo $enpe;?>"><?php echo $enpe;?></option> 
                                                                        <option value="AgriBOOST">AgriBOOST</option>
                                                                        <option value="Farmers Information and Technology Services Center">Farmers Information and Technology Services Center</option>
                                                                        <option value="Planning and Research Division">Planning and Research Division</option>
                                                                        <option value="Administrative">Administrative</option>
                                                                        <option value="Industry Development and Special Projects Division">Industry Development and Special Projects Division</option>
                                                                        <option value="Field Operations Division">Field Operations Division</option> 
                                                                                
                                                                    </select>   
                                                                </div>                                        
                                                            </div>
                                                        </div>


                                                        <div class="col-xl-6">
                                                            <div class="mb-3">
                                                                <div class="commo">
                                                                    <label for="eaddrf">Fees and Charges</label>
                                                                    <input type="text" required class="form-control" name="appfee" id="appfee" value="<?php echo $appfee;?>">      
                                                                </div>                                        
                                                            </div>
                                                        </div>


                                                   


                                                    <?php } ?>

                                                    <?php if($usertype=="Employee"){?>

                                                        <div class="col-xl-6">
                                                            <div class="mb-3">
                                                                <div class="commo">
                                                                    <label for="docstat">Status of Request</label>
                                                                    <select class="form-select type_selection_class" aria-label="Default select example" id="docstat" name="docstat">

                                                                        <option value="<?php echo $docstat;?>"><?php echo $docstat;?></option> 
                                                                        <option value="Deny">Deny</option>
                                                                        <option value="Approve">Approve</option>

                                                                    </select>   
                                                                </div>                                        
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-12">
                                                            <div class="mb-3">
                                                                <label class="form-label">Remarks</label>
                                                                <div>
                                                                    <textarea class="form-control" name="enrm" rows="5"><?php echo $enrm;?></textarea>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    <?php } ?>

                                                </div>



                                             
                                         

                                               
                                                <?php if($usertype=="Admin"){?>
                                                    <input type="submit"  name="updateadmin" value='Update' class="btn btn-success waves-effect waves-light">
                                                <?php } ?>

                                                <?php if($usertype=="Employee"){?>
                                                    <input type="submit"  name="updateemployee" value='Update' class="btn btn-success waves-effect waves-light">
                                                <?php } ?>
                                             
                                    </form>

                                    <button class="btn btn-warning waves-effect waves-light" style="margin-left:80px; margin-top:-65px;"><a style="color:#fff;" href="pendingrequests.php"> Exit </a></button>


                                    </div>
                                    <!-- end card-body-->
                                </div>
                                <!-- end card-->
                                
                            </div>
                     
                
                        <!-- end col-->

                   
                        
                        </div>

                      
                    

<?php include_once 'footer.php';?>