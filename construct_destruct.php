<?php
class abc{
  public $name;
  function __construct($n){
    $this-> name=$n;
  }

  function get(){
    echo $this->name . "<br>";
  }

  function __destruct(){
    echo "Destructed ! <br> ";
  }
}

$obj= new abc("Praddyumn");
$obj->get();
$obj->get();
$obj->get();
$obj->get();
?>