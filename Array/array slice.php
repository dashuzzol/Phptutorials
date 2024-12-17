<?php
$food = ['ram','mitu','situ','pallob','polash','pakhi'];

// $newArray = array_slice($food, 1, 3);
$newArray = array_slice($food, -3, 3, true);

echo "<pre>";
print_r($newArray);
echo "</pre>";

 ?>
