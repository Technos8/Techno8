
<?php
session_start();
include("includes/header.php");
?>
<?php
    if(isset($_SESSION['root'])){
        if(!isset($_SESSION['user_email'])){
        }
    }
    else{ ?>
<!doctype html>
    <html>
        <head>
            <meta charset="utf-8">
	<meta name="google-site-verification" content="lULEKL17sg-sjIrr_qC7ULbWmW9nggAZgJrykNQa5Qo" />
	<meta name="google-site-verification" content="4DpYzvF7PiYldR_bvsCRMtWyVF3_e1yWz4z2ETKMiOI" />
<title> Questionnaire - Home  Ask Questions, Questionnaire Answers you.</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">






<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-178254635-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-178254635-1');
</script>
  <meta name="google-site-verification" content="1G-SujUrJ_k3b0uA_4QWRd-7t-QvGADXolPyd0SH_1U" />
    <meta name="googlebot" content="index">
<meta name="robots" content="index" />
<meta name="googlebot" content="index, follow">
 <meta name="googlebot-news" content="nosnippet">
	<meta name="theme-color" content="#303030" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="1G-SujUrJ_k3b0uA_4QWRd-7t-QvGADXolPyd0SH_1U" />
    <meta name="google-site-verification" content="1G-SujUrJ_k3b0uA_4QWRd-7t-QvGADXolPyd0SH_1U" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles/home_style2.css" media="all"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Candara">



    <link rel="stylesheet" href="css/style.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/css/emoji.css" rel="stylesheet">



<style>
    .img{


    border: 1px solid #ffffff;

    }

</style >
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>
$(document).ready(function(){
    var maxLength =460;
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
<body>
<div class="row">
	<div id="insert_post" class="col-sm-12">
		<center>
	  	<form action="home.php?id=<?php echo $user_id;?>" method="post" id="f" enctype='multipart/form-data'>
		<textarea class="form-control" id="content" rows="4" name="content" placeholder="Post your question ?  / blogs etc.."></textarea><br/>
		<label class="btn btn-warning" id="upload_image_button">select-image <i class="glyphicon glyphicon-picture"></i>
		<input type="file"name='upload_image' size="30" value="" id="filePhoto" >
		</br>
		</br>
		<div>
		    	<img id="previewHolder" alt="" BORDER="0" width="65px" height="45px"/>
		</div>

		</label>
		<button id="btn-post" class="btn btn-success" name="sub">Post</button>
				

		
		</form>
		<br><br>
		
        <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <div class="fb-video"
    data-href="https://www.facebook.com/watch/?v=304948337598870"
    data-width="500"
    data-allowfullscreen="true"></div>
</center>
</div>
	

		<?php insertPost();?>
	
		</center>
	</div>
</div>

<div class="row">
    
	<div class="col-sm-12">
	    
		<center><h2><strong></strong></h2><br></center>
		

			
		<?php get_posts();?>
	</div>
</div>
</body>

<?php } ?>


<script>
    function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      $('#previewHolder').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#filePhoto").change(function() {
  readURL(this);
});
</script>

</html>

