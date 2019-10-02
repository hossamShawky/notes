<?php
session_start();
$testadmin = $_SESSION['adminrole'];
include '../include/nav.php';
?>
<form method="post" action="insert.php" class="form media-body">

<input  class="form-control input-lg" type='text' name='name' placeholder='الاسم'>
<input  class="form-control input-lg"  type='text' name='username' placeholder='اسم المستخدم'>
<input  class="form-control input-lg" type='password' name='password' placeholder='كلمه المرور'>
<input  class="form-control input-lg" type='email' name='email' placeholder='البريد الالكتروني'>

<select class="form-control input-lg text-center gender"    name="gender" class="gender">
	<option>Male</option>
	<option>Female</option>

</select>

<input   class="form-control input-lg" type='text' name='city' placeholder="المدينه"  >
 <!--<input  class="form-control input-lg"  type='text' name='role' placeholder='role'>  -->

 <?php
if($testadmin == 2) {

	echo "
	<select name='role' class='form-control input-lg role'>
 	<option>0</option>
	<option>1</option>
	<option>2</option>
 	</select>
 ";

}

else {
 	echo "
	<select name='role' class='form-control input-lg role'>
 	<option>0</option>
	<option>1</option>
 	</select>
 ";
 }



 ?>


<input  class="form-control input-lg btn-primary"  type="submit" value="اضافه">

</form>


<?php
include '../include/footer.php';
?>



<style type="text/css">
	input[type='text'],
	input[type='password'],
	input[type='submit'],
	input[type='email'],
	.role,
	.gender 
	{
 width:350px;  margin: 0 auto; 
	}
.form{
	  

}
</style>


  