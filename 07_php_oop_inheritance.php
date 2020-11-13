<?php
class Fruit {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color; 
  }
  protected function intro() {
    echo "ชื่อผลไม้ {$this->name} และสีของผลไม้ {$this->color}."; 
  }
}

class Strawberry extends Fruit {
  public function message() {
    echo "ผลไม้! <br>";
    
    $this -> intro();
  }
}
$strawberry = new Strawberry("Strawberry", "red");  
$strawberry->message(); 
?>