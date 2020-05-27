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
$tid=$_POST["tid"];
$psw=md5($_POST["psw"]);
$sub1=$_POST['sub1'];
$sub2=$_POST['sub2'];
$sub1section=$_POST['sub1section'];

$sub2section=$_POST['sub2section'];
$sql = "insert into teacherdetails(tid,name,email,qualification,phone,dob,sub1,sub1section,sub2,sub2section,psw) values('$tid','$name','$email','$qualification','$phone','$dob','$sub1','$sub1section','$sub2','$sub2section','$psw')";
if($conn->query($sql) === TRUE)
{echo "succesful";}


else
{echo "error".$conn->error;}
$conn->close();
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
   
<?php
 include '../dbconfig.php';
$sql = "SELECT * FROM subject";
if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
    ?>
<select name="sub1">
    <?php
  while ($row=mysqli_fetch_row($result))
    {

    $sub= $row[1];
    $subno= $row[0];
    ?>

<option value="<?php echo $subno; ?>"><?php echo $sub;?></option>


    <?php


  }
?>
</select>

<select name="sub1section">
  <option value="A">A</option>
    <option value="B">B</option>
    <option value="C">Both</option>
  </select>
<?php

}

$sql = "SELECT * FROM subject";
if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
    ?>
<select name="sub2">
    <?php
  while ($row=mysqli_fetch_row($result))
    {

    $sub= $row[1];
    $subno= $row[0];
    ?>

<option value="<?php echo $subno; ?>"><?php echo $sub;?></option>


    <?php


  }
?>
</select>


<select name="sub2section">
  <option value="A">A</option>
    <option value="B">B</option>
    <option value="C">Both</option>
  </select>
<?php

}



?>


   
 
    <input  type="text" placeholder="tid" name="tid" required>
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
