<?php 
ini_set('session.gc_maxlifetime', 36000);
$con = mysqli_connect("localhost","retorbtf_root","Santhosh@@331","retorbtf_social_network") or die("Connection was not established");

if(isset($_GET['com_id'])){
		
		$com_id = $_GET['com_id']; 
		
		$delete_post = "delete from comments where com_id='$com_id'";
		
		$run_delete = mysqli_query($con,$delete_post);
		
		if($run_delete){
		echo "<script>alert('A comment has been deleted!')</script>";
		echo "<script>window.open('../home.php','_self')</script>";
		}
		
		
		}

?>
