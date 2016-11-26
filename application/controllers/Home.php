<?php


class Home extends CI_Controller
{

    public function index() {
        echo "Hello";
    }
    public function  test($name = "My Test", $lastname = "Eiei") {
        echo  "My name is : ".$name." ".$lastname;
    }

    public function calculator($x,$y){
        echo  $x+$y;
    }
}