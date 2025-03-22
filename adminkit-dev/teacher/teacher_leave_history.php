<?php
include_once "connection.php"; // Adjust the path as needed

// Set a default teacher email
$default_teacher_email = "rajesh.patel@example.com"; // Change this to any teacher's email in your database

// Fetch leave history for the default teacher
$query = "SELECT * FROM teacher_leave_application WHERE teacher_email = '$default_teacher_email' ORDER BY id DESC";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Leave History</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Leave History of <?php echo $default_teacher_email; ?></h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Reason</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['start_date'] . "</td>";
                        echo "<td>" . $row['end_date'] . "</td>";
                        echo "<td>" . $row['reason'] . "</td>";
                        echo "<td>";
                        if ($row['status'] == "Approved") {
                            echo "<span class='badge bg-success'>Approved</span>";
                        } elseif ($row['status'] == "Rejected") {
                            echo "<span class='badge bg-danger'>Rejected</span>";
                        } else {
                            echo "<span class='badge bg-warning text-dark'>Pending</span>";
                        }
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5' class='text-center'>No leave applications found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
