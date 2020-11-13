<?php
class Fruit {
    public $name;
    
    public function __construct($data){
        $this->name = $data;
        echo $this->getData();
    }
    
    private function getData(){
        return $this->name;
    }
    
    
}


$fruit = new Fruit("แตงกวา");


?>