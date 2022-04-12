<?php
    //ini_set('session.cookie_lifetime', 60 * 60 * 24 * 365);
    //ini_set('session.gc-maxlifetime', 60 * 60 * 24 * 365);
    ob_start();
    session_start();
    include("includes/connection.php");
    if(isset($_POST['login'])){
        $email = htmlentities(mysqli_real_escape_string($con,$_POST['email']));
        $pass = htmlentities(mysqli_real_escape_string($con,$_POST['pass']));
        $select_user = "select * from users where user_email='$email' AND user_pass='$pass' AND status='verified'";
        $query = mysqli_query($con,$select_user);
        $check_user = mysqli_num_rows($query);
            if($check_user==1){
                $_SESSION['user_email']=$email;
                if(isset($_POST['rememberme'])){
                setcookie('emailcookie', $email, time() + 3600000 * 24 * 30);
                setcookie('passcookie', $pass, time() + 3600000 * 24 * 30);
                setcookie('PHPSESSID',session_id(),time()+3600000 * 24 * 30);
                echo "<script>window.open('home.php','_self')</script>";}
            else{
                echo "<script>window.open('home.php','_self')</script>";
            }
        }
        else {
            echo "<script>alert('incorrect details, try again!')</script>";
        }
    }
?>











