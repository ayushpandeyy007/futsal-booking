<?php 
    SESSION_start();
    include_once "include/connection.php";
    if(isset($_POST['signin'])){
        $email=$_POST['email'];
        // $password=md5($POST['password']);
        $password=$_POST['password'];
        $userCheck = "SELECT * FROM users WHERE email='$email' LIMIT 1";
		$userResult = mysqli_query($conn, $userCheck);
		if(mysqli_num_rows($userResult)==1){
            $row=mysqli_fetch_assoc($userResult);
            if($row['email']===$email && $row['password']===$password){
                $_SESSION['name']=$row['full_name'];
                header("location:profile.php");
            }
            else{
                echo mysqli_error($conn);
            }
        }
        else{
            echo mysqli_error($conn);
        }
    }
    else{
        header("location:loginsignup.php");
    }
?>