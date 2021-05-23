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

include("connection1.php");
error_reporting(0);

$id = $_GET['id'];

$query = "DELETE FROM item WHERE id = '$id'";
$data = mysqli_query($dbc,$query);

if ($data) 
{
	echo '<script language="javascript">';
	echo 'alert("DATA DELETED")';
	echo '</script>';
	header('Location: view_item.php');
}
else
{
	echo '<script language="javascript">';
	echo 'alert("DATA NOT DELETED")';
	echo '</script>';
	header('Location: view_item.php');

}

?>