<?php

session_start();
include '../include/connection.php';
 include '../include/nav.php';
$note_id = $_GET['note_id'];
 #	echo  $user_id;


$sql = $con->prepare("SELECT * FROM notes WHERE note_id = $note_id");
$sql->execute();
$row = $sql->fetch();
?>


<form class="form-horizontal form" action="checkupdate.php" method="post">
<input type="hidden" name="note_id" value="<?php  echo $row['note_id'] ?>">


<input type="text" name="note_name" class="form-control input-lg" value="<?php echo $row['note_name']?>">

<textarea class="form-control input-lg"   name="note_txt" class="form-control input-lg" value="<?php echo $row['note_txt']?>"> </textarea>  

<input type="date" name="note_date" class="form-control input-lg" value="<?php echo $row['note_date']?>">

<input type="time" name="note_time" class="form-control input-lg"
	value="<?php echo $row['note_time']?>">
 

 
<select name="status" class="status form-control input-lg" >
	<option >عاجله</option>
	<option >غير عاجله</option>
	<option >فوريه </option>

</select>
 

<input type="submit" value="Update" class="form-control input-lg btn-primary" >
</form>


<?php include '../include/footer.php'; ?>



<style type="text/css">
	.form input, 
	.form textarea,
	.gender,
	.status
	{
 width:350px;  margin: 0 auto; 
		margin-top: 5px;
 	}
	.form textarea{
	 height: 100px; 
	 resize: none;
		}
.form{	
 /*text-align: center;
 margin-left: 350px   ;
 margin-right: 350px ; */ 
}
</style>
