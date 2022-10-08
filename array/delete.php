
<!-- 1. khởi tạo mảng DoAn(name, price, status, ownerm, type) bằng cách đọc từ fiel doan10.txt
1. xoá tất cả đồ ăn có status=0 thành giá là 0 xong ghi(lưu vào file) do_an_sau_khi_xoa.txt
<?php
include("DoAn.php");
$myfile = fopen("D:\PHPpractice\doan10.txt", "r") or die("Unable to open file!");
$noidungfile= fread($myfile, filesize("D:\PHPpractice\doan10.txt"));
fclose($myfile);
$mang1 = explode(PHP_EOL, $noidungfile);
$DoanArr = array();
foreach ($mang1 as $value) {
        //  echo $value . "\n";
         $tmpid = explode(",", $value)[0];
         $tmpname = explode(",", $value)[1];
        $tmpprice = explode(",", $value)[2];
        $tmptype = explode(",", $value)[3];
        $tmpstatus = explode(",", $value)[4];
        $obj = new DoAn ($tmpid, $tmpname, $tmpprice,$tmptype ,$tmpstatus);
        $DoanArr[] = $obj;
        
             
        }
        echo count($mang1);
        for ($i=0;$i<count($DoanArr);++$i ){
            if ($DoanArr[$i]->status=="0") {
               unset($DoanArr[$i]);
               echo $DoanArr[$i]->name;
            //    ++$dem;
            }
            
     }
     echo gettype($DoanArr[1]->status);
     $fp = fopen("D:\PHPpractice\array\do_an_sau_khi_xoa.txt", "w") or die("Unable to open file!");
     //fwrite($fp,count($mang1));
     for($i=0;$i<count($DoanArr);++$i){
fwrite($fp, $DoanArr[$i]->name) ;
fwrite($fp, " " );

fwrite($fp, $DoanArr[$i]->price);
fwrite($fp, " " );

fwrite($fp, $DoanArr[$i]->status);
fwrite($fp, " " );

fwrite($fp, $DoanArr[$i]->owner);
fwrite($fp, " " );

fwrite($fp, $DoanArr[$i]->type."\n");
     }
fclose($fp);

      
?>