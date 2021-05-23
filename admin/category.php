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
    <title>category</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <header>
        <h1 class="text-center">DASHBOARD</h1><img class="rounded" src="img/logo.png" style="width:226px;height:111px;margin:27px;"></header>
    <div>
        <h1 class="text-right" style="font-size:25px;background-color:#0992e0;">Categories</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="img/Addcategory.png">
                    <br>
                    <a class="btn btn-primary btn-block" role="button" href="add_category.php">ADD Category</a>
                </div>
                <div class="col-md-4">
                    <img src="img/Viewcategory.png">
                    <br>
                    <a class="btn btn-primary btn-block" role="button" href="view_category.php">VIEW Category</a>
                </div>
                <div class="col-md-4">
                    <img src="img/homecategory.jpg">
                    <br>
                    <a class="btn btn-primary btn-block" role="button" href="admin_home.php">HOME</a>
                </div>
            </div>
        </div>
    </div>
    <footer style="font-size:28px;"><a class="text-monospace float-right" href="admin_logout.php" style="color:rgb(103,1,44);width:102px;"><strong>Logout</strong></a></footer>
</body>

</html>