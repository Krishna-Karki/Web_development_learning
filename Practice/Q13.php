<?php
    
    $pattern = "/abc/";

    $pattern2 = "/abc/i";

    $pattern3 = "/^a/";

    $pattern4 = "/ab/";

    $pattern5 = "/[A-Z]/";

    $pattern6 = "/[a-z]/";

    $text = "A line is this line which has abc letters and 123 number with capital ABC and 123 numbers";

    $result = preg_match($pattern,$text,$matches);
    echo $result;
    

    try{
        $num = 5;
        $num1 = 0;

        if($num1==0){
            throw new Exception("Hello");
        }else{
            echo "hi";
        }
    }catch(Exception $e){
        echo $e->getMessage();
    }
    finally{
        echo "force";
    }

?>