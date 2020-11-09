<?php
namespace DatabaseConnection;
class DB{
    public $servername;
    public $username;
    public $password;
    public $dbname;
    public $conn;
    public function __construct(){
        $this->servername = "localhost";
        $this->username = "";
        $this->password = "";
        $this->dbname = "tes_developer";

        $this->conn = new \mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
    
    function fetchData($result){
        $data = [];
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                array_push($data, $row);
            }
        } else {
            return $data;
        }
        return json_encode($data);
    }
}
?> 