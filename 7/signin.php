<?php
    include 'connect.php';
?>

<!doctype html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Sign Up</title>
</head>
<body>
    <h1 style="text-align:center;">-- LogIn Form--</h1>

    <div class="container mt-5" style="">
        <form action="signin.php" method="post" class="" style="margin: 25px 50px 75px 100px;">

            <div class="form-group mb-3">
                <label for="user" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Enter your email" name="username" autocomplete="off" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter your Password"
                name="password" required>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name"
                name="name" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email"
                name="email" required>
            </div>

            <div class="text-center" style="margin: 25px 50px 75px 100px;">
                <button type="submit" class="btn btn-info w-50" name="submit">LogIn</button>                    
            </div>
        </form>
    </div>

    </body>
</html>
<?php

    $success=0;
    $invalid=0;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['submit'])) {
            // The submit button is clicked
            $username = $_POST['username'];
            $password = $_POST['password'];
            $name=$_POST['name'];
            $email=$_POST['email'];
            // Do something with the submitted data

            $sql = "select * from registration where username='$username' and password='$password'";
            $result = mysqli_query($conn, $sql);

            if ($result) 
            {
                $num = mysqli_num_rows($result); // Apply mysqli_num_rows to the result object

                if ($num > 0) 
                {
                    //echo "User already exists!";
                    $success=1;
                    //session_start();
                    //$_SESSION['username']=$username;
                    //header('location:home.php');

                } 
                else 
                {
                    $invalid=1;
                }
            }
        }
    }


    
    if ($invalid) {
        # code...
        echo
        '<div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
            <div>
                Invalid details, cannot login.
            </div>
        </div>';

    }
    if ($success) {
        # code...

        echo'<div class="alert alert-success d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <div>
                Successfully LogIn!!                
            </div>
        </div>';

    }



    ?>
