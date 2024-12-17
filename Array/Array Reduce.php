<?php
function myFunction($n, $m){
  // return $n . '-' . $m;
  return $n + $m;
}
// $a = ['polash','uzzol','pronik','susant','rana'];
$a = [1,2,3,4,5,];
// 2 paramiter...........
$newArray = array_reduce( $a, 'myFunction');
// 3 paramiter...........
// $newArray = array_reduce( $a, 'myFunction', 'leamon');
$newArray = array_reduce( $a, 'myFunction');

echo "<pre>";
print_r($newArray);
echo "</pre>";
 ?>
