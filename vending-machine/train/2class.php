<?php

		
$conn = mysqli_connect('localhost', 'root', '', 'crce');

session_start();
$rollno = $_SESSION['rollno'];
echo $rollno;

 
$sql = "INSERT INTO student_train_map(s_id, class) VALUES ('$rollno','2')";
 
if(mysqli_query($conn,$sql))
{
	header('Location:month.php');
	exit;
}
else 
{
	echo "<script type='text/javascript'>alert('Data not saved. Contact to Office.');  location.replace('../index.php') </script>";
}


?>
	