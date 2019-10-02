<?php
session_start();
include '../include/connection.php';
 include '../include/nav.php';

$note_id = $_POST['note_id'];
$note_name = $_POST['note_name'];
$note_txt = $_POST['note_txt'];
$note_date = $_POST['note_date'];
$note_time = $_POST['note_time'];
$status = $_POST['status']; 

#echo ($gender);

$sql = "UPDATE notes SET   note_name = '$note_name',note_txt = '$note_txt',note_date='$note_date', note_time = '$note_time', status='$status' WHERE note_id ='$note_id'";

$con->exec($sql);
 header("location:profile.php");

?>

<?php include '../include/footer.php'; 
?>