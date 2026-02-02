<?php
// 
// echo "Hllo";

// when we use final in class so that class not extended to any other class 
// but in method like a method in pparent make it final so name name of method is not make in child class

//  static method

// class Honda{
//   function Hii(){
//     echo "Hiii";
//   }
// }

// $h1=new Honda();
// $h1->Hii();

//  but when we using  static

class Honda{
  static function Hii(){
    echo "Hiii";
  }
}

Honda::Hii();
?>