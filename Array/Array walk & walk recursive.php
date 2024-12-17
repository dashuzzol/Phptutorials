<?php
// array_walk.......................................................
  /*$fruits = [
    "a" => "lemon",
    "b" =>"mango",
    "c" => "apple",
    "d" => "coconut"
  ];

  array_walk($fruits, "myFunction", "is a key of value");

  function myFunction($v, $k, $g){
    echo "$k $v $g <br>";
  }*/

  // array_walk.......................................................
  $vaggie = ["1" => "carrot", "2" => "tomato"];

  $fruits = [
    $vaggie,
    "a" => "lemon",
    "b" =>"mango",
    "c" => "apple",
    "d" => "coconut"
  ];

  array_walk($fruits, "myFunction", "is a key of value");

  function myFunction($v, $k, $g){
    echo "$k $g $v <br>";
  }
 ?>
