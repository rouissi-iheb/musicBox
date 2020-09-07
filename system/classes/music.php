<?php
require_once("database.php");

class music extends database
{
    function add($userid,$catid,$title,$link){
        $res = $this->pdo->prepare("insert into music(userid,catid,title,link) values(?,?,?,?)");
        $res->execute(array(intval($userid),intval($catid),$title,$link));
    }
    function delete($id){
        $res = $this->pdo->prepare("delete from music where id = ?");
        $res->execute(array($id));
    }
    function list(){
        $res = $this->pdo->prepare("select * from music");
        $res->execute();
        return $res->fetchAll(PDO::FETCH_ASSOC);
    }
    function mylist($id){
        $res = $this->pdo->prepare("select * from music where userid= ?");
        $res->execute(array($id));
        return $res->fetchAll(PDO::FETCH_ASSOC);
    }
}


?>