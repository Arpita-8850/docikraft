<!DOCTYPE html>
<html>
    <head>
        <style>
        body {
            background: #83c9a6;  
        }
        </style>
    </head>

    <?php
        $conn = mysqli_connect("localhost", "root", "", "crce") or die(mysqli_error($conn));
        if(isset($_POST['lc']))
        {
            $rollno = $_POST['rollno'];  
            $query = "SELECT * FROM student WHERE s_id='$rollno' ";
            $query_run = mysqli_query($conn,$query);		
            if(mysqli_num_rows($query_run) == 0) 
            {
                echo "<script type='text/javascript'>alert('Your roll number is not enrolled in college server. Contact to Office.');  location.replace('index.php') </script>";
            } 
            else 
            {
                $row = mysqli_fetch_assoc($query_run);  
                $mobile=  $row['phone'];
                $email=  $row['s_email'];
                $name=  $row['first_name'];

                session_start();
                $_SESSION['mobile'] = $mobile;
                $_SESSION['email'] = $email;
                $_SESSION['name'] = $name;
                $_SESSION['rollno'] = $rollno;
                header('Location:lc/action_otp.php');  //to use the OTP feature uncomment this line and comment the below line
                // header('Location:lc/fetching.php');
            }
        }

        else if (isset($_POST['bonafide']))
        {
            $rollno = $_POST['rollno'];  
            $query = "SELECT * FROM student WHERE s_id='$rollno'";
            $query_run = mysqli_query($conn,$query);		
            if(mysqli_num_rows($query_run) == 0) 
            {
                echo "<script type='text/javascript'>alert('Your roll number is not enrolled in college server. Contact to Office.');  location.replace('index.php') </script>";
            } 
            else 
            {
                $result = mysqli_query($conn, "SELECT COUNT(s_id) AS count FROM student_bonafide_map WHERE s_id='$rollno'");
                $row = mysqli_fetch_array($result);
                $count = $row['count'];
                if ($count > 3)
                {
                    echo "<script type='text/javascript'>alert('You have taken Bonafide $count times this month. Please come next month.');  location.replace('index.php') </script>";
                }
                else 
                {
                    $row = mysqli_fetch_assoc($query_run);  
                    $mobile=  $row['phone'];
                    $email=  $row['s_email'];
                    $name=  $row['first_name'];

                    session_start();
                    $_SESSION['mobile'] = $mobile;
                    $_SESSION['email'] = $email;
                    $_SESSION['name'] = $name;
                    $_SESSION['rollno'] = $rollno;
                    header('Location:bonafide/action_otp1.php');  //to use the OTP feature uncomment this line and comment the below line
                    // header('Location:bonafide/reason.php');
                }
            }
        }

        
        else if (isset($_POST['train']))
        {
            $rollno = $_POST['rollno'];  
            $query = "SELECT * FROM student WHERE s_id='$rollno' ";
            $query_run = mysqli_query($conn,$query);		
            if(mysqli_num_rows($query_run) == 0) 
            {
                echo "<script type='text/javascript'>alert('Your roll number is not enrolled in college server. Contact to Office.');  location.replace('index.php') </script>";
            } 
            else 
            {
                $row = mysqli_fetch_assoc($query_run);  
                $mobile=  $row['phone'];
                $email=  $row['s_email'];
                $name=  $row['first_name'];

                session_start();
                $_SESSION['mobile'] = $mobile;
                $_SESSION['email'] = $email;
                $_SESSION['name'] = $name;
                $_SESSION['rollno'] = $rollno;
                header('Location:train/action_otp2.php');  //to use the OTP feature uncomment this line and comment the below line
                // header('Location:train/class.php');
            }
        }

        else if (isset($_POST['dues']))
        {
            $rollno = $_POST['rollno'];  
            $query = "SELECT * FROM student WHERE s_id='$rollno' ";
            $query_run = mysqli_query($conn,$query);		
            if(mysqli_num_rows($query_run) == 0) 
            {
                echo "<script type='text/javascript'>alert('Your roll number is not enrolled in college server. Contact to Office.');  location.replace('index.php') </script>";
            } 
            else 
            {
                $row = mysqli_fetch_assoc($query_run);  
                $mobile=  $row['phone'];
                $email=  $row['s_email'];
                $name=  $row['first_name'];

                session_start();
                $_SESSION['mobile'] = $mobile;
                $_SESSION['email'] = $email;
                $_SESSION['name'] = $name;
                $_SESSION['rollno'] = $rollno;
                header('Location:check-dues/action_otp3.php');  //to use the OTP feature uncomment this line and comment the below line
                // header('Location:check-dues/dues.php');
            }
        }
    ?>		  
</html>