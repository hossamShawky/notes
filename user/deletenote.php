<?php

session_start();
include '../include/connection.php';
 include '../include/nav.php';
$note_id = $_GET['note_id'];
#echo "NOTE : ID => ".$note_id;

$sql = "DELETE FROM notes WHERE note_id=$note_id";
$con->exec($sql);
header("location:profile.php")

?>


<?php include '../include/footer.php'; ?>
 