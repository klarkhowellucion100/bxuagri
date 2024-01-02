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
                                <h4 class="mb-0">PDS</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">PDS</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                
                        
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Personal Data Sheet</h4>

                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Update</button> <br><br>
                                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Update PDS</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="pdsfunction.php" method="POST" enctype="multipart/form-data">
                                                                    <div class="mb-3" style="display:none;">
                                                                        <label for="recipient-name" class="col-form-label">ID No.:</label>
                                                                        <input type="text" class="form-control" name="id" value="<?php echo $userid; ?>">
                                                                    </div>

                                                                    <div class="mb-3">
                                                                        <label for="message-text" class="col-form-label">PDS:</label>
                                                                        <input type="text" class="form-control" readonly name="pdocfile" value="<?php echo $userpdoc; ?>">
                                                                    </div>

                                                                    <div class="mb-3">
                                                                        <label for="message-text" class="col-form-label">PDS:</label>
                                                                        <input type="file" class="form-control" name="pdoc">
                                                                    </div>
                                                                
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <input type="submit"  name="update" value='Update' class="btn btn-primary">
                                                            </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                    <iframe style="width:100%; height:700px;" src="pds/<?php echo $userpdoc; ?>"></iframe>
                             
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->


                </div>
                <!-- container-fluid -->




<?php include_once 'footer.php'; ?>



    
                 

                    
