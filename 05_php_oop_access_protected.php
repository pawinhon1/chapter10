<?php
class Fruit {
  public $name;
  protected $color;

  public function set_name($n) { 
    $this->name = $n;
    echo "ชื่อผลไม้ : ".$this->name."<br>";
  }
  protected function set_color() {
    $this->color = "สีเหลือง";
    echo $this->color;
  }
}

class SubFruit extends Fruit{
    function __construct(){
        $this->color = "สี : แดง";
          echo $this->color;
        echo $this->name = "<br>ชื่อผลไม้ : ฟักทอง";
    }
}

$mango = new Fruit();
$mango->set_name("มะม่วง");

$mango2 = new SubFruit();

?>