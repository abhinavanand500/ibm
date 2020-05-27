<?php

setcookie ("suser", "",time()-60*60*24*100, "/");
header("Location:teachersignup.php?errorMssg=".urlencode(""));

echo "you are logged out";

?>