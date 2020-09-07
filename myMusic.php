<?php
session_start();
error_reporting(0);
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
            <div class="col-sm-12">
                <p>
                    <center><h1>My Musci list</h1></center>
                </p>
            </div>
            <div class="col-sm-12">
                <table class="table">
                    <tr>
                        <th>Title</th>
                        <th>Play</th>
                    </tr>
                    <?php
                        require_once("system/classes/music.php");
                        $music = new music();
                        $list = $music->mylist($_SESSION['id']);
                        foreach($list as $m){
                            echo '
                            <tr>
                                <td>'.$m["title"].'</td>
                                <td>
                                    <audio controls>
                                        <source src="'.$m["link"].'" type="audio/mpeg">
                                        Your browser does not support the audio element.
                                    </audio>
                                </td>
                               </tr> 
                            ';
                        }
                    ?>
                    <tr>
                        
                    </tr>
                </table>
            </div>
        </div>
    </div>




    <!-- Optional JavaScript -->
    <script src="bootstrap/js//jquery-3.5.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>