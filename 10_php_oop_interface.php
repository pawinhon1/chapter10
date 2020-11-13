<?php

interface Game{
    function gameName();
}

class MobileGame implements Game{
    public function gameName(){
        echo self::class." : ";
        echo " Mobile legend 5V5 <br>";
    }
}

class ComputerGame implements Game{
    public function gameName(){
        echo self::class." : ";
        echo " Hero Of Newerth (HON)";
    }
}

$mobile = new MobileGame();
$mobile->gameName();

$computer = new ComputerGame();
$computer->gameName();

?>