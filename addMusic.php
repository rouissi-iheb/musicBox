<?php
session_start();
error_reporting(0);
?>
<?php
require_once("system/classes/user.php");
require_once("system/classes/categorys.php");
$user = new user();
$cat = new categorys();
if(!$user->checkSession()){
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
                <div class="card-header">add Music</div>
                <div class="card-body">
                    <form action="system/addmusic.php" method="POST" enctype="multipart/form-data">

                        <input class="form-control" type="text" placeholder="title" name="title" required>
                        <br>
                        <select name="cat" class="form-control" required>
                            <option>select category</option>
                            <?php
                                $cats =$cat->list();
                                foreach($cats as $category){
                                    echo '<option name="'.$category["id"].'">'.$category["label"].'</option>';
                                }
                            ?>
                        </select><br>
                        <input class="form-control" type="file" name="file" required>    
                        <br>
                        <input type="submit" class="btn btn-primary" value="Add Music">            
                    </form>
                </div>
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