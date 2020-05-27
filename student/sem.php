<?php include '../dbconfig.php';
$cookie_name = "suser";
 

if(!isset($_COOKIE[$cookie_name])) {
     echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
     //echo "Cookie '" . $cookie_name . "' is set!<br>";
     //echo "Value is: " . $_COOKIE[$cookie_name];
$usn=$_COOKIE[$cookie_name];//cookie value will come from this code

$no=str_split($usn);
//echo $no[3];
//echo $no[4];
$year = (int)($no[3] . $no[4]);
//echo $year;

$date1="20".$year."-07-01";
//echo $date1;

$date2=date("Y-m-d");
//$date2="2020-6-05";
//echo $date2;

$ts1 = strtotime($date1);
$ts2 = strtotime($date2);

$year1 = date('Y', $ts1);
$year2 = date('Y', $ts2);

$month1 = date('m', $ts1);
$month2 = date('m', $ts2);

$diff = (($year2 - $year1) * 12) + ($month2 - $month1);

//echo $diff;

if ($diff > "11" && $diff<"18")
{
	$sem="3";
	
}

elseif ($diff > "17" && $diff<"24")
{
	$sem="4";
	
}


elseif ($diff > "23" && $diff<"30")
{
	$sem="5";
	
}

elseif ($diff > "29" && $diff<"36")
{
	$sem="6";
	
}

}
