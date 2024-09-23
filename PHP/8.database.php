<?php
    $servername = "localhost";
    $username = "root";
    $password = "database123";

    $conn;

    try{
        $conn=mysqli_connect($servername,$username,$password);
        echo "Connection successful";

    }catch(Exception $e){
        echo "<br Error: ".$e->getMessage();
    }


    $sql = "CREATE DATABASE `PHPpractice`";

    try{
        mysqli_query($conn,$sql);
        echo "<br>New database created.";
    }catch(Exception $e){
        echo "<br> Error: ".$e->getMessage();
    }


?>