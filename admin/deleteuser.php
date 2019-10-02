<?php
include '../include/connection.php';
 $id = $_GET['id'];
 echo $id;
$sql = " DELETE FROM users WHERE user_id = $id";
$con->exec($sql);
#echo "DELETED";
header("location:dashbord.php") ;

?>