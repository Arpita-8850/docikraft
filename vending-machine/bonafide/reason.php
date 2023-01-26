<!DOCTYPE html>
  <head>
    <style>
      body {
        background: linear-gradient(to right, #1c92d2, #f2fcfe); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      }
      
      .normal {
        font-family: Arial, sans-serif;
      }

      #r {
      width:560px;
      height: 50px;   
      }
      
      select:invalid { color: gray; }
		  
      .button {
        border-radius: 4px;
        background-color: green	;
        border: none;
        color: #FFFFFF;
        text-align: center;
        width: 150px;
        transition: all 0.5s;
        cursor: pointer;
        margin: 5px;
        position: fixed;
        top: 600px;
        right: 150px;
        font-size: 25px;
        padding: 30px;
        font-family: Arial, sans-serif;
        text-decoration: none;
        font-weight: 900;
      }

      .cancel {
        border-radius: 4px;
        background-color: #8b0000	;
        border: none;
        color: #FFFFFF;
        text-align: center;
        font-size: 25px;
        width: 150px;
        transition: all 0.5s;
        cursor: pointer;
        margin: 5px;
        position: fixed;
        padding: 30px;
        font-family: Arial, sans-serif;
        text-decoration: none;
        font-weight: 900;
      }
    
      #mybutton {
        position: fixed;
        top: 600px;
        left: 150px;
      }

      .button:hover, .cancel:hover {
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
      }
    </style>
  </head>
  <body>
    <center>
      
      <?php
          session_start();
          $rollno = $_SESSION['rollno'];
          $_SESSION['rollno'] = $rollno;		

          $conn = mysqli_connect("localhost", "root", "", "crce") or die(mysqli_error($conn));
          $query = "SELECT * FROM student WHERE s_id='$rollno' ";
          $query_run = mysqli_query($conn,$query);		
          $row = mysqli_fetch_assoc($query_run); 
      ?>

      <br><br>
      <h1 class="normal" name="rollno" style="  text-transform: uppercase; float: left; margin-left: 100px; font-size:7vh;"> <?php echo $row['s_id']; ?> </h1>
      <h1 class="normal" name="name" style="text-transform: uppercase; float: right; margin-right: 100px; font-size:7vh;"> <?php echo $row['first_name']; ?> </h1>
      <br>
      <p class="normal" style="margin-top:150px; font-size:5vh;">Reason for Bonafide Certificate</p>
      
      <form action="reason.php" method="post">
        <select required name="reason" id="r" style="font-size:30px; margin-top:5px;">
          <option name="none" disabled selected hidden>Please Choose...</option>
          <option name="Bus Concession" >Bus Concession</option>
          <option name="Income Certificate">Income Certificate</option>
          <option name="Industrial visit">Industrial visit</option>
          <option name="Educational loan">Educational loan</option>
          <option name="Visa Application">Visa Application</option>
        </select>
        <input type="submit" name="submit" class="button" value="SUBMIT" style="vertical-align:middle"></input>	
      </form>
      <div id="mybutton"> <input type="button" name="cancel" value="CANCEL" class="cancel" onClick="window.location='../index.php';" />  </div>
    </center>
    <?php 
      if(isset($_POST['submit']))
      {
        $reason = $_POST['reason'];        
        $sql = "INSERT INTO student_bonafide_map(s_id, issue_date, reason) VALUES ($rollno, CURRENT_DATE, '$reason')";
        if(mysqli_query($conn,$sql))
        {
          $_SESSION['reason'] = $reason;		
          header('Location:bonafide.php');
          exit;
        }
        else 
        {
          echo "<script type='text/javascript'>alert('Your choosed reason in not saved in server. Contact to Office.');  location.replace('reason.php') </script>";
        }        
      }
    ?>
  </body>
</html>