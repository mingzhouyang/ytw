<?php

$cID = isset($_GET["cID"])?$_GET["cID"]:1;
setcookie("cID",$cID,time()+3600000);
header("Location:index.php"); 
exit;

?>