<?php

namespace classes;
use PDO;
class Connection{
    private $pdo = null;
    public function getConnection(){
        if($this->pdo === null){
            $this->pdo = new PDO('mysql:dbname=projeto;host=localhost;','root','');
        }
        return $this->pdo;     
    }
}