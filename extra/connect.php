<?php

    $hostname="localhost";
    $username="root";
    $password="";
    $database="test";

    $conn=mysqli_connect($hostname,$username,$password,$database);

    if($conn)
    {
        echo "Connection Successful";
    }
    else
    {
        die(mysqli_error($conn));
    }

?>