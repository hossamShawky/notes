<?php
session_start();

 $uid = $_SESSION['userid']; 
include '../include/nav.php';
echo "<div class=''>";


echo "<a href='addnote.php'><button  class='a btn btn-primary'>اضافه ملاحظة</button></a>";echo "<a href='uplodnote.php'><button  class='a btn btn-primary'>رفع ملاحظة </button></a>";

echo "</div>";


if( $uid ){

include '../include/connection.php';


$sql = $con->prepare("SELECT * from users u inner JOIN notes n on  n.user_id = u.user_id 
	WHERE u.user_id = $uid ");
$sql->execute();
$rows = $sql->fetchAll(); 

 #echo " Name ".$rows['name'],"USer NAme ".$rows['user_name'],"password ".$rows['password'],"email".$rows['email'],"gender ".$rows['gender'],"city ".$rows['city'];

}


else
header("Location:../logs/login.php");


?>
 
<table class="table">
	<thead>
		<th>اسم المستخدم</th>
		<!--  <th>البريد</th> -->
		<!-- <th>المدينه</th>   -->
		 <th> محتوي الملاحظة  </th>
		<th>اسم الملاحظه</th>
		<th>تاريخ الملاحظه</th>
		<th>وقت الملاحظه</th>
		<th> حاله الملاحةظ</th>	
		<th> تنزيل </th>				
		<th>تحديث</th>
		<th>حذف</th>
	</thead>
<tbody>
<?php
foreach ($rows as $row) {	
 echo "<tr>";
echo "<td>".$row['user_name']."</td>";
#echo "<td>".$row['email']."</td>";
#echo "<td>".$row['city']."</td>";
echo "<td>". $row['note_txt'] . "</td>";
echo "<td>".$row['note_name']."</td>";
echo "<td>".$row['note_date']."</td>";
echo "<td>".$row['note_time']."</td>";
echo "<td>".$row['status']."</td>";


#echo "<a href='index.php?choice=search&cat=".$cat."&subcat=".$subcat."&srch=".$srch."&page=".$next."'> Next </a



echo "<td>".
"<a class='btn btn-success' href='dawanload.php?note_txt=$row[note_txt]&&note_name=$row[note_name]'><i class='fa fa-arrow-circle-down  hvr-pulse-grow'> 
			</i>تنزيل   </a>"."</td>";
echo "<td>"."<a class='btn btn-primary' href='updatenote.php?note_id=$row[note_id]'>تحديث</a>"."</td>";
echo "<td>"."<a class='btn btn-danger' href='deletenote.php?note_id=$row[note_id]'>حذف</a>"."</td>";
echo "</tr>";


}

?>
</tbody>
	<tfoot>
		<th>اسم المستخدم</th>
		<!-- <th>البريد</th> -->
		 <!-- <th>المدينه</th> -->
		 
		 <th> محتوي الملاحظة  </th>
		<th>اسم الملاحظه</th>
		<th>تاريخ الملاحظه</th>
		<th>وقت الملاحظه</th>
		<th> حاله الملاحةظ</th>
		<th> تنزيل </th>						
		<th>تحديث</th>
		<th>حذف</th>
	</tfoot>

</table>



<?php
include '../include/footer.php';
?>


<style>
    .a{
       width: 45%;
    }
</style>