<!DOCTYPE html>
<html lang="en">

<head>
<?php
	//include_once "teacher-sidebar.php";
	include_once "connection.php";
	//include_once "teacher-navbar.php";
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
            <form method="POST">
                <div class="mb-3">
                    <label class="form-label">Name:</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email:</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">From Date:</label>
                    <input type="date" name="startdate" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">To Date</label>
                    <input type="date" name="enddate" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Reason:</label>
                    <textarea name="reason" class="form-control" rows="3" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary w-100">Submit Application</button>
            </form>
        </div>
    </div>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $conn->real_escape_string($_POST['name']);
            $email = $conn->real_escape_string($_POST['email']);
            $start_date = $conn->real_escape_string($_POST['startdate']);
            $end_date = $conn->real_escape_string($_POST['enddate']);
            $reason = $conn->real_escape_string($_POST['reason']);
        
            // Check if the teacher exists in the teachers table
            $check_teacher = "SELECT email_address FROM teacher_1 WHERE email_address = '$email'";
            $result = $conn->query($check_teacher);
        
            if ($result->num_rows > 0) {
                // Insert leave request into teacher_leave_application table
                $insert_leave = "INSERT INTO teacher_leave_application (name, teacher_email, start_date, end_date, reason, status)
                                 VALUES ('$name', '$email', '$start_date', '$end_date', '$reason','pending')"; //default is pending
        
                if ($conn->query($insert_leave) === TRUE) {
                    echo "<script>alert('Leave application submitted successfully!');</script>";
                } else {
                    echo "<script>alert('Error: " . $conn->error . "');</script>";
                }
            } else {
                echo "<script>alert('Error: Teacher with this email does not exist!');</script>";
            }
        }    
    ?>
</body>

</html>