
<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: nabesh-->
<!-- * Date: 6/14/19-->
<!-- * Time: 12:33 AM-->
<!-- */-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Destinations</title>
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css"/>
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/js/bootstrap.js">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/js/bootstrap.min.js">

</head>
<body>
<?php
include 'connect.php';

$sql= "select count(*) from Destinations";

$result = mysqli_query($db ,$sql);
$row = mysqli_fetch_row($result);
$number = $row[0];
echo "<h3> We have $number Destinations</h3>"

?>

<div class="container">

    <table class="table" id="example">
        <thead>
        <tr>
            <th>ID</th>
            <th>Destination Code</th>
            <th>Destination Name</th>
            <th>Country</th>
        </tr>
        <tbody>
        <?php
        //        $db=mysqli_connect("localhost","root","","chama_omega");
        $sql="select * from Destinations";
        $result=mysqli_query($db,$sql);
        while($row =mysqli_fetch_row($result))
        {
            echo"<tr>";
            echo"<td>$row[0]</td>";
            echo"<td>$row[1]</td>";
            echo"<td>$row[2]</td>";
            echo"<td>$row[3]</td>";
            echo"</tr>";
        }
        ?>

        </tbody>
        </thead>


    </table>

</div>

<link rel="stylesheet" href="bootstrap-4.3.1-dist/css/dataTables.css"/>
<script src="bootstrap-4.3.1-dist/js/jquery.min.js"></script>
<script src="bootstrap-4.3.1-dist/js/dataTables.js"></script>
<script>
    $("#example").DataTable();
</script>
</body>
</html>