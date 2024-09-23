<?php
    $servername = "localhost";
    $username = "root";
    $password = "database123";
    $database = "PHPpractice";
    $conn;

    try{
        $conn = mysqli_connect($servername,$username,$password,$database);
        echo "Connection Successfull.";
        echo "<hr>";
    }catch(Exception $e){
        echo "<br> Error: ".$e->getMessage();
    }

    #creating table
    $sql = "CREATE TABLE `Student` (`id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(30) NOT NULL , `age` INT NOT NULL , PRIMARY KEY (`id`))";

    try{
        mysqli_query($conn,$sql);
        echo "Table successfully created;";
    }catch(Exception $e){#doesn't allows to create same table more than once
        echo "<br> Error: ".$e->getMessage();
    }
    echo "<hr>";

    #values can be repeatedlly inserted

    // $sql = "INSERT INTO `Student` (`name`,`age`) VALUES ('Krishna',23)";  

    // try{
    //     mysqli_query($conn,$sql);
    //     echo "Data successfully inserted";
    // }catch(Exception $e){
    //     echo "<br> Error: ".$e->getMessage();
    // }


    
    // $sql = "UPDATE `Student` SET `age`=20 WHERE `id`=3";
    // try{
    //     mysqli_query($conn,$sql);
    //     echo "Value successfully updated";
    // }catch(Exception $e){
    //     echo "<br> Error: ".$e->getMessage();
    // }

    $sql = "DELETE FROM `Student` WHERE `id`=3";
    try{
        mysqli_query($conn,$sql);
        echo "Value successfully deleted";
    }catch(Exception $e){
        echo "<br> Error: ".$e->getMessage();
    }




?>

