<?php
include '../dbconfig.php';
if(isset($_POST["SubmitBtn"])){

  $fileName=$_FILES["resume"]["name"];
  $fileSize=$_FILES["resume"]["size"]/1024;
  $fileType=$_FILES["resume"]["type"];
  $fileTmpName=$_FILES["resume"]["tmp_name"];  

  if($fileType=="application/pdf" || $file_type=="image/gif" || $file_type=="image/jpeg"){
    if($fileSize<=200000){

      //New file name
      $random=rand(1111,9999);
      $newFileName=$random.$fileName;

      //File upload path
      $uploadPath="Upload/".$newFileName;

      //function for upload file
      if(move_uploaded_file($fileTmpName,$uploadPath)){

        echo "Successful"; 
        echo "File Name :".$newFileName; 
        echo "File Size :".$fileSize." kb"; 
        echo "File Type :".$fileType; 



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
echo "welcome  ".$name; ?><br><br><?php

$sql = "SELECT * FROM teacherdetails WHERE name='$name'";
if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {

    $sub1= $row[6];
 echo $sub1;

       $query = mysqli_query($conn,"UPDATE 5pdf SET ass3='$uploadPath' WHERE subject='$sub1'");
}}
      }
    }}}}
    else{
      echo "Maximum upload file size limit is 200000 kb";
    }
  }
  else{
    echo "You can only upload a Word doc file.";
  }  
}
?> 