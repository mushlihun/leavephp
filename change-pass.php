<?php

session_start();
if(isset($_SESSION['user']))
{
	require 'connect-db.php';
	echo ($_POST['old-pass']);
	echo("==oldpass==");
	echo ($_POST['new-pass']);
	echo("==newpass==");
	echo($_POST['change']);
	if(isset($_POST['change']))
	{
		$oldpass = $_POST['old-pass'];
		$newpass = $_POST['new-pass'];
		$newpasshash = password_hash($newpass, PASSWORD_DEFAULT);

		$que1=mysqli_query($con,"select pass from faculty where email='".$_SESSION['user']."'");
		$row = mysqli_fetch_array($que1);
		echo ($row['0']);
		if(password_verify($oldpass, $row['0']))
		{
			
			$que2 = "UPDATE faculty set pass = '".$newpasshash."' where email = '".$_SESSION['user']."'";
			echo ("===que2===");
			echo ($que2);
			//header("location: home.php");	
		}

		else
		{
			echo "Error";
		}
		

	}


	else
	{
		echo("Database error");
	}	
}



?>