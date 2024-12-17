<?php

//  class base{
//     public $name = "uzzol dash";
    
//     public function show(){
//         echo $this->name;
//     }
//  }

//  $test = new base();
//  $test->show();

//////////////////////////////////////////
 
//  class base{
//     public static $name = "uzzol dash";
    
//     public function show(){
//         echo self::$name;
//     }
//  }

//  $test = new base();
//  $test->show();

////////////////////////////////////////////////
//  class base{
//     public static $name = "polash dash";
    
//     public static function show(){
//         echo self::$name;
//     }
//  }

//  echo base::$name;
//  echo '</br>';
//  base::show();
//////////////////////////////////////////////
 class base{
    public static $name = "polash dash";
    
    public static function show(){
        echo self::$name;
    }
    
    public function __construct($n){
        self::$name = $n;
    }
 }

 $test = new base('jakir');
 $test->show();
//////////////////////////////////////////////

//  class base{
//     public static $name = "akash dash";
   
//  }

//  class derived extends base{
//     public static function show(){
//         echo parent::$name;
//     }
//  }
 
//  $test = new derived();
//  $test->show();
?>