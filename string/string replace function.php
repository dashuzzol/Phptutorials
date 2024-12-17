<?php
  /*$str = "hello world. the world is beautyfull";

  echo str_replace("world", "earth", $str);*/


  /*$str = "hello world. the world is beautyfull";

  $find = ['hello','world'];
  $replace = ["hi", "earth"];

  echo str_replace($find, $replace, $str);*/


  /*$color = ["red","blue","black","green"];

  echo "<pre>";
  print_r(str_replace("blue","yallow",$color));
  echo "</pre>";*/


  /*$str = "hello world. the world is beautyfull";

  // echo substr_replace($str, "bangla desh", 6);
  // echo substr_replace($str, "bangla desh ", 6, 11);
  echo strtr($str, "ws", "ol");*/


  $str = "hello world. the world is beautyfull";

  $array = ["hello" => "hi", "the" => "The"];

  echo strtr($str, $array);
 ?>
