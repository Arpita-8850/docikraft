<!DOCTYPE html>
	<head>
		<link href="style.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	</head>
	<body>
		<?php
			$conn = mysqli_connect("localhost", "root", "", "crce") or die(mysqli_error($conn));
			error_reporting(0);
			$query = "SELECT * FROM student s, student_ecs_map se WHERE s.s_id= se.s_id";
			$data = mysqli_query($conn, $query);
			$total = mysqli_num_rows($data);
		?>
				<div class="ExamPortal">ECS Department</div>
				<div class="Frame1">          
                    <a href="ecs.php" class='active'>HOME</a>
					<a href="login.php" class='logout' id='logout'>LOGOUT</a>
				</div>
				<br><br> <br><br> <br><br> <br><br> 
				
				<center>

					<div class="wrap">
						<div class="search">
							<input type="text"  id="myInput" onkeyup="myFunction()" class="searchTerm cd-search table-filter" data-table="order-table"/>
							<button type="submit" class="searchButton">
								<i class="fa fa-search"></i>
							</button>
						</div>
					</div>
					<br><br><br>

					<div class="table-responsive" data-aos="fade-up"  data-aos-once= "true">
						<table class="table table-hover table-striped cd-table order-table"  style="width: 80%;  font-size: 23px;" >
							<thead style="background-color: #2765C1; color: white; font-size: 26px; ">
								<tr>
                                    <th>Roll no</th>
									<th>Name</th>
									<th>Due Status</th>
                                    <th>Amount</th>
                                    <th></th>
								</tr>
							</thead>
							<tbody>
								<?php
										while($result = mysqli_fetch_assoc($data))
										{
											echo"<tr>
                                                    <td>".$result['s_id']."</td>
													<td>".$result['first_name']." ".$result['last_name']."</td> 
													<td>".$result['ecs_status']."</td>
                                                    <td>Rs. ".$result['dues']."</td>
                                                    <td><a href='UpdateECS.php?rollno=$result[s_id]&name=$result[first_name]'><img src= 'edit.png'  id='icon'></a></td>
												</tr>";
										}
								?>					
							</tbody>
						</table> 
					</div>
				</center>

		<script>
			AOS.init({
			duration: 1500,
			})
		</script>
		<script  src="script.js"></script>
	</body>
</html>