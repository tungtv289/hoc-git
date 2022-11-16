<!-- 1. khởi tạo mảng DoAn(name, price, status, ownerm, type) bằng cách đọc từ fiel doan10.txt
2. sửa đồ ăn có tên là "Valli" thành giá là 100000
3. sửa tất cả đồ ăn có type = 3 thành giá là 5000
4. sửa tất cả đồ ăn có status=0 thành giá là 0 -->

<?php
include("D:\PHPpractice\array\DoAn.php");
include("XuLyFile.php");
$mang1 = readFileT("D:\PHPpractice\doan10.txt");
foreach ($mang1 as $value) {
  $tmpname = explode(",", $value)[0];
  $tmpprice = explode(",", $value)[1];
  $tmpstatus = explode(",", $value)[2];
  $tmpowner= explode(",", $value)[3];
  $tmptype = explode(",", $value)[4];
  $obj = new DoAn($tmpname,  $tmpprice, $tmpstatus,$tmpowner,$tmptype);
  $DoanArr[] = $obj;
}
 
?>