<?php


$server="localhost";
$user="root";
$pass="";
$db="students";
$con = mysqli_connect($server, $user, $pass, $db);
if(!$con) die("Doesn't Connect = ".mysqli_connect_error());

if(isset($_REQUEST['code']) and $_REQUEST['code']=='abcd'){
$sql = "SELECT * FROM users WHERE marks>40 OR age<20";
//$result = $conn->query($sql);
$result=mysqli_query($con,$sql);

$num=mysqli_num_rows($result);
//$num=$result->num_rows

if ($num > 0) {
    echo "<h4>Student with marks more than 40 or age less than 20:</h4>";
    echo "<table border='1'>";
    echo "<tr><th>Id</th><th>Name</th><th>Roll</th><th>Marks</th><th>Age</th><th>Class</th></tr>";
//$row=$result->fetch_assoc()
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['roll_no'] . "</td>";
        echo "<td>" . $row['marks'] . "</td>";
        echo "<td>" . $row['age'] . "</td>";
        echo "<td>" . $row['class'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No users found with marks>40 or age<20.";
}
}
//$conn->close();

?>
