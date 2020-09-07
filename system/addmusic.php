<?php
session_start();
require_once("classes/music.php");
$music = new music();
print_r($_POST);

if(isset($_POST["title"]) && isset($_POST["cat"])){
    $temp_music_file = $_FILES["file"]["tmp_name"];
    $new_music_file  = md5(time());
    $savelocation = "../music/".$new_music_file.".mp3";
    move_uploaded_file($temp_music_file,$savelocation);
    $music->add($_SESSION['id'],$_POST["cat"],$_POST["title"],"music/".$new_music_file.".mp3");
    header("location:../myMusic.php");
}
?>