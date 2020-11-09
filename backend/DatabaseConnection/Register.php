<?php
namespace DatabaseConnection;
include 'DB.php';
class Register extends DB{
    function getUser(){
        $sql = "SELECT * FROM user";
        $result = $this->conn->query($sql);
        return $this->fetchData($result);
    }

    function insertUser($username, $password){
        $sql = "INSERT INTO user (id_user, username, password) VALUES (null, '$username', '$password')";
        $result = $this->conn->query($sql);
        return $result;
    }
}
?> 