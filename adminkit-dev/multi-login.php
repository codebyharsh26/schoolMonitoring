<?php
// session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bnpss";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}

// Redirect if already logged in
if (isset($_SESSION['user_id'], $_SESSION['user_type'])) {
    $redirects = [
        "student" => "/schoolMonitoring/adminkit-dev/student/student-index.php",
        "teacher" => "../teacher/teacher-index.php",
        "admin"   => "../static/admin.php"
    ];
    if (isset($redirects[$_SESSION['user_type']])) {
        header("Location: " . $redirects[$_SESSION['user_type']]);
        exit();
    }
}

$error_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $identifier = trim($_POST['identifier']);
    $password   = $_POST['password'];
    $user_type  = $_POST['user_type'];

    $valid_users = [
        "student" => ["table" => "student_1", "column" => "father_phone_number"],
        "teacher" => ["table" => "teacher_1", "column" => ["phone_number", "email_address"]],
        "admin"   => ["table" => "admin_1", "column" => "username"]
    ];

    if (!isset($valid_users[$user_type])) {
        die("Invalid user type.");
    }

    $table = $valid_users[$user_type]["table"];
    $columns = $valid_users[$user_type]["column"];

    if (is_array($columns)) {
        $sql = "SELECT id, password FROM $table WHERE {$columns[0]} = ? OR {$columns[1]} = ?";
    } else {
        $sql = "SELECT id, password FROM $table WHERE $columns = ?";
    }

    $stmt = $conn->prepare($sql);
    if (is_array($columns)) {
        $stmt->bind_param("ss", $identifier, $identifier);
    } else {
        $stmt->bind_param("s", $identifier);
    }

    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $stored_password);
        $stmt->fetch();

        if ($password === $stored_password) {
            $_SESSION['user_id'] = $id;
            $_SESSION['user_type'] = $user_type;

            $redirects = [
                "student" => "adminkit-dev/student/student-index.php",
                "teacher" => "adminkit-dev/teacher/teacher-index.php",
                "admin"   => "adminkit-dev/static/admin.php"
            ];
            header("Location: " . $redirects[$user_type]);
            exit();
        }
    }

    $error_message = "Invalid credentials!";
    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login - School Portal</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
    * {
        box-sizing: border-box;
    }

    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        background: #f4f7fa;
        font-family: 'Inter', sans-serif;
        position: relative;
    }

    /* Dropdown attached flush to the left with curvy right side */
    .dropdown {
        position: absolute;
        top: 50px;
        left: 0;
        background: #1877f2;
        padding: 10px 20px;
        border-radius: 0px 24px 24px 0px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .dropdown select {
        padding: 12px;
        border: none;
        border-radius: 10px;
        background: #1877f2;
        color: #fff;
        font-weight: bold;
        cursor: pointer;
        outline: none;
        font-size: 16px;
    }

    .login-container {
        padding: 20px;
        box-sizing: border-box;
        background: white;
        margin: 3rem;
        border-radius: 16px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
        text-align: center;
        width: 100%;
        max-width: 25rem;
    }

    .login-container input {
        width: 100% !important;
    }

    .form-group {
        margin-bottom: 1.5rem;
        text-align: left;
    }

    .form-group input {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 8px;
    }

    .show-hide-btn {
        margin-left: 10px;
        padding: 10px;
        background: #4e54c8;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .login-btn {
        background: #4e54c8;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        width: 100%;
    }

    .error-message {
        color: red;
        font-weight: bold;
    }

    .form-container {
        width: 100%;
    }
    </style>
</head>

<body>
    <div class="dropdown">
        <select id="loginType" name="loginType">
            <option value="student"
                <?= (isset($_POST['user_type']) && $_POST['user_type'] === 'student') ? 'selected' : '' ?>>Student Login
            </option>
            <option value="teacher"
                <?= (isset($_POST['user_type']) && $_POST['user_type'] === 'teacher') ? 'selected' : '' ?>>Teacher Login
            </option>
            <option value="admin"
                <?= (isset($_POST['user_type']) && $_POST['user_type'] === 'admin') ? 'selected' : '' ?>>Admin Login
            </option>
        </select>
    </div>

    <div class="login-container">
        <h2 id="formTitle">
            <?php
            $userType = $_POST['user_type'] ?? 'student';
            echo ucfirst($userType) . ' Login';
            ?>
        </h2>

        <?php if (isset($error_message)) {
            echo "<p class='error-message'>$error_message</p>";
        } ?>

        <form action="" method="POST">
            <div class="form-container">
                <input type="hidden" id="user_type" name="user_type"
                    value="<?= htmlspecialchars($_POST['user_type'] ?? 'student') ?>">
                <div class="form-group">
                    <label for="identifier" id="identifierLabel">
                        <?php
                        if ((($_POST['user_type'] ?? 'student')) === 'teacher') {
                            echo 'Phone Number or Email:';
                        } elseif ((($_POST['user_type'] ?? 'student')) === 'admin') {
                            echo 'Admin Username:';
                        } else {
                            echo 'Phone Number:';
                        }
                        ?>
                    </label>
                    <input type="text" id="identifier" name="identifier" required
                        value="<?= htmlspecialchars($_POST['identifier'] ?? '') ?>">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="login-btn">Login</button>
            </div>
        </form>
    </div>

    <script>
    // Update form title and identifier label on dropdown change.
    document.getElementById('loginType').addEventListener('change', function() {
        var loginType = this.value;
        document.getElementById('formTitle').innerText = loginType.charAt(0).toUpperCase() + loginType.slice(
            1) + ' Login';
        document.getElementById('user_type').value = loginType;

        var identifierLabel = document.getElementById('identifierLabel');
        var identifierField = document.getElementById('identifier');

        if (loginType === 'teacher') {
            identifierLabel.innerText = 'Phone Number or Email:';
            identifierField.placeholder = 'Phone Number or Email';
        } else if (loginType === 'admin') {
            identifierLabel.innerText = 'Admin Username:';
            identifierField.placeholder = 'Admin Username';
        } else {
            identifierLabel.innerText = 'Phone Number:';
            identifierField.placeholder = 'Phone Number';
        }
    });

    // Toggle password visibility.
    function togglePassword() {
        var passwordField = document.getElementById("password");
        var toggleBtn = document.querySelector(".show-hide-btn");
        if (passwordField.type === "password") {
            passwordField.type = "text";
            toggleBtn.innerText = "Hide";
        } else {
            passwordField.type = "password";
            toggleBtn.innerText = "Show";
        }
    }
    </script>
</body>

</html>