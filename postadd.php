<?php include_once 'heading.php';?>




   <!-- start page title -->
    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">Add Post</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Post</a></li>
                                        <li class="breadcrumb-item active">Add</li>
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

                                  <?php
                                    $gen= "ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789abcdefghijklmnopqrstuvwzyz";
                                    $date_f = date('Y-m-d');

                                    $date_t = date('H:i:s');
                                    $date_m = date('m');
                                    $date_d = date('d');
                                    $date_y = date('Y');
                                ?>
                                    
                                    <form action="postaddfunction.php" method="POST" enctype="multipart/form-data">

                                    <h4 style="color: royalblue; font-size:15px; margin-top: 20px;">New Post</h4>

                                                <input style="display:none;" type="text" name="mmonth"  value="<?php echo $date_m;?>" />
                                                <input style="display:none;" type="text" name="mday"  value="<?php echo $date_d;?>" />
                                                <input style="display:none;" type="text" name="myear"  value="<?php echo $date_y;?>" />
                                                <input style="display:none;" type="text" name="mtime"  value="<?php echo $date_t;?>" />
                                                <input style="display:none;" type="text" name="mfull"  value="<?php echo $date_f;?>" />    
                                                <input style="display:none;" type="text" name="ppic"  value="<?php echo $userpic;?>" />                                                 
                                             


                                                <div class="row">
                                                        
                                                    <div class="col-xl-12">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="code">Code</label>
                                                                <input type="text" required class="form-control" id="code" name="code" readonly value="<?php echo $date_m;?>-<?php echo $date_d;?>-<?php echo $date_y;?>-<?php echo substr(str_shuffle($gen),0,5); ?>">      
                                                            </div>                                        
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-3" style="display:none;">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="fname">First Name</label>
                                                                <input type="text" required class="form-control" id="fname" name="fname" readonly value="<?php echo $userprofile;?>">      
                                                            </div>                                        
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-3" style="display:none;">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="mname">Middle Name</label>
                                                                <input type="text" required class="form-control" id="mname" name="mname" readonly value="<?php echo $usermname;?>">      
                                                            </div>                                        
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-3" style="display:none;">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="lname">Last Name</label>
                                                                <input type="text" required class="form-control" id="lname" name="lname" readonly value="<?php echo $userlname;?>">      
                                                            </div>                                        
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-3" style="display:none;">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="ename">Extension Name</label>
                                                                <input type="text" required class="form-control" id="ename" name="ename" readonly value="<?php echo $userename;?>">      
                                                            </div>                                        
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-6" style="display:none;">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="position">Position</label>
                                                                <input type="text" required class="form-control" id="ppos" name="ppos" readonly value="<?php echo $userposition;?>">      
                                                            </div>                                        
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-6" style="display:none;">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="office">Office</label>
                                                                <input type="text" required class="form-control" id="poffice" name="poffice" readonly value="<?php echo $useroffice;?>">      
                                                            </div>                                        
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-9">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="office">Title</label>
                                                                <input type="text" required class="form-control" id="ptitle" name="ptitle">      
                                                            </div>                                        
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-3">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="office">Date Posted</label>
                                                                <input type="text" required class="form-control" readonly value="<?php echo $date_f;?>">      
                                                            </div>                                        
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-12">
                                                        <div class="mb-3">
                                                            <label class="form-label">Content</label>
                                                            <div>
                                                                <textarea required class="form-control" name="pcont" rows="5"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-4">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="office">Picture</label>
                                                                <input type="file" required class="form-control" name="file">      
                                                            </div>                                        
                                                        </div>
                                                    </div>


                                                </div>



                                             
                                         

                                               

                                                <input type="submit"  name="addpost" value='Add' class="btn btn-success waves-effect waves-light">
                                             
                                    </form>

                                    <button class="btn btn-warning waves-effect waves-light" style="margin-left:80px; margin-top:-60px;"><a style="color:#fff;" href="postadd.php"> Exit </a></button>


                                    </div>
                                    <!-- end card-body-->
                                </div>
                                <!-- end card-->
                                
                            </div>
                     
                
                        <!-- end col-->

                   
                        
                        </div>

                      
                    

<?php include_once 'footer.php';?>