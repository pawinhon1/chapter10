<?php 
  class Flower{
    public $name;
    public $taste;
    public $type; 
    // วิธีการ (method)
    function setName($name){ 
        $this->name = $name; 
    }
    function getName(){ 
        return $this->name; 
    } 
    
    function setTaste($taste){ 
        $this->taste = $taste; 
    }
    function getTaste(){ 
        return $this->taste; 
    } 
    function setType($type){ 
      $this->type = $type; 
    } 
    function getType(){ 
      return $this->type; 
    } 
  } 
  
  $lotus = new Flower();
  $lotus->setName("ดอกบัว");
  $lotus->setTaste("ฟาด");
  $lotus->setType("ดอกไม้บูชา");
  
  echo $lotus->getName()."<br>";
  echo $lotus->getTaste()."<br>";
  echo $lotus->getType();
?>