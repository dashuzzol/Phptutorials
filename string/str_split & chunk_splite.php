<?php
// split.............................................

  /*$str = "Yahoo Baba";

  $array = str_split($str);
  $array = str_split($str, 2);

  echo "<pre>";
  print_r($array);
  echo "<pre>";*/

  $str = "Yahoo Baba";

  $array = chunk_split($str, 1, ".");

  echo $array;

 ?>
