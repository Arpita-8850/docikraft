<?php
    error_reporting(E_ALL ^ E_DEPRECATED);
    $conn = mysqli_connect('localhost', 'root', '', 'crce') or die(mysqli_error($conn));
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- Metro UI -->
        <link rel="stylesheet" href="https://cdn.korzh.com/metroui/v4/css/metro-all.min.css">

        <style>
            body {
                background: linear-gradient(to right, #1c92d2, #f2fcfe); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            }  
                  
            .button 
            {
            position: fixed;
            bottom: 100px;
            right: 160px;
            width: 100px;
            height: 80px;
            }

            #submit 
            {
            border-radius: 4px;
            background-color: green;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 20px;
            padding: 20px 30px 20px 30px;
            width: 160px;
            height: 80px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px;
            font-weight: 900;
            }

            .mybutton 
            {
            position: fixed;
            bottom: 100px;
            left: 160px;
            width: 100px;
            height: 80px;
            }

            #cancel 
            {
            border-radius: 4px;
            background-color: #8b0000	;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 20px;
            padding: 20px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px;
            width: 150px;
            height: 80px;
            font-weight: 900;
            }

            #submit:hover, #cancel:hover {
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
            }
            
            .input-regular{
                width: 50vh;
                height: 60px;
                font-size:20px;
            }
        </style>
    </head>
    <body> 
        <center>
            <br></br>
            <img src="crce.png" style="width: 280px; height: 180px"/>
            <br><br>
            <form method="POST" action="../roll.php">
                <h3>Enter Your Roll No.</h3> <br>
                
                <input type="text" data-role="keypad" data-position="bottom"  data-key-length="6" data-key-size="100" class="input-regular" name="rollno" autofocus="autofocus" /> 
                <br><br>
                
                <div class="button">
                    <input type="submit" name="train" value="SUBMIT" id="submit" />
                </div> 
                
                <div class="mybutton"> 
                    <input type="button" name="cancel" value="BACK" id="cancel" onClick="window.location='../index.php';" />  
                </div>  
            </form>
        </center>
        <!-- Metro UI -->
        <script src="https://cdn.korzh.com/metroui/v4/js/metro.min.js"></script>
    </body>
</html>