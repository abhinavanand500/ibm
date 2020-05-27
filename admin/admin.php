<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?php include 'header.php';?>
<?php
if(!empty($_GET['errorMssg'])) {
			
	$errorMssg = $_GET['errorMssg'];
	 

	echo $errorMssg; } ?>

		<h2>LOGIN</h2>

		<form action="dologin.php" method="post">

		  <div class="imgcontainer">
			<img src="images/login.png" alt="Avatar" class="avatar">
		  </div>

		  <div class="container">

			<input type="text" placeholder="Enter Username" name="uname" required>


			<input type="password" placeholder="Enter Password" name="psw" required>

		   <div class="submit"><button>Submit</button></div>
			<div class="rp">
			  <input type="checkbox" checked="checked" name="remember"> Remember me
		   </div>

		<div class="fp">
		<a href="#">forgot password</a></div>
		  </div>

		  <div class="container">
		  </div>
		</div>
		</form>

		</body>
		</html>