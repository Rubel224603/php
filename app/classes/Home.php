<?php 
namespace App\classes;

Class Home{

    public $connenction ;
   // $connenction = mysqli_connect('localhost','root','','rawpproject');
    public $message;

    public function display(){
        $this->message = "Welcome to raw PHP by Laravel way not MVC";
        return $this->message;
    }
    public function testArrayMethod(){
       $people = array(1,3,3);
       return $people;

    }
}









?>