

<?php
include('includes/connection.php');
include("functions/functions.php");


?>

<html>
<meta name="description" content="Questionnaire Help them to post their doubts, questions, and even the views that are running in their minds as well as to share their
knowledge on the present trending topics like Top NEWS, Technologies, Entertainment, Health, Education, Entertainment, etc." />
<style>
.container-fluid{
background-color: #111111;


}
.navbar-default .navbar-nav>li>a1 {

    color:#fff;
}
.navbar-nav>li>a1{

    padding-top:15px;
    padding-bottom:15px;
    position:relative;
    display:block;
    padding:10px 15px;
}

</style>

<nav class="navbar navbar-default">

	  <div class="container-fluid">
	      <div class ="container">
<div class="navbar-header">

	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a style="color: white"; class="navbar-brand" href="home.php">Questionnaire</a>
</div>
<!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	      	<?php
	  
			$user = $_SESSION['user_email'];
			$get_user = "select * from users where user_email='$user'"; 
			$run_user = mysqli_query($con,$get_user);
			$row=mysqli_fetch_array($run_user);
			$user_id = $row['user_id'];
			$user_name = $row['user_name'];
			$first_name = $row['f_name'];
			$last_name = $row['l_name'];
			$describe_user = $row['describe_user'];
			$Relationship_status = $row['Relationship'];
			$user_pass = $row['user_pass'];
			$user_email = $row['user_email'];
			$user_country = $row['user_country'];
			$user_gender = $row['user_gender'];
			$user_birthday = $row['user_birthday'];
			$user_image = $row['user_image'];
			$user_cover = $row['user_cover'];
			$recovery_account = $row['recovery_account'];
			$register_date = $row['user_reg_date'];
			$user_posts = "select * from posts where user_id='$user_id'";
			$run_posts = mysqli_query($con,$user_posts); 
			$posts = mysqli_num_rows($run_posts);
			?>

	        <li><a  style="color: white"; href='profile.php?<?php echo "u_id=$user_id" ?>'><?php echo "<img class='img-circle' src='users/$user_image' width='24' height='24' />"; ?>&nbsp;&nbsp;<?php echo "$user_name"; ?></a></li>
	   
			<li><a style="color: white";  href="members.php">Find People</a></li>
			
		

			<?php
					
			echo"
					
	        <li class='dropdown'>
	          <a1 href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>More</a1>
	          <ul class='dropdown-menu'>
	            <li>
	           <a href='my_post.php?u_id=$user_id'>My Posts <span class='badge badge-secondary'> $posts</span></a>
	            </li>

	            <li>
	            <a href='edit_profile.php?u_id=$user_id'>Edit My Profile</a>
	            </li>
	           
	            
		    	             	            <li>
	            <a href='About.php'>About</a>
	            </li>	          
	            
	            <li>
	            <a href='contact us.php'>Contact - Us</a>
	            </li>
	            
	            <li>
	            <a href='https://privacyterms.io/view/EyMMBQ2l-PehdfibA-yAKYFg/'>Privacy</a>
	            </li>	             	            <li>
	            <a href='https://privacyterms.io/view/PK78FBjo-iCanL482-yODDRh/'>Terms</a>
	            </li>
	            <li role='separator' class='divider'></li>
	            
	          </ul>
	        </li>
	      </ul>
	      ";
	      ?>
	      <ul class="nav navbar-nav navbar-right">
	          <li><a style="color: white";  href="logout.php">Logout</a></li>
	        <li class="dropdown">
	          <form class="form-inline my-2 my-lg-0" method="get" action="results.php">
		        <div class="form-group">
		          <input type="text" class="form-control" name="user_query" placeholder="Search">
		        </div>
		        <button type="submit" class="btn btn-info" name="search"><i class="glyphicon glyphicon-search"></i></button>
		      </form>
	        </li>
	      </ul>
	      </div>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->

</nav>
