<?php
// array marge.......................................

/*// $food =['orange','banana','coconut','apple','grapes'];
// $food1 =['orange','banana','coconut'];

$food =['a' => 'orange','b' =>'banana','c' =>'coconut','d' =>'apple'];
$food1 =['e' =>'angur','f' =>'sopr'];

  $newArray = array_merge($food,$food1);

  echo "<pre>";
  print_r($newArray);
  echo "</pre>";*/


  // array marge recursive....................

  /*$food =['a' => 'orange','b' =>'banana','c' =>'coconut','d' =>'apple'];
  $food1 =['e' =>'angur',
          'b' => ['color' => ['red','green','blue','white']]];

    $newArray = array_merge_recursive($food,$food1);

    echo "<pre>";
    print_r($newArray);
    echo "</pre>";*/


    // array combind.................................

    $food = ['ram','mitu','situ','pallob'];
    $food1 = ['10','45','87','67'];

    $newArray = array_combine($food, $food1);

    echo "<pre>";
    print_r($newArray);
    echo "</pre>";
 ?>
