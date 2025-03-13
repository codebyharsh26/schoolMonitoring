<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords"
		content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/ui-cards.html" />

	<title>Add Marks</title>

	<link href="css/app.css" rel="stylesheet">
	<!-- <link href="css/app.css" rel="stylesheet"> -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="/adminkit-dev/static/css/admin-custom-style.css">

	<style>
		:root {
			--primary-color: #1e2b3a;
			--secondary-color: #f5f7fa;
			--accent-color: #3b82f6;
			--text-color: #333;
			--border-color: #d1d5db;
		}

		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
		}


		.form-container {
			background-color: var(--form-bg);
			border-radius: 0.5rem;
			padding: 1.5rem;
			margin-bottom: 1.5rem;
			box-shadow: var(--card-shadow);
		}

		.form-title {
			font-size: 24px;
			font-weight: 600;
			margin-bottom: 15px;
			color: #1e2b3a;
		}

		.form-description {
			color: #6b7280;
			margin-bottom: 25px;
		}

		.form-section {
			background-color: white;
			border-radius: 8px;
			padding: 20px;
			margin-bottom: 20px;
		}

		.form-section-title {
			font-size: 18px;
			font-weight: 600;
			margin-bottom: 20px;
			color: #1e2b3a;
		}

		.form-row {
			display: flex;
			flex-wrap: wrap;
			margin: 0 -10px 20px;
		}

		.form-group {
			flex: 1;
			min-width: 250px;
			padding: 0 10px;
			margin-bottom: 15px;
		}

		.form-label {
			display: block;
			margin-bottom: 8px;
			font-weight: 500;
		}

		.required::after {
			content: " *";
			color: #ef4444;
		}

		.form-control {
			width: 100%;
			padding: 10px 12px;
			border: 1px solid var(--border-color);
			border-radius: 6px;
			background-color: #f9fafb;
			font-size: 14px;
		}

		.form-control:focus {
			outline: none;
			border-color: var(--accent-color);
			box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2);
		}

		.form-actions {
			display: flex;
			justify-content: flex-end;
			margin-top: 30px;
		}

		.btn {
			padding: 10px 20px;
			font-size: 14px;
			font-weight: 500;
			border-radius: 6px;
			cursor: pointer;
			transition: all 0.2s;
		}

		.btn-primary {
			background-color: var(--accent-color);
			color: white;
			border: none;
		}

		.btn-primary:hover {
			background-color: #2563eb;
		}

		.btn-secondary {
			background-color: white;
			color: #4b5563;
			border: 1px solid #d1d5db;
			margin-right: 10px;
		}

		.btn-secondary:hover {
			background-color: #f9fafb;
		}

		@media (max-width: 768px) {
			.form-group {
				flex: 0 0 100%;
			}
		}
	</style>
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="admin.php">
					<span class="align-middle">schoolAdmin</span>
				</a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Pages
					</li>

					<li class="sidebar-item ">
						<a class="sidebar-link" href="admin.php">
							<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="admin-profile.php">
							<i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
						</a>
					</li>

					<li class="sidebar-header">
						Forms
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="tr-enroll.php">
							<i class="align-middle" data-feather="square"></i> <span class="align-middle">Teacher Enrollment</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="std-enroll.php">
							<i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Student Enrollment</span>
						</a>
					</li>

					<li class="sidebar-item active">
						<a class="sidebar-link" href="add-marks.php">
							<i class="align-middle" data-feather="grid"></i> <span class="align-middle">Add Marks</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="announce.php">
							<i class="align-middle" data-feather="align-left"></i> <span class="align-middle">Announcement</span>
						</a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="activities.php">
							<i class="align-middle" data-feather="align-left"></i> <span class="align-middle">Activities</span>
						</a>
					</li>

					<li class="sidebar-header">
						Monitoring
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="student.php">
							<i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Students</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="teacher.php">
							<i class="align-middle" data-feather="map"></i> <span class="align-middle">Teachers</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="admin-log-out.php">
							<i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Sign Out</span>
						</a>
					</li>
				</ul>
			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
					<i class="hamburger align-self-center"></i>
				</a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="bell"></i>
									<span class="indicator">4</span>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
								<div class="dropdown-menu-header">
									4 New Notifications
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-danger" data-feather="alert-circle"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Update completed</div>
												<div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
												<div class="text-muted small mt-1">30m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-warning" data-feather="bell"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Lorem ipsum</div>
												<div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all notifications</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<!-- Form content starts here -->
			<div class="form-container">
				<h1 class="form-title">Student Marks Entry Form</h1>
				<p class="form-description">Please complete all required fields to record student's academic performance.</p>
				<!-- Form contents go here -->
			</div>
		</div>
	</div>
	<script src="js/app.js"></script>
</body>



</html>