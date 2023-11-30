<!DOCTYPE html>
<html>
<head>
    <title>Insert User</title>
</head>
<body>
    <h1>Insert User</h1>
    <form action="insert_user.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <label for="name">Name:</label>
        <input type="text" name="name"><br>

        <label for="email">Email:</label>
        <input type="email" name="email"><br>

        <label for="address">Address:</label>
        <input type="text" name="address"><br>

        <label for="marks">Marks:</label>
        <input type="number" name="marks"><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php

include 'connect.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $username = $_POST["username"];
    $password = $_POST["password"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $marks = $_POST["marks"];

    $sql = "INSERT INTO names (username,password, name, email, address, marks) 
            VALUES ('$username', '$password', '$name', '$email', '$address', $marks)";

    if ($conn->query($sql) === TRUE) {
        echo "User added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
