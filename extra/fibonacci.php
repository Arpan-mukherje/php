<!DOCTYPE html>
<html>
<head>
    <title>Fibonacci Series Generator</title>
</head>
<body>
    <h1>Fibonacci Series Generator</h1>
    
    <form method="post" action="">
        Enter the number of Fibonacci numbers to generate: 
        <input type="number" name="count" min="1" required>
        <input type="submit" value="Generate">
    </form>

    <?php
    // Function to generate Fibonacci series
    function generateFibonacci($count) {
        $fibonacci = array();
        $fibonacci[0] = 0;
        $fibonacci[1] = 1;
        
        for ($i = 2; $i < $count; $i++) {
            $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }

        return $fibonacci;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $count = $_POST["count"];

        // Check if the count is valid
        if ($count > 0) {
            $fibonacciSeries = generateFibonacci($count);

            // Display the Fibonacci series in a table
            echo "<h2>Fibonacci Series:</h2>";
            echo "<table border='1'>";
            echo "<tr><th>Index</th><th>Value</th></tr>";
            for ($i = 0; $i < $count; $i++) {
                echo "<tr><td>$i</td><td>{$fibonacciSeries[$i]}</td></tr>";
            }
            echo "</table>";
        } else {
            echo "<p>Please enter a valid count (greater than 0).</p>";
        }
    }
    ?>

</body>
</html>
