<?php

if(isset($_POST['button'])){

$fileName=$_POST['fileName'];
$fileContent=$_POST['fileContent'];
$filePath=__DIR__.'/files/'.$fileName;
$file=fopen($filePath,"w") or die("unable to create file");
fwrite($file,$fileContent);
fclose($file);
echo 'file created';

}


?>

<form action="" method="post">
  <input type="text" name="fileName" placeholder="Enter FileName">
  <br>
  <br>
  <textarea name="fileContent" placeholder="Enter FileContent">
    

  </textarea>
  <br>
    <br>
    <button name="button">Create File</button>
</form>