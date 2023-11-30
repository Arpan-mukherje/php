<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "students";
$con = mysqli_connect($server, $user, $pass, $db);
if (!$con) {
    die("Couldn't connect: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $name = $_POST["std_name"];
    $roll = $_POST["std_roll"];
    $marks = $_POST["std_marks"];
    $age = $_POST["std_age"];
    $class = $_POST["std_class"];

    $sql = "INSERT INTO users (name, roll_no, marks, age, class) 
            VALUES ('$name', '$roll', '$marks', '$age', '$class')";
    $result = mysqli_query($con, $sql);

    if ($result === TRUE) {
        echo "User added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}

mysqli_close($con);

if (isset($_REQUEST['view']) && $_REQUEST['view'] == 'View') {
    header('Location: student_details.php?code=abcd');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <style>
        .td1 {
            padding-bottom: 10px;
        }
    </style>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>My Work</title>
</head>
<body style="text-align:center">
    <table style="width:40%; border:2px solid black; margin-top:5%; text-align:center" align="center">
        <tr>
            <td>
                <h2><u>Student Information</u></h2>
                <form action="" method="post" enctype="multipart/form-data">
                    <table align="center" style="width:70%; font-size:18px; margin:10px; text-align:left; margin-left:10%; margin-top:5%"  border="0">
                        <tr>
                            <td class="td1" width="25%">Student Name</td>
                            <td class="td1" width="15%" style="text-align:right">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td class="td1"> <input type="text" id="std_name" placeholder="Enter Your Name" name="std_name"/></td>
                        </tr>
                        <tr>
                            <td class="td1">Roll No.</td>
                            <td class="td1" width="15%" style="text-align:right">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td class="td1"><input type="text" id="std_roll" placeholder="Enter Your Roll" name="std_roll" /></td>
                        </tr>
                        <tr>
                            <td class="td1">Marks</td>
                            <td class="td1" width="15%" style="text-align:right">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td class="td1"> <input type="text" id="std_marks" placeholder="Enter Your Marks" name="std_marks"/></td>
                        </tr>
                        <tr>
                            <td width="15%">Student Age</td>
                            <td width="15%" style="text-align:right">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td> <input type="text" id="std_age" placeholder="Enter Your Age" name="std_age"/></td>
                        </tr>
                        <tr>
                            <td class="td1">Student Class</td>
                            <td class="td1" width="15%" style="text-align:right">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td class="td1"> <input type="text" id="std_class" placeholder="Enter Your Class" name="std_class"/></td>
                        </tr>
                        <tr>
                            <td class="td1"></td>
                            <td class="td1" width="15%" style="text-align:right;"></td>
                            <td class="td1">
                                <input type="Submit" id="submit" name="submit" value="Submit" />
                                <input type="Submit" id="submit" name="view" value="View" />
                            </td>
                        </tr>
                    </table>
                </form>
            </td>
        </tr>
    </table>
</body>
</html>
