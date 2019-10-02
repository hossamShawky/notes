<?php
session_start();
include '../include/nav.php';

$note_txt = $_GET['note_txt'];
$note_name = $_GET['note_name'];
#echo 'Note Data'.$note_txt."<br>";  
#echo 'Note Name'.$note_name;
 
$folder =  'myNotes';
$notename =$folder."/".$note_name.".txt";

if(is_dir($folder)){

	if(file_exists($notename)) {
	$notename =$folder."/".$note_name."1.txt";
	file_put_contents($notename, $note_txt);
	header("location:profile.php");
		echo "<script>alert('Saved');</script>";
	}
	else{

	file_put_contents($notename, $note_txt);
	
	header("location:profile.php");
		echo "<script>alert('Saved');</script>";
	}
}

else
{
	mkdir($folder);
	if(file_exists($notename)) {
	$notename =$folder."/".$note_name."1.txt";
	file_put_contents($notename, $note_txt);
	header("location:profile.php");
		echo "<script>alert('Saved');</script>";
	}
	else{

	file_put_contents($notename, $note_txt);
	header("location:profile.php");
		echo "<script>alert('Saved');</script>";
	}
}





?>

<?php
include '../include/footer.php';
?>
<?php
 /*
if(is_dir($folder)){ 

	if(file_exists($noteData)){
		$noteData ='myNotes/note'.'1'.'.txt'; 
	 file_put_contents($noteData, $note_txt);
	 echo "<script> alert('Dawanloaded At $noteData'); </script>";
	}

else{
	 
	file_put_contents($noteData, $note_txt);
echo "<script> alert('Dawanloaded At  $noteData');</script>";
	
}

 header("location:profile.php");

}

else
{
	mkdir($folder);

if(file_exists($noteData)){
		$noteData ='myNotes/note'.'1'.'.txt'; 
	 file_put_contents($noteData, $note_txt);
	 echo "<script> alert('Dawanloaded At $noteData'); </script>";
	}

else{
	 
	file_put_contents($noteData, $note_txt);
echo "<script> alert('Dawanloaded At  $noteData');</script>";
	
}

 header("location:profile.php");

}

 

 */
 ?>