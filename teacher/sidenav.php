



 <?php include '../dbconfig.php';
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
//echo "welcome  ".$name;
}}
$sql = "SELECT * FROM teacherdetails WHERE name='$name'";
if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {

    $sub1= $row[6];
    $sub2= $row[8];

$sql = "SELECT * FROM subject WHERE subjectno='$sub1'";
if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {

    $subjectname1= $row[1];
    
}}


$sql = "SELECT * FROM subject WHERE subjectno='$sub2'";
if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {

    $subjectname2= $row[1];
    
}}


 
    }}
}   ?>
<center><br><br><br>
<div class="sidenav"><br>
  <a href="afsub.php"><?php echo $subjectname1 ?></a>
  <a href="afsub.php"><?php echo $subjectname2 ?></a><br><br>
 </div></center>
