<?php
  /*$a = ['polash','uzzol','pronik','susant','rana'];

  $newArray = array_keys($a);

  echo "<pre>";
  print_r($newArray);
  echo "<pre>";*/

  $a = [
    'firat' => 'polash',
    'second' => 'uzzol',
    'third' => 'pronik',
    'four' => 'susant',
    'five' =>'rana'
  ];

  // $newArray = array_keys($a);
  // $newArray = array_key_first($a);
  // $newArray = array_key_last($a);
  $newArray = array_key_exists("six",$a);

  if($newArray){
    echo "key exists";
  }else{
    echo "key not exists";
  }

  // echo "<pre>";
  // print_r($newArray);
  // echo "<pre>";
 ?>
