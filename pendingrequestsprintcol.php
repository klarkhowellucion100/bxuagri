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

<?php
if (isset($_GET['print'])) {
    include_once 'db.inc.php';
   
   $idf = $_GET['print'];
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

$docstat= $row['docstat'];

$appfee= $row['appfee'];


}

$date_f = date('Y-m-d');
   ?>

 
         
                    
                                <div class="row">
                                    <div class="col">
                                        <div class="table-responsive">
                                            <table class="table table-bordered border-primary table-wrap table-centered mb-0">
                                               
                                                <tr>
                                                    <td colspan=1 style="text-align:center;"><span style="font-size: 10px;"> <img src="logo2.png" height="60" alt=""> </span> </td>
                                                    <td colspan=2 style="text-align:left;">
                                                        <span style="font-size: 10px;"> Republic of the Philippines </span> <br>
                                                        <span style="font-size: 13px; font-weight: bold;"> CITY AGRICULTURE OFFICE </span> <br>
                                                        <span style="font-size: 10px;"> D.O.P. Bldg., Brgy. Tiniwisan, Butuan City </span> 
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td colspan=3 style="text-align:center; font-weight: bold; font-size: 15px;">CASH COLLECTION SLIP</td>
                                                </tr>

                                                <tr>
                                                    <td class="border-end border-bottom" colspan=1 style="text-align:left; font-weight: bold; font-size: 15px;">Control No.</td>
                                                    <td class="border-start border-bottom" colspan=2 style="text-align:left; font-size: 15px;"><?php echo $codef;?></td>
                                                </tr>

                                                <tr>
                                                    <td class="border-end border-bottom" colspan=1 style="text-align:left; font-weight: bold; font-size: 15px;">Date</td>
                                                    <td class="border-start border-bottom" colspan=2 style="text-align:left; font-weight: bold; font-size: 15px;"><?php echo $enda;?></td>
                                                </tr>

                                                <tr>
                                                    <td class="border-bottom" colspan=3 style="text-align:left; font-weight: bold; font-size: 15px;">TO: CITY TREASURERS' OFFICE</td>
                                                   
                                                </tr>

                                                <tr>
                                                    <td class="border-bottom" colspan=3 style="text-align:left; font-weight: bold; font-size: 15px;">Kindly collect the amount and issue the corresponding official receipt to the client based on the particulars stated below:</td>
                                                   
                                                </tr>

                                                <tr>
                                                    <td class="border-end border-bottom" colspan=1 style="text-align:left; font-weight: bold; font-size: 15px;">Name of Client</td>
                                                    <td class="border-start border-bottom" colspan=2 style="text-align:left; font-size: 15px;"><?php echo $fnamef;?></td>
                                                </tr>

                                                <tr>
                                                    <td class="border-end border-bottom" colspan=1 style="text-align:left; font-weight: bold; font-size: 15px;">Address</td>
                                                    <td class="border-start border-bottom" colspan=2 style="text-align:left; font-size: 15px;"><?php echo $apppurokf;?>, <?php echo $brgyf;?>, Butuan City, 8600</td>
                                                </tr>

                                                <tr>
                                                    <td class="border-end border-bottom" colspan=1 style="text-align:left; font-weight: bold; font-size: 15px;">No. of Hectares</td>
                                                    <td class="border-start border-bottom" colspan=2 style="text-align:left; font-size: 15px;"><?php echo $appareaf;?> Hectares</td>
                                                </tr>

                                                <tr>
                                                    <td class="border-end border-bottom" colspan=1 style="text-align:left; font-weight: bold; font-size: 15px;">Fees and Charges</td>
                                                    <td class="border-start border-bottom" colspan=2 style="text-align:left; font-size: 15px;">Php <?php echo $appfee;?></td>
                                                </tr> 

                                                <tr>
                                                    <td class="border-bottom" colspan=3 style="text-align:left; font-weight: bold; font-size: 15px;">THANK YOU!</td>                                                
                                                </tr>

                                                <tr>
                                                    <td class="border-bottom" colspan=3 style="text-align:left; font-weight: bold; font-size: 15px;"></td>                                                
                                                </tr>

                                                <tr>
                                                    <td class="border-bottom" colspan=3 style="text-align:left; font-weight: bold; font-size: 15px;"></td>                                                
                                                </tr>

                                                <tr>
                                                    <td class="border-bottom" colspan=3 style="text-align:left; font-weight: bold; font-size: 15px;"></td>                                                
                                                </tr>

                                                <tr>
                                                    <td class="border-end" colspan=1 style="text-align:left; font-weight: bold; font-size: 15px;">JOHN WEVIN A. TINGAS</td>   
                                                    <td class="border-bottom" colspan=2 style="text-align:left; font-weight: bold; font-size: 15px;"></td>                                               
                                                </tr>
                                                <tr>
                                                    <td colspan=3 style="text-align:left; font-size: 13px;">AO Designate</td>                                                
                                                </tr>

                                                <tr>
                                                    <td class="border-top" colspan=3 style="text-align:right; font-size: 13px;"> <img src="butuan.jfif" height="60" alt=""></td>                                                
                                                </tr>
                                                <tr>
                                                    <td class="border-top" colspan=3 style="text-align:right; font-size: 13px;"> CAgO.RMS.F.001.REV00</td>                                                
                                                </tr>

                                               

                                            </table>
                                        </div>
                                    </div>

                                    <div class="col">    
                                        <div class="table-responsive">
                                        <table class="table table-bordered border-primary table-wrap table-centered mb-0">
                                               
                                               <tr>
                                                   <td colspan=1 style="text-align:center;"><span style="font-size: 10px;"> <img src="logo2.png" height="60" alt=""> </span> </td>
                                                   <td colspan=2 style="text-align:left;">
                                                       <span style="font-size: 10px;"> Republic of the Philippines </span> <br>
                                                       <span style="font-size: 13px; font-weight: bold;"> CITY AGRICULTURE OFFICE </span> <br>
                                                       <span style="font-size: 10px;"> D.O.P. Bldg., Brgy. Tiniwisan, Butuan City </span> 
                                                   </td>
                                               </tr>

                                               <tr>
                                                   <td colspan=3 style="text-align:center; font-weight: bold; font-size: 15px;">CASH COLLECTION SLIP</td>
                                               </tr>

                                               <tr>
                                                   <td class="border-end border-bottom" colspan=1 style="text-align:left; font-weight: bold; font-size: 15px;">Control No.</td>
                                                   <td class="border-start border-bottom" colspan=2 style="text-align:left; font-size: 15px;"><?php echo $codef;?></td>
                                               </tr>

                                               <tr>
                                                   <td class="border-end border-bottom" colspan=1 style="text-align:left; font-weight: bold; font-size: 15px;">Date</td>
                                                   <td class="border-start border-bottom" colspan=2 style="text-align:left; font-weight: bold; font-size: 15px;"><?php echo $enda;?></td>
                                               </tr>

                                               <tr>
                                                   <td class="border-bottom" colspan=3 style="text-align:left; font-weight: bold; font-size: 15px;">TO: CITY TREASURERS' OFFICE</td>
                                                  
                                               </tr>

                                               <tr>
                                                   <td class="border-bottom" colspan=3 style="text-align:left; font-weight: bold; font-size: 15px;">Kindly collect the amount and issue the corresponding official receipt to the client based on the particulars stated below:</td>
                                                  
                                               </tr>

                                               <tr>
                                                   <td class="border-end border-bottom" colspan=1 style="text-align:left; font-weight: bold; font-size: 15px;">Name of Client</td>
                                                   <td class="border-start border-bottom" colspan=2 style="text-align:left; font-size: 15px;"><?php echo $fnamef;?></td>
                                               </tr>

                                               <tr>
                                                   <td class="border-end border-bottom" colspan=1 style="text-align:left; font-weight: bold; font-size: 15px;">Address</td>
                                                   <td class="border-start border-bottom" colspan=2 style="text-align:left; font-size: 15px;"><?php echo $apppurokf;?>, <?php echo $brgyf;?>, Butuan City, 8600</td>
                                               </tr>

                                               <tr>
                                                   <td class="border-end border-bottom" colspan=1 style="text-align:left; font-weight: bold; font-size: 15px;">No. of Hectares</td>
                                                   <td class="border-start border-bottom" colspan=2 style="text-align:left; font-size: 15px;"><?php echo $appareaf;?> Hectares</td>
                                               </tr>

                                               <tr>
                                                   <td class="border-end border-bottom" colspan=1 style="text-align:left; font-weight: bold; font-size: 15px;">Fees and Charges</td>
                                                   <td class="border-start border-bottom" colspan=2 style="text-align:left; font-size: 15px;">Php <?php echo $appfee;?></td>
                                               </tr> 

                                               <tr>
                                                   <td class="border-bottom" colspan=3 style="text-align:left; font-weight: bold; font-size: 15px;">THANK YOU!</td>                                                
                                               </tr>

                                               <tr>
                                                   <td class="border-bottom" colspan=3 style="text-align:left; font-weight: bold; font-size: 15px;"></td>                                                
                                               </tr>

                                               <tr>
                                                   <td class="border-bottom" colspan=3 style="text-align:left; font-weight: bold; font-size: 15px;"></td>                                                
                                               </tr>

                                               <tr>
                                                   <td class="border-bottom" colspan=3 style="text-align:left; font-weight: bold; font-size: 15px;"></td>                                                
                                               </tr>

                                               <tr>
                                                   <td class="border-end" colspan=1 style="text-align:left; font-weight: bold; font-size: 15px;">JOHN WEVIN A. TINGAS</td>   
                                                   <td class="border-bottom" colspan=2 style="text-align:left; font-weight: bold; font-size: 15px;"></td>                                               
                                               </tr>
                                               <tr>
                                                   <td colspan=3 style="text-align:left; font-size: 13px;">AO Designate</td>                                                
                                               </tr>

                                               <tr>
                                                   <td class="border-top" colspan=3 style="text-align:right; font-size: 13px;"> <img src="butuan.jfif" height="60" alt=""></td>                                                
                                               </tr>
                                               <tr>
                                                   <td class="border-top" colspan=3 style="text-align:right; font-size: 13px;"> CAgO.RMS.F.001.REV00</td>                                                
                                               </tr>

                                              

                                           </table>
                                        </div>
                                    </div>
                                </div>

                                <br> <br>

                                <div class="row">
                                    <div class="col">
                                        <div class="table-responsive">
                                        <table class="table table-bordered border-primary table-wrap table-centered mb-0">
                                               
                                               <tr>
                                                   <td colspan=1 style="text-align:center;"><span style="font-size: 10px;"> <img src="logo2.png" height="60" alt=""> </span> </td>
                                                   <td colspan=2 style="text-align:left;">
                                                       <span style="font-size: 10px;"> Republic of the Philippines </span> <br>
                                                       <span style="font-size: 13px; font-weight: bold;"> CITY AGRICULTURE OFFICE </span> <br>
                                                       <span style="font-size: 10px;"> D.O.P. Bldg., Brgy. Tiniwisan, Butuan City </span> 
                                                   </td>
                                               </tr>

                                               <tr>
                                                   <td colspan=3 style="text-align:center; font-weight: bold; font-size: 15px;">CASH COLLECTION SLIP</td>
                                               </tr>

                                               <tr>
                                                   <td class="border-end border-bottom" colspan=1 style="text-align:left; font-weight: bold; font-size: 15px;">Control No.</td>
                                                   <td class="border-start border-bottom" colspan=2 style="text-align:left; font-size: 15px;"><?php echo $codef;?></td>
                                               </tr>

                                               <tr>
                                                   <td class="border-end border-bottom" colspan=1 style="text-align:left; font-weight: bold; font-size: 15px;">Date</td>
                                                   <td class="border-start border-bottom" colspan=2 style="text-align:left; font-weight: bold; font-size: 15px;"><?php echo $enda;?></td>
                                               </tr>

                                               <tr>
                                                   <td class="border-bottom" colspan=3 style="text-align:left; font-weight: bold; font-size: 15px;">TO: CITY TREASURERS' OFFICE</td>
                                                  
                                               </tr>

                                               <tr>
                                                   <td class="border-bottom" colspan=3 style="text-align:left; font-weight: bold; font-size: 15px;">Kindly collect the amount and issue the corresponding official receipt to the client based on the particulars stated below:</td>
                                                  
                                               </tr>

                                               <tr>
                                                   <td class="border-end border-bottom" colspan=1 style="text-align:left; font-weight: bold; font-size: 15px;">Name of Client</td>
                                                   <td class="border-start border-bottom" colspan=2 style="text-align:left; font-size: 15px;"><?php echo $fnamef;?></td>
                                               </tr>

                                               <tr>
                                                   <td class="border-end border-bottom" colspan=1 style="text-align:left; font-weight: bold; font-size: 15px;">Address</td>
                                                   <td class="border-start border-bottom" colspan=2 style="text-align:left; font-size: 15px;"><?php echo $apppurokf;?>, <?php echo $brgyf;?>, Butuan City, 8600</td>
                                               </tr>

                                               <tr>
                                                   <td class="border-end border-bottom" colspan=1 style="text-align:left; font-weight: bold; font-size: 15px;">No. of Hectares</td>
                                                   <td class="border-start border-bottom" colspan=2 style="text-align:left; font-size: 15px;"><?php echo $appareaf;?> Hectares</td>
                                               </tr>

                                               <tr>
                                                   <td class="border-end border-bottom" colspan=1 style="text-align:left; font-weight: bold; font-size: 15px;">Fees and Charges</td>
                                                   <td class="border-start border-bottom" colspan=2 style="text-align:left; font-size: 15px;">Php <?php echo $appfee;?></td>
                                               </tr> 

                                               <tr>
                                                   <td class="border-bottom" colspan=3 style="text-align:left; font-weight: bold; font-size: 15px;">THANK YOU!</td>                                                
                                               </tr>

                                               <tr>
                                                   <td class="border-bottom" colspan=3 style="text-align:left; font-weight: bold; font-size: 15px;"></td>                                                
                                               </tr>

                                               <tr>
                                                   <td class="border-bottom" colspan=3 style="text-align:left; font-weight: bold; font-size: 15px;"></td>                                                
                                               </tr>

                                               <tr>
                                                   <td class="border-bottom" colspan=3 style="text-align:left; font-weight: bold; font-size: 15px;"></td>                                                
                                               </tr>

                                               <tr>
                                                   <td class="border-end" colspan=1 style="text-align:left; font-weight: bold; font-size: 15px;">JOHN WEVIN A. TINGAS</td>   
                                                   <td class="border-bottom" colspan=2 style="text-align:left; font-weight: bold; font-size: 15px;"></td>                                               
                                               </tr>
                                               <tr>
                                                   <td colspan=3 style="text-align:left; font-size: 13px;">AO Designate</td>                                                
                                               </tr>

                                               <tr>
                                                   <td class="border-top" colspan=3 style="text-align:right; font-size: 13px;"> <img src="butuan.jfif" height="60" alt=""></td>                                                
                                               </tr>
                                               <tr>
                                                   <td class="border-top" colspan=3 style="text-align:right; font-size: 13px;"> CAgO.RMS.F.001.REV00</td>                                                
                                               </tr>

                                              

                                           </table>
                                        </div>
                                    </div>

                                    <div class="col">    
                                        <div class="table-responsive">
                                        <table class="table table-bordered border-primary table-wrap table-centered mb-0">
                                               
                                               <tr>
                                                   <td colspan=1 style="text-align:center;"><span style="font-size: 10px;"> <img src="logo2.png" height="60" alt=""> </span> </td>
                                                   <td colspan=2 style="text-align:left;">
                                                       <span style="font-size: 10px;"> Republic of the Philippines </span> <br>
                                                       <span style="font-size: 13px; font-weight: bold;"> CITY AGRICULTURE OFFICE </span> <br>
                                                       <span style="font-size: 10px;"> D.O.P. Bldg., Brgy. Tiniwisan, Butuan City </span> 
                                                   </td>
                                               </tr>

                                               <tr>
                                                   <td colspan=3 style="text-align:center; font-weight: bold; font-size: 15px;">CASH COLLECTION SLIP</td>
                                               </tr>

                                               <tr>
                                                   <td class="border-end border-bottom" colspan=1 style="text-align:left; font-weight: bold; font-size: 15px;">Control No.</td>
                                                   <td class="border-start border-bottom" colspan=2 style="text-align:left; font-size: 15px;"><?php echo $codef;?></td>
                                               </tr>

                                               <tr>
                                                   <td class="border-end border-bottom" colspan=1 style="text-align:left; font-weight: bold; font-size: 15px;">Date</td>
                                                   <td class="border-start border-bottom" colspan=2 style="text-align:left; font-weight: bold; font-size: 15px;"><?php echo $enda;?></td>
                                               </tr>

                                               <tr>
                                                   <td class="border-bottom" colspan=3 style="text-align:left; font-weight: bold; font-size: 15px;">TO: CITY TREASURERS' OFFICE</td>
                                                  
                                               </tr>

                                               <tr>
                                                   <td class="border-bottom" colspan=3 style="text-align:left; font-weight: bold; font-size: 15px;">Kindly collect the amount and issue the corresponding official receipt to the client based on the particulars stated below:</td>
                                                  
                                               </tr>

                                               <tr>
                                                   <td class="border-end border-bottom" colspan=1 style="text-align:left; font-weight: bold; font-size: 15px;">Name of Client</td>
                                                   <td class="border-start border-bottom" colspan=2 style="text-align:left; font-size: 15px;"><?php echo $fnamef;?></td>
                                               </tr>

                                               <tr>
                                                   <td class="border-end border-bottom" colspan=1 style="text-align:left; font-weight: bold; font-size: 15px;">Address</td>
                                                   <td class="border-start border-bottom" colspan=2 style="text-align:left; font-size: 15px;"><?php echo $apppurokf;?>, <?php echo $brgyf;?>, Butuan City, 8600</td>
                                               </tr>

                                               <tr>
                                                   <td class="border-end border-bottom" colspan=1 style="text-align:left; font-weight: bold; font-size: 15px;">No. of Hectares</td>
                                                   <td class="border-start border-bottom" colspan=2 style="text-align:left; font-size: 15px;"><?php echo $appareaf;?> Hectares</td>
                                               </tr>

                                               <tr>
                                                   <td class="border-end border-bottom" colspan=1 style="text-align:left; font-weight: bold; font-size: 15px;">Fees and Charges</td>
                                                   <td class="border-start border-bottom" colspan=2 style="text-align:left; font-size: 15px;">Php <?php echo $appfee;?></td>
                                               </tr> 

                                               <tr>
                                                   <td class="border-bottom" colspan=3 style="text-align:left; font-weight: bold; font-size: 15px;">THANK YOU!</td>                                                
                                               </tr>

                                               <tr>
                                                   <td class="border-bottom" colspan=3 style="text-align:left; font-weight: bold; font-size: 15px;"></td>                                                
                                               </tr>

                                               <tr>
                                                   <td class="border-bottom" colspan=3 style="text-align:left; font-weight: bold; font-size: 15px;"></td>                                                
                                               </tr>

                                               <tr>
                                                   <td class="border-bottom" colspan=3 style="text-align:left; font-weight: bold; font-size: 15px;"></td>                                                
                                               </tr>

                                               <tr>
                                                   <td class="border-end" colspan=1 style="text-align:left; font-weight: bold; font-size: 15px;">JOHN WEVIN A. TINGAS</td>   
                                                   <td class="border-bottom" colspan=2 style="text-align:left; font-weight: bold; font-size: 15px;"></td>                                               
                                               </tr>
                                               <tr>
                                                   <td colspan=3 style="text-align:left; font-size: 13px;">AO Designate</td>                                                
                                               </tr>

                                               <tr>
                                                   <td class="border-top" colspan=3 style="text-align:right; font-size: 13px;"> <img src="butuan.jfif" height="60" alt=""></td>                                                
                                               </tr>
                                               <tr>
                                                   <td class="border-top" colspan=3 style="text-align:right; font-size: 13px;"> CAgO.RMS.F.001.REV00</td>                                                
                                               </tr>

                                              

                                           </table>
                                        </div>
                                    </div>
                                </div>
                 
                          
             

