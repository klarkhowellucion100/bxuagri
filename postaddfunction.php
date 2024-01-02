<?php
    

if (isset($_POST['addpost']))
{ 
    include 'db.inc.php';
     


    $code= mysqli_real_escape_string($conn,$_POST['code']);
    $mmonth= mysqli_real_escape_string($conn,$_POST['mmonth']);
    $mday= mysqli_real_escape_string($conn,$_POST['mday']);
    $myear= mysqli_real_escape_string($conn,$_POST['myear']);
    $mtime= mysqli_real_escape_string($conn,$_POST['mtime']);
    $mfull= mysqli_real_escape_string($conn,$_POST['mfull']);
    $fname= mysqli_real_escape_string($conn,$_POST['fname']);
    $mname= mysqli_real_escape_string($conn,$_POST['mname']);
    $lname= mysqli_real_escape_string($conn,$_POST['lname']);
    $ename= mysqli_real_escape_string($conn,$_POST['ename']);
    $ppic= mysqli_real_escape_string($conn,$_POST['ppic']);
    $ppos= mysqli_real_escape_string($conn,$_POST['ppos']);
    $poffice= mysqli_real_escape_string($conn,$_POST['poffice']);
    $ptitle= mysqli_real_escape_string($conn,$_POST['ptitle']);
    $pcont= mysqli_real_escape_string($conn,$_POST['pcont']);


    //update


    $file = $_FILES['file'];
   
    $fileName = $_FILES ['file']['name'];
    $fileTmpName = $_FILES ['file']['tmp_name'];
    $fileSize = $_FILES ['file']['size'];
    $fileError = $_FILES ['file']['error'];
    $fileType = $_FILES ['file']['type'];

    $fileExt = explode('.',$fileName);
    $fileActualExt = strtolower (end($fileExt));
    
    $allowed = array ('jpg', 'jpeg', 'png', 'pdf');



    $fileNameNew = uniqid ('',true).".".$fileActualExt;
    $fileDestination = 'post/'.$fileNameNew;
    move_uploaded_file ($fileTmpName,$fileDestination);






     if(empty($ptitle))
    {
        header("Location:postadd.php?title=empty");
        exit();

                
                } else {

                    

                    $sql = "INSERT INTO posts (code,mmonth,mday,myear,mtime,mfull,fname,mname,lname,ename,ppic,ppos,poffice,ptitle,pcont,file) VALUES ('$code','$mmonth','$mday','$myear','$mtime','$mfull','$fname','$mname','$lname','$ename','$ppic','$ppos','$poffice','$ptitle','$pcont','$fileNameNew');";

                    $result = mysqli_query($conn, $sql);
                    echo '<script> alert("Posted Successfully"); window.location.href = "postadd.php";</script>';

                    
        exit();

                    
                    

               } 
      
                if (in_array($fileActualExt,$allowed)){
                    if($fileError === 0){
                        if($fileSize<1500000){
                
                            $fileNameNew = uniqid ('',true).".".$fileActualExt;
                            $fileDestination = 'post/'.$fileNameNew;
                            move_uploaded_file ($fileTmpName,$fileDestination);
                                header ("Location: postadd.php?uploadsuccess");
                
                
                        }//else {
                          //  echo "Your file is too BIG!";
                        //}
                    } //else {echo "There was an error uploading your file";
                
                  }//else {
             
                
            }

?>