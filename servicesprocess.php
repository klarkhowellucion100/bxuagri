<?php


if (isset($_POST['submit_services']))
{ 
    include 'db.inc.php';
     


    $codef= mysqli_real_escape_string($conn,$_POST['codef']);
    $mmonthf= mysqli_real_escape_string($conn,$_POST['mmonthf']);
    $mdayf= mysqli_real_escape_string($conn,$_POST['mdayf']);
    $myearf= mysqli_real_escape_string($conn,$_POST['myearf']);
    $mtimef= mysqli_real_escape_string($conn,$_POST['mtimef']);
    $mfullf= mysqli_real_escape_string($conn,$_POST['mfullf']);
    $servicesf= mysqli_real_escape_string($conn,$_POST['servicesf']);
    $fnamef= mysqli_real_escape_string($conn,$_POST['fnamef']);
    $genderf= mysqli_real_escape_string($conn,$_POST['genderf']);
    $appofficef= mysqli_real_escape_string($conn,$_POST['appofficef']);
    $agef= mysqli_real_escape_string($conn,$_POST['agef']);
    $cnumberf= mysqli_real_escape_string($conn,$_POST['cnumberf']);
    $eaddrf= mysqli_real_escape_string($conn,$_POST['eaddrf']);
    $apppurokf= mysqli_real_escape_string($conn,$_POST['apppurokf']);
    $brgyf= mysqli_real_escape_string($conn,$_POST['brgyf']);
    $appcomf= mysqli_real_escape_string($conn,$_POST['appcomf']);
    $appareaf= mysqli_real_escape_string($conn,$_POST['appareaf']);
    $appdetf= mysqli_real_escape_string($conn,$_POST['appdetf']);

    $spcf= mysqli_real_escape_string($conn,$_POST['spcf']);
    $spotf= mysqli_real_escape_string($conn,$_POST['spotf']);
   

    $filef = $_FILES['filef'];
   
    $fileNamef = $_FILES ['filef']['name'];
    $fileTmpNamef = $_FILES ['filef']['tmp_name'];
    $fileSizef = $_FILES ['filef']['size'];
    $fileErrorf = $_FILES ['filef']['error'];
    $fileTypef = $_FILES ['filef']['type'];

    $fileExtf = explode('.',$fileNamef);
    $fileActualExtf= strtolower (end($fileExtf));
    
    $allowedf = array ('jpg', 'jpeg', 'png', 'pdf');



    $fileNameNewf = uniqid ('',true).".".$fileActualExtf;
    $fileDestinationf = 'services/'.$fileNameNewf;
    move_uploaded_file ($fileTmpNamef,$fileDestinationf);






     if(empty($fnamef))
    {
        header("Location:farmmech.php");
        exit();

                
                } else {

                    

                    $sql1 = "INSERT INTO services (codef,mmonthf,mdayf,myearf,mtimef,mfullf,servicesf,fnamef,genderf,appofficef,agef,cnumberf,eaddrf,apppurokf,brgyf,appcomf,appareaf,appdetf,filef,spcf,spotf) VALUES ('$codef','$mmonthf','$mdayf','$myearf','$mtimef','$mfullf','$servicesf','$fnamef','$genderf','$appofficef','$agef','$cnumberf','$eaddrf','$apppurokf','$brgyf','$appcomf','$appareaf','$appdetf','$fileNameNewf','$spcf','$spotf');";

                    $result1 = mysqli_query($conn, $sql1);
                    //echo '<script> alert("Successfully Signed up"); window.location.href = "farmmech.php";</script>';
                   header("location:servicesgenerate.php?print=$codef");
                   
                    
        exit();

                    
                    

               } 
      
               
                
            }

?>