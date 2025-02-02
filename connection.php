<?php


    $connect = mysqli_connect('localhost', 'root', '', 'latihan');

    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }else{
        // echo "Connected successfully";
    }

?>