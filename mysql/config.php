<?php
$host="mysql";
$username="app_user";
$password="app_pass";
$databse="app_db";

try {
  $conn=new PDO("mysql:host=$host;dbname=$databse",$username,$password);
  $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  // echo "Connection done";

} catch (PDOException $err) {
  echo 'connect failed'.$err->getMessage();
 
}


?>