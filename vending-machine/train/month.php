<!DOCTYPE html>
    <head>
        <style>
            body {
                background: linear-gradient(to right, #1c92d2, #f2fcfe); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            } 
            
            .normal {
                font-family: Arial, sans-serif;
                font-size: 35px;
                color: black;
                margin-top:8vh;
            }

            .tclass {
                border-radius: 4px;
                border: none;
                color: #FFFFFF;
                text-align: center;
                width: 35vh;
                height: 15vh;
                transition: all 0.5s;
                cursor: pointer;
                margin: 5px;
                font-size: 30px;
                padding: 20px 50px;
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
                margin-top: 8vh;
                left: 100px;
            }
            
            .tclass:hover, .cancel:hover {
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
                    <h1 class="normal" name="rollno" style="float: left; margin-left: 30px; font-size:7vh;"> <?php echo $row['s_id']; ?> </h1>
                    <h2 class="normal" name="name" style="float: right; margin-right: 90px; text-transform: uppercase; font-size:7vh;"> <?php echo $row['first_name']; ?> </h2>
                    <br>
                    <p style=" font-size: 5vh;  font-family: Arial, sans-serif; float: right; float: right; margin-right: 25vh; margin-top: 20vh;"><b>Select Period<b></p>
                    <br>

                    <div style="margin-top: 30vh">
                        <form action="1month.php" method="post">
                            <button class="tclass" style="background-color: #660066;">
                                <strong>1 Month</strong>
                            </button> 
                        </form>
                        <br><br><br>
                        <form action="3month.php" method="post">
                            <button class="tclass" style="background-color: #006622;">
                                <strong>3 Months</strong>
                            </button> 
                        </form>
                    </div>
                    <div id="mybutton"> 
                        <input type="button" name="cancel" value="BACK" class="cancel" onClick="window.location='class.php';" />  
                    </div>
                </center>
    </body>
</html>