<!DOCTYPE html>
<html>
<head>
	<title>SignIn | questionnaire </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="jquery.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <meta name="google-site-verification" content="1G-SujUrJ_k3b0uA_4QWRd-7t-QvGADXolPyd0SH_1U" />

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

	#signin{
		width: 60%;
		border-radius: 30px;
	}
	.overlap-text {
	  position: relative;
	}

	.overlap-text a {
	  position: absolute;
	  top: 8px;
	  right: 10px;
	  font-size: 14px;
	  text-decoration: none;
	  font-family: 'Overpass Mono', monospace;
	  letter-spacing: -1px;
	}
	.questionnaire{

    font-size:23px;
    color: white;
     font-family: monospace;
        letter-spacing:2px;
        font-weight:bolder;

}
</style>
<body>
		<div class="header">

				<center><h1 class="questionnaire">//  Questionnaire  //</h1></center>

		</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="main-content">

		          <h3 style="text-align: center;"><strong>Login</strong></h3><hr>

		        <div class="l-part">
		          <form  action="" method="post">
		          	<input type="email" placeholder="Email" name="email" required class="form-control input-md" value="<?php if(isset($_COOKIE["emailcookie"])) { echo $_COOKIE["emailcookie"]; } ?>" /><br>
                <div class="overlap-text">
			            <input type="password" placeholder="Password" name="pass" required class="form-control input-md" value="<?php if(isset($_COOKIE["passcookie"])) { echo $_COOKIE["passcookie"]; } ?>" /><br>
			            </div>
<a style="text-decoration:none; color:#187FAB;  font-size: x-small;"><input id="rememberme" name="rememberme"  type="checkbox" />&nbsp;rememberme</a>
			            <div>



		       		<a style="text-decoration:none;float: right; color:#187FAB;" data-toggle="tooltip" title="Create Account!" href="signup.php">Don't have<br> an account?</a><br><br>
		       		<br> <br>
		            <center><button id="signin" class="btn btn-info btn-lg" name="login">Login</button></center>
		            <?php include("login.php"); ?>
		          </form>
		          </div>
		        </div>
	      </div>
		</div>
	</div>

</body>
</html>
