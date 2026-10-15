 <?php

session_start();
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
print_r($_SESSION);
 ?>