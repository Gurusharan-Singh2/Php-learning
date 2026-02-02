<?php

class Men{
  function sayHello(){
    echo "Hllo";
    return $this;
  }
  function sayHii(){
    echo "Hii";
    return $this;
  }
  function sayBye(){
    echo "Bye";
    return $this;
  }
}

$m1= new Men();
$m1->sayHello()->sayHii()->sayBye();




?>