<?php

$fileName="dummy.txt";
$filePath=__DIR__.'/'.$fileName;
$fileContent="Yeah Baby";
$file=fopen($filePath,"w") or die("unable to create file");
fwrite($file,$fileContent);
fclose($file);
echo 'file created';

?>