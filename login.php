<?php
session_start();
error_reporting(0);
require_once("system/classes/user.php");
$user = new user();
if($user->checkSession()){
    header("location:index.php");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <body>
    <?php
        include 'navbar.php';
    ?>
    <div class="container">
        <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">Login</div>
                <div class="card-body">
                    <form action="system/login.php" method="POST">
                        <input class="form-control" type="email" placeholder="email" name="email" required>
                        <br>
                        <input class="form-control" type="password" placeholder="password" name="password" required>    
                        <br>
                        <input type="submit" class="btn btn-primary" value="login">            
                    </form>
                </div>
                <div class="card-footer">You don't have an account ? <a href="register.php">please register here</a></div>
            </div>
        </div>
        <div class="col-sm-2"></div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <script src="bootstrap/js//jquery-3.5.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>