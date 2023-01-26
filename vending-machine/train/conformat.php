<!DOCTYPE html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      body {
        margin-right: 20px;
        margin-left: 30px;
        margin-top: 15px;
      }	
    
      table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
      }

      td, th {
        border: 1px solid #000000;
        text-align: left;
        padding: 8px;
      }

      p {
        color: #000000;
      }

      h1 {
        color: #000000;
      }

      th {
        color: #000000;
      }

      td {
        color: #000000;
      }
      
      #principal1 {
        position: relative;
      }
      
      #principal1 img {
      width: 140px;
      height: 75px;
      position: absolute;
      bottom: 410px;
      left: 520px;
      }
        
      #principal2 {
        position: relative;
      }
      
      #principal2 img {
        width: 140px;
        height: 75px;
        position: absolute;
        bottom: 900px;
        left: 450px;
      }
        
      #sign1 {
        position: relative;
      }
      
      #sign1 img {
        width: 100px;
        height: 50px;
        position: absolute;
        bottom: 960px;
        left: 450px;
      }
        
      #sign2 {
        position: relative;
      }
      
      #sign2 img {
        width: 100px;
        height: 50px;
        position: absolute;
        bottom: 460px;
        left: 550px;
      }
        
      #stamp {
        position: relative;
      } 
      
      #stamp img {
        height: 150px;
        width: 150px;
        position: absolute;
        bottom: 300px;
        right:400px;
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
    </style>
  </head>
  <body>
    <?php
        $conn = mysqli_connect("localhost", "root", "", "crce") or die(mysqli_error($conn));
        error_reporting(0);

        session_start();
        $rollno = $_SESSION['rollno']; 

        $query = "SELECT * FROM student s, student_train_map tc WHERE s.s_id = tc.s_id and s.s_id='$rollno'";
        $data = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($data);      
    ?>
    <br></br>
    <h1 class="normal"style="margin-top: 20px; font-size:25px;">वेस्टर्न रेलवे WESTERN RAILWAY</h1>
    <p style="margin-left:50px; margin-top: 10px; font-size:16px; position:absolute;">Sr no.:<?php echo $row["tc_no"]; ?> </p>
    <br></br>
    <p style="font-size:16px;">  
      मैं इसके द्वारा यह प्रमाणित करता हूँ  की <u><?php echo $row["first_name"]; ?> <?php echo $row["last_name"]; ?></u> 
      नियमित रूप से शिक्षा प्राप्त करने के उद्देश्य से इस कॉलेज में भाग लेता है, जिस संस्थान की मैं इस दिन प्रिंसिपल और उसकी उम्र है, 
      मेरे विश्वास के अनुसार और मेरे द्वारा किए गए ज्ञान से, <u><?php echo $row["age"]; ?></u> साल, उसकी / उसके जन्म की 
      तारीख के रूप में कॉलेज रजिस्टर में दर्ज किया जा रहा है  <u><?php echo $row["dob"]; ?></u>
    </p>
    
    <p style="font-size:16px;"> इसलिए, वह सीजन टिकट का हकदार है, जो वयस्कों के लिए शुल्क की आधी दरों से नीचे विस्तृत है :-</p>
    
    <p style="font-size:16px;"> 
      I hereby certify that <u><?php echo $row["first_name"]; ?> <?php echo $row["last_name"]; ?></u> regularly attends 
      this college for the purpose of recieveing education, the institution of which I am the Principal and 
      his/her age this day, according to my belief and from enqueries I have made is, <u><?php echo $row["age"]; ?></u> 
      years, his/her date of birth as entered in the College Register being  <u><?php echo $row["dob"]; ?></u>
    </p>
    
    <p style="font-size:16px;"> 
      He / She is therefore, entitled to the season ticket as detailed below at 
      half the full rates charged for adults :-
    </p>
    <table>	
      <tr>
        <th>कक्षा <br>Class </th>
        <th>अवधि <br>Period</th>
        <th> इस जगह से <br>From</th>
        <th>इस जगह पर <br>To</th>
      </tr>
      <tr>
        <td> <u><?php echo $row["class"]; ?></td>
        <td> <u><?php echo $row["period"]; ?></td>
        <td> <u><?php echo $row["home_stn"]; ?></td>
        <td>Bandra</td>
      </tr>
    </table>
    
    <p style="font-size:16px;"> वर्तमान में छात्र धारण करता है The student at present holds........... क्लास सीजन टिकट नं Class season ticket no............ से From..............................  तक to ..........................</p>
    <p style="font-size:16px;"> दिनांक Date................................               प्रधानाचार्य अगर हस्ताक्षर  Signature if Principal .......................................</p>
    <p style="font-size:16px;"> कॉलेज का नाम (कॉलेज स्टाम्प).................................................................................................. <br> Locality....................................</p>
    <p style="font-size:16px;">Name of college (college stamp) </p>
    <hr>
    <p style="font-size:16px;"> * छात्र का नाम पूर्ण रूप से दर्ज करें।  Enter the name of the student in full.</p>
    <p style="font-size:16px;"> * केवल छात्र निवास के निकटतम स्टेशन और कॉलेज के निकटतम स्टेशन के बीच उपलब्ध है। Available only between station nearest to student residence and the station nearest to the college.</p>
    <p style="font-size:16px;"> * इस कॉलम को स्टेशन द्वारा सीज़न टिकट जारी करके भरा जाना चाहिए। This column should be filled in by the station issuing the season ticket.</p>
    <p style="font-size:16px;"> *  यदि कोई सीज़न टिकट नहीं है तो 'NIL' शब्द डाला जाना चाहिए। If no season ticket is held the word 'NIL' should be inserted.</p>
    <p style="font-size:16px;">नोट: - यह प्रमाण पत्र जारी करने की तारीख सहित तीन दिनों के लिए वैध होना चाहिए और यदि उस समय के भीतर उपयोग नहीं किया गया है तो उसे रद्द करने के लिए जारी किया जाना चाहिए। </p>
    <p style="font-size:16px;"> Note :- This certificate should be valid for three days including the date of issue and if not made use within that time must be returned by the issued for cancellation</p>
    <br></br>
    <div id="principal1"> 
      <img src="principal.jpg" />
    </div>
      
    <div id="principal2"> 
      <img src="principal.jpg" />
    </div>
      
    <div id="sign1"> 
      <img src="sign.png" />
    </div>
      
    <div id="sign2"> 
      <img src="sign.png" />
    </div>
      
    <div id="stamp"> 
      <img src="stamp.png" />
    </div>

    <div style="margin-left:600px">			
      <form action="insert1.php"  method="post"><input id="printpagebutton" type="submit" name="print" value="PRINT" class="print" onclick="printpage()"/></form>
    </div>
    
    <div style="margin-right:800px;" > 
      <input  id="cancelbutton" type="button" name="cancel" value="CANCEL" class="cancel" onClick="window.location='../index.php';"/>  
    </div>
  
    <script>
      function printpage() 
      {
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
      
      function closePrintView() 
      {
        document.location.href = '../index.php';
      }	
    </script>	
  </body>
</html>