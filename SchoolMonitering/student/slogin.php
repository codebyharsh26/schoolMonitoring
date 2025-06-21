<?php
session_start();
include_once "connection.php"; 

if (isset($_SESSION["logged_in"])) {
    header("Location: student-index.php"); // Redirect to student dashboard
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = trim($_POST['father_phone_number']);
    $password = trim($_POST['password']);

    // Validate phone number format (10 digits)
    if (!preg_match("/^[0-9]{10}$/", $phone)) {
        echo "<div class='alert alert-danger'>Invalid phone number. Please enter a valid 10-digit number.</div>";
        exit;
    }

    // Query student_1 table for login using father's phone number
    $query = "SELECT * FROM student_1 WHERE father_phone_number = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "s", $phone);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($result && mysqli_num_rows($result) > 0) {
        $student_data = mysqli_fetch_assoc($result);

        // Directly compare the plain text password (NOT RECOMMENDED for production)
        if ($password === $student_data["password"]) {
            $_SESSION["student_id"] = $student_data["father_phone_number"];
            $_SESSION["logged_in"] = true;

            header("Location: student-index.php"); // Redirect after successful login
            exit;
        } else {
            echo "<div class='alert alert-danger'>Incorrect password. Try again.</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>User not found. Please try again.</div>";
    }

    mysqli_stmt_close($stmt);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <title>Student Login</title>
    <style>
        form {
            max-width: 600px;
            margin: 40px auto;
            padding: 50px;
            border-radius: 10px;
            box-shadow:0 0 10px rgb(138, 131, 131);
        }
        .password-img {
            width: 30px;
            cursor: pointer;
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
        }
        .password-container {
            position: relative;
        }
    </style>
</head>
<body>
<form method="post" class="mt-5">
    <h1 class="text-info text-center"><b>Student Login</b></h1><br>
    
    <div class="form-group">
        <input type="text" name="father_phone_number" class="form-control" placeholder="Enter 10-digit mobile number" required>
    </div>
    
    <div class="form-group password-container">
        <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" required>
        <img src="hidden.png" class="password-img" id="toggle-password" onclick="togglePassword()">
    </div>
    
    <div class="text-center mt-5">
        <button type="submit" class="btn btn-info px-3"><b>Login</b></button>
    </div>
</form>

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
