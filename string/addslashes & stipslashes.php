<?php
  /*$str = "hello i am 'yahoo baba'";

  echo $str . "<br>";

  echo addslashes($str);*/


  /*$str = "hello i am 'yahoo baba'";

  echo $str . "<br>";

  $new = addslashes($str);

  echo stripslashes($str);*/


  /*$str = "hello i am 'yahoo baba'";

  echo $str . "<br>";

  $new = addcslashes($str, 'y');
  $new = addcslashes($str, 'a..z');

  echo $new;*/


  $str = 'Hello \I am Yahoo \Baba';
  echo $str . "<br>";
  $newstr = addcslashes($str, "a..f");
  echo stripcslashes($str);
 ?>
