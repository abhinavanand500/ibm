
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="adstyle.css">
</head>
<body>


<?php include 'header.php';?>


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
    // echo "Cookie '" . $cookie_name . "' is set!<br>";
     //echo "Value is: " . $_COOKIE[$cookie_name];
$salno=$_COOKIE[$cookie_name];


$sql = "SELECT * FROM salogin WHERE salno='$salno'";
if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {

    $name= $row[1];


  echo "welcome Mr ".$name;

   }
                 
  
}
}
?>

<?php include 'sidenav.php';?>
<div class="main">
  

<p>

	  </p>
<?php
if ($page == "ct") {
	?>
	
	<iframe src="createteacher.php"></iframe>

	<?php
	
   
}
	  elseif($page == "cs"){
		  ?>
		  <iframe src="createsubject.php"></iframe>
		 <?php
		 
	  }
	elseif($page == "vt"){
		?>
		<iframe src="viewteacher.php"></iframe>
<?php	
	}


?>





</p>  
</div>




</body>
</html>
