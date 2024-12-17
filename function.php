<?php
  // function name(){
  //   echo "hello i am ";
  // }
  // name();

  // function main(){
  //   echo "hello i am lucky man";
  // }
  // main();
  
  // paramiters function...................

  // function name($fname,$lname){
  //   echo "hello $fname; $lname.<br>";
  // }
  // name("uzzol","orjo")


  // return function...................

  // function name($fname,$lname){
  //   return "$fname$lname"
  // }
  //
  //  echo name("uzzol",'orjo');


   // function name ($fname,$lname){
   //   $v = "$fname $lname";
   //   return $v;
   // }
   //
   // $sum = name("uzzol","mihir");
   // echo $sum;

 // refarence function................
// 1st thing..................
   // function testing($string){
   //   $string .= "and somthing extra";
   // }
   //
   // $str = "this is a string";
   // testing($str);
   // echo $str;

// 2nd thing...............................

   // function testing(&$string){
   //   $string .= "and somthing extra";
   // }
   //
   // $str = "this is a string";
   // testing($str);
   // echo $str;

   // variavle function.......................

   // function wow($manush){
   //   echo "hello uzzol $manush";
   // }
   // $nami = "wow";
   // $nami("everithing");


  //  $nami = function($manush){
  //   echo "hello uzzol $manush";
  // };
  // $nami("whate do you do");


  // recursive function.........................
 // 1st way.............
  // function display($number){
  //   if($number <= 5){
  //     echo "$number <br>";
  //     display($number + 1);
  //   }
  // }
  // display(1);

  // 2nd way.............
  // function factorial($n){
  //   if($n == 0){
  //     return 1;
  //   }else{
  //     return($n * factorial($n - 1));
  //   }
  // }
  // echo factorial (5);

  // global function.............................
    // normal function..........
    // function test (){
    //   $x = 10;
    //   echo "hello uzzol : $x";
    // }
    // test();


    // $x = 10;
    // function test (){
    //   global $x;
    //   echo " hello uzzol: $x <br>";
    // }
    // test();


  // 2nd way.........
  // $x = 10;
  // $y = 10;
  //   function test (){
  //     global $x, $y;
  //   }
  //   test();
  //   echo $x + $y;

 ?>
