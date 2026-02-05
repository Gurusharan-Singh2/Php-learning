<?php

function autoload($class){
  include($class.'.php');

}

spl_autoload_register('autoload');

// $t1=new Teacher();
$t1=new Student();

?>