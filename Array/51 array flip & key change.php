<?php
// array flip.......................................

  /**/$a = [
    "Bill" => 10,
    "Joe" => 20,
    "Peter" => 49,
  ];
  $newArray = array_flip($a);

  echo "<pre>";
  print_r($newArray);
  echo "</pre>";

  // array change key case..............................................

  $a = [
    "Bill" => 10,
    "Joe" => 20,
    "Peter" => 49,
  ];
  $newArray = array_change_key_case($a);
  $newArray = array_change_key_case($a, CASE_UPPER);
  $newArray = array_change_key_case($a, CASE_LOWER);

  echo "<pre>";
  print_r($newArray);
  echo "</pre>";
 ?>
