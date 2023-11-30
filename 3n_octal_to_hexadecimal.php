<!DOCTYPE html>

<html
 
lang="en">

<head>

    
<meta
 
charset="UTF-8">

    
<meta
 
name="viewport"
 
content="width=device-width, initial-scale=1.0">

    
<title>Octal to Decimal Converter</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            margin-bottom: 5px;
        }

        input {
            padding: 5px;
            border: 1px solid #ccc;
        }

        button {
            padding: 5px 10px;
            border: 1px solid #007bff;
            cursor: pointer;
            background-color: #007bff;
            color: #fff;
        }
    </style>
</head>
<body>
    <h1>Octal to Decimal Converter</h1>

    <form action="3n_octal_to_hexadecimal.php" method="post">
        <label for="octalNum">Enter Octal Number:</label>
        <input type="text" id="octalNum" name="num" required>

        <button type="submit" name="sub" value="run">Convert</button>
    </form>

    <?php
        if (isset($_POST["sub"]) && ($_POST["sub"] == "run")) {
            $octalNum = $_POST["num"];

            if (isset($_POST["num"]) && ($_POST["num"] != "")) {
                $decimalResult = octalToDecimal($octalNum);
                echo "<p>Decimal Equivalent: $decimalResult</p>";
            } else {
                echo "<p style='color: red;'>Invalid input</p>";
            }
        }

        function octalToDecimal($octalNum) {
            $decimalResult = 0;

            for ($i = strlen($octalNum) - 1; $i >= 0; $i--) {
                $digit = (int)$octalNum[$i];
                $decimalResult += $digit * pow(8, (strlen($octalNum) - 1 - $i));
            }

            return $decimalResult;
        }
    ?>
</body>
</html>