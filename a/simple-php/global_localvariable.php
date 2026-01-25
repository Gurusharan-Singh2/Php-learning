<?php

$name="Guru";

function hello(){
  // $name="Anil";
  global $name;
  echo "Global Variable".$name;
}


echo "Local Variable". $name;
echo "<br/>";
echo "<br/>";
hello();


?>