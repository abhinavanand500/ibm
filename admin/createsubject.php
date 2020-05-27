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
$subjectcode=$_POST["subjectcode"];
$sem=$_POST["sem"];
$branch=$_POST["branch"];

	

$sql = "insert into subject(subjectname,subjectno,sem,branch) values('$name','$subjectcode','$sem','$branch')";

if($conn->query($sql) === TRUE)
{echo "succesful";}


else
{echo "error".$conn->error;}
$conn->close();

}
?>



<form class="formsignup" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<div class="container">
<h2>CREATE SUBJECT</h2>
    
  
    <input  type="text" placeholder="subject name" name="name" required>
    <input  type="text" placeholder="subject code" name="subjectcode" required><br>
    </i> <select name="sem"><option value="">sem</option>
 <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
</select>
  <select name="branch"><option value="">branch</option>
 <option value="ise">ISE</option>
<option value="cse">CSE</option>
<div class="submit"><input type="submit" name="submit" value="submit"></div>
    
	
    </div>
  
</form>
</div>

</div>
</body>
</html>
<?php
?>
 











