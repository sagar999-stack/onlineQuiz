<?php
session_start();
unset($_SESSION["email"]);
header("Location:signin_sub.php");
?>