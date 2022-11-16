<?php
class drink{
    // Properties
    public $name;
    public $price;

   function __construct($name, $price) {
         $this->name = $name;
         $this->price= $price;
   }
}
$mang  = array(
    "ms1" =>  new cafe("bạc xỉu","30K"), 
    "ms2" =>   new cafe("trà đào cam sả","35K"),
    "ms3" =>  new cafe("trà chanh","25K"),
    "ms4" =>  new cafe("espresso","25K"),
    "ms5" =>  new cafe("capuchino","30K"),
);


?>