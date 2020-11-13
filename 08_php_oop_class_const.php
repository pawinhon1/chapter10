<?php

class HelloWorld{

 const MESSAGE_DATA = "Hello World!";

 public function message(){
   echo self::MESSAGE_DATA;
 }

}

$data = new HelloWorld();

$data->message();

?> 