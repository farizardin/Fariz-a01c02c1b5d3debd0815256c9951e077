<?php
Class Load{
    private $frontend;
    private $backend;
    public function __construct(){
        $this->frontend = '../../Frontend/';
        $this->backend = '';
    }

    public function view($location){
        $loc = $this->frontend.$location;
        return header('Location: '.$loc);
        // return $loc;
    }

    public function app($location){
        $loc = $this->backend.$location;
        return header('Location: '.$loc);
    }
}