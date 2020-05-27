
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="adstyle.css">
</head>
<body>
<?php
$page="0";
if (isset($_GET['page'])) 
{ 
$page=$_GET["page"];

//echo $page;
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
    $sub2= $row[8];
    $sub2section= $row[9];
echo "welcome  ".$name; ?><br><br><?php


}}}

?><?php include 'sidenav.php';?>
  <br><br><br>
  <?php if($subsection="C")
{?>


<h1><?php echo "Both sections"; ?></h1>

<?php
}

else
{?>
<h1><?php echo $sub2section; ?></h1>
<?php
}

?>
  <table width="80%" align="left">
    <tr>
      <th>module1</th>
      <th>module2</th>
      <th>module3</th>
      <th>module4</th>
      <th>module5</th>
      </tr>
    <tr>
      <td>
<form action="sub2upload.php" method="post" enctype="multipart/form-data" name="form1">
<input type="file" name="resume" id="resume">
<input type="hidden" name="section" value=<?php echo $sub2section; ?>>
<input type="submit" name="SubmitBtn" id="SubmitBtn" value="Upload">
</form></td>
      <td><form action="sub2upload2.php" method="post" enctype="multipart/form-data" name="form1">
<input type="file" name="resume" id="resume">
<input type="submit" name="SubmitBtn" id="SubmitBtn" value="Upload">
</form></td>
      <td><form action="sub2upload3.php" method="post" enctype="multipart/form-data" name="form1">
<input type="file" name="resume" id="resume">
<input type="submit" name="SubmitBtn" id="SubmitBtn" value="Upload">
</form></td>
      <td><form action="sub2upload4.php" method="post" enctype="multipart/form-data" name="form1">
<input type="file" name="resume" id="resume">
<input type="submit" name="SubmitBtn" id="SubmitBtn" value="Upload">
</form></td>
      <td><form action="sub2upload5.php" method="post" enctype="multipart/form-data" name="form1">
<input type="file" name="resume" id="resume">
<input type="submit" name="SubmitBtn" id="SubmitBtn" value="Upload">
</form></td>
   
    
    </tr>
  

     
  </table></div>
  <br><br><br>
  <table width="60%" align="left">
    <tr>
      <th>assigment1</th>
      <th>assigment2</th>
      <th>assigment3</th>
</tr><tr>
 <td><form action="sub2ass1.php" method="post" enctype="multipart/form-data" name="form1">
<input type="file" name="resume" id="resume">
<input type="submit" name="SubmitBtn" id="SubmitBtn" value="Upload">
</form>
</bform></td>
      <td><form action="sub2ass2.php" method="post" enctype="multipart/form-data" name="form1">
<input type="file" name="resume" id="resume">
<input type="submit" name="SubmitBtn" id="SubmitBtn" value="Upload">
</form></td>
      <td><form action="sub2ass3.php" method="post" enctype="multipart/form-data" name="form1">
<input type="file" name="resume" id="resume">
<input type="submit" name="SubmitBtn" id="SubmitBtn" value="Upload">
</form></td>
</tr></table>

</body>
</html>
