<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM registration WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        header("Location: details.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
