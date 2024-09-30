<!-- PHP array with example -->

<?php

    //Indexed array
    $arr1 = array('Mango','Banana',22);
    $arr2 = ['Apple',"Strawberry",32];

    //Associative array
    $arr3 = [
        'Name' => 'Karan',
        'Age' => 22
    ];
    //Multidimensional array
    $arr4 = [
        ["karan",22],
        ['krishna',23]
    ];

    //for loop
    for($i=0; $i<5; $i++){
        echo $i;
    }
    //foreach loop
    foreach($arr1 as $value){
        echo $value;
    }
    //foreach loop as associative array
    foreach($arr3 as $key=>$value){
        echo "The value of $key is $value";
    }
?>