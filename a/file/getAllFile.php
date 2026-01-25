<?php


$path=__DIR__."/files";
$items=scandir($path);
// print_r($items);

// now remove . and .. from $items

$items=array_diff($items,array(".",".."));
// print_r($items);
foreach($items as $item){
  echo "<a href=./files/$item>$item</a>";
  echo "<br>";
  echo "<br>";
  
}


?>