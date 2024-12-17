<?php
// array rand.......................

  // $color = ["gdggd","gdude","gdfsd","iofyw","yufewy","iwg","wyue"];
  /*$color = ["a" => "gdggd", "b" => "gdude", "c" => "gdfsd", "d" => "iofyw"];


  // 1 value show..................
  // $newArray = array_rand($color);
  // 2 value show..................
  $newArray = array_rand($color, 2);


  echo "<pre>";
  print_r($newArray);
  echo "</pre>";*/

  // echo $color[$newArray[0]]. "<br>";
  // echo $color[$newArray[1]];

  // array shuffle.....................................

   $color = ["gdggd","gdude","gdfsd","iofyw","yufewy"];

    shuffle($color);


   echo "<pre>";
   print_r($color);
   echo "</pre>";
 ?>
