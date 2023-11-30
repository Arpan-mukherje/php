<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number Checker</title>
</head>
<body>
    <h1>Prime Number Checker</h1>

    <form method="post">
        Enter a number: <input type="number" name="number">
        <input type="submit" name="check" value="Check">
    </form>

    <?php
    // Function to check if a number is prime
    function isPrime($num) {
        if ($num <= 1) {
            return false;
        }
        for ($i = 2; $i * $i <= $num; $i++) {
            if ($num % $i === 0) {
                return false;
            }
        }
        return true;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["check"])) {
        $number = $_POST["number"];
        
        if (is_numeric($number)) {
            if (isPrime($number)) {
                echo "<p>$number is a prime number.</p>";
            } else {
                echo "<p>$number is not a prime number.</p>";
            }
        } else {
            echo "<p>Please enter a valid number.</p>";
        }
    }
    ?>

</body>
</html>
