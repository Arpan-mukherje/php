<?php

    $hostname='localhost';
    $username='root';
    $password='';
    $database='signupforms';

    $conn=mysqli_connect($hostname,$username,$password,$database);

    // if($conn)
    // {
    //     echo"Connection Successful!!";
    // }
    // else
    // {
    //     die(mysqli_error($conn));
    // }

    if(!$conn)
    {
        die(mysqli_error($conn));
    }

?>