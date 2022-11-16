<?php
function logMsg($message) {
    $myFile = "log.log";
    $fh = fopen($myFile, 'a') or die("can't open file");
    fwrite($fh, $message."\n");
    fclose($fh);
}

function readFileT($filePath)
{

    $myfile = fopen($filePath, "r") or die("Unable to open file!");
    $noidungfile = fread($myfile, filesize($filePath));
    logMsg("cho nay nel");
    logMsg($noidungfile);
    fclose($myfile);
    $test = explode("\n", $noidungfile);
    logMsg(count($test));
    return  $test;
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


