<?php

    session_start();

    $_SESSION['username'] = 'Karan';
    $_SESSION['age'] = 22;

    session_start();
    $name = $_SESSION['username'];
    $age = $_SESSION['age'];
    session_unset();
    session_destroy();

    echo "The age of $name is $age";

?>