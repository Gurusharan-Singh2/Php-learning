
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>User Table</title>
  <style>
    table { border-collapse: collapse; width: 100%; max-width: 600px; }
    th, td { border: 1px solid #ccc; padding: 8px 12px; text-align: left; }
    th { background: #f5f5f5; }
  </style>
</head>
<body>
  <table>
    <thead>
      <tr>
        <th>Email</th>
        <th>Name</th>
        <th>ID</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $users=[
  ["Gurusharan Singh","gurusharansingh2222@gmail.com",1],
  ["Daku","Daku2222@gmail.com",2],
  ["Gunda","Gunda2222@gmail.com",1],
];

for($i=0; $i<count($users); $i++){
   echo "<tr>";
  for($j=0; $j<count($users[$i]); $j++){
   
        echo "<td>".$users[$i][$j]."</td>";

  }
 echo" </tr>";
  }
      
      ?>
     
    </tbody>
  </table>
</body>
</html>

