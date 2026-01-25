<?php

$fileName='dummy.txt';
$file=fopen($fileName,"r")  or die("unable to open file");
echo fread($file,filesize($fileName));
fclose($file);


?>