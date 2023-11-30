<?php
if (isset($_POST["sub"]) && ($_POST["sub"] == "run")) {
    $hexNum = $_POST["num"];
    if (isset($_POST["num"]) && ($_POST["num"] != "")) {
        $decimalResult = hexadecimalToDecimal($hexNum);
        echo $decimalResult;
    } else {
        echo "Invalid input";
    }
}

function hexadecimalToDecimal($hexNum)
{
    $hexDigits = "0123456789ABCDEF";
    $hexNum = strtoupper($hexNum); // Convert to uppercase for case-insensitivity
    $decimalResult = 0;

    for ($i = 0; $i < strlen($hexNum); $i++) {
        $digit = strpos($hexDigits, $hexNum[$i]); // Find the position of the current digit in $hexDigits
        $decimalResult = $decimalResult * 16 + $digit;
    }

    return $decimalResult;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Hexadecimal_to_Decimal</title>
</head>

<body>
    <form action="3j_hexadecimal_to_decimal.php" method="post">
        Enter the number :
        <input type="text" name="num" />
        <input type="submit" name="sub" value="run" />
    </form>
</body>
</html>



