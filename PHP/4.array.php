<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php
        // Indexed array
        $arr1 = ["audi","mercedes","tesla"];
        foreach($arr1 as $value){
            echo $value. "<br>";
        }
        echo "<hr>";
        // Associative array

        $arr2 = [

            'name' => 'Karan',
            'age' => 22

        ];
        foreach ($arr2 as $key => $value){
            echo "The value of $key = $value<br>";
        }

        // Multidimensional array

        $arr3 = [
            [1,2,3],
            [4,5,6],
            [7,8,9]
        ];
        for ($i=0; $i<count($arr3); $i++){
            for($j=0; $j<count($arr3[$i]); $j++){
                echo "<br>" . $arr3[$i][$j];
            }
        }
    ?>
</body>
</html>