<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>BIO DATA</title>
</head>
<style>
    td {
        padding-bottom: 20px;
    }
</style>

<body>
    <form action="abc.php" method="post" enctype="multipart/form-data">
        <table border="2" align="center" width="900px">
            <tr>
                <td colspan="6">
                    <table width="800px" height="302" border="0" align="center">
                        <tr>
                            <center>
                                <h1><u>BIO-DATA</u></h1>
                            </center>
                        </tr>
                        <tr>
                            <td width="5px"></td>
                            <td>Name</td>
                            <td>:</td>
                            <td><input name="name" type="text" size="20" /></td>
                            <td rowspan="3" align="right">
                                <!-- <input id="photo" name="photo" type="file" /> -->
                                <input type="file" name="passport_photo" accept="image/*" />
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Father's Name</td>
                            <td>:</td>
                            <td><input name="fname" type="text" size="20" /></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Mother's Name</td>
                            <td>:</td>
                            <td><input name="mname" type="text" size="20" /></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Date of Birth</td>
                            <td>:</td>
                            <td><input name="dob" type="date" /></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Gender</td>
                            <td>:</td>
                            <td><input type="radio" id="html" name="gender" value="male" />
                                <label for="html">Male</label>
                                <input type="radio" id="html" name="gender" value="female" />
                                <label for="html">Female</label>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Address</td>
                            <td>:</td>
                            <td><textarea id="knowledge" name="address" cols="21" rows="2"></textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Education Qualification</td>
                            <td>:</td>
                            <td colspan="3"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="4">
                                <table width="774" height="199" border="1" align="center">
                                    <tr>
                                        <td width="185" align="center">Name of exam</td>
                                        <td width="196" align="center">Year of passing</td>
                                        <td width="220" align="center">Board /University</td>
                                        <td width="143" align="center">Percentage/Grade</td>
                                    </tr>
                                    <tr>
                                        <td align="center"><input type="text" id="html" name="Qualification1" placeholder="Enter Name of the exam" /></td>
                                        <td align="center">
                                            <select name="year1" id="year">
                                                <option>select</option>
                                                <option value="2013">2013</option>
                                                <option value="2014">2014</option>
                                                <option value="2015">2015</option>
                                                <option value="2016">2016</option>
                                                <option value="2017">2017</option>
                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option>
                                                <option value="2023">2023</option>
                                                <option value="2024">2024</option>
                                            </select></td>
                                        <td align="center"><input type="text" id="html" name="board1" placeholder="Enter board" /></td>
                                        <td align="center"><input type="text" id="html" name="mark1" placeholder="Enter marks in percentage/cgpa" /></td>
                                    </tr>
                                    <tr>
                                        <td align="center"><input type="text" id="html" name="Qualification2" placeholder="Enter Name of the exam" /></td>
                                        <td align="center"><select name="year2" id="year">
                                                <option>select</option>
                                                <option value="2013">2013</option>
                                                <option value="2014">2014</option>
                                                <option value="2015">2015</option>
                                                <option value="2016">2016</option>
                                                <option value="2017">2017</option>
                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option>
                                                <option value="2023">2023</option>
                                                <option value="2024">2024</option>
                                            </select></td>
                                        <td align="center"><input type="text" id="html" name="board2" placeholder="Enter board" /></td>
                                        <td align="center"><input type="text" id="html" name="mark2" placeholder="Enter marks in percentage/cgpa" /></td>
                                    </tr>
                                    <tr>
                                        <td align="center"><input type="text" id="html" name="Qualification3" placeholder="Enter Name of the exam" /></td>
                                        <td align="center"><select name="year3" id="year">
                                                <option>select</option>
                                                <option value="2013">2013</option>
                                                <option value="2014">2014</option>
                                                <option value="2015">2015</option>
                                                <option value="2016">2016</option>
                                                <option value="2017">2017</option>
                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option>
                                                <option value="2023">2023</option>
                                                <option value="2024">2024</option>
                                            </select></td>
                                        <td align="center"><input type="text" id="html" name="board3" placeholder="Enter board" /></td>
                                        <td align="center"><input type="text" id="html" name="mark3" placeholder="Enter marks in percentage/cgpa" /></td>
                                    </tr>
                                </table>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Contact No.</td>
                            <td>:</td>
                            <td><input name="contact" type="number" size="10" maxlength="10" /></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Nationality</td>
                            <td>:</td>
                            <td><input name="nationality" type="text" size="10" /></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Email</td>
                            <td>:</td>
                            <td><input name="email" type="email" size="10" placeholder="abc@gmail.com" /></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Religion</td>
                            <td>:</td>
                            <td><input name="religion" type="text" size="10" /></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Marital status</td>
                            <td>:</td>
                            <td><input type="radio" id="html" name="Marital_status" value="married" />
                                <label for="html">Married</label>
                                <input type="radio" id="html" name="Marital_status" value="unmarried" />
                                <label for="html">Unmarried</label>
                            </td>
                        </tr>
                        <tr>
                            <td width="5px"></td>
                            <td>Computer Knowledge</td>
                            <td>:</td>
                            <td colspan="3"><textarea id="knowledge" name="cknowledge" cols="21" rows="2"></textarea></td>
                        </tr>
                        <tr>
                            <td width="5px"></td>
                            <td>Working Experience</td>
                            <td>:</td>
                            <td colspan="3"><textarea id="w_exp" name="w_exp" cols="21" rows="2"></textarea></td>
                        </tr>
                        <tr>
                            <td width="5px"></td>
                            <td height="10px"><b><u>Declaration:</u></b></td>

                        </tr>
                        <tr>
                            <td width="5px"></td>
                            <td colspan="5"><textarea id="Declaration" name="Declaration" cols="21" rows="2"></textarea></td>
                        </tr>
                        <tr>
                            <td width="5px"></td>
                            <td><b>Place</b></td>
                            <td>:</td>
                            <td colspan="3"><input name="place" type="text" size="20" /></td>
                        </tr>
                        <tr>
                            <td width="5px"></td>
                            <td><b>Date</b></td>
                            <td>:</td>
                            <td colspan="3"><input name="date" type="text" size="20" /></td>
                        </tr>
                        <!-- <tr>
                            <td width="5px"></td>
                            <td><b>url</b></td>
                            <td>:</td>
                            <td colspan="3"><input name="photo" id="photo" type="file" size="20" /></td>
                        </tr> -->
                        <tr>
                            <td colspan="6">
                                <center>
                                    <button type="Submit" name="submit">Submit</button>
                                </center>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
    // Establish a database connection (update with your database credentials)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "resume";

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Process and sanitize the form data
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $qualification1 = $_POST['Qualification1'];
    $year1 = $_POST['year1'];
    $board1 = $_POST['board1'];
    $mark1 = $_POST['mark1'];
    $qualification2 = $_POST['Qualification2'];
    $year2 = $_POST['year2'];
    $board2 = $_POST['board2'];
    $mark2 = $_POST['mark2'];
    $qualification3 = $_POST['Qualification3'];
    $year3 = $_POST['year3'];
    $board3 = $_POST['board3'];
    $mark3 = $_POST['mark3'];
    $contact = $_POST['contact'];
    $nationality = $_POST['nationality'];
    $email = $_POST['email'];
    $religion = $_POST['religion'];
    $marital_status = $_POST['Marital_status'];
    $cknowledge = $_POST['cknowledge'];
    $w_exp = $_POST['w_exp'];
    $declaration = $_POST['Declaration'];
    $place = $_POST['place'];
    $date = $_POST['date'];
    $passportPhoto = "";

    if (isset($_FILES["passport_photo"])) {
        $targetDir = "image/"; // Create a directory to store uploaded files
        $passportPhoto = basename($_FILES["passport_photo"]["name"]);
        $targetFilePath = $targetDir . $passportPhoto;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        if (!empty($_FILES["passport_photo"]["name"])) {
            if (move_uploaded_file($_FILES["passport_photo"]["tmp_name"], $targetFilePath)) {
                echo "The file " . $passportPhoto . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }

    // SQL query to insert data into the database, including the passport photo file name
    $sql = "INSERT INTO biodata (name, fname, mname, dob, gender, address, qualification1, year1, board1, mark1, qualification2, year2, board2, mark2, qualification3, year3, board3, mark3, contact, nationality, email, religion, marital_status, cknowledge, w_exp, declaration, place, date, passport_photo)
            VALUES ('$name', '$fname', '$mname', '$dob', '$gender', '$address', '$qualification1', '$year1', '$board1', '$mark1', '$qualification2', '$year2', '$board2', '$mark2', '$qualification3', '$year3', '$board3', '$mark3', '$contact', '$nationality', '$email', '$religion', '$marital_status', '$cknowledge', '$w_exp', '$declaration', '$place', '$date', '$passportPhoto')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
