<?php
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<?php include '../dbconfig.php';

$sql = "SELECT * FROM teacherdetails";
if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
		$id=$row[0];
    $name= $row[1];
    $email=$row[2];
    $qualification=$row[3];
	$phone=$row[4];
		$dob=$row[5];
		$sub1=$row[6];
		$sub2=$row[7];
		$psw=$row[8];
		$psw1= md5($psw);
      		
 ?>
	
		<form action="viewteacher.php" method="post" class="updateteacher">
		<input  type="text" name="name" value="<?php echo $name;?>">
		<input  type="text" name="email" value="<?php echo $email;?>">
		<input  type="text" name="qualification" value="<?php echo $qualification;?>">
		<input  type="phone" name="phone" value="<?php echo $phone;?>">
		<input  type="date" name="dob" value="<?php echo $dob;?>">
		<input  type="text" name="sub1" value="<?php echo $sub1;?>">
		
		<input  type="text" name="sub2" value="<?php echo $sub2;?>">
				<input  type="text" name="psw" value="<?php echo $psw1;?>">

		<input type="submit" name="update" value="update">
		<input type="submit" name="delete" value="Delete">
		<input type="submit" name="ResetPassword" value="Reset Password">
		
		</form>
	
	
		
			
				
						
<?php
   }
                 
  
}?>

</body>
</html>
<?php
?>
 











