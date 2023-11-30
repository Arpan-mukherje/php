<?php
	include 'connect.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Insert User</title>
    <script>
        function validateForm() {
            var name = document.forms["userForm"]["name"].value;
            var rollNo = document.forms["userForm"]["roll_no"].value;
            var marks = document.forms["userForm"]["marks"].value;
            var age = document.forms["userForm"]["age"].value;
            var classValue = document.forms["userForm"]["class"].value;

            if (name === "" || rollNo === "" || marks === "" || age === "" || classValue === "") {
                alert("All fields must be filled out");
                return false;
            }

            if (isNaN(rollNo) || isNaN(marks) || isNaN(age)) {
                alert("Roll No, Marks, and Age must be numeric values");
                return false;
            }

            return true;
        }
    </script>
</head>
<body>
    <h2>Insert User</h2>
    <form name="userForm" action="insert_user.php" method="post" onsubmit="return validateForm()">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="roll_no">Roll No:</label>
        <input type="text" name="roll_no" required><br>

        <label for="marks">Marks:</label>
        <input type="number" step="0.01" name="marks" required><br>

        <label for="age">Age:</label>
        <input type="number" name="age" required><br>

        <label for="class">Class:</label>
        <input type="text" name="class" required><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
<!--------------------------------------------------------------------------------------->

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $roll_no = $_POST["roll_no"];
    $marks = $_POST["marks"];
    $age = $_POST["age"];
    $class = $_POST["class"];

    $sql = "INSERT INTO users (name, roll_no, marks, age, class) VALUES ('$name', $roll_no, $marks, $age, '$class')";

    if ($conn->query($sql) === TRUE) {
        echo "User inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

