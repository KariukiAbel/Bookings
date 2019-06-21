<html>
<header>
    <title></title>
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css"/>
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/js/bootstrap.js">
</header>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 ">
            <form>
                <h2 class="text-center">Enter Destinations</h2>
                <form role="form" method="post" action="destination.php">
                    <div class="form-group">
                        <label for="email">Destination Code</label>
                        <input type="text" class="form-control" name="code">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Destination Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Destination Country</label>
                        <input type="text" class="form-control" name="country">
                    </div>
                    <button type="submit" class="btn btn-danger btn-block">Register Destination</button>
            </form>
        </div>
    </div>
    <div class="col-md-4"></div>
</div>
</body>
</html>