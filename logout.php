<?php
session_start();
require_once("system/classes/user.php");
$user = new user();
$user->logout();
header("location:index.php");
?>