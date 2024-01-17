<?php
interface dog{
  function sound();
}

interface cat{
  function color();
}

class animal implements dog, cat{
  function sound(){
    echo "Dog Barks <br>";
  }

  function color(){
    echo "CAT is black <br>";
  }
}

$obj= new animal();
$obj->sound();
$obj->color();
?>