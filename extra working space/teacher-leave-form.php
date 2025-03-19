<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "school_leave_db";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Debugging: Check if form is submitted via POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "Request method is POST. Processing form...<br>";

        if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['date']) && isset($_POST['num_days']) && isset($_POST['reason'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $date = $_POST['date'];
            $num_days = $_POST['num_days'];
            $reason = $_POST['reason'];

            $sql = "INSERT INTO leave_applications (teacher_name, email, leave_date, num_days, reason) 
                VALUES ('$name', '$email', '$date', '$num_days', '$reason')";

            if ($conn->query($sql) === TRUE) {
                echo "Leave application submitted successfully!";
            } else {
                echo "Database Error: " . $conn->error;
            }
        } else {
            echo "Error: Missing form data!";
        }
    } else {
        echo "Error: Invalid request! Received method: " . $_SERVER["REQUEST_METHOD"];
    }

    $conn->close();
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Leave Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">Teacher Leave Application</h2>
        <div class="card p-4 shadow-lg">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <!-- // Compare this snippet from extra%20working%20space/admin-leave-application-display.php: -->
                <div class="mb-3">
                    <label class="form-label">Name:</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email:</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Leave Date:</label>
                    <input type="date" name="date" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Number of Days:</label>
                    <input type="number" name="num_days" class="form-control" min="1" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Reason:</label>
                    <textarea name="reason" class="form-control" rows="3" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary w-100">Submit Application</button>
            </form>
        </div>
    </div>
</body>

</html>