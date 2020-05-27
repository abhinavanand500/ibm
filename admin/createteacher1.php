<?php
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<?php include '../dbconfig.php';?>


<?php
if(isset($_POST['submit'])){
$name=$_POST["name"];
$email=$_POST["email"];
$qualification=$_POST["qualification"];
$phone=$_POST["phone"];
$dob=$_POST["dob"];
$psw=md5($_POST["psw"]);
	$checkbox = $_POST['subject']; 
$id=0;
	
	$sql = "SELECT MAX(teacherid) as 'id' FROM teacherdetails";
if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {	$id=$row[0];
	 $id=$id+1;
	 //echo $id;
		
	
	 }
                 
  
}
	
	
	
$sql = "insert into teacherdetails(teacherid,name,email,qualification,phone,dob,psw) values('$id','$name','$email','$qualification','$phone','$dob','$psw')";

if($conn->query($sql) === TRUE)
{echo "succesful";}


else
{echo "error".$conn->error;}
$conn->close();
	
	
	//$checkbox = $_POST['subject'];  
	 include '../dbconfig.php';
        for($i=0;$i<count($checkbox);$i++){
        $check_id = $checkbox[$i];
		echo $check_id."<br>";	
			echo $id."<br>";
			
			
			$sql1 = "insert into assignsubject(teachercode,subjectcode) values('$id','$check_id')";

if (mysqli_query($conn, $sql1)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
}

			
			
			
		}
	
	
	
	

}
	
	

	
        
?>



<form class="formsignup" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<div class="container">
<h2>SIGN-UP</h2>
    
  
    <i class="fa fa-user-circle" aria-hidden="true" style="font-size:20px;"></i><input  type="text" placeholder="Enter name" name="name" required>
    <br><i class="fa fa-envelope" aria-hidden="true" style="font-size:20px;"></i><input type="text" placeholder="Enter email" name="email" required>
    <br><i class="fa fa-id-badge" aria-hidden="true" style="font-size:20px;"></i><input type="text" placeholder="qualification" name="qualification" required>
<br><i class="fa fa-whatsapp" aria-hidden="true" style="font-size:20px;"></i><input type="tel" placeholder="Phone Number" name="phone" pattern="[0-9]{10}" required>
<br><i class="fa fa-calendar" aria-hidden="true" style="font-size:20px;"><label for="dateofbirth" class="dob"> Birthday</label>
   </i> <input type="date" name="dob"  max="2003-12-31" required ><br><br>
   
   <?php include '../dbconfig.php';?>
   <?php
	
$sql = "SELECT * FROM subject";
if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {	$subjectcode=$row[0];
		$name= $row[1];
	
	?>
<input type="checkbox" name="subject[]" value="<?php echo $subjectcode;?>" > <?php echo $name; ?> 
    


 
<?php
   }
                 
  
}	
	?>
    
   <br><i class="fa fa-unlock" aria-hidden="true" style="font-size:20px;"></i><input type="password" placeholder="Enter Password" name="psw" required>
   
        
<div class="submit"><input type="submit" name="submit" value="submit"></div>
    
	
    </div>
  
</form>
</div>

</div>
</body>
</html>
<?php
?>
 











