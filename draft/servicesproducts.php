<?php include "headingland.php" ?>
<div id="wrapper">
            <!-- content    -->
            <div class="content">
                <!--section   -->
                <section class="hero-section">
                    <div class="bg-wrap hero-section_bg">
                        <div class="bg" data-bg="logo3.png"></div>
                    </div>
                    <div class="container">
                        <div class="hero-section_title">
                            <h2>Product Services</h2>
                        </div>
                        <div class="clearfix"></div>
                        <div class="breadcrumbs-list fl-wrap">
                            <a href="index.php" style="font-size: 15px;">Home</a>
                        </div>
                        <div class="scroll-down-wrap scw_transparent">
                            <div class="mousey">
                                <div class="scroller"></div>
                            </div>
                            <span style="font-size: 15px;">Scroll Down To Discover</span>
                        </div>
                    </div>
                </section>
                <!-- section end  -->
                <!--section   -->
                <?php  

$date_f = date('Y-m-d');

$date_t = date('H:i:s');
$date_m = date('m');
$date_d = date('d');
$date_y = date('Y');

$gen= "ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789abcdefghijklmnopqrstuvwzyz";

?>


                <section>
                    <div class="container">
                        <div class="row">
                           
                            <div class="col-md-12">
                                <div class="pad-con fl-wrap">
                                    <div class="pr-subtitle prs_big" style="font-size: 30px;">Request Form</div>
                                    <p style="font-size: 15px;">Kindly Complete the Details</p>
                                    <div id="contact-form" style="margin-top: 20px;">
                                        <div id="message"></div>
                                        <form class="custom-form" method="post" action="servicesprocess.php" enctype="multipart/form-data">
                                            <fieldset>
                                            <div style="display:none;">
                                                <input type="text" name="mmonthf"  value="<?php echo $date_m;?>" />
                                                <input type="text" name="mdayf"  value="<?php echo $date_d;?>" />
                                                <input type="text" name="myearf"  value="<?php echo $date_y;?>" />
                                                <input type="text" name="mtimef"  value="<?php echo $date_t;?>" />
                                                <input type="text" name="mfullf"  value="<?php echo $date_f;?>" />
                                                <input type="text" name="servicesf"  value="Products" />                                           
                                                <input type="text" name="codef" value="<?php echo $date_m;?>-<?php echo $date_d;?>-<?php echo $date_y;?>-<?php echo substr(str_shuffle($gen),0,5); ?>" />
                                            </div>
                                                <input type="text" name="fnamef" style="color: black;" placeholder="Please Enter Full Name *" />
                                                <select name="spcf" style="font-size:14px;">
                                                    <option value="" style="color:red;">Select Products</option>
                                                    <option value="Seedlings">Seedlings</option>
                                                    <option value="Piglets">Piglets</option>
                                                    <option value="Palay">Palay</option>
                                                    <option value="Rice Certified Seeds">Rice Certified Seeds</option>
                                                    <option value="Others">Others</option>
                                                </select>    
                                                <input type="text" name="spotf" placeholder="Kindly Specify (if Others)" />
                                                <select name="genderf" style="font-size:14px;">
                                                    <option value="" style="color:red;">Please Select Sex *</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>    
                                                <input type="text" name="appofficef" placeholder="Please Enter Office/FCA (If applicable) *" />
                                                <input type="text" name="agef" placeholder="Please Enter Age *" />
                                                <input type="text" name="cnumberf" placeholder="Please Enter Contact Number *" />
                                                <input type="text" name="eaddrf" placeholder="Please Enter Email Address *" />
                                                <input type="text" name="apppurokf" placeholder="Please Enter Purok/Street/Village/Subdivision *" />
                                                <select name="brgyf" style="font-size:14px;">
                                                    <option value="">Please Select Barangay *</option>
                                                    <option value="Agao Poblacion">Agao Poblacion</option>
                                                    <option value="Agusan Pequeño">Agusan Pequeño</option>
                                                    <option value="Ambago">Ambago</option>
                                                    <option value="Amparo">Amparo</option>
                                                    <option value="Ampayon">Ampayon</option>
                                                    <option value="Anticala">Anticala</option>
                                                    <option value="Antongalon">Antongalon</option>
                                                    <option value="Aupagan">Aupagan</option>
                                                    <option value="Baan KM 3">Baan KM 3</option>
                                                    <option value="Baan Riverside Poblacion">Baan Riverside Poblacion</option>

                                                    <option value="Babag">Babag</option>
                                                    <option value="Bading Poblacion">Bading Poblacion</option>
                                                    <option value="Bancasi">Bancasi</option>
                                                    <option value="Banza">Banza</option>
                                                    <option value="Baobaoan">Baobaoan</option>
                                                    <option value="Basag">Basag</option>
                                                    <option value="Bayanihan Poblacion">Bayanihan Poblacion</option>
                                                    <option value="Bilay">Bilay</option>
                                                    <option value="Bitan-agan">Bitan-agan</option>
                                                    <option value="Bit-os">Bit-os</option>
                                                    
                                                    <option value="Bobon">Bobon</option>
                                                    <option value="Bonbon">Bonbon</option>
                                                    <option value="Bugabus">Bugabus</option>
                                                    <option value="Bugsukan">Bugsukan</option>
                                                    <option value="Buhangin Poblacion">Buhangin Poblacion</option>
                                                    <option value="Cabcabon">Cabcabon</option>
                                                    <option value="Camayahan">Camayahan</option>
                                                    <option value="Dagohoy Poblacion">Dagohoy Poblacion</option>
                                                    <option value="Dankias">Dankias</option>
                                                    <option value="De Oro">De Oro</option>

                                                    <option value="Diego Silang Poblacion">Diego Silang Poblacion</option>
                                                    <option value="Don Francisco">Don Francisco</option>
                                                    <option value="Doongan">Doongan</option>
                                                    <option value="Dulag">Dulag</option>
                                                    <option value="Dumalagan">Dumalagan</option>
                                                    <option value="Florida">Florida</option>
                                                    <option value="Golden Ribbon Poblacion">Golden Ribbon Poblacion</option>
                                                    <option value="Holy Redeemer Poblacion">Holy Redeemer Poblacion</option>
                                                    <option value="Humabon Poblacion">Humabon Poblacion</option>
                                                    <option value="Imadejas Poblacion">Imadejas Poblacion</option>

                                                    <option value="Jose Rizal Poblacion">Jose Rizal Poblacion</option>
                                                    <option value="Kinamlutan">Kinamlutan</option>
                                                    <option value="Lapu-lapu Poblacion">Lapu-lapu Poblacion</option>
                                                    <option value="Lemon">Lemon</option>
                                                    <option value="Leon Kilat Poblacion">Leon Kilat Poblacion</option>
                                                    <option value="Libertad">Libertad</option>
                                                    <option value="Limaha Poblacion">Limaha Poblacion</option>
                                                    <option value="Los Angeles">Los Angeles</option>
                                                    <option value="Lumbocan">Lumbocan</option>
                                                    <option value="Maguinda">Maguinda</option>

                                                    <option value="Mahay">Mahay</option>
                                                    <option value="Mahogany Poblacion">Mahogany Poblacion</option>
                                                    <option value="Maibu">Maibu</option>
                                                    <option value="Mandamo">Mandamo</option>
                                                    <option value="Manila de Bugabus">Manila de Bugabus</option>
                                                    <option value="Maon Poblacion">Maon Poblacion</option>
                                                    <option value="Masao">Masao</option>
                                                    <option value="Maug">Maug</option>
                                                    <option value="New Society Village Poblacion">New Society Village Poblacion</option>
                                                    <option value="Nong-nong">Nong-nong</option>

                                                    <option value="Obrero Poblacion">Obrero Poblacion</option>
                                                    <option value="Ong Yiu Poblacion">Ong Yiu Poblacion</option>
                                                    <option value="Pagatpatan">Pagatpatan</option>
                                                    <option value="Pangabugan">Pangabugan</option>
                                                    <option value="Pianing">Pianing</option>
                                                    <option value="Pigdaulan">Pigdaulan</option>
                                                    <option value="Pinamanculan">Pinamanculan</option>
                                                    <option value="Port Poyohon Poblacion">Port Poyohon Poblacion</option>
                                                    <option value="Rajah Soliman Poblacion">Rajah Soliman Poblacion</option>
                                                    <option value="Salvacion">Salvacion</option>

                                                    <option value="San Ignacio Poblacion">San Ignacio Poblacion</option>
                                                    <option value="San Mateo">San Mateo</option>
                                                    <option value="San Vicente">San Vicente</option>
                                                    <option value="Santo Niño">Santo Niño</option>
                                                    <option value="Sikatuna Poblacion">Sikatuna Poblacion</option>
                                                    <option value="Silongan Poblacion">Silongan Poblacion</option>
                                                    <option value="Sumile">Sumile</option>
                                                    <option value="Sumilihon">Sumilihon</option>
                                                    <option value="Tagabaca">Tagabaca</option>
                                                    <option value="Taguibo">Taguibo</option>

                                                    <option value="Taligaman">Taligaman</option>
                                                    <option value="Tandang Sora Poblacion">Tandang Sora Poblacion</option>
                                                    <option value="Tiniwisan">Tiniwisan</option>
                                                    <option value="Tungao">Tungao</option>
                                                    <option value="Urduja Poblacion">Urduja Poblacion</option>
                                                    <option value="Villa Kananga">Villa Kananga</option>
                                           
                                                </select>    
                                                <input type="text" name="appcomf" placeholder="Please Enter Commodity *"/>
                                                <input type="text" name="appareaf" placeholder="Please Enter Area (ha) *" />
                                                <textarea name="appdetf" id="comments" cols="40" rows="3" placeholder="Details of Request"></textarea>

                                               
                                                <input type="file" name="filef" id="dp" class="btn   color-bg float-btn" title=" Upload Picture "/>
                                          


                                               
                                            </fieldset>
                                            <input type="submit" name="submit_services"  class="btn color-bg float-btn" />
                                        </form>
                                    </div>
                                    <!-- contact form  end-->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- content  end-->

            
            <?php include "footingland.php" ?>