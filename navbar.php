<?php
session_start();
require_once("system/classes/user.php");
$user = new user();

echo '

<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">MusicBox</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            ';
            if($user->checkSession()){
                echo '
                    <a class="nav-item nav-link" href="addMusic.php">Add Music</a>
                    <a class="nav-item nav-link" href="myMusic.php">My Music</a>
                    <a class="nav-item nav-link" href="logout.php">Log out</a>
                ';
            }else{
                echo '
                    <a class="nav-item nav-link" href="login.php">Login</a>
                    <a class="nav-item nav-link" href="register.php">Register</a>
                ';
            }
               
            echo '</div>
        </div>
    </nav>


';


?>