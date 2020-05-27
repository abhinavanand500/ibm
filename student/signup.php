<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>signup-form</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"><style>
body {margin: 0;}

#rcorners1 {
  border-radius: 70px 10px 10px 70px;
  background: #1A1B5C;
  width: 200px;
  height: 50px; 
  text-align: center;
  padding-top: 10px;

}




ul.sidenav {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 25%;
  background-color: #accffe;
  position: fixed;
  height: 100%;
  overflow: auto;

}
ul.right{float: right;
	padding-right: 0px;
	background-color: #accffe;



}

ul.sidenav li a {
  display: block;
  color: #accffe;
  padding: 8px 16px;
  text-decoration: none;
  font-size: 25px;
}
 
ul.sidenav li a.active {
  background-color: #accffe;
  color: white;
      margin-left: 50px;
}

ul.sidenav li a:hover:not(.active) {
  background-color: #accffe;
  color: white;
}

div.content {
  margin-left: 25%;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 1900px) {
  ul.sidenav {
    width: 100%;
    height: auto;
    position: relative;
  }
  
  ul.sidenav li a {
    float: left;
    padding: 0px;
  }
  
  div.content {margin-left: 0;}
}

@media screen and (max-width: 500px) {
  ul.sidenav li a {
    text-align: center;
    float: none;
  }
}
</style>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="fonts/linearicons/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body><ul class="sidenav">
  <li><a class="active" href="#home"><p id="left"><h>virtual education</h></p></a></li>
<ul class="right">
  <li><a href="login.php"><p id="rcorners1"><h>Login</h></p></a></li>
  </ul> 
</ul>

  
		<?php include '../dbconfig.php';?>


<?php
if(isset($_POST['submit'])){
$name=$_POST["name"];
$email=$_POST["email"];
$usn=$_POST["usn"];
$phone=$_POST["phone"];
$dob=$_POST["dob"];
$sem=0;
$section=$_POST["section"];
$psw=md5($_POST["psw"]);
$sql = "insert into student(name,email,usn,phone,dob,sem,section,password) values('$name','$email','$usn','$phone','$dob','$sem','$section','$psw')";
if($conn->query($sql) === TRUE)
{echo "succesful";}
else
{echo "error".$conn->error;}
$conn->close();
}
?>
		<div class="wrapper">
			<div class="inner">
				<img src="images/image-1.png" alt="" class="image-1">
                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

					<h3>New Account?</h3>
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" class="form-control" placeholder="Username" name="name" required>
					</div>
					<div class="form-holder">
						<span class="lnr lnr-phone-handset"></span>
						<input type="text" class="form-control" placeholder="Phone Number" name="phone" required>
					</div>
					<div class="form-holder">
						<span class="lnr lnr-envelope"></span>
						<input type="text" class="form-control" placeholder="Mail" name="email" required>
					</div>
					<div class="form-holder">
					<span class="lnr lnr-file-empty"></span>
						<input type="text" class="form-control" placeholder="usn" name="usn" required>
					</div>
					<div class="form-holder">
						<span class="lnr lnr-pointer-right"></span>
						<input type="date" class="form-control" placeholder="dob" name="dob">
					</div>
					
					<div class="form-holder">
						<span class="lnr lnr-location"></span>
						<input type="text" class="form-control" placeholder="section" name="section" required>
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="password" class="form-control" placeholder="Password" name="psw" required>
					</div>
					
					<button type="submit" name="submit" value="submit">
						<span>Register</span>
					</button>
				</form>
				
				<img src="images/image-2.png" alt="" class="image-2">
			</div>
			
		</div>
		
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>