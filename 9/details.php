<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Registration Details</h1>

    <?php
    $sql = "select * from registration";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $num = mysqli_num_rows($result);

        if ($num > 0) {
            echo '<table class="table">';
            echo '<thead>';
            echo '<tr>';
            echo '<th scope="col">Sl. No.</th>';
            echo '<th scope="col">Username</th>';
            echo '<th scope="col">Password</th>';
            echo '<th scope="col">Name</th>';
            echo '<th scope="col">Email</th>';
            echo '<th scope="col">Update</th>';
            echo '<th scope="col">Delete</th>';

            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';

            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<th scope="row">' . $row['id'] . '</th>';
                echo '<td>' . $row['username'] . '</td>';
                echo '<td>' . $row['password'] . '</td>';
                echo '<td>' . $row['name'] . '</td>';
                echo '<td>' . $row['email'] . '</td>';
                echo '<td><a href="update.php?id=' . $row['id'] . '">Update</a></td>';
                echo '<td><a href="delete.php?id=' . $row['id'] . '">Delete</a></td>';
                echo '</tr>';
            }

            echo '</tbody>';
            echo '</table>';
        } else {
            echo "Empty Data!!";
        }
    }
    ?>

</body>
</html>
