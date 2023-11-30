<?php

    $hostname="localhost";
    $username="root";
    $password="";
    $database="publishers";

    $conn=mysqli_connect($hostname,$username,$password,$database);

    if(!$conn)
    {
        die(mysqli_error($conn));
    }

?>