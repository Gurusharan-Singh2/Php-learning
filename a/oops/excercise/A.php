<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
  $name=$_POST['name'];
  
  class A{
    function PrintName($name){
      echo "My name is ".$name;
    }
  }

  $a1=new A();
  $a1->PrintName($name);
}
else{
  ?>

  <form action="" method="POST">
<label for="name">Name</label>
<input type="text" name="name" id="name">
<br>
<br>
<br>
<button name="button">Submit</button>
</form>

<?php
}
?>





