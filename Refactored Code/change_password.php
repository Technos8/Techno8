<!DOCTYPE html>
<?php
ini_set('session.gc_maxlifetime', 36000);
session_start();
include("includes/connection.php");
include("functions/functions.php");
?>
<?php 
if(isset($_SESSION['root']) && isset($_SESSION[''])){
if(!isset($_SESSION['user_email'])){
	
	header("location: index.php");
}
}else{ 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"><script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

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
		
</head>

<style>
	.main-content {
    width: 50%;
    height: 40%;
    margin: 10px auto;
    background-color: #fff;
    padding: 40px 50px;
  }
  .header {
    border: 0px solid #000;
    margin-bottom: 5px;
  }
  .well{
    background-color: #0c9c0d;
  }
  #signup{
    width: 60%;
    border-radius: 30px;
  }
</style>
<body>
	<div>
		<?php 
		$user = $_SESSION['user_email'];
		$get_user = "select * from users where user_email='$user'"; 
		$run_user = mysqli_query($con,$get_user);
		$row=mysqli_fetch_array($run_user);
					
		$user_id = $row['user_id'];
		$user_name = $row['user_name'];
		?>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="well">
				<center><h1 style="color: white;"><strong>Questionnaire</strong></h1></center>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="main-content">
		        <div class="header">
				<h3 style="text-align: center;"><strong>Change Your Password </strong></h3>
				<strong style="color:#187FAB; "><i><?php echo $user_name; ?></i></strong>
				<hr>
		        </div>
		        <div class="l-part">
		          <form  action="" method="post">
		          	<div class="input-group">
					    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					    <input id="password" type="password" class="form-control" name="pass" placeholder="New Password" required="required">
					</div><br>
					<div class="input-group">
					    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					    <input id="password" type="password" class="form-control" name="pass1" placeholder="Re-enter Password" required="required">
					</div><br>
		            <center><button id="signup" class="btn btn-info btn-lg" name="change">Change Password</button></center>
		          </form>
		        </div>
	      </div>
		</div>
	</div>
</body>
</html>
  	<?php
        if(isset($_POST['change'])){
			$pass = htmlentities(mysqli_real_escape_string($con,$_POST['pass']));
			$pass1 = htmlentities(mysqli_real_escape_string($con,$_POST['pass1']));

				if ($pass == $pass1) {
					if (strlen($pass) >= 6 && strlen($pass) <= 60) {
						$update = "update users set user_pass='$pass' where user_id='$user_id'";
		
						$run = mysqli_query($con,$update);
							echo "<script>alert('Your Password is changed a moment ago')</script>";
							echo "<script>window.open('home.php','_self')</script>";
							
					}else{
						echo "<script>alert('Your Password should be greater than 6 words')</script>";
						}
					}else{
						echo "<script>alert('Your Passwords did not match')</script>";
						echo "<script>window.open('change_password.php','_self')</script>";
					}
		}
    ?>

<?php } ?>