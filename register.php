<?php include_once "headingland.php" ?>

   <!-- Add your site or application content here -->
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
                    <h1 class="page-title mb-10">REGISTER NOW!
            </div>
        </div>
    </div>
</section>
<!-- page title area end  -->

<!-- element area start  -->
<section class="element fix pt-130 pb-130 bg-white z-index-2">
    <div class="container">
        
            <div class="col-xl-12 mb-65">
                <div class="bd-section-title-wrapper">
                    
                </div>
                <div class="appointment-form-wrapper">
                    <div class="appointment-form-bg">
                        <img src="pics/rcl9.jpg" alt="img not found">
                    </div>
                    <div class="appointment-form">
                        <div class="bd-section-title-wrapper centered-title appointment-section-title-wrapper">
                            <div class="bd-section-subtitle st-b">
                                CAgo <span>Data Management Portal</span>
                            </div>
                            <h3 class="bd-section-title mb-50">Register</h3>
                        </div>
                                <?php
                                    $gen= "ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789abcdefghijklmnopqrstuvwzyz";
                                    $yearnow = date('Y');
                                ?>
                        <form method="post" action="loginprocess.php" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="single-input-field field-f-name">
                                        <input type="text" name="code" placeholder="Code" readonly value="<?php echo substr(str_shuffle($gen),0,5); ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="single-input-field field-f-name">
                                        <input type="text" name="uname" placeholder="Username">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="single-input-field field-l-name">
                                        <input  type="password" name="pword" placeholder="Password">
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="single-input-field field-l-name">
                                        <input  type="text" name="fname" placeholder="First Name">
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="single-input-field field-l-name">
                                        <input  type="text" name="mname" placeholder="Middle Name">
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="single-input-field field-l-name">
                                        <input  type="text" name="lname" placeholder="Last Name">
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="single-input-field field-l-name">
                                        <input  type="text" name="ename" placeholder="Extension (If Any)">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="single-input-field field-l-name">
                                        <input  type="text" name="position" placeholder="Position">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="single-input-field field-l-name">
                                        <input type="text" name="office" placeholder="Office" list="officename">
                                            <datalist id="officename">                                                
                                                <option value="AgriBOOST">
                                                <option value="Farmers Information and Technology Services Center">
                                                <option value="Planning and Research Division">
                                                <option value="Administrative">Administrative
                                                <option value="Industry Development and Special Projects Division">
                                                <option value="Field Operations Division">
                                            </datalist>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="single-input-field field-l-name">
                                        <input type="text" name="gender" placeholder="Sex" list="gendername">
                                            <datalist id="gendername">                                                
                                                <option value="Male">
                                                <option value="Female">
                                            </datalist>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="single-input-field field-l-name">
                                        <input  type="text" name="age" placeholder="Age">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="single-input-field field-l-name">
                                        <input  type="date" name="bday" placeholder="Birthdate">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="single-input-field field-l-name">
                                        <input  type="text" name="cnumber" placeholder="Phone Number">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="single-input-field field-l-name">
                                        <input  type="text" name="eaddr" placeholder="Email Address">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="">
                                        <label for="" style="color: white;" >Display Picture</label>
                                        <input  type="file" name="pfile" class="border-btn">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="">
                                        <label for="" style="color: white;">PDS</label>
                                        <input  type="file" name="pdoc" class="border-btn">
                                    </div>
                                </div>

                                
                                

                               
                                
                                <div class="appointment-btn mt-10">
                                    
                                    <input type="submit" name="submit" style="background: #f6a20c;" value="Register"  class="border-btn">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    

</main>


<?php include_once "footingland.php" ?>