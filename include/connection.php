<?php

    // connecting to the Database
    $connection = mysqli_connect("localhost","root","root","mobilestore");

    // if the connection fail we will get this message
    if(!$connection) {
        echo " connection failed";
    }