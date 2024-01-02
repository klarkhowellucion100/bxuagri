<?php 
     

    include_once 'db.inc.php';
    
    if(isset($_POST['update'])) {
        $id= mysqli_real_escape_string($conn,$_POST['id']);
        $pdocfile= mysqli_real_escape_string($conn,$_POST['pdocfile']);
        

        $file = $_FILES['pdoc'];
   
        $fileName = $_FILES ['pdoc']['name'];
        $fileTmpName = $_FILES ['pdoc']['tmp_name'];
        $fileSize = $_FILES ['pdoc']['size'];
        $fileError = $_FILES ['pdoc']['error'];
        $fileType = $_FILES ['pdoc']['type'];
    
        $fileExt = explode('.',$fileName);
        $fileActualExt = strtolower (end($fileExt));
        
        $allowed = array ('jpg', 'jpeg', 'png', 'pdf');
    
    
    
        $fileNameNew = uniqid ('',true).".".$fileActualExt;
        $fileDestination = 'pds/'.$fileNameNew;
        move_uploaded_file ($fileTmpName,$fileDestination);
       


        $query = "UPDATE usertable SET id= '".$id."',                
                    pdoc= '".$fileNameNew."' WHERE id = '".$id."'";


        $result = mysqli_query($conn,$query);
        unlink('pds/'.$pdocfile);
       //  echo $result;
       echo '<script> alert("You will be logged-out from your device to proceed with the updating of your account. Kindly sign-in again."); window.location.href = "login.php";</script>';

    }

    
?>


