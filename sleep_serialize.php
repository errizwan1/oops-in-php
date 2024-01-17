<?php
class abc{
  private $name="Praddyumn";
  private $user="pra";
  private $pass="123";
  private $address="Noida";

  function __sleep(){
    return ['user','pass'];
  }
}

$obj= new abc();
$info= serialize($obj);

echo "<pre>";
print_r($info);
echo "<pre>";
?>