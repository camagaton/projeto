<?php
use classes\Connection;
    require_once __DIR__ ."/Connection.php";
class User{
    private $sql;

    public function __construct(){
        $this->sql = new Connection();
    }
    public function addUsers($nome, $email){
        $sql = "INSERT INTO users (nome, email) VALUES ('{$nome}', '{$email}')";
        $query = $this->sql->getConnection()->prepare($sql);
        return $query->execute();

    }

    public function selecionarTodos(){
        $sql = "SELECT * FROM users";
        $query = $this->sql->getConnection()->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function selecionarUsuario($id){
        $sql = "SELECT * FROM users WHERE id = {$id}";
        $query = $this->sql->getConnection()->prepare($sql);
        $query->execute();

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateUsers(){

    }

    public function deleteUsers(){

    }
}