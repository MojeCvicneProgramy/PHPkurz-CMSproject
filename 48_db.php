<?php

/* vytvorenie napojenia na databázu */
$connection = mysqli_connect('localhost', 'root', '', 'loginapp');

    if (!$connection) {
        echo "Database connection failed";
    } 

?>