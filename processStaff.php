<?php
/**
 * Created by PhpStorm.
 * User: nabesh
 * Date: 6/11/19
 * Time: 3:06 PM
 */
extract($_POST);
include 'connect.php';
$sql = "SELECT * FROM `staff` WHERE Name='$user' and Password='$pass'";
$result=mysqli_query($db,$sql) or die(mysqli_error($db));
$count=mysqli_num_row($result);

if($count==1){
    echo "Success";
    //success
//    $row = mysqli_fetch_row($result);
//    $user = $row[1];
//    session_start();
//    $_SESSION['Name']= $user;
//    $_SESSION['Staff_ID']= $stid;
//    /*echo json_encode($password);*/
//
//    header("location:book.php");
}
else
{
    echo "Wrong username or password";
}
