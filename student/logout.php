<?php

setcookie ("suser", "",time()-60*60*24*100, "/");
header("Location:video.php?errorMssg=".urlencode(""));

echo "you are logged out";

?>