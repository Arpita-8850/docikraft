<html>
	<head>
		<link href="style.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Spartan:wght@700&display=swap" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<div class="ExamPortal">ECS Department</div>
		<div class="Frame1">
			<a href="ecs.php" class='passive'>HOME</a>	
			<a href="login.php" class='logout' id='logout'>LOGOUT</a>
		</div>
		<br><br> <br><br> <br><br>

		<center>
			<h3 data-aos="fade-up"  data-aos-once= "true" id="test"><?php echo $_GET['name']; ?></h3>
			<form  action="" method = "POST"> 
				<table>
					<tbody>
						<?php
							$conn = mysqli_connect("localhost", "root", "", "crce") or die(mysqli_error($conn));
							error_reporting(0); 
							$rollno = $_GET['rollno'];
							$name = $_GET['name'];
							echo $rn;
							$records = mysqli_query($conn,"SELECT * FROM student s, 
																		 student_ecs_map se
																	WHERE s.s_id = se.s_id 
																	AND s.s_id= '$rollno'"); // fetch data from database
							while($data = mysqli_fetch_array($records))
						{ 
							echo' 
								<tr>
									<td><label>Library Status</label><br><br><br></td>
									<td>
										<input type="radio" name= "choose" value="yes">
										<lable style="font-size: 23px; "> Yes</lable>
										<input type="radio" name= "choose" value="no"> 
										<lable style="font-size: 23px;"> No</lable><br>	
										<br><br><br>
									</td>
								</tr>
								<tr>
									<td><label>Due Amount</label><br><br><br></td>
									<td>
										<input type="text" name="dues" value="'.$data['dues'].'" autocomplete="off">
										<br><br><br>
									</td>
								</tr>
								<tr>
									<td>
										<br><br>
										<input id="update" type="submit" name="submit" value="UPDATE" style="float: right; width: 130px;">
										<br><br>
									</td>
								</tr>
							';
						}
						?>
					</tbody>
				</table>
			</form>

			<br><br>
			<a href="ecs.php"><input type="submit" id="report" value="BACK" style="width: 130px;">
			<br><br><br>
		</center>
		<?php		
			if($_POST['submit'])
			{
				if($_REQUEST["choose"] == "yes") 
				{
					$ecs_status = "Yes";
				} 
				else if($_REQUEST["choose"] == "no") 
				{
					$ecs_status = "No";
				}
				
				$dues = $_POST["dues"];
			
				$query = "UPDATE student_ecs_map SET ecs_status='$ecs_status', dues='$dues'  WHERE s_id='$rollno'";
				$data = mysqli_query($conn, $query);
				if($data)
				{
					header('Location:ecs.php');
					exit;
				}
				else
				{
					echo "<script type='text/javascript'>alert('Data not updated. Please try again later.');  location.replace('ecs.php') </script>";
				}
			}
		?>
	</body>
</html>