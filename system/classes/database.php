<?php
class database {
  protected $pdo;
  function __construct(){
    $DB_HOST = "localhost";
    $DB_USER = "root";
    $DB_PASS = "";
    $DB_NAME = "projet_musique";
    $this->pdo = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME",$DB_USER,$DB_PASS);
  }
}
?>