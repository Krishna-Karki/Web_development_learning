<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regular Expression</title>
</head>
<body>
    <?php
        #Regular Expression

        $statement = "My favorite car is Audi, Audi R";
        $pattern = "/Audi/i";
        $pattern1 = "/Audi R/i"; #case insensitive
        $replacement = "Tesla";

        if(preg_match($pattern, $statement, $matches));
            echo "Match found<br>";
            print_r($matches);
        echo "<hr>";
        if(preg_match_all($pattern, $statement, $matches));
            echo "Match found<br>";
            print_r($matches);
        echo "<hr>";

        echo preg_replace($pattern1, $replacement, $statement);
        echo "<hr>";
        $pattern3 = "/[A-Z]/";

        preg_match_all($pattern3, $statement, $matches);
        print_r($matches);
        
    ?>
</body>
</html>