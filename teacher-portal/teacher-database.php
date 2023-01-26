<?php
	$conn = mysqli_connect("localhost", "root", "", "crce") or die(mysqli_error($conn));
	$email = $_POST['email'];
	$password = $_POST['password'];
	$query = "SELECT e_pwd FROM employee WHERE e_email = '$email'";
	$result = mysqli_query($conn,$query);
	if(mysqli_num_rows($result) == 0)
	{
		echo "<script type='text/javascript'>alert('Incorrect Email Id or Password.');  location.replace('login.php') </script>";
	} 
	
	else 
	{
		$databasePassword = mysqli_fetch_assoc($result)["e_pwd"];
		if($password == $databasePassword) 
		{	
			$selectQuery = "SELECT * FROM employee WHERE e_email = '$email' AND e_pwd = '$password'";
			$selectResult = mysqli_query($conn,$selectQuery);
			$type = mysqli_fetch_assoc($selectResult)["department"];
			echo $type;
			
			if($type=='Library') 
			{
				header('Location:library/library-home.php');
				exit;
			} 
			else if($type=='Workshop') 
			{
				header('Location:workshop/workshop-home.php');
				exit;
			} 
			else if ($type=='Office') 
			{
				header('Location:office/office-home.php');
				exit;
			} 
			else if ($type=='exam_cell') 
			{
				header('Location:exam_cell.php');
				exit;
			} 
			else if ($type=='ECS') 
			{
				header('Location:ecs.php');
				exit;
			} 	
		} 
		else 
		{
			echo "<script type='text/javascript'>alert('Database Error. Try Login after some time');  location.replace('login.php') </script>";
		}
	}
?>