<a href="javascript:window.print()" class="btn btn-success waves-effect waves-light me-1"><i class="fa fa-print"></i></a>





      
    



    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">
            <div class="rightbar-title d-flex align-items-center p-3">

                <h5 class="m-0 me-2">Settings</h5>

                <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
            </div>

            <!-- Settings -->
            <hr class="m-0" />

            <div class="p-4">
                <h6 class="mb-3">Layout</h6>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout" id="layout-vertical" value="vertical">
                    <label class="form-check-label" for="layout-vertical">Vertical</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout" id="layout-horizontal" value="horizontal">
                    <label class="form-check-label" for="layout-horizontal">Horizontal</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Layout Mode</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-mode" id="layout-mode-light" value="light">
                    <label class="form-check-label" for="layout-mode-light">Light</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-mode" id="layout-mode-dark" value="dark">
                    <label class="form-check-label" for="layout-mode-dark">Dark</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Layout Width</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-width" id="layout-width-fuild" value="fuild" onchange="document.body.setAttribute('data-layout-size', 'fluid')">
                    <label class="form-check-label" for="layout-width-fuild">Fluid</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-width" id="layout-width-boxed" value="boxed" onchange="document.body.setAttribute('data-layout-size', 'boxed')">
                    <label class="form-check-label" for="layout-width-boxed">Boxed</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Layout Position</h6>

                <h6 class="mt-4 mb-3 pt-2">Topbar Color</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="topbar-color" id="topbar-color-light" value="light" onchange="document.body.setAttribute('data-topbar', 'light')">
                    <label class="form-check-label" for="topbar-color-light">Light</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="topbar-color" id="topbar-color-dark" value="dark" onchange="document.body.setAttribute('data-topbar', 'dark')">
                    <label class="form-check-label" for="topbar-color-dark">Dark</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Size</h6>

                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-default" value="default" onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
                    <label class="form-check-label" for="sidebar-size-default">Default</label>
                </div>
                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-compact" value="compact" onchange="document.body.setAttribute('data-sidebar-size', 'small')">
                    <label class="form-check-label" for="sidebar-size-compact">Compact</label>
                </div>
                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-small" value="small" onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
                    <label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Color</h6>

                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-light" value="light" onchange="document.body.setAttribute('data-sidebar', 'light')">
                    <label class="form-check-label" for="sidebar-color-light">Light</label>
                </div>
                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-dark" value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')">
                    <label class="form-check-label" for="sidebar-color-dark">Dark</label>
                </div>
                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-colored" value="colored" onchange="document.body.setAttribute('data-sidebar', 'colored')">
                    <label class="form-check-label" for="sidebar-color-colored">Colored</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Direction</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-direction" id="layout-direction-ltr" value="ltr">
                    <label class="form-check-label" for="layout-direction-ltr">LTR</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-direction" id="layout-direction-rtl" value="rtl">
                    <label class="form-check-label" for="layout-direction-rtl">RTL</label>
                </div>

            </div>

        </div>
        <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="function/dashboard/assets/libs/jquery/jquery.min.js"></script>
    <script src="function/dashboard/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="function/dashboard/assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="function/dashboard/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="function/dashboard/assets/libs/node-waves/waves.min.js"></script>
    <script src="function/dashboard/assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="function/dashboard/assets/libs/jquery.counterup/jquery.counterup.min.js"></script>

    <!-- apexcharts -->
    <script src="function/dashboard/assets/libs/apexcharts/apexcharts.min.js"></script>

    <script src="function/dashboard/assets/js/pages/dashboard.init.js"></script>

        <!-- jquery step -->
        <script src="function/wizard/assets/libs/jquery-steps/build/jquery.steps.min.js"></script>

        <!-- form wizard init -->
        <script src="function/wizard/assets/js/pages/form-wizard.init.js"></script>


        <script src="function/datatable/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="function/datatable/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="function/datatable/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="function/datatable/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="function/datatable/assets/libs/jszip/jszip.min.js"></script>
    <script src="function/datatable/assets/libs/pdfmake/build/pdfmake.min.js"></script>
    <script src="function/datatable/assets/libs/pdfmake/build/vfs_fonts.js"></script>
    <script src="function/datatable/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="function/datatable/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="function/datatable/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

    <!-- Responsive examples -->
    <script src="function/datatable/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="function/datatable/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

    <!-- Datatable init js -->
    <script src="function/datatable/assets/js/pages/datatables.init.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>




        <!-- Init js -->
        <script src="function/rwdtable/assets/js/pages/table-responsive.init.js"></script>


       <!-- init js -->
       <script src="function/advanceplug/assets/js/pages/form-advanced.init.js"></script>

       <script src="function/advanceplug/assets/libs/select2/js/select2.min.js"></script>


    <!-- parsleyjs -->
    <script src="function/formvalidation/assets/libs/parsleyjs/parsley.min.js"></script>

    <script src="function/formvalidation/assets/js/pages/form-validation.init.js"></script>


    <!-- App js -->
    <script src="function/dashboard/assets/js/app.js"></script>

</body>

</html>