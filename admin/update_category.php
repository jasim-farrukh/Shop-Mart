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

$_GET['category_id'];
//$_GET['category_title'];
//$_GET['category_description'];
//$_GET['category_order'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>update</title>
</head>
<body>
<form action="update_category.php" method="get">
	
	<input type="hidden" name="category_id" value="<?php echo $_GET['category_id']; ?>"><br><br>
	CATEGORY TITLE:<input type="text" name="category_title" value=""><br><br>
	CATEGORY DESCRIPTION:<input type="text" name="category_description" value=""><br><br>
	CATEGORY ORDER:<input type="text" name="category_order" value=""><br><br>

	<input type="submit" name="submit" value="submit">


</form>
</body>
</html>

<?php

	if ($_GET['submit']) 
	{
		$category_id = $_GET['category_id'];
		$category_title = $_GET['category_title'];
		$category_description = $_GET['category_description'];
		$category_order = $_GET['category_order'];

		$query = "UPDATE category SET category_title = '$category_title' , category_description = '$category_description' , category_order = '$category_order' WHERE category_id = '$category_id'";
		$data = mysqli_query($dbc,$query);
		if($data)
		{
			echo '<script language="javascript">';
			echo 'alert("RECORD UPDATED.")';
			echo '</script>';
			header('location:view_category.php');
			
		}
		else
		{
			echo "NOT UPDATED";
		}
	}




?>