<?php
require_once("database.php");
class categorys extends database{
    function list(){
        $res = $this->pdo->prepare("select * from categorys");
        $res->execute();
        return $res->fetchAll(PDO::FETCH_ASSOC);
    }
}


?>