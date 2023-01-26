	<?php
	$conn = mysqli_connect('localhost', 'root', '', 'crce');
	session_start();
	$rollno = $_SESSION['rollno'];
	echo $rollno;
	 
	$sql = "UPDATE student_train_map SET tc_taken='Yes', issue_date = CURRENT_DATE, exp_date= DATE_ADD(CURRENT_DATE, INTERVAL period Month) WHERE s_id='$rollno'";
	 
	if(mysqli_query($conn,$sql))
	{
		header('Location:../index.php');
		exit;
	}
	else 
	{
		echo "<script type='text/javascript'>alert('Server error. Contact to Office.');  location.replace('../index.php') </script>";
	}
	?>