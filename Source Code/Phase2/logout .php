<?php


session_start();
session_destroy();
	    setcookie('emailcookie','' , time() - 3600 * 24 * 30);
	     setcookie('passcookie','', time() - 3600 * 24 * 30);
	     header("Location:signin.php");

?>
