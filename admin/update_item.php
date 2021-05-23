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
<?php
error_reporting(0);

$_GET['id'];
//$_GET['item_title'];
//$_GET['item_description'];
//$_GET['item_order'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>update</title>
</head>
<body>
<form action="update_item.php" method="get">
	
	<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"><br><br>
	category:<input type="text" name="category"><br><br>
	title:   <input type="text" name="title"><br><br>
	price:   <input type="text" name="price"><br><br>
	DESCRIPTION:<br><textarea name="description" rows="4" cols="50">

	</textarea><br><br>
	reorder threshold:   <input type="text" name="reorder_threshold"><br><br>
	stock:<input type="text" name="stock"><br><br>


	<input type="submit" name="submit" value="submit">


</form>
</body>
</html>

<?php

	if ($_GET['submit']) 
	{
		$id = $_GET['id'];
		$category = $_GET['category'];
		$title = $_GET['title'];
		$price = $_GET['price'];
		$description = $_GET['description'];
		$reorder_threshold = $_GET['reorder_threshold'];
		$stock = $_GET['stock'];

		$query = "UPDATE item SET category = '$category' , title = '$title' , price = '$price' , description = '$description', reorder_threshold = '$reorder_threshold', stock = '$stock' WHERE id = '$id'";
		$data = mysqli_query($dbc,$query);
		if($data)
		{
			echo '<script language="javascript">';
			echo 'alert("RECORD UPDATED.")';
			echo '</script>';
			header('location:view_item.php');
			
		}
		else
		{
			echo "NOT UPDATED";
		}
	}




?>