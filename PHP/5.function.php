<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FUNCTION</title>
</head>
<body>
    <?php
        function sum($a,$b){
            return $a+$b;
        }
        $answer = sum(4,5);

        echo "<br> The sum is $answer<hr>";

        function sum2($num){
            if($num==0){
                return 0;
            }
            echo $num;
            return $num + sum2($num-1);
        }

        $answer2 = sum2(5);
        echo "<br> Sum = $answer2";

    ?>
</body>
</html>