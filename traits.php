<?php
trait dog{
  function sound(){
    echo "Dog Barks <br>";
  }

  function color(){
    echo "Dog white <br>";
  }
}

trait cat{
  function sound(){
    echo "Cat meawwss <br>";
  }

  function color(){
    echo "Cat is black <br>";
  }
}

trait elephant{
  function sound(){
    echo "Elephant Rumbles <br>";
  }

  function color(){
    echo "Elephant is Grey <br>";
  }
}


class animal{

  use dog, cat, elephant{

        cat::sound insteadOf dog, elephant;
        cat::color insteadOf dog, elephant;

        dog::color as colorr;
        dog::sound as soundd;

        elephant::color as colorrr;
        elephant::sound as sounddd;


  }
  
}

$obj= new animal();
$obj-> color();
$obj->colorr();
$obj->colorrr();

$obj-> sound();
$obj-> soundd();
$obj-> sounddd();
?>