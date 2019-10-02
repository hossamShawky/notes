<?php
session_start();
include '../include/connection.php';
$username = $_POST['username'];
$password = $_POST['password'];
// print_r($_POST);

$sql = $con->prepare("SELECT * FROM users WHERE user_name = ? AND password = ?");

$sql->execute(array($username,$password));
$row = $sql->fetch();
$count = $sql->rowCount();

// print_r($row);
if(($count >0 && $row['role'] == 1) || ($count >0 && $row['role'] == 2)) #Admin
{
$_SESSION['adminid'] = $row['user_id'];	
$_SESSION['adminrole'] = $row['role'];		#session oF Admin

header("location:../admin/dashbord.php");
}

elseif($count >0 && $row['role'] == 0) #USER
{
$_SESSION['userid'] = $row['user_id'];	
#echo $row['user_id'];

	#session oF user
header("location:../user/profile.php");
}

 else
 {
 	 header("location:login.php");
 }
 