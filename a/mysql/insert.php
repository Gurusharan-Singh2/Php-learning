<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Form</title>
</head>
<body>
    <h2>Registration Form</h2>
    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br><br>

        <input type="submit" value="Register">
    </form>
</body>
</html>

<?php
include_once("config.php");

if($_SERVER["REQUEST_METHOD"]==="POST"){
  $username=trim($_POST['name']);
  $email=trim($_POST['email']);
  $password=$_POST['password'];

  if(empty($username) || empty($email) || empty($password)){
    die("All fields required");
  }
  $hashedPassword=password_hash($password,PASSWORD_DEFAULT);

  $sql="INSERT INTO users (username,email,password) VALUES(:username,:email,:password)";

  $stmt=$conn->prepare($sql);

  $success=$stmt->execute([
    ':username'=>$username,
    ':email'=>$email,
    ':password'=>$hashedPassword,
  ]);
  if ($success) {
        echo "✅ Registration successful";
    } else {
        echo "❌ Registration failed";
    };


}






?>