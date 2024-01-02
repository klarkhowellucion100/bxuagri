
<?php
if (isset($_GET['delete']) && isset($_GET['deletefile'])) {
        include_once 'db.inc.php';
       
        $idf = $_GET['delete'];
       
       $query="DELETE FROM services WHERE idf = $idf";
       $result01 = mysqli_query($conn,$query);
       unlink($_GET['deletefile']);
       /*or die ("Cannot delete data from database.". mysqli_error($conn));
       if($fire) echo "Data deleted from database";*/
    
    
       header("location:pendingrequests.php");
    
      // header("Location:courtorderentrytracker.php?deleted=success");
      // exit();
}           

?>

<?php 
     

    include_once 'db.inc.php';
    
    if(isset($_POST['updateadmin'])) {
        $idf= mysqli_real_escape_string($conn,$_POST['idf']);
        $docvalue= mysqli_real_escape_string($conn,$_POST['docvalue']);
        $endt= mysqli_real_escape_string($conn,$_POST['endt']);
        $enat= mysqli_real_escape_string($conn,$_POST['enat']);
        $enpe= mysqli_real_escape_string($conn,$_POST['enpe']);
        $appfee= mysqli_real_escape_string($conn,$_POST['appfee']);
      


        $query = "UPDATE services SET idf= '".$idf."',                
                docvalue= '".$docvalue."',
                endt= '".$endt."',
                enat= '".$enat."',
                appfee= '".$appfee."',
                enpe= '".$enpe."' WHERE idf = '".$idf."'";


        $result = mysqli_query($conn,$query);
       //  echo $result;
       header("location:pendingrequestsupdate.php?update=$idf");

    }
?>


<?php 
     

    include_once 'db.inc.php';
    
    if(isset($_POST['updateemployee'])) {
        $idf= mysqli_real_escape_string($conn,$_POST['idf']);
        $docvalue= mysqli_real_escape_string($conn,$_POST['docvalue']);
        $enda= mysqli_real_escape_string($conn,$_POST['enda']);
        $docstat= mysqli_real_escape_string($conn,$_POST['docstat']);
        $enat= mysqli_real_escape_string($conn,$_POST['enat']);
        $enrm= mysqli_real_escape_string($conn,$_POST['enrm']);
      


        $query = "UPDATE services SET idf= '".$idf."',                
                docvalue= '".$docvalue."',
                enda= '".$enda."',
                docstat= '".$docstat."',
                enat= '".$enat."',
                enrm= '".$enrm."' WHERE idf = '".$idf."'";


        $result = mysqli_query($conn,$query);
       //  echo $result;
       header("location:pendingrequestsupdate.php?update=$idf");

    }
?>