<?php

//make connection

$hostname = "localhost";
$username = "root";
$password1 = "";
$dbname = "shopmate";



$dbc = mysqli_connect($hostname,$username,$password1,$dbname);
$connection = "SHOPMATE";

if (!$dbc) {
	die("not connected".mysqli_error());
	# code...
}

else{
	//echo "WELCOME TO ".$connection."<br>";
}


?>