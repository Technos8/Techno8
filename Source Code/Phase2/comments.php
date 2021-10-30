<?php 
		$user = $_SESSION['user_email'];
		$get_user = "select * from users where user_email='$user'"; 
		$run_user = mysqli_query($con,$get_user);
		$row=mysqli_fetch_array($run_user);
					
		$user_id = $row['user_id']; 
		$user_name = $row['user_name'];




	$get_id = $_GET['post_id'];
		
	$get_com = "select * from comments where post_id='$get_id' ORDER by 1 DESC";
	
	$run_com = mysqli_query($con,$get_com);
	
	while($row=mysqli_fetch_array($run_com)){

		$com_id =$row['com_id'];
		$com = $row['comment']; 
		$com_name = $row['comment_author']; 
		$date = $row['date'];






if($user_name == $com_name){
		
 

		echo "

		<div class='row'>
	
        <div class='col-md-6 col-md-offset-3'>
            <div class='panel panel-info'>
                <div class='panel-body'>
                	<div>

					<h4><strong>$com_name</strong><i> commented</i> on $date</h4>






    <p class='show-read-more' style='margin-left:5px;word-wrap:break-word; font-size:20px;margin: 0;
            padding: 0;
            border: 0;
            font: inherit;
            color: black;
            white-space: pre-wrap;
            vertical-align: baseline;'>$com</p>

					</div> 
                                        <a href='edit_post1.php?com_id=$com_id' style='float:right;'><button  class='btn btn-info'>Edit</button></a>
					<a href='functions/delete_post1.php?com_id=$com_id' style='float:right;'><button class='btn btn-danger'>Delete</button></a>
					
                </div>
            </div>
        </div>
        </div>
		";

	}else{


		echo "

		<div class='row'>
        <div class='col-md-6 col-md-offset-3'>
            <div class='panel panel-info'>
                <div class='panel-body'>
                	<div>
					<h4><strong>$com_name</strong><i> commented</i> on $date</h4>
					<p class='show-read-more' style='margin-left:5px;font-size:20px;    margin: 0;
    padding: 0;
    border: 0;
    font: inherit;
    color: black;
    vertical-align: baseline;'>$com</p>
					</div>
					

                </div>
            </div>
        </div>
		</div>
	";
	}

	
}

	
?>
