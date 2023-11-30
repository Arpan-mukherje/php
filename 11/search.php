<?php

    include 'connect.php';

    if (isset($_POST['search'])) 
    {
    $keyword = $_POST['keyword'];

    $sql = "SELECT * FROM books WHERE 
        book_name LIKE '%$keyword%' OR
        author_name LIKE '%$keyword%' OR
        publisher LIKE '%$keyword%' OR
        ISBN LIKE '%$keyword%' OR
        price LIKE '%$keyword%'";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>Search Results:</h2>";
        echo "<table border='1'>";
        echo "<tr><th>Book Name</th><th>Author Name</th><th>Publisher</th><th>ISBN</th><th>Price</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['book_name'] . "</td>";
            echo "<td>" . $row['author_name'] . "</td>";
            echo "<td>" . $row['publisher'] . "</td>";
            echo "<td>" . $row['ISBN'] . "</td>";
            echo "<td>" . $row['price'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No results found.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Book Search</title>
</head>
<body>
    <h1>Search Books</h1>
    <form method="POST" action="search.php">
        <label for="keyword">Enter a keyword: </label>
        <input type="text" name="keyword" id="keyword" required>
        <input type="submit" name="search" value="Search">
    </form>
</body>
</html>
