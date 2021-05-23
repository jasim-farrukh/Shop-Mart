<?php

session_start();
include("connection1.php");

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/ionicons.min.css">
    <link rel="stylesheet" href="css/Login-Form-Dark.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div class="login-dark">
        <h1 class="text-center" style="color:rgb(59,100,142);margin:0px;padding:110px;font-size:51px;">SHOPMATE ADMIN PANEL</h1>
        <form method="post" action="admin_login.php">
            <h2 class="sr-only">Admin Login Page</h2>
            <div class="illustration">
            	<i class="icon ion-ios-locked-outline"></i>
            </div>
            <div class="form-group">
            	<input class="form-control" type="text" name="username" placeholder="Username">
            </div>
            <div class="form-group">
            	<input class="form-control" type="password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
            	<button class="btn btn-primary btn-block" name="submit" type="submit">Log In</button>
            </div>
     <!--       <a href="admin_new_password.php" class="forgot">Forgot your email or password?</a> -->
        </form>
    </div>
</body>

</html>

<?php

	if (isset($_POST['submit']))
	{
			$username = $_POST['username'];
			$password = $_POST['password'];


		if ($username != "" && $password != "") 
		{

			$username = $_POST['username'];
			$password = $_POST['password'];
			
			$query = "SELECT * FROM manager WHERE username ='$username' && password = '$password'";
 			$data = mysqli_query($dbc,$query);
 			$total = mysqli_num_rows($data);
 			//echo $total;

 			if ($total==1) 
 			{
 			   $_SESSION['$user_name'] = $username; 
			   header('location:admin_home.php');
 			}

 			else
 			{
 				//echo "username or password is incorrect";
 				echo '<script language="javascript">';
				echo 'alert("username or password is incorrect")';
				echo '</script>';
 			}
		}

		else
		{
			//echo "PLEASE FILL ALL FIELDS";
			echo '<script language="javascript">';
			echo 'alert("PLEASE FILL ALL FIELDS")';
			echo '</script>';

		}
	}



?>