<?php
$host="mysql";
$username="app_user";
$password="app_pass";
$databse="app_db";

// using mysqli class

// $conn= new mysqli($host,$username,$password,$databse);

// if($conn->connect_error){
//   die("Error occur on connecting db".$conn->connect_error);
// }
// // echo "db connected";



// $result=$conn->query('show tables')->fetch_all();

// print_r($result);



// <<<<<< Using PDO>>>>>>

try {
  $conn=new PDO("mysql:host=$host;dbname=$databse",$username,$password);
  $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  echo "Connection done";

} catch (PDOException $err) {
  echo 'connect failed'.$err->getMessage();
 
}

echo "<br/>";
$result=$conn->query("show tables");

while($row=$result->fetch(PDO::FETCH_NUM)){
  print_r($row);

}
?>