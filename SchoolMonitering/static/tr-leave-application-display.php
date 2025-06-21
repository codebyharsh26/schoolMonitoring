<?php
session_start();
include_once "connection.php";

$query = "SELECT * FROM teacher_leave_application ORDER BY id DESC"; 
$result = $conn->query($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php
// include '../includes/db_connect.php';

// $sql = "SELECT * FROM leave_applications ORDER BY submitted_at DESC";
// $result = $conn->query($sql);
// ?>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/" />

    <title>School Monitoring System</title>

    <link href="css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/schoolMonitoring/adminkit-dev/static/css/card-direction.css">
    <link rel="stylesheet" href="/adminkit-dev/static/css/admin-custom-style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/adminkit@2.1.0/dist/css/app.css" rel="stylesheet">
</head>
<body>
    <div class="wrapper p-0 m-0">
        <div class="sidebar">
            <?php
            include_once("sidebar.php");
            ?>
        </div>
        <div class="main">
            <?php
            include_once("navbar.php");
            ?>
            <main class="content p-4">
                <div class="container-fluid">
                <h1 class="h3 mb-3"><strong class="h1">Leave Application</strong> Form</h1>
                <div class="card">
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Reason</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                <tbody>
   <?php
    include_once "connection.php"; // Ensure correct path

    $query = "SELECT * FROM teacher_leave_application order by id DESC";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['teacher_email']}</td>
                    <td>{$row['start_date']}</td>
                    <td>{$row['end_date']}</td>
                    <td>{$row['reason']}</td>
                    <td>{$row['status']}</td>
                    <td>";
                    if (strtolower($row['status']) == "pending") {
                        // Show active buttons if the leave is pending
                        echo "<a href='update_leave_status.php?id={$row['id']}&status=Accepted' class='btn btn-success btn-sm'>Approve</a>
                              <a href='update_leave_status.php?id={$row['id']}&status=Rejected' class='btn btn-danger btn-sm'>Reject</a>";
                    } else {
                        // Set disabled styles and show correct button
                        $disabledStyle = "cursor: not-allowed; opacity: 0.7;";
        
                        if (strtolower($row['status']) == "accepted") {
                            echo "<button class='btn btn-success btn-sm' style='background-color: #28a745; border-color: #28a745; color: white; $disabledStyle' disabled>Approved</button>";
                        } elseif (strtolower($row['status']) == "rejected") {
                            echo "<button class='btn btn-danger btn-sm' style='background-color: #dc3545; border-color: #dc3545; color: white; $disabledStyle' disabled>Rejected</button>";
                        }
                    }
        
                    echo "</td></tr>";
                }
            } else {
                echo "<tr><td colspan='8' class='text-center'>No leave applications found</td></tr>";
            }
?>
</tbody>

            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </main>
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
        </div>
    </div>
    <script src="js/app.js"></script>
</body>

</html>