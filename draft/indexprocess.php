<?php
session_start();

include 'db.inc.php';

if(isset($_POST['signin']))


{
    include 'db.inc.php';

    $uname =mysqli_real_escape_string($conn,$_POST['uname']);
    $pword = mysqli_real_escape_string($conn,$_POST['pword']);

    if(empty($uname) || empty($pword))
{
   

    echo '<script> alert ("Please Complete Fields"); window.location.href = "index.php";</script>';
}else {

    $query = "SELECT * FROM usertable WHERE uname='$uname'";
    $result = mysqli_query ($conn,$query);

    if($row = mysqli_fetch_array($result)) {

       


            if($row['uname'] == $uname && $row['pword'] == $pword && $row['regval'] == 'Accept') {


               
                   $_SESSION['uname'] = $uname;  
                   $_SESSION['id'] = $row['id'];                    
                   $_SESSION['type'] = $row['type'];       
                   $_SESSION['code'] = $row['code'];            
                    $_SESSION['fname'] = $row['fname'];
                    
                    $_SESSION['mname'] = $row['mname'];
                    $_SESSION['lname'] = $row['lname'];
                    $_SESSION['position'] = $row['position'];
                    $_SESSION['office'] = $row['office'];
             
                    $_SESSION['ename'] = $row['ename'];
                    $_SESSION['bday'] = $row['bday'];
                    $_SESSION['age'] = $row['age'];

                    $_SESSION['gender'] = $row['gender'];
                    $_SESSION['cnumber'] = $row['cnumber'];
                    $_SESSION['eaddr'] = $row['eaddr'];
                    $_SESSION['pfile'] = $row['pfile'];
                    $_SESSION['pdoc'] = $row['pdoc'];
                    $_SESSION['type'] = $row['type'];
                    $_SESSION['regval'] = $row['regval'];
                


       

                  // echo '<script> alert ("Success"), header "location:header2b.php";</script>';
                    //echo '<script> alert("Success"); window.location.href = "header2b.php";</script>';
echo '<script> alert("Successfully Logged-in"); window.location.href = "dashboard.php";</script>';
               //    header("location:header2b.php");
                
            } else {

                
          
               echo '<script> alert ("Incorrect Username or Password"); window.location.href = "index.php";</script>';
            }


    }

    else {

        
        echo '<script> alert ("Not Registered"); window.location.href = "index.php";</script>';
    }

}
}







    

if (isset($_POST['submit']))
{ 
    include 'db.inc.php';
     


    $code= mysqli_real_escape_string($conn,$_POST['code']);
    $fname= mysqli_real_escape_string($conn,$_POST['fname']);
    $mname= mysqli_real_escape_string($conn,$_POST['mname']);
    $lname= mysqli_real_escape_string($conn,$_POST['lname']);
    $ename= mysqli_real_escape_string($conn,$_POST['ename']);
    $position= mysqli_real_escape_string($conn,$_POST['position']);
    $office= mysqli_real_escape_string($conn,$_POST['office']);
    $bday= mysqli_real_escape_string($conn,$_POST['bday']);
    $gender= mysqli_real_escape_string($conn,$_POST['gender']);
    $age= mysqli_real_escape_string($conn,$_POST['age']);
    $cnumber= mysqli_real_escape_string($conn,$_POST['cnumber']);
    $eaddr= mysqli_real_escape_string($conn,$_POST['eaddr']);
    $uname= mysqli_real_escape_string($conn,$_POST['uname']);
    $pword= mysqli_real_escape_string($conn,$_POST['pword']);

  

    

   

    
   
   

    //update


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

//start file2
$file = $_FILES['pfile'];
   
    $fileName = $_FILES ['pfile']['name'];
    $fileTmpName = $_FILES ['pfile']['tmp_name'];
    $fileSize = $_FILES ['pfile']['size'];
    $fileError = $_FILES ['pfile']['error'];
    $fileType = $_FILES ['pfile']['type'];

    $fileExt = explode('.',$fileName);
    $fileActualExt = strtolower (end($fileExt));
    
    $allowed = array ('jpg', 'jpeg', 'png', 'pdf');



    $fileNameNew1 = uniqid ('',true).".".$fileActualExt;
    $fileDestination = 'users/'.$fileNameNew1;
    move_uploaded_file ($fileTmpName,$fileDestination);
    //end file 2
//end uploading of file




     if(empty($uname))
    {
        header("Location:index.php?signup=empty");
        exit();

                
                } else {

                    

                    $sql = "INSERT INTO usertable (code,fname,mname,lname,ename,position,office,bday,gender,age,cnumber,eaddr,uname,pword,pdoc,pfile) VALUES ('$code','$fname','$mname','$lname','$ename','$position','$office','$bday','$gender','$age','$cnumber','$eaddr','$uname','$pword','$fileNameNew','$fileNameNew1');";

                    $result = mysqli_query($conn, $sql);
                    echo '<script> alert("Successfully Signed up"); window.location.href = "index.php";</script>';

                    
        exit();

                    
                    

               } 
      
                if (in_array($fileActualExt,$allowed)){
                    if($fileError === 0){
                        if($fileSize<1500000){
                
                            $fileNameNew = uniqid ('',true).".".$fileActualExt;
                            $fileDestination = 'users/'.$fileNameNew;
                            move_uploaded_file ($fileTmpName,$fileDestination);
                                header ("Location: login.php?uploadsuccess");
                
                
                        }//else {
                          //  echo "Your file is too BIG!";
                        //}
                    } //else {echo "There was an error uploading your file";
                
                  }//else {
             
                
            }

?>