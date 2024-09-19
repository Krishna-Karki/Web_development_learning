<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
     // STRING

     $firstname = "Krishna";
     $lastname = "Karki";

     $fullname = $firstname . " " . $lastname;
     echo $fullname;
     echo "<hr>";
     echo strlen($fullname);
     echo strrev($fullname);
     echo strtoupper($fullname);
     echo strtolower($fullname);

?>
</body>
</html>