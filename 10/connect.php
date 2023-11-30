<?php
$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='';
$DATABASE='users';

$conn=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

if($conn)
    {
        echo "Connection Successful";
    }
else
    {
       die(mysqli_error($conn)); 
    }

?>