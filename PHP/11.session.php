<?php

    setcookie('address','Belbari',time()+3600,"/"); //clientside operation

    session_start(); //serversideoperation

    $_SESSION['name'] = "Karan";

    $_SESSION['age'] = 22;

    

?>