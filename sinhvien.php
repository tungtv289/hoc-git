<?php



class sinhvien
{
  // Properties
  public $index;
  public $fullname;
  
  public $age;
  public $score;
  public $isActive;

  function __construct($index, $fullname, , $age, $score, $isActive)
  {
    $this->index = $index;
    $this->fullname = $fullname;
    $this->email = $email;
    $this->age = $age;
    $this->score = $score;
    $this->isActive = $isActive;
  }
}

$myfile = fopen("sinhvien10.txt", "r") or die("Unable to open file!");
$noidungfile = fread($myfile, filesize("sinhvien10.txt"));
fclose($myfile);
// echo $noidungfile;


// PHP_EOL = end of line\
$mang1 = explode(PHP_EOL, $noidungfile);

// echo count($mang1);

$drinkArr = array();

foreach ($mang1 as $value) {
  //  echo $value . "\n";
  $tmpindex = explode(",", $value)[0];
  $tmpfullname = explode(",", $value)[1];
  $tmpemail = explode(",", $value)[2];
  $tmpage = explode(",", $value)[3];
  $tmpscore = explode(",", $value)[4];
  $tmpisActive = explode(",", $value)[5];

  $obj = new Drink($tmpindex, $tmpfullname, $tmpemail, $tmpage, $tmpscore, $tmpisActive);
  $drinkArr[] = $obj;
}
echo "########################################";
echo gettype($drinkArr[1]->fullname);
//    echo "Mang Drink sau khi bien doi la: \n";
//    foreach($drinkArr as $value) {
//        echo $value->name . "\n";
//    }
?>