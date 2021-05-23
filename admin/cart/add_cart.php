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
	echo '<script language="javascript">';
	echo 'alert("PLEASE SIGN UP TO SHOP WITH US")';
	echo '</script>';
	header('location:user_login.php');
}

?>
<style>
td
{
	padding: 15px;
}
</style>


<!DOCTYPE html>
<html>
<head>
	<title>prod page</title>
</head>
<body>
<h1 style="text-align: center; color:red">DASHBOARD</h1><br>
<p style="text-align: center;"><a href="user_logout.php">logout</a></p>
<hr>
<ul>
<!--
	<li><a href="add_item.php">add item</a></li>
	<li><a href="view_item.php">view item</a></li>
	<li><a href="admin_home.php">home</a></li>
-->
	<li><a href="prod.php">prod</a></li>

</ul>
</body>
</html>

<?php


$id = $_GET['id'];
$category = $_GET['category'];
$title = $_GET['title'];
$price = $_GET['price'];
$stock = $_GET['stock'];
	

	$query = "INSERT INTO temp (id,category,title,price,stock) VALUES ('$id','$category','$title','$price','$stock')";
			$data = mysqli_query($dbc,$query);



	$query = "SELECT * FROM temp";
	$data = mysqli_query($dbc,$query);
	$total = mysqli_num_rows($data);

	
	
	if ($total>0) 
	{
		?>

		<table>
			<tr>
				<th>id</th>
				<th>category</th>
				<th>title</th>
				<th>price</th>
				<th>stock</th>
				<th>operation</th>
				
			</tr>

			<?php

		while ($result = mysqli_fetch_array($data)) 
		{
			echo "<tr>
				<td>".$result['id']."</td>
				<td>".$result['category']."</td>
				<td>".$result['title']."</td>
				<td>".$result['price']."</td>
				<td>".$result['stock']."</td>
				<td><a href='delete_cart.php?id=$result[id]'>DELETE</a></td>
				</tr>";
				
				
			
			//$temp = $result['stock'];
			//echo $temp;
		}
	}

			
	else
	{
		echo "no record found";
	}


		?>

	</table>

	<?php

	
	
	$query = "SELECT * FROM temp";
	$data = mysqli_query($dbc,$query);
	$sum =0;
	while ($num = mysqli_fetch_array ($data)) {
    $sum += $num['price'];
}
	echo "<br>"."total price = ".$sum;

	?>

	<a href="checkout.php">checkout</a>
