<?php
session_start();
require_once("classes/user.php");
$user = new user();
if(isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["username"])){
    if(!$user->register($_POST["username"],$_POST["password"],$_POST["email"])){
        header("location:../register.php?error");
    }else{
        header("location:../login.php");
    }
}

?>