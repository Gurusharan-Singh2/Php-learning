<?php


$age=10;

switch($age){
  case ($age<5):
    echo "Very small age";
    break;
  case ($age>=10 && $age<20):
    echo "good age";  
    break;
  default :
   echo "hii" ;
}
?>