<?php
    class employee{
        public $name;
        public $age;
        public $salary;

        function work(){
            echo $this->name .' '. "is working";
        }
    }
    
    $obj1 = new employee();
    $obj1->name = "uzzol";
    $obj1->age = 24;
    $obj1->salary = 24000;
    $obj1->work();
    echo"</br>";
    
    print_r($obj1);

?>