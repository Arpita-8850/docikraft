<?php
    $conn = mysqli_connect("localhost", "root", "", "crce") or die(mysqli_error($conn));
	
    $email = $_POST['email'];
    $password = $_POST['password'];
	
    $query = "SELECT s_pwd FROM student WHERE s_email = '$email'";
    $result = mysqli_query($conn,$query);
	
    if(mysqli_num_rows($result) == 0)
    {
        echo'<script type="text/javascript">alert("Login failed. Invalid email or password.");  location.replace("student-login.html") </script>';  
    } 

    else 
    {
        $databasePassword = mysqli_fetch_assoc($result)["s_pwd"];
		
        if($password == $databasePassword) 
        {
            $selectQuery = "SELECT s_id FROM student WHERE s_email = '$email' AND s_pwd = '$password'";
            $selectResult = mysqli_query($conn,$selectQuery);
            $s_id = mysqli_fetch_assoc($selectResult)["s_id"];
            session_start();
            $_SESSION['s_id'] = $s_id;
            header('Location:student-dashboard.php');				
        }
        else
        {	
            echo'<script type="text/javascript">alert("Invalid password.");  location.replace("student-login.html") </script>';  
        }
    }
?>
