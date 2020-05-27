<?php include '../dbconfig.php';?>


<?php
if(isset($_POST['submit1'])){
$module1=$_POST["module1"];
$sql = "SELECT * FROM teacherdetails WHERE name='$name'";
if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {

    $sub1= $row[6];
  }}
$sql = "insert into 5pdf(module1) values('module1')";
$sql = "insert into 5pdf(subjectname) values('$sub1')"
if($conn->query($sql) === TRUE)
{echo "succesful";}


else
{
	echo error;
	echo "error".$conn->error;}
$conn->close();

}
?>
