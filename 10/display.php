<?php

include 'connect.php';

$sql = "SELECT * FROM names WHERE address='Durgapur' AND marks > 50";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h1>Users with Address 'Durgapur' and Marks > 50:</h1>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Username</th><th>Name</th><th>Email</th><th>Address</th><th>Marks</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['username'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['address'] . "</td>";
        echo "<td>" . $row['marks'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No users found with Address 'Durgapur' and Marks > 50.";
}

$conn->close();
?>
