
<!DOCTYPE html>
<link rel="icon" href="images/Questionnaire-icon.png.png" >
<?php



include("includes/header.php");
?>
<?php
if(isset($_SESSION['root']) && isset($_SESSION[''])){
if(!isset($_SESSION['user_email'])){

	header("location: index.php");

}}
else{ ?>
<html amp lang="en">
<head>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-178254635-1');
</script>
    <meta charset="utf-8">
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <title> Questionnaire.in - user profile </title>
    <link rel="canonical" href="https://amp.dev/documentation/guides-and-tutorials/start/create/basic_markup/">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <script type="application/ld+json">
      {
        "@context": "https://Questionnaire.in/home.php",
        "@type": "NewsArticle",
        "headline": "Open-source framework for publishing content",
        "datePublished": "2015-10-07T12:02:41Z",
        "image": [
          "logo.jpg"
        ]
      }
    </script>
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>



    <meta name="googlebot" content="noindex">
<meta name="robots" content="noindex" />
<meta name="googlebot" content="noindex, nofollow">
 <meta name="googlebot-news" content="nosnippet">   



    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#303030" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

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
#own_posts{
    border: 1px solid #e6e6e6;
    padding: 30px 50px;
	width:90%;
}
#posts_img {
    height:300px;
   	width:100%;
   	
}
</style>
<body>
<div class="row">
	<?php
	global $con;

			if(isset($_GET['u_id'])){
			$u_id = $_GET['u_id'];
			}
			if($u_id < 0 OR $u_id == ""){
				echo"<script>window.open('home.php','_self')</script>";
			}else{ 

	?>



	<div class="col-sm-12">
		<?php
			if(isset($_GET['u_id'])){

			global $con;

			$user_id = $_GET['u_id'];

			$select = "select * from users where user_id='$user_id'";
			$run = mysqli_query($con,$select);
			$row=mysqli_fetch_array($run);

			$name = $row['user_name'];
			}

		?>


		<?php

		if(isset($_GET['u_id'])){

				global $con;

				$user_id = $_GET['u_id'];

				$select = "select * from users where user_id='$user_id'";
				$run = mysqli_query($con,$select);
				$row=mysqli_fetch_array($run);

				$id = $row['user_id'];
				$image = $row['user_image'];
				$name = $row['user_name'];
				$f_name = $row['f_name'];
				$l_name = $row['l_name'];
				$describe_user = $row['describe_user'];
				$country = $row['user_country'];
				$gender = $row['user_gender'];
				$register_date = $row['user_reg_date'];

				echo "
				<div class='row'>
					<div class='col-sm-1'>
					</div>
				
					<div style='background-color: #e6e6e6;' class='col-sm-3'><center>
					<h2>Information about</h2>
					<img class='img-circle' src='users/$image' width='150' height='150' />
					</center>
					<br><br>
					<ul class='list-group'>
					  <li class='list-group-item' title='Username'><strong>$f_name $l_name</strong></li>
					  <li class='list-group-item' title='User Status'><strong style='color:grey;'>$describe_user</strong></li>
					  <li class='list-group-item' title='Gender'>$gender</li>
					  <li class='list-group-item' title='Country'>$user_country</li>
					  <li class='list-group-item' title='User Registration Date'>$register_date</li>
					</ul>
					";
					$user = $_SESSION['user_email'];
					$get_user = "select * from users where user_email='$user'";
					$run_user = mysqli_query($con,$get_user);
					$row=mysqli_fetch_array($run_user);

					$userown_id = $row['user_id'];
					$user_name = $row['user_name'];
					$user_image = $row['user_image'];

					if($user_id == $userown_id){
						echo"<a href='edit_profile.php?u_id=$userown_id' class='btn btn-success'/>Edit Profile</a><br><br><br>";
						
					}

					echo"
					</div>
			
					";
				}
			?>
	<div class='col-sm-8'>
		<center><h1><strong><?php echo "$f_name $l_name"; ?></strong>Posts</h1></center>
			<?php
				global $con;

				if(isset($_GET['u_id'])){
				$u_id = $_GET['u_id'];
				}
				$get_posts = "select * from posts where user_id='$u_id' ORDER by 1 DESC LIMIT 5";

				$run_posts = mysqli_query($con,$get_posts);

				while($row_posts=mysqli_fetch_array($run_posts)){

				$post_id = $row_posts['post_id'];
				$user_id = $row_posts['user_id'];
				$content = $row_posts['post_content'];
				$upload_image = $row_posts['upload_image'];
				$post_date = $row_posts['post_date'];

				//getting the user who has posted the thread

				$user = "select * from users where user_id='$user_id' AND posts='yes'";

				$run_user = mysqli_query($con,$user);
				$row_user=mysqli_fetch_array($run_user);

				$user_name = $row_user['user_name'];
				$f_name = $row['f_name'];
				$l_name = $row['l_name'];
				$user_image = $row_user['user_image'];


				//now displaying all at once

				if($content=="No" && strlen($upload_image) >= 1){
				echo "
				<div id='own_posts'>
					<div class='row'>
						<div class='col-sm-2'>
							<p><img src='users/$user_image' class='img-circle' width='40px' height='40px'></p>
						</div>
						<div class='col-sm-6'>
							<h3><a style='text-decoration: none;cursor: pointer;color: #3897f0;' href='user_profile.php?u_id=$user_id'>$user_name</a></h3>
							<h4><small style='color:black;'>Updated a post on <strong>$post_date</strong></small></h4>
						</div>
						<div class='col-sm-4'>

						</div>
					</div>
					<div class='row'>
						<div class='col-sm-12'>
							<img id='posts-img' src='imagepost/$upload_image' style='height:350px;'>
						</div>
					</div><br>
									
				
						<a href='single.php?post_id=$post_id' style='float:right;'><button class='btn btn-info'>&#128172;</button></a><br>
				</div><br/><br/>
				";


				}
				else if(strlen($content) >= 1 && strlen($upload_image) >= 1){
				echo "
				<div id='own_posts'>
					<div class='row'>
						<div class='col-sm-2'>
							<p><img src='users/$user_image' class='img-circle' width='40px' height='40px'></p>
						</div>
						<div class='col-sm-6'>
							<h3><a style='text-decoration: none;cursor: pointer;color: #3897f0;' href='user_profile.php?u_id=$user_id'>$user_name</a></h3>
							<h4><small style='color:black;'>Updated a post on <strong>$post_date</strong></small></h4>
						</div>
						<div class='col-sm-4'>

						</div>
					</div>
					<div class='row'>
						<div class='col-sm-12'>
							<p class='show-read-more'>$content</p>
							<img id='posts-img' src='imagepost/$upload_image' style='height:350px;'>
						</div>
					</div><br>
						<a href='single.php?post_id=$post_id' style='float:right;'><button class='btn btn-info'>&#128172;</button></a><br>
						</div><br/><br/>
				";


				}
				else{

				echo "

				<div id='own_posts'>
					<div class='row'>
						<div class='col-sm-2'>
							<p><img src='users/$user_image' class='img-circle' width='40px' height='40px'></p>
						</div>
						<div class='col-sm-6'>
							<h3><a style='text-decoration: none;cursor: pointer;color: #3897f0;' href='user_profile.php?u_id=$user_id'>$user_name</a></h3>
							<h4><small style='color:black;'>Updated a post on <strong>$post_date</strong></small></h4>
						</div>
						<div class='col-sm-4'>

						</div>
					</div>
					<div class='row'>
						<div class='col-sm-12'>
							<h3><p class='show-read-more'>$content</p><br>
						</div>
					</div><br>
					<a href='single.php?post_id=$post_id' style='float:right;'><button class='btn btn-info'>&#128172;</button></a><br>
				</div><br><br>
				";


			}
		}
		?>
		</div>
	</div>
</div>
<?php } ?>
</body>
</html>
<?php } ?>
<?
if ($_SESSION["user_email"] == "" && $_SESSION["user_email"] == null)
	echo "<script>window.open('signin.php','_self')</script>";
	
	
?>
</style >
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>
$(document).ready(function(){
    var maxLength = 250;
    $(".show-read-more").each(function(){
        var myStr = $(this).text();
        if($.trim(myStr).length > maxLength){
            var newStr = myStr.substring(0, maxLength);
            var removedStr = myStr.substring(maxLength, $.trim(myStr).length);
            $(this).empty().html(newStr);
            $(this).append(' <a href="javascript:void(0);" class="read-more">more...</a>');
            $(this).append('<span class="more-text">' + removedStr + '</span>');
        }
    });
    $(".read-more").click(function(){
        $(this).siblings(".more-text").contents().unwrap();
        $(this).remove();
    });
});
</script>

<style>
    .show-read-more .more-text{
        display: none;
    }
</style>