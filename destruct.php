<?php

class Fruit {
    public $name;


    public function __construct($name){
        $this->name = $name;
    }
    public function __destruct(){
        echo "This fruit name is " .$this->name;

    }
    
}
$a = new Fruit("Apple");


?>