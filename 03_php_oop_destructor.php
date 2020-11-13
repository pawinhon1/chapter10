<?php
class Fruit {
  // Properties
  var $name;
  var $color;

  // Methods
  function __construct($name, $color) {
    echo "1.Constructor<br>";
    $this->name = $name;
    $this->color = $color; 
  }
  
  function testBetween(){
   echo "2.ฟังก์ชั่นที่ทำงานระหว่าง Constructor และ Destructor<br>";
  }
  
  function __destruct() {
    echo "3.Destructor<br>";
    echo "The fruit is {$this->name} and the color is {$this->color}."; 
  }
}

$apple = new Fruit("Apple", "red");
$apple->testBetween();
?>