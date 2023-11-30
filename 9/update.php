<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM registration WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id'], $_POST['username'], $_POST['password'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "UPDATE registration SET username = '$username', password = '$password', name=$name, email=$email WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        header("location: details.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Update Registration Details</h1>

    <form method="post" action="update.php">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" name="username" class="form-control" value="<?= $row['username'] ?>">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="text" name="password" class="form-control" value="<?= $row['password'] ?>">
        </div>
        <div class="form-group">
            <label for="password">Name:</label>
            <input type="text" name="name" class="form-control" value="<?= $row['name'] ?>">
        </div>
        <div class="form-group">
            <label for="password">Email:</label>
            <input type="text" name="email" class="form-control" value="<?= $row['email'] ?>">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</body>
</html>
