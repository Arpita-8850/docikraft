<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
			body {
				width: 750px;
			}

			#crce img {
				width: 150px;
				height: 100px;
				position: absolute;
				top: 60px;
				left: 20px;
				/* right: 600px; */
			}

			.normal{
				margin-left: 175px;
			}

			h2 {
				font-size: 15px;
			}
			
			#sign1 {
				position: relative;
			}

			#sign1 img {
				width: 100px;
				height: 80px;
				position: absolute;
				top: 25px;
				left: 130px;
			}
			
			#sign2 {
				position: relative;
			}
			
			#sign2 img {
				width: 100px;
				height: 80px;
				position: absolute;
				top: 25px;
				right: 120px;
			}	
				
			#stamp {
				position: relative;
			} 
			#stamp img {
				height: 100px;
				width: 100px;
				position: absolute;
				top: 25px;
				right:330px;
			}	
				
			p.b { 
				word-spacing: 140px;
				float: right;
				margin-right: 150px;
				font-size: 17px;
			}

			.print {
				position: absolute;
				background-color: green;
				color: white;
				font-size: 20px;
				border-color: green;
				top: 1000px;
				padding: 20px 20px;
			}

			.cancel {
				position: absolute;
				background-color : red;
				color: white;
				font-size: 20px;
				border-color: red;
				top: 1000px;
				padding: 20px 20px;
			}

			.content {
				text-align: justify;
				margin-left: 5vh;
				margin-right: 5vh;
			}
		</style>
	</head>
	<body>
		<?php
			$conn = mysqli_connect("localhost", "root", "", "crce") or die(mysqli_error($conn));
			error_reporting(0);
			session_start();
			$rollno = $_SESSION['rollno'];
			$reason = $_SESSION['reason'];

			$query = "SELECT * FROM student s, student_bonafide_map b WHERE s.s_id = b.s_id and s.s_id='$rollno' ORDER  BY bonafide_no DESC LIMIT  1";
			$data = mysqli_query($conn, $query);
			$row = mysqli_fetch_assoc($data);
		?>

		<br></br>
		<div id="crce"><img src="crce.png"/></div>
		<h1 class="normal"style="margin-top: 20px; font-size:20px;">FR. CONCEICAO RODTIGUES COLLEGE OF ENGINEERING </h1>
		<p class="normal"style="margin-top: 5px; margin-left: 250px;">Fr. Agnel Ashram, Bandra (West), Mumbai, Maharashtra - 400050</p>
		<p class="normal"style="margin-top: 5px; margin-left: 300px;">Tel: 1234 5678 / 9876 5432, Fax:2674 4057</p>
		
		<br></br>
		<p style="margin-left:570px; margin-top: 10px; font-size:16px; position:absolute;">Date:<label id="date"></label> </p>
		<p style="margin-left:50px; margin-top: 10px; font-size:16px; position:absolute;">No./crce/Bonafide-cre/<?php echo $row["bonafide_no"]; ?> </p>
		<br></br>
		<br></br>
		<h1 style="margin-top: 20px; font-size:30px;"><center><u> BONAFIDE CERTIFICATE </u></center></h1>
		<br></br>
		<div class="content" style="font-size:20px;">
			<p > 
				This is to Certify that, Mr./Miss <?php echo $row["first_name"]; ?> <?php echo $row["last_name"]; ?>
				is bonafide student of this College which is affiliated to the University of Mumbai 
				and is approved by the All India Council of Technical Education. 
				<br><br>
				<?php echo $row["first_name"]; ?> <?php echo $row["last_name"]; ?> is studying in <?php echo $row["year"]; ?> of
				Bachelor of Engineering Degree Course in <?php echo $row["branch"]; ?> Engineering
				for the current academic year <?php echo date("Y"); ?>.
				<br><br>
				<?php echo $row["first_name"]; ?>'s enrollment number <?php echo $row["s_id"]; ?> and bears good moral character.
				<br><br>
				This certificate is issued for <?php echo $row["reason"]; ?>.
				<br></br>
		</div>
		
		<div id="sign1"> 
			<img src="sign.png" />
		</div>
		<div id="stamp"> 
			<img src="stamp.png" />
		</div>
		<div id="sign2"> 
			<img src="sign2.png"/>
		</div>
		<p class="b" style="margin-top: 150px"><strong>HOD Stamp Principal</p>		
		
		<div style="margin-left:600px; ">			
			<form action=""  method="post"><input id="printpagebutton" type="submit" name="submit" value="PRINT" class="print" onclick="printpage()"/>  </form>
		</div>
			
		<div style="margin-right:800px;" > 
			<input  id="cancelbutton" type="button" name="cancel" value="CANCEL" class="cancel" onClick="window.location='../index.php';"/>  
		</div>

		<?php	
			if($_POST['submit'])
			{
   			header('Location:../index.php');
			}
		?>
		
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
		</script>	
	</body>
</html>	