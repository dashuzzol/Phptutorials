<?php
// extract php...................................................

/*$color = ['a' => 'red', 'b' => 'green', 'c' => 'blue'];

  extract ($color);

  echo "value of a : $a <br>";
  echo "value of a : $b <br>";
  echo "value of a : $c <br>";*/


  /*$a = 'prange';
  // $a = 'MANGO'; ...link
  $color = ['a' => 'red', 'b' => 'green', 'c' => 'blue'];

    // extract ($color, EXTR_OVERWRITE);
    // extract ($color, EXTR_SKIP);...link
    extract ($color, EXTR_PREFIX_SAME, "test");


    echo "value of a : $a <br>";
    echo "value of a : $test_a <br>";
    echo "value of a : $b <br>";
    echo "value of a : $c <br>";*/


    // compact php...................................................

    $firat = 'polash';
    $second = 'uzzol';
    $third = 'pronik';
    $gender = 'mail';
    $country = 'bangladesh';

    $extre = ["gender","country"];

    $newArray = compact("firat","second","third",$extre);

    echo "<pre>";
    print_r($newArray);
    echo "<pre>";
 ?>
