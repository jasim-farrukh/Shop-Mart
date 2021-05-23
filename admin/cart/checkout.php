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
<p>card no.</p>
<form action="done.php" method="post">
<p><input type="number" name="card_no"> </p>
<p><input type="submit" name="submit" value="submit"> </p>
</form>
</body>
</html>