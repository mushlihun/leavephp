<?php

session_start();
if(isset($_SESSION['user']))
{
	require 'connect-db.php';
	// if(isset($_POST['change']))
	if(!empty($_POST))
	{
		$oldpass = $_POST['old-pass'];
		$newpass = $_POST['new-pass'];
		$newpasshash = password_hash($newpass, PASSWORD_DEFAULT);

		$que1=mysqli_query($con,"select pass from faculty where email='".$_SESSION['user']."'");
		$row = mysqli_fetch_array($que1);
		if(password_verify($oldpass, $row['0']))
		{
			$que2 = "UPDATE faculty set pass = '".$newpasshash."' where email = '".$_SESSION['user']."'";
			$que3 = mysqli_query($con,$que2);
			header("location: home.php");
		}

		else
		{
			echo "<center>Change password is failed!</center>";
			header("location: user-settings.php");
		}
		

	}


	else
	{
		echo("Database error");
	}	
}



?>