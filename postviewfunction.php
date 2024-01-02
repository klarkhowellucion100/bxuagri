


<?php 
     

     include_once 'db.inc.php';
     
     if(isset($_POST['update'])) {
         $id= mysqli_real_escape_string($conn,$_POST['id']);
         $pdate= mysqli_real_escape_string($conn,$_POST['pdate']);
         $pstat= mysqli_real_escape_string($conn,$_POST['pstat']);
         $prem= mysqli_real_escape_string($conn,$_POST['prem']);
       
 
 
         $query = "UPDATE posts SET id= '".$id."',                
         pdate= '".$pdate."',
         prem= '".$prem."',
         pstat= '".$pstat."' WHERE id = '".$id."'";
 
 
         $result = mysqli_query($conn,$query);
        //  echo $result;
        header("location:postviewupdate.php?update=$id");
 
     }
 ?>
 
 
 
 <?php
if (isset($_GET['delete']) && isset($_GET['deletefile'])) {
        include_once 'db.inc.php';
       
        $id = $_GET['delete'];
       
       $query="DELETE FROM posts WHERE id = $id";
       $result01 = mysqli_query($conn,$query);
       unlink($_GET['deletefile']);
       /*or die ("Cannot delete data from database.". mysqli_error($conn));
       if($fire) echo "Data deleted from database";*/
    
    
       header("location:postview.php");
    
      // header("Location:courtorderentrytracker.php?deleted=success");
      // exit();

      


            }

    
    
       
    
      // header("Location:courtorderentrytracker.php?deleted=success");
      // exit();
    





?>