<?php
abstract class animal{
    abstract function sound();
}

class dog extends animal{
  function sound(){
    echo "Dog Barks <br>";
  }
}

class cat extends animal{
  function sound(){
    echo "Cat meaawwwss <br>";
  }
}

class elephant extends animal{
  function sound(){
    echo "Elephant Rumbles <br>";
  }
}

$obj= new elephant();
$obj->sound();
?>