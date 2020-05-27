
<?php include '../dbconfig.php';
$cookie_name = "suser";
 

if(!isset($_COOKIE[$cookie_name])) {
     echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
     //echo "Cookie '" . $cookie_name . "' is set!<br>";
     //echo "Value is: " . $_COOKIE[$cookie_name];
$usn=$_COOKIE[$cookie_name];//cookie value will come from this code
include 'sem.php';







$sql = "SELECT * FROM student WHERE usn='$usn'";
if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {

    $name= $row[0];
    
   // echo $sem;
echo "welcome Mr ".$name;

    }}
}

$sql = "SELECT * FROM subject WHERE sem=$sem";
if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {

    $sub= $row[1];
    $subno= $row[0];
?>
<div>
    

  


  <a href=sdashboard.php?subno=<?php echo $subno; ?>><?php echo $sub; ?></a>


  
 </div>

 <?php

    
  }



} ?>
<a href=logout.php> logout </a>