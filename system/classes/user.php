<?php
require_once("database.php");
class user extends database
{
    function register($username,$password,$email){
        $res = $this->pdo->prepare("select count(*) from users where email = ?");
        $res->execute(array($email));
        if($res->fetchAll(PDO::FETCH_ASSOC)["0"]["count(*)"] > 0){
            return false;
        }
        $res = $this->pdo->prepare("insert into users(email,username,password) values(?,?,?)");
        $res->execute(array($email,$username,md5($password)));
        return true;
    }
    function login($email,$password){
        $res = $this->pdo->prepare("select count(*) from users where email = ? and password = ?");
        $res->execute(array($email,md5($password)));
        if($res->fetchAll(PDO::FETCH_ASSOC)["0"]["count(*)"] == 1){
            $res = $this->pdo->prepare("select id from users where email = ?");
            $res->execute(array($email));
            $_SESSION["id"] =$res->fetchAll(PDO::FETCH_ASSOC)["0"]["id"];
            return true;
        }else{
            return false;
        }
    }
    function checkSession(){
        if($_SESSION["id"] != "" && isset($_SESSION["id"])){
            return true;
        }else{
            return false;
        }
    }
    function logout(){
        unset($_SESSION["id"]);
    }
}
?>