<?php
namespace DatabaseConnection;
include 'DB.php';
class Login extends DB{
    function getUser($username, $password){
        $sql = "SELECT * FROM user WHERE username = '$username' and password = '$password' Limit 1";
        $result = $this->conn->query($sql);
        return $this->fetchData($result);
    }
}
?> 