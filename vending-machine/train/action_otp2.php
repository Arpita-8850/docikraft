<?php
    session_start();
    $mobile = $_SESSION['mobile'];
    $email = $_SESSION['email'];
    $name = $_SESSION['name'];
    $rollno = $_SESSION['rollno'];

    #### 2Factor API Setting
    $APIKey='69555f56-5cc2-11ed-9c12-0200cd936042';
    $OTPMessage="<p>We have sent an OTP to $mobile,<br>Please enter the same below</p>";
        
    #### Custom Logic
    $otpValue=(( isset($_REQUEST['otp']) AND $_REQUEST['otp']<>'' ) ? $_REQUEST['otp'] : '' );
        
    if ( $otpValue =='' AND $mobile=="") {
        echo "<script type='text/javascript'> window.history.back(); </script>";
        die();
    }

    else if ( $mobile =='' AND $email=='' ) {
        echo "<script type='text/javascript'> alert('Please provide either a mobile number or an email address to proceed');window.history.back(); </script>";
        die();
    }

    else if (  $mobile =='' AND $email <> '' )
    $forceSubmitWithEmail=1;

    if ( ( $mobile =='' OR strlen($mobile) <>10 OR substr($mobile,0,2) < 60) AND $email =='') {
        echo "<script type='text/javascript'> alert('Please enter valid mobile number');window.history.back(); </script>";
        die();
    }

    ### OTP value entered by user
    if ( $otpValue <> '') { 
        ### Check if OTP is matching or not
        $VerificationSessionId=$_REQUEST['VerificationSessionId'];
        $API_Response_json=json_decode(file_get_contents("https://2factor.in/API/V1/$APIKey/SMS/VERIFY/$VerificationSessionId/$otpValue"),false);
        $VerificationStatus= $API_Response_json->Details;
        ### Check if OTP is matching
        if ( $VerificationStatus =='OTP Matched')   {            
            session_start();
            $_SESSION['rollno'] = $rollno;
            header('Location:class.php');                
            die();
        }
        else {
            echo "<script type='text/javascript'>alert('Sorry, OTP entered was incorrect. Please enter correct OTP');  window.history.back();  </script>";
            die();
        }
    }

    else
    {    
        ### Send OTP
        $API_Response_json=json_decode(file_get_contents("https://2factor.in/API/V1/$APIKey/SMS/$mobile/AUTOGEN"),false);
        $VerificationSessionId= $API_Response_json->Details;   
    }
?>

<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
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
            <img src="crce.png" style="width: 280px; height: 180px"/><br></br>
            <br>
            <form action="action_otp2.php" method="post">
                <h3>An OTP is sent on your registered mobile number.</h3> 
                <input type="text"
                        data-role="keypad" 
                        data-position="bottom"  
                        data-key-length="6" 
                        data-key-size="100" 
                        class="input-regular" 
                        name="otp"
                        id='otp' 
                        autofocus="autofocus"  
                        placeholder="XXXXXX"  
                        required="required">

                <input type="hidden"  name="VerificationSessionId" value="<?php echo $VerificationSessionId; ?>" >
                <input type="hidden" name="name" value="<?php echo $name; ?>"  >	
                <input type="hidden"  name="email" value="<?php echo $email; ?>" >	
                <input type="hidden"  name="phone" value="<?php echo $mobile; ?>" >
                
                <br><br>
                <div class="button">
                    <input type="submit" name="train" value="SUBMIT" id="submit" />
                </div> 
            
                <div class="mybutton"> 
                    <input type="button" name="cancel" value="BACK" id="cancel" onClick="window.location='../index.php';" />  
                </div>  
            </form>
        </center>
        <script src="https://cdn.korzh.com/metroui/v4/js/metro.min.js"></script>
    </body>
</html>