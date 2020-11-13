<?php

class Flower{

 public $name;
 public $color;

 function __construct($name, $color){
  $this->name = $name;
  $this->color = $color;
 }

 function getName(){
  return $this->name;
 }

 function getColor(){
  return $this->color;
 }
}

$rose = new Flower("กุหลาบ", "สีแดง");

echo $rose->getName()."<br>";
echo $rose->getColor();


?>