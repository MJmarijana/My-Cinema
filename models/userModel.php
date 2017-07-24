<?php

class userModel extends Model {
    
    protected $table = 'user';
    
    function getUser($id) {
        $sql = "SELECT * FROM ".$this->table." WHERE id=:id";
        $query = self::$_pdo->prepare($sql);
        $query->bindParam(":id", $id);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }      
    
}
