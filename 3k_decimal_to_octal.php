<?php
if (isset($_POST["sub"]) && ($_POST["sub"] == "run")) {
    $decimalNum = $_POST["num"];
    if (isset($_POST["num"]) && ($_POST["num"] != "")) {
        $octalResult = decimalToOctal($decimalNum);
        echo $octalResult;
    } else {
        echo "Invalid input";
    }
}

function decimalToOctal($decimalNum)
{
    $octalResult = '';

    while ($decimalNum > 0) {
        $remainder = $decimalNum % 8;
        $octalResult = $remainder . $octalResult;
        $decimalNum = (int)($decimalNum / 8);
    }

    return $octalResult === '' ? '0' : $octalResult;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Decimal_to_Octal</title>
</head>

<body>
    <form action="3k_decimal_to_octal.php" method="post">
        Enter the number :
        <input type="text" name="num" />
        <input type="submit" name="sub" value="run" />
    </form>
</body>
</html>
