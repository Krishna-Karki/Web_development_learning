<?php

    $servername = "localhost";
    $username = 'root';
    $password = 'database123';
    $database = 'Student_record';
    $conn;

    try{
        $conn = mysqli_connect($servername,$username,$password,$database);
       
        $sql = "CREATE TABLE `Student_record`(`Student_Name`VARCHAR(30)  NOT NULL PRIMARY KEY, `Faculty` VARCHAR(10) NOT NULL , `Batch` VARCHAR(10) NOT NULL , `Contact` VARCHAR(20) NOT NULL)";
        try{
            mysqli_query($conn,$sql);   
        }catch(Exception $e){
        }
    }catch(Exception $e){
        echo "Error: ".$e->getMessage();
    }


    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name = $_POST['name'];
        $faculty = $_POST['faculty'];
        $batch = $_POST['batch'];
        $contact = $_POST['contact'];

        //Inserting values

        $insertsql = "INSERT INTO `Student_record`(`Student_Name`,`Faculty`,`Batch`,`Contact`) VALUES ('$name','$faculty','$batch','$contact')";
        mysqli_query($conn,$insertsql);
    
        //editing values
        $editsql = "UPDATE `Student_record` SET `Faculty`='MBBS' WHERE `Student_Name`='Karan Karki'";
        mysqli_query($conn,$editsql);

        //deleting values
        $deletesql = "DELETE FROM `Student_record` WHERE `Student_Name`='Krishna Karki'";
        mysqli_query($conn,$deletesql);

    }

    $display = "SELECT * FROM `Student_record`";
    $result = mysqli_query($conn,$display);

    while($row = mysqli_fetch_assoc($result)){
        echo "Student name: ".$row['Student_Name'];
        echo "<br> Faculty: ".$row['Faculty'];
        echo "<br> Batch: ".$row['Batch'];
        echo "<br> Contact: ".$row['Contact'];
        echo "<hr>";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="Q10.php" method="post">

        <label for="name">Name:</label>
        <input type="text" name="name" id="name">

        <label for="faculty">Faculty:</label>
        <input type="text" name="faculty" id="faculty">

        <label for="batch">Batch:</label>
        <input type="text" name="batch" id="batch">

        <label for="contact">Contact:</label>
        <input type="text" name="contact" id="contact">

        <button type="submit">Submit</button>
    </form>
</body>
</html>