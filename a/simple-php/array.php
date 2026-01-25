<?php


$name=["Anil","Guru","Daku","fhfkjju"];

//  echo $name[1];

// using for loop
// for($i=0; $i<count($name); $i++){
//   echo $name[$i];
//   echo '<br/>';
// }


//  using foreach loop

// syntax 1

// foreach($name as $x){
//   if($x=="Anil"){
//     continue;
//   }
//   echo "$x <br/> ";
// }

// syntax 2

// foreach($name as $x):
//  echo "$x <br/> ";
// endforeach;


// Associative Array

// $user=["name"=>"Gurusharan Singh","age"=>18];
// foreach($user as $key=>$x){
//   echo $key." is ".$x;
//   echo "<br/>"; 

// }

// $users=[["name"=>"Gurusharan Singh","age"=>18],["name"=>"Daku","age"=>18]];


// foreach($users as $b){
//   foreach($b as $c){
//     echo $c ;
//     echo " ";
//   }
//   echo "<br/>";
// }


// Multidimenstional Array

// $users=[
//   ["Gurusharan Singh","gurusharansingh2222@gmail.com",1],
//   ["Daku","Daku2222@gmail.com",2],
//   ["Gunda","Gunda2222@gmail.com",1],
// ];

// echo "<pre>";
// print_r($users);
// echo "<pre/>";
// for($i=0; $i<count($users); $i++){
//   for($j=0; $j<count($users[$i]); $j++){
//     echo $users[$i][$j];
//     echo "<br/>";

//   }
//   echo "<br/>";
// }


// Add a element iin aray

$users=["g","d"];

// print_r($users);

// array_push($users,"ppeter"); // for single
// print_r($users);

array_push($users,"ppeter","john","kalu"); // for multiple
print_r($users);
echo "<br/>";

//  for single delete using pop
// array_pop($users);
// print_r($users);

//  for multiple delete using slice

array_splice($users,-2);
print_r($users);









?>