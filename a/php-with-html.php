<?php

echo ("<h1 style='color:green'>Hii</h1>");

$color="green"
?>

<?php

$name="John Doe";
echo ("<h1 style='color:green'>My name is $name</h1>");
?>



<h2 style="color:<?php echo$color?>">Hllo h2</h2>
<h2 style="color:<?php echo$color?>"><?php echo($name) ?> </h2>
<h2 style="color:<?php echo$color?>">My name is <?php echo($name) ?> </h2>