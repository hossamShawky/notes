<?php
session_start();

include '../include/connection.php';
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$city = $_POST['city']; 

 #print_r($_POST);
  
$sql="INSERT INTO users (name,user_name,password,email,gender,city)
		VALUES ('$name','$username','$password','$email','$gender','$city')";

$con->exec($sql);
  header("location:../index.php") ;


 ?>