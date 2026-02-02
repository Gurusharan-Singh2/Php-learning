<?php
include("../a/mysql/config.php");

class User{
 public $DbConn;
 function __construct($DbConn){
  $this->DbConn=$DbConn;

 }
 function getUser(){
  $student=$this->DbConn->prepare('Select * from users');
  $student->execute();
  echo "<pre>";
  print_r($student->fetchAll());
  echo "</pre>";
 }
}

$u1=new User($conn);
$u1->getUser();


?>