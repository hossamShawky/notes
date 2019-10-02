<?php
session_start();
include '../include/connection.php';
 include '../include/nav.php';

$user_id = $_SESSION['userid'];

$note_name = $_POST['note_name'];
$note_txt = $_POST['note_txt'];
$note_date = $_POST['note_date'];
$note_time = $_POST['note_time'];
$status = $_POST['status']; 
#echo $user_id;
#print_r($_POST);

	$sql = "INSERT INTO notes (note_name,note_txt,note_date, note_time,status,user_id) 
			VALUES ('$note_name','$note_txt','$note_date','$note_time','$status',$user_id)";

$con->exec($sql);
 header("location:profile.php");

?>

<?php include '../include/footer.php'; 
?>