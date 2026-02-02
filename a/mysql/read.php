<?php 

include_once("config.php");
$getUsers=$conn->prepare('Select * from users');
$getUsers->execute();
$result=$getUsers->fetchAll();

print_r($result);



?>