<?php
session_start();

include '../include/connection.php';
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$city = $_POST['city'];
$role = $_POST['role'];

if($_SESSION['adminrole'] == 2)		//Super Admin
{ 
$sql="INSERT INTO users (name,user_name,password,email,gender,city,role)
		VALUES ('$name','$username','$password','$email','$gender','$city','$role')";

$con->exec($sql);

header("location:dashbord.php") ;
}

/*
else
{ 

$sql="INSERT INTO users (name,user_name,password,email,gender,city)
		VALUES ('$name','$username','$password','$email','$gender','$city')";

$con->exec($sql);

header("location:dashbord.php") ;
}*/

header("location:dashbord.php") ;
?>
