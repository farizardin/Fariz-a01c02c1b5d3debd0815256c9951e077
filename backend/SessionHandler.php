<?php
require_once('StartSession.php');
if(empty($_SESSION)){
    $loc = '../Frontend/login.php';
    header('Location: '.$loc);
}
?>