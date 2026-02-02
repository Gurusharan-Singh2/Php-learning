<?php

abstract class car{
  abstract function getPrice();

  function detail(){
    echo "This is abstract  class";
  }
}

class Honda extends car{
  function getPrice(){
    echo "Price is 5 lpa";
  }
}

$h1= new Honda();
$h1->detail();
$h1->getPrice();
?>