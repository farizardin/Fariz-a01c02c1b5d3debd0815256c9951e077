<?php
require_once('Base.php');
require_once("load.php");
require_once(realpath(dirname(__FILE__) . '/../StartSession.php'));
$request = new Method();
if($request->request = "GET"){
    $load = new Load();
    session_unset();
    $load->view('login.php');
}
