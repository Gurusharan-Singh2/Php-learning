<?php

class UserAuth{
public $name;
function __construct($name){
  $this->name=$name;
}
function login(){
  echo $this->name." is Logged in";
}



}

class Student extends UserAuth{

}

$s1=new Student("Guru");
$s1->login();

?>