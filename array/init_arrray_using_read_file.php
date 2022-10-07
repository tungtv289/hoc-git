<!-- 1. khởi tạo mảng DoAn(name, price, status, ownerm, type) bằng cách đọc từ fiel doan10.txt
2. sửa đồ ăn có tên là "Valli" thành giá là 100000
3. sửa tất cả đồ ăn có type = 3 thành giá là 5000
4. sửa tất cả đồ ăn có status=0 thành giá là 0 -->

<?php

include("classmau.php");
$myfile = fopen("doan10.txt", "r") or die("Unable to open file!");
$noidungfile= fread($myfile, filesize("doan10.txt"));
fclose($myfile);
$mang1 = explode(PHP_EOL, $noidungfile);
foreach ($mang1 as $value) {
    echo $value . "\n";
    $tmpid = explode(",", $value)[0];
    $tmpname = explode(",", $value)[1];
    $tmpprice = explode(",", $value)[2];
    $tmptype = explode(",", $value)[3];
    $tmpstatus = explode(",", $value)[4];
    $obj = new DoAn ($tmpid, $tmpname, $tmpprice,$tmptype ,$tmpstatus);
    $DoanArr[] = $obj;
  }

?>