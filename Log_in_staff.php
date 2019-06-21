<?php
/**
 * Created by PhpStorm.
 * User: nabesh
 * Date: 6/11/19
 * Time: 2:47 PM
 */
?>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/js/bootstrap.js">
    <style>
        form{
            /*align-content: center;*/
            /*align-items: center;*/
            alignment: center;
        }
        .container{
            border: 1px solid green;
            width: auto;
            margin-top:13%;
            margin-left: 30%;
            margin-right: 40%;
        }
        /*#user, #ps, #stid{*/

                    /*}*/
        /*#nm, #pw, #sid{*/
            /*border: 2px solid black;*/
        /*}*/
        input[type=text]{
            width: auto;
        }
        input[type=password]{
            width: auto;
        }
        h4{
            text-align: center;
            text-decoration: #0b2e13;
        }

    </style>
</head>
<body>
<div class="row">

</div>
<div class="container">
    <h4> Enter Details to log in</h4>
    <br>
    <div class="col-md-4 col-md-offset-4">
        <form role="form" action="processStaff.php" method="post">
            <div class="form-group">
         <label id="nm">Username</label>
            <input type="text" class="form-control" name="user" id="muser">
            </div>
                <div class="form-group">
            <label id="pw">Password</label>
            <input type="password" class="form-control" name="pass" id="ps">
                </div>
                    <div class="form-group">
            <label id="sid">Staff ID  </label>
            <input type="text" name="staff" class="form-control" id="stid">
                    </div>
            <button type="submit" class="btn-primary"> Log in</button>
        </form>
    </div>
  </div>
</body>
</html>
