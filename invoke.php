<?php
class abc{
 public  $name;

  function __construct($n){
    $this->name=$n;
  }

  function __invoke(){
    echo $this->name;
  }

}

$obj= new abc("Praddyumn");
$obj();
?>