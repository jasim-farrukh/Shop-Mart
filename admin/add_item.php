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


error_reporting(0);

	if ($_POST['submit']) 
	{
		$category = $_POST['category'];
		$title = $_POST['title'];
		$price = $_POST['price'];
		$description = $_POST['description'];
		$reorder_threshold = $_POST['reorder_threshold'];
		$stock = $_POST['stock'];
		

		if ($category != "" && $title != "" && $price != "" && $description != ""&& $reorder_threshold != "" && $stock != "") 

		{
			$query = "INSERT INTO item (category,title,price,description,reorder_threshold,stock) VALUES ('$category','$title','$price','$description','$reorder_threshold','$stock')";
			$data = mysqli_query($dbc,$query);
		}

		if ($data) 
		{
			//echo "<br>"."DATA INSERTED";
			echo '<script language="javascript">';
			echo 'alert("DATA INSERTED")';
			echo '</script>';
		}


		else
		{
			echo '<script language="javascript">';
			echo 'alert("PLEASE FILL ALL VALUES")';
			echo '</script>';
		}
	}

?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add_item</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <header>
        <h1 class="text-center">DASHBOARD</h1>
    </header>
    <div>
        <h1 class="text-right" style="font-size:25px;background-color:#0992e0;">ADD Items</h1>
        <div class="col">
            <nav class="navbar navbar-dark navbar-expand-md bg-info">
                <div class="container-fluid"><a class="navbar-brand" href="#" style="background-color:#00b2aa;">My ShopMate</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div
                        class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="add_item.php">ADD Item</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="view_item.php">View Item</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="admin_home.php">Home</a></li>
                        </ul>
                </div>
        </div>
        </nav>
    </div>
    </div>
    <div class="container">
        <form action="add_item.php" method="post">
            <div class="form-group">
                <label for="Add">Category</label>
                <input type="text" class="form-control" name="category">
            </div>
            <div class="form-group">
                <label for="Order">Title</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="form-group">
                <label for="Order">Price</label>
                <input type="text" class="form-control" name="price">
            </div>
            <div class="form-group">
                <label for="Order">Reorder Threshold</label>
                <input type="text" class="form-control" name="reorder_threshold">
            </div>
            <div class="form-group">
                <label for="Order">Stock</label>
                <input type="text" class="form-control" name="stock">
            </div>
            <div class="form-group">
                <label for="comment">Description</label>
                <textarea class="form-control" rows="5" name="description" id="comment"></textarea>
            </div>
                <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>    
    <footer style="font-size:28px;"><a class="text-monospace float-right" href="admin_logout.php" style="color:rgb(103,1,44);width:102px;"><strong>Logout</strong></a></footer>
</body>

</html>