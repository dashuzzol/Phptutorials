<?php
$a = ['a' => 'polash','b' => 'uzzol','c' => 'rakib','d' => 'pronik'];

$a1 = ['a' => 'polash','f' => 'uzzol','d' => 'moloy'];

$newArray = array_intersect($a, $a1);
$newArray = array_intersect_key($a, $a1);
$newArray = array_intersect_assoc($a, $a1);

echo "<pre>";
print_r($newArray);
echo "<pre>";
 ?>
