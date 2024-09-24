<?php
    include("dbconnect.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql = "DELETE FROM `books` where `id` = '$id'";

        try{
            mysqli_query($conn,$sql);
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }

    header("Location: ../src/view.php");
?>