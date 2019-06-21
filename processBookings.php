<?php
/**
 * Created by PhpStorm.
 * User: nabesh
 * Date: 6/9/19
 * Time: 3:28 PM
 */
extract($_POST);
include 'connect.php';


$sql="insert into Passangers (`ID`, `First_Name`, `Last_Name`, `Passport_Number`, `Email`, `Phone_Number`, `Origin`, `Destination`) 
values(null ,'$first','$last','$natid','$mail','$telno','$from','$to')";
$result=mysqli_query($db,$sql) or die(mysqli_error($db));
//$count=mysqli_num_rows($result);
if($sql){
    header("location: flight.php");
}
else{
    echo mysqli_sql_exception();
}
