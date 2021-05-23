<?php
session_start();
error_reporting(0);
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
    <title>view_item</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <header>
        <h1 class="text-center">DASHBOARD</h1>
    </header>
    <div>
        <h1 class="text-right" style="font-size:25px;background-color:#0992e0;">View Items</h1>
        <div class="col">
            <nav class="navbar navbar-dark navbar-expand-md bg-info">
                <div class="container-fluid"><a class="navbar-brand" href="#" style="background-color:#00b2aa;">My ShopMate</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div
                        class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation"><a class="nav-link " href="add_item.php">ADD Item</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="view_item.php">View Item</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="admin_home.php">Home</a></li>
                        </ul>
                </div>
        </div>
        </nav>
    </div>
    </div>
    <?php
    $query = "SELECT * FROM item";
	$data = mysqli_query($dbc,$query);
	$total = mysqli_num_rows($data);
	
	if ($total>0) 
	{
    ?>
    <div class="container">           
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Category</th>
        <th>Title</th>
        <th>Price</th>
        <th>Description</th>
        <th>Reorder Threshold</th>
        <th>Stock</th>  
        <th colspan="2">operations</th>
      </tr>
    </thead>
    <tbody>
      <?php

		while ($result = mysqli_fetch_array($data)) 
		{
			echo "<tr>
				<td>".$result['id']."</td>
				<td>".$result['category']."</td>
				<td>".$result['title']."</td>
				<td>".$result['price']."</td>
				<td>".$result['description']."</td>
				<td>".$result['reorder_threshold']."</td>
				<td>".$result['stock']."</td>
				<td><a href='update_item.php?id=$result[id]&category=$result[category]&title=$result[title]&price=$result[price]'>EDIT</a></td>
				<td><a href='delete_item.php?id=$result[id]'>DELETE</a></td>
				</tr>";
		}
	}
    else
	{
		echo "no record found";
	}
		?>
      </tbody>
  </table>
</div>
     
    <footer style="font-size:28px;"><a class="text-monospace float-right" href="admin_logout.php" style="color:rgb(103,1,44);width:102px;"><strong>Logout</strong></a></footer>
</body>

</html>