<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
			body {
			height: 842px;
			width: 595px;
			margin-right: 20px;
			margin-left: 30px;
			margin-top: 15px;
			}
			
			#border {
			border:solid;
			width: 650px;
			height: 1050px;
			padding-left:30px;
			padding-right:40px;
			}
			
			#gpm {
			position: relative;
			}
			
		
			#gpm img {
			width: 160px;
			height: 120px;
			position: absolute;
			top: 30px;
			right: 75%;
			}
			
			.floated {
				float: left;
				margin-right: 100px;
				margin-bottom: 100px;
			}

			h1 {
				font-size: 25px;
			}
				
			p {
				font-size: 15px;
				line-height: 15%;
			}
				
			h2 {
				font-size: 35px;
			}
			
			h3 {
				font-size: 12px;
			}
				
			.cellLabel{
				padding-left: 30px;
			}  

			.cellValue {
				padding-left: 90px;
			}
			
			#note {
			position: absolute;
			font-size: 15px;
			left: 80px;
			}
			
			#note-2 {
			position: absolute;
			font-size: 15px;
			top:820px;
			left: 70px;
			}
			
			#sign1 {
			position: relative;
			}
			
			#sign1 img {
			width: 100px;
			height: 80px;
			position: absolute;
			top: 25px;
			left: 50px;
			}

			#sign2 {
			position: relative;
			}
			
			#sign2 img {
			width: 100px;
			height: 80px;
			position: absolute;
			top: 25px;
			right: 110px;
			}	
			
			#stamp {
			position: relative;
			} 

			#stamp img {
			height: 100px;
			width: 130px;
			position: absolute;
			top: 25px;
			right:300px;
			}	
			
			p.b { 
			word-spacing: 140px;
			float: right;
			margin-right: 130px;
			font-size: 17px;
			}

			.print {
			position: absolute;
			background-color: green;
			color: white;
			font-size: 20px;
			border-color: green;
			top: 1090px;
			padding: 20px 20px;
			
			}

			.cancel {
			position: absolute;
			background-color : red;
			color: white;
			font-size: 20px;
			border-color: red;
			top: 1090px;
			padding: 20px 20px;
			}

			table, td, th {
			border: 1px solid;
			height: 40px;
			}	

			table {
				width: 100%;
				
				border-collapse: collapse;
			}	
		</style>
	</head>
	<body>
		<a href="fetching.php"></a>
		<?php
			$conn = mysqli_connect("localhost", "root", "", "crce") or die(mysqli_error($conn));
			error_reporting(0);	
			session_start();
			$rollno = $_SESSION['rollno'];
			$query = "SELECT * FROM student WHERE s_id='$rollno'";
			$data = mysqli_query($conn, $query);
			$row = mysqli_fetch_assoc($data);
		?>
		<div id=border>
			<div id="gpm"><img src="crce.png"/></div>
			<h1 style="font-size: 30px; margin-top: 40px; margin-left: 120px;"> <center>FR. CONCEICAO RODTIGUES</center></h1>
			<h1 style="font-size: 30px; margin-top: -10px; margin-left: 120px;"> <center>COLLEGE OF ENGINEERING </center></h1>
			<h3 style="margin-top: 5px; margin-left: 120px;"><center>  Fr. Agnel Ashram, Bandra (West), Mumbai, Maharashtra - 400050 </center></h3>
			<hr>
			<hr>
					
			<p style="margin-left:570px; margin-top: 10px; font-size:12px; position:absolute;">Date: <label id="date"></label></p>
			<p style="margin-left: 570px; margin-top: 25px;  font-size:12px; position:absolute;">No.: <?php echo $row["s_id"]; ?> </p>
			
			<h2 style="margin-top: 20px"><center>LEAVING CERTIFICATE</center></h2>
			<p style="margin-bottom: 5px"><center>No change in any entry in this Leaving certificate is to be made except the authority issuing this LC.</center></p>
			<p style="margin-bottom: -15px"><center>Infringement of this requirement is liable to involve the imposition of penalty like rustication.</center></p>

			<div>
				<table cellspacing="6">
					<tr>
						<td class="cellLabel"> <p> <b> 1.</p> </th>					
						<td class="cellLabel"> <p> <b>Name of student</b> </p> </th>
						<td class="cellValue"> <p id="name"><strong><?php echo $row["first_name"]; ?> <?php echo $row["last_name"]; ?> </p> </td>
					</tr>
					<tr>
						<td class="cellLabel"> <p> <b>2.</p> </th>					
						<td class="cellLabel"> <p> <b>Caste</b> </p> </th>
						<td class="cellValue"> <p id="religion"><strong><?php echo $row["religion"]; ?> </p> </td>
					</tr>
					<tr>					
						<td class="cellLabel"> <p> <b>3.</p> </th>					
						<td class="cellLabel"> <p> <b>Place of Birth</b> </p> </th>
						<td class="cellValue"> <p id="pob"><strong><?php echo $row["pob"]; ?> </p> </td>
					</tr>
					<tr>
						<td class="cellLabel"> <p> <b>4.</p> </th>					
						<td class="cellLabel"> <p> <b>Date of Birth</b> </p> </th>
						<td class="cellValue"> <p id="dob"><strong><?php echo $row["dob"]; ?> </p> </td>
					</tr>
					<tr>
						<td class="cellLabel"> <p> <b>5.</p> </th>					
						<td class="cellLabel"> <p> <b>Institute Last Attended</b> </p> </th>
						<td class="cellValue"> <p id="ila"><strong><?php echo $row["ila"]; ?> </p> </td>
					</tr>
					<tr> 					
						<td class="cellLabel"> <p> <b>6.</p> </th>					
						<td class="cellLabel"> <p> <b>Date of Admission</b> </p> </th>
						<td class="cellValue"> <p id="doa"><strong><?php echo $row["doa"]; ?> </p> </td>
					</tr>
					<tr>
						<td class="cellLabel"> <p> <b>7.</p> </th>					
						<td class="cellLabel"> <p> <b>Progress</b> </p> </th>
						<td class="cellValue"> <p id="remark"><strong><?php echo $row["remark"]; ?> </p> </td>
					</tr>
					<tr>
						<td class="cellLabel"> <p> <b>8.</p> </th>					
						<td class="cellLabel"> <p> <b>Date of Leaving College</b> </p> </th>
						<td class="cellValue"> <p id="date"><strong><label id="dol"></label></p> </td>
					</tr>
					<tr>
						<td class="cellLabel"> <p> <b>9.</p> </th>					
						<td class="cellLabel"> <p> <b>Branch</b> </p> </th>
						<td class="cellValue"> <p id="branch"><strong><?php echo $row["branch"]; ?> </p> </td>
					</tr>
					<tr>
						<td class="cellLabel"> <p> <b>10.</p> </th>					
						<td class="cellLabel"> <p> <b>Reason of leaving College</b> </p> </th>
						<td class="cellValue"> <p id="reason"><strong><?php echo $row["reason"]; ?> </p> </td>
					</tr>
				</table>
			</div>
			<br></br>
			<div id="note">Certified that the above information is in accordance with the College Register.</div>
			<br></br>
			
			<div id="sign1"> 
				<img src="sign.png" />
			</div>
				
			<div id="stamp"> 
				<img src="clg.jpg" />
			</div>
				
			<div id="sign2"> 
				<img src="sign2.png"/>
			</div>
			<p class="b" style="margin-top: 150px"><strong>Registrar Stamp Principal</p>		
		</div>
		
		<div style="margin-left:600px">			
			<form action="insert.php"  method="post"><input id="printpagebutton" type="submit" name="print" value="PRINT" class="print" onclick="printpage()"/>  </form>
		</div>
		<div style="margin-right:800px;" > 
			<input  id="cancelbutton" type="button" name="cancel" value="CANCEL" class="cancel" onClick="window.location='../index.php';"/>  
		</div>
			
		<script>
			function printpage() {
				//Get the print button and put it into a variable
				var printButton = document.getElementById("printpagebutton");
				var cancelButton = document.getElementById("cancelbutton");
				//Set the print button visibility to 'hidden' 
				printButton.style.visibility = 'hidden';
				cancelButton.style.visibility = 'hidden';
				//Print the page content
				window.print();
				setTimeout("closePrintView()", 3000);
				cancelButton.style.visibility = 'visible';
				printButton.style.visibility = 'visible';
			}
			function closePrintView() {
				document.location.href = '../index.php';
			}	

			n =  new Date();
			y = n.getFullYear();
			m = n.getMonth() + 1;
			d = n.getDate();
			document.getElementById("date").innerHTML = d + "/" + m + "/" + y;
			document.getElementById("dol").innerHTML = d + "/" + m + "/" + y;
		</script>	
	</body>
</html>