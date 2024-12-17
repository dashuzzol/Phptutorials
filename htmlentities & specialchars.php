<?php
$str  = "a 'quote' is <b>bold</b>";
// $str  = '<a href="https://www.yahoobaba.net">Yahoo baba website</a>';

  echo $str . "<br><br>";

  echo htmlentities ($str, ENT_QUOTES)."<br>";

 ?>