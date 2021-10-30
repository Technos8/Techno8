<?php
include("includes/connection.php");
session_start();
if ($_SESSION["user_email"] == "" && $_SESSION["user_email"] == null){
}
else{
	echo "<script>window.open('home.php','_self')</script>";
	
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WPHMMP5');</script>
<!-- End Google Tag Manager -->

	<title>Questionnaire - Log In or Sign Up, Ask Questions Questionnaire IN Answers you</title>
	
	
	<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "WebSite",
  "name": "Questionnaire.com",
  "url": "https://Questionnaire.com/",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https://Questionnaire.in/results.php?user_query=&search={search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>


  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-178254635-1');
</script>



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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

	#centered1 {
    position: absolute;
    font-size:10vw;
    top: 30%;
    left: 30%;
    transform: translate(-50%, -50%);
	}
	#centered2 {
    position: absolute;
    font-size:10vw;
    top: 50%;
    left: 40%;
    transform: translate(-50%, -50%);
	}
	#centered3 {
    position: absolute;
    font-size:10vw;
    top: 70%;
    left: 30%;
    transform: translate(-50%, -50%);
	}
	#signup{
		width: 30%;
		border-radius: 30px;
	}
	#login{
		width: 30%;
		background-color: #fff;
		border: 1px solid #1da1f2;
		color: #1da1f2;
		border-radius: 30px;
	}
	#login:hover{
		width: 30%;
		background-color: #fff;
		color: #1da1f2;
		border: 2px solid #1da1f2;
		border-radius: 30px;
	}

	.header {
  background-color: #0c9c0d;
  padding: 23px;
  text-align: center;
   border-radius: 4px;
}
.Questionnairelogo{
    
    font-size:23px;
    color: white;
    font-family: monospace;
        letter-spacing:2px;
        font-weight:bolder;
        
}
.btn1 {
  border: none;
  background-color: inherit;
  padding: 10px 10px;
  font-size: 16px;
  cursor: pointer;
  display: inline-block;
}

.btn1:hover {background: #eee;}

.success {color: #fffff;}
}
</style>










<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.w3-btn {width:150px;}
</style>





<body>
        <meta name="google-site-verification" content="1G-SujUrJ_k3b0uA_4QWRd-7t-QvGADXolPyd0SH_1U" /> 
    	<meta name="google-site-verification" content="lULEKL17sg-sjIrr_qC7ULbWmW9nggAZgJrykNQa5Qo" />
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WPHMMP5"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

		<div class="header">
			
				<center><h1 class="Questionnairelogo">Questionnaire</h1></center>
		
		</div>
	<div class="w3-container">
 </div>
		
<center>
	
		<div >
				<div>
				
			<br><br>
			
			<meta property="og:image" content="images/Questionnairelogo1.png" />
			<amp-img src="images/Questionnairelogo1.png" class="img-rounded" title="Questionnaire.in" height="150px" width="150px"></amp-img>
			

							<img src="images/Questionnairelogo1.png" class="img-rounded" title="Questionnaire.in" width="150px" height="150px">
			
				<h2><strong>Questionnaire.in helps people to post their questions and a set of<br> people in Questionnaire.com community
				                    are ready to give<br> answers based on their previous experiences.</strong></h2>
			
				<form method="post" action="">
					<button id="signup" class="btn btn-info btn-lg" name="signup">Sign up</button><br><br>
					<?php
						if(isset($_POST['signup'])){
							echo"<script>window.open('signup.php','_self')</script>";
						}
					?>
					<button id="login" class="btn btn-primary btn-lg" name="login">Login</button>
					<?php
						if(isset($_POST['login'])){
							echo"<script>window.open('signin.php','_self')</script>";
						}
					?>
			
				</form>
			</div>
		</div>

		</center>
		<br><br><br><br>
		<center>
		
<footer>
</footer>
</center>

		
</body>
</html>

