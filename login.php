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
                    <h1 class="page-title mb-10">WELCOME BACK!</h1>
                </div>
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
                            <h3 class="bd-section-title mb-50">LOGIN</h3>
                        </div>
                        <form method="post" action="loginprocess.php">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="single-input-field field-f-name">
                                        <input type="text" name="uname" placeholder="Username">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="single-input-field field-l-name">
                                        <input  type="password" name="pword" placeholder="Password">
                                    </div>
                                </div>
                                
                                <div class="appointment-btn mt-10">
                                    
                                    <input type="submit" name="signin" style="background: #f6a20c;" value="Sign In"  class="border-btn">
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