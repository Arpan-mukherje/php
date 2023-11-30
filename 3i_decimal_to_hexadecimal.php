<?php
if (isset($_POST["sub"]) && ($_POST["sub"] == "run")) {
    $num = $_POST["num"];
    if (isset($_POST["num"]) && ($_POST["num"] != "")) {
        $decimalNumber = $num;
        $hexadecimalResult = decimalToHexadecimal($decimalNumber);
        echo $hexadecimalResult;
    } else {
        echo "Invalid input";
    }
}

function decimalToHexadecimal($decimalNumber)
{
    $hexDigits = "0123456789ABCDEF";
    $hexadecimalResult = '';

    while ($decimalNumber > 0) {
        $remainder = $decimalNumber % 16;
        $hexadecimalResult = $hexDigits[$remainder] . $hexadecimalResult;
        $decimalNumber = (int)($decimalNumber / 16);
    }

    return $hexadecimalResult === '' ? '0' : $hexadecimalResult;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Decimal_to_Hexadecimal</title>
</head>

<body>
    <form action="3i_decimal_to_hexadecimal.php" method="post">
        Enter the number :
        <input type="text" name="num" />
        <input type="submit" name="sub" value="run" />
    </form>
</body>
</html>
