<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome Number Checker</title>
</head>
<body>
    <h1>Palindrome Number Checker</h1>

    <form method="post">
        Enter a number: <input type="number" name="number">
        <input type="submit" name="check" value="Check">
    </form>

    <?php
    // Function to check if a number is a palindrome
    function isPalindrome($number) {
        // Convert the number to a string for easy comparison
        $numberStr = (string) $number;
        
        // Reverse the string
        $reversedStr = strrev($numberStr);
        
        // Compare the original string with the reversed string
        return $numberStr === $reversedStr;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];

        if (is_numeric($number)) {
            if (isPalindrome($number)) {
                echo "<p>$number is a palindrome number.</p>";
            } else {
                echo "<p>$number is not a palindrome number.</p>";
            }
        } else {
            echo "<p>Please enter a valid number.</p>";
        }
    }
    ?>

</body>
</html>
