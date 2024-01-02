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
                    <h1 class="page-title mb-10">AVAIL NOW!
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
                                CAgO <span>Farm Inputs Services</span>
                            </div>
                            <h3 class="bd-section-title mb-50">Request Form</h3>
                        </div>
                                <?php
                                    $gen= "ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789abcdefghijklmnopqrstuvwzyz";
                                    $yearnow = date('Y');
                                ?>

                            <?php  

                            $date_f = date('Y-m-d');

                            $date_t = date('H:i:s');
                            $date_m = date('m');
                            $date_d = date('d');
                            $date_y = date('Y');

                            $gen= "ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789abcdefghijklmnopqrstuvwzyz";

                            ?>
                        <form method="post" action="servicesprocess.php" enctype="multipart/form-data">

                            <div style="display:none;">
                                <input type="text" name="mmonthf"  value="<?php echo $date_m;?>" />
                                <input type="text" name="mdayf"  value="<?php echo $date_d;?>" />
                                <input type="text" name="myearf"  value="<?php echo $date_y;?>" />
                                <input type="text" name="mtimef"  value="<?php echo $date_t;?>" />
                                <input type="text" name="mfullf"  value="<?php echo $date_f;?>" />
                                <input type="text" name="servicesf"  value="Farm Inputs" />                                           
                                <input type="text" name="codef" value="<?php echo $date_m;?>-<?php echo $date_d;?>-<?php echo $date_y;?>-<?php echo substr(str_shuffle($gen),0,5); ?>" />
                            </div>

                            <div class="row">
                                

                                <div class="col-sm-6">
                                    <div class="single-input-field field-l-name">
                                        <input type="text" name="spcf" placeholder="Please Select Farm Input" list="specifc">
                                            <datalist id="specifc">                                                
                                                <option value="Seeds">
                                                <option value="Fertilizers">
                                                <option value="Farm Tools">
                                                <option value="Farm Machinery and Equipment">
                                                <option value="Fingerlings Dispersal">
                                                <option value="Livestock and Poultry Dispersal">
                                                <option value="Others">
                                            </datalist>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="single-input-field field-f-name">
                                        <input type="text" name="spotf" placeholder="Please Specify if Selected 'Others' *" />
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="single-input-field field-f-name">
                                        <input type="text" name="fnamef" placeholder="Please Enter Full Name *" />
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="single-input-field field-l-name">
                                        <input type="text" name="genderf" placeholder="Please Select Sex *" list="sexcat">
                                            <datalist id="sexcat">                                                
                                                <option value="Male">
                                                <option value="Female">
                                            </datalist>
                                    </div>
                                </div>
                                

                                <div class="col-sm-3">
                                    <div class="single-input-field field-f-name">
                                        <input type="text" name="agef" placeholder="Please Enter Age *">
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="single-input-field field-f-name">
                                        <input type="text" name="cnumberf" placeholder="Please Enter Contact Number *">
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="single-input-field field-f-name">
                                        <input type="text" name="eaddrf" placeholder="Please Enter Email Address *">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="single-input-field field-f-name">
                                        <input type="text" name="appofficef" placeholder="Please Enter Name of Office (If Applicable)">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="single-input-field field-f-name">
                                        <input type="text" name="apppurokf" placeholder="Please Enter Purok/Street/Village/Subdivision *">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="single-input-field field-l-name">
                                        <input type="text" name="brgyf" placeholder="Please Select Barangay *" list="barcat">
                                            <datalist id="barcat">                                                
                                                    <option value="Agao Poblacion">
                                                    <option value="Agusan Pequeño">
                                                    <option value="Ambago">
                                                    <option value="Amparo">
                                                    <option value="Ampayon">
                                                    <option value="Anticala">
                                                    <option value="Antongalon">
                                                    <option value="Aupagan">
                                                    <option value="Baan KM 3">
                                                    <option value="Baan Riverside Poblacion">

                                                    <option value="Babag">
                                                    <option value="Bading Poblacion">
                                                    <option value="Bancasi">
                                                    <option value="Banza">
                                                    <option value="Baobaoan">
                                                    <option value="Basag">
                                                    <option value="Bayanihan Poblacion">
                                                    <option value="Bilay">
                                                    <option value="Bitan-agan">
                                                    <option value="Bit-os">
                                                    
                                                    <option value="Bobon">
                                                    <option value="Bonbon">
                                                    <option value="Bugabus">
                                                    <option value="Bugsukan">
                                                    <option value="Buhangin Poblacion">
                                                    <option value="Cabcabon">
                                                    <option value="Camayahan">
                                                    <option value="Dagohoy Poblacion">
                                                    <option value="Dankias">
                                                    <option value="De Oro">

                                                    <option value="Diego Silang Poblacion">
                                                    <option value="Don Francisco">
                                                    <option value="Doongan">
                                                    <option value="Dulag">
                                                    <option value="Dumalagan">
                                                    <option value="Florida">
                                                    <option value="Golden Ribbon Poblacion">
                                                    <option value="Holy Redeemer Poblacion">
                                                    <option value="Humabon Poblacion">
                                                    <option value="Imadejas Poblacion">

                                                    <option value="Jose Rizal Poblacion">
                                                    <option value="Kinamlutan">
                                                    <option value="Lapu-lapu Poblacion">
                                                    <option value="Lemon">
                                                    <option value="Leon Kilat Poblacion">
                                                    <option value="Libertad">
                                                    <option value="Limaha Poblacion">
                                                    <option value="Los Angeles">
                                                    <option value="Lumbocan">
                                                    <option value="Maguinda">

                                                    <option value="Mahay">
                                                    <option value="Mahogany Poblacion">
                                                    <option value="Maibu">
                                                    <option value="Mandamo">
                                                    <option value="Manila de Bugabus">
                                                    <option value="Maon Poblacion">
                                                    <option value="Masao">
                                                    <option value="Maug">
                                                    <option value="New Society Village Poblacion">
                                                    <option value="Nong-nong">

                                                    <option value="Obrero Poblacion">
                                                    <option value="Ong Yiu Poblacion">
                                                    <option value="Pagatpatan">
                                                    <option value="Pangabugan">
                                                    <option value="Pianing">
                                                    <option value="Pigdaulan">
                                                    <option value="Pinamanculan">
                                                    <option value="Port Poyohon Poblacion">
                                                    <option value="Rajah Soliman Poblacion">
                                                    <option value="Salvacion">

                                                    <option value="San Ignacio Poblacion">
                                                    <option value="San Mateo">
                                                    <option value="San Vicente">
                                                    <option value="Santo Niño">
                                                    <option value="Sikatuna Poblacion">
                                                    <option value="Silongan Poblacion">
                                                    <option value="Sumile">
                                                    <option value="Sumilihon">
                                                    <option value="Tagabaca">
                                                    <option value="Taguibo">

                                                    <option value="Taligaman">
                                                    <option value="Tandang Sora Poblacion">
                                                    <option value="Tiniwisan">
                                                    <option value="Tungao">
                                                    <option value="Urduja Poblacion">
                                                    <option value="Villa Kananga">
                                            </datalist>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="single-input-field field-f-name">
                                        <input type="text" name="appcomf" placeholder="Please Enter Commodity *">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="single-input-field field-f-name">
                                        <input type="text" name="appareaf" placeholder="Please Enter Area (Ha) *">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="single-input-field field-message">
                                        <textarea name="appdetf" id="message-2" placeholder="Details of Request . . . "></textarea>
                                    </div>
                                </div>
                               

                                <div class="col-sm-6">
                                    <div class="">
                                        <label for="" style="color: white;" >Upload</label>
                                        <input  type="file" name="filef" class="border-btn">
                                    </div>
                                </div>

                    
                                

                               
                                
                                <div class="appointment-btn mt-10">
                                    
                                    <input type="submit" name="submit_services" style="background: #f6a20c;" value="Submit Request"  class="border-btn">
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