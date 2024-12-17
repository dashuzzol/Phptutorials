<?php
  $emp = [
    [1, "krishna", "manager",50000],
    [2, "salman", "salsman",20000],
    [3, "mohan", "computer operator",30000],
    [4, "amir", "driver",52000],
  ];

  /*echo $emp[0][0];
  echo $emp[0][1];
  echo $emp[0][2];
  echo $emp[0][3];*/

  /*echo "<pre>";
  print_r ($emp);
  echo "</pre>";*/

// for loop................................
  // for($row = 0; $row < 4; $row++){
  //   for($col = 0; $col < 4; $col++){
  //     echo $emp[$row][$col];
  //   }
  //   echo "<br>";
  // }

  // for each loop................................
/*  foreach($emp as $v1){
    foreach($v1 as $v2){
      echo $v2;
    }
    echo "<br>";
  }*/

  // for each loop for table................................
echo "<table border=2px cellpadding=5px cellspacing=0px>";
  echo "<tr>
  <th>emp id.</th>
  <th>emp name.</th>
  <th>designation.</th>
  <th>sellery.</th>
  </tr>";
  foreach($emp as $v1){
    echo "<tr>";
    foreach($v1 as $v2){
      echo "<td> $v2 </td>";
    }
    echo "<tr>";
  }
  echo "</table>";

 ?>
