<?php
session_start();
include '../include/nav.php';
?>
<form   class ="txt-center form" method="post" action="insrtnote.php">

<input class="form-control input-lg" type="text" name="note_name" placeholder="note Name" >

<textarea class="form-control input-lg"   name="note_txt" placeholder="note Text" ></textarea>  

<input class="form-control input-lg" type="date" name="note_date" placeholder="date">

<input class="form-control input-lg" type="time" name="note_time" placeholder="time" 
	>
  
<select name="status"  class="gender form-control input-lg" >
	<option >عاجله</option>
	<option >غير عاجله</option>
	<option >فوريه </option>

</select>
 


<input class="form-control input-lg btn btn-primary"   type="submit" value="اضافه الملاحظة" >

</form>
<?php
include '../include/footer.php';
?>


<style type="text/css">
	.form input ,
	.form input[type='submit'] ,
	.form textarea,
	.gender 
	{
		 width:350px;  margin: 0 auto; 
		margin-top: 5px;
 	}
	.form textarea{
	 height: 100px; 
	 resize: none;
		}
.form{	
text-align: center;
  /*margin-left: 350px   ;
 margin-right: 350px ;  */
}
</style>
