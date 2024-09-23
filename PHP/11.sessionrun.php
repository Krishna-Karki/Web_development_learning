<?php

    $setaddress = $_COOKIE['address'];

    session_start();
    $age = $_SESSION['age'];
    $name = $_SESSION['name'];

    echo "The name of $name is $age";

    echo "<hr>Address: $setaddress";

    session_unset(); //unset and destroy is used in logout

    session_destroy();
?>