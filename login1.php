<?php

require 'connect-db.php';

if(isset($_POST['login']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];

	$que1=mysqli_query($con,"select pass from faculty where email='$email'");
	$row = mysqli_fetch_array($que1);
	
	if(password_verify($password, $row['pass']))
	//if($password == $row[0])
	{
		session_start();
		$_SESSION['user'] = $email;
		$_SESSION['faculty_id'] = $faculty_id;
		header("location: home.php");	
	}

	else
	{
		header("location:index.php");
	}
	

}
else if(isset($_POST['signup']))
{
	header("location:signup.php");
}
else
{
	echo("Database error");
	echo($password);
}


?>