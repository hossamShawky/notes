<?php
include '../include/connection.php';
 include '../include/nav.php';

$id = $_POST['user_id'];
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$city = $_POST['city'];
$role = $_POST['role'];

#echo ($gender);

$sql = "UPDATE users SET   name = '$name',user_name='$username', password = '$password', email='$email',gender='$gender',city='$city',role='$role' WHERE user_id ='$id'";

$con->exec($sql);
 header("location:dashbord.php");

?>

<?php include '../include/footer.php'; 
?>