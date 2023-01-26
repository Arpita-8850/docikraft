<!DOCTYPE html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
			body {
				margin-right: 10px;
				margin-left: 30px;
				margin-top: 15px;
				background: linear-gradient(to left, #e0eafc, #cfdef3);      
			}	
			#gpm {
				position: relative;
			}
			
			#gpm img {
				width: 100x;
				height: 100px;
				position: absolute;
				top: -29px;
				right: 700px;
			}
					
			h1 {
				font-size: 39px;
			}
			
			h2 {
				font-size: 25px;
			}
				
			p {
				font-size: 30px;
				line-height: 15%;
			}
				
			#pay {
				display: block;
				margin-left: auto;
				margin-right: auto;
				margin-top: 6vh;
			}

			img {
				display: block;
				margin-left: auto;
				margin-right: auto;
			}
					
			h3 {
				color: red;
				font-size: 35px;
			}
				
			.cancel 
				{
				border-radius: 4px;
				background-color: red;
				border: none;
				color: #FFFFFF;
				text-align: center;
				width: 150px;
				transition: all 0.5s;
				cursor: pointer;
				margin: 5px;
				font-size: 25px;
				font-family: Arial, sans-serif;
				padding: 30px;
				margin: 5px;
				text-decoration: none;
				}
				
			.cancel:hover {
				box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
			}
		</style>
	</head>

	<body>
		<h1 class="normal"style="margin-top: 60px"><center>FR. CONCEICAO RODTIGUES COLLEGE OF ENGINEERING </center></h1>
		<h2 class="normal"style="margin-top: 5px"><center> Fr. Agnel Ashram, Bandra (West), Mumbai, Maharashtra - 400050 </center></h2>
	    <br>
    	<hr>
		<hr>
		<div id="pay">
			<img src="pay.png" >
			<h3><font face="calibri"><center><strong> QR CODE for Online Payment</strong><center></h3>
		</div>
		<br>
		<h3><font face="calibri"><strong>Bank Details:</strong></h3>
		<p class="normal" style="margin-top: 30px"><font face="calibri">Account Name: FR. CONCEICAO RODTIGUES COLLEGE OF ENGINEERING </p>
		<p class="normal" style="margin-top: 35px"><font face="calibri">Mobile number: +91  1234567891</p>
		<p class="normal" style="margin-top: 40px"><font face="calibri">Bank Account No. / UPI ID: 3704 0044 0532 0130</p>
		<p class="normal" style="margin-top: 45px"><font face="calibri">IFSC Code:  SBIN0005943</p>
		<br>
		<h3><font face="calibri"><strong>Demand Draft:</strong></h3>
		<p class="normal"><font face="calibri">Name: Principle Father Agnel College of Engineering </p>
		<br>
		<h3><font face="calibri"><strong>Cash Payment:</strong></h3>
		<p class="normal"><font face="calibri">Contact to the faculty of respective departments.</p>
		<br></br>
		<br>
	
		<div style="margin-right:800px;" > 
			<input  id="cancelbutton" type="button" name="cancel" value="BACK" class="cancel" onClick="window.location='../index.php';"/>  
		</div>
		
	</body>
</html>
