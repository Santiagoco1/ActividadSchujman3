<?php 
	session_start();
	if($_COOKIE['user'])
		{
			unset($_COOKIE['user']);
			unset($_COOKIE['id']);
			session_destroy();
			header("location:index.html");
		}
	else
		{
			echo '<script>alert("GOLLLL  ")</script> ';
			header("location:index.html");
		}
?>