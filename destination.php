<?php
/**
 * Created by PhpStorm.
 * User: nabesh
 * Date: 6/14/19
 * Time: 12:17 PM
 */
extract($_POST);
include 'connect.php';
$sql="SELECT * FROM `Destinations` WHERE  Destination_Code='$code'";
$res=mysqli_query($db,$sql);
$row=mysqli_num_rows($res);
if ($row < 1){
    $result="insert into Destinations (Destination_Code, Destination_Name, Country)
    values(null,'$code','$name','$country')";
    mysqli_query($db,$result);
    echo "Destination added ";
    header("location: destable.php");
}
else{
    echo "<script>
alert('Adding failed')
</script>";
    header("location: destinations.php");
}