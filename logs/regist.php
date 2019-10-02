
<?php
session_start();
include '../include/nav.php'; 
?>
<form method="post" action="insert.php" class="form">
<input type="hidden" class="form-control input-lg" name="user_id">
<input class="form-control input-lg text-center" type='text' name='name' placeholder='الاسم'><br>
<input class="form-control input-lg text-center"  type='text' name='username' placeholder='اسم المستخدم'><br>
<input  class="form-control input-lg text-center"  type='password' name='password' placeholder='كلمه المرور'><br>
<input  class="form-control input-lg text-center"  type='email' name='email' placeholder='البريد الالكتروني'><br>

<select  class="form-control input-lg text-center gender"   name="gender">
	<option>Male</option>
	<option>Female</option>

</select>
<br>
<input  class="form-control input-lg text-center"  type='text' name='city' placeholder="المدينه"  > 
<br>
<input  class="form-control input-lg text-center btn-primary"  type="submit" value="اضافه">

</form>


<?php

include '../include/footer.php';
?>

<style type="text/css">
	input[type='text'],
	input[type='password'],
	input[type='submit'],
	input[type='email'],
	.gender 
	{
width:350px;  margin: 0 auto; 
		margin-top: 5px;
}
	@media {

	}
.form{
	  
	}
</style>

