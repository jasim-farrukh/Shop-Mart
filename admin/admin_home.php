<?php
session_start();
include("connection1.php");
$userprofile = $_SESSION['$user_name'];
if ($userprofile == true) 
{
	
}
else
{
	header('location:admin_login.php');
}
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin_home</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <header>
        <h1 class="text-center">DASHBOARD</h1><img class="rounded" src="img/logo.png" style="width:226px;height:111px;margin:27px;"></header>
    <div style="margin:10px;">
        <h1 class="text-right" style="font-size:25px;background-color:#0992e0;">Wecome Admin</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img class="align-items-center" src="img/catogaries.jpg">
                    <br>
                    <a class="btn btn-primary" role="button" href="category.php">Categories</a>
                </div>
                <div class="col-md-3">
                    <img src="img/items.jpg">
                    <br>
                    <a class="btn btn-primary" role="button" href="item.php">Items</a>
                </div>
             <!--   <div class="col-md-3">
                    <img src="img/disable.png">
                    <br>
                    <a class="btn btn-primary" role="button" href="#">Disable Customers</a>
                </div> -->
                <div class="col-md-3">
                    <img src="img/order.jpg">
                    <br>
                    <a class="btn btn-primary" role="button" href="#">Order Logs</a>
                </div>
            </div>
        </div>
    </div>
    <footer style="font-size:24px;"><a class="text-monospace float-right" href="admin_logout.php" style="color:rgb(103,1,44);width:100px;"><strong>Logout</strong></a></footer>
</body>

</html>