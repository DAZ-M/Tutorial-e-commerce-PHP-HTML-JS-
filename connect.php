<?php 
    $connection = mysqli_connect('localhost', 'root', 'root', 'shopping_cart');
    if($connection){
        echo "Succesful";
    }else{
        die("Connection failed");
    }
?>