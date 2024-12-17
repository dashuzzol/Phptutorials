<?php
// array replace........................................
    /*$food =['orange','banana','coconut','apple','grapes'];
    $vegge =['carot','pea'];

    $newArray = array_replace($food, $vegge);

    echo "<pre>";
    print_r($newArray);
    echo "</pre>";*/

    /*$food =['orange','banana','coconut','a' => 'apple','grapes'];
    // $vegge =['a' => 'carot', 'b' => 'pea'];
    $vegge =['a' => 'carot', 2 => 'pea'];

    $newArray = array_replace($food, $vegge);

    echo "<pre>";
    print_r($newArray);
    echo "</pre>";*/


// array replace recursive....................................................
$vegge1 =array("a" =>array("carot"), "b" => array("sosa","gajor"));
$vegge2 =array("a" =>array("tomato"), "b" => array("kopi"));

$newArray = array_replace_recursive($vegge1, $vegge2);

echo "<pre>";
print_r($newArray);
echo "</pre>";
 ?>
