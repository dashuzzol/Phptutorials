<?php

    abstract class ProductFeature{
        abstract function producteDetails();
        abstract function producteImage();
        abstract function producteOwnerDetails();
        function common(){
            echo "this is important things 33";
        }
    }
    

    class UploadProduct extends ProductFeature{
        function producteDetails(){
            echo "Product Details"; 
        }
        function producteImage(){
            echo "Product Image"; 
        }
        function producteOwnerDetails(){
            echo "Product Owner"; 
        }
        function other(){
            echo " Other Product"; 
        }
    }
    
    
    $upload = new UploadProduct();
    $upload->producteDetails();
    echo"</br>";
    $upload->producteImage();
    echo"</br>";
    $upload->producteOwnerDetails();
    echo"</br>";
    $upload->common();
    echo"</br>";
    $upload->other();
?>