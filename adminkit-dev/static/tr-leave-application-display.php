<!DOCTYPE html>
<html lang="en">

<head>
<?php
// include '../includes/db_connect.php';

// $sql = "SELECT * FROM leave_applications ORDER BY submitted_at DESC";
// $result = $conn->query($sql);
// ?>
    <?php
    include_once "connection.php";
    ?>
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
            <main class="content">
            <div class="container-fluid p-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Leave Applications</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Teacher</th>
                                    <th>Email</th>
                                    <th>Type</th>
                                    <th>Start</th>
                                    <th>End</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = $result->fetch_assoc()): ?>
                                    <tr>
                                        <td><?= $row["id"]; ?></td>
                                        <td><?= $row["teacher_name"]; ?></td>
                                        <td><?= $row["teacher_email"]; ?></td>
                                        <td><?= $row["leave_type"]; ?></td>
                                        <td><?= $row["start_date"]; ?></td>
                                        <td><?= $row["end_date"]; ?></td>
                                        <td>
                                            <span class="badge bg-<?= ($row["status"] == 'Approved') ? 'success' : (($row["status"] == 'Denied') ? 'danger' : 'warning') ?>">
                                                <?= $row["status"]; ?>
                                            </span>
                                        </td>
                                        <td>
                                            <?php if ($row["status"] == 'Pending'): ?>
                                                <form action="update_status.php" method="POST">
                                                    <input type="hidden" name="id" value="<?= $row["id"]; ?>">
                                                    <button type="submit" name="action" value="Approve" class="btn btn-success btn-sm">Approve</button>
                                                    <button type="submit" name="action" value="Deny" class="btn btn-danger btn-sm">Deny</button>
                                                </form>
                                            <?php else: ?>
                                                <span class="text-muted">Processed</span>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endwhile; ?>
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