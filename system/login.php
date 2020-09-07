<?php
session_start();
require_once("classes/user.php");
$user = new user();
if(isset($_POST["email"]) && isset($_POST["password"])){
    $user->login($_POST["email"],$_POST["password"]);
    header("location:../login.php");
}

?>