<!-- // bai tap
1. tạo khởi tạo mảng có kiểu là DoAn(name, price, status, ownerm, type) với 5 phần tử ban đầu 
2. sửa đồ ăn có tên là "doan1" thành giá là 100000
3. sửa tất cả đồ ăn có type = 1 thành giá là 5000 -->

<?php
class DoAn
{
    public $name;
    public $price;
    public $status;
    public $owner;
    public $type;

    public function __construct($name1, $price145678, $owner, $status, $type)
    {
        $this->name = $name1;
        $this->price = $price145678;
        $this->owner = $owner;
        $this->status = $status;
        $this->type = $type;
    }
}
$mangDoAn = array(
    new DoAn("doan1", 123, "tien", 1, 2),
    new DoAn("doan1", 123, "tien", 1, 3),
    new DoAn("name3", 123, "tien", 1, 4),
    new DoAn("name4", 123, "tien", 1, 1),
    new DoAn("name5", 123, "tien", 1, 1)

);

echo "2. sửa đồ ăn có tên là \"doan1\" thành giá là 100000 \n";
foreach ($mangDoAn as $vl) {
    if ($vl->name == "doan1") {
        $vl->price = 100000;
        echo $vl->price . "\n";
    }
}

//    for ($i=0;$i<count($mangDoAn);++$i){
//         if  ($mangDoAn[$i]-> name=="doan1"){
//                                ++$dem;
//         }
//     }
//         echo "da sua  : \n";
//         echo $dem;
//         echo"\n";
//         echo "va khong sua \n";
//         echo count($mangDoAn)-$dem;


echo "3.sửa tất cả đồ ăn có type = 1 thành giá là 5000 --";
foreach ($mangDoAn as $vl) {
    if ($vl->type == 1) {
        $vl->price = 5000;
        echo $vl->price . "\n";
    }
}
