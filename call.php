<?php
class cal{
  function __call($func, $arg){
    $count=count($arg);

    if($func=='add'){
      switch($count){
        case 0:
          echo "Null";
          break;

          case 1:
            echo $arg[0]+$arg[0];
            break;

            case 2:
              echo $arg[0]+$arg[1];
              break;

              case 3:
                echo $arg[1]+$arg[2];;
                break;
      }
    }


    if($func=='sub'){
      switch($count){
        case 0:
          echo "Null";
          break;

          case 1:
            echo "zero";
            break;

            case 2:
              echo $arg[0]-$arg[1];
              break;

              case 3:
                echo $arg[1]-$arg[2];;
                break;
      }
    }


    if($func=='mul'){
      switch($count){
        case 0:
          echo "Null";
          break;

          case 1:
            echo $arg[0]*$arg[0];
            break;

            case 2:
              echo $arg[0]*$arg[1];
              break;

              case 3:
                echo $arg[1]*$arg[2];;
                break;
      }
    }


    if($func=='div'){
      switch($count){
        case 0:
          echo "Null";
          break;

          case 1:
            echo $arg[0]/$arg[0];
            break;

            case 2:
              echo $arg[0]/$arg[1];
              break;

              case 3:
                echo $arg[1]/$arg[2];;
                break;
      }
    }

  }
}

$calculate= new cal();
$calculate->div(6,5);

?>