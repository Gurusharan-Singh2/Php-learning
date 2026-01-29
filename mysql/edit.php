<?php
include_once("config.php");
if(isset($_GET)){

$id=$_GET['id'];

$sql="select username,email from users where id=:id";
$stmt=$conn->prepare($sql);

$sucess=$stmt->execute([
  ':id'=>$id
]);
$user=$stmt->fetchAll();


$username=$user['0']['username'];
$email=$user['0']['email'];




}


?>

   <form action="update.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $username?>" required>
        <br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"  value="<?php echo $email?>" required>
        <br><br>

     
        <br><br>

        <button type="submit" name="button" value="<?php echo $id?>">Edit</button>
    </form>