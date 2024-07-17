<?php 
    $connection = mysqli_connect('localhost', 'root', '', 'shopping_cart');
    if($connection){
        echo "Succesful";
    }else{
        die("Connection failed");
    }
?>