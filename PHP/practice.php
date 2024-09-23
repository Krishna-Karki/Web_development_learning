<?php

    $servername = "localhost";
    $username = "root";
    $password = "database123";
    $database = "practice";
    $conn;

    try{
        $conn = mysqli_connect($servername,$username,$password,$database);
        echo "Connection successfull..";
        echo "<hr>";
    }catch(Exception $e){
        echo "Error Message: ".$e->getMessage();
    }
    
    // $sql = "CREATE DATABASE `practice1`";

    // try{
    //     mysqli_query($conn,$sql);
    //     echo "New Database created";
    //     echo "<hr>";
    // }catch(Exception $e){
    //     echo "Error: ".$e->getMessage();
        
    // }
    

    $sql = "CREATE TABLE `prac`(`id` INT NOT NULL AUTO_INCREMENT, `name` VARCHAR(30) NOT NULL, `age` INT NOT NULL, PRIMARY KEY(`id`))";
    
    try{
        mysqli_query($conn,$sql);
        echo "Table created";
        echo "<hr>";
    }catch(Exception $e){
        echo "Error: ".$e->getMessage();
    }

    $sql = "INSERT INTO `prac` (`name`,`age`) VALUES ('Karan', 23)";
    try{
        mysqli_query($conn,$sql);
        echo "Values inserted";
        echo "<hr>";
    }catch(Exception $e){
        echo "Error: "-$e->getMessage();
    }
?>