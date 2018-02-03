<?php

include("connections.php");

$user_id =  $_POST["user_id"];

$new_name = $_POST["new_name"];
$new_address = $_POST["new_address"];
$new_email = $_POST["new_email"];


mysqli_query($connections, "UPDATE mytbl SET name='$new_name', address='$new_address', email='$new_email' WHERE id='$user_id'");


echo"<script language='javascript'>alert('Reocord has been Updated.')</script>";
echo"<script>window.location.href='Index.php';</script>";
?>