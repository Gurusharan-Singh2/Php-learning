<?php
include_once("config.php");

if($_SERVER["REQUEST_METHOD"]==="POST"){
  $id=trim($_POST['button']);
  $username=trim($_POST['name']);
  $email=trim($_POST['email']);


  if(empty($username) || empty($email) ){
    die("All fields required");
  }


  $sql="UPDATE users 
SET username = :username, email = :email 
WHERE id = :id
";

  $stmt=$conn->prepare($sql);

  $success=$stmt->execute([
    ':username'=>$username,
    ':email'=>$email,
    ':id'=>$id,
  ]);
  if ($success) {
        header("Location: delete.php?sucess=1");
        echo "✅ Updated successful";
    } else {
        echo "❌ Updated failed";
    };


}






?>