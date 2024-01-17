<?php
class toyota{
  function toyota(){
    echo "Toyota Build Fortuner<br> ";
  }
}

class suzuki extends toyota{
  function suzuki(){
    echo "Suzuki Builds Swift <br>";
  }
}

class mahindra extends suzuki{
  function mahindra(){
    echo "Mahindra Builds Scorpio <br>";
  }
}


class car extends mahindra{
  
}

$obj=new car();
$obj-> mahindra();
$obj-> suzuki();
$obj-> toyota();
?>