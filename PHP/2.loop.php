<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop</title>
</head>
<body>
 <?php   
// LOOP

for($i=0; $i<5; $i++){
    echo "<br>" . "This is $i";
}

$arr1 = array("apple","mango",53);

$arr2 = ["banana",'grapes',77];

echo "<hr>";
for($i=0; $i<count($arr1); $i++){
    echo $arr1[$i]. "<br>";
}
echo "<hr>";
foreach($arr2 as $newstore){
    echo $newstore . "<br>";
}
?>
</body>
</html>