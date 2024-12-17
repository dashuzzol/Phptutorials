<?php

class UserAuth{
    function login($userType){
        echo " $userType  log in";
    }
}

class Student extends UserAuth{
    
}

class teacher extends UserAuth{
    
}

// $st = new Student();
// $st->login('Student');
// echo"<br>";
$tc = new teacher();
$tc->login('teacher');

?>