<?php
session_start();
include '../include/nav.php';
?>
<form method="post" action="insert.php">

<input type='text' name='name' placeholder='الاسم'>
<input type='text' name='username' placeholder='اسم المستخدم'>
<input type='password' name='password' placeholder='كلمه المرور'>
<input type='email' name='email' placeholder='البريد الالكتروني'>

<select name="gender">
	<option>Male</option>
	<option>Female</option>

</select>

<input type='text' name='city' placeholder="المدينه"  > 


<input type="submit" value="اضافه">

</form>







<?php
include '../include/footer.php';
?>