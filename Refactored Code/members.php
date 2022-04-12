

<!DOCTYPE html>
<link rel="icon" href="images/Questionnaire-icon.png.png" >
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
<html amp lang="en">
<head>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-178254635-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-178254635-1');
</script>

    <meta charset="utf-8">
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <title> Find People - Questionnaire.in</title>
    <link rel="canonical" href="https://amp.dev/documentation/guides-and-tutorials/start/create/basic_markup/">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "NewsArticle",
        "headline": "Open-source framework for publishing content",
        "datePublished": "2015-10-07T12:02:41Z",
        "image": [
          "logo.jpg"
        ]
      }
    </script>
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>


	<link rel="icon" href="images/Questionnaire-icon.png.png" >
	<meta name="theme-color" content="#303030" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="1G-SujUrJ_k3b0uA_4QWRd-7t-QvGADXolPyd0SH_1U" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="styles/home_style2.css" media="all"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Candara">

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
     <link rel="icon" href="images/icons8-circled-r-24.png">


<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">



</head>
<body>
<div class="row">
	<div class="col-sm-12">
		<center><h2>Find New People</h2></center><br><br>
		<div class="row">
			<div class="col-sm-4">
			</div>
			<div class="col-sm-4">
			<form class="search_form" action="">
			  <input type="text" placeholder="Search Friends" name="search_user">
			  <button class="btn btn-info" type="submit" name="search_user_btn"> <i class="material-icons">search</i></button>
			</form>
			</div> 
			<div class="col-sm-4">
			</div>
		</div><br><br>
		<?php search_user();?>
	</div>
</div>
</body>
</html>
<?php } ?>
<?
if ($_SESSION["user_email"] == "" && $_SESSION["user_email"] == null)
	echo "<script>window.open('signin.php','_self')</script>";
	
	
?>
