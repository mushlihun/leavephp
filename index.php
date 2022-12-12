<!DOCTYPE html>
<html lang="en">
<head>
<title>Leave Management System</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href='https://fonts.googleapis.com/css?family=Montserrat:300' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:600' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
<link href="css/all.css" rel="stylesheet">
</head>
<body>
	<script type="text/javascript" src="js/signup.js"></script>
<!--Header-->
<div class="container-fluid">
<div class="header-text">
	Leave Management System
</div>
</div>
<!--End Header-->
<!--Content-->
<!--Left-->
<div class="image-left">
<img src="leave.svg" width="100%" height="100%" style="padding-top: 70px; padding-left: 30px;">
</div>

<!--End Left-->
<!-- Right-->
<div class="right-content">
<div class="card" style="align-content: center;">
<div class="container1">
<form action="login1.php" method="POST">
<input type="email" name="email" placeholder="Enter your email" id="email" required>
<br>
<br>
<input type="password" name="password" placeholder="Enter your password" required>
<br>
<br>
<center><button type="submit" value="Login" name="login">Login</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</form>
<button type="submit" value="Signup" name="signup" onclick="location.href='signup.php'">Sign Up</button>
</center>
</div>
</div>
</div>
<!--End Right-->
<!--End content-->
<!--Footer-->
<div class="container-fluid" style="margin-top: 45%;">
<div class="footer-text">
	&copy; All Copyrights Reserved. HardCoders
</div>
</div>
<!--End Footer-->

</body>
</html>