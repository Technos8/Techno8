<!DOCTYPE html>
<html>
<head>
	<title>Forgotten Password</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#303030" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="jquery.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
		<link rel="icon" href="images/Questionnaire-icon.png.png" >
</head>
<style>
  body{
    overflow-x: hidden;
  }
  .main-content {
    width: 80%;
    height: 40%;
    margin: 10px auto;
    background-color: #fff;
    
    padding: 40px 50px;
  }
	.header {
  background-color: #0c9c0d;
  padding: 23px;
  text-align: center;
   border-radius: 4px;
}

  #signup{
    width: 60%;
    border-radius: 30px;
  }
  	.Questionnairelogo{
    
    font-size:23px;
    color: white;
    font-family: monospace;
        letter-spacing:2px;
        font-weight:bolder;
        
}
</style>
<body>
		<div class="header">
			
				<center><h1 class="Questionnairelogo">Questionnaire</h1></center>
		
		</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="main-content">
		        
		          <h3 style="text-align: center;"><strong>Forgot Password.</strong></h3><hr>
		        
		        <div class="l-part">
		          <form  action="" method="post">
		          	<div class="input-group">
								    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								    <input id="email" type="text" class="form-control" name="email" placeholder="Enter Email" required="required">
								</div><br>
								<hr>
								<pre class="text">Enter your BestFriend name down below</pre>
		          	 <div class="input-group">
								    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
								    <input id="msg" type="text" class="form-control" placeholder="Someone" name="recovery_account" required="required">
								</div><br>
							<p>Still unable to retrieve Password.<br>
							note  "Send your maild id to Questionnaire.in@gmail.com Sending you the password with in one day. "
							<p><a href = "mailto:Questionnaire.in@gmail.com ">Questionnaire.inofficial@gmail.com</a>
					<a style="text-decoration:none;float: right; color:#187FAB;" data-toggle="tooltip" title="Signin"  href="signin.php">Back to Signin?</a><br><br>
		            <center><button id="signup" class="btn btn-info btn-lg" name="submit">Submit</button></center>
		          </form>
		        </div>
	      </div>
		</div>
	</div>
</body>
</html>
<?php
session_start();

include("includes/connection.php");



	if(isset($_POST['submit'])){

	$email = htmlentities(mysqli_real_escape_string($con,$_POST['email']));
	$recovery_account = htmlentities(mysqli_real_escape_string($con,$_POST['recovery_account']));

	$select_user = "select * from users where user_email='$email' AND recovery_account='$recovery_account'";

	$query = mysqli_query($con,$select_user);

	$check_user = mysqli_num_rows($query);

	if($check_user==1){

	$_SESSION['user_email']=$email;

	echo "<script>window.open('change_password.php','_self')</script>";

	}
	else {
	echo "<script>alert('Your Email or your Bestfriend name is Incorrect')</script>";
	echo "<script>window.open('forgot_password.php','_self')</script>";
	}

	}


?>
