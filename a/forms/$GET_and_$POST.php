<?php

//  Get Request

if($_GET){

$email=$_GET["email"];
$password=$_GET["password"];

echo "Email is ".$email;
echo "Password is ".$password;
}
//  Post Request

if($_POST){

$email=$_POST["email"];
$password=$_POST["password"];

echo "Email is ".$email;
echo "Password is ".$password;
}




?>