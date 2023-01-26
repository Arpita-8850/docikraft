	<?php

		
	$conn = mysqli_connect('localhost', 'root', '', 'crce');

	session_start();
	$rollno = $_SESSION['rollno'];
	echo $rollno;

	 
	$sql = "UPDATE student_train_map SET period='1' WHERE s_id='$rollno'";
	 
	if(mysqli_query($conn,$sql))
	{
		header('Location:conformat.php');
		exit;
	}
	else 
	{
		echo "<script type='text/javascript'>alert('Data not saved. Contact to Office.');  location.replace('../index.php') </script>";
	}
	?>
		