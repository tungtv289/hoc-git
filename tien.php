<?php


class Drink{
    // Properties
    public $name;
    public $price;

   function __construct($name, $price) {
         $this->name = $name;
         $this->price= $price;
   }
}

$myfile = fopen("thucdon.tien", "r") or die("Unable to open file!");
$noidungfile = fread($myfile,filesize("thucdon.tien"));
fclose($myfile);
// echo $noidungfile;


// PHP_EOL = end of line\
$mang1 = explode(PHP_EOL, $noidungfile);

// echo count($mang1);

$mang2 = array();

foreach($mang1 as $value) {
    echo $value . "\n";
    $tmpName = explode(",", $value)[0];
    $tmpPrice = explode(",", $value)[1];
    $obj = new Drink($tmpName, $tmpPrice);
    $mang2[] = $obj;
}

echo "Mang Drink sau khi bien doi la: \n";
foreach($mang2 as $value) {
    echo $value->name . "\n";
}



?>