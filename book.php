<html>
<head>
    <title>Book Flight</title>
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <script src="bootstrap-4.3.1-dist/js/jquery.min.js"></script>
    <!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>-->
    <script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    <style>
        * {
            box-sizing: border-box;
        }
       input[type=text], select{
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 1px;
            resize: vertical;
        }
       .container {
           border-radius: 5px;
           background-color: #f2f2f2;
           padding: 20px;
           margin-bottom: 7%;
       }
       input[type=tel] {
           width: 100%;
           padding: 12px;
           border: 1px solid #ccc;
           border-radius: 4px;
           resize: vertical;
       }

        input[type=search] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

       input[type=email] {
           width: 100%;
           padding: 12px;
           border: 1px solid #ccc;
           border-radius: 4px;
           resize: vertical;
       }
       label {
           padding: 12px 12px 12px 0;
           display: inline-block;
       }
       input[type=submit] {
           background-color: #4CAF50;
           color: white;
           padding: 12px 20px;
           border: none;
           border-radius: 4px;
           cursor: pointer;
           float: right;
       }
       input[type=submit]:hover {
           background-color: #45a049;
       }
        .col-md-8{
            border: 1px solid;
        }
    </style>
</head>
<body>
<?php
include 'navbar.php';
?>
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
    <form action="processBookings.php" method="post">
    <div class="row">
        <div class="col-md-6">
  <label>First Name</label>
    <input type="text" placeholder="Your first name" id="fname" name="first">
        </div>
        <div class="col-md-6">
    <label>Last Name</label>
    <input type="text" placeholder="Your last name" id="lname" name="last" >
        </div>
    </div>
    <div class="row">
    <div class="col-md-6">
        <label>From</label>
        <input type="search" placeholder="Enter Place of departure" id="search" name="dep">
<!--        <select id="country" name="from">-->
<!--            <option value="usa">Select a country</option>-->
<!--            <option value="australia">Australia</option>-->
<!--            <option value="canada">Canada</option>-->
<!--            <option value="usa">USA</option>-->
<!--        </select>-->
    </div>
        <div class="col-md-6">
            <label>Destination</label>
            <input type="search" placeholder="Enter Destination" name="dest">
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label>Enter ID/Passport No.</label>
            <input type="text" id="ips" name="natid">
        </div>
        <div class="col-md-6">
        <label></label>
            <input type="text">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label>Telephone Number</label>
            <label>
                <select>
                    <option value="ke">Kenya</option>
                </select>
            </label>
            <input type="tel" id="mobno" name="telno">
        </div>
             <div class="col-md-6">
                 <label>Email</label>
                 <input type="email" placeholder="e.g yourname@host.co.ke" id="amil" name="mail">
             </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label>Airline</label>
            <input type="search" name="air" placeholder="Search for an airline"
                <?php
                $sql="select Airline_Name from airlines where Airline_Name='$air' ";
                $res=mysqli_query($db,$sql);
                echo $res;
                ?>
            >

//<!--                    <option value="va">Virgin Airlines-->
//<!--                    <option value="ea">Ethiopian Airways</option>-->
//<!--                    <option value="da">Delta Airways</option>-->
//<!--                    <option value="af">Air France</option>-->
//<!--                    <option value="qa">Qatar Airways</option>-->
//<!--                    <option value="ba">British Airways</option>-->
//<!--                    <option value="ta">Turkish Airlines </option>-->
//<!--                    <option value="ac">Air Canada</option>-->
        </div>
        <div class="col-md-6"></div>
    </div>
    <div class="row">
        <div class="col-md-6"></div>
        <div class="col-md-6"></div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <input type="submit" value="Submit">
        </div>
        <div class="col-md-4"
    </div>
</div>

<div class="col-md-2"></div>
</div>
</div>
<br>
<!--        --><?php //include 'footer.php'?>
</body>
</html>