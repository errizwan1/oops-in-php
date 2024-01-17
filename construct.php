<?php

class Fruits {
    public $name;
    public $color;

    public function __construct($name, $color){
         $this->name = $name;
         $this->color = $color;
    }
    public function get_name(){
    
    return $this->name;
    return $this->color;
    }
    
} 
$a = new Fruits("Apple","Red");
echo $a->get_name();
;
?>