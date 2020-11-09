<?php
require_once('Base.php');
require_once("load.php");
require_once(realpath(dirname(__FILE__) . '/../StartSession.php'));
require_once(realpath(dirname(__FILE__) . '/../DatabaseConnection/Login.php'));
$request = new Method();
if($request->request = "POST"){
    $load = new Load();
    $username = $_POST["username"];
    $password = $_POST["password"];
    $login = new DatabaseConnection\Login();
    $result = $login->getUser($username, $password);
    $result = json_decode($result);
    if($result){
        $_SESSION['username'] = $result[0]->username;
        $_SESSION['id_user'] = $result[0]->id_user;
        date_default_timezone_set("Asia/Jakarta");
        $_SESSION['time'] = date("H:i:s", time());
        $load->view('index.php');
    }
}
