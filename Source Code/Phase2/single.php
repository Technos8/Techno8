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
    



<h1></h1>
    <meta http-equiv='content-language' content='en-gb'>
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="google-site-verification" content="1G-SujUrJ_k3b0uA_4QWRd-7t-QvGADXolPyd0SH_1U" />
  <meta name="robots" content="index,follow"/>
  <meta name="googlebot" content="index">

 <meta name="googlebot-news" content="nosnippet"> 
	   


	<meta name="theme-color" content="#303030" /> 

   
    <meta name="google-site-verification" content="1G-SujUrJ_k3b0uA_4QWRd-7t-QvGADXolPyd0SH_1U" />
     
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
    <meta name="google-site-verification" content="1G-SujUrJ_k3b0uA_4QWRd-7t-QvGADXolPyd0SH_1U" />
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    
    
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-178254635-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-178254635-1');
</script>
<script>
$(document).ready(function(){
    var maxLength = 500;
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

    
</head>

<body >
<div class="row">
	<div class="col-sm-12">
		
		<?php single_post();?>
	
	</div>
</div>
</body>
</html>
<?php } ?>
