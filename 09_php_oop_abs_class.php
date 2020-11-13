<?php
//คลาสแม่
abstract class Animal {
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }
  abstract public function title() : string; 
}

// คลาสลูก
class Ant extends Animal {
  public function title() : string {
    return "ฉันคือ $this->name!"; 
  }
}

class Bird extends Animal {
  public function title() : string {
    return "ส่วนฉันคือ $this->name!"; 
  }
}


$ant = new Ant("มด");
echo $ant->title();
echo "<br>";

$bird = new Bird("นก");
echo $bird->title();
echo "<br>";

?>