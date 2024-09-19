<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exception Handling</title>
</head>
<body>
    <?php
        try{
            $a = 5;
            $b = 2;

            if($a==0 || $b==0){
                throw new Exception("Division by zero");
            }
            echo $a/$b;
        }
        catch(Exception $e){
            echo "Exception occurs: ". $e->getMessage();
        }

        finally{
            echo "<br>Exception handled: ";
        }
    ?>
</body>
</html>