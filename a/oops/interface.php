<?php

interface Product{
  function getColor();
}

class Iphone implements Product{
  function getColor(){
    echo "Red ";
  }
}

$p1=new Iphone();
$p1->getColor();

?>