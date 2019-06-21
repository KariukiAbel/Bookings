<?php
/**
 * Created by PhpStorm.
 * User: nabesh
 * Date: 6/14/19
 * Time: 12:22 AM
 */
extract($_POST);
include 'connect.php';
$sql="select * from airlines where Airline_Chatter_Number='$chat'";
$result=mysqli_query($db,$sql) or die (mysqli_error($db));
$count=mysqli_num_rows($result);

if ($count < 1){
    $sql1="insert into airlines (`ID`, `Airline_Name`, `Airline_Chatter_Number`) values (null,'$names',$chat)";
    $res=mysqli_query($db,$sql1) or die(mysqli_error($db));
    echo "<script>
alert('Airline successfully added!!')</script>";
    header("location: airlinetable.php");
}
else{
    echo "<script>
alert('Airline already exists..!!')
</script>";
}