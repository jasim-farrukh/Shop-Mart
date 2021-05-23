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
    <title>view_category</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <header>
        <h1 class="text-center">DASHBOARD</h1>
    </header>
    <div>
        <h1 class="text-right" style="font-size:25px;background-color:#0992e0;">View Category</h1>
        <div class="col">
            <nav class="navbar navbar-dark navbar-expand-md bg-info">
                <div class="container-fluid"><a class="navbar-brand" href="#" style="background-color:#00b2aa;">My ShopMate</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div
                        class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation"><a class="nav-link" href="add_category.php">ADD Category</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="view_category.php">View Category</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="admin_home.php">Home</a></li>
                        </ul>
                </div>
        </div>
        </nav>
    </div>
    </div>
<?php
    $query = "SELECT * FROM category";
	$data = mysqli_query($dbc,$query);
	$total = mysqli_num_rows($data);
	if ($total>0) 
	{
?>

<div class="container">           
  <table class="table table-striped">
    <thead>
      <tr>
        <th>category_id</th>
        <th>category_title</th>
        <th>category_description</th>
        <th>category_order</th>
        <th colspan="2">operations</th>
      </tr>
    </thead>
    <tbody>
      <?php 
        while ($result = mysqli_fetch_array($data)){
			echo "<tr>
				<td>".$result['category_id']."</td>
				<td>".$result['category_title']."</td>
				<td>".$result['category_description']."</td>
				<td>".$result['category_order']."</td>
				<td><a href='update_category.php?category_id=$result[category_id]&category_title=$result[category_title]&category_description=$result[category_description]&category_order=$result[category_order]'>EDIT</a></td>
				<td><a href='delete_category.php?category_id=$result[category_id]'>DELETE</a></td>
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