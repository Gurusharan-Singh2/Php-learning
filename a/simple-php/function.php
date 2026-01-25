<?php

function hii(){
  echo "Hii Guys <br/> ";
 
}

function hello(){
  hii();
  echo 'Hello Guys <hr/>';
};

// hello();

function printSum($x,$y){

return $x+$y;
}

// echo printSum(10,20);


function printName($name,$color){
  echo "<h1 style=color:$color> $name</h1>";
}

printName("Gurusharan","red");
printName("Singh","green");

$printSquare=function($num){

echo ($num*$num);
};

$printSquare(4);


?>