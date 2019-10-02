<?php
session_start();
include '../include/nav.php';
if(isset($_SESSION['adminid']))
{

include '../include/connection.php';

#echo "HELLO : ".$_SESSION['adminid'];

echo "<a href='regist.php'><button class='btn btn-primary'>اضافه عضو/ادمن</button></a>";

$sql = $con->prepare("SELECT * FROM users");
$sql->execute();
$rows = $sql->fetchAll();
$count = $sql->rowCount();
if($count>0 && $_SESSION['adminrole'] == 2){			#Boss Admin
echo "
<table class='table'>
<thead>
	<th>Name</th>
	<th>User Name</th>
	<th>E-mail</th>
	<th>gender</th>
	<th>city</th>
	<th>role</th>
	<th>تحديث</th>
	<th>حذف</th>

</thead>

<tbody> ";
foreach($rows as $row)
{

echo "<tr>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['user_name']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['gender']."</td>";
echo "<td>".$row['city']."</td>";
echo "<td>".$row['role']."</td>";
echo "<td>"."<a href='updateuser.php?user_id=$row[user_id]'>تحديث</a>"."</td>";
echo "<td>"."<a href='deleteuser.php?id=$row[user_id]'>حذف</a>"."</td></tr>"; 
}
echo "</tbody>";
echo "
<tfoot>
	<th>Name</th>
	<th>User Name</th>
	<th>E-mail</th>
	<th>gender</th>
	<th>city</th>
	<th>role</th>
	<th>تحديث</th>
	<th>حذف</th>

</tfoot>
</table>";



}
elseif($count>0 && $_SESSION['adminrole'] == 1){		#Normal Admin
echo "
<table class='table'>
<thead>
	<th>Name</th>
	<th>User Name</th>
	<th>E-mail</th>
	<th>gender</th>
	<th>city</th>
	<th>role</th>

</thead>

<tbody> ";
foreach($rows as $row)
{

echo "<tr>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['user_name']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['gender']."</td>";
echo "<td>".$row['city']."</td>";
echo "<td>".$row['role']."</td>";
}
echo "</tbody>";
echo "
<tfoot>
	<th>Name</th>
	<th>User Name</th>
	<th>E-mail</th>
	<th>gender</th>
	<th>city</th>
	<th>role</th>

</tfoot>
</table>";
 

}

else
{
	echo "<h2 style='color:red'>NO Data Found!</h2>";
}

}
?>

<?php
include '../include/footer.php';
?>
<style>
    .btn{
       width: 100%
    }
</style>