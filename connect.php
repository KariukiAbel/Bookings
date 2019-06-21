<?php
/**
 * Created by PhpStorm.
 * User: nabesh
 * Date: 6/8/19
 * Time: 10:42 PM
 */
$db=mysqli_connect("127.0.0.1","root","","Flight_System");
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}