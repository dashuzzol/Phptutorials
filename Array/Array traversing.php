<?php
  $food = ['orange','apple','coconut','mango'];

  echo "<b> current :</b>" . current($food) . "<br>";
  echo "<b> current :</b>" . key($food) . "<br>";
  echo "<b> current :</b>" . pos($food) . "<br>";

// next +++.....................
  next($food);
  echo "<b> current :</b>" . current($food) . "<br>";

  next($food);
  echo "<b> current :</b>" . current($food) . "<br>";

// prev --............................
  prev($food);
  echo "<b> current :</b>" . current($food) . "<br>";

  // end --............................
    end($food);
    echo "<b> current :</b>" . current($food) . "<br>";
    echo "<b> current :</b>" . key($food) . "<br>";


    echo "<pre>";
    print_r(each($food));
    echo "</pre>";


    reset($food);
    echo "<b> current :</b>" . current($food) . "<br>";
 ?>
