<?php
include_once("config.php");

if(isset($_POST['button'])){
  $id= $_POST['button'];
  $sql="delete from users where id=$id";
  $query=$conn->prepare($sql);
  if($query->execute()){
    header("Location: delete.php?sucess=1");
    exit;

  }else {
    echo "User not deleted";
  }



}

$sql="Select id,username,email from users";
$query=$conn->prepare($sql);

$query->execute();
$result=$query->fetchAll();









?>
<table border="1">

<?php foreach($result as $user){?>
<tr>
  <td><?php echo $user['username']?></td>
  <td><?php echo $user['email']?></td>
  <td><form action="" method="post"><button name="button" value=<?php echo $user['id']?>>Delete</button></form></td>
  <td> <a href="edit.php?id=<?php echo $user['id']?>">Edit</a></td>
</tr>
<?php }?>

</table>

