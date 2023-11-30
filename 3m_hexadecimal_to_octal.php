<!DOCTYPE html>
<html>
<head>
    <title>Hexadecimal to Octal Converter</title>
</head>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="hexadecimalNumber">Enter a Hexadecimal Number:</label>
    <input type="text" id="hexadecimalNumber" name="hexadecimalNumber">
    <button type="submit" name="submit">Convert</button>
</form>

<?php
if (isset($_POST['submit'])) {
    $hexadecimalNumber = strtoupper($_POST['hexadecimalNumber']); // Convert to uppercase for simplicity

    // Hexadecimal to Decimal conversion without using built-in functions
    $decimalNumber = 0;
    $hexChars = "0123456789ABCDEF";
    $hexCharsArray = str_split($hexChars);

    for ($i = 0; $i < strlen($hexadecimalNumber); $i++) {
        $char = $hexadecimalNumber[$i];
        $position = array_search($char, $hexCharsArray);
        $decimalNumber = $decimalNumber * 16 + $position;
    }

    // Decimal to Octal conversion without using built-in functions
    $octalNumber = '';
    $base = 1;

    while ($decimalNumber != 0) {
        $remainder = $decimalNumber % 8;
        $octalNumber = $remainder . $octalNumber;
        $decimalNumber = (int)($decimalNumber / 8);
    }

    echo "<p>Hexadecimal Number: $hexadecimalNumber</p>";
    echo "<p>Octal Number: $octalNumber</p>";
}
?>

</body>
</html>