<?php
session_start();
include '../include/connection.php';
 include '../include/nav.php';
$user_id = $_GET['user_id'];
 #	echo  $user_id;


$sql = $con->prepare("SELECT * FROM users WHERE user_id = $user_id");
$sql->execute();
$row = $sql->fetch();
?>




<form class="form form-horizontal  " action="checkupdate.php" method="post">
<input type="hidden" class="form-control input-lg" name="user_id" value="<?php  echo $row['user_id'] ?>">


<input type="text" class="form-control input-lg" name="name" placeholder="Name" value="<?php echo $row['name']?>">

<input type="text" class="form-control input-lg" name="username" placeholder="User Name" value="<?php echo $row['user_name']?>">

<input type="text" class="form-control input-lg" name="password" placeholder="password" 
	value="<?php echo $row['password']?>">

<input type="text" class="form-control input-lg" name="email" placeholder="email" value="<?php echo $row['email']?>">



 
<select class=" form-control input-lg gender" name="gender">
	<option >Male</option>
	<option >Female</option>

</select>

<input class="form-control input-lg" type="text" name="city" placeholder="CITY" value="<?php echo $row['city']?>">

<!--<input type="text" name="role" placeholder="ROLE" value="<?php echo $row['role']?>"> -->

 <select class="role form-control input-lg"  name="role">
 	<option>0</option>
	<option>1</option>
	<option>2</option>
 </select>


<input class="form-control input-lg btn-primary" type="submit" value="تحديث">
</form>


<?php include '../include/footer.php'; ?>


 


<style type="text/css">
	input[type='text'],
	input[type='password'],
	input[type='submit'],
	input[type='email'],
 	.role,
 	.gender
	{
 width:350px; 
 margin: 0 auto; 
	margin-top: 5px;
	}
.form{/*

	 text-align: center;
 margin-left: 350px   ;
 margin-right: 350px ; */

}
</style>


  
