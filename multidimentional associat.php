<?php
  $marks = [
    "krishna" => [
      "physics" => 85,
      "math" => 75,
      "chemisty" => 89,
    ],
    "salman" => [
      "physics" => 67,
      "math" => 98,
      "chemisty" => 44,
    ],
    "mohan" => [
      "physics" => 65,
      "math" => 45,
      "chemisty" => 97,
    ],
  ];
  // testing prin...........................................
  /*echo "<pre>";
  print_r($marks);
  echo "</pre>";*/

  // foreach loop............................................
  /*foreach($marks as $key => $ggs){
    echo $key;
    foreach($ggs as $v2){
      echo $v2." ";
    }
    echo "<br>";
  }*/

  // foreach loop for table............................................
  echo "<table border=2px>";
  echo "<tr>
          <th>student name</th>
          <th>phisich</th>
          <th>math</th>
          <th>chamisty</th>
        </tr>";
  foreach($marks as $key => $ggs){
    echo "<tr>";
    echo "<td> $key </td>";
    foreach($ggs as $v2){
      echo "<td> $v2 </td> ";
    }
    echo "</tr>";
  }
  echo "</table>";

 ?>
