<?php
if (isset($_POST["sub"]) && ($_POST["sub"] == "run")) {
    $octalNum = $_POST["num"];
    if (isset($_POST["num"]) && ($_POST["num"] != "")) {
        $decimalResult = octalToDecimal($octalNum);
        echo $decimalResult;
    } else {
        echo "Invalid input";
    }
}

function octalToDecimal($octalNum)
{
    $decimalResult = 0;

    for ($i = strlen($octalNum) - 1; $i >= 0; $i--) {
        $digit = (int)$octalNum[$i];
        $decimalResult += $digit * pow(8, (strlen($octalNum) - 1 - $i));
    }

    return $decimalResult;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Octal_to_Decimal</title>
</head>

<body>
    <form action="3l_octal_to_decimal.php" method="post">
        Enter the number :
        <input type="text" name="num" />
        <input type="submit" name="sub" value="run" />
    </form>
</body>
</html>
