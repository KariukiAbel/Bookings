<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: nabesh-->
<!-- * Date: 6/14/19-->
<!-- * Time: 12:19 AM-->
<!-- */-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Airlines</title>
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css"/>
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/js/bootstrap.js">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
<style>
    #col{
        border-style: groove;
        margin-top: 7%;
    }
</style>
 </head>
<body>
<?php include 'navbar.php' ?>
<div class="container">
    <div class="row">
        <div class="col-md-4 "></div>
    <div class="col-md-4" id="col">
        <h2 class="text-center">Enter Airline Details</h2>
        <form role="form" method="post" action="save.php">
            <div class="form-group">
                <label for="email">Enter Airline Name</label>
                <input type="text" class="form-control" name="names">
            </div>
            <div class="form-group">
                <label for="pwd">Enter Airline Chatter Number</label>
                <input type="text" class="form-control" name="chat">
            </div>
             <button type="submit" class="btn btn-info">Register Airline</button>
            <br>
            <br>
        </form>
    </div>
        <div class="col-md-4"></div>
    </div>
</div>
</body>
</html>