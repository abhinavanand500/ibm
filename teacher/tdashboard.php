<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="adstyle.css">
</head>
<body>
<?php
$sub="0";
if (isset($_GET['sub'])) 
{ 
$sub=$_GET["sub"];

echo $sub;
} 
include '../dbconfig.php';
$cookie_name = "user";
 

if(!isset($_COOKIE[$cookie_name])) {
     echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
     //echo "Cookie '" . $cookie_name . "' is set!<br>";
     //echo "Value is: " . $_COOKIE[$cookie_name];
$user=$_COOKIE[$cookie_name];//cookie value will come from this code
$sql = "SELECT * FROM teacherdetails WHERE tid='$user'";
if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {

    $name= $row[1];
    ?><br><center><?php echo "welcome  ".$name;
}} ?></center><?php

$sql = "SELECT * FROM teacherdetails WHERE name='$name'";
if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {

    $sub1= $row[6];
    $sub2= $row[7];
    ?><br><br><center><br><br><?php
?><?php include 'sidenav.php';
    }}
}   ?></center><br><br><br>&nbsp &nbsp &nbsp select the subject from the sidebar and create online learning
</body>
</html>
