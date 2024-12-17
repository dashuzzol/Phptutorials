<?php
  /*$food = array('orange','banana','apple');

  // echo count ($food);
  echo sizeof ($food);

  $food = array(
    'fruits' => array('orange','banana','apple'),
    'veggie' => array('carrot','collard','pea')
  );

  // echo count ($food);
  // echo sizeof ($food);
  // echo count($food['fruits'])*/

  /*$food = array('orange','banana','apple');


  for($i = 0; $i <= 2; $i++){
    echo $food[$i]."<br>";
  }

  $len = count($food);

  for($i = 0; $i < $len; $i++){
    echo $food[$i]."<br>";
  }*/


  $food = array('orange','banana','orange','apple');

  echo "<pre>";
  print_r(array_count_values($food));
  echo "</pre>";

 ?>
