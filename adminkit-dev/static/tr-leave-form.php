<!-- <?php
include '../includes/db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['teacher_name'];
    $email = $_POST['teacher_email'];
    $leave_type = $_POST['leave_type'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $reason = $_POST['reason'];

    $sql = "INSERT INTO leave_applications (teacher_name, teacher_email, leave_type, start_date, end_date, reason, status) 
            VALUES ('$name', '$email', '$leave_type', '$start_date', '$end_date', '$reason', 'Pending')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Leave Application Submitted Successfully'); window.location.href='leave_application.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Teacher Leave Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/adminkit@2.1.0/dist/css/app.css" rel="stylesheet">
</head>
<style>
/* Light Background */
body {
    background-color: #ffffff; /* White Background */
    font-family: 'Arial', sans-serif;
    color: #1e293b; /* Dark text for readability */
}

/* Wrapper Layout */
.wrapper {
    display: flex;
}

/* Main Content */
.main {
    flex-grow: 1;
    padding: 20px;
    background-color: #f8f9fa; /* Slightly off-white for contrast */
    min-height: 100vh;
}

/* Card Styling */
.card {
    background-color: #ffffff; /* White Card */
    border-radius: 10px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    border: 1px solid #ddd;
}

/* Dark-Themed Card Header */
.card-header {
    background-color: #1e293b; /* Dark Blue-Grey */
    color: white;
    font-weight: bold;
    text-align: center;
    border-radius: 10px 10px 0 0;
}

/* Card Body */
.card-body {
    padding: 20px;
}

/* Form Labels */
.form-label {
    font-weight: bold;
    color: #333; /* Darker text for visibility */
}

/* Form Inputs */
.form-control {
    border-radius: 5px;
    border: 1px solid #ccc;
    padding: 10px;
    background-color: #f8f9fa; /* Light grey */
    color: #333;
}

.form-control:focus {
    background-color: #ffffff;
    border-color: #1e293b;
    outline: none;
    box-shadow: 0 0 5px rgba(30, 41, 59, 0.5);
}

/* Dark-Themed Submit Button */
.btn-primary {
    background-color: #1e293b; /* Dark Blue-Grey */
    border: none;
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border-radius: 5px;
    transition: 0.3s;
    color: #ffffff;
}

.btn-primary:hover {
    background-color: #334155; /* Slightly lighter for hover effect */
}

/* Responsive Design */
@media (max-width: 768px) {
    .main {
        margin-left: 0;
    }
}



</style>
<body>

<div class="wrapper">
    <!-- <?php include '../includes/sidebar.php'; ?> -->
    <div class="main">
        <!-- <?php include '../includes/topbar.php'; ?> -->

        <main class="content">
            <div class="container-fluid p-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Apply for Leave</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST">
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="teacher_name" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="teacher_email" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Leave Type</label>
                                <select name="leave_type" class="form-control" required>
                                    <option value="Sick Leave">Sick Leave</option>
                                    <option value="Casual Leave">Casual Leave</option>
                                    <option value="Emergency Leave">Emergency Leave</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Start Date</label>
                                <input type="date" name="start_date" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">End Date</label>
                                <input type="date" name="end_date" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Reason</label>
                                <textarea name="reason" class="form-control" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit Leave Application</button>
                        </form>
                    </div>
                </div>
            </div>
            <footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
						</div>
						<div class="col-6 text-end">
							<p class="mb-0"><strong>schoolAdmin</strong></p>
						</div>
					</div>
				</div>
			</footer>
        </main>
    </div>
</div>

</body>
</html>
