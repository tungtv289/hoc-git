<?php
class DoDungHocTap
{
    private $name;
    private $price;
    private $status;
    private $owner;

    public function __construct($name1, $price145678, $owner, $status)
    {
        $this->name = $name1;
        $this->price = $price145678;
        $this->owner = $owner;
        $this->status = $status;
    }
}
$mangDoDungHocTap = array(
    new DoDungHocTap("name1", 123, "tien", 1),
    new DoDungHocTap("name2", 123, "tien", 1),
    new DoDungHocTap("name3", 123, "tien", 1),
    new DoDungHocTap("name4", 123, "tien", 1),
    new DoDungHocTap("name5", 123, "tien", 1)
   
);

echo "Truoc khi them \n";
echo count($mangDoDungHocTap) . "\n";
echo "\n######################\n";

echo "sau khi them \n";
$mangDoDungHocTap[]=new DoDungHocTap("name6", 123, "tien", 1);
echo count($mangDoDungHocTap) . "\n";