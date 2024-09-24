<?php

    include("../utils/dbconnect.php");

    $sql = "CREATE TABLE `books` (`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, `title` VARCHAR(30) NOT NULL, `price` DECIMAL(10,2) NOT NULL, `pages` INT NOT NULL)";

    try{
        mysqli_query($conn,$sql);
        
    }catch(Exception $e){
     
    }
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mini BookHub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    h2{
        margin-top: 30px;
        display: flex;
        justify-content: center;
    }
    .container{
        border: 2px solid black;
        width: 50%;
        height: 50vh;
    }

    .buttons{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center ;
        margin-top: 5%;
    }
    #button{
        width: 100px;
        padding: 10px;
        margin: 20px;
    }
    </style>
<body>
    <?php
        session_start();
        
        if(isset($_SESSION['username'])){
            $username = $_SESSION['username'];
            echo "<h2>Welcome,$username</h2>";
        }
        else{
            header("Location: ../index.php");
        }
        
?>


<div class="container">


    <div class="buttons">

    <a href="insert.php"><button type="button" class="btn btn-outline-primary" id="button">Insert</button></a>    



    <a href="view.php"><button type="button" class="btn btn-outline-primary"id="button">View</button></a> 

    <a href="../utils/logout.php"><button type="button" class="btn btn-outline-primary"id="button">Logout</button></a> 

    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>