
<?php
  function square($n, $m){
    return [$n = $m];
  }
  $a = [1,2,3,4,5,];
  $b = ['polash','uzzol','pronik','susant','rana'];

  $newArray = array_map('square', $a, $b);

  echo "<pre>";
  print_r($newArray);
  echo "</pre>";

 ?>
