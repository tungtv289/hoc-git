<!-- 1. khởi tạo mảng DoAn(name, price, status, ownerm, type) bằng cách đọc từ fiel doan10.txt
1. xoá tất cả đồ ăn có status=0 thành giá là 0 xong ghi(lưu vào file) do_an_sau_khi_xoa.txt
<?php
include("DoAn.php");
include("XuLyFile.php");
$mang1 = readFileT("D:\PHPpractice\doan10.txt");
$DoanArr = array();
foreach ($mang1 as $value) {
    //  echo $value . "\n";
    $tmpid = explode(",", $value)[0];
    $tmpname = explode(",", $value)[1];
    $tmpprice = explode(",", $value)[2];
    $tmptype = explode(",", $value)[3];
    $tmpstatus = explode(",", $value)[4];
    $obj = new DoAn($tmpid, $tmpname, $tmpprice, $tmptype, $tmpstatus);
    $DoanArr[] = $obj;
}
echo count($DoanArr);
echo gettype($DoanArr[1]->status);
for ($i = 0; $i < count($DoanArr); ++$i) {
    if ($DoanArr[$i]->status == "0") {
        //       echo $DoanArr[$i]->name;
        unset($DoanArr[$i]);
        //  array_splice($DoanArr, $i, 1);
        // ++$dem; 
    }
}
// var_dump($DoanArr);
// $DoanArr = array_values($DoanArr);
//echo $dem;
echo count($DoanArr);
writeFile("D:\PHPpractice\array\do_an_sau_khi_xoa.txt",$DoanArr);

?>