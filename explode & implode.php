<?php
// explode................................................
  /*$str = "hello world . it's a beautyful day.";

  // $array = explode(" ", $str);
  $array = explode(" ", $str, 3);

  echo "<pre>";
  print_r($array);
  echo "<pre>";*/

  /*$str = "hello, world,it's, a, beautyful, day";

  $array = explode(",", $str);

  echo "<pre>";
  print_r($array);
  echo "<pre>";*/

// implode .........................................

  $str = ['hello','world','beautyful','day'];

  $array = implode(" ", $str);
  $array = implode(" sorry ", $str);

  echo $array;
  // print_r($array);
  // echo "<pre>";



 ?>
