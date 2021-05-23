<?php

session_start();
include("connection1.php");
session_unset();

header('location:admin_login.php');

?>