<?php
Class Method{
    public $request;
    public function __construct(){
        $this->request = $_SERVER["REQUEST_METHOD"];
    }
}