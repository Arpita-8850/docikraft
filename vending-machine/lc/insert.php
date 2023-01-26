	<?php	
	$conn = mysqli_connect('localhost', 'root', '', 'crce');

	session_start();
	$rollno = $_SESSION['rollno'];
	echo $rollno;
	 
	$sql = "INSERT INTO student_vm_map(s_id, doc_taken, timestamp) VALUES ('$rollno','Yes',CURRENT_DATE)";
	 
	if(mysqli_query($conn,$sql))
	{
		header('Location:../index.php');
		exit;
	}
	else 
	{
		echo 'data not updated';
		header('Location:../index.php');
		exit;
	}	
	?>