
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="adstyle.css">
</head>
<body>
<?php


$mod1 = 1;
      $mod2 = 0;
      $mod3 = 0;
      $mod4 = 1;
      $mod5 = 0;
     $ass1 = 1;
     $ass2 = 0;
     $ass3 = 0;
$subno1="0";

if (isset($_GET['subno'])) 
{ 
$subno1=$_GET["subno"];

//echo $subno1;
} 

include '../dbconfig.php';
$cookie_name = "suser";
 

if(!isset($_COOKIE[$cookie_name])) 
    {
     echo "Cookie named '" . $cookie_name . "' is not set!";
    } else 
    {
     //echo "Cookie '" . $cookie_name . "' is set!<br>";
     //echo "Value is: " . $_COOKIE[$cookie_name];
$usn=$_COOKIE[$cookie_name];//cookie value will come from this code




$sql = "SELECT * FROM student WHERE usn='$usn'";

if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {

    $section= $row[7];
    echo $section;
    

}}




if($subno1!="0")

{

 // echo $subno1;

$date2=date("Y");
//$date2="2020";

  $sql = "SELECT * FROM 5pdf WHERE subject='$subno1' And date='$date2' And (section='$section' or section='c')";
if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {

     $mod1 = $row[0];
      $mod2 = $row[1];
      $mod3 = $row[2];
      $mod4 = $row[3];
      $mod5 = $row[4];
     $ass1 = $row[5];
     $ass2 = $row[6];
     $ass3 = $row[7];
    }}
  

?>
 
   
<?php
include 'sidenav.php';


}}       
?><?php include '../dbconfig.php';
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
    

  


  <a href="sdashboard.php?subno=<?php echo $subno; ?>"><?php echo $sub; ?></a>


  
 </div>

 <?php

    
  }



} ?>
<a href="logout.php"> logout </a><table style="width: 100%;" border="1">

<tr>
<td>module1</td>
<td>module2</td>
<td>module3</td>
<td>module4</td>
<td>module5</td>
</tr>
<tr>
<td> <a href=../teacher/<?php echo $mod1; ?> target=_blank><?php echo $mod1; ?></a></td>
<td> <a href=../teacher/<?php echo $mod2; ?> target=_blank><?php echo $mod2; ?></a></td>
<td> <a href=../teacher/<?php echo $mod3; ?> target=_blank><?php echo $mod3; ?></a></td>
<td> <a href=../teacher/<?php echo $mod4; ?> target=_blank><?php echo $mod4; ?></a></td>
<td> <a href=../teacher/<?php echo $mod5; ?> target=_blank><?php echo $mod5; ?></a></td>


</tr>
</table><br><table style="width: 100%;" border="1"><tbody>
    <tr>
<td>assignment1</td>
<td>assignment2</td>
<td>assignment3</td>
</tr>
<tr>
<td> <a href=../teacher/<?php echo $ass1; ?> target=_blank><?php echo $ass1; ?></a></td>
<td> <a href=../teacher/<?php echo $ass2; ?> target=_blank><?php echo $ass2; ?></a></td>
<td> <a href=../teacher/<?php echo $ass3; ?> target=_blank><?php echo $ass3; ?></a></td>
</tr>
</tbody>
</table>
</body>
</html>
