<?php
session_start();
error_reporting(0);
?>
<?php
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
                <div class="card-header">Register</div>
                <div class="card-body">
                    <?php
                        if(isset($_GET["error"])){
                            echo '<br><b><font color="red"> email already exist !</font></b><br><br>';
                        }
                    ?>
                    <form action="system/register.php" method="POST">
                        <input class="form-control" type="email" placeholder="email" name="email">
                        <br>
                        <input class="form-control" type="text" placeholder="username" name="username" required>
                        <br>
                        <input class="form-control" type="password" placeholder="password" name="password" required>    
                        <br>
                        <input type="submit" class="btn btn-primary" value="Register">            
                    </form>
                </div>
                <div class="card-footer">You have an account ? <a href="login.php">please login here</a></div>
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