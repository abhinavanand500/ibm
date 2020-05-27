

<?php

 include '../dbconfig.php';

$uname=$_POST["uname"];
$psw=$_POST["psw"];
$psw= md5($psw);


	$result = mysqli_query($conn,"SELECT * FROM salogin WHERE username='$uname' and password = '$psw'");
	$count  = mysqli_num_rows($result);
	if($count==0) {
		echo "Invalid Username or Password!";
		
header("Location:admin.php?errorMssg=".urlencode("Invalid Username or Password!"));



	} else {
		echo "You are successfully authenticated!";

$sql = "SELECT * FROM salogin WHERE username='$uname'";
if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {

    $salno= $row[0];
    }


                $cookie_name="user";
                $cookie_value=$salno;
                setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
                
  
}


mysqli_close($conn);
                header("Location: admindashboard.php");
                

	}



?>





