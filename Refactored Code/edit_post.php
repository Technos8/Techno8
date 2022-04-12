 <link rel="icon" href="images/Questionnaire-icon.png.png" >
<!DOCTYPE html>
<?php

session_start();
include("includes/header.php");
?>
<?php
if(isset($_SESSION['root']) && isset($_SESSION[''])){
if(!isset($_SESSION['user_email'])){

	header("location: index.php");
}
}
else{ ?>
<html>
<head>
	<title>Welcomme to Home</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles/home_style2.css" media="all"/>
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

</style>
<body>
<div class="row">
<div class="col-sm-3">

</div>
<div class="col-sm-6">
	<?php
	if(isset($_GET['post_id'])){

		$get_id = $_GET['post_id'];

		$get_post = "select * from posts where post_id='$get_id'";
		$run_post = mysqli_query($con,$get_post);
		$row=mysqli_fetch_array($run_post);

		$post_con = $row['post_content'];

	}
	?>
	<form action="" method="post" id="f"><br>

		<center><h2>Edit Your Post:</h2></center><br>
		<textarea class="form-control" cols="83" rows="4" name="content"><?php echo $post_con;?></textarea><br>
		<input type="submit" name="update" value="Update Post" class="btn btn-info"/>

	</form>

	<?php
		if(isset($_POST['update'])){

	
$content = htmlentities($_POST['content'],ENT_QUOTES);
		$update_post = "update posts set post_content='$content' where post_id='$get_id'";
		$run_update = mysqli_query($con,$update_post);

		if($run_update){

		echo "<script>alert('Post has been updated!')</script>";
		echo "<script>window.open('home.php','_self')</script>";

		}

		}
	?>
</div>
<div class="col-sm-3">
</div>
</div>
</body>
</html>
<?php } ?>
<?
if ($_SESSION["user_email"] == "" && $_SESSION["user_email"] == null)
	echo "<script>window.open('signin.php','_self')</script>";
	
	
?>
