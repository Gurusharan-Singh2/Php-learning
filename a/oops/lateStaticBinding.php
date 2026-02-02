<?php

class CountrySale{
  static public $totalSale=1000;
   function getTotalSale(){
      echo static::$totalSale; // here self is same as CitySale::$totalSale but when we use static it take value of there class like CountrySale it print 1000 and for CitySale it print  50
    }
}

class CitySale extends CountrySale{
    static public $totalSale=50;
   
}

$city=new CitySale();
$city->getTotalSale();
?>