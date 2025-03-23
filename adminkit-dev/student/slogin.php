<?php
    session_start();

    if(isset($_SESSION["result"])) {
        header("Location: student-index.php");
    }
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <title>Login Form</title>

    <style>
        body {
            max-width: 600px;
            margin: 40px auto;
            padding: 50px;
            box-shadow: 0 0 50px #14A44D;
        }
        button {
            margin-bottom: 40px;
        }
        .password-img {
            width: 30px;
            cursor: pointer;
            position: relative;
            left: 90%;
            transform: translateY(-111%);
        }
    </style>

</head>
<body>
<form method="post" class="form1">
    <h1 class="text-success" align="center"><b>Login Form</b></h1><br>
        
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <input type="text" name="login" class="form-control" id="loginInput" placeholder="Enter email or phone number">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="mb-2">
                <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
                <img src="hidden.png" class="password-img" id="toggle-password" onclick="togglePassword()">
            </div>
        </div>
        <div class="container text-center">
            <button type="submit" name="submit" class="btn btn-success"><a href="user.php" class="text-light"><b>Login</b></a></button>
        </div>
        <div><p>Not Registered yet?<a href="reg.php" class="text-info"><b><u>click here</u></b></a></p></div>
</form>
    <?php

    include_once "connection.php";
        
    if (isset($_POST['submit'])) {
        $login = $_POST['login'];
        $password = $_POST['password'];

        // Check if the input is an email or phone number        
        if (filter_var($login, FILTER_VALIDATE_EMAIL)) {
            // It's an email, validate using email
            $fpn = $login;
            $isEmail = true;
        } elseif (preg_match('/^[0-9]{10}$/', $login)) {
            // It's a phone number (assuming 10-digit format), validate using phone number
            $fpn = $login;
            $isEmail = false;
        } else {
            echo "<div class='alert alert-danger'>Invalid input. Please enter a valid email or phone number.</div>";
            exit;
        }

        if ($isEmail) {
            $query = "SELECT * FROM student_1 WHERE father_phone_number = '$fpn' AND password = '$password'";
        }

        // Execute the query and check if the user exists
        $result = mysqli_query($conn, $query);
        // In your login form processing (where you currently check if login is successful)
if (mysqli_num_rows($result) > 0) {
    // Fetch the user data
    $teacher_data = mysqli_fetch_assoc($result);
    
    // Start the session (though you already have session_start() at the top)
    $_SESSION["student_id"] = $teacher_data["id"]; // Assuming you have an id column
    $_SESSION["logged_in"] = true;
    
    header("Location: student-index.php");
    exit;
} else {
            // User not found, show error
            echo "<div class='alert alert-danger'>Invalid user. Please try again.</div>";
        }
    }
?>

<script>
    function togglePassword() {
        const passwordField = document.getElementById('password');
        const toggleIcon = document.getElementById('toggle-password');

        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            toggleIcon.src = 'eye.png';
        } else {
            passwordField.type = 'password';
            toggleIcon.src = 'hidden.png';
        }
    }
</script>

</body>
</html>
