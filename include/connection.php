<?php

$dns="mysql:host=localhost;dbname=mynotes";
$username="root";
$password="";


try{
	$con = new PDO($dns,$username,$password);
 	 $q1="SET NAMES utf8";
 	 $q2="character SET utf8";
 	  $con->exec($q1);
 	  $con->exec($q2);
 		 #echo "Correctly Connected";
}
catch (PDOException $e){
  echo "Correctly`t Connected";
 echo $e->getMessage();
}



?>

