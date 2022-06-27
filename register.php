<?php
	require_once'connection.php';
	if(ISSET($_POST['register'])){
		$username=$_POST['username'];
		$email=$_POST['email'];
		$password=$_POST['password'];
 
 
		mysqli_query($conn, "INSERT INTO `users` VALUES('', '$username', '$email', '$password')") or die(mysqli_error());
 
 
		echo "<center><h4 class='text-success'>Successfully registered!</h4></center>";
	}
?>
