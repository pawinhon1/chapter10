<?php

class Flower{

 public $name;
 
 function __construct($name){
  $this->name = $name;
 
  $this->getValue();
 }
 
 function getValue(){
     return $this->name;
 }

}



$lotus = new Flower("ดอกบัว");

echo $lotus->name = "ดอกบัวใหญ่มาก";

?>