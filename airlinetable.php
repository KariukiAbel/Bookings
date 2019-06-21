
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
    <title>Airlines</title>
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css"/>
    <style>

    </style>
</head>
<body>
<?php
include 'connect.php';

$sql= "select count(*) from airlines";

$result = mysqli_query($db ,$sql);
$row = mysqli_fetch_row($result);
$number = $row[0];
echo "<h2> We have $number Airlines</h2>"

?>

<div class="container">

    <table class="table" id="example">
        <thead>
        <tr>
            <th>ID</th>
            <th>AIRLINE NAME</th>
            <th>AIRLINE CHATTER NUMBER</th>
            <th>Date of Registration</th>
        </tr>
        <tbody>
        <?php
//        $db=mysqli_connect("localhost","root","","chama_omega");
        $sql="select * from airlines";
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