<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school_leave_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM leave_applications ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Leave Applications</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">Leave Applications</h2>
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Teacher Name</th>
                    <th>Email</th>
                    <th>Leave Date</th>
                    <th>Days</th>
                    <th>Reason</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['teacher_name'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td><?= $row['leave_date'] ?></td>
                    <td><?= $row['num_days'] ?></td>
                    <td><?= $row['reason'] ?></td>
                    <td><span
                            class="badge bg-<?= ($row['status'] == 'Pending') ? 'warning' : ($row['status'] == 'Approved' ? 'success' : 'danger') ?>">
                            <?= $row['status'] ?>
                        </span></td>
                    <td>
                        <?php if ($row['status'] == 'Pending'): ?>
                        <a href="update_status.php?id=<?= $row['id'] ?>&status=Approved"
                            class="btn btn-success btn-sm">Approve</a>
                        <a href="update_status.php?id=<?= $row['id'] ?>&status=Rejected"
                            class="btn btn-danger btn-sm">Reject</a>
                        <?php else: ?>
                        <?= $row['status'] ?>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>

</html>

<?php $conn->close(); ?>
<?php
#Backend to Approve/Reject Leave Application
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school_leave_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];
$status = $_GET['status'];

$sql = "UPDATE leave_applications SET status='$status' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: admin_panel.php");
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>