<?php
$con = new mysqli('localhost', 'root', '', 'resume');
$sql = "SELECT * FROM biodata";
$res = mysqli_query($con, $sql);
?>


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>STUDENT bio-data</title>
</head>

<body>
    <?php
    $con = 1;
    while ($row = mysqli_fetch_assoc($res)) {
    ?>
        <!--Outer Table Starts-->
        <table border="1" align="center" bordercolor="#000000" cellspacing="0" cellpadding="50">
            <!--Inner Table Starts-->
            <tr>
                <td> <!--1-->
                    <table border="0" align="center" cellpadding="10" cellspacing="0" bordercolor="#FFFFFF" width="30">
                        <tr>
                            <h1 align="center"><u>BIO DATA</u></h1>
                        </tr>

                        <tr>
                            <td>NAME</td>
                            <td>:</td>
                            <td><?php echo $row['name']; ?></td>
                            <td width="20" rowspan="4">
                                <img src="<?php echo $row['passport_photo']; ?>" height="150" width="150" text-align="left" />
                            </td>
                        </tr>

                        <tr>
                            <td>FATHER'S NAME</td>
                            <td>:</td>
                            <td><?php echo $row['fname']; ?></td>
                        </tr>

                        <tr>
                            <td>MOTHER'S NAME</td>
                            <td>:</td>
                            <td><?php echo $row['mname']; ?></td>
                        </tr>

                        <tr>
                            <td>PERMANENT ADDRESS</td>
                            <td>:</td>
                            <td><?php echo $row['address']; ?></td>
                        </tr>

                        <tr>
                            <td>PRESENT ADDRESS</td>
                            <td>:</td>
                            <td colspan="2"><?php echo $row['address']; ?></td>
                        </tr>

                        <tr>
                            <td>CONTACT NO./MOBILE</td>
                            <td>:</td>
                            <td colspan="2"><?php echo $row['contact']; ?></td>
                        </tr>

                        <tr>
                            <td>DATE OF BIRTH</td>
                            <td>:</td>
                            <td colspan="2"><?php echo $row['dob']; ?></td>
                        </tr>

                        <tr>
                            <td>NATIONAL ID</td>
                            <td>:</td>
                            <td colspan="2">1510xxxxxxxx</td>
                        </tr>

                        <tr>
                            <td>E-MAIL</td>
                            <td>:</td>
                            <td colspan="2"><?php echo $row['email']; ?></td>
                        </tr>

                        <tr>
                            <td>RELIGION</td>
                            <td>:</td>
                            <td colspan="2"><?php echo $row['religion']; ?></td>
                        </tr>

                        <!-- <tr>
                            <td>NATIONALITY</td>
                            <td>:</td>
                            <td colspan="2">Indian</td>
                        </tr> -->

                        <tr>
                            <td>MARITAL STATUS</td>
                            <td>:</td>
                            <td colspan="2"><?php echo $row['marital_status']; ?></td>
                        </tr>

                        <tr>
                            <td>EDUCATIONAL QUALIFICATION</td>
                            <td colspan="3">:</td>
                        </tr>

                        <!--Nested Table Start-->
                        <tr> <!--2-->
                            <td colspan="4"> <!--2-->
                                <table border="1" bordercolor="#990000" cellspacing="0" height="100" width="700">
                                    <tr>
                                        <td>Name of Exam</td>
                                        <td>Year of Passing</td>
                                        <td>Board/University</td>
                                        <td>Division/GPA</td>
                                    </tr>

                                    <tr>
                                        <td><?php echo $row['qualification1']; ?></td>
                                        <td><?php echo $row['year1']; ?></td>
                                        <td><?php echo $row['board1']; ?></td>
                                        <td><?php echo $row['mark1']; ?></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo $row['qualification2']; ?></td>
                                        <td><?php echo $row['year2']; ?></td>
                                        <td><?php echo $row['board2']; ?></td>
                                        <td><?php echo $row['mark2']; ?></td>
                                    </tr>

                                    <tr>
                                        <td><?php echo $row['qualification3']; ?></td>
                                        <td><?php echo $row['year3']; ?></td>
                                        <td><?php echo $row['board3']; ?></td>
                                        <td><?php echo $row['mark3']; ?></td>
                                    </tr>

                                </table>
                            </td>
                        </tr>
                        <!--Nested Table End-->

                        <tr>
                            <td>COMPUTER KNOWLEDGE</td>
                            <td>:</td>
                            <td colspan="2"><?php echo $row['cknowledge']; ?></td>
                        </tr>

                        <tr>
                            <td>WORKING EXPERIENCE</td>
                            <td>:</td>
                            <td colspan="2"><?php echo $row['w_exp']; ?></td>
                        </tr>

                        <tr>
                            <td colspan="4"><b>Declaration:</b></td>
                        </tr>

                        <tr>
                            <td colspan="4"><?php echo $row['declaration']; ?></td>
                        </tr>

                        <tr>
                            <td colspan="3"><b>Place:</b> <?php echo $row['place']; ?></td>
                            <!-- <td align="left">____________________</td> -->
                        </tr>

                        <!-- <tr>
                            <td colspan="3"><b>Date:</b> <?php echo $row['date']; ?></td>
                            <td align="left">Candidate's Signature</td>
                        </tr> -->



                    </table>
            </tr>
            </td>
            <!--Inner Table Ends-->
        </table>
        <!--Outer Table Starts-->
    <?php
        $con++;
    }
    ?>
</body>

</html>