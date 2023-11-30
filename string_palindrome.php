<?php
if (isset($_POST["sub"]) && ($_POST["sub"] == "check")) {
    $inputString = $_POST["str"];
    if (isset($_POST["str"]) && ($_POST["str"] != "")) {
        $isPalindrome = isPalindrome($inputString);
        echo $isPalindrome ? 'Palindrome' : 'Not a Palindrome';
    } else {
        echo "Invalid input";
    }
}

function isPalindrome($str)
{
    $str = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $str)); // Remove non-alphanumeric characters and convert to lowercase
    $length = strlen($str);

    for ($i = 0; $i < $length / 2; $i++) {
        if ($str[$i] !== $str[$length - 1 - $i]) {
            return false;
        }
    }

    return true;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Palindrome Check</title>
</head>

<body>
    <form action="" method="post">
        Enter the string:
        <input type="text" name="str" />
        <input type="submit" name="sub" value="check" />
    </form>
</body>
</html>
