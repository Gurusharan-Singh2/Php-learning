<form action="" method="POST">
       
        <label for="search">Search:</label>
        <input type="text" id="search" name="search" placeholder="Type your query..." required>
        <br><br>

        <input type="submit" value="Search">
    </form>

<?php
include_once("config.php");
if($_SERVER["REQUEST_METHOD"]==="POST"){
  $name=$_POST['search'];
 

  $sql="select * from users where username like :name";
  $stmt=$conn->prepare($sql);

  $success=$stmt->execute([
    ':name'=>"%$name%"
  ]);

    $user=$stmt->fetchAll()['0'];
  
}



?>    
<table border="1">


<tr>
  <td><?php echo $user['username']?></td>
  <td><?php echo $user['email']?></td>
  <td><form action="" method="post"><button name="button" value=<?php echo $user['id']?>>Delete</button></form></td>
  <td> <a href="edit.php?id=<?php echo $user['id']?>">Edit</a></td>
</tr>


</table>