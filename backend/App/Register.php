<?php
require_once('Base.php');
require_once("load.php");
require_once(realpath(dirname(__FILE__) . '/../StartSession.php'));
require_once(realpath(dirname(__FILE__) . '/../DatabaseConnection/Register.php'));
$request = new Method();
if($request->request = "POST"){
    $load = new Load();
    $username = $_POST["username"];
    $password = $_POST["password"];
    $repeat_password = $_POST["repeatpassword"];
    if($username == null or $password == null or $repeat_password == null){
        $load->view('register.php?message=Silahkan isi form diatas');
    }
    else{
        if($password != $repeat_password){
            $load->view('register.php?message=Password yang diisikan tidak sama');
        }else{
            $register = new DatabaseConnection\Register();
            $result = $register->insertUser($username, $password);

            if($result){
                $load->view('login.php?message=Register Berhasil');
            }
            else{
                $load->view('register.php?message=Register Gagal');
            }
        }
    }
}