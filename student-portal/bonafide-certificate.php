<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <title>Bonafide Certificate</title>
        <link rel="shortcut icon" href="images/favicon.png" />

        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
            integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        ></script>

        <style>
            body {
                width: 60%;
                margin: 0 auto;
                position: relative;
            }

            #crce img {
                width: 150px;
                height: 100px;
                position: absolute;
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
            $s_id = $_SESSION['s_id'];
            $reason = $_SESSION['reason'];

            $query = "SELECT * FROM student s, student_bonafide_map b WHERE s.s_id = b.s_id and s.s_id='$s_id' ORDER  BY bonafide_no DESC LIMIT  1";
            $data = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($data);
        ?>

        <button id="download-button">Download as PDF</button>
        
        <div id="invoice">
            <br></br>
            <div>
                <div id="crce">
                    <img src="images/crce.png"/>
                </div>
                <h1 class="normal"style="font-size:20px;">FR. CONCEICAO RODTIGUES COLLEGE OF ENGINEERING </h1>
                <p class="normal"style="margin-left: 250px;">Fr. Agnel Ashram, Bandra (West), Mumbai, Maharashtra - 400050</p>
                <p class="normal"style="margin-left: 300px;">Tel: 1234 5678 / 9876 5432, Fax:2674 4057</p>
            <div>

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
                <img src="images/sign.png" />
            </div>
            <div id="stamp"> 
                <img src="images/stamp.png" />
            </div>
            <div id="sign2"> 
                <img src="images/sign2.png"/>
            </div>
            <p class="b" style="margin-top: 150px"><strong>HOD Stamp Principal</p>		
        </div>


    

        <script>
                function printpage() {
                //Get the print button and put it into a variable
                    var printButton = document.getElementById("printpagebutton");
                    //Set the print button visibility to 'hidden' 
                    printButton.style.visibility = 'hidden';
                    //Print the page content
                    window.print();
                    setTimeout("closePrintView()", 3000);
                    printButton.style.visibility = 'visible';
                }
                
                function closePrintView() {
                    window.close();
                }	

                n =  new Date();
                y = n.getFullYear();
                m = n.getMonth() + 1;
                d = n.getDate();
                document.getElementById("date").innerHTML = d + "/" + m + "/" + y;
        </script>	

        <script>
            const button = document.getElementById("download-button");
            function generatePDF() {
                // Choose the element that your content will be rendered to.
                const element = document.getElementById("invoice");
                // Choose the element and save the PDF for your user.
                html2pdf().from(element).save();
            }
            button.addEventListener("click", generatePDF);
        </script>
    </body>
</html>	