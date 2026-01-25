<?php

// array to json
// $user=["name"=>"Gurusharan Singh","age"=>18];
// $userJson=json_encode($user);
// print_r($userJson);

// json to array

$userJson='{"name":"Gurusharan Singh","age":18}';
// $user=json_decode($userJson); // it convert into object
$user=json_decode($userJson,true); // it convert into array
print_r($user);



?>