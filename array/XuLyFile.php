<?php
function readFileT($filePath)
{
    $myfile = fopen($filePath, "r") or die("Unable to open file!");
    $noidungfile = fread($myfile, filesize($filePath));
    fclose($myfile);
    return  explode(PHP_EOL, $noidungfile);
}
//#################################################################
function writeFile($filePath, $arrDoAn)
{
    $fp = fopen($filePath, "w") or die("Unable to open file!");
    //fwrite($fp,count($mang1, $arrDoAn));
    for ($i = 0; $i < count($arrDoAn); ++$i) {
        // if (isset($arrDoAn[$i])) {
        fwrite($fp, $arrDoAn[$i]->id);
        fwrite($fp, ",");
        fwrite($fp, $arrDoAn[$i]->name);
        fwrite($fp, ",");
        fwrite($fp, $arrDoAn[$i]->price);
        fwrite($fp, ",");
        fwrite($fp, $arrDoAn[$i]->type);
        fwrite($fp, ",");
        fwrite($fp, $arrDoAn[$i]->status . "\n");
    }
    //}
    fclose($fp);
}
