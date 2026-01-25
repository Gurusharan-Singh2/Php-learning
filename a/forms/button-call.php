

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Button Call</title>
</head>
<body>

<form action="" method="post">

<button name="button">Click Me</button>

</form>
<?php
function printDiv(){
  echo "<div>
       <h2>Helllo Baby</h2>
  </div> ";
}


?>
  
</body>
</html>

<?php


if(isset($_POST['button'])){
  printDiv();
  exit;
}
?>