<?php
session_start();
include_once "connection.php"; 

if(isset($_SESSION["logged_in"])) {
    header("Location: teacher-index.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<div class='alert alert-danger'>Invalid email format. Please enter a valid email.</div>";
        exit;
    }

    // Query teacher_1 table for login
    $query = "SELECT * FROM teacher_1 WHERE email_address = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($result && mysqli_num_rows($result) > 0) {
        $teacher_data = mysqli_fetch_assoc($result);

        // Directly compare the plain text password (NOT RECOMMENDED)
        if ($password === $teacher_data["password"]) {
            $_SESSION["teacher_id"] = $teacher_data["email_address"];
            $_SESSION["logged_in"] = true;

            // Fetch data from teacher_leave_application table
            $leaveQuery = "SELECT * FROM teacher_leave_application WHERE teacher_email = ?";
            $leaveStmt = mysqli_prepare($conn, $leaveQuery);
            mysqli_stmt_bind_param($leaveStmt, "s", $email);
            mysqli_stmt_execute($leaveStmt);
            $leaveResult = mysqli_stmt_get_result($leaveStmt);

            if ($leaveResult && mysqli_num_rows($leaveResult) > 0) {
                $_SESSION["teacher_history"] = mysqli_fetch_all($leaveResult, MYSQLI_ASSOC); // Store leave data in session
            }

            header("Location: teacher-index.php");
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

    <title>Teacher Login</title>
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
    <h1 class="text-info text-center"><b>Teacher Login</b></h1><br>
    <div class="form-group">
        <input type="email" name="email" class="form-control" placeholder="Enter email address" required>
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
