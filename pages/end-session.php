<?php


setcookie("username", "", time() - 60, "/");
setcookie("access_level", "", time() - 60, "/");
setcookie("entreprise", "", time() - 60, "/");


header("Location: ../index.php");
exit();
?>
