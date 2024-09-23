<?php

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name = $_POST['name'];
        $age = $_POST['age'];

        $servername = "localhost";
        $username = "root";
        $password = "database123";
        $database = "PHPpractice";
        $conn; 

        
        try{
            $conn = mysqli_connect($servername,$username,$password,$database);
            echo "Connection Successfull";
        }catch(Exception $e){
            echo "Error: ".$e->getMessage();
        }

        $sql = "INSERT INTO `Student`(`name`,`age`) VALUES ('$name','$age')";

        try{
            mysqli_query($conn,$sql);
            echo "Value entered";
        }catch(Exception $e){
            echo "Error: ".$e->getMessage();
        }
    }

?>