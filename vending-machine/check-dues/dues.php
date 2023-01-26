<!DOCTYPE html>
<html>
  <head>
    <style>
      body {
        background: linear-gradient(to right, #1c92d2, #f2fcfe); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      }

      p.normal {
        font-weight: bold;
        font-family: Arial, sans-serif;
        text-transform: uppercase;
        font-size:38px;
      }

      #note {
        position: absolute;
        left: 20%;
        margin-top: 75vh;
        font-size: 35px;
        font-weight: bold; 
        font-family: Arial, sans-serif;
      }

      #note1 {
        position: absolute;
        left: 15%;
        margin-top: 5%;
        font-size: 35px;
        font-weight: bold; 
        font-family: Arial, sans-serif;
      }

      th 
      {
        font-size: 35px;
        opacity: 0.9;
      }
        
      td 
      {
        opacity: 0.9;
        font-size: 30px;
      }

      .paymentButton {
        border-radius: 4px;
        background-color: 	#4b0082	;
        border: none;
        color: #FFFFFF;
        text-align: center;
        font-size: 25px;
        padding: 30px;
        width: 150px;
        transition: all 0.5s;
        cursor: pointer;
        margin: 5px;
        font-family: Arial, sans-serif;
        text-decoration: none;
        margin-top: 11%;
        position: fixed;
        right: 10vh;
      }	  

      .paymentButton:hover, .cancel:hover {
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
      }

      .cancel {
        border-radius: 4px;
        background-color: #8b0000	;
        border: none;
        color: #FFFFFF;
        text-align: center;
        font-size: 25px;
        font-family: Arial, sans-serif;
        padding: 30px;
        width: 150px;
        transition: all 0.5s;
        cursor: pointer;
        margin: 5px;
        margin-top: 11%;
        position: fixed;
        left: 10vh;
        text-decoration: none;
      }

      #customers {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        border-radius: 5px;
        width: 100%;
      }

      #customers td, #customers th {
        border: none;
        padding: 10px;
      }

      #customers tr:nth-child(even){
        background-color: #ebebeb;
        padding: 10px;
      }

      #customers tr:nth-child(odd){
        background-color: rgb(255, 255, 255);
      }

      #customers tr:hover {background-color: #f2f2f2;}

      #customers th {
        padding-top: 10px;
        padding-bottom: 25px;
        text-align: left;
        background-color: rgb(84, 14, 110);
        color: white;
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
        $query = "
                  SELECT
                    s.s_id, s.first_name,
                    l.librarystatus, l.dues as ldues, 
                    w.workshopstatus, w.dues as wdues, 
                    ecs.ecs_status, ecs.dues as ecsdues, 
                    kt.all_sem_clear,
                    doc.fees, doc.tenth_mks, doc.twelfth_mks, doc.diploma_doc
                  FROM
                    student as s, 
                    student_library_map as l, 
                    student_workshop_map as w, 
                    student_ecs_map as ecs, 
                    student_exam_map as kt, 
                    student_doc_map as doc
                  WHERE
                    s.s_id = l.s_id and 
                    s.s_id = w.s_id and 
                    s.s_id = ecs.s_id and 
                    s.s_id = kt.s_id and 
                    s.s_id = doc.s_id and  
                    s.s_id = '$rollno';
                  ";
        $query_run = mysqli_query($conn,$query);		
        $row = mysqli_fetch_assoc($query_run);  

        if ( $row['tenth_mks'] == "Yes" && 
             $row['twelfth_mks'] == "Yes" && 
             $row['diploma_doc'] == "Yes"
           )
        {
            $doc = "Yes";
        }
        else 
        {
          $doc = "No";
        }

        if($row['all_sem_clear']=="Yes"
            && $row['fees']=="Yes"
            && $row['tenth_mks'] == "Yes" 
            && $row['twelfth_mks'] == "Yes"
            && $row['diploma_doc'] == "Yes"
            && $row['librarystatus']=="Yes"   
            && $row['workshopstatus']=="Yes" 
            && $row['ecs_status']=="Yes"
          )
        {      
            echo '
                <p class="normal" style="float: left; margin-left: 100px;">'.$row['s_id'].'</p>
                <p class="normal" style="float: right; margin-right: 100px;">'.$row['first_name'].'</p>
                <table id="customers" style=" width:80%;" >	
                    <tr>
                        <th>Section</th>
                        <th>Status</th>
                        <th>Amount</th>
                    </tr>
                    <tr>
                        <td> Library Dues</td>
                        <td>'.$row['librarystatus'].'</td>
                        <td>'.$row['ldues'].'</td>
                    </tr>
                    <tr>
                        <td> Workshop Dues </td>
                        <td>'.$row['workshopstatus'].'</td>
                        <td>'.$row['wdues'].'</td>
                    </tr>
                    <tr>
                        <td> Department Dues</td>
                        <td>'.$row['ecs_status'].'</td>
                        <td>'.$row['ecsdues'].'</td>
                    </tr>
                    <tr>
                        <td> All Exam cleared </td>
                        <td>'.$row['all_sem_clear'].'</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td> All Fees cleared </td>
                        <td>'.$row['fees'].'</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td> Documents verified</td>
                        <td>'.$doc.'</td>
                        <td></td>
                    </tr>
                </table>
            ';
            echo '
                <a class="cancel" href="../index.php"><strong>BACK</strong></a>
            ';   
        } 
            
        else 
        { 
            echo '
                    <p class="normal" style="float: left; margin-left: 100px;">'.$row['s_id'].'</p>
                    <p class="normal" style="float: right; margin-right: 100px;">'.$row['first_name'].'</p>
                    <table id="customers" style=" width:80%;" >	
                        <tr>
                            <th>Section</th>
                            <th>Status</th>
                            <th>Amount</th>
                        </tr>
                        <tr>
                            <td> Library Dues</td>
                            <td>'.$row['librarystatus'].'</td>
                            <td>'.$row['ldues'].'</td>
                        </tr>
                        <tr>
                            <td> Workshop Dues </td>
                            <td>'.$row['workshopstatus'].'</td>
                            <td>'.$row['wdues'].'</td>
                        </tr>
                        <tr>
                            <td> Department Dues</td>
                            <td>'.$row['ecs_status'].'</td>
                            <td>'.$row['ecsdues'].'</td>
                        </tr>
                        <tr>
                            <td> All Exam cleared </td>
                            <td>'.$row['all_sem_clear'].'</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td> All Fees cleared </td>
                            <td>'.$row['fees'].'</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td> Documents verified</td>
                            <td>'.$doc.'</td>
                            <td></td>
                        </tr>
                    </table>
                ';
                echo '
                    <div id="note1">Dues not completed or documents not submitted. </div>
                    <a class="paymentButton" style="vertical-align:middle" href="payment.php"><strong>PAYMENT</strong></a>
                    <a class="cancel" href="../index.php"><strong>BACK</strong></a>
                ';      
            }
          ?>
	  </center>
	</body>
</html>