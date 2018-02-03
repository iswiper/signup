<?php

session_start();

unset($_SESSION['id']);
session_unset();
session_destroy();
echo"Logging out... Please Wait .. ";
header('Refresh: 2; url=../index.php');
exit();

?>

