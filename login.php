<?php
	session_start();
	require_once 'connection.php';
 
	if(ISSET($_POST['login'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
 
		$query = mysqli_query($conn, "SELECT * FROM `users` WHERE `email`='$email' && `password`='$password'") or die(mysqli_error());
		$fetch=mysqli_fetch_array($query);
		$count=mysqli_num_rows($query);
 
		if($count > 0){
			$_SESSION['id']=$fetch['id'];
			header('location: welcome.php');
		}else{
			echo "<div class='alert alert-danger'>Invalid username or password</div>";
		}
	}
?>
