<?php 

include 'db.inc.php';

extract($_POST);

if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['cnumber']) && isset($_POST['subjects']) && isset($_POST['details'])){

    $sql="insert into contacts (fname,lname,cnumber,subjects,details)
    values ('$fname','$lname','$cnumber','$subjects','$details')";

    $result=mysqli_query($conn,$sql);
}
?>