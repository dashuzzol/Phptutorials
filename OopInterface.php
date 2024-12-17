<?php

    interface productFeatures{
        function image();
        function owner();
    }
    
    class products implements productFeatures{
        function image(){
            echo"Images Function";
        }
        function owner(){
            echo"Owner Function";
        }
    }

    $product = new products();
    $product->image();

?>