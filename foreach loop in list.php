<?php
  $emp = [
    [1, "krishna", "manager",50000],
    [2, "salman", "salsman",20000],
    [3, "mohan", "computer operator",30000],
    [4, "amir", "driver",52000],
  ];

  $marks = [
     [
      "id" => 1,
      "name" => "salman",
      "designation" => "manager",
      "salery" => 546,
    ],
    [
      "id" => 2,
      "name" => "polash",
      "designation" => "salsman",
      "salery" => 553,
    ],
     [
       "id" => 3,
      "name" => "sakib",
      "designation" => "computer" ,
      "salery" => 546,
    ],
    [
      "id" => 4,
     "name" => "uzzol",
     "designation" => "driver",
     "salery" => 836,
   ],
  ];
// echo "<table border=2px>";
//   foreach($marks as list("id" => $id,"name" => $name,"designation" => $designation,"salery" => $salery)){
//     echo "<tr>";
//     echo "<td>$id</td> <td>$name</td> <td>$designation</td> <td>$salery</td><br>";
//     echo "</tr>";
//   }
//   echo "</table>";

  echo "<table border=2px>";
    foreach($emp as list($id, $name, $designation, $salery)){
      echo "<tr>";
      echo "<td>$id</td> <td>$name</td> <td>$designation</td> <td>$salery</td><br>";
      echo "</tr>";
    }
    echo "</table>";

 ?>