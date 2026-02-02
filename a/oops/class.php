<?php


// class Math{
//   public $val=100;

// function sum () {
//   echo $this->val;
// }
// function sum2 ($a,$b) {
//   return $a+$b;
// }


// }

// $m1=new Math();
// $m1->sum();
// echo $m1->sum2(10,40);


class Userr{
  public $name;

  function setName($name){
    $this->name=$name;
  }
  function getName(){
    return $this->name;
    ;
  }
}

$o1=new Userr();
$o1->setName("Gurusharan Singh");
echo $o1->getName();


?>